<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">SOAL UJIAN</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="container">
                                <?php echo form_open(site_url().'/soal/cekJawaban') ?>
                                <?php $no = 1; foreach($soal as $soal) : ?>
                                <input type="hidden" name="id[]" value="<?php echo $soal->id ?>">   
                                    
                                    <?php echo $no++ .'.'. $soal->pertanyaan ?><br>
                                    <div class="form-group">
                                        <div class="radio ">
                                        <label><input type="radio" name="pilihan[<?php echo $soal->id ?>]" value="A" ><?php echo 'A. '.$soal->a ?></label><br>
                                        <label><input type="radio" name="pilihan[<?php echo $soal->id ?>]" value="B" ><?php echo 'B. '.$soal->b ?></label><br>
                                        <label><input type="radio" name="pilihan[<?php echo $soal->id ?>]" value="C" ><?php echo 'C. '.$soal->c ?></label><br>
                                        <label><input type="radio" name="pilihan[<?php echo $soal->id ?>]" value="D" ><?php echo 'D. '.$soal->d ?></label><br>
                                        <label><input type="radio" name="pilihan[<?php echo $soal->id ?>]" value="E" ><?php echo 'E. '.$soal->e ?></label><br>
                                        <p>Jawaban : <?php echo $soal->jawaban ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php endforeach ?>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">Proses</button>
                                    </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
</div>