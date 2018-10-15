 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo count($peserta) ?></h3>

              <p>Peserta</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo site_url() ?>/peserta" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo count($ujian) ?></h3>

              <p>Selesai Ujian</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url()?>/ujian" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo count($jadwal) ?></h3>

              <p>Yang lulus disini</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url()?>/jadwal" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             <h3><?php echo count($matauji) ?></h3>

              <p>Yang tidak lulus disini</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo site_url()?>/matauji" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      
      <!--   <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-4"> -->
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="box box-solid bg-green-gradient">
                        <div class="box-header">
                          <i class="fa fa-calendar"></i>
                          <h3 class="box-title">Calendar</h3>
                          <!-- tools box -->
                          <div class="pull-right box-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <!--The calendar -->
                          <div id="calendar" style="width: 100%"></div>
                        </div>
                        <!-- /.box-body -->
                        
                    </div>
                  </div>
              </div>
            </div>
          <!-- </div>
        </div> -->
      