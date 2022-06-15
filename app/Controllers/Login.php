<?php

namespace App\Controllers;
use App\Models\M_login;
class Login extends BaseController
{
    public function index()
    {	
        return view('login/index');
    }

	 public function login(){
	 	$session = \Config\Services::session();
	    $username = $this->request->getVar('username');
	    $password = md5($this->request->getVar('password'));
	    $m_login = new M_login();
	    $user = $m_login->get($username);
	    if(empty($user)){
	      $session->setFlashdata('message', 'Username tidak ditemukan');
	      return redirect()->to('/login');
	    }else{
	      if($username==$user->username AND $password == $user->password AND $user->status=='1' AND $user->aktif=='1'){
	        $session_set = array(
	          'authenticated'=>true,
	          'id'=>$user->id,
	          'username'=>$user->username,
	          'nama'=>$user->nama,
	          'role'=>$user->role,
	          'role_id'=>$user->role_id,
	          'aktif'=>$user->aktif
	        );
	        $session->set($session_set);
	        // helper_log('login', 'Login user');
	        return redirect()->to('/home'); 
	      }
	      // elseif ($username==$user->username AND $password == $user->password AND $user->status=='0') {
	      //   $id = array(
	      //     'id'=>$user->id
	      //   );
	      //   $session->set($id);
	      //   redirect('login/auth_password');
	      // }
	      // elseif ($username==$user->username AND $password == $user->password AND $user->aktif=='0') {
	      //   $session->setFlashdata('message', 'Akun di non-aktifkan, silahkan hubungi Administrator');
	      //   redirect('login');
	      // }
	      else{
	        $session->setFlashdata('message', 'Password salah');
	        return redirect()->to('/login');
	      }
	    }
	  }

	  public function logout()
	    {
	        $session = session();
	        $session->destroy();
	        return redirect()->to('/login');
	    }

}
