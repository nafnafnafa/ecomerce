<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_products extends CI_Model
{

    public function all()
    {
        $hasil = $this->db->get('product');
        // var_dump($hasil);
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function find($id)
    {
        //Query mencari record berdasarkan ID-nya
        $hasil = $this->db->where('pcode', $id)
            ->limit(1)
            ->get('product');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }

    public function InsertDataCheckout($Data)
    {
        $this->db->Insert('customer', $Data);
        if ($this->db->affected_rows() > 0) {
            $data['teks'] = 'Pesanan berhasil dibuat';
            $this->session->set_flashdata($data);
        }
        echo $this->session->flashdata('teks');
    }

    public function updateStock($id)
    {
        $stock = $this->db->where('pcode', $id)
            ->limit(1)
            ->get('stock');
        $result = $stock->result();

        foreach ($result as $item) {
            // var_dump($item->jumlah);

            $items = $this->cart->contents();
            foreach ($items as $data) {
                $sisa = $item->jumlah - $data['qty'];
                // var_dump($sisa);
            }

            $this->db->set('jumlah', $sisa);
            $this->db->where('pcode', $id);
            $this->db->update('stock');
        }
    }
}
