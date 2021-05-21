<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CmsModel;

class Cms extends Controller
{
	public function index()
	{
		$data = array(	'title'	=> 'Data',
		'content'	=> 'admin/cms/cms');

return view('admin/_partials/wrapper_cms',$data);
	}

	public function table_data(){
		$model = new CmsModel();

		// $csrfName = csrf_token();
		// $csrfHash = csrf_hash();

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
			$row[] = $key->app_name;
			$row[] = $key->app_slug;
			$row[] = $key->link;
			$row[] = $key->description;
			if ($key->image) {
                $row[] = '<img src="'.base_url('assets/images/'.$key->image).'" class="img-responsive img-profile rounded-circle" style="width: 50px; height: 50px;" />';
            }else{
                $row[] = '(No Image)';
            }		
				$row[] = '<a class="btn btn-link btn-warning btn-sm" href="javascript:void(0)" 
                                title="Edit" onclick="cms_edit('."'".$key->id."'".')">
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
		// $output[$csrfName] = $csrfHash;
		echo json_encode($output);
	}
	public function carcreate()
    {        
        $session = session();
        $model = new CmsModel();
		$car = $model->createcar();
        $data = array(	'title'	=> 'Data Mobil',
                        'car'	=> $car,
                        'user'  => $session,
						'content'	=> 'admin/carmanagement/carcreate');
		return view('admin/_partials/wrapper',$data);
    }    
	public function store()
	{
	$model = new CmsModel();
	if ($this->request->getMethod() !== 'post') {
		return redirect()->to('/');
	}
	$validation = $this->validate([

		'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]',
	
		]);

	if ($validation == FALSE) {
		
		return $this->index();
	} 
	else {
		$upload = $this->request->getFile('file_upload');
		$upload->move(WRITEPATH . '../public/assets/images/');

	$data = array(
		'app_name'  => $this->request->getPost('app_name'),
		'type'  => $this->request->getPost('type'),
		'created_date' => date("Y-m-d H:i:s"),
		'created_by'  => $this->request->getPost('created_by'),
		// 'updated_date' => date("Y-m-d H:i:s"),
		'updated_by'  => $this->request->getPost('updated_by'),
    	 'file' => $upload->getName()

	);
	
	$model->insert_car($data);
	// dd($data);
	return redirect()->to(base_url('carmanagement/carcreate'))->with('berhasil', 'Data Berhasil di Simpan');
	}
	}
	//--------------------------------------------------------------------

	public function edit($id) {
 
        $this->CmsModel = new CmsModel();		
        $data = $this->CmsModel->get_by_id($id);		
        echo json_encode($data);
    }
	public function update() {
		
        helper(['form', 'url']);
        $this->CmsModel = new CmsModel();

        $data = array(
            'app_name' => $this->request->getPost('app_name'),
            'type' => $this->request->getPost('type'),
            // 'file' => $this->request->getPost('file'),
			'updated_date' => date("Y-m-d H:i:s"),
			'updated_by'  => $this->request->getPost('updated_by'),

        );

        $this->CmsModel->car_update(array('id' => $this->request->getPost('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function delete($id) {
 
        helper(['form', 'url']);
        $this->CmsModel = new CmsModel();
        $this->CmsModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}
