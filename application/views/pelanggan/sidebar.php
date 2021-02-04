<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url($foto);?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$nama_pengunjung?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="<?php echo base_url();?>pengunjung">
            <i class="fa fa-home"></i><span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-rebel"></i>
            <span>Kunjungan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>index.php/pengunjung/ajukan"><i class="fa fa-circle-o"></i> Ajukan Kunjungan</a></li>
            <li><a href="<?php echo base_url();?>index.php/pengunjung/daftar_kunjungan"><i class="fa fa-circle-o"></i> Daftar Kunjungan</a></li>   
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
