<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategoryTestModel;

class CategoryTest extends Controller
{
	public function index()
    {
        $model = new CategoryTestModel();
		$catest = $model->getBank();
        $data = array(	'title'		=> 'Data',
                        'catest'		=> $catest,
						'content'	=> 'admin/categorytest/index');
		return view('admin/_partials/wrapper',$data);        
    }
}