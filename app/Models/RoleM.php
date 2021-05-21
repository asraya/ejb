<?php namespace App\Models;
use CodeIgniter\Model;

class RoleM extends Model
{
	protected $allowedFields =
    [
		'id', 'group_id', 'user_id', 'type', 
    ];
	protected $table = "auth_groups_users";

	var $column_order = array('id', 'group_id', 'user_id', 'type');
	var $order = array('id' => 'asc');
	protected $primaryKey = 'id';

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
			$kondisi_search = "group_id LIKE '%$search%' OR Type LIKE '%$search%' OR Type LIKE '%$search%' $kondisi_Search";
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
		$builder = $db->table('auth_groups_users');
		$query = $builder->select('*')
				->where($kondisi_search)
				->orderBy($result_order, $result_dir)
				->limit($_POST['length'], $_POST['start'])
				->get();
		return $query->getResult();

	}


	function jumlah_semua(){
		$sQuery = "SELECT COUNT(id) as jml FROM auth_groups_users";
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
			$kondisi_search = " AND (group_id LIKE '%$search%' OR Type LIKE '%$search%' OR Type LIKE '%$search%') $kondisi_Search";
		} else {
			$kondisi_search = "$kondisi_Search";
		}
		$sQuery = "SELECT COUNT(id) as jml FROM auth_groups_users WHERE id != '' $kondisi_search";
		$db = db_connect();
		$query = $db->query($sQuery)->getRow();
		return $query;
	}
	function createrole($id = false)
    {        
        if($id === false){
            return $this->db->table('auth_groups_users')

            ->get()
            ->getResultArray();
        } else {
            return $this->table('auth_groups_users')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
	function insert_role($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}