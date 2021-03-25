<?php 

// $model=new JenisModel();
// $ar_jenis=$model->getAll();
include_once "controller/product/productController.php";

//proses edit data lama
$obj=new ProductControllers();
$idedit=$_REQUEST['id_edit'];
// var_dump($idedit);
if(!empty($idedit)){ //modus edit data lama
  $edit=$obj->edit([$idedit]); //form berisi data lama yang akan diedit
}
?>
<div>
<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Product</h4>
                  <p class="card-description">
                    Product
                  </p>
                  <form action="controller/product/product_edit_simpan.php" method="POST" class="forms-sample">
                    <div class="form-group">
                      <label for="nama_product">Nama Laptop</label>
                      <input type="text" class="form-control" value="<?= $edit['nama_product'] ?>" name="nama_product_edit" id="nama_product_edit" placeholder="Nama Product">
                    </div>
                    <div class="form-group">
                      <label for="gambar_product">Url Gambar</label>
                      <input type="text" class="form-control" value="<?= $edit['gambar_product'] ?>" name="gambar_product_edit" id="gambar_product_edit" placeholder="Url Gambar">
                    </div>
                    <div class="form-group">
                      <label for="deskripsi_product">Deskripsi Product</label>
                      <textarea  name="deskripsi_product_edit" id="deskripsi_product_edit" class="form-control" cols="30" rows="10"><?= $edit['deskripsi_product'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="harga_product">Harga Product</label>
                      <input type="number" class="form-control" value="<?= $edit['harga_product'] ?>" name="harga_product_edit" id="harga_product_edit" placeholder="Harga Product">
                    </div>
                    <div class="form-group">
                      <label for="spesifikasi_product">Spesifikasi Product</label>
                      <input type="text" class="form-control" value="<?= $edit['spesifikasi_product'] ?>" name="spesifikasi_product_edit" id="spesifikasi_product_edit" placeholder="processor,tebal,warna">
                    </div>
                    <div class="form-group">
                      <label for="categories_product">Categories Product</label>
                      <select class="form-control" name="categories_product_edit" id="categories_product_edit">
                          <option value="<?= $edit['id_categories'] ?>" selected><?= $edit['kategori'] ?></option>
                      </select>
                      <!-- <input type="text" class="form-control" value="" name="categories_product" id="categories_product" placeholder="processor,tebal,warna"> -->
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" value="ubah" name="proses" >Edit</button>
                    <input type="hidden" name="idx" value="<?=$edit['id'] ?>">

                    <a href="index.php?halaman=dashboard_product" class="btn btn-light">Back</a >
                  </form>
                </div>
              </div>
</div>