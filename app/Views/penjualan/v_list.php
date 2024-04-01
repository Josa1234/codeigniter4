<div class="col-sm-12">
    <a href="<?= base_url('penjualan/tambah'); ?>" class="btn btn-warning">Tambah</a><br><br>
    <?php
    if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php } ?>

    <table id="example1" class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>No</th>
                <th>No Faktur</th>
                <th>Nama Pembeli</th>
                <th>Product Id</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total Bayar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($penjualan as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['no_faktur']; ?></td>
                    <td><?= $value['nama_pembeli']; ?></td>
                    <td><?= $value['product_id']; ?></td>
                    <td><?= $value['jumlah']; ?></td>
                    <td><?= $value['harga_satuan']; ?></td>
                    <td><?= $value['total_bayar']; ?></td>
                    <td>
                        <a href="<?= base_url('penjualan/edit/' . $value['id_penjualan']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('penjualan/delete/' . $value['id_penjualan']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menghapus ?...')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>