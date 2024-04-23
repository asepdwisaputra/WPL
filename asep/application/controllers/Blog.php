<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index()
    {
        $data['name'] = "Asep";
        $this->load->view('blog', $data);
    }
}
