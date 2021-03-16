<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadModel;
use App\Models\BankModel;
use App\Models\BankPraktekModel;

class TestUjiPraktek extends Controller
{

	public function index()
	{ 
		$session = session();
        $model = new BankModel();
		$model2 = new BankPraktekModel();
		$bank2 = $model2->getBankWawancara();
		$bank = $model->getBankInput();
        $data = array(	'title'		=> 'Data',
						'user'		=> $session,
						'bank2'		=> $bank2,
 						'bank'		=> $bank,
						'content'	=> 'admin/testujipraktek');
		return view('admin/_partials/wrappertest',$data);
        
    }
	public function insert(){
		// dd($this->request->getPost('1'));

		$model = new HasilUjianModel();

		$data = array(
            'user_id'  => $this->request->getPost('user_id'),
            'ujian_id'  => $this->request->getPost('ujian_id'),		
			'list_jawaban' => implode($this->request->getPost('id_soal'). ",",$this->request->getPost('list_jawaban')),
            'nilai_bobot'  => $this->request->getPost('nilai_bobot'),
          	'tgl_mulai'	=>  date("Y-m-d H:i:s"),
            // 'file' => $upload->getName()
        );
		// $jawaban = $this->request->getPost('list_jawaban');
		// dd($jawaban[13]);

        $model->saveChoice($data);
        return redirect()->to(base_url('testuji'))->with('berhasil', 'Data Berhasil di Simpan');
    
    }

 
	
}