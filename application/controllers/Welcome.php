<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('tglindo_helper');
		 $this->load->helper('cleanurl_helper');
		$this->load->model('model_berita');
		$this->load->library('pagination','form_validation');
		$this->load->helper(array('url','html'));
	}

	public function index()
	{
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
$data['nasional'] = $this->model_berita->nasional();
$data['internasional'] = $this->model_berita->internasional();
$data['teknologi'] = $this->model_berita->teknologi();
$data['politik'] = $this->model_berita->politik();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
		$this->load->view('welcome_message', $data);
	}
}

/* Yunan Helmi Al Anbarry */
/* Toko Online*/