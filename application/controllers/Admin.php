<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->model('auth_model');
		if (!$this->session->admin_data) {
			redirect('login');
		}
		
	}
	public function index()
	{
		
		$categroy = $this->db->count_all_results('category');
		$product = $this->db->count_all_results('product');
		$slider = $this->db->count_all_results('slider');
		$gallery = $this->db->count_all_results('igallery');
		$data['data'] = array(
			'category' => $categroy,
			'slider' => $slider,
			'gallery' => $gallery,
			'product' => $product
		);


		$this->load->view('Admin/dashboard',$data);
	}

	

// category 
	public function category()
	{
		$this->db->select('*')
		->from('category');
		$data['data']= $this->db->get()->result();
		$this->load->view('Admin/category',$data);
	}

	public function addcategory()
	{
		$this->load->view('Admin/addcategory');
	}
	
	public function addsingleCategory()
	{
		$c_name = $this->input->post('c_name');
		$c_img = $_FILES['c_img']['name'].rand(1, 200000);
		$c_content = $this->input->post('c_content');

		$c_name= mysqli_real_escape_string($this->db->conn_id, $c_name);

		$targetfolder = "assets/admin/category/";
		$targetfolder = $targetfolder . basename($c_img) ;
		if(move_uploaded_file($_FILES['c_img']['tmp_name'], $targetfolder))
		{

				$data = array(
					'c_name'=>$c_name,
					'c_img'=>$c_img,
					'c_content'=>$c_content
				);
				$this->db->insert('category',$data);
		}
	
		redirect('Admin/category');
	}

 	public function editcategory($c_id)
 	{
		$this->db->select('*')
		->from('category')
		->where('c_id',$c_id);
		$data['data']= $this->db->get()->result();
		$this->load->view('Admin/editcategory',$data);	
 	}

	 public function create_slug($c_name) {
		
		$slug = strtolower($c_name);
		$slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
		$slug = preg_replace('/-+/', '-', $slug);
		$slug = trim($slug, '-');
		
		return $slug;
	}

	 public function editsingleCategory()
	{
		$c_id = $this->input->post('c_id');
		$c_name = $this->input->post('c_name');
		$c_content = $this->input->post('c_content');
		$c_name= mysqli_real_escape_string($this->db->conn_id, $c_name);

		$c_url = $this->create_slug($c_name);
		if($_FILES['c_img']['name'] != '')
		{
				// remove old image 
				$old_img =$this->db->select('*')
						->from('category')
						->where('c_id',$c_id)
						->get()->result();
						unlink('assets/admin/category/'.$old_img[0]->c_img);


			$c_img = $_FILES['c_img']['name'].rand(1, 200000);
			$targetfolder = "assets/admin/category/";
			$targetfolder = $targetfolder . basename($c_img) ;
			if(move_uploaded_file($_FILES['c_img']['tmp_name'], $targetfolder))
			{
				
				$data = array(
					'c_name'=>$c_name,
					'c_content'=>$c_content,
					'c_img'=>$c_img,
					'c_url'=>$c_url
				);
				$this->db->where('c_id',$c_id);
				$this->db->update('category',$data);
			}
		}
		else{
			$data = array(
				'c_name'=>$c_name,
				'c_url'=>$c_url,
				'c_content'=>$c_content				
			);
			$this->db->where('c_id',$c_id);
			$this->db->update('category',$data);
		} 

		redirect('Admin/category');
	}

	 public function viewcategory($c_id)
 	{
		$this->db->select('*')
		->from('category')
		->where('c_id',$c_id);
		$data['data']= $this->db->get()->result();
		$this->load->view('Admin/viewcategory',$data);	
 	}
	 
	 public function deleteCategory($c_id)
    {
		$this->db->select('*')
		->from('category')
		->where('c_id',$c_id);
		$c_img= $this->db->get()->result();
		unlink('assets/admin/category/'.$c_img[0]->c_img);
		$this->db->delete('category', array('c_id' => $c_id)); 
    }


// products
	public function products()
	{
		$this->db->select('*')
		->from('product');
		$data['data']= $this->db->get()->result();
		$this->load->view('Admin/products',$data);
	}
	
	public function addSingleProduct()
	{
		$c_id = $this->input->post('c_id');
		$p_name = $this->input->post('p_name');
		$p_img = $_FILES['p_img']['name'].rand(1, 200000);
		$p_content = $this->input->post('p_content');

		$p_name= mysqli_real_escape_string($this->db->conn_id, $p_name);

		$targetfolder = "assets/admin/product/";
		$targetfolder = $targetfolder . basename($p_img) ;
		if(move_uploaded_file($_FILES['p_img']['tmp_name'], $targetfolder))
		{

				$data = array(
					'c_id'=>$c_id,
					'p_name'=>$p_name, 
					'p_img'=>$p_img,
					'p_content'=>$p_content
				);
				$this->db->insert('product',$data);
		}
	
		redirect('Admin/products');
	}
	public function addproducts()
	{
		$this->load->view('Admin/addproducts');
	}

	public function editproduct($p_id)
 	{
		$this->db->select('*')
		->from('product')
		->where('p_id',$p_id);
		$data['data']= $this->db->get()->result();
		$this->load->view('Admin/editproduct',$data);	
 	}

	public function editSingleProduct()
	{
		$c_id = $this->input->post('c_id');
		$p_id = $this->input->post('p_id');
		$p_name = $this->input->post('p_name');
		$p_content = $this->input->post('p_content');
		$p_name= mysqli_real_escape_string($this->db->conn_id, $p_name);
		if($_FILES['p_img']['name'] != '')
		{
				// remove old image 
				$old_img =$this->db->select('*')
						->from('product')
						->where('p_id',$p_id)
						->get()->result();
						unlink('assets/admin/product/'.$old_img[0]->p_img);


			$p_img = $_FILES['p_img']['name'].rand(1, 200000);
			$targetfolder = "assets/admin/product/";
			$targetfolder = $targetfolder . basename($p_img) ;
			if(move_uploaded_file($_FILES['p_img']['tmp_name'], $targetfolder))
			{
				
				$data = array(
					'p_name'=>$p_name,
					'p_content'=>$p_content,
					'p_img'=>$p_img,
					'c_id'=>$c_id
				);
				$this->db->where('p_id',$p_id);
				$this->db->update('product',$data);
			}
		}
		else{
			$data = array(
				'p_name'=>$p_name,
				'p_content'=>$p_content,
				'c_id'=>$c_id				
			);
			$this->db->where('p_id',$p_id);
			$this->db->update('product',$data);
		} 

		redirect('Admin/products');
	}

	public function viewproduct($p_id)
	{
	   $this->db->select('*')
	   ->from('product')
	   ->where('p_id',$p_id);
	   $data['data']= $this->db->get()->result();
	   $this->load->view('Admin/viewproduct',$data);	
	}

	public function deleteProduct($p_id)
    {
		$this->db->select('*')
		->from('product')
		->where('p_id',$p_id);
		$p_img= $this->db->get()->result();
		unlink('assets/admin/product/'.$p_img[0]->p_img);
		$this->db->delete('product', array('p_id' => $p_id)); 
    }


// slider 
	public function slider()
	{
		$this->db->select('*')
		->from('slider');
		$data['data']= $this->db->get()->result();	
		$this->load->view('Admin/slider',$data);
	}
	public function addSlider()
	{
		$s_name = $this->input->post('ig_name');
		$s_img = $_FILES['s_img']['name'].rand(1, 200000);
		$s_name= mysqli_real_escape_string($this->db->conn_id, $s_name);

		$targetfolder = "assets/admin/slider/";
		$targetfolder = $targetfolder . basename($s_img) ;
		
		if(move_uploaded_file($_FILES['s_img']['tmp_name'], $targetfolder))
		{

				$data = array(
					's_name'=>$s_name,
					's_img'=>$s_img
				);
				$this->db->insert('slider',$data);
		}
	
		redirect('Admin/slider');
	}

	public function deleteSlider($s_id)
    {
		$this->db->select('*')
		->from('slider')
		->where('s_id',$s_id);
		$s_img= $this->db->get()->result();
		unlink('assets/admin/slider/'.$s_img[0]->s_img);
		$this->db->delete('slider', array('s_id' => $s_id)); 
    }


// profile 
	public function profile()
	{
		$this->db->select('*')
		->from('profile');
		$data['data']= $this->db->get()->result();
			$this->load->view('Admin/profile',$data);
	}

	public function updateProfile()
	{
		$p_id=1;
		$name = $this->input->post('name');
		$name= mysqli_real_escape_string($this->db->conn_id, $name);

		$slogan = $this->input->post('slogan');
		$slogan= mysqli_real_escape_string($this->db->conn_id, $slogan);

		$phone = $this->input->post('phone');

		$email = $this->input->post('email');
		$email= mysqli_real_escape_string($this->db->conn_id, $email);

		$address = $this->input->post('address');
		$address= mysqli_real_escape_string($this->db->conn_id, $address);

		$about = $this->input->post('about');
		$about= mysqli_real_escape_string($this->db->conn_id, $about);

		$mission = $this->input->post('mission');
		$mission= mysqli_real_escape_string($this->db->conn_id, $mission);

		$facebook = $this->input->post('facebook');
		$facebook= mysqli_real_escape_string($this->db->conn_id, $facebook);

		
		$fbpage = $this->input->post('fb-page');

		$map = $this->input->post('map');
		$map= mysqli_real_escape_string($this->db->conn_id, $map);


// echo $map."<br> ";exit();
		$instagram = $this->input->post('instagram');
		$instagram= mysqli_real_escape_string($this->db->conn_id, $instagram);

		$twitter = $this->input->post('twitter');
		$twitter= mysqli_real_escape_string($this->db->conn_id, $twitter);

		$pintrest = $this->input->post('pintrest');
		$pintrest= mysqli_real_escape_string($this->db->conn_id, $pintrest);


		$logo = $_FILES['logo']['name'];
		$favicone = $_FILES['favicone']['name'];
		$about_img = $_FILES['about_img']['name'];
		
		
		$old_logo = $this->input->post('old_logo');
		$old_favicone = $this->input->post('old_favicone');
		$old_about_img = $this->input->post('old_about_img');
		
		// Data when there is no logo and about_img
		
		$data= array(
			
			'name' => $name,
			'slogan' => $slogan,
			'phone' => $phone,
			'email' => $email,
			'address' => $address,
			'about' => $about,
			'mission' => $mission,
			'facebook' => $facebook,
			'instagram' => $instagram,
			'twitter' => $twitter,
			'pintrest' => $pintrest,
			'map' => $map,
			'fbpage' => $fbpage
		);



		$datalogo = array();
		$datafavicone = array();
		$dataabout_img = array();

		// Data when there is logo 
		if($logo != '')
		{
			unlink('assets/admin/profile/'.$old_logo);
			$targetfolder = "assets/admin/profile/";
			$targetfolder = $targetfolder . basename($logo) ;
			if(move_uploaded_file($_FILES['logo']['tmp_name'], $targetfolder))
			{
				$datalogo = array(
					'logo' => $logo
				);
				$data = array_merge($data,$datalogo);

			}
		}



		// Data when there is favicone 
		if($favicone != '')
		{
			unlink('assets/admin/profile/'.$old_favicone);
			$targetfolder = "assets/admin/profile/";
			$targetfolder = $targetfolder . basename($favicone) ;
			if(move_uploaded_file($_FILES['favicone']['tmp_name'], $targetfolder))
			{
				$datafavicone = array(
					'favicone' => $favicone
				);
				$data = array_merge($data,$datafavicone);

			}
		}



		// Data when there is about_img 
		if($about_img != '')
		{
			unlink('assets/admin/profile/'.$old_about_img);
			$targetfolder = "assets/admin/profile/";
			$targetfolder = $targetfolder . basename($about_img) ;
			if(move_uploaded_file($_FILES['about_img']['tmp_name'], $targetfolder))
			{
				$dataabout_img = array(
					'about_img' => $about_img
				);
				$data = array_merge($data,$dataabout_img);

			}
		}





		$this->db->where('p_id',$p_id);
		$this->db->update('profile',$data);
		redirect('Admin/profile');
	}

	
// Gallery image
public function imagegallery()
{
	$this->db->select('*')
	->from('igallery');
	$data['data']= $this->db->get()->result();	
	$this->load->view('Admin/imagegallery',$data);
}

public function addIgallery()
{
	$ig_name = $this->input->post('ig_name');
	$ig_img = $_FILES['ig_img']['name'].rand(1, 200000);
	$ig_name= mysqli_real_escape_string($this->db->conn_id, $ig_name);

	$targetfolder = "assets/admin/igallery/";
	$targetfolder = $targetfolder . basename($ig_img) ;
	
	if(move_uploaded_file($_FILES['ig_img']['tmp_name'], $targetfolder))
	{

			$data = array(
				'ig_name'=>$ig_name,
				'ig_img'=>$ig_img
			);
			$this->db->insert('igallery',$data);
	}

	redirect('Admin/imagegallery');
}

public function deleteIgallery($ig_id)
{
	$this->db->select('*')
	->from('igallery')
	->where('ig_id',$ig_id);
	$ig_img= $this->db->get()->result();
	unlink('assets/admin/igallery/'.$ig_img[0]->ig_img);
	$this->db->delete('igallery', array('ig_id' => $ig_id)); 
}

}
