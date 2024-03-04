<div class="col-sm-12">
    <table id="example1" class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>No</th>
                <th>Product</th>
                <th>Deskripsi Product</th>
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
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>