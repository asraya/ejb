<?php namespace App\Controllers;
use App\Models\CmsModel;

class Index extends BaseController
{

	public function index()	
	{
		$model = new CmsModel();

		$data['head'] = $model->head();

	
	return view('index',$data);
	}
}