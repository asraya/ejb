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
    public function insert_dataskta($data)
    {
        return $this->db->table('upload_kta')->insert($data);
    }
    public function insert_dataktp($data)
    {
        return $this->db->table('upload_ktp')->insert($data);
    }
    public function insert_datasim($data)
    {
        return $this->db->table('upload_sim')->insert($data);
    }
    public function insert_datafoto($data)
    {
        return $this->db->table('upload_foto')->insert($data);
    }
    public function insert_datacv($data)
    {
        return $this->db->table('upload_cv')->insert($data);
    }
    public function insert_datavid($data)
    {
        return $this->db->table('upload_video')->insert($data);
    }
    public function getDokumen()
    {
        $builder = $this->db->table('upload');
        return $builder->get();
    }
    public function updateKta($data, $id)
    {
        $query = $this->db->table('upload')->update($data, array('id' => $id));
        return $query;
    }
}