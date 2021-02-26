<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadModel;
use App\Models\BankModel;
use App\Models\HasilUjianModel;

class TestUji extends Controller
{

	public function index()
	{ 
		$session = session();
        $model = new BankModel();
		$model2 = new HasilUjianModel();
		$bank2 = $model2->getHasilChoice();
		$bank = $model->getBank();
        $data = array(	'title'		=> 'Data',
						'user'		=> $session,
						'bank2'		=> $bank2,
 						'bank'		=> $bank,
						'content'	=> 'admin/testuji');
		return view('admin/_partials/wrappertest',$data);
        
    }
	public function insert(){
		// dd($this->request->getPost('1'));

		$model = new HasilUjianModel();

		$data = array(
            'user_id'  => $this->request->getPost('user_id'),
            'ujian_id'  => $this->request->getPost('ujian_id'),			
            'list_jawaban'  => $this->request->getPost('list_jawaban'),
          	'tgl_mulai'	=>  date("Y-m-d H:i:s"),
            // 'file' => $upload->getName()
        );
		dd($this->request->getPost());

        $model->saveChoice($data);
        return redirect()->to(base_url('testuji'))->with('berhasil', 'Data Berhasil di Simpan');
    
    }

 
	
}