<?php namespace App\Models;

use CodeIgniter\Model;

class HasilUjianModel extends Model
{
    protected $table = "h_ujian";
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // public function getHasilChoice($id = false)
    // {        
    //     if($id === false){
    //         return $this->table('h_ujian')
    //         ->get()
    //         ->getResultArray();
    //     } else {
    //         return $this->table('h_ujian')
    //                     ->where('id', $id)
    //                     ->get()
    //                     ->getRowArray();
    //     }   
    // }
    // public function getHasilChoicep2()
    // {
    //      return $this->table('users')
    //      ->join('users','users.nrp=h_ujian.user_id')
    //      ->join('reg_provinces','reg_provinces.id=users.polda_id')
    //      ->join('category_test','category_test.id_category_test=users.category_id')
    //      ->where('users.category_id', 1)
    //      ->get()->getResultArray();
    // }
    public function delete_peserta($id)
    {
        return $this->db->table($this->table)->delete(['id_ujian' => $id]);
    }
    public function savePraktik($data){
     $query = $this->db->table('h_ujian_praktik')->insert($data);
     return $query;
 }
 public function saveWawancara($data){
     $query = $this->db->table('h_ujian_wawancara')->insert($data);
     return $query;
 }
    public function getHasilChoice()
    {
         return $this->table('h_ujian')
         ->join('users','users.nrp=h_ujian.user_id')
         ->join('category_test','category_test.id_category_test=h_ujian.ujian_id')
         ->get()->getResultArray();
    }
    public function getBankWawancara()
    {
         return $this->db->table('h_ujian')
         ->join('users','users.nrp=h_ujian.user_id')
         ->join('reg_provinces','reg_provinces.id=users.polda_id', 'left')
         ->join('h_ujian_praktik','h_ujian_praktik.user_id=h_ujian.user_id', 'left')
         ->join('h_ujian_wawancara','h_ujian_wawancara.user_id=h_ujian.user_id', 'left')
         ->join('category_test','category_test.id_category_test=h_ujian.ujian_id')
         ->get()->getResultArray();
    }
    public function getHasilChoicep2()
    {
         return $this->table('h_ujian')
         ->join('users','users.nrp=h_ujian.user_id')
         ->join('reg_provinces','reg_provinces.id=users.polda_id', 'left')
         ->join('h_ujian_praktik','h_ujian_praktik.user_id=h_ujian.user_id', 'left')
         ->join('category_test','category_test.id_category_test=h_ujian.ujian_id')
         ->where('users.category_id', 1)
         ->get()->getResultArray();
    }
    public function getHasilChoicep1()
    {
         return $this->table('h_ujian')
         ->join('users','users.nrp=h_ujian.user_id')
         ->join('reg_provinces','reg_provinces.id=users.polda_id', 'left')
         ->join('h_ujian_praktik','h_ujian_praktik.user_id=h_ujian.user_id', 'left')
         ->join('category_test','category_test.id_category_test=h_ujian.ujian_id')         
         ->where('users.category_id', 2)
         ->get()->getResultArray();
    }
    public function listing($id)
    {
         return $this->table('h_ujian')
         ->join('users','users.nrp=h_ujian.id_ujian', 'left')
         ->join('tb_soal_teori','tb_soal_teori.id_soal=h_ujian.id_ujian', 'left')
		 ->where('h_ujian.id_ujian', $id)
         ->get()
         ->getResultArray();
    }
    public function listingpraktikmotor($id)
    {
         return $this->table('h_ujian_praktik')
         ->join('users','users.nrp=h_ujian_praktik.id_ujian_praktik', 'left')
         ->join('tb_soal_teori','tb_soal_teori.id_soal=h_ujian_praktik.id_ujian_praktik', 'left')
		 ->where('h_ujian_praktik.id_ujian_praktik', $id)
         ->get()
         ->getResultArray();
    }
    // public function listing_kunci_jawaban($id)
    // {
    //     return $this->
    // }
    
    // public function getAnswer(){

    //     return $this->db->table('tb_soal_teori')
    //     ->get()
    //     ->getResultArray();
    // }

    public function getAnswer($id){

        return $this->db->table('tb_soal_teori')
        // ->select('jawaban')
        ->where('id_category', $id)
        ->get()
        ->getResultArray();
    }
    

    public function getGuidelinesById ($user_id)
    {
        return $this->db->table('h_ujian', array('user_id'=>$user_id));
         
    }
    public function getJawabanChoice($user_id)
    {
         return $this->table('h_ujian', array('user_id'=>$user_id))
         ->get()->getResultArray();
    }
    public function saveChoice($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function inputnilai($data, $id_ujian)
    {
        return $this->db->table($this->table)->update($data, ['id_ujian' => $id_ujian]);
    }
}