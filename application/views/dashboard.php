<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
        </div>
    </div>
    </div>
</div>

<div class="container">
    
    <?php foreach ($barang as $brg) : ?>
        <div class="card" style="width: 12rem;">
            <img src="<?php echo base_url().'uploads/'.$brg->gambar ?>" class="card-img-top rounded "  alt="...">
        
            <div class="card-body">
                <h5 class="card-title"><?php echo $brg->Judul ?></h5>
                <small><?php echo $brg->kategori ?></small><br>
                <span class="badge rounded-pill bg-success text-white mb-1">Rp. <?php echo $brg->harga ?></span>
            </div>
                <div class="card-footer">    
                    <a href="#" class="btn btn-sm btn-warning mr-1"><i class="fas fa-cart-plus"> Tambah</i></a>
                    <a href="#" class="btn btn-sm btn-info ">Detail</i></a>
                </div>
        </div>
        
    <?php endforeach; ?>
</div>
