<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class boots extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		
			$this->load->model('students_models','students');
	}

	public function index()
	{
		$header_data['title']=" Welcome!";
		$data['name']="Cruz"; 
		$data['years']="20"; 
		$this->load->view ('include/header',$header_data);
		$this->load->view ('students/new_student',$data);
		$this->load->view ('include/footer');
	}
		
	public function add_student()
	{
		if ($_SERVER['REQUEST_METHOD']=='POST'){//form was submitted
		//save the new sudent
		//do some stuff
		}
		else{
		$header_data['title']=" Add New Student";
		$data=array();
		$this->load->view ('include/header',$header_data);
		$this->load->view ('students/new_student',$data);
		$this->load->view ('include/footer');
		}
		
		
	
		
		
		
		
		
		
	}
}