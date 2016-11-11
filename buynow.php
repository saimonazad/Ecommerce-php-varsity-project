<?php
include("login.php");





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




<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}


.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
li.right {
    float:right;
}

</style>
<body>

<!-- Navbar -->



<ul class="w3-navbar w3-red w3-card-2 w3-top w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index.php" class="w3-padding-large w3-white">Online Store</a></li>
  <li class="w3-hide-small"><a href="index.php" class="w3-padding-large w3-hover-white">Home</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white">About Us</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white">Contact</a></li>
  <?php
  
  if(!isset($_SESSION['login_user'] )){ ?>
   <li class="right"><button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-padding-large w3-hover-white">Sign In</button></li>
   <?php
  }
  else
  { ?>

    <li class="right"><a href="logout.php" class="w3-padding-large w3-hover-white">Logout</a></li>
 <?php }
  ?>
  
</ul>





<!--Login Screen float-->

<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
      <div class="w3-container w3-blue">
<h2>Input Form</h2>
</div>

<form class="w3-container" action="" method="POST">

<p>
<label>Username</label>
<input class="w3-input" type="text" name="username"></p>

<p>
<label>Password</label>
<input class="w3-input" type="password" name="password"></p>

<input type="submit" class="w3-btn w3-blue" value = " Submit ">  <button class="w3-btn w3-blue">Register</button>

</form>

    </div>
  </div>
</div>








<!--slideshow-->

<div class="w3-content w3-display-container" style="max-width:100%">
  <img class="mySlides" src="assets/slider1.jpg" style="width:100%">
  <img class="mySlides" src="assets/slider2.jpg" style="width:100%">
  <img class="mySlides" src="assets/slider3.jpg" style="width:100%">
  <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
    <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>








<!--Category nav bar-->
<ul class="w3-navbar w3-blue w3-card-2  w3-left-align w3-large">

  <li><a href="#" class="w3-padding-large w3-white">Category</a></li>
  <li class="w3-dropdown-hover ">
    <a href="#" class="w3-text-black">Tv <i class="fa fa-caret-down w3-text-red"></i></a>
    <div class="w3-dropdown-content  w3-card-7">
      <a href="ProductModel.php?subcatid=1">LED TV</a>
      <a href="ProductModel.php?subcatid=2">LCD TV</a>
      <a href="ProductModel.php?subcatid=3">SMART TV</a>
      <a href="ProductModel.php?subcatid=4">CURVED TV</a>
      <a href="ProductModel.php?subcatid=5">OLED TV</a>
      <a href="ProductModel.php?subcatid=6">4K ULTRA HD TVs</a>
    </div>
  </li>
<li class="w3-dropdown-hover ">
    <a href="#" class="w3-text-black">Computer and tablets <i class="fa fa-caret-down w3-text-red"></i></a>
    <div class="w3-dropdown-content  w3-card-7">
      <a href="ProductModel.php?subcatid=7">Desktop</a>
      <a href="ProductModel.php?subcatid=8">Laptops</a>
      <a href="ProductModel.php?subcatid=9">Monitors</a>
      <a href="ProductModel.php?subcatid=10">iPads</a>
     
    </div>
  </li>
    <li class="w3-dropdown-hover ">
    <a href="#" class="w3-text-black">Cellphones <i class="fa fa-caret-down w3-text-red"></i></a>
    <div class="w3-dropdown-content  w3-card-7">
      <a href="ProductModel.php?subcatid=12">iPHONE</a>
      
      <a href="ProductModel.php?subcatid=14">Blackbery</a>

    </div>
  </li>
  
  <li class="w3-dropdown-hover ">
    <a href="#" class="w3-text-black">Camera <i class="fa fa-caret-down w3-text-red"></i></a>
    <div class="w3-dropdown-content  w3-card-7">
      <a href="ProductModel.php?subcatid=15">Digital SLR Cameras</a>
      <a href="ProductModel.php?subcatid=16">Mirrorless Cameras</a>
      <a href="ProductModel.php?subcatid=17">Point & Shoot Cameras</a>
      
    </div>
  </li>
    <li class="w3-dropdown-hover ">
    <a href="#" class="w3-text-black">Audio Devices <i class="fa fa-caret-down w3-text-red"></i></a>
    <div class="w3-dropdown-content  w3-card-7">
      <a href="ProductModel.php?subcatid=19">Xbox One Headsets</a>
  
    </div>
  </li>


</ul>

<!--End of category navbar-->


<!--buy now form-->



<div class="container">
  <h2>Order Address</h2>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" name="name" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">City:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" name="city">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">State:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" name="state">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Zip:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" name="zip">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" name="address">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" name="phone" >
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Order</button>
      </div>
    </div>
  </form>
</div>











<!--Footer-->

<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center w3-teal">
  <h4>Follow Me</h4>
  <a class="w3-btn-floating w3-teal" href="https://www.facebook.com/saimon.azd123" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-btn-floating w3-teal w3-hide-small" href="https://www.linkedin.com/in/saimon-azad-66113b110" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>

  </div>
</footer>

<!--End Footer-->





<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

