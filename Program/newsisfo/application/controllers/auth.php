<?php
class auth extends CI_controller{
	public $page = 'login';

	public function __construct(){
		parent::__construct();
		$this->load->model('_auth');
		$this->load->model('_pegawai');
		$this->load->model('_client');
	}

	public function index(){
		$data['title'] = ucfirst($this->page);
		$data['usr'] = $this->_auth->getall();
		$this->load->view('login',$data);
	}

	public function login(){
		$data = array(
				'user_username' =>$this->input->post('login-name'),
				'user_password' =>$this->input->post('login-pass')
			);
		$query=$this->_auth->getby($data);
		if($query->num_rows()>0){
			foreach ($query->result() as $result_login) {
				$sess=array(
					'role' =>$result_login->user_role,
					'username' =>$result_login->user_username,
					);
				if($sess['role']=='pegawai'){
					$cuname = array(
						'username_pegawai' => $sess['username']
						);
					$namedata = $this->_pegawai->getby($cuname);
					if($namedata->num_rows()>0)
						foreach ($namedata->result() as $result_name) {
						$uname = array(
							$sess = array(
								'username' => $result_name->username_client,
								'role' => 'pegawai',
								'nama' => $result_name->nama_pegawai
								)
							);
					}
				}elseif($sess['role']=='client'){
					$cuname = array(
						'username_client' => $sess['username']
						);
					$namedata = $this->_client->getby($cuname);
					if($namedata->num_rows()>0)
						foreach ($namedata->result() as $result_name) {
						$uname = array(
							$sess = array(
								'username' => $result_name->username_client,
								'role' => 'client',
								'nama' => $result_name->nama_client
								)
							);
						$this->session->set_userdata($sess);
						redirect(base_url('index.php/transaksi/loadbyclient/'.$this->session->userdata('username')));
					}
				}else{
					$sess = array(
						'username' => 'admin',
						'role' => 'admin',
						'nama' => 'admin'
						);
				}
			}
			$this->session->set_userdata($sess);
			redirect(base_url('index.php/user/viewdaftarpegawai'));
		}
		else
		{
			echo"Username dan Password salah";
		}
	}

	public function loginbyid(){
		$load_id = $this->input->post('loadid');
		$sess = array(
			'username' => 'Costumer',
			'role' => 'Costumer',
			'nama' => 'Costumer',
			'idtran' => $this->input->post('loadid')
			);
		$this->session->set_userdata($sess);
		redirect(base_url('index.php/transaksi/loadbyidtrans/'.$this->session->userdata('idtran')));
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/auth'));
	}

	public function search($id_trans){
		$where = array('$id_transaksi' => $id_trans);
		$this->_transaksi->getby($where);
	}

}