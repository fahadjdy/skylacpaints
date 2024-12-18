<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile_Model extends CI_Model {
    function __construct() {
		parent::__construct();
		
	}

    public function getProfile()
	{
		$this->db->select('*')
		->from('profile');
		return $this->db->get()->result();
		
	}
    public function getSlider()
	{
		$this->db->select('*')
		->from('slider');
		return $this->db->get()->result();
		
	}

    public function getCategory()
	{
		$this->db->select('*')
		->from('category');
		return $this->db->get()->result();
		
	}
    public function getProduct()
	{
		$this->db->select('*')
		->from('product p')
		->join('category c','p.c_id = c.c_id','left');
		return $this->db->get()->result();
		
	}

    public function getIgallery()
	{
		$this->db->select('*')
		->from('igallery');
		return $this->db->get()->result();
		
	}

    public function getVgallery()
	{
		$this->db->select('*')
		->from('vgallery');
		return $this->db->get()->result();
		
	}
}
