<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->helper('cleanurl_helper');
		$this->load->model('model_berita');
		$this->load->library('pagination','form_validation');
		$this->load->helper(array('url','html','text','file','form'));
	}

	public function index()
	{
		$data['menu'] = $this->model_berita->menu();
		$data['berita'] = $this->model_berita->all();
$data['nasional'] = $this->model_berita->nasional();
$data['internasional'] = $this->model_berita->internasional();
$data['teknologi'] = $this->model_berita->teknologi();
$data['politik'] = $this->model_berita->politik();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
		$this->load->view('welcome_message', $data);
	}


public function detail($id=null)
	{
		$cek = $this->model_berita->detail_berita($id);
    if(empty($cek)){
       redirect('/');
    }
		
		if ($data['hasil'] =$this->model_berita->detail_berita($id)) {
		
		$data['hasil'] = $this->model_berita->detail_berita($id);
		
		$data['politik'] = $this->model_berita->politik();
		$data['beritadetail'] = $this->model_berita->beritadetail();
		$data['menu'] = $this->model_berita->menu();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		$this->load->view('selengkapnya', $data);
		

		}

	}

	function error_not_found(){
	$data['menu'] = $this->model_berita->menu();
		$data['berita'] = $this->model_berita->all();
$data['nasional'] = $this->model_berita->nasional();
$data['internasional'] = $this->model_berita->internasional();
$data['teknologi'] = $this->model_berita->teknologi();
$data['politik'] = $this->model_berita->politik();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
		$this->load->view('welcome_message', $data);
		}
	
	public function internasional()
	{
		$data['internasionallagi'] = $this->model_berita->internasional1();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		
		$data['semuainter'] = $this->model_berita->semuaberinter();
		$data['iklan'] = $this->model_berita->iklanku();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('internasional', $data);
	}



	function fetch()
 {

 	function potong($string){
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    }
  $output = '';
  $this->load->model('model_berita');
  
  $data = $this->model_berita->fetch_data($this->input->post('limit'), $this->input->post('start'));


  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)

   {
    $output .= '
    <div class="col-md-12">
    <div class="post post-row">
    <img src="../uploads/'.$row->image.'" class="post-img"/>

    <div class="post-body">

     <a href="detail/'.$row->id_berita.'-'.potong($row->judul, '-').'" class="post-title">'.$row->judul.'</a>
     <p>'.substr($row->isi,0,50).'</p>
     </div>
     </div>
    </div>
    ';
   }
  }
  echo $output;
 }

 function fetchpolitik()
 {

 	function potong($string){
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    }
  $output = '';
  $this->load->model('model_berita');
  
  $data = $this->model_berita->fetch_datapolitik($this->input->post('limit'), $this->input->post('start'));


  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)

   {
    $output .= '
    <div class="col-md-12">
    <div class="post post-row">
    <img src="../uploads/'.$row->image.'" class="post-img"/>

    <div class="post-body">

     <a href="detail/'.$row->id_berita.'-'.potong($row->judul, '-').'" class="post-title">'.$row->judul.'</a>
     <p>'.substr($row->isi,0,50).'</p>
     </div>
     </div>
    </div>
    ';
   }
  }
  echo $output;
 }



 function fetchteknologi()
 {

 	function potong($string){
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    }
  $output = '';
  $this->load->model('model_berita');
  
  $data = $this->model_berita->fetch_datateknologi($this->input->post('limit'), $this->input->post('start'));


  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)

   {
    $output .= '
    <div class="col-md-12">
    <div class="post post-row">
    <img src="../uploads/'.$row->image.'" class="post-img"/>

    <div class="post-body">

     <a href="detail/'.$row->id_berita.'-'.potong($row->judul, '-').'" class="post-title">'.$row->judul.'</a>
     <p>'.substr($row->isi,0,50).'</p>
     </div>
     </div>
    </div>
    ';
   }
  }
  echo $output;
 }

 function fetchkesehatan()
 {

 	function potong($string){
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    }
  $output = '';
  $this->load->model('model_berita');
  
  $data = $this->model_berita->fetch_datakesehatan($this->input->post('limit'), $this->input->post('start'));


  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)

   {
    $output .= '
    <div class="col-md-12">
    <div class="post post-row">
    <img src="../uploads/'.$row->image.'" class="post-img"/>

    <div class="post-body">

     <a href="detail/'.$row->id_berita.'-'.potong($row->judul, '-').'" class="post-title">'.$row->judul.'</a>
     <p>'.substr($row->isi,0,50).'</p>
     </div>
     </div>
    </div>
    ';
   }
  }
  echo $output;
 }



	function fetchnasional()
 {

 	function potong($string){
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    }
  $output = '';
  $this->load->model('model_berita');
  
  $data = $this->model_berita->fetch_datanasional($this->input->post('limit'), $this->input->post('start'));


  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)

   {
    $output .= '
    <div class="col-md-12">
    <div class="post post-row">
    <img src="../uploads/'.$row->image.'" class="post-img"/>

    <div class="post-body">

     <a href="detail/'.$row->id_berita.'-'.potong($row->judul, '-').'" class="post-title">'.$row->judul.'</a>
     <p>'.substr($row->isi,0,50).'</p>
     </div>
     </div>
    </div>
    ';
   }
  }
  echo $output;
 }


	public function nasional()
	{
		$data['iklan'] = $this->model_berita->iklanku();
		$data['internasionallagi'] = $this->model_berita->nasional1();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		$data['semuainter'] = $this->model_berita->allbernasional();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('nasional', $data);
	}

	public function teknologi()
	{
		$data['teknologi'] = $this->model_berita->teknologi1();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		$data['semuatekno'] = $this->model_berita->allberteknologi();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('teknologi', $data);
	}

	public function politik()
	{
		$data['politik1'] = $this->model_berita->politik1();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		$data['sm_politik'] = $this->model_berita->smpolitik();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('b_politik', $data);
	}

	public function kesehatan()
	{
		$data['kesehatan1'] = $this->model_berita->kesehatanbrs1();
		$data['smkes'] = $this->model_berita->smukes();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();

		
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('kesehatan', $data);
	}

}

/* https://caramengatasimasalahmu.blogspot.com */
/* ColorlIb*/