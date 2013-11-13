<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Products extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('products_model','datamodel');     
    }
	   
	public function index() // untuk menapilkan data produk dan data kategori
	{
		$data['array_products'] = $this->datamodel->get_products();
		$data['array_categories'] = $this->datamodel->get_categories();
		$this->mytemplate->loadBackend('products',$data);
	}
	public function search()
	{  // untuk mencari dan menampilkan data produk
		$data['array_product']=$this->datamodel->get_products();
		$data['array_products'] = $this->datamodel->get_categories_by_id();
		$data['array_categories'] = $this->datamodel->get_categories();
        $this->mytemplate->loadBackend('products',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

