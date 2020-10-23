<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<h3 class="footer-title">Informasi</h3>
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="http://caramengatasimasalahmu.blogspot.com/">Privacy Policy</a></li>
								<li><a href="https://www.facebook.com/groups/957038434687409">Pasang Iklan</a></li>
							</ul>
							<div class="footer-copyright">
								<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<?php foreach($konfigurasi as $k) : ?>

	 
	<?php echo $k->deskripsi;?>
<?php endforeach; ?></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Tentang</h3>
									<ul class="footer-links">
										
										<li><?php echo anchor('kontak', 'Kontak');?></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Kategori</h3>
									<ul class="footer-links">
							<li class="cat-1"><?php echo anchor('index.php/berita/internasional', 'Internasional');?>
							</li>		
									
<li class="cat-1"><?php echo anchor('index.php/berita/nasional', 'Nasional');?>
							</li>

							<li class="cat-1"><?php echo anchor('berita/politik', 'Politik');?>
							</li>
							<li class="cat-1"><?php echo anchor('berita/kesehatan', 'Kesehatan');?>
							</li>

<li class="cat-1"><?php echo anchor('berita/teknologi', 'Teknologi');?>
							</li>


									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Bergabunglah dengan Kami</h3>
							<div class="footer-newsletter">
						

    <?php
          echo $this->session->flashdata('msg');
          ?>
	<form action="<?php echo base_url(). 'index.php/kontak/join'; ?>" method="post" enctype="multipart/form-data">
		<input class="input" type="email" name="username" placeholder="masukkan email" required=""><br/>
		<br>
		<input class="input" type="number" name="handphone" placeholder="masukkan no handphone" required=""><br/>
		<input class="hidden" type="text" name="level" placeholder="masukkan email" value="User"><br/>
		<button type="submit" class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
	</form>
					
							</div>
							<ul class="footer-social">
								<li><a href="http://caramengatasimasalahmu.blogspot.com/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://caramengatasimasalahmu.blogspot.com/"><i class="fa fa-twitter"></i></a></li>
								<li><a href="http://caramengatasimasalahmu.blogspot.com/"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="http://caramengatasimasalahmu.blogspot.com/"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>

	</body>
	</html>