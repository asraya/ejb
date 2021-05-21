<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RoleM;
use Myth\Auth\Models\UserModel;
use App\Models\UserPermisionModel;

class Permission extends controller
{
		public function index()
	{ 
        $data = array(	'title'		=> 'Data',
						'content'	=> 'admin/user/permission');
		return view('admin/_partials/wrapper_permission',$data);        
    }
	
	public function table_data(){
		$model = new UserPermisionModel();

		// $csrfId = csrf_token();
		// $csrfHash = csrf_hash();

		$Search = $this->request->getPost('user_id');

		$listing = $model->get_datatables($Search);
		$jumlah_semua = $model->jumlah_semua();
		$jumlah_filter = $model->jumlah_filter($Search);

		$data = array();
		$no = $_POST['start'];
		foreach ($listing as $key) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $key->permission_id;
			$row[] = $key->user_id;	
					
			$row[] = '<a class="btn btn-link btn-warning btn-sm" href="javascript:void(0)" 
                                title="Edit" onclick="permission_edit('."'".$key->id."'".')">
                                <i class="fa fa-edit"></i>
                         </a>
                         <a class="btn btn-link btn-danger btn-sm" href="javascript:void(0)" 
                                title="Hapus" onclick="permission_delete('."'".$key->id."'".')">
                                <i class="fa fa-trash"></i>
                         </a>';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $jumlah_semua->jml,
			"recordsFiltered" => $jumlah_filter->jml,
			"data" => $data
		);
		// $output[$csrfId] = $csrfHash;
		echo json_encode($output);
	}
//--------------------------------------------------------------------
public function createpermission()
{        
	$session = session();
	$model = new UserPermisionModel();
	$permission = $model->createpermission();
	$data = array(	'title'	=> 'Data permission',
					'permission'=> $permission,
					'user'  => $session,
					'content'	=> 'admin/user/createpermission');
	return view('admin/_partials/wrapper',$data);
}
	
public function store()
{
$model = new UserPermisionModel();	
$data = array
(

	'permission_id'  => $this->request->getPost('permission_id'),
	'user_id'  => $this->request->getPost('user_id'),
	'type'  => $this->request->getPost('type'),
);

$model->insert_permission($data);
// dd($data);
return redirect()->to(base_url('permission/createpermission'))->with('berhasil', 'Data Berhasil di Simpan');
}
public function edit($id) {
 
	$this->UserPermisionModel = new UserPermisionModel();		
	$data = $this->UserPermisionModel->get_by_id($id);		
	echo json_encode($data);
}
public function update() {
	
	helper(['form', 'url']);
	$this->UserPermisionModel = new UserPermisionModel();

	$data = array(
		'permission_id'  => $this->request->getPost('permission_id'),
		'user_id'  => $this->request->getPost('user_id'),
		'type'  => $this->request->getPost('type'),

	);

	$this->UserPermisionModel->update_permission(array('id' => $this->request->getPost('id')), $data);
	echo json_encode(array("status" => TRUE));
}

public function delete($id) {

	helper(['form', 'url']);
	$this->UserPermisionModel = new UserPermisionModel();
	$this->UserPermisionModel->delete_by_id($id);
	echo json_encode(array("status" => TRUE));
}
}



