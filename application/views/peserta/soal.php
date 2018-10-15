        <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>ONLINE TEST</h2>
                           
                            <h5 class="msg" id="msg" >Click Button Start to start the Online test <button type="button" class="btn btn-small btn-start">Start</button> </h5> 

                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <!-- <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                           <button id="countdowntimer" style="display:none;"  type="button" class="btn btn-large btn-block btn-info" disabled="disabled"></button>
                           <br><br>
                            <div class="soal" style="display:none;" >
                                <form action="<?php echo site_url().'soal/cekJawaban' ?>" name="form" id="form1" method="POST" >
                                    <?php $no = 1; foreach($data as $soal) : ?>
                                    <input type="hidden" name="id[]" value="<?php echo $soal->id ?>">

                                    <?php echo $no++ .'.'. $soal->pertanyaan ?><br>
                                    <div class="form-group">
                                        <div class="demo-radio-button ">
                                            <input class="with-gap" id="radio_1[<?php echo $soal->id ?>]" type="radio" name="pilihan[<?php echo $soal->id ?>]" value="A" >
                                            <label for="radio_1[<?php echo $soal->id ?>]"><?php echo 'A. '.$soal->a ?></label><br>
                                            <input class="with-gap" id="radio_2[<?php echo $soal->id ?>]" type="radio" name="pilihan[<?php echo $soal->id ?>]" value="B" >
                                            <label for="radio_2[<?php echo $soal->id ?>]"><?php echo 'B. '.$soal->b ?></label><br>
                                            <input class="with-gap" id="radio_3[<?php echo $soal->id ?>]" type="radio" name="pilihan[<?php echo $soal->id ?>]" value="C" >
                                            <label for="radio_3[<?php echo $soal->id ?>]"><?php echo 'C. '.$soal->c ?></label><br>
                                            <input class="with-gap" id="radio_4[<?php echo $soal->id ?>]" type="radio" name="pilihan[<?php echo $soal->id ?>]" value="D" >
                                            <label for="radio_4[<?php echo $soal->id ?>]"><?php echo 'D. '.$soal->d ?></label><br>
                                            <input class="with-gap" id="radio_5[<?php echo $soal->id ?>]" type="radio" name="pilihan[<?php echo $soal->id ?>]" value="E" >
                                            <label for="radio_5[<?php echo $soal->id ?>]"><?php echo 'E. '.$soal->e ?></label><br>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php endforeach ?>
                                    <div class="form-group">
                                        <button type="submit" name="prosess" class="btn btn-primary"  onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">Proses</button>
                                    </div>
                                </form>
                            </div>
                       
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>

<div class="modal fade" id="thankModal" tabindex="-1" role="dialog" aria-labelledby="thankModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="thankModalLabel">Warning</h4>
      </div>
      <div class="modal-body">
        <p>You will not be able to access another page after Click Okay. Complete the questions and you will redirect to Dashboard automatically</p>
        <p>If You  dont answer the questions when the time is up then only the selected answer will be saved to our database</p>
        <p>Cheating is not good for our successfull</p>
        <p>Bismillah</p>
        <p>By Akbar cakep lebih cakep dari afgan</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 0px; ">Okay</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">

    $(document).ready(function() {


        $('.childmenu').attr('href', "#").attr('disabled', true);
        $('#thankModal').modal('show');
   
       
        $(document).on("click",".btn-start",function() {
            $('.soal').removeAttr('style');
            $('.msg').css('display', 'none');
            //durasi ujian
            var durasi = 60 * 45,
            display = $('#countdowntimer');
            startTimer(durasi, display);

           

        });

        // $(document).on("contextmenu",function(e){
        //     alert('Hei, Have fun');
        //     return false;
        // });
        
        $(document).keydown(function (event) {
            if (event.keyCode == 123) { // Prevent F12
                return false;
            } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
                return false;
            }
        });

        $( document ).keydown( function ( event )
            {
                if ( event.ctrlKey == true && ( event.which == '61' || event.which == '107' || event.which == '173' || event.which == '109' || event.which == '187' || event.which == '189' ) )
                {event.preventDefault();}
            } );

            $( window ).bind( 'mousewheel DOMMouseScroll', function ( event )
            {
                if ( event.ctrlKey == true ){event.preventDefault();}
         } );
        
   
    });

  

 function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 1) {
            timer = 0;
            document.getElementById("countdowntimer").textContent = 'Time is Up';
             $('.btn-start').attr('disabled', true).attr('readonly', true);
            document.getElementById("form1").submit();

           
        }else{
            $('#countdowntimer').removeAttr('style');

        }
    }, 1000);
}



    // var timeleft = 1000;
    // var mins = Math.floor(timeleft / 60);
    // var secs = timeleft % 60;
    // var left = mins + secs
    // var downloadTimer = setInterval(function(){
    // --mins;
    // if (mins <= 0){
    //     clearInterval(downloadTimer);
    //     document.getElementById("countdowntimer").textContent = 'Time is Up';
    //     $('.btn-start').attr('disabled', true).attr('readonly', true);

    // }else{
    //     $('.btn-info').removeAttr('style');
    //     document.getElementById("countdowntimer").textContent = mins + ":" + secs;
        
    // }
    // }, 1000)

 
</script>

