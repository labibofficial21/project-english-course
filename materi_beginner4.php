<?php
// Create database connection using config file
include_once("koneksidb.php");
 
// Fetch all users data from database
$result = mysqli_query($db, "SELECT * FROM forum ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="kamarbahasainggris">

    <title>Kamar Bahasa Inggris</title>
    <link rel="icon" href="images/logoicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/desain.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Icofont -->
    <link rel="stylesheet" href="plugins/icofont/icofont.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- NAVIGASI HEADER -->
    <nav class="navbar navbar-expand-lg fixed-top trans-navigation">
        <div class="container">
            <a class="navbar-brand" href="index_admin.php">
                Kamar Bahasa Inggris
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="index_admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="course_admin.php">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="forum_admin.php">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="aboutus_admin.php">About Us</a>
                    </li>  
                    <li class="nav-item dropdown">
                        <!-- logged in user information -->
		                <div class="profile_info">
			                <?php  if (isset($_SESSION['user'])) : ?>	
                            
                            <a class="nav-link smoth-scroll" id="navbarDropdown" data-toggle="dropdown">
                                <?php echo $_SESSION['user']['username'];?>
                                (<?php echo ucfirst($_SESSION['user']['user_type']); ?>)
                            </a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index_admin.php?logout='1'">Logout</a>
                            </div>
            
				            <?php endif ?>
			            </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVIGASI HEADER -->

    <!-- BANNER DEPAN -->    
    <div class="banner-area" style="background-image: url('header2.jpg')">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                            <div class="banner-content content-padding">
                                <h5 class="subtitle">Kursus Bahasa Inggris</h5>
                                <h4 style=color:white>Kamar Bahasa Inggris merupakan sebuah situs website pembelajaran bahasa inggris yang dapat diakses oleh khalayak umum.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER DEPAN -->
	
    <br>
	<h4><br>Part 1 <br></h4>
    <div class="container">
    <div class="row">
    <div class="embed-responsive embed-responsive-16by9">
		<iframe width="665" height="374" src="https://www.youtube.com/embed/YKYX0mTyeRI?list=PL0A0C8CFFE9712B76" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	
	<br>
	<h4><br>Part 2 <br></h4>
    <div class="container">
    <div class="row">
		<iframe width="665" height="374" src="https://www.youtube.com/embed/MLtc_631cmE?list=PL0A0C8CFFE9712B76" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="embed-responsive embed-responsive-16by9">	
    </div>
	
	<br>
	<h4><br>Part 3 <br></h4>
    <div class="container">
    <div class="row">
		<iframe width="665" height="374" src="https://www.youtube.com/embed/c1nvw91gTog?list=PL0A0C8CFFE9712B76" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="embed-responsive embed-responsive-16by9">
	</div>
	
	<br>
	<h4><br>Part 4 <br></h4>
    <div class="container">
    <div class="row">
		<iframe width="665" height="374" src="https://www.youtube.com/embed/gbepJU1RpnQ?list=PL0A0C8CFFE9712B76" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="embed-responsive embed-responsive-16by9">
		
	</div>
	
	<br>
	<h4><br>Part 5 <br></h4>
    <div class="container">
    <div class="row">
    <div class="embed-responsive embed-responsive-16by9">
		<iframe width="665" height="374" src="https://www.youtube.com/embed/l-xs-0qSHjs?list=PL0A0C8CFFE9712B76" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>

	<br>    
		<center> <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Soal</a> </center>
	</br>
    <!-- FOOTER -->
    <section id="footer" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-8 col-md-8">
                    <div class="footer-widget footer-link">
                        <h4>We concern about you<br> to grow business rapidly.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsam hic non sunt recusandae atque unde saepe nihil earum voluptatibus aliquid optio suscipit nobis quia excepturi vel quod, iure quae.</p>
                    </div>
                </div>
                

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4>Terima Kasih</h4>
                        <ul>
                            <li>Muhammad Labib</li>
                            <li>Matthew Richard A</li>
                            <li>Sekar Ayu D</li>
                            <li>Hanan Nadia Z</li>
                            <li>Eldhyn Dwinanda P</li>
                        </ul>
                    </div>
                </div>
            
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="footer-widget footer-text">
                        <h4>Our location</h4>
                        <p class="mail"><span>Mail:</span> kamarbahasainggris@gmail.com</p>
                        <p><span>Phone :</span>+202-277-3894</p>
                        <p><span>Location:</span> Universitas Pembangunan Nasional Veteran Jakarta</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-copy">
                        © 2020 Project Team Website.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->

    <!-- Skrip Main jQuery untuk animasi ubah angka-->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!-- Woow animtaion -->
    <script src="plugins/counterup/wow.min.js"></script>
    <script src="plugins/counterup/jquery.easing.1.3.js"></script>
     <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Contact Form -->
    <script src="plugins/jquery/contact.js"></script>
    <script src="js/custom.js"></script>
  </body>
  </html>