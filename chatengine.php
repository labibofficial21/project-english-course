<?php
include("koneksidb.php");

if(isset($_POST["pengirim"]) && isset($_POST["teks"])){
    $pengirim = 0;
    if($_POST["pengirim"] == "forum2")
        $pengirim = 1;
    
    $pesan = mysqli_real_escape_string($db, $_POST["teks"]);

    if($pesan == "")
        echo "Pesan kosong.";
    else
        $sql = "INSERT INTO adminuserchat (pengirim, pesan) VALUES ($pengirim, '$pesan')";
        mysqli_query($db, $sql);
        echo "Pesan Terkirim!. Pengirim: " . $pengirim . " Isi Pesan : " . $pesan;
}
?>