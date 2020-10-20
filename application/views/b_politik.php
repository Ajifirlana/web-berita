
		<?php $this->load->view('template');?>
    
	<body>
		
		<!-- Header -->
		<?php $this->load->view('header');?>
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
							<?php foreach($politik1 as $k) : $tgl = tgl_indo($k->created_at); 
								$id = $k->id_berita;
	$jdberita = $k->judul;
$link = set_linkurl($id,$jdberita);
								?>
							<div class="col-md-12">

								<div class="post post-thumb">
									<a class="post-img" href="detail/<?php echo $link; ?>">
										<img src="<?php echo base_url('uploads/'.$k->image) ?>" alt="" height="300px"></a>
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
							
							<?php foreach($sm_politik as $k) : $tgl = tgl_indo($k->created_at);
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
