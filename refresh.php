<?php
include("koneksidb.php");

$sql = "SELECT*FROM adminuserchat ORDER BY id ASC";
$result = mysqli_query($db, $sql);

$data = "";
while($row = mysqli_fetch_assoc($result)){
    if($row["pengirim"] == 0)
        $data .= "<div style='border-radius: 5px; background-color:blue; color: white; padding: 5px; margin-bottom: 5px;'>".$row["pesan"]."</div>";
    else
        $data .= "<div style='border-radius: 5px; background-color:green; color: white; text-align: right; padding: 5px; margin-bottom: 5px;'>".$row["pesan"]."</div>";
}   

echo $data;
?>