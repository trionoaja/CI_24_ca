<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">
    Data Buku
</h1>

<a href="<?= site_url('buku/tambah'); ?>"
   class="btn btn-primary mb-3">

   <i class="fas fa-plus"></i>
   Tambah Buku
</a>

<div class="card shadow mb-4">

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered"
       id="dataTable"
       width="100%">

<thead class="thead-dark">

<tr>
    <th>No</th>
    <th>Kode</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

</thead>

<tbody>

<?php $no=1; foreach($data as $d): ?>

<tr>

<td><?= $no++; ?></td>
<td><?= $d->kode_buku; ?></td>
<td><?= $d->judul; ?></td>
<td><?= $d->penulis; ?></td>
<td><?= $d->penerbit; ?></td>
<td><?= $d->tahun; ?></td>
<td><?= $d->stok; ?></td>

<td>

<a href="<?= site_url('buku/edit/'.$d->id); ?>"
   class="btn btn-warning btn-sm">

   Edit
</a>

<a href="<?= site_url('buku/hapus/'.$d->id); ?>"
   class="btn btn-danger btn-sm"
   onclick="return confirm('Hapus data?')">

   Hapus
</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>
</div>
</div>
</div>