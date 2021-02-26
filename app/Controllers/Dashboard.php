<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadModel;
use App\Models\DashboardModel;

class Dashboard extends Controller
{

	public function index()
	{ 
        $bulan = $this->request->getGet('bulan');
        $bulan = $bulan?$bulan:Date("m");
		$session = session();
        $data = array(	'title'		=> 'Data',
						'user'		=> $session,
                        'bulan'      =>   $bulan?$bulan:Date("m"),
						'content'	=> 'dashboard');

		return view('admin/_partials/wrapper',$data);
        
    } 

        public function store()

        {
        $model = new UploadModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/');
        }
        $validation = $this->validate([

            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf,image/jpg,image/jpeg,image/gif,image/png,video/mp4]|max_size[file_upload,9999]'
        ]);
 
        if ($validation == FALSE) {
            
            return $this->index();
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload1 = $this->request->getFile('file_upload1');
            $upload2 = $this->request->getFile('file_upload2');
            $upload3 = $this->request->getFile('file_upload3');
            $upload4 = $this->request->getFile('file_upload4');
            $upload5 = $this->request->getFile('file_upload5');

            $upload->move(WRITEPATH . '../public/assets/images/');

        $data = array(
			// 'file' => $upload->getName()
            'user_id'  => $this->request->getPost('user_id'),
            'upload_kta' => $upload->getName(),
			'upload_ktp' => $upload1->getName(),
            'upload_sim' => $upload2->getName(),
            'upload_foto' => $upload3->getName(),
			'upload_cv' => $upload4->getName(),
			'upload_video' => $upload5->getName()
        );
        
        $model->insert_data($data);
        return redirect()->to(base_url('home'))->with('berhasil', 'Data Berhasil di Simpan');
        }
    }

}
