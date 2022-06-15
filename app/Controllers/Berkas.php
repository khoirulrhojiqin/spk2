<?php

namespace App\Controllers;
use App\Models\M_berkas;
class Berkas extends BaseController
{	
	// protected $table = 'm_user';
	private $db;

	public function __construct()
	{	
		$db = \Config\Database::connect();
	}
	
	public function show_berkas(){
     $berkas = new M_berkas();
     $data = $berkas->getBerkas();
     echo json_encode($data);
    }

    public function get_berkas(){
      $id=$this->request->getGet('id');
      $data_berkas = new M_berkas();
      $hsl = $data_berkas->getBerkas2($id);
      // if($hsl->countAllResults()>0){
          foreach ($hsl->getResult() as $data) {
              $hasil=array(
                  'id' => $data->id,
                  'transkrip' => $data->transkrip,
                  'sertifikat' => $data->sertifikat
                  ); 
          }
      // } 
     echo json_encode($hasil);  
    }

}