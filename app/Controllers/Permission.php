<?php namespace App\Controllers;
use CodeIgniter\Controller;
use Myth\Auth\Models\UserModel;
use App\Models\UserRoleModel;
use App\Models\UserPermisionModel;

class Permission extends controller
{
	public function index()
	{
		{ 
			$model = new UserPermisionModel();
			$list = $model->getPermisionn();
			$data = array(	'title'		=> 'Data',
							'list'	=> $list,
							'content'	=> 'admin/user/permission');
			return view('admin/_partials/wrapper',$data);   
			
		}
	}
}