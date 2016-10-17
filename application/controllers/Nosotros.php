<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('menu_model','menu');
    }

    public function index(){
        $this->load->helper('url');
        $data = array();
        $data['listaMenu'] = $this->menu->obtenerListaMenu();
        $this->load->view('nosotros/index_view',$data);
    }
}
