<?php

namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Expr\FuncCall;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi_laundry';
    protected $primaryKey       = 'id_transaksi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllUser(){
        return $this->findAll();
    }
    public function createTransaksi($data){
        $this->insert($data);
    }
    public function getTransaksi($id=null){
        if($id != null){
            return $this->select('transaksi_laundry.*')->find($id);
        }
        return $this->select('transaksi_laundry.*')->findAll();
    }
    public function getUserTransaksi($id){
        // if($id != null){
            // return $this->db->table('transaksi_laundry')->where('id_mesin', $id)->get()->getResultArray();
        // }
        // return $this->findAll();
        // return $this->where('id_customer', $id)->findAll();
        // return $this->select('transaksi_laundry.*, customer.id_customer')->join('customer', 'customer.id_customer = transaksi_laundry.id_customer')->findAll();
  
            return $this->select('transaksi_laundry.*, mesin_cuci.id_mesin')->join('mesin_cuci', 'mesin_cuci.id_mesin=transaksi_laundry.id_mesin')->find($id);
            // return $this->db->table('transaksi_laundry')->where('id_mesin', $id)->get()->getResultArray();  
        // return $this->select('transaksi_laundry.*,mesin_cuci.no_mesin')->join('mesin_cuci','mesin_cuci.id_mesin = mesin_cuci.id_mesin')->find($id);
        // return $this->select('user.*, kelas.nama_kelas')->join('kelas', 'kelas.id=user.id_kelas')->findAll();
    }
    public function getTransaksiByTanggal($tanggal){
        return $this->where('tanggal_booking', $tanggal)->findAll();
    }
    public function updateTransaksi($data, $id){
        return $this->update($id, $data);
    }
    public function deleteTransaksi($id){
        return $this->delete($id);
    }
}