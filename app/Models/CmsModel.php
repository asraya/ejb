<?php namespace App\Models;

use CodeIgniter\Model;

class CmsModel extends Model
{
    var $column_order = array('id', 'app_name', 'app_slug', 'link', 'image', 'description');
	var $order = array('id' => 'asc');

    protected $table = "t_cms";
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $primaryKey = 'id';

    function get_datatables($Type){

		//Type
		if($Type==""){
			$kondisi_Type="";
		}else{
			$kondisi_Type=" AND Type = '$Type'";
		
		}
		// search
		if($_POST['search']['value']){
			$search = $_POST['search']['value'];
			$kondisi_search = "app_name LIKE '%$search%' OR Type LIKE '%$search%' OR Type LIKE '%$search%' $kondisi_Type";
		} else {
			$kondisi_search = "id != '' $kondisi_Type";
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
		$builder = $db->table('t_cms');
		$query = $builder->select('*')
				->where($kondisi_search)
				->orderBy($result_order, $result_dir)
				->limit($_POST['length'], $_POST['start'])
				->get();
		return $query->getResult();

	}


	function jumlah_semua(){
		$sQuery = "SELECT COUNT(id) as jml FROM t_cms";
		$db = db_connect();
		$query = $db->query($sQuery)->getRow();
		return $query;
	}

	function jumlah_filter($Type){

		//Type
		if($Type==""){
			$kondisi_Type="";
		}else{
			$kondisi_Type=" AND Type = '$Type' ";
		
		}

		// kondisi_search
		if($_POST['search']['value']){
			$search = $_POST['search']['value'];
			$kondisi_search = " AND (app_name LIKE '%$search%' OR Type LIKE '%$search%' OR Type LIKE '%$search%') $kondisi_Type";
		} else {
			$kondisi_search = "$kondisi_Type";
		}
		$sQuery = "SELECT COUNT(id) as jml FROM t_cms WHERE id != '' $kondisi_search";
		$db = db_connect();
		$query = $db->query($sQuery)->getRow();
		return $query;
	}
    public function get_by_id($id) {
		$sql = 'select * from t_cms where id ='.$id ;
		$query =  $this->db->query($sql);
		 
		return $query->getRow();
	  }
	  public function car_update($where, $data) {
        $this->db->table($this->table)->update($data, $where);
//        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }
	public function delete_by_id($id) {
        $this->db->table($this->table)->delete(array('id' => $id)); 
    }
	public function head()
	{
		$this->select('*');
		$query = $this->get();
		return $query->getResultArray();
	}
}