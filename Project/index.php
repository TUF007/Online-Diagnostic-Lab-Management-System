<?php
include('Assets/Connection/Connection.php');
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Health Lab</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="Assets/Templates/Main/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="Assets/Templates/Main/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Assets/Templates/Main/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="Assets/Templates/Main/css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="Assets/Templates/Main/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="Assets/Templates/Main/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="Assets/Templates/Main/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
		.top-header {
			background:#d5d5d5 !important;
		}
	</style>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <div id="preloader">
		<div class="loader">
			<img src="Assets/Templates/Main/images/preloader.gif" alt="" />
		</div>
    </div>
    <!-- END LOADER -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img src="Assets/Templates/Main/images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#services">Services</a></li>
						<li><a class="nav-link" href="#contact">Contact</a></li>
                        <li><a class="nav-link" href="guest/userregistration.php">Sign Up</a></li>
                        <li><a class="nav-link" href="guest/login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(Assets/Templates/Main/images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>
								<p>In the Health Lab, our team of dedicated researchers and experts are constantly striving to advance medical science and improve the well-being of individuals around the world. </p>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(Assets/Templates/Main/images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>We are Expert in The Field of Health Lab</h1>
								<p>Our dedication to excellence in the Health Lab empowers us to continually develop groundbreaking solutions, paving the way for a healthier and brighter future.</p>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(Assets/Templates/Main/images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>
								<p>In the Health Lab, our team of dedicated researchers and experts are constantly striving to advance medical science and improve the well-being of individuals around the world. </p>
							</div>
						</div>
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Us</h2>
							<p>"At Health Lab, we are your trusted partner in diagnostic excellence, delivering precise results for informed healthcare decisions."</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Welcome to Health Lab </h2>
								<p>At Health Lab, we are committed to providing cutting-edge diagnostic services with a focus on accuracy, efficiency, and patient care. With a team of experienced and skilled professionals, we deliver precise diagnostic results that empower healthcare providers and patients to make informed decisions about their health. Our state-of-the-art laboratory is equipped with the latest technology, ensuring timely and reliable testing across a wide range of medical disciplines. </p>
								<p>We take pride in contributing to the well-being of our community by setting high standards for diagnostic excellence and making a positive impact on healthcare outcomes. Your health is our priority, and we're here to support you every step of the way</p>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="Assets/Templates/Main/images/about-img-01.jpg" alt="">
										</li>
										<li>
											<img src="Assets/Templates/Main/images/about-img-02.jpg" alt="">
										</li>
										<li>
											<img src="Assets/Templates/Main/images/about-img-03.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->
	
	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Services</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
						
							<?php
							$selSevices="SELECT * FROM tbl_test t INNER JOIN tbl_subcategory s ON t.subcategory_id=s.subcategory_id INNER JOIN tbl_category c ON c.category_id=s.category_id";
							$resService=mysql_query($selSevices);
							while($dataService=mysql_fetch_array($resService)){
								?>
								<div class="item">
										<div class="serviceBox">
								<h3 class="title"><?php echo $dataService['test_name'] ?></h3>
								<p class="description">
									<?php echo $dataService['subcategory_name']."/".$dataService['category_name']; ?>
								</p>
							</div>
							</div>
								<?php
							}
							?>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<!-- End Services -->
	
	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contact us</h2>
						<p>Feel free to get in touch with us at Health Lab for all your diagnostic needs. Our dedicated team is available to answer your questions, schedule booking, and provide assistance. </p>
					</div>
				</div>
			</div>
			<div class="row">
				
				
			<div class="col-lg-12 col-xs-12">
    <div class="left-contact">
        <h2>Address</h2>
        <div class="media cont-line">
            <div class="media-left icon-b">
                <i class="fa fa-location-arrow" aria-hidden="true"></i>
            </div>
            <div class="media-body dit-right">
                <h4>Address</h4>
                <p>Health-Lab,Muvattupuzha P.O,686661</p>
            </div>
        </div>
        <div class="media cont-line">
            <div class="media-left icon-b">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="media-body dit-right">
                <h4>Email</h4>
                <a href="mailto:bharaths9061@gmail.com">bharaths9061@gmail.com</a><br>
                <a href="mailto:adwinsajan0123@gmail.com">adwinsajan0123@gmail.com</a>
            </div>
        </div>
        <div class="media cont-line">
            <div class="media-left icon-b">
                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
            </div>
            <div class="media-body dit-right">
                <h4>Phone Number</h4>
                <a href="tel:9061253966">9061253966</a><br>
                <a href="tel:6238934237">6238934237</a>
            </div>
        </div>
    </div>
</div>

				
				
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="#">Health Lab</a> Created By : Bharath S and Adwin George Sajan</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="Assets/Templates/Main/js/jquery.min.js"></script>
	<script src="Assets/Templates/Main/js/popper.min.js"></script>
	<script src="Assets/Templates/Main/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="Assets/Templates/Main/js/jquery.magnific-popup.min.js"></script>
    <script src="Assets/Templates/Main/js/jquery.pogo-slider.min.js"></script> 
	<script src="Assets/Templates/Main/js/slider-index.js"></script>
	<script src="Assets/Templates/Main/js/smoothscroll.js"></script>
	<script src="Assets/Templates/Main/js/TweenMax.min.js"></script>
	<script src="Assets/Templates/Main/js/main.js"></script>
	<script src="Assets/Templates/Main/js/owl.carousel.min.js"></script>
	<script src="Assets/Templates/Main/js/form-validator.min.js"></script>
    <script src="Assets/Templates/Main/js/contact-form-script.js"></script>
	<script src="Assets/Templates/Main/js/isotope.min.js"></script>	
	<script src="Assets/Templates/Main/js/images-loded.min.js"></script>	
    <script src="Assets/Templates/Main/js/custom.js"></script>
</body>
</html>