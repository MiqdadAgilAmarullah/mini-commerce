<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_product');
        $this->load->model('M_cart');
    }

    public function index(){
        check_not_login();
        $data['all'] = $this->M_product->get_all();
        $this->l_template->load('V_template', 'V_products', $data);
    }
    
    public function cart(){
        check_not_login();
        $data['cart'] = $this->M_cart->get();
        $this->l_template->load('V_template', 'V_cart', $data);
    }

    public function add_to_cart(){
        check_not_login();
        $post = $this->input->post(null, TRUE);
        $query = $this->M_cart->insert_to_cart($post);
    }

    public function update_cart(){
        check_not_login();
        $post = $this->input->post(null, TRUE);
        $query = $this->M_cart->update_cart($post);
    }

    public function load_row_cart(){
        check_not_login();
        $data['cart'] = $this->M_cart->get();
        $this->load->view('V_row_cart', $data);
    }

    public function hapus_item_cart(){
        check_not_login();
        $post = $this->input->post(null, TRUE);
        $query = $this->M_cart->hapus_cart($post);
    }
}