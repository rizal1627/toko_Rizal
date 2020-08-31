<div class="container-fluid">
	<button class="btn btn-primary btn-sm p-1" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-fw fa-plus p-1"></i> Tambah Barang</button>

	<table class="table table-bordered mt-3 mb-5">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th><!-- 
			<th>Gambar</th> -->
			<th class="text-center">Action</th>
		</tr>

		<?php 
		$no=1;
		foreach ($barang as $brg): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $brg->nama_barang ?></td>
				<td><?php echo $brg->keterangan ?></td>
				<td><?php echo $brg->kategori ?></td>
				<td><?php echo $brg->harga ?></td>
				<td><?php echo $brg->stok ?></td><!-- 
				<td><?php echo $brg->gambar ?></td> -->
				<td class="text-center">
					<div class="btn btn-success btn-sm m-1"><i class="fas fa-fw fa-search-plus p-1"></i></div>
					<div class="btn btn-primary btn-sm m-1"><i class="fas fa-fw fa-edit p-1"></i></div>
					<div class="btn btn-danger btn-sm m-1"><i class="fas fa-fw fa-trash p-1"></i></div>
				</td>
			</tr>
		<?php endforeach ;?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'admin/data_barang/tambah_aksi';?>" method="post" enctype="multipart/formdata">
      		<div class="form-group">
      			<label>Nama Barang</label>
      			<input type="text" name="nama_barang" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Keterangan</label>
      			<input type="text" name="keterangan" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Kategori</label>
      			<input type="text" name="kategori" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Harga</label>
      			<input type="text" name="harga" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Stok</label>
      			<input type="text" name="stok" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Gambar Produk</label>
      			<input type="file" name="gambar" class="form-control pb-5">
      		</div>
      	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form> 
    </div>
  </div>
</div>