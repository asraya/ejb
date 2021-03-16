<?php namespace App\Controllers;
use CodeIgniter\Controller;
use Myth\Auth\Models\UserModel;
use App\Models\UserRoleModel;
use App\Models\UserPermisionModel;
use App\Models\HasilUjianModel;
use App\Models\BankWawancaraModel;

class Master_data_peserta_wawancara extends controller
{
public function index()
	{		
			$session = session();	
			$model = new HasilUjianModel();
			$id_user = user()->id;
			$list = $model->getBankWawancara($id_user);
			$data = array(	'title'		=> 'Data',
							'list'	=> $list,
							'content'	=> 'admin/dt pst/wawancara');
			return view('admin/_partials/wrapper',$data);   
	}

	public function edit($user_id)
	{
		$model = new HasilUjianModel();
		$listjawaban = $model->listing($user_id);
			$data = array(	'title'		=> 'Data',
							'list_j'	=> $listjawaban,
							'content'	=> 'admin/dt pst/v_jawaban');
							return view('admin/_partials/wrapper',$data);		

	}

		public function w1($id)
    {  
			$model = new UserModel();
			$bank = $model->getBankPraktek_Wawancara($id);
			$data = array(	'title'		=> 'Data',
							 'bank'		=> $bank,
							'content'	=> 'admin/praktik/p_wawancara');
			return view('admin/_partials/wrappertest',$data);
			
		}
	
			public function insert(){
		// dd($this->request->getPost('1'));

		$model = new HasilUjianModel();

		$data = array(
			'user_id'  => $this->request->getPost('user_id'),
			'checked_by_wawancara'  => $this->request->getPost('checked_by_wawancara'),
			'ujian_id'  => $this->request->getPost('ujian_id'),

			'id_pewawancara'  => $this->request->getPost('id_pewawancara'),
			'list_jawaban_wawancara' => implode(",",$this->request->getPost('list_jawaban_wawancara')),
          	'tgl_mulai'	=>  date("Y-m-d H:i:s"),

            // 'file' => $upload->getName()
        );
		// $jawaban = $this->request->getPost('list_jawaban_wawancara');
		// dd($data);
		
        $model->saveWawancara($data);
        return redirect()->to(base_url('master_data_peserta_wawancara'))->with('berhasil', 'Data Berhasil di Simpan');
    
    }
}