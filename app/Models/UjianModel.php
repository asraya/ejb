<?php namespace App\Models;

use CodeIgniter\Model;

class UjianModel extends Model
{
    protected $table = "m_ujian";
    protected $primaryKey = 'id_m_ujian';
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';

    public function getAll()
    {
         return $this->table('m_ujian')
         ->join('reg_provinces','reg_provinces.id=m_ujian.id_polda_test', 'left')
         ->get()
		 ->getResultArray();
    }
    public function getUjian()
    {
         return $this->table('m_ujian')
         ->join('reg_provinces','reg_provinces.id=m_ujian.id_polda_test', 'right')
         ->get()
		 ->getResultArray();
    }
    public function saveUjian($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function delete_uji($id_soal)
    {
        return $this->db->table($this->table)->delete(['id_m_ujian' => $id_soal]);
    }
}