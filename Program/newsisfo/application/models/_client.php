<?php
	class _client extends CI_model{
		public $tabel="client";
		public $id="id";
		public $order="DESC";

		function getby($query){
			return $this->db->get_where($this->tabel,$query);
		}
		function getall(){
			return $this->db->get($this->tabel);
		}
		function insertnew($query){
			return $this->db->insert($this->tabel,$query);
		}
		function updateClient($id,$query){
			$this->db->where('bat_id',$id);
			return $this->db->update($this->tabel,$query);
		}
		
		function deleteClient($id)
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