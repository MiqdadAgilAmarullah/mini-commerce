<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cart extends CI_Model {

    public function get(){
        $this->db->select('*');
        $this->db->from('user_cart');
        $this->db->where('txt_cart_id', $this->session->userdata('cart'));
        $query =$this->db->get();
        return $query;
    }
    public function insert_to_cart($post){
        $data = [
            'txt_cart_id' => $post['cart'],
            'int_stock' => (int)$post['stock'],
            'txt_barang' => $post['item'],
            'txt_harga' => $post['harga'],
            'txt_image' => $post['image'],
        ];
        $query = $this->db->insert('user_cart', $data);
        return $query;
    }

    public function update_cart($post){
        // var_dump($post);die();
        $data = [
            'txt_jumlah' => $post['total'],
        ];
        $this->db->where('txt_cart_id', $post['user']); // gives UPDATE mytable SET field = field+1 WHERE id = 2
        $this->db->where('txt_barang', $post['item']); // gives UPDATE mytable SET field = field+1 WHERE id = 2
        $query = $this->db->update('user_cart', $data); // gives UPDATE mytable SET field = field+1 WHERE id = 2
        return $query;
    }

    public function hapus_cart($post){
        var_dump($post);
        $this->db->where('txt_cart_id', $post['user']);
        $this->db->where('txt_jumlah', $post['total']);
        $this->db->where('int_id', $post['id_item']);
        $this->db->where('txt_barang', $post['item']);
        $query = $this->db->delete('user_cart');// gives UPDATE mytable SET field = field+1 WHERE id = 2
        return $query;
    }
}