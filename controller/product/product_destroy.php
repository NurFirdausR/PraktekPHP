<?php
include_once '../../connect.php';
include_once 'productController.php';

//3.proses dengan menciptakan object dari model Produk (seleksi tombol)
$tombol = $_POST['proses']; 
$model = new ProductControllers(); 
if($tombol == 'hapus'){
	$id = [$_POST['idx']]; 
	$model->hapus($id);
    header('location:../../index.php?halaman=dashboard_product');

}
else{ //tombol ubah landing page - hanya batal (Landing Page ke halaman produk tanpa adanya perubahan data)
	header('location:../../index.php?halaman=dashboard_product');
}

//4. Landing Page ke halaman produk dengan adanya perubahan data

?> <!-- jika murni php, tidak ditutup tak apa2, kecuali ada kombinasi dengan html harus ada buka tutup -->