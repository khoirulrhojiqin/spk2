<?php

namespace App\Controllers;
use App\Models\M_saw;
class Saw extends BaseController
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
        return view('/page/metode_saw');
	}

	public function result_saw()
  {   
  	  $data_kriteria = new M_saw();
      $data['get_saw'] = $data_kriteria->getNormalisasi();
      // $data['get_saw'] = $data_kriteria->getResult_saw();
      // $data['get_nilai'] = $data_kriteria->getNilai();
      return view('/page/metode_saw_result',$data);
  }

  // public function hitung_hasil()
  // {
  //       return view('/page/hitung_hasil_saw');
  // }

   public function show_saw_normalisasi(){
     $data_kriteria = new M_saw();
     $data = $data_kriteria->findAll();
     echo json_encode($data);
    }
   
    function simpan_kriteria(){  
         // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['alternatif' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

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

        $data_kriteria = new M_saw();
        $query = $data_kriteria->where(["alternatif" => $alternatif])->countAllResults();
        // $this->db->table($this->table)->where(["status" => 1])->countAllResults(); //bisa begini
        if ($query != 0 ) {
            echo json_encode('gagal');
        }else{
             if($isDataValid){
	            $data = $data_kriteria->insert([
                'alternatif' => $this->request->getPost('alternatif'),
                'k1' => $this->request->getPost('k1'),
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
    $data_kriteria = new M_saw();
    $data_kriteria->delete($id);
    }

     public function get_kriteria(){
      $id=$this->request->getGet('id');
      // $hsl = $this->db->query("select * from m_user where id='".$id."'");
      $data_kriteria = new M_saw();
      $data_kriteria->where(["id_normalisasi" => $id]);
      $hsl = $data_kriteria->get();
      if($data_kriteria->countAllResults()>0){
          foreach ($hsl->getResult() as $data) {
              $hasil=array(
                  'id_normalisasi' => $data->id_normalisasi,
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
      
        $data_kriteria = new M_saw();
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
    
    function reset_data(){
      $db = \Config\Database::connect();  
      $tmp = $db->table('m_saw_normalisasi');
      $tmp->truncate();

    }

    function simpan_data(){
      $ad_k1 = 0.12; $ad_k2 = 0.11; $ad_k3 = 0.07; 
      $komp_k1 = 0.15; $komp_k2 = 0.08; $komp_k3 = 0.05; 
      $meng_k1 = 0.1; $meng_k2 = 0.07; $meng_k3 = 0.10; $meng_k4 = 0.06;
      $wan_k1 = 0.06; $wan_k2 = 0.03;
                  
      $db = \Config\Database::connect();  
      $tmp = $db->table('m_saw_rank');

      $data_kriteria = new M_saw();
      $get = $data_kriteria->getNormalisasi();

      foreach ($get->getResult() as $row) {
      $hsl = (($ad_k1*$row->k1)+($ad_k2*$row->k2)+($ad_k3*$row->k3)+($komp_k1*$row->k4)+($komp_k2*$row->k5)+($komp_k3*$row->k6)+($meng_k1*$row->k7)+($meng_k2*$row->k8)+($meng_k3*$row->k9)+($meng_k4*$row->k10)+($wan_k1*$row->k11)+($wan_k2*$row->k12));
      $h = (round($hsl,2)*100).'%';

        // Insert rank
        $dx = array(
           'nama' => $row->alternatif,
           'rank' => $h
         );
        $result_set = $tmp->insert($dx);
       // End insert
      }

    }
   
    

}