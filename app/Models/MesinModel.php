<?php

namespace App\Models;

use CodeIgniter\Model;

class MesinModel extends Model
{
    protected $table            = 'mesin_cuci';
    protected $primaryKey       = 'id_mesin';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['no_mesin', 'harga'];

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

    public function saveMesin($data){
        $this->insert($data);
    }

    public function getMesin($id = null)
    {
        if ($id != null) {
            return $this->select(['id_mesin', 'no_mesin', 'harga'])->find($id);
        }
        return $this->select(['id_mesin', 'no_mesin', 'harga'])->findAll();
    }

    public function updateMesin($data, $id){
        return $this->update($id, $data);
    }

    public function deleteMesin($id){
        return $this->delete($id);
    }
    public function getAllMesin(){
        return $this->findAll();
    }


}