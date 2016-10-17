<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    var $table = 'menu';
    var $column_order = array('MenuId', 'MenuNom', 'MenuUrl', 'MenuPadre',null);
    var $column_search = array('MenuId', 'MenuNom', 'MenuUrl', 'MenuPadre');
    var $order = array('MenuId' => 'desc');

    public function __construct(){
        parent::__construct();
            $this->load->database();
    }
    
    public function obtenerListaMenu(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }
}
