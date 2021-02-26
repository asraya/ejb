<?php namespace App\Models;

use CodeIgniter\Model;

class BankWawancaraModel extends Model
{
    protected $table = "tb_soal_wawancara";
    protected $primaryKey = 'id_soal';
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    
    public function getBank($id = false)
    {        
        if($id === false){
            return $this->table('tb_soal')
            ->get()
            ->getResultArray();
        } else {
            return $this->table('tb_soal')
                        ->where('id_soal', $id)
                        ->get()
                        ->getRowArray();
        }   
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