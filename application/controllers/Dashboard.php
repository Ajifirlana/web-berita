<?php 

class Dashboard extends CI_Controller{


    var $gallerypath;

	function __construct(){
		parent::__construct();	

	
$this->load->model('m_login');
$this->load->model('model_berita');
$this->load->library('pagination');
$this->load->helper(array('url','html','file','form'));

 if( ! $this->session->userdata('id_user')) // Jika tidak ada
            redirect('index.php/login'); // Redirect ke halaman login

	}

public function index(){

$data['sm_berita'] = $this->model_berita->admin_sm_berita();
$this->load->view('config/dashboard', $data);
        }


public function komentar(){

$this->load->database();
$jumlah_datak=$this->model_berita->jumlah_datakomentar();
$config['total_rows']=$jumlah_datak;
$config['base_url']= base_url().'index.php/dashboard/komentar';
$config['per_page']= 5;
$from=$this->uri->segment(3);
$this->pagination->initialize($config);
$data['pagination']= $this->pagination->create_links();
$data['sm_komentar'] = $this->model_berita->admin_sm_komentar($config['per_page'], $from);
$this->load->view('config/komentar', $data);
		}

public function berita_foto(){

$data['sm_berita'] = $this->model_berita->admin_sm_berita();
$this->load->view('config/berita_foto', $data);
		}
    
public function user(){


$data['sm_user'] = $this->model_berita->admin_sm_user();
$this->load->view('config/user', $data);
		}

function proses_hapus_user($id_user=null){

$this->model_berita->hapus_user($id_user);
$data['sm_user'] = $this->model_berita->admin_sm_user();

  redirect('index.php/dashboard/user');
        }

function proses_hapus_komentar($id_komentar=null){

$this->model_berita->hapus_komentar($id_komentar);
$data['sm_komentar'] = $this->model_berita->admin_sm_komentar();

  redirect('index.php/dashboard/komentar');
        }

function proses_hapus_berita($id=''){


if($this->session->userdata('level') == 'User'){ 
            redirect('login'); 

  }else{

$cek_data = $this->model_berita->get_data_by_pk('berita', 'id_berita', $id)->row();

$this->load->helper('file');
delete_files($cek_data);
          unlink("./uploads/$cek_data->image");
                
$this->model_berita->delete_data_by_pk('berita', 'id_berita', $id);

$this->session->set_flashdata('msg',
             '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong> Berita berhasil dihapus.
             </div>'
           );
  redirect('index.php/dashboard');
        }
      }



				

public function tambah_berita(){

$data['berita'] = $this->model_berita->all();
$this->load->view('tambah_berita', $data);



if (isset($_POST['btnsimpan'])) {
              $judul          = htmlentities(strip_tags($_POST['judul']));
              $kategori          = htmlentities(strip_tags($_POST['kategori']));
              $isi            = htmlentities(strip_tags($_POST['isi']));
              $create_by            = htmlentities(strip_tags($_POST['create_by']));
           

              $file_size = 5500; //5 MB
              $this->upload->initialize(array(
                "upload_path" => "./uploads/",
                "allowed_types" => "jpg|jpeg|png|gif",
                "max_size" => "$file_size"
              ));

              if ( ! $this->upload->do_upload('image'))
              {
                  $error = $this->upload->display_errors('<p>', '</p>');
                  $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times; &nbsp;</span>
                        </button>
                        <strong>Gagal!</strong> '.$error.'.
                     </div>'
                   );
              }
               else
              {

                    $gbr = $this->upload->data();

                    $filename = $gbr['file_name'];
                    $image     = preg_replace('/ /', '_', $filename);

                    date_default_timezone_set('Asia/Jakarta');
                    $tgl = date('Y-m-d');

                    $data = array('judul' => $judul,
          'kategori' => $kategori,
          'isi' => $isi,
                    'created_at' => $tgl,
                    'create_by' => $create_by,
                    'image' => $image);
                    $this->db->insert('berita', $data);
                    $this->session->set_flashdata('msg',
                       '
                       <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times; &nbsp;</span>
                          </button>
                          <strong>Sukses!</strong> Berita berhasil ditambahkan.
                       </div>'
                     );
              }
redirect('index.php/dashboard/tambah_berita');
          }
		}

public function edit_berita()
    {
        $this->form_validation->set_rules('id_berita', 'id_berita', 'required');
         $this->form_validation->set_rules('judul', 'judul', 'required');
         $this->form_validation->set_rules('kategori', 'kategori', 'required');
       
        $this->form_validation->set_rules('isi', 'isi', 'required');
        $this->form_validation->set_rules('image', 'image', 'required');


        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('index.php/dashboard');
        }else{
            $data=array(
                "judul"=>$_POST['judul'],
                "kategori"=>$_POST['kategori'],
                "isi"=>$_POST['isi'],
                "image"=>$_POST['image'],
            );
            $this->db->where('id_berita', $_POST['id_berita']);
            $this->db->update('berita',$data);
            $this->session->set_flashdata('message', 'Data Berhasil Di Edit');
		
            redirect('index.php/dashboard');
        }
    }

public function edit_komentar()
    {
        $this->form_validation->set_rules('id_komentar', 'id_komentar', 'required');
        $this->form_validation->set_rules('tampil', 'tampil', 'required');
         $this->form_validation->set_rules('isi_komentar', 'isi_komentar', 'required');
    
     
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('index.php/dashboard/komentar');
        }else{
            $data=array(
                "id_komentar"=>$_POST['id_komentar'],
                "tampil"=>$_POST['tampil'],
                "isi_komentar"=>$_POST['isi_komentar'],
            
            );
            $this->db->where('id_komentar', $_POST['id_komentar']);
            $this->db->update('komentar',$data);
            $this->session->set_flashdata('message', 'Data Berhasil Di Edit');
        
            redirect('index.php/dashboard/komentar');
        }
    }



public function edit_user()
    {
        $this->form_validation->set_rules('id_user', 'id_user', 'required');
         $this->form_validation->set_rules('username', 'username', 'required');
          $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
         $this->form_validation->set_rules('level', 'level', 'required');
       
     
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('index.php/dashboard');
        }else{
            $data=array(
                "username"=>$_POST['username'],
                "nama_lengkap"=>$_POST['nama_lengkap'],
                "level"=>$_POST['level'],
            );
            $this->db->where('id_user', $_POST['id_user']);
            $this->db->update('user',$data);
            $this->session->set_flashdata('message', 'Data Berhasil Di Edit');
		
            redirect('index.php/dashboard/user');
        }
    }


function post_user(){

        $username = $this->input->post('username');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $password = md5($this->input->post('password'));
        $level = $this->input->post('level');
        
        
        $data = array(
            'username' => $username,
            'nama_lengkap' => $nama_lengkap,
            'password' => $password,
            'level' => $level,
        
            );
        $this->session->set_flashdata('message', 'Berhasil Di Tambah');
        $this->model_berita->post_user($data,'user');
        redirect('index.php/dashboard/user');
    }
		
public function search(){

$keyword = $this->input->post('keyword');
$this->load->database();
$jumlah_data=$this->model_berita->jumlah_data();
$config['total_rows']=$jumlah_data;
$config['base_url']= base_url().'index.php/dashboard/halaman';
$config['per_page']= 5;
$from=$this->uri->segment(3);
$this->pagination->initialize($config);
$data['pagination']= $this->pagination->create_links();

			
			$data['sm_berita']=$this->model_berita->get_berita_keyword($keyword);
			$data['sm_berita'] = $this->model_berita->admin_sm_berita($config['per_page'], $from);
            $this->load->view('dashboard',$data);
		}
	}

