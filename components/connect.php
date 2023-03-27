<?php
$con = mysqli_connect('localhost','root','','timezone');
if($con){
    echo "Connection Successfull";

}
else{
    die(mysqli_error($con));
}
?>