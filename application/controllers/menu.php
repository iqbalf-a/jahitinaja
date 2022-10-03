<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model(array('user_model'));
		$this->load->helper(array('form', 'url', 'html'));
		// $session_login=$this->session->userdata('logged_in');
		// $session_jabatan=$this->session->userdata('nama_jabatan');

	}
	/* public function __construct()
	{
		parent::__construct();
		is_logged_in();
	} */

	public function index()
	{

		$data['title'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu', 'menu', 'required');

		if($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('menu/index', $data);
				$this->load->view('templates/footer');
		}
		else {
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')] );
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu baru berhasil ditambahkan</div>');
			redirect('menu');
		}
	}

	public function submenu()
	{
		$data['title'] = 'Submenu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('menu_model', 'menu');

		$data['submenu'] = $this->menu->getsubmenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('menu_id', 'menu', 'required');
		$this->form_validation->set_rules('url', 'menu', 'required');
		$this->form_validation->set_rules('icon', 'icon', 'required');


		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/footer');
		}
		else {
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];
			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu baru berhasil ditambahkan</div>');
			redirect('menu/submenu');
		}
	}

	public function listuser()
	{
		$data['title'] = 'List User';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$result = $this->user_model->read();
		$data2 = [
			'tittle' => 'List User',
			'list_user' => $result,
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/listuser', $data2);
		$this->load->view('templates/footer');
	}

	public function deleteuser($data2)
	{
		if (!null == $data2) {
			$row = $this->user_model->delete($data2);
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil dihapus</div>');
		redirect('menu/listuser');
	}


}
