<?php

$hostName = "localhost";
$dbUser= "root";
$dbPassword= "";
$dbName="registration";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn=mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
    die("something went wrong");
}

?>