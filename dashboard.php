<?php
include_once "controller/product/productController.php";
$model = new ProductControllers();
$rs = $model->getAll();

// var_dump($rs['nama_product']);

?>

<style>
.butonE{
    position: relative; 
    right: 0; 
    bottom: auto ;
     left: 0;
     z-index: 1;
     border-radius: 21px 19px 30px 5px;
     width: 100%;
     font-size: 15px;
     opacity: 0.6;
    
}
.butonE:hover{
    opacity: 1.0;

}
.butonD{
    position: relative;
     right: 0;
    bottom: auto;
     left: 0;
    z-index: 1;
    border-radius: 19px 21px 5px 30px;
     width: 100%;
     font-size: 15px;
     opacity: 0.6;
}

.butonD:hover{
    opacity: 1.0;

}
</style>
<div class="col-md-12 grid-margin">
    <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome Aamir</h3>
            <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
        </div>
        <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <a href="index.php?halaman=product_tambah" class="btn btn-primary">Tambah Product</a>
    <br><br><br>
    <div class="container">
        <div class="row">


            <?php foreach ($rs as $rows) : ?>
                <?php 
              $rowss =  $rows['spesifikasi_product'];
              list($processor,$tebal,$warna) = explode(',',$rowss);
                // var_dump($warna);
                // var_dump($spek[0]);
                ?>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 " style="margin-bottom: 20px;">
                    <div class="card" style="border: 1px solid black;">
                        <div class="row">
                            <div class="col-6">
                                <a href="index.php?halaman=product_edit&id_edit=<?= $rows['id'] ?>" class="butonE btn btn-warning"  role="button"><b>Edit</b></a>
                           </div>
                            <div class="col-6">
                                <form method="POST" action="controller/product/product_destroy.php">
                                    <button name="proses" type="submit" value="hapus" class="butonD btn btn-danger" onclick="return confirm('Yakin di Hapus..')"  role="button"><b>Delete</b></button>
                              
                                    <input type="hidden" name="idx" value="<?= $rows['id'] ?>" /> <!-- dikirim secara sembunyi2 -->
                                </form>
                            </div>
                        </div>
                        <!-- <img class="card-img" src="" alt="Vans"> -->
                        <img class="card-img" src="<?= $rows['gambar_product']?>" alt="Vans">
                        <div class="card-img-overlay d-flex justify-content-end">
                            <a href="#" class="card-link text-danger like">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?= $rows['nama_product'] ?></h4>
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="card-subtitle mb-2 text-muted">Category: <?= $rows['kategori'] ?></h6>
                                </div>
                                <div class="col-4">
                                    <!-- <a href="" class="item_add prod_detail" data-toggle="modal" data-target="#PRODUCT_DETAILS" href="#modal">Add to cart</a></p> -->
                                    <a  class="detail-product" data-toggle="modal" data-target="#exampleModalScrollable" data-id="<?= $rows['id']; ?>"style="color:blueviolet;">Details</a>
                                </div>
                            </div>
                            <!-- <p class="card-text">
                         The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool.             
                         </p> -->
                            <div class="buy d-flex justify-content-between align-items-center">
                                <div class="price text-success">
                                    <h5 class="mt-4">Rp.<?= number_format($rows['harga_product'], 2, ',', '.'); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>


 <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="IsiModal">
                
                 <div>
                    <div class="rows pr-2 pl-2 pt-2 pb-5">
                        <center>
                            <img id="productGambar" src="<?= $rows['gambar_product']?>" style="width: 200px; height: 150px;" alt="" srcset="">
                        </center>
                    </div>
                    <div class="row">
                        <h3 id="productNama" class="d-flex justify-content-center"><?= $rows['nama_product'] ?>    </h3>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h6>Production:</h6>
                        </div>
                        <div id="productProduction" class="col-6 d-flex justify-content-end" style="margin-right: -20px;">
                        <?= $rows['production_product'] ?>    
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h6>Categories:</h6>
                        </div>
                        <div id="kategori" class="col-6 d-flex justify-content-end" style="margin-right: -20px;">
                            <?= $rows['kategori']?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h6>Harga:</h6>
                        </div>
                        <div class="col-6 d-flex justify-content-end" style="margin-right: -20px;">
                            Rp.   <?= number_format($rows['harga_product'],2,',','.') ?>    

                        </div>
                    </div>
                    <br>
                    <h5><small>Spesifikasi</small></h5>
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <h6> Processor: </h6>
                            </div>
                            <div id="processor" class="col-8 d-flex justify-content-end" style="margin-right: -20px;">
                             <?= $processor ?>    
                               
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h6>Tebal :</h6>
                            </div>
                            <div id="tebal" class="col-8 d-flex justify-content-end" style="margin-right: -20px;">
                            <?= $tebal ?>    
                            
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h6>Warna:</h6>
                            </div>
                            <div id="warna" class="col-8 d-flex justify-content-end" style="margin-right: -20px;">
                            <?= $warna ?>    
                           
                        </div>
                        </div>
                    </div>
                    <br>

                    <div class="description">
                        <small><b>Description</b></small>
                        <p id="productDeskripsi">
                        <?= $rows['deskripsi_product'] ?>    
                        </p>
                    </div>
                </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
