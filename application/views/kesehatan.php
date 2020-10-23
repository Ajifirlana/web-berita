
		<?php $this->load->view('template');?>
	<body>
		
		<script>
  $(document).ready(function(){

    var limit = 3;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit)
    {
      var output = '';
      for(var count=0; count<limit; count++)
      {
        output += '<div class="post_data">';
        output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
        output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
        output += '</div>';
      }
      $('#load_data_message').html(output);
    }

    lazzy_loader(limit);

    function load_data(limit, start)
    {
      $.ajax({
        url:"<?php echo base_url(); ?>berita/fetchkesehatan",
        method:"POST",
        data:{limit:limit, start:start},
        cache: false,
        success:function(data)
        {
          if(data == '')
          {
            $('#load_data_message').html('<button class="primary-button center-block">Berita Terakhir</button>');
            action = 'active';
          }
          else
          {
            $('#load_data').append(data);
            $('#load_data_message').html("");
            action = 'inactive';
          }
        }
      })
    }

    if(action == 'inactive')
    {
      action = 'active';
      load_data(limit, start);
    }

    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
      {
        lazzy_loader(limit);
        action = 'active';
        start = start + limit;
        setTimeout(function(){
          load_data(limit, start);
        }, 1000);
      }
    });

  });
</script>
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
							<?php foreach($kesehatan1 as $k) : $tgl = tgl_indo($k->created_at);
							$jdberita = $k->judul;
$id = $k->id_berita;
	$jdberita = $k->judul;
$link = set_linkurl($id,$jdberita);
$link = set_linkurl($id,$jdberita); ?>
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
							
							<!--<?php foreach($smkes as $k) : $tgl = tgl_indo($k->created_at);
$id= $k->id_berita;
$jdberita = $k->judul;
$link = set_linkurl($id,$jdberita);
							 ?>
							<!-- post -->
							<!--<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="detail/<?php echo $link; ?>"><img src="<?php echo base_url('uploads/'.$k->image) ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="detail/<?php echo $link; ?>"><?php echo $k->kategori;?></a>
											<span class="post-date"><?php echo $tgl;?></span>
										</div>
										<h3 class="post-title"><a href="detail/<?php echo $link; ?>"><?php echo $k->judul;?></a></h3>
										<p><?php echo substr($k->isi, 0, 100);?></p>
									</div>
								</div>
							</div>-->
							<!-- /post -->
							
					<!--<?php endforeach; ?>-->
							<!-- post -->
							<!-- /post -->

							<div id="load_data">
							</div>
							<!-- post -->
							<!-- /post -->
							<div id="load_data_message"></div>
							<!-- post -->
							<!-- /post -->

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
	$id = $k->id_berita;
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
		<?php $this->load->view('footer');?>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<?php $this->load->view('javascript');?>
