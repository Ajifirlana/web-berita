	<div class="section-row">
						<h3>Berita Terbaru</h3>

<?php foreach($berterbaru_pginter as $k) : $tgl = tgl_indo($k->created_at); 
	$id = $k->id_berita;
	$jdberita = $k->judul;
$link = set_linkurl($id,$jdberita);
	?>

					
						<div class="post post-widget">
							<a class="post-img" href="berita/detail/<?php echo $link; ?>"><img src="<?php echo base_url('uploads/'.$k->image) ?>" alt=""></a>
						
							<div class="post-body">
								<h3 class="post-title"><a href="detail/<?php echo $link; ?>">
	
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
				