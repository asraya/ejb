<?php namespace App\Controllers;
use App\Models\UploadModel;
use App\Models\ModUsers;



class Dokumen extends BaseController
{
	// Main page
	
		public function index()
	{ 
		$session = session();
		$model      = new ModUsers();
		$id_user = user()->id;
		$dockta = $model->listingdockta($id_user);		
		$docktp = $model->listingdocktp($id_user);
		$docsim = $model->listingdocsim($id_user);
		$docfoto = $model->listingdocfoto($id_user);
		$doccv = $model->listingdoccv($id_user);
		$docvd = $model->listingvid($id_user);

        $data = array(	'title'		=> 'Data',
						'user'		=> $session,
						'dokumenKta'   => $dockta,
						'dokumenKtp'   => $docktp,
						'dokumenSim'   => $docsim,
						'dokumenFoto'   => $docfoto,
						'dokumenCv'   => $doccv,
						'dokumenVid'   => $docvd,
						'content'	=> 'dokumen');
		return view('admin/_partials/wrapper',$data);
        
    }
	// public function index()
    
    // {
    //     $model      = new Penguji_model();
    //     $mk2		= new PangkatModels();
    //     $mk 		= new CategoryModel();
    //     $pangkat	= $mk2->listing_pangkat();
    //     $asal_polda	= $mk->listing();
    //     $penguji  = $model->getPenguji()->getResult();
    //     $data = array(	'title'		=> 'Data',
    //                     'pangkat'	=> $pangkat,
    //                     'asal_polda'=> $asal_polda,
    //                     'penguji'	=> $penguji,
	// 					'content'	=> 'penguji_view');
	// 	return view('admin/_partials/wrapper',$data);        
    // }



	
public function storeKta()

{
$model = new UploadModel();
if ($this->request->getMethod() !== 'post') {
	return redirect()->to('/');
}
$validation = $this->validate([

	'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf,image/jpg,image/jpeg,image/gif,image/png,video/mp4]|max_size[file_upload,9999]'
]);

if ($validation == FALSE) {
	
	return $this->index();
} else {
	$upload = $this->request->getFile('file_upload');
	// $upload1 = $this->request->getFile('file_upload1');
	// $upload2 = $this->request->getFile('file_upload2');
	// $upload3 = $this->request->getFile('file_upload3');
	// $upload4 = $this->request->getFile('file_upload4');
	// $upload5 = $this->request->getFile('file_upload5');

	$upload->move(WRITEPATH . '../../public_html/assets/images/kta/');

$data = array(
	// 'file' => $upload->getName()
	'user_id'  => $this->request->getPost('user_id'),
	'upload_kta' => $upload->getName(),
	// 'upload_ktp' => $upload1->getName(),
	// 'upload_sim' => $upload2->getName(),
	// 'upload_foto' => $upload3->getName(),
	// 'upload_cv' => $upload4->getName(),
	// 'upload_video' => $upload5->getName()
);

$model->insert_dataskta($data);
return redirect()->to(base_url('/dokumen'))->with('berhasil', 'Data Berhasil di Simpan');
}
}

public function storeKtp()

	{
	$model = new UploadModel();
	if ($this->request->getMethod() !== 'post') {
		return redirect()->to('/');
	}
	$validation = $this->validate([

		'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf,image/jpg,image/jpeg,image/gif,image/png,video/mp4]|max_size[file_upload,9999]'
	]);

	if ($validation == FALSE) {
		
		return $this->index();
	} else {
		$upload = $this->request->getFile('file_upload');
		// $upload1 = $this->request->getFile('file_upload1');
		// $upload2 = $this->request->getFile('file_upload2');
		// $upload3 = $this->request->getFile('file_upload3');
		// $upload4 = $this->request->getFile('file_upload4');
		// $upload5 = $this->request->getFile('file_upload5');

		$upload->move(WRITEPATH .  '../../public_html/assets/images/ktp/');

	$data = array(
		// 'file' => $upload->getName()
		'user_id'  => $this->request->getPost('user_id'),
		'upload_ktp' => $upload->getName(),
		// 'upload_ktp' => $upload1->getName(),
		// 'upload_sim' => $upload2->getName(),
		// 'upload_foto' => $upload3->getName(),
		// 'upload_cv' => $upload4->getName(),
		// 'upload_video' => $upload5->getName()
	);
	
	$model->insert_dataktp($data);
	return redirect()->to(base_url('/dokumen'))->with('berhasil', 'Data Berhasil di Simpan');
	}
}
public function storeSim()

	{
	$model = new UploadModel();
	if ($this->request->getMethod() !== 'post') {
		return redirect()->to('/');
	}
	$validation = $this->validate([

		'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf,image/jpg,image/jpeg,image/gif,image/png,video/mp4]|max_size[file_upload,9999]'
	]);

	if ($validation == FALSE) {
		
		return $this->index();
	} else {
		$upload = $this->request->getFile('file_upload');
		// $upload1 = $this->request->getFile('file_upload1');
		// $upload2 = $this->request->getFile('file_upload2');
		// $upload3 = $this->request->getFile('file_upload3');
		// $upload4 = $this->request->getFile('file_upload4');
		// $upload5 = $this->request->getFile('file_upload5');

		$upload->move(WRITEPATH . '../../public_html/assets/images/sim/');

	$data = array(
		// 'file' => $upload->getName()
		'user_id'  => $this->request->getPost('user_id'),
		'upload_sim' => $upload->getName(),
		// 'upload_ktp' => $upload1->getName(),
		// 'upload_sim' => $upload2->getName(),
		// 'upload_foto' => $upload3->getName(),
		// 'upload_cv' => $upload4->getName(),
		// 'upload_video' => $upload5->getName()
	);
	
	$model->insert_datasim($data);
	return redirect()->to(base_url('/dokumen'))->with('berhasil', 'Data Berhasil di Simpan');
	}
}
public function storeFoto()

	{
	$model = new UploadModel();
	if ($this->request->getMethod() !== 'post') {
		return redirect()->to('/');
	}
	$validation = $this->validate([

		'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf,image/jpg,image/jpeg,image/gif,image/png,video/mp4]|max_size[file_upload,9999]'
	]);

	if ($validation == FALSE) {
		
		return $this->index();
	} else {
		$upload = $this->request->getFile('file_upload');
		// $upload1 = $this->request->getFile('file_upload1');
		// $upload2 = $this->request->getFile('file_upload2');
		// $upload3 = $this->request->getFile('file_upload3');
		// $upload4 = $this->request->getFile('file_upload4');
		// $upload5 = $this->request->getFile('file_upload5');

		$upload->move(WRITEPATH . '../../public_html/assets/images/foto/');

	$data = array(
		// 'file' => $upload->getName()
		'user_id'  => $this->request->getPost('user_id'),
		'upload_foto' => $upload->getName(),
		// 'upload_ktp' => $upload1->getName(),
		// 'upload_sim' => $upload2->getName(),
		// 'upload_foto' => $upload3->getName(),
		// 'upload_cv' => $upload4->getName(),
		// 'upload_video' => $upload5->getName()
	);
	
	$model->insert_datafoto($data);
	return redirect()->to(base_url('/dokumen'))->with('berhasil', 'Data Berhasil di Simpan');
	}
}
public function storeCv()

	{
	$model = new UploadModel();
	if ($this->request->getMethod() !== 'post') {
		return redirect()->to('/');
	}
	$validation = $this->validate([

		'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf,image/jpg,image/jpeg,image/gif,image/png,video/mp4]|max_size[file_upload,9999]'
	]);

	if ($validation == FALSE) {
		
		return $this->index();
	} else {
		$upload = $this->request->getFile('file_upload');
		// $upload1 = $this->request->getFile('file_upload1');
		// $upload2 = $this->request->getFile('file_upload2');
		// $upload3 = $this->request->getFile('file_upload3');
		// $upload4 = $this->request->getFile('file_upload4');
		// $upload5 = $this->request->getFile('file_upload5');

		$upload->move(WRITEPATH . '../../public_html/assets/images/cv/');

	$data = array(
		// 'file' => $upload->getName()
		'user_id'  => $this->request->getPost('user_id'),
		'upload_cv' => $upload->getName(),
		// 'upload_ktp' => $upload1->getName(),
		// 'upload_sim' => $upload2->getName(),
		// 'upload_foto' => $upload3->getName(),
		// 'upload_cv' => $upload4->getName(),
		// 'upload_video' => $upload5->getName()
	);
	
	$model->insert_datacv($data);
	return redirect()->to(base_url('/dokumen'))->with('berhasil', 'Data Berhasil di Simpan');
	}
}
public function storeVideo()

	{
	$model = new UploadModel();
	if ($this->request->getMethod() !== 'post') {
		return redirect()->to('/');
	}
	$validation = $this->validate([

		'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf,image/jpg,image/jpeg,image/gif,image/png,video/mp4]|max_size[file_upload,9999]'
	]);

	if ($validation == FALSE) {
		
		return $this->index();
	} else {
		$upload = $this->request->getFile('file_upload');
		// $upload1 = $this->request->getFile('file_upload1');
		// $upload2 = $this->request->getFile('file_upload2');
		// $upload3 = $this->request->getFile('file_upload3');
		// $upload4 = $this->request->getFile('file_upload4');
		// $upload5 = $this->request->getFile('file_upload5');

		$upload->move(WRITEPATH . '../../public_html/assets/images/video/');

	$data = array(
		// 'file' => $upload->getName()
		'user_id'  => $this->request->getPost('user_id'),
		'upload_video' => $upload->getName(),
		// 'upload_ktp' => $upload1->getName(),
		// 'upload_sim' => $upload2->getName(),
		// 'upload_foto' => $upload3->getName(),
		// 'upload_cv' => $upload4->getName(),
		// 'upload_video' => $upload5->getName()
	);
	
	$model->insert_datavid($data);
	return redirect()->to(base_url('/dokumen'))->with('berhasil', 'Data Berhasil di Simpan');
	}
}
	
}
