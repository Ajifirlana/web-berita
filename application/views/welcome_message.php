
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
					<!-- post -->
					<?php foreach ($nasional->result() as $sl) { 
						$id = $sl->id_berita;
						$kat = $sl->kategori;
						$jdberita = $sl->judul;
					$tgl = tgl_indo($sl->created_at);
					$link = set_linkurl($id,$jdberita);
						?>
						<div class="col-md-6">

						<div class="post post-thumb">
							<a class="post-img" href="berita/detail/<?php echo $link; ?>">
								<img src="uploads/<?php echo $sl->image; ?>" height="300px"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="berita/detail/<?php echo $link; ?>"><?php echo $kat; ?></a>
									<span class="post-date"><?php echo $tgl; ?></span>
								</div>
								<h3 class="post-title"><a href="berita/detail/<?php echo $link; ?>"><?php echo $jdberita; ?></a></h3>
							</div>
						</div>
					</div>
						<?php } ?>
					<div class="col-md-12">
						<div class="section-title">
							<h2>Politik</h2>
						</div>
					</div>
					<?php $this->load->view('politik');?>
					<!-- /post -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Internasional</h2>
						</div>
					</div>

					<!-- post -->
					<?php foreach ($internasional->result() as $sl) { 
						$id = $sl->id_berita;
						$kat = $sl->kategori;
						$jdberita = $sl->judul;
					$tgl = tgl_indo($sl->created_at);
					$link = set_linkurl($id,$jdberita);
						?>
					<div class="col-md-4">
						
						<div class="post post-thumb">
							<a class="post-img" href="berita/detail/<?php echo $link; ?>"><img src="uploads/<?php echo $sl->image; ?>" height="200px"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="berita/detail/<?php echo $link; ?>"><?php echo $kat; ?></a>
									<span class="post-date"><?php echo $tgl; ?></span>
								</div>
								<h3 class="post-title"><a href="berita/detail/<?php echo $link; ?>"><?php echo substr($jdberita, 0, 100) ; ?></a></h3>
							</div>
						</div>
					
					</div>

					<?php } ?>
					<!-- /post -->

					<!-- /post -->

					<div class="clearfix visible-md visible-lg"></div>

					<!-- post -->
			
					<!-- /post -->

					<!-- post -->
			
					<!-- /post -->

		
					<!-- /post -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
					
							<!-- /post -->

							<!-- post -->
							

							<!-- post -->
				
							<!-- /post -->

							<div class="clearfix visible-md visible-lg"></div>

							<!-- post -->
						
							<!-- /post -->

							<!-- post -->
					
							<!-- /post -->

							<div class="clearfix visible-md visible-lg"></div>

<?php foreach ($nasional->result() as $sl) { 
						$id = $sl->id_berita;
						$kat = $sl->kategori;
						$jdberita = $sl->judul;
					$tgl = tgl_indo($sl->created_at);
					$link = set_linkurl($id,$jdberita);
					?>
<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="berita/detail/<?php echo $link; ?>"><img src="uploads/<?php echo $sl->image; ?>" height="200px"></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="berita/detail/<?php echo $link; ?>"><?php echo $kat; ?></a>
											<span class="post-date"><?php echo $tgl; ?></span>
										</div>
										<h3 class="post-title"><a href="berita/detail/<?php echo $link; ?>"><?php echo $jdberita; ?></a></h3>
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- /post -->
						</div>
					</div>

					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Teknologi</h2>
							</div>
<?php foreach ($teknologi->result() as $tek) { 
						$id = $tek->id_berita;
						$link = set_linkurl($id,$jdberita);
						$jdberita = $tek->judul;
					
						?>
							<div class="post post-widget">
								<a class="post-img" href="berita/detail/<?php echo $link; ?>"><img src="uploads/<?php echo $tek->image; ?>" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="berita/detail/<?php echo $link; ?>"><?php echo $jdberita; ?></a></h3>
								</div>
							</div>

					<?php } ?>
						<!-- post widget -->
						
						<!-- /post widget -->
						
						<!-- ad -->
					
						<!-- /ad -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>


		<!-- Footer -->
		<?php $this->load->view('footer');?>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<?php $this->load->view('javascript');?>

	</body>
	</body>
</html>
