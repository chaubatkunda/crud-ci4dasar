<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'testimonial';
    protected $primaryKey = 'id_testimonial';

    // protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['Field1', 'Field2'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
    public function insertTestimonial($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function getTestimonial()
    {
        return $this->table($this->table)->get()->getResult();
    }
}
