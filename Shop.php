<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./css/home.css' />";

   //include a javascript file
   
   include('./components/connect.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php
    require './components/header.php'
    ?>
    <!-- shop banner -->
    <div class="shop d-flex justify-content-center align-items-center">
        <h1 class="text-light">Watch Shop</h1>
    </div>
    <!-- shop banner -->
    <!-- items -->
    <div class="items  container my-5 py-3">
        <div class="row gy-4 gx-5 flex">

            <?php
        $select_query = "select * from `products` ";
        $result_query=mysqli_query($con,$select_query);
        // $row=mysqli_fetch_assoc($result_query);
        // echo $row['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id  = $row['product_id'];
            $product_title = $row['product_title'];
            $product_desc = $row['product_desc'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['price'];
            
            echo"<div class='col-md-4 shop-content'>
            <img src='./product_image/$product_image1' class='img-fluid h-75 w-100'
                alt=''>
            <h5>$product_title</h5>
            
            <p class='cost'>$product_price ₹</p>
            <button type='button' class='btn btn-outline-primary container-fluid'>Add to Cart</button>
        </div>";
         
        }
        ?>


        </div>
        <div class="text-center">
            <button type="button" class="btn btn-outline-primary" id="load-more">LOad More</button>
        </div>
        <!-- services -->
        <div class="services container my-5 py-5 bg-secondary">
            <div class="row gx-5 lh-base text-light">
                <div class="col-md-4 col-sm-4 col-4 text-center">
                    <img src="https://cdn.pixabay.com/photo/2016/04/01/08/49/box-1299001__340.png" class="" alt="">
                    <h4>Free Shiping Method</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo itaque eius tempore voluptas
                        dignissimos dolorum!</p>
                </div>
                <div class="col-md-4 col-sm-4 col-4 text-center"><img
                        src="https://img.freepik.com/free-icon/shield_318-581226.jpg" class="" alt="">
                    <h4>Free Shiping Method</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo itaque eius tempore voluptas
                        dignissimos dolorum!</p>
                </div>
                <div class="col-md-4 col-sm-4 col-4 text-center"><img
                        src="https://cdn-icons-png.flaticon.com/512/179/179407.png" class="" alt="">
                    <h4>Free Shiping Method</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo itaque eius tempore voluptas
                        dignissimos dolorum!</p>
                </div>
            </div>
        </div>
        <!-- services -->
    </div>
    <!-- items -->
    <?php
    require "./components/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>