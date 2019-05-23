<?php

class AboutController extends CI_Controller {

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
        $data['title'] = 'Quiénes Somos';
        $data['view_style'] = 'about.css';
        $data['view_controller'] = 'about_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');
        $this->load->view('content/about');
        $this->load->view('layout/footer');
        $this->load->view('layout/scripts', $data);

    }

}