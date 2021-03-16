<?php namespace App\Models;

use CodeIgniter\Model;

class ModUsers extends Model
{
    protected $table = "users";
    protected $primaryKey = 'user_id';
	protected $allowedFields = ['user_level','username','password','active'];


	public function detail()
	{
		$this->select('*');
		$this->join('upload', 'upload.user_id=users.id');
		$this->where('upload.user_id');
		return $this->get()->getRowArray();
	}
	public function listing($id)
    {
         return $this->table('users')
         ->join('upload','upload.user_id=users.id', 'left')
		 ->join('upload_ktp','upload.user_id=users.id', 'left')
		 ->where('upload.user_id', $id)
         ->get()
		 ->getResultArray();
    }
	// public function listingdoc($id)
    // {
    //      return $this->table('users')
	// 	 ->join('upload_kta','upload_kta.user_id=users.id', 'left')
	// 	 ->join('upload_ktp','upload_ktp.user_id=users.id', 'left')
	// 	 ->join('upload_sim','upload_sim.user_id=users.id', 'left')
	// 	 ->join('upload_cv','upload_sim.user_id=users.id', 'left')
	// 	 ->join('upload_foto','upload_sim.user_id=users.id', 'left')
	// 	 ->join('upload_video','upload_sim.user_id=users.id', 'left')

	// 	 ->where('users.id', $id)
    //      ->get()
	// 	 ->getResultArray();
    // }
	public function listingdockta($id)
    {
         return $this->table('users')
		 ->join('upload_kta','upload_kta.user_id=users.id', 'left')
		 ->where('upload_kta.user_id', $id)
         ->get()
		 ->getResultArray();
    }
	public function listingdocktp($id)
    {
         return $this->table('users')
		 ->join('upload_ktp','upload_ktp.user_id=users.id', 'left')
		 ->where('upload_ktp.user_id', $id)
         ->get()
		 ->getResultArray();
    }
	public function listingdocsim($id)
    {
         return $this->table('users')
		 ->join('upload_sim','upload_sim.user_id=users.id', 'left')
		 ->where('upload_sim.user_id', $id)
         ->get()
		 ->getResultArray();
    }
	public function listingdocfoto($id)
    {
         return $this->table('users')
		 ->join('upload_foto','upload_foto.user_id=users.id', 'left')
		 ->where('upload_foto.user_id', $id)
         ->get()
		 ->getResultArray();
    }
	public function listingdoccv($id)
    {
         return $this->table('users')
		 ->join('upload_cv','upload_cv.user_id=users.id', 'left')
		 ->where('upload_cv.user_id', $id)
         ->get()
		 ->getResultArray();
    }
	public function listingvid($id)
    {
         return $this->table('users')
		 ->join('upload_video','upload_video.user_id=users.id', 'left')
		 ->where('upload_video.user_id', $id)
         ->get()
		 ->getResultArray();
    }
}