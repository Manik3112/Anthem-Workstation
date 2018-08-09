<?php
	/**
	 * 
	 */
	class insert extends CI_Model
	{
		
		public function work($data = "false"){
			if($data != false){
				$this->db->insert('an_work', $data);

			}
		}
		public function client($data = "false"){
			if($data != false){
				$this->db->insert('an_client', $data);
			}
		}
		public function emp($data = "false"){
			if($data != false){
				$this->db->insert('an_emp', $data);
			}
		}

	}
