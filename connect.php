<?php
/* Connect to a MySQL database using driver invocation */
//DATABASE NAME
$dsn = 'mysql:dbname=praktek3-23-2021;host=localhost';
//DATABASE USER
$user = 'root';
//DATABASE PASSWORD
$password = '@Qween164';

try {
    $dbh = new PDO($dsn, $user, $password); //connect ke database nya dari variable yang di atas
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // meringankan relasi di database jika relasi nya lebih dari 2
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
    echo "Koneksi Berhasil";
} catch (PDOException $e) {
    echo 'Gagal Menghubungkan ke Databases' . $e->getMessage();
}

?>