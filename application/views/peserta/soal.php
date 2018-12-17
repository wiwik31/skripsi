       <style>
           
           .mydivs {
                height:300px;
            }
            .mydivs>div {
                height:100%;
                overflow-y:auto;
                border:5px solid #ff0;
                padding:1em;
                box-sizing:border-box;
                -moz-box-sizing:border-box;
}
       </style>

        <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>ONLINE TEST</h2>
                           
                            <h5 class="msg" id="msg" >Klik Tombol Mulai untuk memulai tes Online <button type="button" class="btn btn-small btn-start">MULAI</button> </h5> 

                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">USPMB</i>
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
                                    <div class="divs">
                                        <div>
                                            <input type="hidden" name="id[]" value="<?php echo $soal->id ?>">

                                            <?php echo $no++ .'.'. $soal->pertanyaan ?><br>
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
                                            <hr>

                                        </div>
                                    </div>
                                        
                                   
                                    <?php endforeach ?>
                                       
                                    <div class="form-group">
                                    <a  class="btn btn-primary btn-sm" name="prev">Kembali</a>
                                        <a  class="btn btn-primary btn-sm" name="next">Berikutnya</a>
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
        <h1 class="modal-title" id="thankModalLabel"><p style="color: red;">Warning !</p></h1>
      </div>
      <div class="modal-body">
        <p>Anda tidak akan dapat mengakses halaman lain setelah Klik Oke. Lengkapi pertanyaan dan Anda akan dialihkan ke Halaman utama secara otomatis</p>
        <p>Jika Anda tidak menjawab pertanyaan ketika waktunya habis maka hanya jawaban yang dipilih yang akan disimpan ke database kami</p>
        <p>Curang tidak baik untuk kesuksesan dan kesehatan Anda</p>
        <p>Jangan lupa berdo'a</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 0px; ">Accept</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">

    $(document).ready(function() {
            var divs = $('.divs>div');
            var now = 0; // currently shown div
            divs.hide().first().show();
            divs.each(function(e) {
                if (e != 0)
                    $(this).hide();
            });
            $("a[name=next]").click(function (e) {
                divs.eq(now).hide();
                now = (now + 1 < divs.length) ? now + 1 : 0;
                divs.eq(now).show(); // show next
            });
            $("a[name=prev]").click(function (e) {
                divs.eq(now).hide();
                now = (now > 0) ? now - 1 : divs.length - 1;
                divs.eq(now).show(); // or .css('display','block');
                //console.log(divs.length, now);
            });

            //  $(".divs div").each(function(e) {
            //         if (e != 0)
            //             $(this).hide();
            //     });
                
            //     $("#next").click(function(){
            //         if ($(".divs div:visible").next().length != 0)
            //             $(".divs div:visible").next().show().prev().hide();
            //         else {
            //             $(".divs div:visible").hide();
            //             $(".divs div:first").show();
            //         }
            //         return false;
            //     });

            //     $("#prev").click(function(){
            //         if ($(".divs div:visible").prev().length != 0)
            //             $(".divs div:visible").prev().show().next().hide();
            //         else {
            //             $(".divs div:visible").hide();
            //             $(".divs div:last").show();
            //         }
            //         return false;
            //     });


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

