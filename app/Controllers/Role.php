<?php namespace App\Controllers;
use CodeIgniter\Controller;
use Myth\Auth\Models\UserModel;
use App\Models\UserRoleModel;
use App\Models\UserPermisionModel;

class Role extends controller
{
public function index()
	{		
			$model = new UserRoleModel();
			$list = $model->getRole();
			$data = array(	'title'		=> 'Data',
							'list'	=> $list,
							'content'	=> 'admin/user/role');
			return view('admin/_partials/wrapper',$data);   
	}
}