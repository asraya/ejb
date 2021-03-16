<?php namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table = "auth_login";

public function getCountUsr()
{
    return $this->db->table("users")->countAll();
}
public function getCountHuji()
{
    return $this->db->table("h_ujian")->countAll();
}
public function getCountHujiPrak()
{
    return $this->db->table("h_ujian_praktik")->countAll();
}
public function getCountHujiWwncra()
{
    return $this->db->table("h_ujian_wawancara")->countAll();
}
}