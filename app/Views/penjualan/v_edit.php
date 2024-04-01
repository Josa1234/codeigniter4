<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
        </div>
        <form action="<?= base_url('penjualan/update/' . $penjualan['id_penjualan']); ?>" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="noFaktur">No Faktur</label>
                    <input type="number" name="no_faktur" class="form-control" value="<?= $penjualan['no_faktur'] ?>" id="noFaktur" placeholder="No Faktur" required>
                </div>
                <div class="form-group">
                    <label for="namaPembeli">Nama Pembeli</label>
                    <input type="text" name="nama_pembeli" class="form-control" value="<?= $penjualan['nama_pembeli'] ?>" id="namaPembeli" placeholder="Nama Pembeli" required>
                </div>
                <div class="form-group">
                    <label for="productId">Product Id</label>
                    <input type="number" name="product_id" class="form-control" id="productId" value="<?= $penjualan['product_id'] ?>" placeholder="Product Id" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" id="jumlah" value="<?= $penjualan['jumlah'] ?>" placeholder="Jumlah" required>
                </div>
                <div class="form-group">
                    <label for="hargaSatuan">Harga Satuan</label>
                    <input type="number" name="harga_satuan" class="form-control" id="hargaSatuan" value="<?= $penjualan['harga_satuan'] ?>" placeholder="Harga Satuan" required>
                </div>
                <div class="form-group">
                    <label for="totalBayar">Total Bayar</label>
                    <input type="number" name="total_bayar" class="form-control" id="totalBayar" value="<?= $penjualan['total_bayar'] ?>" placeholder="Total Bayar" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>