<?php namespace App\Controllers;
use CodeIgniter\Controller;
use Myth\Auth\Models\UserModel;


class Master_data_user extends controller
{
		public function index()
	{ 
        $data = array(	'title'		=> 'Data',
						'content'	=> 'admin/master data/index');
		return view('admin/_partials/wrapper_users',$data);        
    }
	
	public function table_data(){
		$model = new UserModel();

		$csrfId = csrf_token();
		$csrfHash = csrf_hash();

		$Type = $this->request->getPost('Type');

		$listing = $model->get_datatables($Type);
		$jumlah_semua = $model->jumlah_semua();
		$jumlah_filter = $model->jumlah_filter($Type);

		$data = array();
		$no = $_POST['start'];
		foreach ($listing as $key) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $key->name;
			$row[] = $key->type;	
		
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
		$output[$csrfId] = $csrfHash;
		echo json_encode($output);
	}

	//--------------------------------------------------------------------

}


