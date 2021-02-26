<?php namespace App\Controllers;
use CodeIgniter\Controller;
use Myth\Auth\Models\UserModel;
use App\Models\UserRoleModel;
use App\Models\UserPermisionModel;

class Master_data_user extends controller
{
		public function index()
	{ 
        $model = new UserModel();
		$list = $model->listing();
        $data = array(	'title'		=> 'Data',
                        'list'	=> $list,
						'content'	=> 'admin/master data/index');
		return view('admin/_partials/wrapper',$data);   
        
    }
	
}