<?php
$servername="localhost";
$username="root";
$database="college" ;
$password="";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
	die("not connected");
}

 ?>
