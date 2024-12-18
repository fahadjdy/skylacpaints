<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_Model extends CI_Model {
    function __construct() {
		parent::__construct();
          $this->load->helper('date');
	}
    
    public function login($username,$password)
    {
         $this->db->where('username',$username);
         $this->db->where('password',$password);
        $query = $this->db->get('admin');
       
        if($query->num_rows() == 1)
        {
             return $query->row();
        }
       
    }
    public function get_profile()
    {
	$this->db->select('*')
	->from('profile');
	return $this->db->get()->result();
    }
    
}
?>
