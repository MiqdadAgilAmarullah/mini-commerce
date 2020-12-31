<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller {


	public function index()
	{
		check_already_login();
		$this->load->view('V_login');
	}

	public function process()
	{
		check_already_login();
		$post = $this->input->post(null, TRUE);
		
		if(isset ($post))
		{
			$this->load->model('M_user');
			$query = $this->M_user->login($post);
		
			if($query->num_rows() > 0)
			{
				$row = $query->row();
				// echo $row->username;
				$params = array(
					'email' => $row->txt_email,
					'nama' => $row->txt_nama,
					'cart' => $row->txt_cart_id,
				);
				// set session
				$this->session->set_userdata($params);

				echo "<script>
					alert('Selamat, Login berhasil');
					window.location='".site_url('C_dashboard')."';
				</script>";
			}else
			{
				echo "<script>
					alert('Login gagal');
					window.location='".site_url('C_auth')."';
				</script>";
			}
		}
	}

	public function registry()
	{
		check_already_login();
		$post = $this->input->post(null, TRUE);
		
		if(isset ($post))
		{
			$this->load->model('M_user');
			$query = $this->M_user->cek_exists_email($post);
			if ($query->num_rows() > 0) {
				echo "<script>
						alert('Maaf, email sudah terdaftar');
						window.location='".site_url('C_auth')."';
					</script>";
			}else{

				$query = $this->M_user->registry($post);
				$afftectedRows = $this->db->affected_rows();
				if ($afftectedRows == 1) {
					echo "<script>
						alert('Selamat, akun berhasil di daftarkan');
						window.location='".site_url('C_auth')."';
					</script>";
				}
			}
		}
	}
	public function logout()
	{
		$params = array('email', 'nama');
		$this->session->unset_userdata($params);
		redirect('C_auth');
	}
}
