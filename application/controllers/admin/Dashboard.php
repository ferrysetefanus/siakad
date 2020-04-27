<?php  

class Dashboard extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('pesan', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Anda belum login!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
					</div>");
				redirect('admin/auth');
		}
	}

	public function index() {

		$data = $this->model_user->getUserData($this->session->userdata('username'));
		$data = [
			'username' 	=> $data->username,
			'level'		=> $data->level
		];
		$data['title'] = "Dashboard";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('template_admin/footer');
	}
	
}

?>