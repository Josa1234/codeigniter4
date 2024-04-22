<div class="col-sm-12">
    <a href="<?= base_url('product/tambah'); ?>" class="btn btn-warning">Tambah</a><br><br>
    <?php
    if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php } ?>

    <?php
    $errors = $validation->getErrors();
    if (!empty($errors)) { ?>
        <div class="alert alert-danger">
            <?php
            echo $validation->listErrors();
            ?>
        </div>
    <?php } ?>

    <table id="example1" class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>No</th>
                <th>Product</th>
                <th>Deskripsi Product</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($product as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['product_name']; ?></td>
                    <td><?= $value['product_description']; ?></td>
                    <td><img src="<?= base_url('images/' . $value['image']); ?>" width='100px' height='100px'></td>
                    <td>
                        <a href="<?= base_url('product/edit/' . $value['product_id']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('product/delete/' . $value['product_id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menghapus ?...')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>