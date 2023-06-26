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

    <div class="container">
    <div class="row">
    
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
    </div>

<?php
// koneksi ke mysqli
$servername = "localhost";
$username = "root";
$password = "";
$db = "projectweb";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}


    echo "<b>Latih Yuk!</b>";
echo "<div style='width:100%; border: 1px solid #EBEBEB; overflow:scroll;height:700px;'>";
 echo '<table width="100%" border="0">';

        $hasil=mysqli_query($koneksi, "select * from tbl_soal WHERE aktif='Y' ORDER BY RAND ()");
        $jumlah=mysqli_num_rows($hasil);
        $urut=0;
        while($row =mysqli_fetch_array($hasil))
        {
            $id=$row["id_soal"];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"]; 
            
            ?>
            <form name="form1" method="post" action="jawab.php">
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            
            <tr>
                  <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                  <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
            </tr>
 
            <tr>
                  <td height="21"><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
                <?php echo "$pilihan_a";?></font> </td>
            </tr>

            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
                <?php echo "$pilihan_b";?></font> </td>
            </tr>

            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
                <?php echo "$pilihan_c";?></font> </td>
            </tr>

            <tr>
                <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
                <?php echo "$pilihan_d";?></font> </td>
            </tr>
            
            <?php
        }
            ?>

            <tr>
                <td>&nbsp;</td>
                  <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
            </tr>
            </table>
            </form>
            </p>
        </div>

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