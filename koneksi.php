<?php
$conn = mysqli_connect("localhost","root","","db_pegawai");
// check connection 
 if ($conn) {
    echo "";
 } else {
    echo "Failed to connect to the database";
 }
?>