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

    <!-- JAVASCRIPT -->
    <script src="js/jquery-3.5.1.min.js"></script>
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- NAVIGASI HEADER -->
    <nav class="navbar navbar-expand-lg fixed-top trans-navigation">
        <div class="container">
            <a class="navbar-brand" href="index_user.php">
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
                        <a class="nav-link smoth-scroll" href="index_user.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="course_user.php">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="forum_user.php">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="aboutus_user.php">About Us</a>
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
                                <a class="dropdown-item" href="index_user.php?logout='1'">Logout</a>
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
    <br>
      
    <div id="konten" style="padding: 10px; margin-bottom: 20px;"></div>
    <center>
    <input id="pesan"><button onclick="kirimpesan()">Kirim</button>
    <div id="info"></div>
    </center>

    <br>
    <br>

    <script>
        function kirimpesan(){
            var pesan = $("#pesan").val();
            $.post("chatengine.php", { pengirim : "forum1", teks :  pesan }).done(function(data){
                $("#info").html("Status pesan: " + data);
                refreshsekarang();
                $("#pesan").val("");
            });
        }

        refreshsekarang()

        function refreshsekarang(){
            $.ajax("refresh.php").done(function(data){
                    $("#konten").html(data);
                });
        }

        //refresh html setiap 1 detik
        function refreshchatbox(){
            setTimeout(function(){
                refreshsekarang();
                refreshchatbox();
            },1000); 
        }

        refreshchatbox();
    </script>

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
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="error.php">Course</a></li>
                            <li><a href="error.php">Community</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="#">License</a></li>
                            <li><a href="#">Terms & Condition</a></li>
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
                        <p>© 2020 Project Team Website.</p>
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