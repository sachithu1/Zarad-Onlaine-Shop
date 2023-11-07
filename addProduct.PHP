<?php

session_start();



if (isset($_SESSION["u"])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product new| zarad</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="icon" href="resourses/zarad.svg">
    <link rel="stylesheet" href="adproduct.css" />
</head>

<body>

    <!--HEDDRE-DIV-->

    <section id="header">
        <a href="home.php"><img src="resourses/img/logo.png.png" class="logo" alt=""></a>




        <div>
            <ul id="navbar" class="   ">
                <li class="  d-md-block d-none"><a href="home.php">Home</a></li>
                <!-- <li><a href="shop.php">Shop</a></li> -->
                <li class="  d-md-block  d-none"><a class="active"  href="addProduct.php">Add Product</a></li>
                <li class="  d-md-block  d-none"> <a href="watchlist.php">Watchlist</a></li>
                <li class="  d-md-block  d-none"> <a href="advancedSearch.php">Advanced</a></li>
                <li class="  d-md-block  d-none"><a href="about.php">About</a></li>
                
                <li class=" d-lg-block d-none"><a href="cart.php"><img style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Shopping Bag.png" alt=""></></a></li>
                <li class=" d-lg-block d-none"><a href="userProfile.php"><img style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Male User.png" alt=""></></a></li>
                <li class=" d-lg-block d-none"> <a href="index.php#"><img  style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Logout.png" alt=""></></a></li>
               
                
               

                <div class="dropdown d-xxl-none d-xl-none d-lg-none d-md-none d-sm-inline-block" >
  <!-- <button class=" " type="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
  <i data-bs-toggle="dropdown" class="bi bi-list " style="font-size: 30px;color: #1E1E1E;font-weight: 500;"></i>
  </button>
  <ul class="dropdown-menu " style="width:600px;">
    <li><button class="dropdown-item" type="button"><a href="home.php"><img  style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/img.svg/Home.png" alt=""></></a></button></li>
    <li><button class="dropdown-item" type="button"><a href="cart.php"><img style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Shopping Bag.png" alt=""></></a></button></li>
    <li><button class="dropdown-item" type="button"><a href="userProfile.php"><img style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Male User.png" alt=""></></a></button></li>
    <li><button class="dropdown-item" type="button" ><a href="addProduct.php" >Add Product</button></a></li>
    <li><button class="dropdown-item" type="button"><a href="watchlist.php" >Watchlist</button></a></li>
    <li><button class="dropdown-item" type="button"><a href="advancedSearch.php" >Advanced</button></a></li>
    <li><button class="dropdown-item" type="button"><a href="about.php" >About</button></a></li>
    <li><button class="dropdown-item" type="button"><a href="index.php#"><img  style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Logout.png" alt=""></></a></button></li>
   
  </ul>
</div>
                

                
            </ul>
        </div>

        <!-- <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div> -->

    </section>


    <!--HEDDRE-DIV-->




    <div class="main-div">


       

            <div class="main-Fh-div ">


                <div class="m1">
                    <div class="col-12">
                        <label class="add-product-div" >
                            Add new product
                        </label>
                    </div>
                    <div class="row m3">
                        <div class="img-add-div">
                            <div class="offset-lg-3 col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-4 border border-primary rounded">
                                        <img src="resourses/Add Image.svg" class="img-fluid" style="width: 202px;height: 186px;" id="i0" />
                                    </div>
                                    <div class="col-4 border border-primary rounded">
                                        <img src="resourses/Add Image.svg" class="img-fluid" style="width: 202px;height: 186px;" id="i1" />
                                    </div>
                                    <div class="col-4 border border-primary rounded">
                                        <img src="resourses/Add Image.svg" class="img-fluid" style="width: 202px;height: 186px;" id="i2" />
                                    </div>
                                </div>
                            </div>
                            <div class="offset-lg-3 col-12 col-lg-6 d-grid mt-3">
                                <input type="file" class="d-none" id="imageuploader" multiple />
                                <label for="imageuploader" class="col-12 btn btn-primary" onclick="changeProductImage();">Upload
                                    Images</label>
                            </div>
                        </div>

                    </div>


                    <div class="form-div-1 ">

                        <div class="row" style="margin-left: 44px;">
                            <label class="formHading ">SelectListning</label>
                            <div class="row">



                                <div class="col-12">

                                    <select style="width: 361px;height: 56px;background-color: rgb(255, 255, 255);margin-top: 18px;" class="form-select text-center">
                                        <option value="0">Select Listning</option>
                                        <option value="0">In Stok</option>
                                        <option value="0">Out Stok</option>

                                    </select>


                                </div>

                            </div>




                            <div class="formHading ">
                                Select Product Condition</div>
                            <div class="dropdown-div" style="width: 361px;height: 56px;flex-shrink: 0;background-color: rgb(255, 255, 255);margin-top: 18px;">
                                <div class="col-12  ">
                                    <div class="row">

                                        <div class="col-12" style="margin-top: 20px;">
                                            <div class="form-check form-check-inline mx-5">
                                                <input class="form-check-input" type="radio" id="b" name="c" checked />
                                                <label class="form-check-label fw-bold" for="b">Brandnew</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="u" name="c" />
                                                <label class="form-check-label fw-bold" for="u">Used</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <label class="formHading1 " style="margin-left: 150px">ApprovedPayment Methods</label>


                        <div class="col-6">
                            <div class="row">

                                <div class="col-12">
                                    <label class="row pamient-img-div"  >
                                        <div class="" style="margin-left: 200px;"></div>
                                        <div class="col-2 pm pm2"><img  src="resourses/payment-method-images/american_express_img.png" alt=""></div>
                                        <div class="col-2 pm pm3"><img src="resourses/payment-method-images/mastercard_img.png" alt=""></div>
                                        <div class="col-2 pm pm4"><img src="resourses/payment-method-images/visa_img.png" alt=""></div>
                                        <div class="col-2 pm pm5"><img src="resourses/payment-method-images/paypal_img.png" alt=""></div>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            

            <div class="main-Hh-div ">

                <div class="main-HHH-div  ">
                    <label class="" style="color: #000;
                font-family: Poppins;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                ">Introduction</label>

                    <div class="int-fom-fill">


                        <div class="col-12" style="margin-top: 48px;">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label fw-bold" style="color: rgba(0, 0, 0, 0.70);font-family: Poppins;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">
                                        Product Title
                                    </label>
                                </div>
                                <div class="" style="width: 669px;height: 44px;margin-top: 12px;">
                                    <input type="text" class="form-control" id="title" />
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label fw-bold" style="color: rgba(0, 0, 0, 0.70);
                                font-family: Poppins;
                                font-size: 16px;
                                font-style: normal;
                                font-weight: 600;
                                line-height: normal;">Product Description</label>
                                </div>
                                <div class="col-12">
                                    <textarea cols="30" rows="5" class="form-control" id="desc"></textarea>
                                </div>
                            </div>
                        </div>



                        <div class="row" style="display: flex; margin-top:12px;">

                            <div class="col-12 col-lg-4 border-end border-success">
                                <div class="row">

                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="color: rgba(0, 0, 0, 0.70);font-family: Poppins;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Select Product Category</label>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select text-center" id="category" onchange="loadBrands();">
                                            <option value="0">Select Category</option>
                                            <?php

                                            require "connection.php";

                                            $category_rs = Database::search("SELECT * FROM `category`");
                                            $category_num = $category_rs->num_rows;

                                            for ($x = 0; $x < $category_num; $x++) {
                                                $category_data = $category_rs->fetch_assoc();

                                            ?>

                                                <option value="<?php echo $category_data["cat_id"]; ?>"><?php echo $category_data["cat_name"]; ?></option>

                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-4 border-end border-success">
                                <div class="row">

                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="color: rgba(0, 0, 0, 0.70);font-family: Poppins;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Select Product Brand</label>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select text-center" id="brand">
                                            <option value="0">Select Brand</option>
                                            <?php

                                            $brand_rs = Database::search("SELECT * FROM `brand`");
                                            $brand_num = $brand_rs->num_rows;

                                            for ($x = 0; $x < $brand_num; $x++) {
                                                $brand_data = $brand_rs->fetch_assoc();

                                            ?>

                                                <option value="<?php echo $brand_data["brand_id"]; ?>"><?php echo $brand_data["brand_name"]; ?></option>

                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-4 border-end border-success">
                                <div class="row">

                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="color: rgba(0, 0, 0, 0.70);font-family: Poppins;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Select Product Model</label>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select text-center" id="model">
                                            <option value="0">Select Model</option>
                                            <?php

                                            $model_rs = Database::search("SELECT * FROM `model`");
                                            $model_num = $model_rs->num_rows;

                                            for ($x = 0; $x < $model_num; $x++) {
                                                $model_data = $model_rs->fetch_assoc();

                                            ?>

                                                <option value="<?php echo $model_data["model_id"]; ?>"><?php echo $model_data["model_name"]; ?></option>

                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>

                                </div>



                            </div>
                        </div>





                        <div class="col-12" style="margin-top: 12px;">
                            <div class="row">



                                <div class="col-12 col-lg-4 border-end border-success">
                                    <div class="row">

                                        <div class="col-12">
                                            <label class="form-label fw-bold" style="color: rgba(0, 0, 0, 0.70);font-family: Poppins;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Select Product Colour</label>
                                        </div>

                                        <div class="col-12">

                                            <select class="col-12 form-select" id="clr">
                                                <option value="0">Select Colour</option>
                                                <?php

                                                $clr_rs = Database::search("SELECT * FROM `color` LIMIT 1");
                                                $clr_num = $clr_rs->num_rows;

                                                for ($x = 0; $x < $clr_num; $x++) {
                                                    $clr_data = $clr_rs->fetch_assoc();
                                                ?>

                                                    <option value="<?php echo $clr_data["clr_id"]; ?>"><?php echo $clr_data["clr_name"]; ?></option>

                                                <?php
                                                }

                                                ?>
                                            </select>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label fw-bold" style="color: rgba(0, 0, 0, 0.70);font-family: Poppins;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Add Product Quantity</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="number" class="form-control" value="0" min="0" id="qty" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 ">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label fw-bold" style="color: rgba(0, 0, 0, 0.70);font-family: Poppins;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Cost Per Item</label>
                                        </div>
                                        <div class="offset-0  col-12 ">
                                            <div class="input-group mb-2 ">
                                                <span class="input-group-text">Rs.</span>
                                                <input type="text" class="form-control" id="cost" />
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label fw-bold" style="font-size: 20px;">Delivery Cost</label>
                                </div>
                                <div class="col-12 col-lg-6 border-end border-success">
                                    <div class="row">
                                        <div class="col-12  ">
                                            <label class="form-label">Delivery cost Within Colombo</label>
                                        </div>
                                        <div class="col-12 ">
                                            <div class="input-group mb-2 mt-2">
                                                <span class="input-group-text">Rs.</span>
                                                <input type="text" class="form-control" id="dwc" />
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <label class="form-label">Delivery cost out of Colombo</label>
                                        </div>
                                        <div class="col-12 ">
                                            <div class="input-group mb-2 mt-2">
                                                <span class="input-group-text">Rs.</span>
                                                <input type="text" class="form-control" id="doc" />
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>







                <div class="main-HHHH-div">

                    <div class="save-cancal-div" >

                        <div class="cancal-btn">
                            <a href="addProduct.php"><button class="cancel-h-btn">Cancel</button></a>
                        </div>


                        <div class="save">
                            <button class="save-h-btn" onclick="addProduct();">Save</button>
                        </div>

                    </div>

                </div>



            </div>
      
    </div>

    


<?php

        } else {
            header("Location:home.php");
        }

?>

<?php include "footer.php"; ?>


<script src="bootstrap.bundle.js"></script>
<script src="script.js"></script>
</body>

</html>