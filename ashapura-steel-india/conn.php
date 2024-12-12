<?php
error_reporting(0);
session_start();
$host = 'localhost';
$username = 'solutionsadmin_ashapura-steel-india';
$password = 'rUY=6(F]A%yn';
$dbName = 'solutionsadmin_ashapura-steel-india';



$conn = new mysqli($host,$username,$password,$dbName);
if($conn->connect_errno)
{
	echo $conn->connect_error;
}

//$site_root = 'https://'.$_SERVER['HTTP_HOST'].'/';
$site_root = 'https://web2techsolution.com/dynamic/ashapura-steel-india/admin';
$site = 'https://web2techsolution.com/dynamic/ashapura-steel-india/';


$theme1=mysqli_query($conn,"select * from users where id='1'");
$theme=mysqli_fetch_assoc($theme1);
$logo1=mysqli_query($conn,"select * from logo where id='1'");
$logo=mysqli_fetch_assoc($logo1);

?>