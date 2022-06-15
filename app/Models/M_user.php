<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table      = 'm_user';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id','username','nip_nim', 'password', 'nama', 'role', 'status', 'role_id', 'created_at', 'updated_at', 'aktif'];

    public function getProfile()
    {	
    	$db = \Config\Database::connect();
    	$id = session()->get('id');
    	$query = $db->table('m_user_detail')->getWhere(['id_user' => $id]);
    	return $query;

    }

    function insertBerkas($data)
    {
      $db = \Config\Database::connect();  
      $data_user = $db->table('m_berkas');

      $id = session()->get('id');
      // $query = ;
        if ($data_user->where(['id_user' => $id])->countAllResults() == 0 ) {
            $a = $data_user->insert($data);
        }else{
            $data_user->where('id_user',$id);
            $a = $data_user->update($data);
        }

     
      return $a;
    } 

    function getBerkas(){
    	$db = \Config\Database::connect();  
        $id = session()->get('id');
    	$query = $db->table('m_berkas')->getWhere(['id_user' => $id]);
    	return $query;
    }
}