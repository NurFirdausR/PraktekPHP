<?php
include_once '../../connect.php';
include_once 'productController.php';

$nama_product = $_POST['nama_product_edit'];
$gambar_product = $_POST['gambar_product_edit'];
$deskripsi_product = $_POST['deskripsi_product_edit'];
$harga_product = $_POST['harga_product_edit'];
$spesifikasi_product = $_POST['spesifikasi_product_edit'];
$categories_product = $_POST['categories_product_edit'];


$data = [
    $nama_product, // ? 1
    $gambar_product, // ? 2
    $deskripsi_product, // ? 3
    $harga_product, // ? 4
    $spesifikasi_product, // ? 5
    $categories_product // ? 6
];
$tombol = $_POST['proses']; 
$model = new ProductControllers(); //ciptakan object dari ProductController.php
if ($tombol == 'ubah') { 
    //tangkap hidden field idx
    $data[] = $_POST['idx']; //? 6 untuk klausa WHERE id = ? artinya untuk ubah ada 5 tanda tanya diatas + 1 tanda tanya where id (total 6 tanda tanya)
    $model->ubah($data);
}
header('location:../../index.php?halaman=dashboard_product');


