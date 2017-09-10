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
		$this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
        	$this->load->model('user_model');
        	$this->user_model->doLogin();
        }
        
		$this->load->view('login');
	}
	/**
	 * Logout function
	 */

	public function logout()
	{
		$newdata = array(
            'user_id'   => '',
            'username'  => '',
            'email'     => '',
            'logged_in' => FALSE
        );

        $this->session->set_userdata($newdata);
        redirect('login');
	}
}
