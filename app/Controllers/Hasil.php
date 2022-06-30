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
      $data[] = array($no++,$d->matkul,$d->prodi,$d->nama,$d->rank);
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
      $data[] = array($no++,$->matkul,$d->prodi,$d->nama,$d->n_administrasi,$d->n_kompetensi,$d->n_mengajar,$d->n_wawancara,$d->n_akhir);
    }
     $output = array(
            "data" => $data
        );
    echo json_encode($output);

    }

    public function get_nilai_perangkingan(){
    // $db = \Config\Database::connect();  
    // $tmp = $db->table('m_pm_rank');
    // $tmp->truncate();

    $nilai_akhir = new M_hasil();
    $get = $nilai_akhir->getNilai_akhir();
    // $no=1;
    foreach ($get->getResult() as $d) {
        
        $tot_max = $d->n_akhir;

      $data[] = array(
        $d->nama,
        $tot_max
      );

    }
   
     $output = array(
            "data" => $data,
            // "data2" => $data2
        );
    echo json_encode($output);
     // var_dump($output);

    }

}