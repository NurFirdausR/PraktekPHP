<?php 
session_start();
include '../connect.php'; // panggil perintah koneksi database 



if(isset($_POST['login'])) { // mengecek apakah form variabelnya ada isinya
    $username = $_POST['username']; // isi varibel dengan mengambil data username pada form
    $password = $_POST['password']; // isi variabel dengan mengambil data password pada form

    try {
        $sql = "SELECT * FROM user WHERE username = :username AND password = :password"; // buat queri select
        $stmt = $dbh->prepare($sql); 
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute(); // jalankan query

        $count = $stmt->rowCount(); // mengecek row
        if($count == 1) { // jika rownya ada 
            $_SESSION['username'] = $username; // set sesion dengan variabel username
            
            header("Location:../index.php?halaman=dashboard_product"); // lempar variabel ke tampilan index.php
            return;
        }else{
          $message = "Username / Password Salah!";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>