<?php

namespace App\Models;

use CodeIgniter\Model;

class M_saw extends Model
{
    protected $table      = 'm_saw_normalisasi';
    protected $primaryKey = 'id_normalisasi';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_normalisasi','alternatif','id_user', 'k1', 'k2', 'k3', 'k4', 'k5', 'k6', 'k7', 'k8', 'k9', 'k10', 'k11', 'k12'];

    public function getResult_saw()
    {	
    	$db = \Config\Database::connect();
    	$id = session()->get('id');
        // $id_user = '5';
    	$query = $db->table('m_saw_normalisasi')->getWhere('id_user',$id);
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

    public function getNormalisasi()
    {   
        $db = \Config\Database::connect();
        $id_user = session()->get('id');
        $query = $db->query("
            SELECT 
            alternatif,
            k1/(SELECT MAX(k1)FROM m_saw_normalisasi) AS k1,
            k2/(SELECT MAX(k2)FROM m_saw_normalisasi) AS k2,
            (SELECT MIN(k3)FROM m_saw_normalisasi)/k3 AS k3,
            k4/(SELECT MAX(k4)FROM m_saw_normalisasi) AS k4,
            k5/(SELECT MAX(k5)FROM m_saw_normalisasi) AS k5,
            k6/(SELECT MAX(k6)FROM m_saw_normalisasi) AS k6,
            k7/(SELECT MAX(k7)FROM m_saw_normalisasi) AS k7,
            k8/(SELECT MAX(k8)FROM m_saw_normalisasi) AS k8,
            (SELECT MIN(k9)FROM m_saw_normalisasi)/k9 AS k9,
            k10/(SELECT MAX(k10)FROM m_saw_normalisasi) AS k10,
            (SELECT MIN(k11)FROM m_saw_normalisasi)/k11 AS k11,
            (SELECT MIN(k12)FROM m_saw_normalisasi)/k12 AS k12
            FROM m_saw_normalisasi where id_user='$id_user';
            ");
        return $query;

    }

    // function insertBerkas($data)
    // {
    //   $db = \Config\Database::connect();  
    //   $data_user = $db->table('m_berkas');

    //   $id = session()->get('id');
    //   // $query = ;
    //     if ($data_user->where(['id_user' => $id])->countAllResults() == 0 ) {
    //         $a = $data_user->insert($data);
    //     }else{
    //         $data_user->where('id_user',$id);
    //         $a = $data_user->update($data);
    //     }

     
    //   return $a;
    // } 

    // function getBerkas(){
    // 	$db = \Config\Database::connect();  
    //     $id = session()->get('id');
    // 	$query = $db->table('m_berkas')->getWhere(['id_user' => $id]);
    // 	return $query;
    // }
}