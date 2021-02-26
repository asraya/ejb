<?php namespace App\Controllers;



class Home extends BaseController
{
	// Main page
	
		public function index()
	{ 
		$session = session();
        $data = array(	'title'		=> 'Data',
						'user'		=> $session,
						'content'	=> 'welcome_message');
		return view('admin/_partials/wrapper',$data);
        
    }
		// return view('index');
	
}
