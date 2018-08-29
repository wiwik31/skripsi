<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php echo form_open('login_peserta/login') ?>
            <!-- <form class="form-horizontal"> -->
              <div class="box-body" style="margin: 10px;">
                <div class="form-group" >
                  <label class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
                  </div>
                </div> <br> <br>
                <div class="form-group"> 
                  <label class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-6">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                  </div>
                </div> <br>
                <div class="form-group">
                  <hr>
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-default" style="margin-right: 5px;">Batal</button>
               	 	  <button type="submit" class="btn btn-info" name="submit">Login</button>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <p>Note* : Hubungi panitia untuk mendapatkan akun login !</p>
                  </div>
                </div>
              </div>
            <!-- </form> -->
        <?php echo form_close() ?>

          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
