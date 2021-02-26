<?php namespace App\Controllers;
use CodeIgniter\Controller;
use Myth\Auth\Models\UserModel;
use App\Models\UserRoleModel;
use App\Models\UserPermisionModel;
use App\Models\HasilUjianModel;

class Hasil_ujian_pilihan extends controller
{
public function index()
	{		
			$model = new HasilUjianModel();
			$list = $model->getHasilChoice();
			$data = array(	'title'		=> 'Data',
							'list'	=> $list,
							'content'	=> 'admin/hasil_ujian/choice');
			return view('admin/_partials/wrapper',$data);   
	}
}