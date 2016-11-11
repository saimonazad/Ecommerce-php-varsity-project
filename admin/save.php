<?php
include("config.php");
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST['name'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $userid=$_SESSION['login_user'];


  $sql="INSERT INTO `orders` ( `User_ID`, `Quantity`, `Product_ID`, `Name`, `City`, `State`, `Zip`, `Address`, `Phone`) VALUES ( (select User_ID from users where UserName='$userid'), '1', '1', '$name', '$city', '$state', '$zip', '$address', '$phone')";

  mysql_query($sql) or die(mysql_error());





}

?>