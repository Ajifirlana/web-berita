

	<?php foreach ($politik->result() as $sl) { 
						$id = $sl->id_berita;
						$kat = $sl->kategori;
						$jdberita = $sl->judul;
					$tgl = tgl_indo($sl->created_at);
					$link = set_linkurl($id,$jdberita);
						?>
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="berita/detail/<?php echo $link; ?>"><img src="uploads/<?php echo $sl->image; ?>" height="300px"></a>
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