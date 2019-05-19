<?php
	class _transaksi extends CI_model{
		public $tabel="transaksi";
		public $id="id";
		public $order="DESC";

		function getby($query){
			return $this->db->get_where($this->tabel,$query);
		}
		function getall(){
			return $this->db->get($this->tabel);
		}
		function getbyname($name){
			return $this->db->query("select id from ".$this->table." where nama_pengirim =".$name."")->row()->id;
		}
		function insertnew($query){
			return $this->db->insert($this->tabel,$query);
		}
		function updateTransaksi($id,$query){
			$this->db->where('bat_id',$id);
			return $this->db->update($this->tabel,$query);
		}
		function hapusTransaksi($id){
			$this->db->where('user_username',$id);
			return $this->db->delete($this->tabel);
		}

		function deleteClient($id)
    	{
	        $this->db->where($this->id, $id);
	        $this->db->delete($this->tabel);
    	}

    	function deletePegawai($id)
    	{
	        $this->db->where($this->id, $id);
	        $this->db->delete($this->tabel);
    	}

    	function get_by_id($id)
    	{
	        $this->db->where($this->id, $id);
	        return $this->db->get($this->tabel)->row();
    	}

    	function total_rows($q = NULL) {
	        $this->db->like('id', $q);
			$this->db->or_like('nama_client', $q);
			$this->db->or_like('alamat_client', $q);
			$this->db->or_like('tlp_client', $q);
			$this->db->or_like('username_client', $q);
			$this->db->or_like('password_client', $q);
		    $this->db->from($this->tabel);
	        return $this->db->count_all_results();
    	}

    	function get_all()
    	{
	        $this->db->order_by($this->id, $this->order);
	        return $this->db->get($this->tabel)->result();
    	}

    	function update($id, $data)
	    {
	        $this->db->where($this->id, $id);
	        $this->db->update($this->tabel, $data);
	    }
	}
?>