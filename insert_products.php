<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./css/home.css' />";

   //include a javascript file
   echo "<script type='text/javascript' src='path-to-javascript-file'></script>";

   include('./components/connect.php');



   if(isset($_POST['insert_product'])){
    $product_title = $_POST['product_title'];
    $product_desc = $_POST['product_desc'];
    $product_keyword = $_POST['product_keyword'];
    $product_price = $_POST['product_price'];
    
    $product_image1 = $_FILES['product_image1']['name'];
    // $product_image2 = $_FILES['product_image2']['name'];
    // $product_image3 = $_FILES['product_image3']['name'];
    
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    // $temp_image2 = $_FILES['product_image2']['tmp_name'];
    // $temp_image3 = $_FILES['product_image3']['tmp_name'];

    if($product_title=='' or $product_desc=='' or $product_keyword=='' or $product_price=='' or $product_image1=='' ){
        echo "<script>alert ('Fill all the Fileds')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_image/$product_image1");
        // move_uploaded_file($temp_image2,"./product_image/$product_image2");
        // move_uploaded_file($temp_image3,"./product_image/$product_image3");


        $insert_product="insert into `products` (product_title,product_desc,product_keywords,product_image1,price) values ('$product_title','$product_desc',' $product_keyword','$product_image1','$product_price')";

        $result_query = mysqli_query($con,$insert_product);
        if($result_query){
            echo "<script>alert('Successfull')</script>";
        }
    }
}
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
    <?php
    require './components/header.php'
    ?>
    <div class=" insert-form">
        <h2 class="mb-3s">Insert Products</h2>
        <form action="" method="post" enctype="multipart/form-data" class="mx-auto">
            <table class="">
                <tr class="d-flex flex-column mb-3 ">
                    <td><label for="">Product Title</label></td>
                    <td><input type="text" class="form-control" name="product_title" id="product_title"
                            autocomplete="off" required="required"></td>
                </tr>
                <tr class="d-flex flex-column mb-3">
                    <td><label for="">Product Description</label></td>
                    <td><input type="text" class="form-control" name="product_desc" id="product_desc" autocomplete="off"
                            required="required"></td>
                </tr>
                <tr class="d-flex flex-column mb-3">
                    <td><label for="">Product Keyword</label></td>
                    <td><input type="text" class="form-control" name="product_keyword" id="product_keyword"
                            autocomplete="off" required="required"></td>
                </tr>
                <tr class="d-flex flex-column mb-3">
                    <td><label for="">Product Image1</label></td>
                    <td> <input type="file" class="form-control" name="product_image1" id="product_image1"
                            autocomplete="off" required="required"></td>
                </tr>
                <!-- <tr class="d-flex flex-column mb-3">
                    <td><label for="">Product Image2</label></td>
                    <td> <input type="file" class="form-control" name="product_image2" id="product_image2"
                            autocomplete="off" required="required"></td>
                </tr>
                <tr class="d-flex flex-column mb-3">
                    <td><label for="">Product Image3</label></td>
                    <td> <input type="file" class="form-control" name="product_image3" id="product_image3"
                            autocomplete="off" required="required"></td>
                </tr> -->
                <tr class="d-flex flex-column mb-3">
                    <td><label for="">Product Price</label></td>
                    <td><input type="text" class="form-control" name="product_price" id="product_price"
                            placeholder="Enter Product Price" autocomplete="off" required="required"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-outline-secondary form-control"
                            name="insert_product">Inserts</button></td>
                </tr>
            </table>
        </form>

        <?php
    require "./components/footer.php";
    ?>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>