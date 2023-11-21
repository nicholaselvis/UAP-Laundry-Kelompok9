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
    protected $allowedFields    = ['id_customer', 'id_jenis_layanan', 'kapasitas_pesanan', 'total_transaksi','tanggal_booking','waktu'];

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
        return $this->where('id_customer', $id)->findAll();
    }
    public function updateTransaksi($data, $id){
        return $this->update($id, $data);
    }
    public function deleteTransaksi($id){
        return $this->delete($id);
    }
}