
		<?php $this->load->view('template');?>
	<body>


		
		<!-- Header -->
						<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						
						
					
<ul class="nav-menu nav navbar-nav">
	<li class="cat-1"><a href="<?php echo base_url('/') ?>" class="logo">
		<?php foreach($konfigurasi as $k) : ?>
		<img src="<?php echo base_url('uploads/'.$k->logo) ?>" width="50px" height="10" alt=""></a>
<?php endforeach; ?>
	</li>
							<li class="cat-1"><?php echo anchor('/', 'Home');?></li>

							<li class="cat-1"><?php echo anchor('berita/internasional', 'Internasional');?>



							</li>

<li class="cat-1"><?php echo anchor('berita/nasional', 'Nasional');?>
							</li>

							<li class="cat-1"><?php echo anchor('berita/politik', 'Politik');?>
							</li>
							<li class="cat-1"><?php echo anchor('berita/kesehatan', 'Kesehatan');?>
							</li>
							<li class="cat-1"><?php echo anchor('berita/teknologi', 'Teknologi');?>
							</li>
							

						
      <li class="cat-1"><?php echo anchor('login', 'Login');?></li>
      
          </ul>
						
						<!-- search & aside toggle -->
						
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					
					<!-- /nav -->

					<!-- widget posts -->
					
					<!-- /widget posts -->

					<!-- social links -->
					
					<!-- /social links -->

					<!-- aside nav close -->
				
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>

		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<?php foreach($konfigurasi as $k) : ?>
					<div class="col-md-6">
						<div class="section-row">
							<h3>Informasi Deskripsi</h3>
							<p><?php echo $k->deskripsi;?></p>
							<ul class="list-style">
								<li><p><strong>Email:</strong> <a href="#"><?php echo $k->email;?></a></p></li>
								<li><p><strong>Phone:</strong> <?php echo $k->kontak;?></p></li>
								<li><p><strong>Alamat:</strong> <?php echo $k->alamat;?></p></li>
							</ul>
						</div>
					</div>
					<?php endforeach; ?>
					<div class="col-md-5 col-md-offset-1">
						<div class="section-row">
							<h3>Kirim Pesan</h3>

							<form action="<?php echo base_url(). 'index.php/kontak/kirimpesan'; ?>" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<input class="hidden" type="text" name="tampil" value="Private">
										</div>

										<div class="form-group">
											<span>Email</span>
											<input class="input" type="email" name="nama_lengkap" placeholder="masukkan email anda" required="">
										</div>
									</div>
									<div class="col-md-12">

										<div class="form-group">
											<span>Pesan</span>
											<textarea class="input" name="isi_komentar"placeholder="masukkan komentar" required=""></textarea>
										</div>

													
    <?php
          echo $this->session->flashdata('msg');
          ?>
										<button class="primary-button">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		<?php $this->load->view('footer');?>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
	<?php $this->load->view('javascript');?>
