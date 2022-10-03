<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop_user extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model(array('usersell_model'));
		$this->load->helper(array('form', 'url', 'html'));
	}

		public function index()
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$result = $this->usersell_model->readall();

			$data2 = [
				'tittle' => 'Jual',
				'list_all' => $result,
			];

			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data2);
			$this->load->view('shop_user/index', $data2);
			$this->load->view('templates/shop-user_prefooter', $data2);
			$this->load->view('templates/shop-user_footer');
		}

		public function account()
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data);
			$this->load->view('shop_user/account', $data);
			$this->load->view('templates/shop-user_prefooter');
			$this->load->view('templates/shop-user_footer');
		}

		public function list_order()
		{

			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$thisemail = $data['user']['email'];

			$result = $this->db->query("SELECT * FROM user_buy where `email_seller` = '$thisemail' and `status` = 1 OR `status` = 2;")->result();
			$result2 = $this->db->query("SELECT user.* FROM user inner join user_buy on user.email = user_buy.email_buyer")->row_array();

			$data2 = [
				'tittle' => 'List Order',
				'user_buy' => $result,
				'user_name' => $result2,
			];

			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data	);
			$this->load->view('shop_user/list_order', $data2);
			$this->load->view('templates/shop-user_prefooter');
			$this->load->view('templates/shop-user_footer');
		}

		public function sell()
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$result = $this->usersell_model->read();
			$data2 = [
				'tittle' => 'Jual',
				'list_sell' => $result,
			];

			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data	);
			$this->load->view('shop_user/sell', $data2);
			$this->load->view('templates/shop-user_prefooter');
			$this->load->view('templates/shop-user_footer');
		}

		public function addproduct()
		{
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->form_validation->set_rules('product_name', 'Product Name', 'required', [
				'required' => 'harus diisi'
			]);

			if($this->form_validation->run() == false){
				$data['title'] = 'Jahitin aja';
				$this->load->view('templates/shop-user_header', $data);
				$this->load->view('templates/shop-user_topbar', $data);
				$this->load->view('shop_user/addproduct');
				$this->load->view('templates/shop-user_prefooter');
				$this->load->view('templates/shop-user_footer');
			}
			else {
				$data = [
					'name' => $this->input->post('name'),
					'email' => $this->session->userdata('email'),
					'number' => $this->input->post('number'),
					'product_name' => $this->input->post('product_name'),
					'category' => $this->input->post('category'),
					'material' => $this->input->post('material'),
					'product_img' => $_FILES['product_img']['name'],
					'size' => $this->input->post('size'),
					'price' => $this->input->post('price'),
					'description' => $this->input->post('description')
				];
				$this->db->insert('user_sell', $data);
				redirect('shop_user/sell');
			}
		}

		public function buy($data2)
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data3['buyproduct'] = $this->db->get_where('user_sell', ['id' => $data2])->row_array();

			$data5 = [
				'email_buyer' => $this->session->userdata('email'),
				'email_seller' => $data3['buyproduct']['email'],
				'id_product' => $data3['buyproduct']['id'],
				'tailor_name' => $data3['buyproduct']['name'],
				'product_name' => $data3['buyproduct']['product_name'],
				'category' => $data3['buyproduct']['category'],
				'material' => $data3['buyproduct']['material'],
				'product_img' => $data3['buyproduct']['product_img'],
				'size' => $data3['buyproduct']['size'],
				'price' => $data3['buyproduct']['price'],
				'description' => $data3['buyproduct']['description']
			];

			$this->db->insert('user_buy', $data5);
			redirect('shop_user/checkout');
		}

		public function checkout()
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$result = $this->db->get_where('user_buy', ['email_buyer' => $this->session->userdata('email')])->result();
			$result2 = $this->db->query("SELECT user_sell.* FROM `user_sell` INNER JOIN user_buy ON user_sell.id = user_buy.id_product")->row_array();
			$data2 = [
				'tittle' => 'Jual',
				'list_buy' => $result,
				'user_seller' => $result2,
			];

			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data	);
			$this->load->view('shop_user/checkout', $data2);
			$this->load->view('templates/shop-user_prefooter');
			$this->load->view('templates/shop-user_footer');
		}

		public function checkout1($data2)
		{
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			if ($this->form_validation->run() == false) {
				$data['title'] = 'Jahitin aja';
				$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

				$this->load->view('templates/shop-user_header', $data);
				$this->load->view('templates/shop-user_topbar', $data);
				$this->load->view('shop_user/checkout', $data);
				$this->load->view('templates/shop-user_prefooter');
				$this->load->view('templates/shop-user_footer');
			}
			else {
			}
		}

		public function confirmbuy($data2)
		{
			$data['confirmbuy'] = $this->db->get_where('user_buy', ['id' => $data2])->row_array();
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			if ($data['confirmbuy']['status'] == 0){
				$this->db->set('status', 1);
				$this->db->where('id', $data['confirmbuy']['id']);
				$this->db->update('user_buy');
				$data3 = [
					'id_buy' => $data['confirmbuy']['id'],
					'id_product' => $data['confirmbuy']['id_product'],
					'email_seller' => $data['confirmbuy']['email_seller'],
					'email_buyer' => $data['confirmbuy']['email_buyer']
				];
				$this->db->insert('user_confirm', $data3);
			}
			else if ($data['confirmbuy']['status'] == 1){
				$this->db->set('status', 0);
				$this->db->where('id', $data['confirmbuy']['id']);
				$this->db->update('user_buy');

				$this->db->where('id_buy', $data['confirmbuy']['id']);
				$this->db->delete('user_confirm');
			}

			redirect('shop_user/checkout');
		}

		public function confirmbuy2($data2)
		{
			$data['confirmbuy'] = $this->db->get_where('user_buy', ['id' => $data2])->row_array();
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			if ($data['confirmbuy']['status'] == 1){
				$this->db->set('status', 2);
				$this->db->where('id', $data['confirmbuy']['id']);
				$this->db->update('user_buy');
			}
			else if ($data['confirmbuy']['status'] == 2){
				$this->db->set('status', 0);
				$this->db->where('id', $data['confirmbuy']['id']);
				$this->db->update('user_buy');

				$this->db->where('id_buy', $data['confirmbuy']['id']);
				$this->db->delete('user_confirm');
			}
			redirect('shop_user/list_order');
		}

		public function confirm()
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data);
			$this->load->view('shop_user/confirm', $data);
			$this->load->view('templates/shop-user_prefooter');
			$this->load->view('templates/shop-user_footer');
		}

		public function deleteproduct($data2)
		{
			if (!null == $data2) {
				$row =$this->usersell_model->deleteproduct($data2);
			}
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil dihapus</div>');
			redirect('shop_user/sell');
		}

		public function deletebuy($data2)
		{
			if (!null == $data2) {
				$this->db->where('id', $data2);
				$this->db->delete('user_buy');
			}
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil dihapus</div>');
			redirect('shop_user/checkout');
		}

		public function updateproduct($data2)
		{
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data3 = [
				'product' => $this->db->get_where('user_sell', ['id' => $data2])->row_array()
			];
			$this->form_validation->set_rules('product_name', 'Product Name', 'required', [
				'required' => 'harus diisi'
			]);
			if($this->form_validation->run() == false){
				$data['title'] = 'Jahitin aja';
				$this->load->view('templates/shop-user_header', $data);
				$this->load->view('templates/shop-user_topbar', $data);
				$this->load->view('shop_user/updateproduct', $data3);
				$this->load->view('templates/shop-user_prefooter');
				$this->load->view('templates/shop-user_footer');
			}
			else {
				$data4 = [
					'name' => $this->input->post('name'),
					'email' => $this->session->userdata('email'),
					'product_name' => $this->input->post('product_name'),
					'category' => $this->input->post('category'),
					'material' => $this->input->post('material'),
					'product_img' => $this->input->post('product_img'),
					'size' => $this->input->post('size'),
					'price' => $this->input->post('price'),
					'description' => $this->input->post('description')
				];
				$this->db->where('id', $id);
				$this->db->update('user', $data4);
		    redirect('shop_user/sell');
		 }
		}

		public function detailproduct($data2)
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$result = $this->db->query("SELECT * FROM user_sell where id = $data2;")->row_array();
			$data2 = [
				'tittle' => 'Jual',
				'product' => $result,
			];
			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data	);
			$this->load->view('shop_user/detailproduct', $data2);
			$this->load->view('templates/shop-user_prefooter');
			$this->load->view('templates/shop-user_footer');
		}

		public function result()
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$keyword = $this->input->post('keyword');
			$result = $this->db->query("SELECT * From user_sell where
																	(name LIKE '%$keyword%' OR
																	product_name LIKE '%$keyword%' OR
																	category LIKE '%$keyword%' OR
																	material LIKE '%$keyword%' OR
																	size LIKE '%$keyword%' OR
																	description LIKE '%$keyword%')")->result();

			$data2 = [
				'all_products' => $result,

			];
		/*	if ($data2 == '') {
			$this->session->set_flashdata('message', '<h2>Produk</h2>');
		} */

			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data	);
			$this->load->view('shop_user/result', $data2);
			$this->load->view('templates/shop-user_prefooter');
			$this->load->view('templates/shop-user_footer');
		}

		public function proof($data2)
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$getbuy = $this->db->query("SELECT * FROM user_buy where id = $data2")->row_array();
			$getidproduct = $getbuy['id_product'];
			$getproduct = $this->db->query("SELECT * FROM user_sell where id = '$getidproduct'")->row_array();

			$data3 = [
				'product' => $getproduct,
				'buyer' => $getbuy,
				'buyername' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
			];

			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data	);
			$this->load->view('shop_user/proof', $data3);
			$this->load->view('templates/shop-user_prefooter');
			$this->load->view('templates/shop-user_footer');
		}

		public function category($category)
		{
			$data['title'] = 'Jahitin aja';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$getproduct = $this->db->query("SELECT * FROM user_sell
																			where category like '%$category%' OR
																			product_name like '%$category%'")->result();
			$data3 = [
				'all_products' => $getproduct
			];

			$this->load->view('templates/shop-user_header', $data);
			$this->load->view('templates/shop-user_topbar', $data	);
			$this->load->view('shop_user/category', $data3);
			$this->load->view('templates/shop-user_prefooter');
			$this->load->view('templates/shop-user_footer');
		}
}
