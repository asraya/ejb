<?php namespace App\Models;
use CodeIgniter\Model;

class CarModel extends Model
{
	// protected $allowedFields =  [ 'id', 'merk_mobil', 'type', 'file' ];
	protected $table = "t_car";

	var $column_order = array('id', 'merk_mobil', 'type');
	var $order = array('id' => 'asc');
	protected $primaryKey = 'id';
	protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
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
			$kondisi_search = "merk_mobil LIKE '%$search%' OR Type LIKE '%$search%' OR Type LIKE '%$search%' $kondisi_Type";
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
		$builder = $db->table('t_car');
		$query = $builder->select('*')
				->where($kondisi_search)
				->orderBy($result_order, $result_dir)
				->limit($_POST['length'], $_POST['start'])
				->get();
		return $query->getResult();

	}


	function jumlah_semua(){
		$sQuery = "SELECT COUNT(id) as jml FROM t_car";
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
			$kondisi_search = " AND (merk_mobil LIKE '%$search%' OR Type LIKE '%$search%' OR Type LIKE '%$search%') $kondisi_Type";
		} else {
			$kondisi_search = "$kondisi_Type";
		}
		$sQuery = "SELECT COUNT(id) as jml FROM t_car WHERE id != '' $kondisi_search";
		$db = db_connect();
		$query = $db->query($sQuery)->getRow();
		return $query;
	}
	 function createcar($id = false)
    {        
        if($id === false){
            return $this->db->table('t_car')

            ->get()
            ->getResultArray();
        } else {
            return $this->table('t_car')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
	
	public function insert_car($data)
    {
        return $this->db->table('t_car')->insert($data);
    }
	//  function insert_car($data)
    // {
    //     return $this->db->table($this->table)->insert($data);
    // }
	public function get_by_id($id) {
		$sql = 'select * from t_car where id ='.$id ;
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
}