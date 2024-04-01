<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
        </div>
        <form action="<?= base_url('product/update/' . $product['product_id']); ?>" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" name="product_name" value="<?= $product['product_name'] ?>" class="form-control" id="productName" placeholder="Name Product" required>
                </div>
                <div class="form-group">
                    <label for="productDescription">Product Description</label>
                    <input type="text" name="product_description" value="<?= $product['product_description'] ?>" class="form-control" id="productDescription" placeholder="Description Product" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>