<?php
class transaksi extends CI_controller{
	public $page = 'transaksi';

	public function __construct(){
		parent::__construct();
		$this->load->model('_transaksi');
		$this->load->model('_client');
		$this->load->model('_auth');
		$this->load->library('form_validation');
	}
	public function index(){
		$data['title'] = $this->page; 
		$this->load->view('header',$data);
		$this->load->view('v_transaksi',$data);
	}

	public function viewedittransclient(){
		$data['title'] = $this->page;
		$this->load->view('header',$data);
		$this->load->view('v_edit_trans_client',$data);
	}

	public function viewedittranspegawai(){
		$data['title'] = $this->page;
		$this->load->view('header',$data);
		$this->load->view('v_edit_trans_pegawai',$data);
	}

	public function insert(){
    	$data = array(
        	'pengirim_nama' => $this->input->post('nama_pengirim'),
        	'pengirim_alamat' => $this->input->post('alamat_pengirim'),
        	'pengirim_notlp' => $this->input->post('notlp_pengirim'),
        	'penerima_nama' => $this->input->post('nama_penerima'),
        	'penerima_alamat' => $this->input->post('alamat_penerima'),
        	'penerima_notlp' => $this->input->post('notlp_penerima'),
        	'berat_barang' => $this->input->post('berat'),
        	'jenis_pengiriman' => $this->input->post('jenistrans'),
        	'biaya' => $this->input->post('berat')*20000,
        	'tanggal_pengiriman' => $this->input->post('tglkirim'),
        	'id_transaksi' => $this->input->post('idtrans'),
        	'tipe_pengirim' => ucfirst($this->input->post('tipe'))
        	 );
    	// if($this->input->post('tipe')=='client'){
    	// 	$nama = $this->input->post('nama_pengirim');
    	// 	$query= $this->_client->getby($nama);
    	// 	if($query->num_rows()>0){
    	// 		$this->_transaksi->insertnew($data);
   		// 		redirect(base_url('index.php/transaksi'));
    	// 	}
    	// 	else{
    	// 		echo "gaada";
    	// 	}
    	// }else{
    	// 	$this->_transaksi->insertnew($data);
   		// 	redirect(base_url('index.php/transaksi'));
    	// }

    	if($this->_transaksi->insertnew($data)){
    		redirect(base_url('index.php/transaksi'));
    	} else{
    		echo "gagal";
    	}
   		// redirect(base_url('index.php/transaksi'));
	}

	public function edit($data,$id_trans){
		
	}

	public function delete(){
		$where = array('id' => $id_trans);
		$this->_transaksi->hapus($where);
	}

	public function loadbyclient($namaaja){
		$data['title'] = $this->page;
		$cdata = array(
				'username_client' =>$namaaja
			);
		$vdata = $this->_client->getby($cdata);
		if($vdata->num_rows()>0){
			foreach ($vdata->result() as $result_uname) {
				$uname = array(
					'pengirim_nama' => $result_uname->nama_client
					);
			}
			$query = $this->_transaksi->getby($uname);
			if($query->num_rows()>0){
				$data['kirim'] = $query;
				$this->load->view('header',$data);
				$this->load->view('v_data_trans',$data);
			}else{
			echo "tidak ada";
			}
			// $this->load->view('header',$data);
			// $this->load->view('v_data_trans',$data);
		}
		else{
			echo "tidak ada";
		}
	}

	public function loadbyidtrans($id){
		if($id == NULL){
			echo "salah";
		}else{
			$data['title'] = $this->page;
		$cdata = array(
				'id_transaksi' =>$id
			);
		$vdata = $this->_transaksi->getby($cdata);
		if($vdata->num_rows()>0){
			$data['kirim'] = $vdata;
			$this->load->view('header',$data);
			$this->load->view('v_trans_biasa',$data);
		}
		else{
			echo "tidak ada";
		}
		}
		
	}

	public function viewtrans(){
		$data['title'] = $this->page;
		$data['kirim'] = $this->_transaksi->getall();
		$data['title'] = $this->page; 
		$this->load->view('header',$data);
		$this->load->view('v_data_trans',$data);
	}

	public function viewtransclient(){
		$data['title'] = $this->page;
		$t_data = array(
			'tipe_pengirim' => 'client'
		);
		$tdata = $this->_transaksi->getby($t_data);
		if($tdata->num_rows()>0){
			$data['kirim'] = $tdata;
			$this->load->view('header',$data);
			$this->load->view('v_trans_biasa',$data);
		}
		else{
			echo "tidak ada";
		}
	}

	public function viewtransbiasa(){
		$data['title'] = $this->page;
		$t_data = array(
			'tipe_pengirim' => 'biasa'
		);
		$tdata = $this->_transaksi->getby($t_data);
		if($tdata->num_rows()>0){
			$data['kirim'] = $tdata;
			$this->load->view('header',$data);
			$this->load->view('v_trans_biasa',$data);
		}
		else{
			echo "tidak ada";
		}
	}

	public function deleteclient($id) 
    {
        $row = $this->_transaksi->get_by_id($id);

        if ($row) {
            $this->_transaksi->deleteClient($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('transaksi/viewtransbiasa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transaksi/viewtransbiasa'));
    }
}

     public function updateclient($id) 
    {
        $row = $this->_transaksi->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('transaksi/update_action_client'),
		'pengirim_nama' => set_value('pengirim_nama', $row->pengirim_nama),
		'pengirim_alamat' => set_value('pengirim_alamat', $row->pengirim_alamat),
		'pengirim_notlp' => set_value('pengirim_notlp', $row->pengirim_notlp),
		'penerima_nama' => set_value('penerima_nama', $row->penerima_nama),
		'penerima_alamat' => set_value('penerima_alamat', $row->penerima_alamat),
		'penerima_notlp' => set_value('penerima_notlp', $row->penerima_notlp),
		'berat_barang' => set_value('berat_barang', $row->berat_barang),
        'jenis_pengiriman' => set_value('jenis_pengiriman', $row->jenis_pengiriman),
        'biaya' => set_value('biaya', $row->biaya),
        'id_transaksi' => set_value('id_transaksi', $row->id_transaksi),
        
        
	    );
            $this->load->view('header',$data);
			$this->load->view('v_edit_trans_client',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transaksi/viewedittransbiasa'));
        }
    }
    
    public function update_action_client() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
        
		'pengirim_nama' => $this->input->post('pengirim_nama',TRUE),
		'pengirim_alamat' => $this->input->post('pengirim_alamat',TRUE),
		'pengirim_notlp' => $this->input->post('pengirim_notlp',TRUE),
		'penerima_nama' => $this->input->post('penerima_nama',TRUE),
        'penerima_alamat' => $this->input->post('penerima_alamat',TRUE),
        'penerima_notlp' => $this->input->post('penerima_notlp',TRUE),
        'berat_barang' => $this->input->post('berat_barang',TRUE),
        'jenis_pengiriman' => $this->input->post('jenis_pengiriman',TRUE),
        'biaya' => $this->input->post('biaya',TRUE),
        'id_transaksi' => $this->input->post('id_transaksi',TRUE),
        
	    );

            $this->_transaksi->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('transaksi/viewtransbiasa'));
        }
    }

     public function _rules() 
    {
		$this->form_validation->set_rules('pengirim_nama', 'pengirim_nama', 'trim|required');
		$this->form_validation->set_rules('pengirim_alamat', 'pengirim_alamat', 'trim|required');
		$this->form_validation->set_rules('pengirim_notlp', 'pengirim_notlp', 'trim|required');
		$this->form_validation->set_rules('penerima_nama', 'penerima_nama', 'trim|required');
		$this->form_validation->set_rules('penerima_alamat', 'penerima_alamat', 'trim|required');
	    $this->form_validation->set_rules('penerima_notlp', 'penerima_notlp', 'trim|required');
	    $this->form_validation->set_rules('berat_barang', 'berat_barang', 'trim|required');
	    $this->form_validation->set_rules('jenis_pengiriman', 'jenis_pengiriman', 'trim|required');
	    $this->form_validation->set_rules('biaya', 'biaya', 'trim|required');
	    $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'trim|required');
		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

     public function deletepegawai($id) 
    {
        $row = $this->_transaksi->get_by_id($id);

        if ($row) {
            $this->_transaksi->deletePegawai($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('transaksi/viewtransclient'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transaksi/viewtransclient'));
        }
    }

    public function updatepegawai($id) 
    {
        $row = $this->_transaksi->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('transaksi/update_action_pegawai'),
		'pengirim_nama' => set_value('pengirim_nama', $row->pengirim_nama),
		'pengirim_alamat' => set_value('pengirim_alamat', $row->pengirim_alamat),
		'pengirim_notlp' => set_value('pengirim_notlp', $row->pengirim_notlp),
		'penerima_nama' => set_value('penerima_nama', $row->penerima_nama),
		'penerima_alamat' => set_value('penerima_alamat', $row->penerima_alamat),
		'penerima_notlp' => set_value('penerima_notlp', $row->penerima_notlp),
		'berat_barang' => set_value('berat_barang', $row->berat_barang),
        'jenis_pengiriman' => set_value('jenis_pengiriman', $row->jenis_pengiriman),
        'biaya' => set_value('biaya', $row->biaya),
        'id_transaksi' => set_value('id_transaksi', $row->id_transaksi),
        
	    );
            $this->load->view('header',$data);
			$this->load->view('v_edit_trans_pegawai',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transaksi/viewedittranspegawai'));
        }
    }
    
    public function update_action_pegawai() 
    {
        $this->_rulespegawai();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
        
		'pengirim_nama' => $this->input->post('pengirim_nama',TRUE),
		'pengirim_alamat' => $this->input->post('pengirim_alamat',TRUE),
		'pengirim_notlp' => $this->input->post('pengirim_notlp',TRUE),
		'penerima_nama' => $this->input->post('penerima_nama',TRUE),
        'penerima_alamat' => $this->input->post('penerima_alamat',TRUE),
        'penerima_notlp' => $this->input->post('penerima_notlp',TRUE),
        'berat_barang' => $this->input->post('berat_barang',TRUE),
        'jenis_pengiriman' => $this->input->post('jenis_pengiriman',TRUE),
        'biaya' => $this->input->post('biaya',TRUE),
        'id_transaksi' => $this->input->post('id_transaksi',TRUE),
        
	    );

            $this->_transaksi->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('transaksi/viewtransclient'));
        }
    }

    public function _rulespegawai() 
    {
		$this->form_validation->set_rules('pengirim_nama', 'pengirim_nama', 'trim|required');
		$this->form_validation->set_rules('pengirim_alamat', 'pengirim_alamat', 'trim|required');
		$this->form_validation->set_rules('pengirim_notlp', 'pengirim_notlp', 'trim|required');
		$this->form_validation->set_rules('penerima_nama', 'penerima_nama', 'trim|required');
		$this->form_validation->set_rules('penerima_alamat', 'penerima_alamat', 'trim|required');
	    $this->form_validation->set_rules('penerima_notlp', 'penerima_notlp', 'trim|required');
	    $this->form_validation->set_rules('berat_barang', 'berat_barang', 'trim|required');
	    $this->form_validation->set_rules('jenis_pengiriman', 'jenis_pengiriman', 'trim|required');
	    $this->form_validation->set_rules('biaya', 'biaya', 'trim|required');
	    $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'trim|required');
	    
		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}