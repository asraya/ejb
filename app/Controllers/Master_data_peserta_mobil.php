<?php namespace App\Controllers;
use CodeIgniter\Controller;
use Myth\Auth\Models\UserModel;
use App\Models\UserRoleModel;
use App\Models\UserPermisionModel;
use App\Models\HasilUjianModel;
use App\Models\BankWawancaraModel;

class Master_data_peserta_mobil extends controller
{
public function index()
	{		
			$session = session();	
			$model = new HasilUjianModel();
			$id_user = user()->id;
			$list = $model->getHasilChoicep1($id_user);
			$data = array(	'title'		=> 'Data',
							'list'	=> $list,
							'content'	=> 'admin/dt pst/choice_mobil');
			return view('admin/_partials/wrappermotor',$data);   
	}

	public function edit($id_ujian)
	{
		$model = new HasilUjianModel();
		$listjawaban = $model->listing($id_ujian);
			$data = array(	'title'		=> 'Data',
							'list_j'	=> $listjawaban,
							'content'	=> 'admin/dt pst/v_jawaban');
							return view('admin/_partials/wrapper',$data);		

	}
	public function p1($id)
    {  
			$model = new UserModel();
			$bank = $model->getBankPraktek_Mobil($id);
			$data = array(	'title'		=> 'Data',
							 'bank'		=> $bank,
							'content'	=> 'admin/praktik/p_mobil');
			return view('admin/_partials/wrappertest',$data);
			
		}
		public function insert(){
			// dd($this->request->getPost('1'));
	
			$model = new HasilUjianModel();
	
			$data = array(
				'user_id'  => $this->request->getPost('user_id'),
				'ujian_id'  => $this->request->getPost('ujian_id'),
				'checked_by'  => $this->request->getPost('checked_by'),
				'id_penguji'  => $this->request->getPost('id_penguji'),
				'list_jawaban_praktik' => implode(",",$this->request->getPost('list_jawaban_praktik')),
				  'tgl_mulai'	=>  date("Y-m-d H:i:s"),
	
				// 'file' => $upload->getName()
			);
			// $jawaban = $this->request->getPost('list_jawaban');
			// dd($data);
	
			$model->savePraktik($data);
			return redirect()->to(base_url('master_data_peserta_mobil'))->with('berhasil', 'Data Berhasil di Simpan');
		
		}
		public function inputnilai(){
			{
			$model = new HasilUjianModel();
			$id = $this->request->getPost('id_ujian');
			$data = array(
				'nilai_uji_teori'  => $this->request->getPost('nilai_uji_teori'),           
			);
			$model->inputnilai($data, $id);
			return redirect()->to(base_url('master_data_peserta_mobil'))->with('berhasil', 'Data Berhasil di Simpan');
		}
	
		}
		
	}