
<?php

// require_once "connect.php";





$conn = mysqli_connect("localhost","root","@Qween164","praktek3-23-2021");

$userid = 0;

// var_dump($_POST['userid']);
if(isset($_POST['userid'])){
   $userid = $_POST['userid'];
}
$sql = "SELECT product.*, categories.nama_categories AS kategori FROM product INNER JOIN categories ON categories.id = product.id_categories WHERE product.id = $userid";
$result = mysqli_query($conn,$sql);

// var_dump($stmt);
// if (isset($_POST['userid'])) {
    //        $userid = $_POST['userid'];

//         $sql = "SELECT product.*, categories.nama_categories AS kategori FROM product INNER JOIN categories ON categories.id = product.id_categories WHERE product.id = ?";
//         $stmt = $this->dbh->prepare($sql);
//         $stmt->bind_param('i',$userid);
//         $stmt->execute();
//         // return $stmt;
//     }
    


$response = "<div class='modal-header";
while ($row = mysqli_fetch_array($result)) {

    list($processor, $tebal, $warna) = explode(',', $row['spesifikasi_product']);

    $id = $row['id'];
    $namaP = $row['nama_product'];
    // var_dump($namaP);
    $gambarP = $row['gambar_product'];
    $deskripsiP = $row['deskripsi_product'];
    $hargaP = number_format($row['harga_product'], 2, ',', '.');
    $processorP = $processor;
    $tebalP = $tebal;
    $warnaP = $warna;
    $date = new DateTime($row['production_product']);
    $productionP = $date->format('d-m-Y');

    $kategoriP = $row['kategori'];

    $response .= "<h5 class='modal-title' id='exampleModalScrollableTitle' style='text-align:center;'>Product</h5>";
    $response .= "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
    $response .= "<span aria-hidden='true'>&times;</span>";
    $response .= "</button>";
    $response .= "</div>";
    $response .= "<div class='modal-body  id='IsiModal'>";
    $response .= "<div>";
    $response .= "<div class='rows pr-2 pl-2 pt-2 pb-5'>";
    $response .= "<center>";
    $response .= "<img id='productGambar' src=' ". $gambarP . "'; style='width: 200px; height: 150px;' alt='' srcset=''>";
    $response .= "</center>";
    $response .= "</div>";
    $response .= "<div >";
    $response .= "<h3 id='productNama'  style='text-align:center;'>" . $namaP . "</h3>";
    $response .= "</div>";
    $response .= "<div class='container'>";
    $response .= "<div class='row'>";
    $response .= "<div class='col-4'>";
    $response .= "<h6>Production:</h6>";
    $response .= "</div>";
    $response .= "<div id='productProduction' class='col-8 d-flex justify-content-end' style='margin-right: -20px;'> " . $productionP . "</div>";
    $response .= "</div>";
    $response .= "<div class='row'>";
    $response .= "<div class='col-4'>";
    $response .= "<h6>Categories:</h6>";
    $response .= "</div>";
    $response .= "<div id='kategori' class='col-8 d-flex justify-content-end' style='margin-right: -20px;'>" . $kategoriP . "</div>";
    $response .= "</div>";
    $response .= "<div class='row'>";
    $response .= "<div class='col-4'>";
    $response .= "<h6>Harga:</h6>";
    $response .= "</div>";
    $response .= "<div class='col-8 d-flex justify-content-end' style='margin-right: -20px;'>Rp.  ".$hargaP." ";
    $response .= "</div>";
    $response .= "</div>";
    $response .= "</div>";
    $response .= "<br>";
    $response .= "<h5><small>Spesifikasi</small></h5>";
    $response .= "<div class='container'>";
    $response .= "<div class='row'>";
    $response .= "<div class='col-4'>";
    $response .= "<h6> Processor: </h6>";
    $response .= "</div>";
    $response .= "<div id='processor' class='col-8 d-flex justify-content-end' style='margin-right: -20px;'>";
    $response .= "$processor ";
    $response .= "</div>";
    $response .= "</div>";
    $response .= "<div class='row'>";
    $response .= "<div class='col-4'>";
    $response .= "<h6>Tebal :</h6>";
    $response .= "</div>";
    $response .= "<div id='tebal' class='col-8 d-flex justify-content-end' style='margin-right: -20px;'>";
    $response .= " $tebal ";

    $response .= "</div>";
    $response .= "</div>";
    $response .= "<div class='row'>";
    $response .= "<div class='col-4'>";
    $response .= "<h6>Warna:</h6>";
    $response .= "</div>";
    $response .= "<div id='warna' class='col-8 d-flex justify-content-end' style='margin-right: -20px;'>";
    $response .= " $warna ";

    $response .= "</div>";
    $response .= "</div>";
    $response .= "</div>";
    $response .= "<br>";

    $response .= "<div class='description'>";
    $response .= "<small><b>Description</b></small>";
    $response .= "<p id='productDeskripsi'>"  .$deskripsiP . "</p>";
    $response .= "</div>";
    $response .= "</div>";
    $response .= "</div>";
    $response .= "<div class='modal-footer'>";
    $response .= "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
}


$response .= "</div>";

echo $response;
exit;
