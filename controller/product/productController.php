<?php
include_once "../../connect.php";

// Public
class ProductControllers {
    public  $conn;

    public function __construct()
    {
        global $dbh;
    $this->conn = $dbh; 
}
    public function getAll()
    {   
        
        $sql="SELECT product.*,categories.nama_categories AS kategori FROM product 
        INNER JOIN categories ON categories.id = product.id_categories";
    
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(); 
        $result=$stmt->fetchAll(); 
        return $result;
    }
    public function edit($id)
    {
        $sql = "SELECT product.*, categories.nama_categories AS kategori FROM product INNER JOIN categories ON categories.id = product.id_categories WHERE product.id = ?";
        $ps = $this->conn->prepare($sql);
        $ps->execute($id);
        $rs=$ps->fetch();
        return $rs;
    }
    public function show($id)
    {
        
        $sql = "SELECT product.*, categories.nama_categories AS kategori FROM product INNER JOIN categories ON categories.id = product.id_categories WHERE product.id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($id);
        $rs= $stmt->fetch();
        return $rs;
    }

    public function simpan($data)
	{
		$sql = "INSERT INTO product(nama_product,gambar_product,deskripsi_product,harga_product,spesifikasi_product,id_categories) VALUES (?,?,?,?,?,?)";
		$stmt = $this->conn->prepare($sql); 
		$stmt->execute($data); 
	}
    
    public function ubah($data)
    {
		$sql = "UPDATE product SET nama_product=?,gambar_product=?,deskripsi_product=?,harga_product=?,spesifikasi_product=?,id_categories=? WHERE id=?";
		$stmt = $this->conn->prepare($sql); 
		$stmt->execute($data); 
	}

    public function hapus($id)
	{
		$sql = "DELETE FROM product WHERE id=?";
		$stmt = $this->conn->prepare($sql); 
		$stmt->execute($id); 
	}

   
}
