
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
						<div class="nav-btns">
							<div class="nav-logo">
						<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>	
						</div>
						</div>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					
					<!-- /nav -->

					<!-- widget posts -->
						<div class="section-row">
						<h3>Berita Terbaru</h3>

<?php foreach($berterbaru_pginter as $k) : $tgl = tgl_indo($k->created_at); 
	$id = $k->id_berita;
	$jdberita = $k->judul;
$link = set_linkurl($id,$jdberita);
	?>

					
						<div class="post post-widget">
							<a class="post-img" href="detail/<?php echo $link; ?>"><img src="<?php echo base_url('uploads/'.$k->image) ?>" alt=""></a>
						
							<div class="post-body">
								<h3 class="post-title"><a href="<?php echo $link; ?>">
	
</a></h3>
							</div>
							<div class="post-body">
								<h3 class="post-title">

<?php echo substr($k->judul, 0,45);?>
</h3>

							</div>
				
						
						</div>
					

					<?php endforeach; ?>
					
					</div>
				
					<!-- /widget posts -->

					<!-- social links -->
					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
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
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<?php foreach($teknologi as $k) : $tgl = tgl_indo($k->created_at);

$id = $k->id_berita;
	$jdberita = $k->judul;
$link = set_linkurl($id,$jdberita);
 ?>
							<div class="col-md-12">

								<div class="post post-thumb">
									<a class="post-img" href="detail/<?php echo $link; ?>"><img src="<?php echo base_url('uploads/'.$k->image) ?>" alt="" height="300px"></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="#"><?php echo $k->kategori;?></a>
											<span class="post-date"><?php echo $tgl;?></span>
										</div>
										<h3 class="post-title"><a href="detail/<?php echo $link; ?>"><?php echo $k->judul;?></a></h3>
									</div>
								</div>
							</div>

					<?php endforeach; ?>
							<!-- /post -->
										
							<!-- post -->
							
							<!-- /post -->

							<!-- post -->
							
							<!-- /post -->
							
							<div class="clearfix visible-md visible-lg"></div>
							
							<!-- ad -->
						
							<!-- ad -->
							
							<?php foreach($semuatekno as $k) : $tgl = tgl_indo($k->created_at);
$id= $k->id_berita;
$jdberita = $k->judul;
$link = set_linkurl($id,$jdberita);
							 ?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="detail/<?php echo $link; ?>"><img src="<?php echo base_url('uploads/'.$k->image) ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="#"><?php echo $k->kategori;?></a>
											<span class="post-date"><?php echo $tgl;?></span>
										</div>
										<h3 class="post-title"><a href="detail/<?php echo $link; ?>"><?php echo $k->judul;?></a></h3>
										<p><?php echo substr($k->isi, 0, 100);?></p>
									</div>
								</div>
							</div>
							<!-- /post -->
							
					<?php endforeach; ?>
							<!-- post -->
							<!-- /post -->

							<!-- post -->
							<!-- /post -->
							
							<!-- post -->
							<!-- /post -->
							
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						
						<!-- /ad -->
						
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Berita Terbaru</h2>
							</div>
<?php foreach($berterbaru_pginter as $k) : $tgl = tgl_indo($k->created_at); 
$id= $k->id_berita;
$jdberita = $k->judul;
$link = set_linkurl($id,$jdberita);
	?>
							<div class="post post-widget">
								<a class="post-img" href="detail/<?php echo $link; ?>"><img src="<?php echo base_url('uploads/'.$k->image) ?>" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="detail/<?php echo $link; ?>"><?php echo $k->judul;?></a></h3>
								</div>
							</div>
<?php endforeach; ?>
							

							

							
						</div>
						<!-- /post widget -->
						
						<!-- catagories -->
						<?php $this->load->view('kategori');?>
						<!-- /catagories -->
						
						<!-- tags -->
						
						<!-- /tags -->
						
						<!-- archive -->
						
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		<!-- Footer -->
		<?php $this->load->view('footer');?>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<?php $this->load->view('javascript');?>
	</body>
</html>
