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
        $prodi = session()->get('prodi');
    	$db = \Config\Database::connect();
        $query = $db->query("
            SELECT a.*,b.matkul FROM(
            SELECT a.*,b.id as id2 FROM m_pm_rank a
            JOIN m_user b ON a.nama=b.nama
            ) a 
            JOIN m_user_detail b ON a.id2=b.id_user
            WHERE a.prodi='$prodi'
            ");
    	// $query = $db->table('m_pm_rank')->where('prodi',$prodi)->get();
    	return $query;

    }   

    public function getSaw(){
        $prodi = session()->get('prodi');
        $db = \Config\Database::connect();  
        // $get = $db->table('m_saw_rank')->where('prodi',$prodi)->get();
        $get = $db->query("
            SELECT a.*,b.matkul FROM(
            SELECT a.*,b.id as id2 FROM m_saw_rank a
            JOIN m_user b ON a.nama=b.nama
            ) a 
            JOIN m_user_detail b ON a.id2=b.id_user
            WHERE a.prodi='$prodi'
            ");
        return $get;
    }

   public function getNilai_akhir(){
        $id = session()->get('prodi');
        $nama = session()->get('nama');
        $db = \Config\Database::connect();  
        // $get = $db->table('m_pm_rank')->where('prodi',$id)->get();
        $query = $db->query("
        SELECT nama, n_akhir FROM (SELECT nama, n_akhir FROM m_pm_rank where prodi='$id' ORDER BY n_akhir DESC LIMIT 2) AS Emp ORDER BY n_akhir LIMIT 2;
        ");
        return $query;
    }

    // public function getNilai_akhir(){
    //     $db = \Config\Database::connect();  
    //     $get = $db->table('m_pm_cf_sf_temporary')->get();
    //     return $get;
    // }
    
   
}