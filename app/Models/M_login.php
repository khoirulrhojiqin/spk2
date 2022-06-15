<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    public function get($username){
    	// $db      = \Config\Database::connect();
		// $builder = $db->table('m_user');
  //       $builder->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
  //       $result = $builder->get(); // Untuk mengeksekusi dan mengambil data hasil query
    	$query = $this->db->query("SELECT * from m_user where username='$username'");
    	$result = $query->getRow();

        return $result;
    }
	function update_pass($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function update_pass2($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}