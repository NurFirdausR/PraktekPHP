<?php
include_once '../../connect.php';
include_once 'productController.php';

$nama_product = $_POST['nama_product'];
$gambar_product = $_POST['gambar_product'];
$deskripsi_product = $_POST['deskripsi_product'];
$harga_product = $_POST['harga_product'];
$spesifikasi_product = $_POST['spesifikasi_product'];
$categories_product = $_POST['categories_product'];


$data = [
    $nama_product, // ? 1
    $gambar_product, // ? 2
    $deskripsi_product, // ? 3
    $harga_product, // ? 4
    $spesifikasi_product,// ? 5
    $categories_product // ? 6
];
$tombol = $_POST['proses']; 
if($tombol == 'simpan'){ 
    $model = new  ProductControllers(); //ciptakan object dari ProductController.php
    $model->simpan($data);
    header('location:../../index.php?halaman=dashboard_product');
    
}

?> <!-- jika murni php, tidak ditutup tak apa2, kecuali ada kombinasi dengan html harus ada buka tutup -->