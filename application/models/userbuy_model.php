<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class usersell_model extends CI_Model{
        public $table='user_sell';
        public $email='email';
				public $id = 'id';
        public $order='ASC';

				function readbuy(){
					return $this->db->get_where($this->table, ['email' => $this->session->userdata('email')])->result();
				}
			}
