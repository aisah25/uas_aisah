<div class="container-fluid">
<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
<table class="table table-bordered text-center">
    <tr>
    <th>Nomber</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
    <th colspan="3" >Aksi</th>
    </tr>

    <?php
    $no =1;
    foreach ($barang as $brg) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $brg->Judul ?></td>
            <td><?php echo $brg->penulis ?></td>
            <td><?php echo $brg->penerbit ?></td>
            <td><?php echo $brg->kategori ?></td>
            <td><?php echo $brg->harga ?></td>
            <td><?php echo $brg->stok ?></td>
            <td> <div class="btn btn-success btn-sm "><i class="fas fa-search-plus"></i></div></td>
            <td> <div class="btn btn-primary btn-sm "><i class="fas fa-edit"></i></div></td>
            <td> <div class="btn btn-danger btn-sm "><i class="fas fa-trash"></i></div></td>
        </tr>
    <?php endforeach ?>
</table>
</div>



<!-- Modal -->
<div class="modal fade " id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/from-data">
            <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" name="Judul" id="Judul" class="form-control">
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control">
            </div>
            <div class="form-group">
                <label for="gambar">Gambr Produk</label> <br>
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>