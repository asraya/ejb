<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadModel;
use App\Models\DashboardModel;

class Dashboard extends Controller
{

	public function index()
	{ 
		$model = new DashboardModel();
		$total_u = $model->getCountUsr();
		$total_hup = $model->getCountHuji();
		$total_prak = $model->getCountHujiPrak();
		$total_wwcra = $model->getCountHujiWwncra();
		$session = session();
        $data = array(	'title'		=> 'Data',
						'user'		=> $session,
						'totaluser' => $total_u,
						'h_uji_p' => $total_hup,
						'h_uji_prk' => $total_prak,
						'h_uji_ww' => $total_wwcra,
						'content'	=> 'dashboard');

		return view('admin/_partials/wrapper',$data);
        
    } 

      

}
