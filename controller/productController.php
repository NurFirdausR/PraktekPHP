<?php
include_once "../connect.php";

// untuk  memanggil database isi database dengan Query lewat OOP
// Public
class ProductControllers {
    //Member 1 var
    public  $conn;

    //Member 2 Konstruk
    public function __construct()
    {
        global $dbh;//panggil variable di file ('connect.php')
    //  global: akses variable di lokasi lain
    $this->conn = $dbh; 
}
    public function getAll()//getAll: Menampilkan seluruh Data
    {   
        
        $sql="SELECT product.*,categories.nama_categories AS kategori FROM product 
        INNER JOIN categories ON categories.id = product.id_categories";
    
        //menampilkan data categories dengan urut A-Z
        $ps = $this->conn->prepare($sql); //$this: minta izin akses ke member lain pada class, yaitu ke connsi.php, dan masuk 
        //ke database sql
        $ps->execute(); //setelah di prepare sqlnya di eksekusi
        //(ps:prepare statement)
        $result=$ps->fetchAll(); //fetchAll: ambil seluruh baris data
        return $result;
    }
    public function show($id)
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis WHERE produk.id = ?";
        $ps = $this->conn->prepare($sql);
        $ps->execute($id);
        $rs=$ps->fetch();
        return $rs;
    }

    public function simpan($data)
	{
		$sql = "INSERT INTO produk(nama,harga,stok,idjenis,gambar) VALUES (?,?,?,?,?)";
		//prepare statement/ps PDO (di siapkan dulu apa yg akan di ekskeusi, misal sqlnya)
		$ps = $this->conn->prepare($sql); //$this: minta izin akses member lain pada class
		$ps->execute($data); //setelah di prepare sqlnya lalu di eksekusi (eksekusi query)
	}
    
    //member-6 mengubah data pada isi produk (update)
    public function ubah($data)
    {
		$sql = "UPDATE produk SET nama=?,harga=?,stok=?,idjenis=?,gambar=? WHERE id=?";
		//prepare statement/ps PDO (di siapkan dulu apa yg akan di ekskeusi, misal sqlnya)
		$ps = $this->conn->prepare($sql); //$this: minta izin akses member lain pada class
		$ps->execute($data); //setelah di prepare sqlnya lalu di eksekusi (eksekusi query)
	}

    //member-7 menghapus data pada isi produk (delete)
    public function hapus($id)
	{
		$sql = "DELETE FROM produk WHERE id=?";
		//prepare statement/ps PDO (di siapkan dulu apa yg akan di ekskeusi, misal sqlnya)
		$ps = $this->conn->prepare($sql); //$this: minta izin akses member lain pada class
		$ps->execute($id); //setelah di prepare sqlnya lalu di eksekusi (eksekusi query)
	}

    //member-8 melakukan filtering pada isi produk (select)
    public function filter($id) //filter ($id): menampilkan filtering berdasarkan id
	{
	   $sql = "SELECT produk.*, jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis WHERE produk.idjenis = ?"; //select semua produk berdasarkan idjenis
        //prepare statement/ps PDO (di siapkan dulu apa yg akan di ekskeusi, misal sqlnya)
		$ps = $this->conn->prepare($sql); //$this: minta izin akses member lain pada class
		$ps->execute($id); //setelah di prepare sqlnya lalu di eksekusi (eksekusi query id)
		$rs = $ps->fetchAll();//fetchAll: ambil seluruh baris data (kalo ambil 1 baris di sql pakenya fetch)
		return $rs;//return:lalu hasilnya dikembalikan lagi (rs:resultset)
	}     

    //member-9 Membuat fungsi Searching
	public function cari($keyword) //cari ($keyword): memnampilkan searching dengan keyword
	{
	$sql = "SELECT produk.*, jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis WHERE produk.nama LIKE '%$keyword%'"; //searching beberapa produk dengan LIKE ke keyword
 
	//prepare statement/ps PDO (di siapkan dulu apa yg akan di ekskeusi, misal sqlnya)
	$ps = $this->conn->prepare($sql); //$this: minta izin akses member lain pada class
	$ps->execute(); //setelah di prepare sqlnya lalu di eksekusi (eksekusi query)
	$rs = $ps->fetchAll();//fetchAll: ambil seluruh baris data (kalo ambil 1 baris di sql pakenya fetch)
	return $rs;//return:lalu hasilnya dikembalikan lagi (rs:resultset)
	}
}
?>