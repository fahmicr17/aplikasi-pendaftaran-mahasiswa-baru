<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index(){
		$data['title'] = 'Formulir';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $formulir = $this->db->get_where('formulir', ['email' => $this->session->userdata('email')])->row_array();


       

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('formulir/index', $data);
        $this->load->view('templates/footer');
	}
}
