<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_products extends CI_Model {

    public function all(){
        $hasil = $this->db->get('product');
// var_dump($hasil);
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
    
    public function find($id){
        //Query mencari record berdasarkan ID-nya
        $hasil = $this->db->where('pcode', $id)
                          ->limit(1)
                          ->get('product');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }    
}