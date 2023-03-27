<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./css/home.css' />";

   //include a javascript file
   echo "<script type='text/javascript' src='path-to-javascript-file'></script>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- header -->
    <?php
    require './components/header.php'
    ?>
    <!-- header -->
    <!-- Banner -->
    <div class="row banner">
        <div class="content">
            <div class="text">
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet at numquam repellat quam rerum quasi,
                    obcaecati quod commodi natus dolores exercitationem blanditiis.</p>
                <div class="col-md-12">
                    <button type="button" class="btn btn-outline-primary p-2">Shop Now</button>
                </div>
            </div>
            <div class="banner">
                <img src="./img/levant-galaxy-watch5-40mm-sm-r900nzsamea-thumb-533191088.avif" alt="">
            </div>
        </div>
    </div>
    <!-- Banner -->
    <!-- new arrivals -->
    <div class="new-arrival container my-5 ">
        <label for="">
            <h1>New Arrival</h1>
        </label>
        <div class="row mt-4 mx-auto">
            <div class="col-md-4 mx-auto">
                <img src="https://staticimg.titan.co.in/Titan/Catalog/1810NP01_1.jpg?impolicy=pqmed&imwidth=640 " class="img-fluid  w-100"
                    alt="">
                <h2 class="mt-3 ">Lorem ipsum dolor sit amet </h2>
                <p class="text-center cost h5">$ 120.00</p>
            </div>
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/61gTfyg0C4L._AC_UF1000,1000_QL80_.jpg " class="img-fluid w-100"
                    alt="">
                <h2 class="mt-3 ">Lorem ipsum dolor sit amet </h2>
                <p class="text-center cost h5">$ 120.00</p>
            </div>
            <div class="col-md-4">
                <img src="https://cdn.shopify.com/s/files/1/0213/7833/4784/files/760x760_b4f46b55-dc45-489c-982e-14e0334d1754_1200x.jpg?v=1672902638" class="img-fluid w-100"
                    alt="">
                <h2 class="mt-3 ">Lorem ipsum dolor sit amet </h2>
                <p class="text-center cost h5">$ 120.00</p>
            </div>

        </div>
    </div>

    <div class="row gy-3 mx-auto">
        <div class="col-md-5 col-sm-6">
            <img src="https://media.gq.com/photos/5dfd1ce3930df2000882824a/16:9/w_1280,c_limit/Watches.jpg"  class="img-fluid h-100"
                alt="">
        </div>
        <div class="col-md-4 col-sm-6">
            <img src="https://static.wixstatic.com/media/0107e1_e5c776fc7340475ebe31a40c7f3ce79b~mv2.jpg/v1/fill/w_2500,h_1667,al_c/0107e1_e5c776fc7340475ebe31a40c7f3ce79b~mv2.jpg"  class="img-fluid h-100"
                alt="">
        </div>
        <div class="col-md-3 ">
            <div class="row gy-3">
                <div class="col-md-12 col-sm-6">
                    <img src="https://cdn.anscommerce.com/catalog/brandstore/johnson/17_7_20/Sale.jpg" class="img-fluid"
                        alt="">
                </div>
                <div class="col-md-12 col-sm-6">
                    <img src="https://imageengine.victorinox.com/medias/?context=bWFzdGVyfHRpbWVwaWVjZXN8MTA4NjYyfGltYWdlL2pwZWd8aGQ2L2g2OS8xMzcxMjAxNjE3OTIzMC93YXQtcGlsb3QtMjQxOTk4LW5hdmNhcnBldC02NDB4MzUwLmpwZ3w2NzY3ODJiNDE1YWE4NGFjNjkwMzI1OWU5YTAzY2ZjMzAxMDlmNjA4YTc3OTU0M2IwZDY3NzBlODU3OGNmMTUw"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- new arrivals -->
    <!-- popular items -->
    <div class="popular-item container my-5">
        <div class="heading text-center mb-5">
            <h2>Popular Items</h2>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, sequi.</p>
        </div>
        <div class="items ">
            <div class="row gy-4 gx-5">
                <div class="col-md-4">
                    <img src="https://cdn.anscommerce.com/catalog/brandstore/johnson/17_7_20/Sale.jpg" class="img-fluid"
                        alt="">

                    <button type="button" class="btn btn-outline-primary container-fluid">Primary</button>
                    <h2>Thermo Ball Etip Gloves</h2>
                    <p class="cost">$ 45,743
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.anscommerce.com/catalog/brandstore/johnson/17_7_20/Sale.jpg" class="img-fluid"
                        alt="">

                    <button type="button" class="btn btn-outline-primary container-fluid">Primary</button>
                    <h2>Thermo Ball Etip Gloves</h2>
                    <p class="cost">$ 45,743
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.anscommerce.com/catalog/brandstore/johnson/17_7_20/Sale.jpg" class="img-fluid"
                        alt="">

                    <button type="button" class="btn btn-outline-primary container-fluid">Primary</button>
                    <h2>Thermo Ball Etip Gloves</h2>
                    <p class="cost">$ 45,743
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.anscommerce.com/catalog/brandstore/johnson/17_7_20/Sale.jpg" class="img-fluid"
                        alt="">

                    <button type="button" class="btn btn-outline-primary container-fluid">Primary</button>
                    <h2>Thermo Ball Etip Gloves</h2>
                    <p class="cost">$ 45,743
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.anscommerce.com/catalog/brandstore/johnson/17_7_20/Sale.jpg" class="img-fluid"
                        alt="">

                    <button type="button" class="btn btn-outline-primary container-fluid">Primary</button>
                    <h2>Thermo Ball Etip Gloves</h2>
                    <p class="cost">$ 45,743
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.anscommerce.com/catalog/brandstore/johnson/17_7_20/Sale.jpg" class="img-fluid"
                        alt="">

                    <button type="button" class="btn btn-outline-primary container-fluid">Primary</button>
                    <h2>Thermo Ball Etip Gloves</h2>
                    <p class="cost">$ 45,743
                    </p>
                </div>


            </div>
            <div class="text-center">
                <button type="button" class="btn btn-outline-primary"> <a class="text-decoration-none" href="./shop.php" >View More Product</a></button>
            </div>

        </div>
    </div>
    </div>
    <!-- popular items -->
    <!-- choices -->
    <div class="container my-5 ">
        <div class="row gy-4">
            <div class="col-md-6 d-flex flex-column align-item-center justify-content-center">
                <h2>Watch of Choice</h2>
                <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                <div class="col-md-12">
                    <button type="button" class="btn btn-outline-primary">Show Watches</button>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://cdn.anscommerce.com/catalog/brandstore/johnson/17_7_20/Sale.jpg" class="img-fluid"
                    alt="">
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-md-6 d-flex flex-column align-item-center justify-content-center">
                <img src="https://cdn.anscommerce.com/catalog/brandstore/johnson/17_7_20/Sale.jpg" alt="">
            </div>
            <div class="col-md-6 d-flex flex-column align-item-center justify-content-center">
                <h2>Watch of Choice</h2>
                <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                <div class="col-md-12">
                    <button type="button" class="btn btn-outline-primary">Show Watches</button>
                </div>
            </div>
        </div>
    </div>
    <!-- choices -->
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
    <!-- footer -->
    <?php
    require "./components/footer.php";
    ?>


    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>