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
    // public function getBank($id)
    // {
    //      return $this->table('tb_soal_teori')
    //      ->join('users','users.id=tb_soal_teori.id_category', 'left')
    //      ->join('category_test','category_test.id_category_test=tb_soal_teori.id_category')
	//  ->where('tb_soal_teori.id_category', $id)
    //     // ->orderBy("RAND ()")
    //      ->get()
	// 	 ->getResultArray();
    // }
    public function getBank($id, $polda_id)
    {
         return $this->table('tb_soal_teori')
         ->join('users','users.category_id=tb_soal_teori.id_category', 'left')
         ->join('m_ujian','m_ujian.id_polda_test=users.polda_id', 'left')
         ->join('category_test','category_test.id_category_test=tb_soal_teori.id_category')
         ->where('users.id', $id)
         ->where('m_ujian.id_polda_test', $polda_id)
         ->orderBy("RAND ()")
         ->get()
		 ->getResultArray();
    }
    
   
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