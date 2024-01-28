<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('model_mahasiswa');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->model_mahasiswa->getMahasiswa();
		$this->load->view('tampil_mahasiswa', $data);
	}

	public function delete($nim)
	{
		$this->model_mahasiswa->deteleMahasiswa($nim);
		redirect('mahasiswa');
	}
}
