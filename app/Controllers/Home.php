<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		echo view('admin/_partials/head');
		echo view('admin/_partials/sidebar');
		echo view('admin/_partials/navbar');
		echo view('welcome_message');
		echo view('admin/_partials/footer');
		echo view('admin/_partials/modal');
		echo view('admin/_partials/js');

	}

	//--------------------------------------------------------------------

}
