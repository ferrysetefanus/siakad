<?php  

class Model_user extends CI_Model {

	public function cek_login($username, $password) {

		$result = $this->db->where('username', $username)
				 		   ->where('password', $password)
				 		   ->limit(1)
				 		   ->get('user');

		if ($result->num_rows() > 0) {
			 return $result->row();
		} else {
			return false;
		}
	}

	public function getUserData($username) {

		$result = $this->db->where('username', $username)
						   ->limit(1)
						   ->get('user');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return false;
		}

	}
}

?>