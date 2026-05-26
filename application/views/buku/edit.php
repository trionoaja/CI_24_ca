<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">
    Edit Buku
</h1>

<div class="card shadow">

<div class="card-body">

<form method="post">

<div class="form-group">
<label>Kode Buku</label>

<input type="text"
       name="kode_buku"
       value="<?= $buku->kode_buku; ?>"
       class="form-control"
       required>
</div>

<div class="form-group">
<label>Judul</label>

<input type="text"
       name="judul"
       value="<?= $buku->judul; ?>"
       class="form-control"
       required>
</div>

<div class="form-group">
<label>Penulis</label>

<input type="text"
       name="penulis"
       value="<?= $buku->penulis; ?>"
       class="form-control">
</div>

<div class="form-group">
<label>Penerbit</label>

<input type="text"
       name="penerbit"
       value="<?= $buku->penerbit; ?>"
       class="form-control">
</div>

<div class="form-group">
<label>Tahun</label>

<input type="number"
       name="tahun"
       value="<?= $buku->tahun; ?>"
       class="form-control">
</div>

<div class="form-group">
<label>Stok</label>

<input type="number"
       name="stok"
       value="<?= $buku->stok; ?>"
       class="form-control">
</div>

<button type="submit"
        class="btn btn-primary">

    Update
</button>

<a href="<?= site_url('buku'); ?>"
   class="btn btn-secondary">

   Kembali
</a>

</form>

</div>
</div>
</div>