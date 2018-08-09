<?php
	/**
	 * 
	 */
	class pages extends CI_Controller{
		public function admin($page = 'login'){
			if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
				show_404();
			}
			$this->load->view('admin/header');

			if($page=='login')
			{
				$this->load->model('login');
				$dataSet = $this->login->getData();
				$this->load->view('admin/'.$page,['dataSet' => $dataSet]);
			}
			else if($page=='show-work' || $page=='past-work' )
			{
				$this->load->model('work');
				$dataSet = $this->work->getData();
				$this->load->view('admin/'.$page,['dataSet' => $dataSet]);
			}
			else if($page=='show-employee')
			{
				$this->load->model('emp');
				$dataSet = $this->emp->getData();
				$this->load->view('admin/'.$page,['dataSet' => $dataSet]);
			}
			else if($page=='show-client')
			{
				$this->load->model('client');
				$dataSet = $this->client->getData();
				$this->load->view('admin/'.$page,['dataSet' => $dataSet]);
			}
			else if($page=='add-work')
			{
				$this->load->model('emp');
				$dataSet = $this->emp->getData();
				$this->load->view('admin/'.$page,['dataSet' => $dataSet]);
			}
			else
			{
				$this->load->view('admin/'.$page);
			}
			$this->load->view('admin/footer');
		}
		public function user($page){
			if(!file_exists(APPPATH.'views/user/'.$page.'.php')){
				show_404();
			}
			$this->load->view('user/header');
			if($page=='show-work' || $page=='past-work' )
			{
				$this->load->model('work');
				$dataSet = $this->work->getData();
				$this->load->view('user/'.$page,['dataSet' => $dataSet]);
			}
			else if($page=='show-employee')
			{
				$this->load->model('emp');
				$dataSet = $this->emp->getData();
				$this->load->view('user/'.$page,['dataSet' => $dataSet]);
			}
			else if($page=='show-client')
			{
				$this->load->model('client');
				$dataSet = $this->client->getData();
				$this->load->view('user/'.$page,['dataSet' => $dataSet]);
			}
			else
			{
				$this->load->view('user/'.$page);
			}
			$this->load->view('user/footer');
		}
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$this->load->view('include/header');
			$this->load->view('pages/'.$page);
			$this->load->view('include/footer');
		}
		public function insert(){
			$location = "Location: ".base_url()."404";
			$query = $this->input->GET('query');
			if($query == "client"){
				$cname = $this->input->POST('client-name');
				$data = array(
					'client_name' => $cname,
					'date' => date('Y-m-d')
				);
				$this->load->model('insert');
				$result = $this->insert->client($data);
				$location = "Location: ".base_url()."dashboard/show-client";
			}
			else if($query == "emp"){
				$ename = $this->input->POST('emp-name');
				$data = array(
					'emp_name' => $ename,
					'date' => date('Y-m-d')
				);
				$this->load->model('insert');
				$result = $this->insert->emp($data);
				$location = "Location: ".base_url()."dashboard/show-employee";
			}
			else if($query == "work"){
				$ename = $this->input->POST('emp-name');
				$pname = $this->input->POST('party-name');
				$work = $this->input->POST('work');
				$this->load->model('emp');
				$dataSet = $this->emp->getData();
				if($dataSet){
	              foreach ($dataSet as $dataItem){
	                if($dataItem->emp_name == $ename){
	                	$eid = $dataItem->emp_id;
	                }
	              }
	            }
				$data = array(
					'emp_name' => $ename,
					'emp_id' => $eid,
					'party_name' => $pname,
					'work' => $work,
					'date' => date('Y-m-d')
				);
				$this->load->model('insert');
				$result = $this->insert->work($data);
				$location = "Location: ".base_url()."dashboard/show-work";
			}

			header($location);
			}
	}