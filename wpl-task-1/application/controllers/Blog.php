<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{
		$data['name'] = "Asep";

		$this->load->view('page-bio/index', $data);
	}
}