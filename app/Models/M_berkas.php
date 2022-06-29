<?php

namespace App\Models;
use CodeIgniter\Model;

class M_berkas extends Model
{

    function getBerkas(){
     $db = \Config\Database::connect();
     $prodi = session()->get('prodi');
     $query = $db->query("
        SELECT a.id,a.nip_nim,a.nama,a.prodi,b.transkrip,b.sertifikat FROM m_user a 
        JOIN m_berkas b 
        ON a.id=b.id_user
        WHERE role_id='3' AND a.prodi='$prodi'
        ");
     return $query->getResult();
    }

    public function getBerkas2($id){
     $db = \Config\Database::connect();

     // $query = $db->query("
     //    SELECT a.id,a.nip_nim,a.nama,b.transkrip,b.sertifikat FROM m_user a 
     //    JOIN m_berkas b 
     //    ON a.id=b.id_user
     //    WHERE role_id='3'
     //    ");
     // return $query;
     // $id='12';
     $builder = $db->table('m_user a');
     $builder->select('a.id, a.nip_nim, a.nama, a.prodi, b.transkrip, b.sertifikat');
     $builder->join('m_berkas b', 'a.id = b.id_user');
     $builder->where('role_id', 3);
     $builder->where('a.id', $id);
     $query = $builder->get();
     return $query;
    }
   
}