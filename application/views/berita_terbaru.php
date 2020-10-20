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
								<a class="post-img" href="detail/<?php echo $link; ?>">
									<img src="<?php echo base_url('uploads/'.$k->image) ?>" height="50px" width="50px"></a>
								<div class="post-body">
									<h3 class="post-title"><a href="detail/<?php echo $link; ?>"><?php echo $k->judul;?></a></h3>
								</div>
							</div>
<?php endforeach; ?>
							

							

							
						</div>
						