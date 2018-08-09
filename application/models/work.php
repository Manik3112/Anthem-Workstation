<?php
	/**
	 * 
	 */
	class work extends CI_Model
	{
		
		public function getData(){
			return $this->db->get('an_work')->result();
		}
		public function getPastData(){
			return $this->db->query('SELECT * FROM an_work WHERE past = 1');
		}
	}
