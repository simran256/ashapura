<?php
error_reporting(0);
session_start();
$ses_id = session_id();
$host = 'localhost';
$username = 'solutionsadmin_aadiusenterprises';
$password = '}afGU$U5N]BT';
$dbName = 'solutionsadmin_aadiusenterprises';
$conn = new mysqli($host,$username,$password,$dbName);
if($conn->connect_errno)
{
	echo $conn->connect_error;
}
//$site_root = 'https://'.$_SERVER['HTTP_HOST'].'/';
$site_root = 'https://web2techsolution.com/dynamic/aadius-enterprises/admin';
$site = 'https://web2techsolution.com/dynamic/aadius-enterprises/';

$captchacode='6LcKy9UfAAAAAOxT7zr0hVepsdnWlr_8-BAjBf4_';

$theme1=mysqli_query($conn,"select * from users where id='1'");
$theme=mysqli_fetch_assoc($theme1);
$logo1=mysqli_query($conn,"select * from logo where id='1'");
$logo=mysqli_fetch_assoc($logo1);

?>