<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index($id)
	{
		$this->load->view('produk');

		$data['produk_array']=$this->Produk->getDataProduk();
			

	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>