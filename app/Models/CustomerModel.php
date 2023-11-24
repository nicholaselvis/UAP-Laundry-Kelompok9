<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'customer';
    protected $primaryKey       = 'id_customer';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_customer', 'no_wa'];

    // Dates
    protected $useTimestamps = false; // Change this to true if you want to use timestamps
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

    public function getAllCustomers()
    {
        return $this->findAll();
    }

    public function createCustomer($data)
    {
        $this->insert($data);
    }

    public function getCustomer($id = null)
    {
        if ($id != null) {
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function updateCustomer($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteCustomer($id)
    {
        return $this->delete($id);
    }
}
