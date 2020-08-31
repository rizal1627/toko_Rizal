<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slide1.jpg') ?>" class="d-block w-100" style="height: 500px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slide2.png') ?>" class="d-block w-100 " style="height: 500px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slide3.jpg') ?>" class="d-block w-100 " style="height: 500px;" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="row text-center mt-5 mb-5">
    <?php foreach ($barang as $brg) : ?>
      <div class="card ml-3" style="width: 18rem;">
        <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $brg->nama_barang; ?></h5>
          <small><?php echo $brg->keterangan; ?></small><br>
          <span class="badge badge-pill badge-success p-2 mt-2">Rp. <?php echo $brg->harga; ?></span>
          <a href="#" class="btn btn-sm btn-primary mt-2"><i class="fas fa-fw fa-plus"></i> Masukan Keranjang</a>
          <a href="#" class="btn btn-sm btn-success mt-2"><i class="fas fa-fw fa-search"></i> Detail</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>