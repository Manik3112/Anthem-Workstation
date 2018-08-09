<?php
	/**
	 * 
	 */
	class client extends CI_Model
	{
		
		public function getData(){
			return $this->db->get('an_client')->result();
		}   
	}
