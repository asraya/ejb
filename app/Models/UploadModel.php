<?php namespace App\Models;

use CodeIgniter\Model;

class UploadModel extends Model
{
    protected $table = "upload";
    protected $primaryKey = 'id';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
public function insert_data($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}