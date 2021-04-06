<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UjianModel;

class Ujian extends Controller
{
	public function index()
    {
        $model = new UjianModel();
		$muji = $model->getUjian();
        $listuji = $model->getAll();
        $data = array(	'title'		=> 'Data',
                        'muji'		=> $muji,
                        'list'		=> $listuji,
						'content'	=> 'admin/master_ujian');
		return view('admin/_partials/wrapper',$data);        
    }

    public function store()
        {
        
            $model = new UjianModel();
       
        $data = array(
            'id_polda_test'  => $this->request->getPost('id_polda_test'),
            'nama_ujian'        => $this->request->getPost('nama_ujian'),
          

        );
        
        $model->saveUjian($data);
        return redirect()->to(base_url('ujian'))->with('berhasil', 'Data Berhasil di Simpan');
    
    }
    public function delete($id)
    {         
            $model 	= new UjianModel();
            $berita = $model->delete_uji($id);
            session()->setFlashdata('info', 'Updated successfully');
            return redirect()->to(base_url('ujian'));
    }
}