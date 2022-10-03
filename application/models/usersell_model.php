<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class usersell_model extends CI_Model{
        public $table='user_sell';
        public $email='email';
				public $id = 'id';
        public $order='ASC';

				function read(){
          return $this->db->get_where($this->table, ['email' => $this->session->userdata('email')])->result();
        }

        function readall(){
          return $this->db->get($this->table)->result();
        }

				function deleteproduct($id){
					$this->db->where($this->id, $id);
					$this->db->delete($this->table);
				}

				function updateproduct($data2){
					$this->db->where($this->id, $this->input->post('id'));
					$this->db->update($this->table, $data2);
				}

				function searchbyid($data2)
				{
					$this->db->where('id',$data2);
					return $this->db->get($this->table)->row();
				}
    }

?>
