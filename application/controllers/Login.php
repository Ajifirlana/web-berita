<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('tglindo_helper');
       $this->load->helper('cleanurl_helper');
    $this->load->model('m_login');
    $this->load->model('model_berita');
    $this->load->library('pagination','form_validation');
    $this->load->helper(array('url','html','text'));
  }

  public function index()
  {
    $data['konfigurasi'] = $this->model_berita->konfigurasi();
    $this->load->view('v_login');
  }

  function aksi_login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

    $user = $this->m_login->get($username); // Panggil fungsi get yang ada di UserModel.php

    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('message', 'Maaf username tidak ditemukan'); // Buat session flashdata
     redirect('index.php/login'); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'username'=>$user->username,
          'id_user'=>$user->id_user,
          'level'=>$user->level
        );

        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('index.php/dashboard');
      }else{
        $this->session->set_flashdata('message', 'Password Yang anda masukkan salah...!!!'); // Buat session flashdata
        redirect('index.php/login'); // Redirect ke halaman login
      }
    }
}

function logout(){
    $this->session->sess_destroy(); // Hapus semua session
        Redirect('index.php/login');
   }

}

/* AJ3 */
/* ColorlIb*/