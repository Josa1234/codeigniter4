<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
        </div>
        <form action="<?= base_url('supplier/save'); ?>" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="supplierName">Supplier Name</label>
                    <input type="text" name="supplier_name" class="form-control" id="supplierName" placeholder="Name Supplier" required>
                </div>
                <div class="form-group">
                    <label for="supplierDescription">Supplier Description</label>
                    <input type="text" name="supplier_description" class="form-control" id="supplierDescription" placeholder="Supplier Description" required>
                </div>
                <div class="form-group">
                    <label for="supplierAddres">Supplier Addres</label>
                    <input type="text" name="supplier_address" class="form-control" id="supplierAddres" placeholder="Supplier Address" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>