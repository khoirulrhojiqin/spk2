<?php

namespace App\Controllers;
use App\Models\M_pm;
class Pm extends BaseController
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
        return view('/page/metode_pm');
	}

	public function selisih_pm()
  {   
  	  $data_kriteria = new M_pm();
      $data['get_pm'] = $data_kriteria->getSelisih();
      return view('/page/metode_pm_selisih',$data);
  }

  public function selisih_pm_gap(){ 
    $temp_pm = new M_pm();
    $db = \Config\Database::connect();  
    $id = session()->get('id');
    $tmp = $db->table('m_pm_gap_temporary');
    $tmp->where('id_user', $id)->delete();
    // $tmp->truncate(); 

    $data_kriteria = new M_pm();
    $get = $data_kriteria->getSelisih();
    $no=1;
    $id_user = session()->get('id');
    foreach ($get->getResult() as $d) {
    // $selisih = array('0','1','-1','2','-2','3','-3','4','-4');
    if ($d->k1 == '0') { $k1 = 5; }else if ($d->k1 == '1') { $k1 = 4.5; }else if ($d->k1 == '-1') { $k1 = 4; }else if ($d->k1 == '2') { $k1 = 3.5; }else if ($d->k1 == '-2') { $k1 = 3; }else if ($d->k1 == '3') { $k1 = 2.5; }else if ($d->k1 == '-3') { $k1 = 2; }else if ($d->k1 == '4') { $k1 = 1.5; }else if ($d->k1 == '-4') { $k1 = 1; }

    if ($d->k2 == '0') { $k2 = 5; }else if ($d->k2 == '1') { $k2 = 4.5; }else if ($d->k2 == '-1') { $k2 = 4; }else if ($d->k2 == '2') { $k2 = 3.5; }else if ($d->k2 == '-2') { $k2 = 3; }else if ($d->k2 == '3') { $k2 = 2.5; }else if ($d->k2 == '-3') { $k2 = 2; }else if ($d->k2 == '4') { $k2 = 1.5; }else if ($d->k2 == '-4') { $k2 = 1; }

    if ($d->k3 == '0') { $k3 = 5; }else if ($d->k3 == '1') { $k3 = 4.5; }else if ($d->k3 == '-1') { $k3 = 4; }else if ($d->k3 == '2') { $k3 = 3.5; }else if ($d->k3 == '-2') { $k3 = 3; }else if ($d->k3 == '3') { $k3 = 2.5; }else if ($d->k3 == '-3') { $k3 = 2; }else if ($d->k3 == '4') { $k3 = 3.5; }else if ($d->k3 == '-4') { $k3 = 1; }

    if ($d->k4 == '0') { $k4 = 5; }else if ($d->k4 == '1') { $k4 = 4.5; }else if ($d->k4 == '-1') { $k4 = 4; }else if ($d->k4 == '2') { $k4 = 3.5; }else if ($d->k4 == '-2') { $k4 = 3; }else if ($d->k4 == '3') { $k4 = 2.5; }else if ($d->k4 == '-3') { $k4 = 2; }else if ($d->k4 == '4') { $k4 = 4.5; }else if ($d->k4 == '-4') { $k4 = 1; }

    if ($d->k5 == '0') { $k5 = 5; }else if ($d->k5 == '1') { $k5 = 4.5; }else if ($d->k5 == '-1') { $k5 = 4; }else if ($d->k5 == '2') { $k5 = 3.5; }else if ($d->k5 == '-2') { $k5 = 3; }else if ($d->k5 == '3') { $k5 = 2.5; }else if ($d->k5 == '-3') { $k5 = 2; }else if ($d->k5 == '4') { $k5 = 5.5; }else if ($d->k5 == '-4') { $k5 = 1; }

    if ($d->k6 == '0') { $k6 = 5; }else if ($d->k6 == '1') { $k6 = 4.5; }else if ($d->k6 == '-1') { $k6 = 4; }else if ($d->k6 == '2') { $k6 = 3.5; }else if ($d->k6 == '-2') { $k6 = 3; }else if ($d->k6 == '3') { $k6 = 2.5; }else if ($d->k6 == '-3') { $k6 = 2; }else if ($d->k6 == '4') { $k6 = 6.5; }else if ($d->k6 == '-4') { $k6 = 1; }

    if ($d->k7 == '0') { $k7 = 5; }else if ($d->k7 == '1') { $k7 = 4.5; }else if ($d->k7 == '-1') { $k7 = 4; }else if ($d->k7 == '2') { $k7 = 3.5; }else if ($d->k7 == '-2') { $k7 = 3; }else if ($d->k7 == '3') { $k7 = 2.5; }else if ($d->k7 == '-3') { $k7 = 2; }else if ($d->k7 == '4') { $k7 = 7.5; }else if ($d->k7 == '-4') { $k7 = 1; }

    if ($d->k8 == '0') { $k8 = 5; }else if ($d->k8 == '1') { $k8 = 4.5; }else if ($d->k8 == '-1') { $k8 = 4; }else if ($d->k8 == '2') { $k8 = 3.5; }else if ($d->k8 == '-2') { $k8 = 3; }else if ($d->k8 == '3') { $k8 = 2.5; }else if ($d->k8 == '-3') { $k8 = 2; }else if ($d->k8 == '4') { $k8 = 1.5; }else if ($d->k8 == '-4') { $k8 = 1; }

    if ($d->k9 == '0') { $k9 = 5; }else if ($d->k9 == '1') { $k9 = 4.5; }else if ($d->k9 == '-1') { $k9 = 4; }else if ($d->k9 == '2') { $k9 = 3.5; }else if ($d->k9 == '-2') { $k9 = 3; }else if ($d->k9 == '3') { $k9 = 2.5; }else if ($d->k9 == '-3') { $k9 = 2; }else if ($d->k9 == '4') { $k9 = 1.5; }else if ($d->k9 == '-4') { $k9 = 1; }

    if ($d->k10 == '0') { $k10 = 5; }else if ($d->k10 == '1') { $k10 = 4.5; }else if ($d->k10 == '-1') { $k10 = 4; }else if ($d->k10 == '2') { $k10 = 3.5; }else if ($d->k10 == '-2') { $k10 = 3; }else if ($d->k10 == '3') { $k10 = 2.5; }else if ($d->k10 == '-3') { $k10 = 2; }else if ($d->k10 == '4') { $k10 = 1.5; }else if ($d->k10 == '-4') { $k10 = 1; }

    if ($d->k11 == '0') { $k11 = 5; }else if ($d->k11 == '1') { $k11 = 4.5; }else if ($d->k11 == '-1') { $k11 = 4; }else if ($d->k11 == '2') { $k11 = 3.5; }else if ($d->k11 == '-2') { $k11 = 3; }else if ($d->k11 == '3') { $k11 = 2.5; }else if ($d->k11 == '-3') { $k11 = 2; }else if ($d->k11 == '4') { $k11 = 1.5; }else if ($d->k11 == '-4') { $k11 = 1; }

    if ($d->k12 == '0') { $k12 = 5; }else if ($d->k12 == '1') { $k12 = 4.5; }else if ($d->k12 == '-1') { $k12 = 4; }else if ($d->k12 == '2') { $k12 = 3.5; }else if ($d->k12 == '-2') { $k12 = 3; }else if ($d->k12 == '3') { $k12 = 2.5; }else if ($d->k12 == '-3') { $k12 = 2; }else if ($d->k12 == '4') { $k12 = 1.5; }else if ($d->k12 == '-4') { $k12 = 1; }

     $data[] = array($no++,$d->alternatif, $k1,$k2,$k3,$k4,$k5,$k6,$k7,$k8,$k9,$k10,$k11,$k12);

       
      // Insert temp
      $dx = array(
          'id_user' => $id_user,
          'alternatif' => $d->alternatif,
          'k1' => $k1,
          'k2' => $k2,
          'k3' => $k3,
          'k4' => $k4,
          'k5' => $k5,
          'k6' => $k6,
          'k7' => $k7,
          'k8' => $k8,
          'k9' => $k9,
          'k10' => $k10,
          'k11' => $k11,
          'k12' => $k12
       );
       $result_set = $temp_pm->insertTemp($dx);
       // End insert
     
    }
     $output = array(
            "data" => $data
        );
    echo json_encode($output);
  }

  // public function hitung_hasil()
  // {
  //       return view('/page/hitung_hasil_pm');
  // }

   public function show_pm_kriteria(){
     $id = session()->get('id');
     $data_kriteria = new M_pm();
     $data = $data_kriteria->where('id_user', $id)->findAll();
     echo json_encode($data);
    }
   
    function simpan_kriteria(){  
         // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['alternatif' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        $id_user = session()->get('id');
        $alternatif= $this->request->getPost('alternatif');
        $k1 = $this->request->getPost('k1');
        $k2 = $this->request->getPost('k2');
        $k3 = $this->request->getPost('k3');
        $k4 = $this->request->getPost('k4');
        $k5 = $this->request->getPost('k5');
        $k6 = $this->request->getPost('k6');
        $k7 = $this->request->getPost('k7');
        $k8 = $this->request->getPost('k8');
        $k9 = $this->request->getPost('k9');
        $k10 = $this->request->getPost('k10');
        $k11 = $this->request->getPost('k11');
        $k12 = $this->request->getPost('k12');

        if ($k1 >= 3.51) {
          $ipk = 5;
        }elseif ($k1 >= 3.01) {
          $ipk = 4;
        }elseif ($k1 >= 2.51) {
          $ipk = 3;
        }elseif ($k1 >= 2.01) {
          $ipk = 2;
        }elseif ($k1 >= 1.01) {
          $ipk = 1;
        }
        $data_kriteria = new M_pm();
        $query = $data_kriteria->where(["alternatif" => $alternatif])->countAllResults();
        // $this->db->table($this->table)->where(["status" => 1])->countAllResults(); //bisa begini
        if ($query != 0 ) {
            echo json_encode('gagal');
        }else{
             if($isDataValid){
	            $data = $data_kriteria->insert([
                'id_user' => session()->get('id'),
                'alternatif' => $this->request->getPost('alternatif'),
                'k1' => $ipk,
                'k2' => $this->request->getPost('k2'),
                'k3' => $this->request->getPost('k3'),
                'k4' => $this->request->getPost('k4'),
                'k5' => $this->request->getPost('k5'),
                'k6' => $this->request->getPost('k6'),
                'k7' => $this->request->getPost('k7'),
                'k8' => $this->request->getPost('k8'),
                'k9' => $this->request->getPost('k9'),
                'k10' => $this->request->getPost('k10'),
                'k11' => $this->request->getPost('k11'),
	              'k12' => $this->request->getPost('k12'),
	            ]);
	            echo json_encode($data);
	         }
            
        }
        
    }

    public function hapus_kriteria(){
    $id=$this->request->getPost('id');
    $data_kriteria = new M_pm();
    $data_kriteria->delete($id);
    }

     public function get_kriteria(){
      $id=$this->request->getGet('id');
      // $hsl = $this->db->query("select * from m_user where id='".$id."'");
      $data_kriteria = new M_pm();
      $data_kriteria->where(["id_alternatif" => $id]);
      $hsl = $data_kriteria->get();
      if($data_kriteria->countAllResults()>0){
          foreach ($hsl->getResult() as $data) {
              $hasil=array(
                  'id_alternatif' => $data->id_alternatif,
                  'alternatif' => $data->alternatif,
                  'k1' => $data->k1,
                  'k2' => $data->k2,
                  'k3' => $data->k3,
                  'k4' => $data->k4,
                  'k5' => $data->k5,
                  'k6' => $data->k6,
                  'k7' => $data->k7,
                  'k8' => $data->k8,
                  'k9' => $data->k9,
                  'k10' => $data->k10,
                  'k11' => $data->k11,
                  'k12' => $data->k12
                  ); 
          }
          // var_dump($this->db->getLastQuery()->getQuery());
      } 
     echo json_encode($hasil); 
    }

    public function update_kriteria(){
        $id=$this->request->getPost('id');
        $name=$this->request->getPost('name');
        $k1=$this->request->getPost('k1');
        $k2=$this->request->getPost('k2');
        $k3=$this->request->getPost('k3');
        $k4=$this->request->getPost('k4');
        $k5=$this->request->getPost('k5');
        $k6=$this->request->getPost('k6');
        $k7=$this->request->getPost('k7');
        $k8=$this->request->getPost('k8');
        $k9=$this->request->getPost('k9');
        $k10=$this->request->getPost('k10');
        $k11=$this->request->getPost('k11');
        $k12=$this->request->getPost('k12');
      
        $data_kriteria = new M_pm();
        //validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // save
        if($isDataValid){
           $hasil = $data_kriteria->update($id, [
                "alternatif" => $name,
                "k1" => $k1,
                "k2" => $k2,
                "k3" => $k3,
                "k4" => $k4,
                "k5" => $k5,
                "k6" => $k6,
                "k7" => $k7,
                "k8" => $k8,
                "k9" => $k9,
                "k10" => $k10,
                "k11" => $k11,
                "k12" => $k12
            ]);
            // return redirect('admin/news');
        }
           
        echo json_encode($hasil);
    }
    
    public function cf_sf(){
      return view('/page/metode_pm_cf_sf');
    }
    public function get_cf_sf(){
    // $temp_pm = new M_pm();
    // $db = \Config\Database::connect();  
    // $tmp = $db->table('m_pm_gap_temporary');
    // $tmp->truncate(); 

    $cf_sf = new M_pm();
    $get = $cf_sf->getCf_sf();
    $no=1;
    foreach ($get->getResult() as $d) {
      $data[] = array($no++,$d->alternatif, $d->k1,$d->k2,$d->k3,$d->k4,$d->k5,$d->k6,$d->k7,$d->k8,$d->k9,$d->k10,$d->k11,$d->k12);
    }
     $output = array(
            "data" => $data
        );
    echo json_encode($output);

    }

    public function get_cf_sf_hasil(){
    $db = \Config\Database::connect();  
    $id = session()->get('id');
    $tmp = $db->table('m_pm_cf_sf_temporary');
    $tmp->where('id_user', $id)->delete();
    // $tmp->truncate();

    $cf_sf = new M_pm();
    $get = $cf_sf->getCf_sf();
    $id_user = session()->get('id');
    // $no=1;
    foreach ($get->getResult() as $d) {
        $ad_cf = round($d->k1+$d->k2/2,1);
        $ad_sf = round($d->k3/1,1);
        $ko_cf = round($d->k4+$d->k5/2,1);
        $ko_sf = round($d->k6/1,1);
        $me_cf = round($d->k8+$d->k9+$d->k10/3,1);
        $me_sf = round($d->k7/1,1);
        $wa_cf = round($d->k11/1,1);
        $wa_sf = round($d->k12/1,1);

      $data[] = array($d->alternatif, $ad_cf,$ad_sf,$ko_cf,$ko_sf,$me_cf,$me_sf,$wa_cf,$wa_sf);
      // Insert temp
      $dx = array(
          'id_user' => $id_user,
          'alternatif' => $d->alternatif,
          'administrasi_cf' => $ad_cf,
          'administrasi_sf' => $ad_sf,
          'kompetensi_cf'   => $ko_cf,
          'kompetensi_sf'   => $ko_sf,
          'mengajar_cf'     => $me_cf,
          'mengajar_sf'     => $me_sf,
          'wawancara_cf'    => $wa_cf,
          'wawancara_sf'    => $wa_sf
       );
       $result_set = $cf_sf->insertTemp_cf_sf($dx);
       // End insert
    }
     $output = array(
            "data" => $data
        );
    echo json_encode($output);

    }

   public function nilai_akhir(){
      return view('/page/metode_pm_nilai_akhir');
    }

   public function get_nilai_akhir(){
    $nilai_akhir = new M_pm();
    $get = $nilai_akhir->getNilai_akhir();
    // $no=1;
    foreach ($get->getResult() as $d) {
        $ad_cf = $d->administrasi_cf;
        $ad_sf = $d->administrasi_sf;
        $ad_tot= round(($d->administrasi_cf*(20/100))+($d->administrasi_sf*(10/100)),2);
        $ko_cf = $d->kompetensi_cf;
        $ko_sf = $d->kompetensi_sf;
        $ko_tot= round(($d->kompetensi_cf*(20/100))+($d->kompetensi_sf*(8/100)),2);
        $me_cf = $d->mengajar_cf;
        $me_sf = $d->mengajar_sf;
        $me_tot= round(($d->mengajar_cf*(20/100))+($d->mengajar_sf*(13/100)),2);
        $wa_cf = $d->wawancara_cf;
        $wa_sf = $d->wawancara_sf;
        $wa_tot= round(($d->wawancara_cf*(5/100))+($d->wawancara_sf*(4/100)),2);

      $data[] = array(
        $d->alternatif, 
        $ad_cf,$ad_sf,$ad_tot,
        $ko_cf,$ko_sf,$ko_tot,
        $me_cf,$me_sf,$me_tot,
        $wa_cf,$wa_sf,$wa_tot
      );

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

    $nilai_akhir = new M_pm();
    $get = $nilai_akhir->getNilai_akhir();
    // $no=1;
    foreach ($get->getResult() as $d) {
        
        $ad_tot= number_format((float)($d->administrasi_cf*(20/100))+($d->administrasi_sf*(10/100)), 2, '.', '');
        $ko_tot= number_format((float)($d->kompetensi_cf*(20/100))+($d->kompetensi_sf*(8/100)), 2, '.', '');
        $me_tot= number_format((float)($d->mengajar_cf*(20/100))+($d->mengajar_sf*(13/100)), 2, '.', '');
        $wa_tot= number_format((float)($d->wawancara_cf*(5/100))+($d->wawancara_sf*(4/100)), 2, '.', '');
        $tot_max = number_format((float)($ad_tot*(30/100))+($ko_tot*(28/100))+($me_tot*(33/100))+($wa_tot*(9/100)), 2, '.', '');

      $tertinggi[] = $tot_max.$d->alternatif;
      $data[] = array(
        $d->alternatif, 
        $ad_tot,
        $ko_tot,
        $me_tot,
        $wa_tot,
        $tot_max
      );
      // Insert temp
      // $dx = array(
      //     'nama'          => $d->alternatif,
      //     'n_administrasi'=> $ad_tot,
      //     'n_kompetensi'  => $ko_tot,
      //     'n_mengajar'    => $me_tot,
      //     'n_wawancara'   => $wa_tot,
      //     'n_akhir'       => $tot_max
      //  );
      //  $nilai_akhir->insertRank($dx);
       // End insert

    }
            // mencari nilai tertinggi
            $str = max($tertinggi); 
            $max_1 = $max_2 = 0;
            for ($i=0; $i<count($tertinggi); $i++) {
                if ($tertinggi[$i] > $max_1) {
                  $max_2 = $max_1;
                  $max_1 = $tertinggi[$i];
                } else if ($tertinggi[$i] > $max_2 && $tertinggi[$i] != $max_2) {
                  $max_2 = $tertinggi[$i];
                }
            }

            $n_max1 = preg_replace('/[^0-9.]/', '', $max_1);
            $n_max2 = preg_replace('/[^0-9.]/', '', $max_2);
            if ($n_max1 == $n_max2 || $n_max1 > $n_max2) {
              $numbers = preg_replace('/[^0-9. | ]/', '', $max_1.' | '.$max_2);
              $letters = preg_replace('/[^a-zA-Z &]/', '', $max_1.' & '.$max_2);
            }else{
              $numbers = preg_replace('/[^0-9.]/', '', $str);
              $letters = preg_replace('/[^a-zA-Z ]/', '', $str);
            }
            // end mencari nilai tertinggi
            // $session = \Config\Services::session();
            // 
            // $session_set = array(
            // 'pm_nama'=>$letters,
            // 'pm_number'=>$numbers
          // );
            // $session->set($session_set);
            $data2[] = array($letters,$numbers);
     // $l[] = array($letters);
     $output = array(
            "data" => $data,
            "data2" => $data2
        );
     // $output2 = array("huruf" => $letters,
     //        "nilai" => $numbers);
    echo json_encode($output);
     // var_dump($output);

    }

    function reset_data(){
      $db = \Config\Database::connect();  
      $tmp = $db->table('m_pm_alternatif');
      $tmp->truncate();

    }

    function simpan_data(){
      $nilai_akhir = new M_pm();
      $get = $nilai_akhir->getNilai_akhir();
      foreach ($get->getResult() as $d) {
          $ad_tot= number_format((float)($d->administrasi_cf*(20/100))+($d->administrasi_sf*(10/100)), 2, '.', '');
          $ko_tot= number_format((float)($d->kompetensi_cf*(20/100))+($d->kompetensi_sf*(8/100)), 2, '.', '');
          $me_tot= number_format((float)($d->mengajar_cf*(20/100))+($d->mengajar_sf*(13/100)), 2, '.', '');
          $wa_tot= number_format((float)($d->wawancara_cf*(5/100))+($d->wawancara_sf*(4/100)), 2, '.', '');
          $tot_max = number_format((float)($ad_tot*(30/100))+($ko_tot*(28/100))+($me_tot*(33/100))+($wa_tot*(9/100)), 2, '.', '');

        // $tertinggi[] = $tot_max.$d->alternatif;
        $data[] = array(
          $d->alternatif, 
          $ad_tot,
          $ko_tot,
          $me_tot,
          $wa_tot,
          $tot_max
        );
        // Insert rank
        $dx = array(
            'prodi' => session()->get('prodi'),
            'id_user' => session()->get('id'),
            'nama'          => $d->alternatif,
            'n_administrasi'=> $ad_tot,
            'n_kompetensi'  => $ko_tot,
            'n_mengajar'    => $me_tot,
            'n_wawancara'   => $wa_tot,
            'n_akhir'       => $tot_max
         );
         $nilai_akhir->insertRank($dx);
       // End insert

    }

    }

    function get_mahasiswa(){
      $mahasiswa = new M_pm();
      // $get = $mahasiswa->getNilai_akhir();
        if (isset($_GET['term'])) {
            $result = $mahasiswa->search_mahasiswa($_GET['term']);
            // if (count($result) > 0) {
            foreach ($result->getResult() as $row)
                $arr_result[] = $row->nama;
                echo json_encode($arr_result);
            // }
        }
    }
    
    function get_sub_category(){
        $mahasiswa = new M_pm();

        $nama = $this->request->getPost('id');
        $data = $mahasiswa->get_sub_category($nama)->getResult();
        // $data = $this->product_model->get_sub_category($category_id)->result();
        echo json_encode($data);
    }

}