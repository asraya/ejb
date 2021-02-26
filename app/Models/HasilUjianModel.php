<?php namespace App\Models;

use CodeIgniter\Model;

class HasilUjianModel extends Model
{
    protected $table = "h_ujian";
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function getHasilChoice($id = false)
    {        
        if($id === false){
            return $this->table('h_ujian')
            ->get()
            ->getResultArray();
        } else {
            return $this->table('h_ujian')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
    public function saveChoice($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}