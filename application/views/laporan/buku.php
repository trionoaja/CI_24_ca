<div class="container-fluid">

<h3>Laporan Data Buku</h3>

<!-- FILTER -->
<form method="get">

<div class="row mb-3">

    <div class="col-md-4">

        <select name="kategori" class="form-control">

            <option value="">
                -- Semua Kategori --
            </option>

            <?php foreach($kategori as $k): ?>

                <option value="<?= $k->id; ?>">

                    <?= $k->nama_kategori; ?>

                </option>

            <?php endforeach; ?>

        </select>

    </div>

    <div class="col-md-6">

        <button type="submit"
                class="btn btn-primary">

            Filter
        </button>

        <a href="<?= site_url('laporan/buku'); ?>"
           class="btn btn-secondary">

           Reset
        </a>

        <a href="<?= site_url('buku/cetak_buku'); ?>"
           target="_blank"
           class="btn btn-success">

           Cetak PDF
        </a>

    </div>

</div>

</form>

<table class="table table-bordered mt-3">

<tr>
    <th>No</th>
    <th>Kode</th>
    <th>Judul</th>
    <th>Kategori</th>
    <th>Stok</th>
</tr>

<?php $no=1; foreach($data as $b): ?>

<tr>

<td><?= $no++; ?></td>
<td><?= $b->kode_buku; ?></td>
<td><?= $b->judul; ?></td>
<td><?= $b->nama_kategori; ?></td>
<td><?= $b->stok; ?></td>

</tr>

<?php endforeach; ?>

</table>

</div>