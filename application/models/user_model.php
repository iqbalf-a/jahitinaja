<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class user_model extends CI_Model{
        public $table='user';
        public $id='id';
        public $order='ASC';

				function read(){
            return $this->db->get($this->table)->result();
        }

				function delete($id){
					$this->db->where($this->id, $id);
					$this->db->delete($this->table);
				}
    }

?>
