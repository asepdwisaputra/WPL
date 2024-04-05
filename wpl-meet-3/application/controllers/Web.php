<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Web extends CI_Controller
{
    function construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = "Halaman depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_main', $data);
        $this->load->view('v_footer', $data);
    }
}
