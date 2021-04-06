<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadModel;
use App\Models\BankModel;
use App\Models\HasilUjianModel;

class Testuji extends Controller
{
public function index()
	{ 
		$session = session();
        $model = new BankModel();
		// $model2 = new HasilUjianModel();
		// $bank2 = $model2->getHasilChoice();
		$satu = user()->id;
		$dua = user()->polda_id;
		$bank = $model->getBank($satu, $dua);
		
        $data = array(	'title'		=> 'Data',
						'user'		=> $session,
						// 'bank2'		=> $bank2,
 						'bank'		=> $bank,
						'content'	=> 'admin/testuji');
		return view('admin/_partials/wrappertestuji',$data);
        
    }
	// public function index()
	// { 
	// 	$session = session();
    //     $model = new BankModel();
	// 	// $model2 = new HasilUjianModel();
	// 	// $bank2 = $model2->getHasilChoice();
	// 	$id_user = user()->category_id;
	// 	$bank = $model->getBank($id_user);
		
    //     $data = array(	'title'		=> 'Data',
	// 					'user'		=> $session,
	// 					// 'bank2'		=> $bank2,
 	// 					'bank'		=> $bank,
	// 					'content'	=> 'admin/testuji');
	// 	return view('admin/_partials/wrappertestuji',$data);
        
    // }
	public function insert(){
		// dd($this->request->getPost('1'));

		$model = new HasilUjianModel();
		$jawaban_peserta = $this->request->getPost('list_jawaban');
		$category_id = $this->request->getPost('ujian_id');
		
		$kunci_jawaban = $model->getAnswer((int)$category_id);
		// dd($jawaban_peserta);

		$sorted = [];
		foreach ($kunci_jawaban as $index => $row) {
			$sorted[$row['id_soal']] = $row;
		}

		$jawaban_baru = [];
		foreach ($jawaban_peserta as $id_soal => $jawaban) {
			$item = $id_soal.":".$jawaban;
			array_push($jawaban_baru, $item);
		}
		// dd($jawaban_baru);
		// dd($array[$kunci_jawaban['id_soal']]);
		// dd($sorted);

		$jawaban_benar = 0;
		$i = 0;
		foreach ($jawaban_peserta as $key => $value) {
			if ($value == $sorted[$key]['jawaban']) {
				$i++;
				$jawaban_benar++;
			}
		}

		$nilai = $jawaban_benar/count($jawaban_peserta) * 100;

		// dd(" jawaban_benar ".$jawaban_benar);
		// dd(" nilai ".$nilai);
		$data = array(
            'user_id'  => $this->request->getPost('user_id'),
            'ujian_id'  => $this->request->getPost('ujian_id'),		
			// 'list_jawaban' => implode(",",$this->request->getPost('list_jawaban')),
			'list_jawaban' => implode(",", $jawaban_baru),
			'nilai_uji_teori' => $nilai,
            'nilai_bobot'  => $this->request->getPost('nilai_bobot'),			
          	'tgl_mulai'	=>  date("Y-m-d H:i:s"),
            // 'file' => $upload->getName()
        );
		// $jawaban = $this->request->getPost('list_jawaban');
		// dd($jawaban);

        $model->saveChoice($data);
        return redirect()->to(base_url('home'))->with('berhasil', 'Data Berhasil di Simpan');
    
    }	
}