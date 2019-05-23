<?php

class ContactController extends CI_Controller {

    public function view($page = 'home')
    {
        if( ! file_exists(APPPATH.'views/content/'.$page.'.php'))
        {
            $page = 'home';
        }

        $page = 'home';

        redirect($page);
    }

    public function index()
    {
        $data = array();
        $data['title'] = 'Home';
        $data['view_style'] = 'home.css';
        $data['view_controller'] = 'home_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');
        $this->load->view('content/home');
        $this->load->view('layout/footer');
        $this->load->view('layout/scripts', $data);

    }

}