<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_berita extends CI_Model {
var $gallerypath;
var $gallery_path_url;

	public function __construct() {
 $this->load->database();
 $this->load->helper('tglindo_helper');

 $this->gallerypath = realpath(APPPATH . '../uploads/');
 $this->gallery_path_url = base_url().'uploads/';
 }

 function joinletter($data,$table){
		$this->db->insert($table,$data);
	}

	function fetch_datapolitik($limit, $start)
 {

  $this->db->select("*");
  $this->db->from("berita");
  $this->db->where("kategori", "politik");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

 function fetch_datakesehatan($limit, $start)
 {

  $this->db->select("*");
  $this->db->from("berita");
  $this->db->where("kategori", "kesehatan");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

 function fetch_datateknologi($limit, $start)
 {

  $this->db->select("*");
  $this->db->from("berita");
  $this->db->where("kategori", "teknologi");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }


	function fetch_data($limit, $start)
 {

  $this->db->select("*");
  $this->db->from("berita");
  $this->db->where("kategori", "internasional");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

 function fetch_datanasional($limit, $start)
 {

  $this->db->select("*");
  $this->db->from("berita");
  $this->db->where("kategori", "nasional");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

	function kirimkomentar($data,$table){
		$this->db->insert($table,$data);
	}

	function post_berita($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_user($id_user){
	    $this->db->where('id_user', $id_user);
	    $this->db->delete('user');
	}

	function hapus_komentar($id_komentar){
	    $this->db->where('id_komentar', $id_komentar);
	    $this->db->delete('komentar');
	}

	public function get_data_by_pk($tbl, $where, $id)
	{
				$this->db->from($tbl);
				$this->db->where($where,$id);
				$query = $this->db->get();

				return $query;
	}

	public function delete_data_by_pk($tbl, $where, $id)
	{
		$this->db->where($where, $id);
		$this->db->delete($tbl);
	}

	function post_user($data,$table){
		$this->db->insert($table,$data);
	}


	function data($limit, $start){
		return $query = $this->db->get('berita', $limit, $start);
		return $query;		
	}

	public function all(){
 $query = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5 ");
		return $query;
	}



	public function beritadetail(){
 $query = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5 ");
		return $query;
	}

	function jumlah_data(){
		return $this->db->get('berita')->num_rows();
	
}
function jumlah_datakomentar(){
		return $this->db->get('komentar')->num_rows();
	
}


function jumlah_datapolitik(){
		return $this->db->get('berita')->num_rows();
	
}

public function menu(){
  
  $query = $this->db->query("SELECT * FROM menu WHERE id_induk = 'root' ORDER BY id_induk DESC LIMIT 5 ");
		return $query;
	}

function detail_berita($id){
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('id_berita',$id);
		return $this->db->get()->row();
	}
public function internasional(){
  
  $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'internasional' ORDER BY id_berita DESC LIMIT 3 ");
		return $query;
	}

	public function internasional1(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'internasional' ORDER BY id_berita DESC LIMIT 1 ");
 return $query->result();
    
	}

public function teknologi1(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'teknologi' ORDER BY id_berita DESC LIMIT 1 ");
 return $query->result();
    
	}
	public function nasional1(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'nasional' ORDER BY id_berita DESC LIMIT 1 ");
 return $query->result();


    
	}

	public function beritaterbaruinter(){

 $query = $this->db->query("SELECT * FROM berita  ORDER BY id_berita DESC LIMIT 5 ");
 return $query->result();


    
	}



	public function semuaberinter(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'internasional'  ORDER BY id_berita DESC LIMIT 5 ");
 return $query->result();
    
	}

	public function iklanku(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM iklan");
 return $query->result();
    
	}

	public function allbernasional(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'nasional'  ORDER BY id_berita DESC LIMIT 10 ");
 return $query->result();


    
	}

public function allberteknologi(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'teknologi'  ORDER BY id_berita DESC LIMIT 10 ");
 return $query->result();


    
	}

public function politik1(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'politik' ORDER BY id_berita DESC LIMIT 1 ");
 return $query->result();


    
	}

public function smpolitik(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'politik'  ORDER BY id_berita DESC LIMIT 10 ");
 return $query->result();


    
	}
	public function kesehatanbrs1(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'kesehatan'  ORDER BY id_berita DESC LIMIT 1 ");
 return $query->result();

	}

public function smukes(){
 $query = $this->db->get('berita');
 $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'kesehatan' ORDER BY id_berita DESC LIMIT 10 ");
 return $query->result();


    
	}	


	




public function nasional(){
  
  $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'nasional' ORDER BY id_berita DESC LIMIT 4 ");
		return $query;
	}

public function politik(){
  
  $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'politik' ORDER BY id_berita DESC LIMIT 2 ");
		return $query;
	}

	public function teknologi(){
  
  $query = $this->db->query("SELECT * FROM berita WHERE kategori = 'teknologi' ORDER BY id_berita DESC LIMIT 5 ");
		return $query;
	}



	function datapolitik($number,$offset){
		return $query = $this->db->get('berita',$number,$offset)->result();		
	}

public function admin_sm_berita(){
    return $query = $this->db->query("SELECT * FROM berita WHERE create_by='".$this->session->id_user."'");
    
	}
public function admin_sm_user(){
    $query = $this->db->query("SELECT * FROM user");
    return $query;
	}

	
public function admin_sm_komentar(){
    return $query = $this->db->query("SELECT * FROM komentar");
		return $query;	
	}

public function konfigurasi(){
    $query = $this->db->get('konfigurasi');
    return $query->result();
	}

	function input_dataletter($data,$table){
		$this->db->insert($table,$data);
	}
	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('berita');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}	



	public function get_berita_keyword($keyword){
			$this->db->select('*');
			$this->db->from('berita');
			$this->db->like('judul',$keyword);
			return $this->db->get()->result();
			
			
		}

	function edit_berita($where,$table){		

	return $this->db->get_where($table,$where);
}
}