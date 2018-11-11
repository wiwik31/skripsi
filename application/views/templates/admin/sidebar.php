<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <!-- <div class="pull-left image">
          <img src="<?php echo base_url() ?>templates/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div> -->
        <!-- <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div> -->
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li >
          <a href="<?php echo site_url() ?>/welcome">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/admin"><i class="fa fa-circle-o"></i> Admin</a></li>
            <li><a href="<?php echo site_url() ?>/peserta"><i class="fa fa-circle-o"></i> Peserta</a></li>
            <li><a href="<?php echo site_url() ?>/panitia"><i class="fa fa-circle-o"></i> Panitia</a></li>

          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Ujian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/jurusan"><i class="fa fa-circle-o"></i> Jurusan</a></li>
            <li><a href="<?php echo site_url() ?>/matauji"><i class="fa fa-circle-o"></i> Mata Ujian</a></li>
            <li><a href="<?php echo site_url() ?>/jadwal"><i class="fa fa-circle-o"></i> Jadwal Ujian</a></li>
            <li><a href="<?php echo site_url() ?>/soal"><i class="fa fa-circle-o"></i> Soal Ujian</a></li>
          </ul>
        </li>
        <li >
          <a href="<?php echo site_url() ?>/ujian"><i class="fa fa-tasks"></i> <span> Hasil Ujian</span>
          </a>
        </li>
        <li >
          <!-- <a href="<?php echo site_url() ?>/laporan"><i class="fa fa-file"></i> <span> Laporan</span> -->
          </a>
        </li>
         <li class=" treeview">
          <li><a href="<?php echo site_url() ?>/login_admin/logout"></i> <i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>