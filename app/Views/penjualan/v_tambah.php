<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
        </div>
        <form action="<?= base_url('penjualan/save'); ?>" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="noFaktur">No Faktur</label>
                    <input type="number" name="no_faktur" class="form-control" id="noFaktur" placeholder="No Faktur" required>
                </div>
                <div class="form-group">
                    <label for="namaPembeli">Nama Pembeli</label>
                    <input type="text" name="nama_pembeli" class="form-control" id="namaPembeli" placeholder="Nama Pembeli" required>
                </div>
                <div class="form-group">
                    <label for="productId">Product Id</label>
                    <input type="number" name="product_id" class="form-control" id="productId" placeholder="Product Id" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah" required>
                </div>
                <div class="form-group">
                    <label for="hargaSatuan">Harga Satuan</label>
                    <input type="number" name="harga_satuan" class="form-control" id="hargaSatuan" placeholder="Harga Satuan" required>
                </div>
                <div class="form-group">
                    <label for="totalBayar">Total Bayar</label>
                    <input type="number" name="total_bayar" class="form-control" id="totalBayar" placeholder="Total Bayar" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>