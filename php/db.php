<?php
/* Database connection settings */
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'rotudb';
//$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$conn=mysqli_connect($host,$user,$pass,$database);
if($conn){
}else{
     echo"Connection not successful" . mysqli_error($conn);
     die($conn);
}
?>