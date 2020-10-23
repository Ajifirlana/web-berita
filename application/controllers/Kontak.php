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
		$username = htmlentities(strip_tags($this->input->post('username')));
		$handphone = htmlentities(strip_tags($this->input->post('handphone')));
				$level = $this->input->post('level');
		
		$data = array(
			'username' => $username,
			'handphone' => $handphone,
			'level' => $level
		
			);

		$cek = $this->db->query("SELECT * FROM user WHERE handphone='$handphone' OR username='$username'")->num_rows();
    if($cek > 0){
      $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                        <strong>Pengguna Sudah Ada!</strong> '.$error.'.
                     </div>'
                   );

    redirect('/');
    echo "<script>window.alert('nama atau email yang anda masukan sudah ada')
    window.location='index.php'</script>";

    }else
  $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                        <strong>Data Berhasil Dikirim!</strong>
                     </div>'
                   );

		$this->model_berita->joinletter($data,'user');
		redirect('/');
	}

	function kirimpesan(){
		$tampil = $this->input->post('tampil');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$isi_komentar = htmlentities(strip_tags($this->input->post('isi_komentar')));
		
		$data = array(
			'tampil' => $tampil,
			'nama_lengkap' => $nama_lengkap,
			'isi_komentar' => $isi_komentar
		
			);
		 $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                        <strong>Komentar Berhasil Dikirim!</strong>
                     </div>'
                   );

		$this->model_berita->kirimkomentar($data,'komentar');
		redirect('index.php/kontak');
	}

}