
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
    <link rel="stylesheet" href="../Assets/Templates/Main/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../Assets/Templates/Main/css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="../Assets/Templates/Main/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../Assets/Templates/Main/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Assets/Templates/Main/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
	.main-content{
		min-height: 100vh;
	}
</style>
</head>
<?php
include("SessionValidator.php");
?>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <div id="preloader">
		<div class="loader">
			<img src="../Assets/Templates/Main/images/preloader.gif" alt="" />
		</div>
    </div>
    <!-- END LOADER -->
	<!-- End top bar -->
	<style>
		.top-header {
			background:#d5d5d5 !important;
		}
	</style>
	<!-- Start header -->
	<header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="../Assets/Templates/Main/images/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="HomePage.php">Home</a></li>
                        <!-- Profile dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="Myprofile.php">My Profile</a>
                                <a class="dropdown-item" href="EditProfile.php">Edit Profile</a>
                                <a class="dropdown-item" href="Changepassword.php">Change Password</a>
                            </div>
                        </li>
                        <!-- Bookings dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="bookingsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Booking
                            </a>
                            <div class="dropdown-menu" aria-labelledby="bookingsDropdown">
                                <a class="dropdown-item" href="booking.php">Add Booking</a>
                                <a class="dropdown-item" href="viewbooking.php">View Booking</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               More
                             </a>
                               <div class="dropdown-menu" aria-labelledby="moreDropdown">
                                <a class="dropdown-item" href="complaint.php">Complaint</a>
                                 <a class="dropdown-item" href="feedback.php">Feedback</a>
                            </div>
                        </li>
                        <li><a class="nav-link" href="Logout.php">Logout</a></li>
                        <li>
                        <a class="nav-link" href="#">Welcome      <?php echo $_SESSION["uname"]?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	<div class="main-content">
	<!-- End header -->