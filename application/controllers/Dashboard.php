<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Models', 'm');

	}

	public function index()
	{
		
		$this->load->view('index');

	}
	// public function registrasi()
	// {
		
	// 	$this->load->view('dashboard/form_registrasi');

	// }
	// public function halaman_cek()
	// {
	// 	$select = $this->db->select('*');
	// 	$select = $this->db->join('pelanggan','pelanggan.rekening_air = pemakaian.rekening_air');
	// 	$data['read'] = $this->m->Get_All('pemakaian',$select);

	// 	$this->load->view('dashboard/cek_pemakaian', $data);

	// }
	// public function proses_add_registrasi()
	// {
	// 	$data=array(
	// 		'nik'				=>	$this->input->post('nik'),
	// 		'nama_pemasang'		=>	$this->input->post('nama'),
	// 		'alamat_pemasang'	=>	$this->input->post('alamat'),
	// 		'no_hp'				=>	$this->input->post('no_hp'),
	// 	);
		
	// 	$this->m->Save($data, 'pemasangbaru');
		
	// 	redirect('dashboard/index');
	// }
	// public function hal_tarif(){
	// 	$this->load->view('dashboard/tarif');
	// }
	// public function hasil_cek(){
	// 	$select = $this->db->select('*');
	// 	$select = $this->db->join('pelanggan','pelanggan.rekening_air = pemakaian.rekening_air');
	// 	$select = $this->db->where('pelanggan.rekening_air', $this->input->post('rekening_air'));
	// 	$select = $this->db->where('status',  'Belum Lunas');
	// 	$data['read'] = $this->m->Get_All('pemakaian',$select);

	// 	$this->load->view('dashboard/hasil_cek', $data);
	// }
	// public function hal_info(){
	// 	$this->load->view('dashboard/info');
	// }

}


	
