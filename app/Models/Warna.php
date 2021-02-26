<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Warna extends Model
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
 
    public function saveW($data){
        $query = $this->db->table('warna')->insert($data);
        return $query;
    }
}