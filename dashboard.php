
  <?php 
       include_once "controller/productController.php";
       $model = new ProductControllers();
       $rs = $model->getAll();
       
       ?>
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
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
     

            <?php foreach ($rs as $rows ):?>
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 " style="margin-bottom: 20px;" >
                <div class="card" style="border: 1px solid black;">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-6">
                        <button  class="btn btn-warning" style="border-radius: 21px 19px 30px 5px; width: 100%; font-size: 15px; "><b>Edit</b></button>
                            </div>
                            <div class="col-6">
                        <button  class="btn btn-danger" style="border-radius: 19px 21px 5px 30px; width: 100%; font-size: 15px;"><b>Delete</b></button>
                            </div>
                        </div>
                    </div>
                    <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
                    <div class="card-img-overlay d-flex justify-content-end">
                        <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?= $rows['nama_product'] ?></h4>
                        <div class="row">
                        <div class="col-8">
                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                        </div>
                        <div class="col-4">
                        <a href=""  class="card-subtitle" style="text-decoration: none; color:blueviolet;">Detail</a>
                        </div>
                        </div>
                        <!-- <p class="card-text">
                         The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool.             
                         </p> -->
                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success">
                                <h5 class="mt-4">Rp.<?= $rows['harga_product'] ?></h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
         
            
        </div>
    </div>
</div>