<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataPerusahaan()
		{
			$query = $this->db->query("Select * from perusahaan");
			return $query->result_array();

		}

		public function getDataProduk($id)
		{
			$query = $this->db->query("Select * from perusahaan, nomorIjinProduksi where perusahaan.id = '$idperusahaan' and fk_perusahaan = '$idPerusahaan'");
			// $query = $this->db->query("Select * from pegawai join jabatan_pegawai on pegawai.id = jabatan_pegawai.fk_pegawai");
			return $query->result_array();


		}
		public function getDataLokasi($id)
		{
			$query = $this->db->query("Select * from lokasi, lokasi where plokasi.id = '$idLokasi' and fk_perusahaan = '$idPerusahaan'");
			// $query = $this->db->query("Select * from pegawai join jabatan_pegawai on pegawai.id = jabatan_pegawai.fk_pegawai");
			return $query->result_array();

		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>