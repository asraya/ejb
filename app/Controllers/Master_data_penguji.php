<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Penguji_model;
use Myth\Auth\Models\PangkatModels;
use Myth\Auth\Models\CategoryModel;
use Myth\Auth\Models\UserModel;


class Master_data_penguji extends Controller
{
    public function index()
    
    {
        $model      = new Penguji_model();
        $mk2		= new PangkatModels();
        $mk 		= new CategoryModel();
        $pangkat	= $mk2->listing_pangkat();
        $asal_polda	= $mk->listing();
        $penguji  = $model->getPenguji()->getResult();
        $data = array(	'title'		=> 'Data',
                        'pangkat'	=> $pangkat,
                        'asal_polda'=> $asal_polda,
                        'penguji'	=> $penguji,
						'content'	=> 'penguji_view');
		return view('admin/_partials/wrapper',$data);        
    }


    public function save()
    {
        $model = new Penguji_model();
        $data = array
        (
            'penguji_name'        => $this->request->getPost('penguji_name'),
            'jenis_kelamin'        => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir'        => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'        => $this->request->getPost('tanggal_lahir'),
            'pangkat'        => $this->request->getPost('pangkat'),
            'nrp'        => $this->request->getPost('nrp'),
            'asal_polda'        => $this->request->getPost('asal_polda'),
            'category_trainer'        => $this->request->getPost('category_trainer'),
            'no_telepon'        => $this->request->getPost('no_telepon'),
            'email'        => $this->request->getPost('email'),
            'password'        => $this->request->getPost('password'),

        );
        $model->savePenguji($data);

        
        return redirect()->to('/Master_data_penguji');
    }
   


    public function create_active(string $email)
    {

        $model = new UserModel($id);
        $data = array(
            'email' => $email,

        );
        
        $model->insert_active($data);        
        return redirect()->to(base_url('Master_data_penguji'))->with('berhasil', 'Data Berhasil di Simpan');

    }
 
    public function update()
    {
        $model = new Penguji_model();
        $id = $this->request->getPost('penguji_id');
        $data = array(
            'penguji_name'        => $this->request->getPost('penguji_name'),
           
        );
        $model->updatePenguji($data, $id);
        return redirect()->to('/Master_data_penguji');
    }
 
    public function delete()
    {
        $model = new Penguji_model();
        $id = $this->request->getPost('penguji_id');
        $model->deletePenguji($id);
        return redirect()->to('/Master_data_penguji');
    }
 
}