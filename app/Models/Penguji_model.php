<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Penguji_model extends Model
{
     
    public function getCategory()
    {
        $builder = $this->db->table('category');
        return $builder->get();
    }
 
    public function getPenguji()
    {
        $builder = $this->db->table('penguji');
        return $builder->get();
    }
 
    public function savePenguji($data){
        $query = $this->db->table('penguji')->insert($data);
        return $query;
    }
 
    public function updatePenguji($data, $id)
    {
        $query = $this->db->table('penguji')->update($data, array('penguji_id' => $id));
        return $query;
    }
 
    public function deletePenguji($id)
    {
        $query = $this->db->table('penguji')->delete(array('penguji_id' => $id));
        return $query;
    } 
 
   
}