<?php namespace App\Models;

use CodeIgniter\Model;

class UserPermisionModel extends Model
{
    protected $table = "auth_groups_permissions";
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function getPermisionn($id = false)
    {        
        if($id === false){
            return $this->table('auth_groups_permissions')
            ->get()
            ->getResultArray();
        } else {
            return $this->table('auth_groups_permissions')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
}