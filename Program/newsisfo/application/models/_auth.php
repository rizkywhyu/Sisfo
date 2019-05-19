<?php
	class _auth extends CI_model{
		public $tabel="user";
		function getby($query){
			return $this->db->get_where($this->tabel,$query);
		}
		function getall(){
			return $this->db->get($this->tabel);
		}
		function insertnew($query){
			return $this->db->insert($this->tabel,$query);
		}
		function updateUser($id,$query){
			$this->db->where('bat_id',$id);
			return $this->db->update($this->tabel,$query);
		}
		function hapusUser($id){
			$this->db->where('user_username',$id);
			return $this->db->delete($this->tabel);
		}
	}
?>