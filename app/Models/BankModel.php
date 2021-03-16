<?php namespace App\Models;

use CodeIgniter\Model;

class BankModel extends Model
{
    protected $table = "tb_soal_teori";
    protected $primaryKey = 'id_soal';
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    
    
    public function getBankInput($id = false)
    {        
        if($id === false){
            return $this->table('tb_soal_teori')
            ->get()
            ->getResultArray();
        } else {
            return $this->table('tb_soal_teori')
                        ->where('id_soal', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
    public function getBank($id)
    {
         return $this->table('tb_soal_teori')
         ->join('users','users.id=tb_soal_teori.category_id')
         ->join('category_test','category_test.id_category_test=tb_soal_teori.category_id')
		 ->where('tb_soal_teori.category_id', $id)
         ->orderBy("RAND ()")
         ->get()
		 ->getResultArray();
    }
    // public function getBank($id)
    // {
    //      return $this->table('tb_soal_teori')
    //      ->join('category_test','category_test.id_category_test=tb_soal_teori.id_soal', 'left')
    //      ->join('users','users.category_id=category_test.category_id')
	// 	 ->where('users.category_id', $id)
    //      ->get()
	// 	 ->getResultArray();
    // }
   
    public function saveSoal($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_Soal($data, $id_soal)
    {
        return $this->db->table($this->table)->update($data, ['id_soal' => $id_soal]);
    }
    public function delete_Soal($id_soal)
    {
        return $this->db->table($this->table)->delete(['id_soal' => $id_soal]);
    }
}