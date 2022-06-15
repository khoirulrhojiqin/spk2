<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pm extends Model
{
    protected $table      = 'm_pm_alternatif';
    protected $primaryKey = 'id_alternatif';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_alternatif','alternatif', 'k1', 'k2', 'k3', 'k4', 'k5', 'k6', 'k7', 'k8', 'k9', 'k10', 'k11', 'k12', 'ket'];

    public function getResult_saw()
    {	
    	$db = \Config\Database::connect();
    	// $id = session()->get('id');
    	$query = $db->table('m_pm_alternatif')->get();
    	return $query;

    }
    // public function getNilai()
    // {   
    //     $db = \Config\Database::connect();
    //     $query = $db->query("
    //         SELECT 
    //         -- GREATEST( max(k1), max(k2), max(k3), max(k4), max(k5), max(k6), max(k7)) AS max,
    //         -- LEAST( min(k8), min(k9), min(k10), min(k11), min(k12)) AS min
    //         MAX(k1) AS k1,
    //         MAX(k2) AS k2,
    //         MAX(k3) AS k3,
    //         MAX(k4) AS k4,
    //         MAX(k5) AS k5,
    //         MAX(k6) AS k6,
    //         MAX(k7) AS k7,
    //         MIN(k8) AS k8,
    //         MIN(k9) AS k9,
    //         MIN(k10) AS k10,
    //         MIN(k11) AS k11,
    //         MIN(k12) AS k12
    //         FROM m_saw_normalisasi
    //         ");
    //     return $query;

    // }

    public function getSelisih()
    {   
        $db = \Config\Database::connect();
        $query = $db->query("
            SELECT 
            alternatif,
            k1-(SELECT bobot FROM m_pm_kriteria WHERE kode='K01') AS k1,
            k2-(SELECT bobot FROM m_pm_kriteria WHERE kode='K02') AS k2,
            k3-(SELECT bobot FROM m_pm_kriteria WHERE kode='K03') AS k3,
            k4-(SELECT bobot FROM m_pm_kriteria WHERE kode='K04') AS k4,
            k5-(SELECT bobot FROM m_pm_kriteria WHERE kode='K05') AS k5,
            k6-(SELECT bobot FROM m_pm_kriteria WHERE kode='K06') AS k6,
            k7-(SELECT bobot FROM m_pm_kriteria WHERE kode='K07') AS k7,
            k8-(SELECT bobot FROM m_pm_kriteria WHERE kode='K08') AS k8,
            k9-(SELECT bobot FROM m_pm_kriteria WHERE kode='K09') AS k9,
            k10-(SELECT bobot FROM m_pm_kriteria WHERE kode='K10') AS k10,
            k11-(SELECT bobot FROM m_pm_kriteria WHERE kode='K11') AS k11,
            k12-(SELECT bobot FROM m_pm_kriteria WHERE kode='K12') AS k12
            FROM m_pm_alternatif;
            ");
        return $query;

    }

    public function getCf_sf(){
        $db = \Config\Database::connect();  
        $get = $db->table('m_pm_gap_temporary')->get();
        return $get;
    }

    function insertTemp($data)
    {
      $db = \Config\Database::connect();  
      $temp = $db->table('m_pm_gap_temporary');
      // $temp->emptyTable(); 

        // if ($temp->countAllResults() == 0 ) {
      $temp->insert($data);
        // }else{
            // $temp->emptyTable(); 
        // }
    }

    function insertTemp_cf_sf($data)
    {
      $db = \Config\Database::connect();  
      $temp = $db->table('m_pm_cf_sf_temporary');
      $temp->insert($data);
      
    }

    public function getNilai_akhir(){
        $db = \Config\Database::connect();  
        $get = $db->table('m_pm_cf_sf_temporary')->get();
        return $get;
    }
    
    function insertRank($data)
    {
      $db = \Config\Database::connect();  
      $temp = $db->table('m_pm_rank');
      $temp->insert($data);
      
    }
    //   return $a;
    // } 

    // function getBerkas(){
    // 	$db = \Config\Database::connect();  
    //     $id = session()->get('id');
    // 	$query = $db->table('m_berkas')->getWhere(['id_user' => $id]);
    // 	return $query;
    // }
}