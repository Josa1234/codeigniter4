<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
        </div>
        <?= form_open_multipart(base_url('product/save')); ?>
        <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
        <div class="card-body">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" name="product_name" class="form-control" id="productName" placeholder="Name Product" required>
            </div>
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <input type="text" name="product_description" class="form-control" id="productDescription" placeholder="Description Product" required>
            </div>
            <div class="form-group">
                <label for="productImage">File/Gambar</label>
                <input type="file" name="image" class="form-control" id="productImage" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- </form> -->
        <?= form_close(); ?>
    </div>
</div>