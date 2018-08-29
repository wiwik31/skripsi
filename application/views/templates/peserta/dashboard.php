


<?php $this->load->view('templates/peserta/header') ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Left side column. contains the logo and sidebar -->
  
<?php $this->load->view('templates/peserta/sidebar_al') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php $this->load->view($contents) ?>
     
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('templates/peserta/footer') ?>


</body>
</html>
