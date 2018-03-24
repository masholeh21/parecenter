      <div class="container" >
        <div class="col-lg-12" style="background-color: white; padding-top: 50px; border-radius: 5px">
          <h3 style="text-align: center;">Lembaga Terpopuler</h3>
          <hr>
        <div class="row text-center batas">
          <?php foreach ($lembaga as $lembaga_item) { ?>
          <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="card" style="text-align: left;">
              <img class="card-img-top" src="http://placehold.it/500x325" alt="">
              <div class="card-body">
                <h4 class="card-title"><?php echo $lembaga_item['nama_lembaga']; ?></h4>
                <p class="card-text"><?= substr($lembaga_item['deskripsi'], 0, 50); ?> ....</p>
                <b>Rating</b> ***** <br>
              </div>
              <div class="card-footer">
                <a href="<?php echo site_url('blog/'.$lembaga_item['id_lembaga']); ?>" class="btn btn-primary">Info Selengkapnya</a>
              </div>
            </div>
          </div>
           <?php } ?>

        </div>
  </div>
</div>
<br>