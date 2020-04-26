<?php  

class Dashboard extends CI_Controller {

	public function index() {

		$data['title'] = "Dashboard";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('template_admin/footer');
	}
	
}

?>