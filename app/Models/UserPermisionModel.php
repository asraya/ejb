<?php namespace App\Models;

use CodeIgniter\Model;

class UserPermisionModel extends Model
{
    protected $allowedFields =
    [
		'id', 'permission_id', 'user_id', 'type', 
    ];
    protected $table = "auth_users_permissions";

    var $column_order = array('id', 'user_id', 'permission_id', 'type');
    var $order = array('id' => 'asc');
	protected $primaryKey = 'id';

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    // public function getPermisionn($id = false)
    // {        
    //     if($id === false){
    //         return $this->table('auth_users_permissions')
    //         ->get()
    //         ->getResultArray();
    //     } else {
    //         return $this->table('auth_users_permissions')
    //                     ->where('id', $id)
    //                     ->get()
    //                     ->getRowArray();
    //     }   
    // }
    function get_datatables($Search){

		//Search
		if($Search==""){
			$kondisi_Search="";
		}else{
			$kondisi_Search=" AND Type = '$Search'";
		
		}

		// search
		if($_POST['search']['value']){
			$search = $_POST['search']['value'];
			$kondisi_search = "permission_id LIKE '%$search%' OR Type LIKE '%$search%' OR Type LIKE '%$search%' $kondisi_Search";
		} else {
			$kondisi_search = "id != '' $kondisi_Search";
		}

		// order
		if(isset($_POST['order'])) // here order processing
		// if($_POST['order'])
		{		
			$result_order = $this->column_order[$_POST['order']['0']['column']];
			$result_dir = $_POST['order']['0']['dir'];
		} else if ($this->order){
			$order = $this->order;
			$result_order = key($order);
			$result_dir = $order[key($order)];
		}


		if($_POST['length']!=-1);
		$db = db_connect();
		$builder = $db->table('auth_users_permissions');
		$query = $builder->select('*')
				->where($kondisi_search)
				->orderBy($result_order, $result_dir)
				->limit($_POST['length'], $_POST['start'])
				->get();
		return $query->getResult();

	}


	function jumlah_semua(){
		$sQuery = "SELECT COUNT(id) as jml FROM auth_users_permissions";
		$db = db_connect();
		$query = $db->query($sQuery)->getRow();
		return $query;
	}

	function jumlah_filter($Search){

		//Type
		if($Search==""){
			$kondisi_Search="";
		}else{
			$kondisi_Search=" AND Type = '$Search' ";
		
		}

		// kondisi_search
		if($_POST['search']['value']){
			$search = $_POST['search']['value'];
			$kondisi_search = " AND (permission_id LIKE '%$search%' OR Type LIKE '%$search%' OR Type LIKE '%$search%') $kondisi_Search";
		} else {
			$kondisi_search = "$kondisi_Search";
		}
		$sQuery = "SELECT COUNT(id) as jml FROM auth_users_permissions WHERE id != '' $kondisi_search";
		$db = db_connect();
		$query = $db->query($sQuery)->getRow();
		return $query;
	}
	function createpermission($id = false)
    {        
        if($id === false){
            return $this->db->table('auth_users_permissions')

            ->get()
            ->getResultArray();
        } else {
            return $this->table('auth_users_permissions')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
	function insert_permission($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function get_by_id($id) {
		$sql = 'select * from auth_users_permissions where id ='.$id ;
		$query =  $this->db->query($sql);
		 
		return $query->getRow();
	  }
	  public function update_permission($where, $data) {
        $this->db->table($this->table)->update($data, $where);
//        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }
	public function delete_by_id($id) {
        $this->db->table($this->table)->delete(array('id' => $id)); 
    }

}