<?php namespace App\Controllers;
use CodeIgniter\Controller;
use Myth\Auth\Models\UserModel;
use App\Models\UserRoleModel;
use App\Models\UserPermisionModel;
use App\Models\HasilUjianModel;
use App\Models\BankWawancaraModel;

class Master_data_peserta extends controller
{
public function index()
	{		
			$session = session();	
			$model = new HasilUjianModel();
			$id_user = user()->id;
			$list = $model->getHasilChoice($id_user);
			$data = array(	'title'		=> 'Data',
							'list'	=> $list,
							'content'	=> 'admin/dt pst/choice');
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
	public function p1($id)
    {  
			$model = new UserModel();
			$bank = $model->getBankPraktek_Motor($id);
			$data = array(	'title'		=> 'Data',
							 'bank'		=> $bank,
							'content'	=> 'admin/praktik/p_mobil');
			return view('admin/_partials/wrappertest',$data);
			
		}
		public function p2($id)
    {  
			$model = new UserModel();
			$bank = $model->getBankPraktek_Mobil($id);
			$data = array(	'title'		=> 'Data',
							 'bank'		=> $bank,
							'content'	=> 'admin/praktik/p_motor');
			return view('admin/_partials/wrappertest',$data);
			
		}
		public function delete($user_id)
		{         
				$model 	= new HasilUjianModel();
				$berita = $model->delete_peserta($user_id);
				session()->setFlashdata('info', 'Updated peserta successfully');
				return redirect()->to(base_url('master_data_peserta'));
		}
	}