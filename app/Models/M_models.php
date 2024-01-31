<?php
namespace App\Models;
use CodeIgniter\Model;
class M_models extends Model
{

	// ===========================Fix===========================
	public function tampil($table){
		 return $this->db->table($table)->get()->getresult();
	}

	public function input($table,$data){
		return $this->db->table($table)->insert($data);
	}

	public function hapus($table,$where){
		return $this->db->table($table)->delete($where);
	}

	public function getWhere($table,$where){
		return $this->db->table($table)->Where($where)->get()->getRowArray();
	}

	public function edit($table,$data,$where){
		return $this->db->table($table)->update($data,$where);
	}

	public function tampil_join($table,$table2,$on){
		return $this->db->table($table)->join($table2,$on,'left')->get()->getResultArray();	
	}


	// ===========================Random===========================
	public function search($table,$key){
		return $this->db->table($table)->like('id_user',$key)->get()->getresult();
	}

	public function search_code($table,$key){
		return $this->db->table($table)->like('code',$key)->get()->getresult();
	}

	public function search_plat($table,$key){
		return $this->db->table($table)->like('plat',$key)->get()->getresult();
	}

	public function search_spp($table,$id){
		return $this->db->table($table)->like('id_spp',$id)->get()->getresult();
	}

	public function stat($table,$key){
		return $this->db->table($table)->notlike('status',$key)->get()->getresult();
	}

	public function stat2($table,$key){
		return $this->db->table($table)->like('status',$key)->get()->getresult();
	}

	public function history($table,$key){
		return $this->db->table($table)->like('nis',$key)->get()->getresult();
	}

	public function cek_bulan($table,$key){
		return $this->db->table($table)->like('bulan',$key)->get()->getresult();
	}
		

	public function cek_nis($table,$key){
		return $this->db->table($table)->like('status',$key)->get()->getresult();
	}

}