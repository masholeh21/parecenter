      <div class="container" >
        <div class="col-lg-12" style="background-color: white; padding-top: 50px; border-radius: 5px">
          <h3 style="text-align: center;">program Terpopuler</h3>
          <hr>
        <div class="row text-center batas">
          <?php foreach ($program as $program_item) { ?>
          <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="card" style="text-align: left;">
              <img class="card-img-top" src="http://placehold.it/500x325" alt="">
              <div class="card-body">
                <h4 class="card-title"><?php echo $program_item['nama_program']; ?></h4>
                <p class="card-text"><?= substr($program_item['deskripsi_program'], 0, 50); ?> ....</p>
              </div>
              <div class="card-footer">
                <a href="<?php echo site_url('program/'.$program_item['id_paket_program']); ?>" class="btn btn-primary">Info Selengkapnya</a>
              </div>
            </div>
          </div>
           <?php } ?>

        </div>
  </div>
</div>
<br>