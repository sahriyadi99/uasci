<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {


	public function tampil()
	{
		return $this->db->get('produk');
	}

	public function simpan($data)
	{
		return $this->db->insert('produk',$data);
	}

	

}

/* End of file M_guru.php */
/* Location: ./application/models/M_guru.php */