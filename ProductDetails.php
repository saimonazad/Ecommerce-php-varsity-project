<?php
include("login.php");
?>





<!DOCTYPE html>
<html lang="en">
  <head>
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
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
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

<?php

include("config.php");


$id=$_REQUEST['productid'];
  

  
   $sql="select * from products where Product_ID='$id' ";
   $sel=mysql_query($sql) or die(mysql_error()); ?>


   <form method='post'><ul class="w3-navbar w3-card-2  w3-left-align">
   <?php
   
    while($arr=mysql_fetch_assoc($sel))
   {
   $i=$arr['Product_ID'];

   ?>






<!--product Details-->
      
      
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="/pro/admin/productUpload/<?php echo $arr['Image'] ?> " class="simpleLens-lens-image"><img src="/pro/admin/productUpload/<?php echo $arr['Image'] ?>" class="simpleLens-big-image"></a></div>
                      </div>



                    </div>
                  </div>
                </div>
                <br>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3><?php echo $arr['Product_Name'] ?></h3>
                    <br>

                    <div class="aa-price-block">
                      <span class="aa-product-view-price"><?php echo $arr['price'] ; ?></span>
                      <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                    </div>

                    <br>
                    <br>


                    <div class="aa-prod-quantity">
                      <form action="" method="post">
                        <select id="" name="quantity">
                          <option selected="1" value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      

                    </div>
                    <br>
                    <br>

                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="#">Buy Now</a>
                      <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
                      <a class="aa-add-to-cart-btn" href="#">Compare</a>
                    </div>
                    </form>



                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li class="active"><a href="#description" data-toggle="tab" aria-expanded="true">Description</a></li>
                <li class=""><a href="#review" data-toggle="tab" aria-expanded="false">Reviews</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="description">
                  <p><?php echo $arr['Featured'] ?></p>
                </div>
                <div class="tab-pane fade" id="review">
                 <div class="aa-product-review-area">
                   <h4>2 Reviews for T-Shirt</h4> 
                   <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                   </ul>
                   <h4>Add a review</h4>
                   <div class="aa-your-rating">
                     <p>Your Rating</p>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                   </div>
                   <!-- review form -->
                   <form action="" class="aa-review-form">
                      <div class="form-group">
                        <label for="message">Your Review</label>
                        <textarea class="form-control" rows="3" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>  
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                      </div>

                      <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                   </form>
                 </div>
                </div>            
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  
      
      
      
      <!--end of product details-->
      
     <?php 
     }

     ?> 
      
      
      



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
    
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>