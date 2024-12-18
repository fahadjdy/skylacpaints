<?php

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		$this->load->model('auth_model');
		$this->load->database();
		
	}
	public function index()
	{
		$this->load->view('Admin/login');
	}
		
	public function logout()
	{
		// unset($_SESSION['receptionist_data']);
	session_destroy();
		redirect('login');
	}
    public function admin_login()
	{
	
		 $username  = $this->input->post('username');
		 $password = $this->input->post('password');

		
			  $auth = $this->auth_model->login($username,$password);
			  
			  if($auth)
			  {
				   $admin_data = array(
					   'id' => $auth->id,
					   'admin_name' => $auth->username
				   );
				   $this->session->set_userdata('admin_data',$admin_data);
			
				   redirect('admin');

			  }
			  else{
				
				   redirect('login');
			  }
		
	}
}
