<?php namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends Model
{
    protected $table = "auth_groups_users";
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $primaryKey = 'id';

    // public function getRoleid($id = false)
    // {        
    //     if($id === false){
    //         return $this->table('auth_groups_users')
    //         ->get()
    //         ->getResultArray();
    //     } else {
    //         return $this->table('auth_groups_users')
    //                     ->where('id', $id)
    //                     ->get()
    //                     ->getRowArray();
    //     }   
    // }
    public function getRoleid($id)
    {
        return $this->table('auth_groups_users')
        ->join('auth_groups','auth_groups.id=auth_groups_users.group_id')
        ->join('users','users.id=auth_groups_users.user_id')
        ->where('users.id', $id)
        ->get()
        ->getRowArray();
    }
    public function getRole()
    {
         return $this->table('auth_groups_users')
         ->join('auth_groups','auth_groups.id=auth_groups_users.group_id')
         ->join('users','users.id=auth_groups_users.user_id')
         ->get()->getResultArray();
    }
    public function update_Role($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['user_id' => $id]);
    }
    // public function listing()
    // {
    //      return $this->table('users')
    //      ->join('rank','rank.id=users.pangkat_id')
    //      ->join('reg_provinces','reg_provinces.id=users.polda_id')
    //      ->join('category_test','category_test.id_category_test=users.category_id')
    //      ->get()->getResultArray();
    // }
}