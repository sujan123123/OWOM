	<?php
	//session_start();
	include('BackEnd/admin/inc/config.php');
	
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>instrument rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			 <?php include("inc/nav.php");?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Instruments
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="instruments.php">instruments</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start model Area -->
			<section class="model-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Choose your desired instrument</h1>
							<p class="text-center">
								New instruments.
							</p>
						</div>
					</div>	
					
					<?php
						//get details of all cars
						$ret="SELECT * FROM instruments  ORDER BY RAND() ";
						$stmt= $mysqli->prepare($ret) ;
						$stmt->execute() ;//ok
						$res=$stmt->get_result();
						$cnt=1;
						while($row=$res->fetch_object())
						{
					?>
						<hr>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20"><?php echo $row->instrument_name;?></h4>
									<h2>Nrs_ <?php echo $row->instrument_price;?><span>/day</span></h2>
								</div>
								<p>
								</p>
								<p>

									Instrument Category     : <?php echo $row->instrument_type;?> <br>
									Intrument Reg No       : <?php echo $row->instrument_regno;?> <br>
                                    Status       : <?php if($row->instrument_status =='Hired'){echo "<span class='badge badge-danger'>Hired</span>";}else{echo"<span class='badge badge-success'>Available</span>";}?> <br>
									
								</p>
								<a class="text-uppercase primary-btn" href="view_instrument.php?instrument_id=<?php echo $row->instrument_id;?>">Instrument Details</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="BackEnd/Uploads/Instrument/<?php echo $row->exterior_img;?>" alt="">
							</div>
						</div>
						<hr>
						<?php }?>	
									
				</div>	
			</section>
			<!-- End model Area -->	
	
			<?php include("inc/footer.php");?>

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
