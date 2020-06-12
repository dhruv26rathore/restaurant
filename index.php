<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    	<title>Restaurant Management</title>
    	<link rel="icon" href="images/logo.png">

    	<!-- contact form links starts here -->
    	<!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

	<!--form header codes start -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    	<!--  contact form links end's here  -->
    	<!-- table css -->
<style type="text/css">
    	table{
  margin-top: 20px;
  border-collapse: collapse;
  width: 100%;
  color:#d96459;
  font-family: monospace;
  font-size: 25px;
  text-align: left;
}
th{
  background-color: #d96459;
  color: white;
}
</style>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
	  	<div id="Welcome">
	  		<!---Start navigation Bar -->
	    	<nav class="navbar navbar-expand-lg navbar fixed-top  navbar-light bg-light">
		 		<a class="navbar-brand" href="#Welcome">
    				<img src="images/logo.png" width="50" height="50" class="d-inline-block" alt=""> Restaurant Recommendation
		 		</a>
		 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		 		</button>
			  	<div class="collapse navbar-collapse" id="navbarText">
			    	<ul class="navbar-nav ml-auto">
			      		<li class="nav-item">
			        		<a class="nav-link" href="#Welcome">Welcome</a>
			      		</li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Restaurant">Restaurant</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Menu">Menu</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Reservation">Reservation</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#OurLocation">Our Location</a>
					    </li>
					    <li class="nav-item">
					    	<a href="#" class="language" rel="it-IT"><img src="images/india.ico" class="flag" alt="Italiano"></a>
					    	<a href="index.html" class="language" rel="en-En"><img src="images/english.ico" class="flag" alt="English"></a>
					    </li>
				    </ul>
				</div>
			</nav>
			<!--- End Navigation Bar -->
			<!--- Start Carousel -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
				    	<img class="d-block w-100 img-fluid img-slider" src="images/slider1.jpg" alt="First slide">
				    	<div class="carousel-caption">
						    <h2>Welcome!</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="images/slider2.jpg" alt="Second slide">
				      	<div class="carousel-caption">
						    <h2>Traditional Italian Cuisine</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="images/slider3.jpg" alt="Third slide">
				      	<div class="carousel-caption">
						    <h2>Selected Products</h2>
							<p>...</p>
						</div>
				    </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
			<!--- End of Carousel -->
			<!--- Restaurant-->
		<div class="container">
		 	<div class="row" id="Restaurant">
	    		<div class="col navMenu">
	     		 	<h2 class="text-center" >~ Restaurant ~</h2>
	    		</div>
  			</div>
  			<div class="row bg-light" >
  				<div class="row d-flex justify-content-center" style="width:90vw">
	<form action="index.php" method="POST">
		<div class="form-group">
<label>Name</label>
	<input type="text" class="form-control" name="name" placeholder="Name">
</div>
<div class="form-group">
<label>Address</label>
	<input class="form-control" type="text" name="address" placeholder="Address">
</div>
<div class="form-group">
<label for="food category">Food Category</label>
  <select class="custom-select" style="width:200px;" name="foodcategory">
    <option>Select category:</option>
    <option>Italian</option>
    <option>Chinese</option>
    <option>Indian</option>
  </select>
  <label for="foodquality">Food Quality</label>
 <select class="custom-select" style="width:200px;" name="foodquality">
    <option>Food Quality:</option>
    <option>Good</option> 
    <option>Very Good</option>
    <option>Excellent</option>
  </select> 
</div>
<div class="form-group">
  <label for="minprice">Min Price</label>
  <input class="form-control" placeholder="Enter Min Price" name="minprice">
</div>
<div class="form-group">
  <label for="maxprice">Max Price</label>
  <input class="form-control" placeholder="Enter Min Price" name="maxprice">
  </div>
  <div class="form-group">
  <button class="btn btn-success" name="submit">Submit</button>
</div>
</form>
</div>
 </div>
 <div>
 	<table class="table table-bordered">
	<?php
include("config/db.php");
if(isset($_POST['submit'])){
$name = $_POST['name'];
$address = $_POST['address'];
$foodcategory = $_POST['foodcategory'];
$foodquality = $_POST['foodquality'];
$minprice = $_POST['minprice'];
$maxprice = $_POST['maxprice'];
if ($name !=""|| $address !=""|| $foodcategory !=""|| $minprice !=""|| $foodquality !="") {
$query = "SELECT * FROM res WHERE name = '$name' OR address = '$address' OR foodcategory = '$foodcategory' OR foodquality = '$foodquality' OR minprice BETWEEN '$minprice' AND  '$maxprice'";
  $data = mysqli_query($conn, $query) or die('error');
  if(mysqli_num_rows($data) > 0){
  	?>
  	<thead><tr>
    <!-- <th></th> -->
    <!-- <th>ID</th> -->
    <th scope="cols">Name</th>
    <th scope="cols">Address</th>
    <th scope="cols">Food category</th>
    <th scope="cols">Food Quality</th>
    <!-- <th>Min Price</th> -->
    <!-- <th>Max Price</th> -->
    
</tr></thead><tbody>
	<?php
while($row = mysqli_fetch_assoc($data)){
// $id = $row['id'];
$name = $row['name'];
$address = $row['address'];
$foodcategory = $row['foodcategory'];
$foodquality = $row['foodquality'];
$id=$row['id'];
$name = $row['name'];
$address = $row['address'];
$foodcategory = $row['foodcategory'];
$foodquality = $row['foodquality'];
// $minprice = $row['minprice'];
// $maxprice = $row['maxprice'];
?>
<tr>
  <!-- <td><?php  $id;?>echo</td> -->
  <td><?php echo $name;?></td>
  <td><?php echo $address;?></td>
  <td><?php echo $foodcategory;?></td>
  <td><?php echo $foodquality;?></td>
  <!-- <td><?php $minprice;?>echo</td> -->
  <!-- <td><?php  $maxprice;?>echo</td> -->
</tr>
<?php
}
  }
  else{
?>
<tr>
  <td>Records not found</td>
  </tr>
<?php
  }
}
	}

	?>

</tbody>
</table>
 </div>
  			</div>	
  			</div>

  			<!--- End of Restaurant -->
  			<!--- Start of Menu-->
			<div class="row" id="Menu">
				<div class="col navMenu">
	     		 	<h2 class="text-center" >~ Menu ~</h2>
				</div>
			</div>
			<div class="row bg-light">
				<!-- contact form starts here -->
				<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="feedbackcode.php" method="post">
				<span class="contact100-form-title">
					Send Us A Feedback
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="firstname" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="lastname" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phonenumber" placeholder="Eg. +1 800 000000">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Feedback *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write a Feedback here"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Feedback
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-02.jpg');">
				<div class="flex-w size1 p-b-47">
					
		</div>
	</div>



	<div id="dropDownSelect1"></div>
				<!-- contact form ends here -->
			</div>
			<!--- End of Menu -->
			<!--- Start of Reservation-->
			<div class="row" id="Reservation">
				<div class="col navMenu">
	     		 	<h2 class="text-center">~ Reservation ~</h2>
				</div>
			</div>
			<div class="row">
				<div class=" col-lg-12 reserve-container" data-aos="fade-up">
					<img class="img-fluid image-reserve" src="images/reserve.jpg">
					<div class="reserve-text col-lg-12 ">
						<h1 class="text-center">Timetables</h1>
						<div class="row">
							<div class="col-6">
							   	<h2 class="text-center">Lunch</h2>
							    <h5 class="text-center">12:00 - 15:00</h5>
							</div>
							<div class="col-6">
							    <h2 class="text-center">Dinner</h2>
							    <h5 class="text-center">19:30 - 23:30</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row bg-light">
				<div class="col">
					<form>
						<div class="form-row">
						  	<div class="form-group col-6">
						  		<h3>Reserve</h3>
						  		<label for="inputDate"> Date</label>
						  		<input type="date" class="form-control" id="inputDate" placeholder="Data gg/mm/aaaa">
						  	</div>
						  	<div class="form-group col-6">
						  		<h3>Details</h3>
						  		<label for="inputName"> Name</label>
						  		<input type="text" class="form-control" id="inputName" placeholder="Name">
						  	</div>
						  	<div class="form-group col-6">
						  		<label for="inputTime"> Timetables</label>
						  		<input type="time" class="form-control" id="inputTime" placeholder="Timetables">
						  	</div>
						  	<div class="form-group col-6">
						  		<label for="inputEmail"> Email</label>
						  		<input type="email" class="form-control" id="inputEmail" placeholder="Email">
						  	</div>
						  	<div class="form-group col-6">
						  		<label for="inputNumber"> Number of Guests</label>
						  		<input type="number" class="form-control" id="inputNumber" placeholder="Number of Guests">
						  	</div>
						  	<div class="form-group col-6">
						  		<label for="inputCel"> Phone</label>
						  		<input type="tel" class="form-control" id="inputCel" placeholder="Phone">
						  	</div>
  							<div class="form-group col-12">
  								<label for="inputComment"> Further requests</label>
								<textarea class="form-control" rows="4" id="inputComment" placeholder="Further requests"></textarea>
							</div>
					 	</div>
						<div class="row">
					  		<div class="col-md-4 col-md-offset-4">
					  			<button type="submit" class="btn btn-secondary btn-block">Reserve</button>
					  		</div>
					  	</div>
					</form>
				</div>
			</div>
			<!--- End of Reserve -->
			<!--- Start of Our Location -->
			<div class="row" id="OurLocation">
				<div class="col navMenu">
					<h2 class="text-center">~ Our Location ~</h2>
				</div>
			</div>
			<div class="row">
				<div id="map" class="col-md-9 map"></div>
				<div class="col-md-3">
					<h3>Address:</h3>
					<p>Viale Enrico Fermi, 20159 Milan, Mailand (Lombardia) </p>
					<h3>Email:</h3>
					<p>mail@example.com</p>
				</div>
			</div>
			<!--- End of Our Location -->
			<div class="row footer bg-light">
				<div class="col">
					<p class="text-center">Follow us: <a class="social-icon" href="https://www.facebook.com/rubiktechnologiesShpk/"><i class="fab fa-facebook"></i></a> <a class="social-icon" href="https://www.instagram.com/rubiktechnologies/"><i class="fab fa-instagram"></i></a></p>
				</div>
				<div class="col">
					<p class="text-center">Copyright &copy; 2018</p>
				</div>
				<div class="col">
					<p class="text-center">Powered by: <a href="https://rubik-technologies.com/">Rubik Technologies</a></p>
				</div>
			</div>
		</div>
		<footer class="container">
			<div class= "row only-mobile">
				<div class="col-6">
					<a class="btn btn-primary btn-block text-center" href="tel:++390000000"><i class="fa fa-phone" aria-hidden="true"></i> Call</a>
				</div>
				<div class="col-6">
					<a class="btn btn-success btn-block text-center" href="https://api.whatsapp.com/send?phone=+390000000"><i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
				</div>
			</div>
		</footer>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script type="text/javascript" src="js/map.js"></script>
		<script type="text/javascript" src="js/smooth-scroll.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
		<script type="text/javascript" src="js/image-effect.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFZjOV0KA68G2YAh-rn7I3qKqCQEh_Ja0&callback=myMap">
	    </script>
	    <!-- contact form scripts starts here -->
	    <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- contact form scripts end's here -->
  	</body>
</html>
