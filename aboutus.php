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

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <!-- header -->
    <?php
    require './components/header.php'
    ?>
    <!-- header -->
    <div class="about d-flex justify-content-center align-items-center">
        <h1 class="">About Us</h1>
    </div>
    <div class="container row my-5 mx-auto">
        <div class="col-md-6 ">
            <img src="https://www.maxim.com/wp-content/uploads/2021/10/morning-coffee-stop-omega-speedmaster-scaled.jpg"
                class="img-fluid w-75" alt="">
        </div>
        <div class="col-md-6 d-flex justify-content-center flex-column">
            <h1>
                WATCHES
                for YOU</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum natus labore ipsa voluptates eligendi
                alias esse cupiditate dolor! Est enim ab aspernatur? Suscipit error cupiditate deleniti cumque placeat
                voluptatem aut?</p>
        </div>
    </div>
    <div class=" row text-center my-5 py-5 bg-secondary text-light">
        <div class="col-md-12 mx-auto ">
            <h1 class="py-2">PLATINUM
                COLLECTIONS</h1>
            <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet
                consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button type="button" class="btn btn-outline-light">Buy Now</button>
        </div>
    </div>
    <!-- Swiper -->
    <div class="">
        <div class=" row text-center mt-5 pt-5">

            <h1 class="py-2">WHAT OUR CLIENTS SAY</h1>
            <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet
                consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        </div>
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper">
                <div class="swiper-slide my-5">
                    <div class="slid">
                        <p class="lh-lg">
                            The ring was even prettier looking than the web image when I received it, and I was
                            surprised how incredible it was.
                        </p>
                        <div class="customer d-flex mt-2">
                            <img src="https://www.maxim.com/wp-content/uploads/2021/10/morning-coffee-stop-omega-speedmaster-scaled.jpg"
                                alt="">
                            <div class="customer_content mt-3 ms-3">
                                <h4>Lorem ipsum </h4>
                                <p>lorem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide my-5">
                    <div class="slid">
                        <p class="lh-lg">
                            The ring was even prettier looking than the web image when I received it, and I was
                            surprised how incredible it was.
                        </p>
                        <div class="customer d-flex mt-2">
                            <img src="https://www.maxim.com/wp-content/uploads/2021/10/morning-coffee-stop-omega-speedmaster-scaled.jpg"
                                alt="">
                            <div class="customer_content mt-3 ms-3">
                                <h4>Lorem ipsum </h4>
                                <p>lorem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide my-5">
                    <div class="slid">
                        <p class="lh-lg">
                            The ring was even prettier looking than the web image when I received it, and I was
                            surprised how incredible it was.
                        </p>
                        <div class="customer d-flex mt-2">
                            <img src="https://www.maxim.com/wp-content/uploads/2021/10/morning-coffee-stop-omega-speedmaster-scaled.jpg"
                                alt="">
                            <div class="customer_content mt-3 ms-3">
                                <h4>Lorem ipsum </h4>
                                <p>lorem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide my-5">
                    <div class="slid">
                        <p class="lh-lg">
                            The ring was even prettier looking than the web image when I received it, and I was
                            surprised how incredible it was.
                        </p>
                        <div class="customer d-flex mt-2">
                            <img src="https://www.maxim.com/wp-content/uploads/2021/10/morning-coffee-stop-omega-speedmaster-scaled.jpg"
                                alt="">
                            <div class="customer_content mt-3 ms-3">
                                <h4>Lorem ipsum </h4>
                                <p>lorem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide my-5">
                    <div class="slid">
                        <p class="lh-lg">
                            The ring was even prettier looking than the web image when I received it, and I was
                            surprised how incredible it was.
                        </p>
                        <div class="customer d-flex mt-2">
                            <img src="https://www.maxim.com/wp-content/uploads/2021/10/morning-coffee-stop-omega-speedmaster-scaled.jpg"
                                alt="">
                            <div class="customer_content mt-3 ms-3">
                                <h4>Lorem ipsum </h4>
                                <p>lorem</p>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <?php
    require "./components/footer.php";
    ?>













    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        centeredSlides: true,
        spaceBetween: 40,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>