<?php  

class Auth extends CI_Controller {

	public function index() {

		$this->load->view('template_admin/header');
		$this->load->view('admin/login');
		$this->load->view('template_admin/footer');
	}
}


?>