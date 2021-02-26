<?php namespace App\Controllers;



class Maintenance extends BaseController
{
	// Main page
	
		public function index()
	{ 
		$session = session();
        $data = array(	'title'		=> 'Data',
						'user'		=> $session,
						'content'	=> 'maintenance');
		return view('admin/_partials/wrapper',$data);
        
    }
		// return view('index');
	
}
