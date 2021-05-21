<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RoleM;


class Role extends controller
{
		public function index()
	{ 
        $data = array(	'title'		=> 'Data',
						'content'	=> 'admin/user/role');
		return view('admin/_partials/wrapper_role',$data);        
    }
	
	public function table_data(){
		$model = new RoleM();

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
			$row[] = $key->group_id;
			$row[] = $key->user_id;	
			$row[] = '<a class="btn btn-link btn-warning btn-sm" href="javascript:void(0)" 
                                title="Edit" onclick="ajax_edit('."'".$key->id."'".')">
                                <i class="fa fa-edit"></i>
                         </a>
                         <a class="btn btn-link btn-danger btn-sm" href="javascript:void(0)" 
                                title="Hapus" onclick="ajax_delete('."'".$key->id."'".')">
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
	public function create()
    {        
        $session = session();
        $model = new RoleM();
		$role = $model->createrole();
        $data = array(	'title'	=> 'Data role',
                        'role'	=> $role,
                        'user'  => $session,
						'content'	=> 'admin/user/createrole');
		return view('admin/_partials/wrapper',$data);
    }
	    
	public function store()
	{
	$model = new RoleM();	
	$data = array
	(

		'group_id'  => $this->request->getPost('group_id'),
		'user_id'  => $this->request->getPost('user_id'),
		'type'  => $this->request->getPost('type'),
	);
	
	$model->insert_role($data);
	// dd($data);
	return redirect()->to(base_url('role/create'))->with('berhasil', 'Data Berhasil di Simpan');
	
	}
}


