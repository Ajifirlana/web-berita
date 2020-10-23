
	<?php $this->load->view('template');?>
	<body>

	<?php 
        if (empty('hasil') == 'id') {
         ?>

      <script type="text/javascript" language="javascript">
                alert("Anda tidak berhak masuk...!!!");
              </script>
              <?php
              redirect('berita');
            }
        ?>
  
		
		<!-- Header -->
	
						<?php include'header.php';?>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->

<?php 
$tgl = tgl_indo($hasil->created_at);
$id = $hasil->id_berita;
$jdberita = $hasil->judul;
$link = set_linkurl($id,$jdberita);

			?>
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
							<h2><?php echo $jdberita; ?></h2>	
							<figure class="figure-img" width="200px" height="500px">
									<img class="img-responsive" src="<?php echo base_url('uploads/'.$hasil->image) ?>">
								
								</figure>
								<p><b><?php echo $tgl; ?></b></p>
								<p><?php echo $hasil->isi; ?></p>
								
								</div>
							<div class="post-shares sticky-shares">
								<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
						</div>

						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-2.jpg" alt="">
							</a>
						</div>
						<!-- ad -->
						
						<!-- author -->
						<!-- /reply -->
					</div>
					<!-- /Post content -->

					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
		
						<!-- /ad -->

						<!-- post widget -->
					
						<!-- /post widget -->

						<!-- post widget -->
					
						<!-- /post widget -->
						
						<!-- catagories -->
				<div class="aside-widget">
							<div class="section-title">
								<h2>Kategori</h2>
							</div>
							<div class="category-widget">
								<ul>
							

									<li><a href="<?php echo base_url('berita/internasional')?>" class="cat-2">Internasional</a></li>
									<li><a href="<?php echo base_url('/berita/nasional')?>" class="cat-2">Nasional</a></li>

									<li><a href="<?php echo base_url('berita/politik')?>" class="cat-2">Politik</a></li>

									<li><a href="<?php echo base_url('berita/kesehatan')?>" class="cat-2">Kesehatan</a></li>
									<li><a href="<?php echo base_url('berita/teknologi')?>" class="cat-2">Teknologi</a></li>
									
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
					
						<!-- /tags -->
						
						<!-- archive -->
				
						<!-- /archive -->
					</div>
					<!-- /aside -->
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

	</body>
</html>
