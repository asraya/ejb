<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryTestModel extends Model
{
    protected $table = "category_test";
    protected $primaryKey = 'id_category_test';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function getBank($id = false)
    {        
        if($id === false){
            return $this->table('category_test')
            ->get()
            ->getResultArray();
        } else {
            return $this->table('category_test')
                        ->where('', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
    public function listing()
	{
		$this->select('*');
		$this->orderBy('id_category_test','DESC');
		$query = $this->get();
		return $query->getResultArray();
	}
}