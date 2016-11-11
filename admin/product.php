<?php
  include("header.php");
  include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $pid = $_POST['productid'];
  $bid = $_POST['brand'];
  $sid = $_POST['subcat'];
  $qnty = $_POST['quantity'];
  $prc = $_POST['price'];
  $rprc = $_POST['reducedprice'];
  $desc = $_POST['description'];


$file=$_FILES['productimage']['tmp_name'];
if(!isset($file))
echo "Please select an image.";
else{

$image=addslashes(file_get_contents($_FILES['productimage']['tmp_name']));

$image_name=addslashes($_FILES['productimage']['name']);
$image_size=getimagesize($_FILES['productimage']['tmp_name']);

if($image_size==FALSE)
echo "That's not an image.";
else{


if(mysql_query("INSERT INTO `products`(`Product_ID`, `brand_ID`, `SubCategory_ID`, `Quantity`, `price`, `reduced_price`, `Description`, `Featured`, `Image`) VALUES ( $pid , (select brand_ID from brand where brand_Title='$bid' ) ,(select SubCategory_ID from subcategory where SubCategory_Title='$sid'),$qnty,$prc,$rprc,'$desc','','$image_name' ) "))
{

echo "value inserted successfully";

$lasiid=mysql_insert_id(); //$lasiid is corresponding row's primary key

move_uploaded_file($_FILES['productimage']['tmp_name'],'productUpload/'.$image_name);

//header("Location:http://localhost/bikri/product_retrieve.php");

}

else{

echo "couldn't insert value";
die(mysql_error());

}

}

}

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Panel</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Admin Panel</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
            
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $_SESSION['login_user']; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->




						
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="category.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Add category</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="Category.php">Add Category</a></li>
			</ul>

			



	



	<!--Main Content-->

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add Products</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Id</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text"  name="productid">
								</div>
							  </div>


							<!--Brand dropdown-->
							  <div class="control-group">
								<label class="control-label" for="selectError3">Brand</label>
								<div class="controls">
								  <select id="selectError3" name="brand">
								  <?php
								  
    								$sql="select brand_Title from brand";
    								$result=mysql_query($sql);



									    while($db_field=mysql_fetch_assoc($result))
									    {

									        print "<option >".$db_field['brand_Title']."</option>";

									    }
									    	
									    ?>
								  </select>
								  
								</div>
							  </div>

							  <!--End of brand Dropdown-->

							  <!--Subcategory Dropdown-->
							  <div class="control-group">
								<label class="control-label" for="selectError3">Subcategory</label>
								<div class="controls">
								  <select id="selectError3" name="subcat">
								  <?php
								  
    								$sql="select SubCategory_Title from subcategory";
    								$result=mysql_query($sql);



									    while($db_field=mysql_fetch_assoc($result))
									    {

									        print "<option >".$db_field['SubCategory_Title']."</option>";

									    }
									    ?>
								  </select>
								</div>
							  </div>

							  <!-- End of subcategory Dropdown-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Quantity</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text"  name="quantity">
								</div>
							  </div>



							  <div class="control-group">
								<label class="control-label" for="focusedInput">Price</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text"  name="price">
								</div>
							  </div>


							  <div class="control-group">
								<label class="control-label" for="focusedInput">Reduced Price</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text"  name="reducedprice">
								</div>
							  </div>							  


							  <div class="control-group">
								<label class="control-label" for="focusedInput">Description</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text"  name="description">
								</div>
							  </div>


                            <div class="control-group">
							  <label class="control-label" for="fileInput">Product Photo</label>
							  <div class="controls">
								<input name="productimage" class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>   




							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

	






<!--End Of Main Content-->

			
						

			

	
			

	<!--footer-->		
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2016 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">Alauddin Al Azad</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
