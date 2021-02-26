<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadModel;
use App\Models\BankWawancaraModel;
use App\Models\Warna;

class TestWawancara extends Controller
{

	public function index()
	{ 
		$session = session();
        $model = new BankWawancaraModel();
		$bank = $model->getBank();
        $data = array(	'title'		=> 'Data',
						'user'		=> $session,
 						'bank'		=> $bank,
						'content'	=> 'admin/wawancara');
		return view('admin/_partials/wrappertest',$data);
        
    }
	public function insert(){
	


		$model = new Warna();
        $data = array
        (
			$checkboxes = $this->request->getPost('check_list'),
			$warna = implode(", ",$checkboxes),


        );
        $model->saveW($data);
	}	
	
}