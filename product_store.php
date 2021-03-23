<?php
include_once 'connect.php';
include_once 'controller/productController.php';

//1.tangkap request nama2 pada element form (form_produk.php)
$nama_product = $_POST['nama_product'];
$gambar_product = $_POST['gambar_product'];
$deskripsi_product = $_POST['deskripsi_product'];
$harga_product = $_POST['harga_product'];
$spesifikasi_product = $_POST['spesifikasi_product'];


//2.himpun dan simpan semua variabel di atas dalam satu array/data kolektif
$data = [
    $nama_product, // ? 1
    $gambar_product, // ? 2
    $deskripsi_product, // ? 3
    $harga_product, // ? 4
    $spesifikasi_product // ? 5
];

//3.proses dengan menciptakan object dari model Produk (seleksi tombol)
$tombol = $_POST['proses']; //tangkap request tombol
$model = new  ProductControllers(); //ciptakan object dari ProdukModel.php
$model->simpan($data);
// if($tombol == 'simpan'){ //== --> artinya perbandingan/equal
// }
// else if($tombol == 'ubah'){
// 	//tangkap hidden field idx
// 	$data[] = $_POST['idx']; //? 6 untuk klausa WHERE id = ? artinya untuk ubah ada 5 tanda tanya diatas + 1 tanda tanya where id (total 6 tanda tanya)
// 	$model->ubah($data);
// }
// else if($tombol == 'hapus'){
// 	unset($data); //hapus 5 ? atau kelima tanda tanya di $data di atas kita hapus... unset: hapus array
// 	$id = [$_POST['idx']]; //tangkap hidden field idx
// 	$model->hapus($id);
// }
// else{ //tombol ubah landing page - hanya batal (Landing Page ke halaman produk tanpa adanya perubahan data)
// 	header('location:index.php?hal=produk');
// }

//4. Landing Page ke halaman produk dengan adanya perubahan data
header('location:index.php?halaman=dashboard_product');

?> <!-- jika murni php, tidak ditutup tak apa2, kecuali ada kombinasi dengan html harus ada buka tutup -->