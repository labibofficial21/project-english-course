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


<body data-spy="scroll" data-target=".fixed-top">

    <!-- NAVIGASI HEADER -->
    <nav class="navbar navbar-expand-lg fixed-top trans-navigation">
        <div class="container">
            <a class="navbar-brand" href="index.php">
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
                                <h3 style=color:white>Tentang Kami</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER DEPAN -->

    <br>
    <br>
    <br>

    <!-- KAMAR BAHASA INGGRIS -->
    <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="mb-5">
                        <h3 class="mb-2">Kamar Bahasa Inggris</h3>
                        <p>Kamar Bahasa Inggris merupakan sebuah situs website pembelajaran bahasa inggris yang dapat diakses oleh khalayak umum.</p>
                    </div>
                </div>
    </div>


<!-- About-->
<section class="page-section" id="about">
            <div class="container">
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Oktober 2020</h4>
                                <h6 class="subheading">Ide dan Desain</h6>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>November 2020</h4>
                                <h6 class="subheading">Proses Programming 1</h6>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Desember 2020</h4>
                                <h6 class="subheading">Proses Programming 2</h6>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Januari 2021</h4>
                                <h6 class="subheading">Editing dan Tester</h6>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Jadilah
                                <br />
                                Bagian 
                                <br />
                                dari Kami!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

    <!-- TIM KAMI -->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">Tim Kami</h2>
                <h3 class="section-subheading text-muted">Tim Kamar Bahasa</h3>
            </div>
            
            <div class="row">
                <div class="col-sm-7">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/author/labib.jpg" alt="" />
                        <h4>Muhammad Labib</h4>
                        <p class="text-muted">Ketua Tim</p>
                    </div>
                    
                </div>

                <div class="col-sm-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/author/sekar.jpeg" alt="" />
                        <h4>Sekar Ayu Damayanti</h4>
                        <p class="text-muted">Anggota Tim</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/author/matthew.jpg" alt="" />
                        <h4>Matthew Richard</h4>
                        <p class="text-muted">Kontributor</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/author/hanan.jpeg" alt="" />
                        <h4>Hanan Nadia Zaki</h4>
                        <p class="text-muted">Kontributor</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/author/eldhyn.png" alt="" />
                        <h4>Eldhyn Dwinanda</h4>
                        <p class="text-muted">Kontributor</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
        </div>
    </section>
    <!-- TIM KAMI -->

    <!-- PARTNER KAMI -->
    <section  class="section-padding ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="mb-5">
                        <h3 class="mb-2">Kami bekerja sama dengan...</h3>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                    <img src="images/clients/client01.png" alt="partner" class="img-fluid">
                </div>
                
                <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                    <img src="images/clients/client06.png" alt="partner" class="img-fluid">
                </div>
                
                <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                    <img src="images/clients/client04.png" alt="partner" class="img-fluid">
                </div>
                
                <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                    <img src="images/clients/client05.png" alt="partner" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- PARTNER KAMI -->

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

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
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

    <!-- Google Map -->
    <script src="plugins/google-map/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>   
    <!-- Contact Form -->
    <script src="plugins/jquery/contact.js"></script>
    <script src="js/custom.js"></script>

  </body>
  </html>