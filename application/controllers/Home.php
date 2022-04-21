<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
    public function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }
    public function about()
    {
        $this->load->view('templates/header');
        $this->load->view('about/index');
        $this->load->view('templates/footer');
    }
}
