<?php
include_once '../../connect.php';
include_once 'productController.php';

//1.tangkap request nama2 pada element form (form_produk.php)
$nama_product = $_POST['nama_product_edit'];
$gambar_product = $_POST['gambar_product_edit'];
$deskripsi_product = $_POST['deskripsi_product_edit'];
$harga_product = $_POST['harga_product_edit'];
$spesifikasi_product = $_POST['spesifikasi_product_edit'];
$categories_product = $_POST['categories_product_edit'];


//2.himpun dan simpan semua variabel di atas dalam satu array/data kolektif
$data = [
    $nama_product, // ? 1
    $gambar_product, // ? 2
    $deskripsi_product, // ? 3
    $harga_product, // ? 4
    $spesifikasi_product, // ? 5
    $categories_product // ? 6
];
//3.proses dengan menciptakan object dari model Produk (seleksi tombol)
$tombol = $_POST['proses']; //tangkap request tombol
$model = new ProductControllers(); //ciptakan object dari ProdukModel.php
if ($tombol == 'ubah') { //== --> artinya perbandingan/equal
    //tangkap hidden field idx
    $data[] = $_POST['idx']; //? 6 untuk klausa WHERE id = ? artinya untuk ubah ada 5 tanda tanya diatas + 1 tanda tanya where id (total 6 tanda tanya)
    $model->ubah($data);
}
header('location:../../index.php?halaman=dashboard_product');

//4. Landing Page ke halaman produk dengan adanya perubahan data

?>
<!-- jika murni php, tidak ditutup tak apa2, kecuali ada kombinasi dengan html harus ada buka tutup -->