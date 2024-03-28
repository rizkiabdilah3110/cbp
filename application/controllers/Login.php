<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
		
	}

	public function mainmain()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('pass');
		$var  = $this->db->query("select * from userr where usernmae = '$user' and pass = '$pass'");
		if($var->num_rows() > 0){
			// var_dump($var);
			redirect('main3');
		}else{
			echo"dbshabdjsa";
		}
		
	}
}
