<?php 

class Kontak extends CI_Controller{

	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper','cleanurl_helper');
		$this->load->model('model_berita');
		
		$this->load->library('pagination','form_validation');
		$this->load->helper(array('url','html','text'));
	}

	public function index(){
$data['konfigurasi'] = $this->model_berita->konfigurasi();	
		$this->load->view('kontak', $data);

	}

	function join(){
		$username = $this->input->post('username');
				$level = $this->input->post('level');
		
		$data = array(
			'username' => $username,
			'level' => $level
		
			);
		$this->session->set_flashdata('message', 'Berhasil Dikirim');
		$this->model_berita->joinletter($data,'user');
		redirect('/');
	}

	function kirimpesan(){
		$tampil = $this->input->post('tampil');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$isi_komentar = $this->input->post('isi_komentar');
		
		$data = array(
			'tampil' => $tampil,
			'nama_lengkap' => $nama_lengkap,
			'isi_komentar' => $isi_komentar
		
			);
		$this->session->set_flashdata('message', 'Berhasil Dikirim');
		$this->model_berita->kirimkomentar($data,'komentar');
		redirect('index.php/kontak');
	}

}