<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->library('cart');
        $this->load->model('model_products');
    }

    public function index()
    {
		// $this->load->model('model_products');
        $data['products'] = $this->model_products->all();
		// var_dump($data['products']);
        $this->load->view('dashboard', $data);
        $this->load->library('form_validation');

    }

    public function dashboard()
    {
		// $this->load->model('model_products');
        $data['products'] = $this->model_products->all();
		// var_dump($data['products']);
        $this->load->view('welcome_message', $data);
    }
    
    public function add_to_cart($product_id)
    {
        $product = $this->model_products->find($product_id);
        $data = array(
                       'id'      => $product->pcode,
                       'qty'     => 1,
                       'price'   => $product->price,
                       'name'    => $product->product_name
                    );
// var_dump($data);
        $this->cart->insert($data);
		// var_dump(cart);
        redirect('welcome/dashboard');
    }
    
    public function cart(){
        $this->load->view('show_cart');
    }
    
    public function clear_cart()
    {
        $this->cart->destroy();
        $this->load->view('show_cart');
    }

    function order(){
		$this->load->view('add_order');
	}

    Public Function checkout()
    {
        $customer_name = $this->input->Post('customer_name');
        $address = $this->input->Post('address');

        // var_dump($this->cart());
        $ArrInsert = Array(
            'customer_name' => $customer_name,
            'address' => $address
        );

        $this->model_products->InsertDataCheckout($ArrInsert);
        $this->model_products->updateStock('10001');
        $this->cart->destroy();
        Redirect(Base_url(''));
    }

}
