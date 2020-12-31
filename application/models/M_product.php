<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {

    public function get_all(){
        $this->db->select('*');
        $this->db->from('m_products');
        $query =$this->db->get();
        return $query;
    }
}