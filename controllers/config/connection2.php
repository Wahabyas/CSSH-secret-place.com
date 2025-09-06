<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli("localhost", "root","","Blackmarket");
if (!$conn){
    exit("Error connecting DB");
}

?>