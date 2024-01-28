<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Mahasiswa extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getMahasiswa()
	{
		return $this->db->get('fadli_12221237')->result_array();
	}

	public function deteleMahasiswa($nim) {
		$this->db->where('nim', $nim);
		$this->db->delete('fadli_12221237');
	}
}
