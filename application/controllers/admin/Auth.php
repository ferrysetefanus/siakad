<?php  

class Auth extends CI_Controller {

	public function index() {

		$data['title'] = "Login";
		$this->load->view('template_admin/header', $data);
		$this->load->view('admin/login');
		$this->load->view('template_admin/footer');
	}

	public function login() {

		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[3]', ['required' => 'Username wajib diisi!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', ['required' => 'Password wajib diisi!']);

		if ($this->form_validation->run() == FALSE) {
			
			$data['title'] = "Login";
			$this->load->view('template_admin/header', $data);
			$this->load->view('admin/login');
			$this->load->view('template_admin/footer');
		} else {
			$username = htmlspecialchars($this->input->post('username'));
			$password = md5(htmlspecialchars($this->input->post('password')));

			$check = $this->model_user->cek_login($username, $password); 

			if ($check == TRUE) {
				
				$sess_data['username'] = $check->username;
				$sess_data['email'] = $check->email;
				$sess_data['level'] = $check->level;
				$sess_data['logged_in'] = true;

				$this->session->set_userdata($sess_data);

				if ($sess_data['level'] == 'admin') {
					
					$this->session->set_flashdata('pesan', "<div class='alert alert-success alert-dismissible fade show' role='alert'>Berhasil melakukan login!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
						</div>");
					redirect('admin/dashboard');
				} else {
					$this->session->set_flashdata('pesan', "<div class='alert alert-success alert-dismissible fade show' role='alert'>Berhasil melakukan login!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
						</div>");
					redirect('dashboard');
				}
			} else {
				$this->session->set_flashdata('pesan', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Username atau Password salah!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
					</div>");
				redirect('admin/auth');
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('admin/auth');
	}
}


?>