<?php

namespace App\Models;

use CodeIgniter\Model;

class M_hasil extends Model
{
    // protected $table      = 'm_pm_alternatif';
    // protected $primaryKey = 'id_alternatif';

    // protected $useAutoIncrement = true;
    // protected $allowedFields = ['id_alternatif','alternatif', 'k1', 'k2', 'k3', 'k4', 'k5', 'k6', 'k7', 'k8', 'k9', 'k10', 'k11', 'k12', 'ket'];

    public function getPm()
    {	
    	$db = \Config\Database::connect();
    	$query = $db->table('m_pm_rank')->get();
    	return $query;

    }   

    public function getSaw(){
        $db = \Config\Database::connect();  
        $get = $db->table('m_saw_rank')->get();
        return $get;
    }

   

    // public function getNilai_akhir(){
    //     $db = \Config\Database::connect();  
    //     $get = $db->table('m_pm_cf_sf_temporary')->get();
    //     return $get;
    // }
    
   
}