<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BankWawancaraModel;
use App\Models\CategoryTestModel;

class Bank_soal_wawancara extends Controller
{
	public function index()
    {
        $model = new BankWawancaraModel();
		$bank = $model->getBankWawancara();
        $data = array(	'title'		=> 'Data',
                        'bank'		=> $bank,
						'content'	=> 'admin/bank soal/index_wawancara');
		return view('admin/_partials/wrapper',$data);        
    }
	public function create()
    {        
        $session = session();
        $model = new BankWawancaraModel();
        $model2 = new CategoryTestModel();
		$bank = $model->getBankWawancara();
        $catest	= $model2->listing();

        $data = array(	'title'	 => 'Data Soal',
                        'bank'	 => $bank,
                        'catest' => $catest,
                        'user'   => $session,
						'content'	=> 'admin/bank soal/create_wawancara');
		return view('admin/_partials/wrapper',$data);
    }
    public function store()
        {
        
            $model = new BankWawancaraModel();
            
            // $validation = $this->validate([
            //     'file' => [
            //         'uploaded[file]',
            //         'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
            //         'max_size[file,9999]',
            //     ],
            // ]);
            // if ($validation == FALSE) {
                
            //     return $this->index();
            // } else {
           
            //     $avatar  	= $this->request->getFile('file');
            //     $namabaru 	= $avatar->getRandomName();
            //     $avatar->move(WRITEPATH . '../public/assets/images/',$namabaru);

        $data = array(
            'category_id'  => $this->request->getPost('category_id'),
            'bobot'        => $this->request->getPost('bobot'),
            'soal'         => $this->request->getPost('soal'),
            'opsi_a'       => $this->request->getPost('opsi_a'),
            'opsi_b'       => $this->request->getPost('opsi_b'),
            'opsi_c'       => $this->request->getPost('opsi_c'),
            'opsi_d'       => $this->request->getPost('opsi_d'),
            'jawaban'      => $this->request->getPost('jawaban'),          
            // 'file'		=> $namabaru,
            // 'gambar'		=> $namabaru,


            'created_on'   => date("Y-m-d H:i:s"),

            // 'file' => $upload->getName()
        );
        
        $model->saveSoal($data);
        return redirect()->to(base_url('bank_soal_wawancara/create'))->with('berhasil', 'Data Berhasil di Simpan');
    
    }
    public function edit($id)
    {        
        $session = session();
        $model = new BankWawancaraModel();
        $model2 = new CategoryTestModel();
		$banksoal = $model->getBankWawancara($id);
        $catest	= $model2->listing();
        $data = array(	'title'		=> 'Data Berita',
                        'bsoal'	=> $banksoal,
                        'user' => $session,
                        'catest' => $catest,
						'content'	=> 'admin/bank soal/edit_wawancara');
		return view('admin/_partials/wrapper',$data);
    }

    
    public function update($id)
    {    
        
        $category_id = $this->request->getPost('category_id');
        $bobot = $this->request->getPost('bobot');
        $soal = $this->request->getPost('soal');
        $opsi_a = $this->request->getPost('opsi_a');
        $opsi_b = $this->request->getPost('opsi_b');
        $opsi_c = $this->request->getPost('opsi_c');
        $opsi_d = $this->request->getPost('opsi_d');
        $jawaban = $this->request->getPost('jawaban');
        $updated_on = date("Y-m-d H:i:s");
        // $file = $this->request->getPost('file');
       
        $data = 
        [
            'category_id' => $category_id,
            'bobot' => $bobot,
            'soal' => $soal,
            'opsi_a' => $opsi_a,
            'opsi_b' => $opsi_b,
            'opsi_c' => $opsi_c,
            'opsi_d' => $opsi_d,
            'jawaban' => $jawaban,

            'updated_on' => $updated_on,
        ];

        $model = new BankModel();
		$update = $model->update_Soal($data, $id);

        if($update)
        {
            session()->setFlashdata('info', 'Updated successfully');
            return redirect()->to(base_url('bank_soal'));
        }
    }
    public function delete($id)
    {         
            $model 	= new BankModel();
            $berita = $model->delete_Soal($id);
            session()->setFlashdata('info', 'Updated successfully');
            return redirect()->to(base_url('bank_soal'));
    }
}