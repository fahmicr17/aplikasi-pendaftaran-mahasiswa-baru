<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function daftar(){
		$data['title'] = 'Daftar';
        
        $this->load->view('daftar/index');
     
}