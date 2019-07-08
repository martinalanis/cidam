<?php

class ServiceController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('service');
    }

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
        $data['title'] = 'Servicios';
        $data['view_style'] = 'home.css';
        $data['view_controller'] = 'services_vs.js';
        $data['servicios'] = $this->service->all();
        $data['laboratorios'] = $this->service->getLabs();

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');
        $this->load->view('content/services');
        $this->load->view('layout/footer');
        $this->load->view('layout/scripts', $data);

    }

    public function quotation()
    {
        // print_r('<pre>'.var_dump($this->input->post('servicios')).'</pre>');
        $data = array();
        $data['title'] = 'Cotizacion';
        $data['view_style'] = 'home.css';
        $data['servicios'] = $this->service->getServices($this->input->post('servicios'));
        $data['view_controller'] = 'services_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');
        $this->load->view('content/quotation', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/scripts', $data);
    }

    public function seguridad($entrada){
        return htmlentities(trim($entrada));
    }

    public function quotationConfirm(){

        // print('<pre>'.print_r($this->service->getServices(array_keys($this->input->post('servicios'))), true).'</pre>');
        $servicios = $this->service->getServices(array_keys($this->input->post('servicios')));
        $cantidad = $this->input->post('servicios');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        
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
        <h2 class="double-padding">Solicitud de cotización: '.$name.'</h2>
        <h3 class="double-padding">Datos:</h3>
        <table class="user-data content">
        <thead>
        <tr>
        <th style="text-align: left;">Nombre</th>
        <th style="text-align: left;">Email</th>
        <th style="text-align: left;">Telefono</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td style="text-align: left;">'.$name.'</td>
        <td style="text-align: left;">'.$email.'</td>
        <td style="text-align: left;">'.$phone.'</td>
        </tr>
        <tr>
        <td style="text-align: left; padding-top: 15px;" colspan="3"><strong>Información adicional:</strong> '.$mensaje.'</td>
        </tr>
        </tbody>
        </table>
        <h3 class="double-padding">Servicios:</h3>
        <table class="user-data content">
        <thead>
        <tr>
        <th style="text-align: left;">Cant.</th>
        <th style="text-align: left;width:65px">Codigo</th>
        <th style="text-align: left;">Nombre</th>
        </tr>
        </thead>
        <tbody>';
        foreach ($servicios as $servicio) {
        $mail .='
        <tr>
        <td style="text-align: left;">'.$cantidad[$servicio->id].'</td>
        <td style="text-align: left;">'.$servicio->codigo.'</td>
        <td style="text-align: left;">'.$servicio->nombre.'</td>
        </tr>';
        }        
        $mail .= '
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
        </html>';

        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from($this->seguridad($email), $this->seguridad($name));
        $this->email->reply_to($this->seguridad($email), $this->seguridad($name));
        $this->email->to('unidadgestion@cidam.org');

        // $this->email->cc($this->seguridad($email));

        $this->email->subject('| CIDAM Cotizacion |');
        $this->email->message($mail);

        if($this->email->send()){
            $send = true;
        }
        else{
            $send = false;
        }

        $data = array();
        $data['title'] = 'Cotizacion';
        $data['view_style'] = 'home.css';
        $data['confirm'] = $send;
        $data['view_controller'] = 'services_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');
        $this->load->view('content/quotation-confirm', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/scripts', $data);
    }

}