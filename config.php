<?php 
$connect=mysqli_connect("localhost","root","","test");
if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}