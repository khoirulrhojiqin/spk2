<?php

namespace App\Controllers;
use App\Models\M_user;
class User extends BaseController
{	
	// protected $table = 'm_user';
	private $db;

	public function __construct()
	{	
		$db = \Config\Database::connect();
		// if(session()->get('authenticated') != TRUE){
  //             return redirect()->to('/login');
  //         } 
	}
	

    public function index()
	{
        return view('/page/users');
	}

	public function userprofile()
  {   
  	  $data_user = new M_user();
      // $data['user_profil'] = $data_user->findAll();
      $data['user_profil'] = $data_user->getProfile();
      return view('/page/userprofile',$data);
  }
   
    function simpan_user(){  
         // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['username' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        $username= $this->request->getPost('username');
        $role = $this->request->getPost('role');
        $created_at = gmdate('Y-m-d H:i:s', strtotime("-3",time()));
        if ($role==1) {
            $r='admin';
        }else if ($role==2) {
            $r='dosen';
        }else{
            $r='mahasiswa';
        }

        $data_user = new M_user();
        $query = $data_user->where(["username" => $username])->countAllResults();
        // $this->db->table($this->table)->where(["status" => 1])->countAllResults(); //bisa begini
        if ($query != 0 ) {
            echo json_encode('gagal');
        }else{
             if($isDataValid){
	            $data = $data_user->insert([
	                  'username' => $this->request->getPost('username'),
			          'password' => md5($this->request->getPost('password')),
                      'nama'     => $this->request->getPost('nama'),
			          'nip_nim'  => $this->request->getPost('nip_nim'),
			          'role' 	 => $r,
			          'status' 	 => 1,
			          'aktif' 	 => 1,
			          'role_id'  => $this->request->getPost('role'),
			          'created_at'=>$created_at
	            ]);
	            echo json_encode($data);
	         }
            
        }
        
    }

    public function show_user(){
     // $data = $this->db->get('m_user')->result();
     // echo json_encode($data);
     $data_user = new M_user();
     $data = $data_user->findAll();
     echo json_encode($data);
    }


    public function hapus_user(){
    $id=$this->request->getPost('id');
    $data_user = new M_user();
    $data_user->delete($id);
    }

     public function get_user(){
      $id=$this->request->getGet('id');
      // $hsl = $this->db->query("select * from m_user where id='".$id."'");
      $data_user = new M_user();
      $data_user->where(["id" => $id]);
      $hsl = $data_user->get();
      if($data_user->countAllResults()>0){
          foreach ($hsl->getResult() as $data) {
              $hasil=array(
                  'id' => $data->id,
                  'nama' => $data->nama,
                  'nip_nim' => $data->nip_nim,
                  'username' => $data->username,
                  'role_id' => $data->role_id,
                  ); 
          }
          // var_dump($this->db->getLastQuery()->getQuery());
      } 
     echo json_encode($hasil); 
    }

    public function update_user(){
        $id=$this->request->getPost('id');
        $role=$this->request->getPost('role');
        $name=$this->request->getPost('name');
        $nip_nim=$this->request->getPost('nip_nim');
        $username=$this->request->getPost('username');
        if ($role==1) {
            $r='admin';
        }else if ($role==2) {
            $r='dosen';
        }else{
            $r='mahasiswa';
        }
      
        $data_user = new M_user();
        //validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // save
        if($isDataValid){
           $hasil = $data_user->update($id, [
                "role" => $r,
                "role_id" => $role,
                "nama" => $name,
                "nip_nim" => $nip_nim,
                "username" => $username
            ]);
            // return redirect('admin/news');
        }
           
        echo json_encode($hasil);
    }
    public function update_password(){
        $id=$this->request->getPost('id');
        $pass=md5($this->request->getPost('pass'));
        $data = array(
          'id' => $id,
          'password' => $pass,
        );
        $data_user = new M_user();
        $hasil = $data_user->update($id,$data);
        echo json_encode($hasil);

    }

    public function update_password2(){
        $id=$this->request->getPost('id');
        $old_pass=md5($this->request->getPost('old_pass'));
        $pass=md5($this->request->getPost('pass'));
        $data = array(
          'id' => $id,
          'password' => $pass,
        );
        // $data2 = $this->security->xss_clean($data);
        $data_user = new M_user();
        $data_user->where(['id' => $id, 'password' => $old_pass]);
      	$hsl = $data_user->get();
      	if($data_user->where(['id' => $id, 'password' => $old_pass])->countAllResults()==0){
      		echo json_encode('gagal');
      	}else{
      		$hasil = $data_user->update($id, $data);
            echo json_encode($hasil);
      	}        

    }

    public function update_profil(){
        $id=$this->request->getPost('id');
        $email=$this->request->getPost('email');
        $tgl=$this->request->getPost('tgl');
        $gender=$this->request->getPost('gender');
        $hp=$this->request->getPost('hp');
        $alamat=$this->request->getPost('alamat');
        $about=$this->request->getPost('about');

        $data = array(
          'id_user' => $id,
          'email' => $email,
          'tgl_lahir' => $tgl,
          'gender' => $gender,
          'no_hp' => $hp,
          'alamat' => $alamat,
          'tentang_saya' => $about,
        );
        $db = \Config\Database::connect();
        $data_user = $db->table('m_user_detail');
        $query =  $data_user->where(['id_user' => $id]);
        if ($query->countAllResults() != 0 ) {
          $data_user->where('id_user',$id);
          $hasil = $data_user->update($data);
        }else{
          $hasil = $data_user->insert($data);
        }           
        echo json_encode($hasil);
        // var_dump($query->countAllResults());

    }

   
    public function insert_berkas()
     {
     	$periksa = $this->validate([
            'transkrip' => [
                'uploaded[transkrip]',
                'mime_in[transkrip,application/pdf,application/zip,application/msword,application/x-tar]',
                'max_size[transkrip,5000]',
            ],
        ]);
        $periksa2 = $this->validate([
            'sertifikat' => [
                'uploaded[sertifikat]',
                'mime_in[sertifikat,application/pdf,application/zip,application/msword,application/x-tar]',
                'max_size[sertifikat,5000]',
            ],
        ]);
 
        if ($periksa) {
            $file = $this->request->getFile('transkrip');
            $newName = $file->getRandomName();
            $file->move(ROOTPATH.'public/uploads', $newName);
            // echo 'Upload Berhasil';
        }else{	
        	// echo 'Upload Gagal';
        }

        if ($periksa2) {
            $file2 = $this->request->getFile('sertifikat');
            $newName2 = $file2->getRandomName();
            $file2->move(ROOTPATH.'public/uploads', $newName2);
            // echo 'Upload Berhasil';
        }else{	
        	// echo 'Upload Gagal';
        }

      $data = array(
         'id_user'      => $this->request->getPost('id'),
         'transkrip'    => $newName,
         'sertifikat'   => $newName2
       );
       // $data2 = $this->security->xss_clean($data);
       $data_user = new M_user();
       $result_set = $data_user->insertBerkas($data);
       echo json_encode($result_set);
    }

    function get_data_berkas(){     
        $data_user = new M_user();
        $data = $data_user->getBerkas()->getResult();

        echo json_encode($data);
    }

}