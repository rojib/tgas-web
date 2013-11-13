<?php
class Products_model extends CI_Model {
    
    function __construct()
    {        
        parent::__construct();
    }
    
    function get_products()
    {
        $query = $this->db->get('products');
        return $query->result();
    }
	
	function get_categories() //untuk pencarian data kategori pada combobox
    {
        $sql="Select * from categories ORDER BY CategoryID ASC ";
        return $this->db->query($sql)->result();
    }
	
	function get_categories_by_id(){ //untuk mencari data produk berdasarkan kategori
		$cp = $this->input->POST('cari');
		$nm = $this->input->POST('nama');
		$sql="Select * from products WHERE CategoryID='".$cp."' AND ProductName LIKE '%".$nm."%'";
		return $this->db->query($sql)->result();
	}

}