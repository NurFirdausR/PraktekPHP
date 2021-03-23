<div>
<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Product</h4>
                  <p class="card-description">
                    Product
                  </p>
                  <form action="product_store.php" method="POST" class="forms-sample">
                    <div class="form-group">
                      <label for="nama_product">Nama Laptop</label>
                      <input type="text" class="form-control" name="nama_product" id="nama_product" placeholder="Nama Product">
                    </div>
                    <div class="form-group">
                      <label for="gambar_product">Url Gambar</label>
                      <input type="text" class="form-control" name="gambar_product" id="gambar_product" placeholder="Url Gambar">
                    </div>
                    <div class="form-group">
                      <label for="deskripsi_product">Deskripsi Product</label>
                      <textarea name="deskripsi_product" id="deskripsi_product" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="harga_product">Harga Product</label>
                      <input type="number" class="form-control" name="harga_product" id="harga_product" placeholder="Harga Product">
                    </div>
                    <div class="form-group">
                      <label for="spesifikasi_product">Spesifikasi Product</label>
                      <input type="text" class="form-control" name="spesifikasi_product" id="spesifikasi_product" placeholder="processor,tebal,warna">
                    </div>
                    <div class="form-group">
                      <label for="categories_product">Categories Product</label>
                      <select name="" id=""></select>
                      <input type="text" class="form-control" name="categories_product" id="categories_product" placeholder="processor,tebal,warna">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="proses">Submit</button>
                    <a href="index.php?halaman=dashboard_product" class="btn btn-light">Back</a >
                  </form>
                </div>
              </div>
</div>