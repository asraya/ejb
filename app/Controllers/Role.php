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
	public function edit($id)
    {        
        $session = session();
        $model = new UserRoleModel();
		$role = $model->getRoleid($id);
        $data = array(	'title'		=> 'Data ',
                        'role'	=> $role,
                        'user' => $session,
						'content'	=> 'admin/user/editrole');
		return view('admin/_partials/wrapper',$data);
    }
	public function update($id)
    {    
        $group_id = $this->request->getPost('group_id');
        // $user_id = $this->request->getPost('user_id');
     

        $data = 
        [
            'group_id' => $group_id,
            // 'user_id' => $user_id,
         
        ];

        $model = new UserRoleModel();
		$update = $model->update_Role($data, $id);

        if($update)
        {
            session()->setFlashdata('info', 'Updated guide successfully');
            return redirect()->to(base_url('role'));
        }
    }
}