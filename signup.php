<?php
include("koneksidb.php");

    if( isset($_POST["signup"]) ){
        if( registrasi($_POST) > 0 ){
            echo "<script>
                    alert('user baru berhasil ditambahkan!');
                  </script>";
        } else{
            echo mysqli_error($db);
        }
    }

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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Icofont -->
    <link rel="stylesheet" href="plugins/icofont/icofont.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- JAVASCRIPT -->
    <link rel="stylesheet" href="js/jquery-3.5.1.min.js">
    <link rel="stylesheet" href="js/popper.min.js">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
</head>

<body data-spy="scroll" data-target=".fixed-top">

<?php echo display_error(); ?>

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
                        <a class="nav-link smoth-scroll" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="error.php">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="error.php">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="aboutus.php">About Us</a>
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

    <div class="login-form">
    <form action="signup.php" method="post">
        <h2 class="text-center">Sign Up</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>" required="required">
        </div>
        <div class="form-group">
        <label>User type</label>
			<select name="user_type" id="user_type" required="required">
				<option value=""></option>
				<option value="admin">Guru as Admin</option>
				<option value="user">Siswa as User</option>
			</select>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_1" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_2" placeholder="Confirm Password" required="required">
        </div> 
        <div class="form-group">
            <button type="submit" name="register_btn" class="btn btn-primary btn-block">Sign Up</button>
        </div>
    </form>
    <p class="text-center"> <a href="login.php">Have an Account? Log In </a></p>
    </div>
    <br>
    <br>

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
   
