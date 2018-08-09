<?php
	/**
	 * 
	 */
	class login extends CI_Model
	{
		
		public function getData(){
			return $this->db->get('an_login')->result();
		}
	}
