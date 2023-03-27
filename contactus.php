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

</head>

<body>
    <!-- header -->
    <?php
    require './components/header.php'
    ?>
    <!-- header -->
    <div class="contact d-flex justify-content-center align-items-center">
        <h1 class="">Contact Us</h1>
    </div>

    <div class="map container my-4">
        <div class="row">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58908.79646923362!2d88.83381844951853!3d22.661252544991385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff567854e8190f%3A0xf12dc8b635ba902f!2sBasirhat%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1677722132493!5m2!1sen!2sin"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="row mx-auto d-flex justify-content-center align-items-center my-5 container gy-3">
        <div class="col-md-6 p-3">
            <div class="form g-5">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 ">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6 ">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <input type="text" class="form-control mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4  d-flex flex-column  ">
            <div class="address d-flex align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" width="20" height="20" alt="">
                <div class="ms-3">
                    <h5>Buttonwood, California.</h5>
                    <p>Rosemead, CA 91770</p>
                </div>
            </div>
            <div class="phone d-flex align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/46/46854.png" width="20" height="20" alt="">
                <div class="ms-3">
                    <h5>+1 253 565 2365</h5>
                    <p>Mon to Fri 9am to 6pm</p>
                </div>
            </div>
            <div class="gmail d-flex align-items-center">
                <img src="https://pngimg.com/d/gmail_logo_PNG12.png" width="20" height="20" alt="">
                <div class="ms-3">
                    <h5>support@colorlib.com</h5>
                    <p>Send us your query anytime!</p>
                </div>
            </div>

        </div>
    </div>




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