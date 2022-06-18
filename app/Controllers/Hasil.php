<?php

namespace App\Controllers;
use App\Models\M_hasil;
class Hasil extends BaseController
{	
	// protected $table = 'm_user';
	private $db;

	public function __construct()
	{	
		$db = \Config\Database::connect();
	}
	
  public function get_saw(){
  
    $saw = new M_hasil();
    $get = $saw->getSaw();
    $no=1;
    foreach ($get->getResult() as $d) {
      $data[] = array($no++,$d->nama,$d->rank);
    }
     $output = array(
            "data" => $data
        );
    echo json_encode($output);

    }

  public function get_pm(){
  
    $saw = new M_hasil();
    $get = $saw->getPm();
    $no=1;
    foreach ($get->getResult() as $d) {
      $data[] = array($no++,$d->nama,$d->n_administrasi,$d->n_kompetensi,$d->n_mengajar,$d->n_wawancara,$d->n_akhir);
    }
     $output = array(
            "data" => $data
        );
    echo json_encode($output);

    }
	// public function show_berkas(){
 //     $berkas = new M_berkas();
 //     $data = $berkas->getBerkas();
 //     echo json_encode($data);
 //    }

 //    public function get_berkas(){
 //      $id=$this->request->getGet('id');
 //      $data_berkas = new M_berkas();
 //      $hsl = $data_berkas->getBerkas2($id);
 //      // if($hsl->countAllResults()>0){
 //          foreach ($hsl->getResult() as $data) {
 //              $hasil=array(
 //                  'id' => $data->id,
 //                  'transkrip' => $data->transkrip,
 //                  'sertifikat' => $data->sertifikat
 //                  ); 
 //          }
 //      // } 
 //     echo json_encode($hasil);  
 //    }

}