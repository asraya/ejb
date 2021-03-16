<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HasilUjianModel;

class StudentController extends BaseController
{
	public function index()
	{
		$student_obj = new HasilUjianModel();

		$students = $student_obj->getHasilChoicep2();

		return view("list-student", [
			"students" => $students,
		]);
	}
}