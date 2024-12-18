<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->model('profile_model');
	}

	public function index()
	{
		$this->load->view('index');
	}
		
	public function about()
	{
		$this->load->view('about');
	}	
	public function gallery()
	{
		$this->load->view('gallery');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function product()
	{
		$this->load->view('product');
	}

	public function services($c_url)
	{
		$data['data'] = $this->db->select('*')
		->from('category')
		->where('c_url',$c_url)
		->get()->row();
		if(empty($data['data'])){
			redirect('404');
		}
		$this->load->view('services',$data);
	}

	public function contact_submit()
	{
		// Get form data
		$data = array(
			'name' => $this->input->post('firstn'),
			'email' => $this->input->post('email'), 
			'phone' => $this->input->post('phone'),
			'subject' => $this->input->post('subject'),
			'message' => $this->input->post('message')
		);

		try {
			// Validate required fields
			if(empty($data['name']) || empty($data['email']) || empty($data['phone'])) {
				echo json_encode(array(
					'status' => false,
					'message' => 'Please fill in all required fields'
				));
				return;
			}

			// Validate email format
			if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
				echo json_encode(array(
					'status' => false,
					'message' => 'Please enter a valid email address'
				));
				return;
			}

			// Validate phone number (basic validation)
			if(!preg_match('/^[0-9]{10}$/', $data['phone'])) {
				echo json_encode(array(
					'status' => false, 
					'message' => 'Please enter a valid 10-digit phone number'
				));
				return;
			}

			if(mail($data['email'], $data['subject'], $data['message'])) {
				$response = array(
					'status' => true,
					'message' => 'Thank you for contacting us. We will get back to you soon!'
				);
			} else {
				$response = array(
					'status' => false,
					'message' => 'Sorry! Message could not be sent. Please try again later.'
				);
			}
		} catch(\Exception $e) {
			echo json_encode(array(
				'status' => false,
				'message' => 'An error occurred. Please try again later.'
			));
			return;
		}

		echo json_encode($response);
		return;
	}
}
