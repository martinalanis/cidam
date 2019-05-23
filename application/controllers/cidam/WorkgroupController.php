<?php

class WorkgroupController extends CI_Controller {

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
        $data['title'] = 'Grupo de trabajo';
        $data['view_style'] = 'workgroup.css';
        $data['view_controller'] = 'workgroup_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');
        $this->load->view('content/workgroup');
        $this->load->view('layout/footer');
        $this->load->view('layout/scripts', $data);

    }

    public function profile()
    {
        $data = array();
        $data['title'] = 'Grupo de trabajo';
        $data['view_style'] = 'workgroup.css';
        $data['view_controller'] = 'workgroup_vs.js';

        $profile = $this->uri->segment(2);

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');

        if( ! file_exists(APPPATH.'views/content/team/'.$profile.'.php'))
        {
            $this->load->view('content/workgroup');
        }
        else{
            $this->load->view('content/team/'.$profile);
        }

        $this->load->view('layout/footer');
        $this->load->view('layout/scripts', $data);

    }


}