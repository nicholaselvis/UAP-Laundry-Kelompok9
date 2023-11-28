<?php

namespace App\Models;

use CodeIgniter\Model;

class KasirModel extends Model
{
<<<<<<< HEAD
    protected $table            = 'mesin_cuci';
    protected $primaryKey       = 'id_mesin';
=======
    protected $table            = 'daftar_kasir';
    protected $primaryKey       = 'id';
>>>>>>> 0173998503fdcec80d63e5159007c9762439c165
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
<<<<<<< HEAD
    protected $allowedFields    = [];
=======
    protected $allowedFields    = ['id', 'nama', 'umur', 'jeniskelamin'];
>>>>>>> 0173998503fdcec80d63e5159007c9762439c165

    // Dates
    protected $useTimestamps = false;
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

<<<<<<< HEAD
    public function getAllMesin()
    {
            return $this->findAll();
=======
    public function saveKasir($data){
        $this->insert($data);
    }

    public function getKasir($id = null)
    {
        if ($id != null) {
            return $this->select(['id', 'nama', 'umur', 'jeniskelamin'])->find($id);
        }
        return $this->select(['id', 'nama', 'umur', 'jeniskelamin'])->findAll();
    }

    public function updateKasir($data, $id){
        return $this->update($id, $data);
    }

    public function deleteKasir($id){
        return $this->delete($id);
>>>>>>> 0173998503fdcec80d63e5159007c9762439c165
    }
    
}
