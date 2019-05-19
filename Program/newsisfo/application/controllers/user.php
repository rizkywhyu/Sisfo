<?php
class user extends CI_controller{

	public $page = 'user';

	public function __construct(){
		parent::__construct();
		$this->load->model('_auth');
		$this->load->model('_pegawai');
		$this->load->model('_client');
		$this->load->library('form_validation');
	}

	// public function index(){
	// 	$data['title'] = $this->page;
	// 	$data['worker'] = $this->_pegawai->getall();
	// 	$data['client'] = $this->_client->getall();
	// 	$this->load->view('v_user',$data);
	// }

	public function viewdaftarclient(){
		$data['title'] = $this->page;
		$data['tipe'] = 'client';
		$this->load->view('header',$data);
		$this->load->view('v_user',$data);
	}

	public function vieweditclient(){
		$data['title'] = $this->page;
		$data['tipe'] = 'client';
		$this->load->view('header',$data);
		$this->load->view('v_edit_user',$data);
	}

	public function vieweditpegawai(){
		$data['title'] = $this->page;
		$data['tipe'] = 'pegawai';
		$this->load->view('header',$data);
		$this->load->view('v_edit_pegawai',$data);
	}

	public function viewdaftarpegawai(){
		$data['title'] = $this->page;
		$data['tipe'] = 'pegawai';
		$this->load->view('header',$data);
		$this->load->view('v_user',$data);
	}
	public function daftarpegawai(){
		$user_pegawai = array(
			'user_username' => $this->input->post('usernameid'),
			'user_password' => $this->input->post('passid'),
			'user_role' => 'pegawai'
			);
		$data_pegawai = array(
			'nama_pegawai' => $this->input->post('namaid'),
			'alamat_pegawai' => $this->input->post('alamatid'),
			'tlp_pegawai' => $this->input->post('tlpid'),
			'username_pegawai' => $this->input->post('usernameid'),
			'password_pegawai' => $this->input->post('passid')
			);
		$this->_pegawai->insertnew($data_pegawai);
		$this->_auth->insertnew($user_pegawai);
		redirect(base_url('index.php/user/viewdaftarpegawai'));
	}

	public function daftarclient(){
		$user_client = array(
			'user_username' => $this->input->post('usernameid'),
			'user_password' => $this->input->post('passid'),
			'user_role' => 'client'
			);
		$data_client = array(
			'nama_client' => $this->input->post('namaid'),
			'alamat_client' => $this->input->post('alamatid'),
			'tlp_client' => $this->input->post('tlpid'),
			'username_client' => $this->input->post('usernameid'),
			'password_client' => $this->input->post('passid')
			);
		$this->_client->insertnew($data_client);
		$this->_auth->insertnew($user_client);
		redirect(base_url('index.php/user/viewdaftarclient'));
	}

	public function deluser($username){
		$where = array('user_username' => $username);
		$this->_auth->hapusUser($this->where);
	}

	public function editpegawai($username){
		$this->_auth->where('user_username',$username);
		$this->_auth->del($data);
		$this->_pegawai->where('username_pegawai',$username);
		$this->_pegawai->update($data);
	}
	public function viewclient(){
		$data['title'] = $this->page;
		$data['relation'] = $this->_client->getall();
		$this->load->view('header',$data);
		$this->load->view('v_data_client',$data);
	}
	public function viewpegawai(){
		$data['title'] = $this->page;
		$data['worker'] = $this->_pegawai->getall();
		$this->load->view('header',$data);
		$this->load->view('v_data_pegawai',$data);
	}

	

	public function deleteclient($id) 
    {
        $row = $this->_client->get_by_id($id);

        if ($row) {
            $this->_client->deleteClient($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user/viewclient'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/viewclient'));
        }
    }

    public function deletepegawai($id) 
    {
        $row = $this->_pegawai->get_by_id($id);

        if ($row) {
            $this->_pegawai->deletePegawai($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user/viewpegawai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/viewpegawai'));
        }
    }


    public function updateclient($id) 
    {
        $row = $this->_client->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action_client'),
		'id' => set_value('id', $row->id),
		'nama_client' => set_value('nama_client', $row->nama_client),
		'alamat_client' => set_value('alamat_client', $row->alamat_client),
		'tlp_client' => set_value('tlp_client', $row->tlp_client),
		'username_client' => set_value('username_client', $row->username_client),
		'password_client' => set_value('password_client', $row->password_client),
        
	    );
            $this->load->view('header',$data);
			$this->load->view('v_edit_user',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/vieweditclient'));
        }
    }
    
     public function update_action_client() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
        
		'id' => $this->input->post('id',TRUE),
		'nama_client' => $this->input->post('nama_client',TRUE),
		'alamat_client' => $this->input->post('alamat_client',TRUE),
		'tlp_client' => $this->input->post('tlp_client',TRUE),
        'username_client' => $this->input->post('username_client',TRUE),
        'password_client' => $this->input->post('password_client',TRUE),
        
	    );

            $this->_client->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user/viewclient'));
        }
    }

     public function _rules() 
    {
		$this->form_validation->set_rules('nama_client', 'nama client', 'trim|required');
		$this->form_validation->set_rules('alamat_client', 'alamat client', 'trim|required');
		$this->form_validation->set_rules('tlp_pegawai', 'tlp client', 'trim|required');
		$this->form_validation->set_rules('username_client', 'username client', 'trim|required');
		$this->form_validation->set_rules('password_client', 'password client', 'trim|required');
	    
		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

     public function updatepegawai($id) 
    {
        $row = $this->_pegawai->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action_pegawai'),
		'id' => set_value('id', $row->id),
		'nama_pegawai' => set_value('nama_pegawai', $row->nama_pegawai),
		'alamat_pegawai' => set_value('alamat_pegawai', $row->alamat_pegawai),
		'tlp_pegawai' => set_value('tlp_pegawai', $row->tlp_pegawai),
		'username_pegawai' => set_value('username_pegawai', $row->username_pegawai),
		'password_pegawai' => set_value('password_pegawai', $row->password_pegawai),
        
	    );
            $this->load->view('header',$data);
			$this->load->view('v_edit_pegawai',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/vieweditpegawai'));
        }
    }
    
    public function update_action_pegawai() 
    {
        $this->_rulespegawai();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
        
		'id' => $this->input->post('id',TRUE),
		'nama_pegawai' => $this->input->post('nama_pegawai',TRUE),
		'alamat_pegawai' => $this->input->post('alamat_pegawai',TRUE),
		'tlp_pegawai' => $this->input->post('tlp_pegawai',TRUE),
        'username_pegawai' => $this->input->post('username_pegawai',TRUE),
        'password_pegawai' => $this->input->post('password_pegawai',TRUE),
        
	    );

            $this->_pegawai->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user/viewpegawai'));
        }
    }

    public function _rulespegawai() 
    {
		$this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'trim|required');
		$this->form_validation->set_rules('alamat_pegawai', 'alamat pegawai', 'trim|required');
		$this->form_validation->set_rules('tlp_pegawai', 'tlp pegawai', 'trim|required');
		$this->form_validation->set_rules('username_pegawai', 'username pegawai', 'trim|required');
		$this->form_validation->set_rules('password_pegawai', 'password pegawai', 'trim|required');
	    
		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}