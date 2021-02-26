<?php namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends Model
{
    protected $table = "auth_groups_users";
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function getRole($id = false)
    {        
        if($id === false){
            return $this->table('auth_groups_users')
            ->get()
            ->getResultArray();
        } else {
            return $this->table('auth_groups_users')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
}