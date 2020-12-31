<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('m_user');
        $this->db->where('txt_email',$post['email']);
        $this->db->where('txt_password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function registry($post)
    {
        function getName($n) { 
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $randomString = ''; 
            for ($i = 0; $i < $n; $i++) { 
                $index = rand(0, strlen($characters) - 1); 
                $randomString .= $characters[$index]; 
            } 
            return $randomString; 
        } 
        $token = getName(11);
        $data=[
            "txt_email" => $post["email"],
            "txt_password" => $post["password"],
            "txt_nama" => $post["name"],
            "txt_cart_id" => $token,
        ];
        $data2=[
            "txt_barang" => "",
            "txt_jumlah" => "",
            "txt_cart_id" => $token,
        ];

        
        // $this->db->set('int_chart_id', 'UUID()', FALSE);
        $query = $this->db->insert('m_user', $data);
        // $query = $this->db->insert('user_cart', $data2);
        return $query;
    }

    public function cek_exists_email($post){
        $email =$post["email"];
        $query = $this->db->select('*');
        $query = $this->db->from('m_user');
        $query = $this->db->where('txt_email', $email);
        $query= $this->db->get();
        return $query;
    }

}