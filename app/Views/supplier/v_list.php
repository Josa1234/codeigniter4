<div class="col-sm-12">
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
                    <td><?= $value['address']; ?></td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>