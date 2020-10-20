<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu">
        <li class="header">Selamat Datang
<br>
          <?php echo $this->session->userdata('username'); ?></li>
        
      </ul>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="treeview">
          <a href="<?php echo base_url();?>index.php/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>index.php/dashboard/tambah_berita"><i class="fa fa-plus"></i>Tambah Berita</a></li>
            <li><a href="<?php echo base_url();?>index.php/dashboard"><i class="fa fa-inbox"></i>Data Berita</a></li>
          </ul>
        </li>
         <?php 
        if ($this->session->userdata('level') == 'Admin') {
         ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Komentar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo base_url();?>index.php/dashboard/komentar"><i class="fa fa-inbox"></i>Data Komentar</a></li>
          </ul>
        </li>
      <?php } ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-object-ungroup"></i> <span>Berita Foto</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>index.php/dashboard/berita_foto"><i class="fa fa-inbox"></i>Data Berita Foto</a></li>
          </ul>
        </li>
        <?php 
        if ($this->session->userdata('level') == 'Admin') {
         ?>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Manajemen User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="<?php echo base_url();?>index.php/dashboard/user"><i class="fa fa-inbox"></i>Data User</a></li>

          </ul>
        </li>
      <?php } ?>
      <li class="treeview">
          <a href="<?php echo base_url();?>index.php/login/logout">
            <i class="fa fa-user"></i> <span>Logout</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>
        </ul>

    
    </section>
    <!-- /.sidebar -->
  </aside>