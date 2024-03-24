<div class="col-sm-12">
    <a href="<?= base_url('supplier/tambah'); ?>" class="btn btn-warning">Tambah</a><br><br>
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
                <th>Supplier</th>
                <th>Deskripsi Supplier</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($supplier as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['supplier_name']; ?></td>
                    <td><?= $value['supplier_description']; ?></td>
                    <td><?= $value['supplier_address']; ?></td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('supplier/delete/' . $value['supplier_id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menghapus ?...')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>