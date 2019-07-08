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
        $data['title'] = 'Contacto';
        // $data['view_style'] = 'contact.css';
        $data['view_controller'] = 'contact_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');
        $this->load->view('content/contact');
        $this->load->view('layout/footer');
        $this->load->view('layout/scripts', $data);
    }

    public function seguridad($entrada){
        return htmlentities(trim($entrada));
    }

    public function contactForm(){
        $base_url= "http://" . $_SERVER['SERVER_NAME'];
        $name = $this->input->post('name');
        $email = "Sin email";
        $cel = "Sin teléfono";

        switch ($this->input->post('forma_contacto')) {
            case 1:
            $email = $this->input->post('email');
            break;
            case 2:
            $cel = $this->input->post('telephone');
            break;
            case 3:
            $email = $this->input->post('email');
            $cel = $this->input->post('telephone');
            break;
            default:
            $email = $this->input->post('email');
            break;
        }
        
        $mensaje = $this->input->post('comments');


        $mail = '
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contacto</title>
        <style>
        body {
            font-family: "Arial";
            font-size: 13px;
            color: #333;
            background-color: ;
        }
        h2 {
            font-size: 22px;
        }
        .mail-container {
            width: 650px;
            margin: 0px auto;
            background-color: #fff;
        }
        .gratitude-container {
            width: 100%;
        }
        .double-padding {
            padding-left: 35px;
            padding-right: 35px;
        }
        @media only screen and (min-width: 768px) and (max-width: 1024px){
            .mail-container {
                position: inherit;
                margin: 0px auto;
            }
        }
        @media only screen and (min-width: 320px) and (max-width: 479px){
            .mail-container {
                width: 100%;
            }
        }
        .content {
            padding-left: 35px;
            padding-right: 35px;
        }
        a{
            text-decoration: none; 
            color: ;
        }
        a:hover{
            color: ;
        }
        .footer {
            background-color: ;
            color: ;
            margin-top: 35px;
            padding-top: 20px;
            padding-left: 50px;
            padding-right: 50px;
            padding-bottom: 50px;
        }
        .footer-table {
            width: 100%;
        }
        .footer h3 {
            text-align: center;
        }
        .user-data {
            width: 100%;
        }
        </style>
        </head>
        <body>
        <div class="mail-container">
        <div class="gratitude-container">
        <h2 class="double-padding">Mensaje de '.$name.',</h2>
        <h3 class="double-padding">Sus Datos:</h3>
        <table class="user-data content">
        <thead>
        <tr>
        <th style="text-align: left;">Nombre</th>
        <th style="text-align: left;">Email</th>
        <th style="text-align: left;">Tel o Cel</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td style="text-align: left;">'.$name.'</td>
        <td style="text-align: left;">'.$email.'</td>
        <td style="text-align: left;">'.$cel.'</td>
        </tr>
        <tr>
        <td style="text-align: left; padding-top: 15px;" colspan="3"><strong>Mensaje:</strong> '.$mensaje.'</td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="footer content">
        <h3>¿Necesitas ayuda? ¿Tienes dudas?</h3>
        <table class="footer-table">
        <tbody>
        <tr>
        <td style="text-align: center; width: 100%;">Correo (s):<br><a href="mailto:unidadgestion@cidam.org">unidadgestion@cidam.org</a></td>
        </tr>
        </tbody>
        </table>
        </div>
        </div>
        </body>
        </html>
        ';

        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from($this->seguridad($email), $this->seguridad($name));
        $this->email->reply_to($this->seguridad($email), $this->seguridad($name));
        $this->email->to('unidadgestion@cidam.org');

        // $this->email->cc($this->seguridad($email));

        $this->email->subject('| CIDAM Web Form |');
        $this->email->message($mail);

        if($this->email->send()){
            echo true;
        }
        else{
            echo false;
        }
    }

}