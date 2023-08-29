<?php
$host = 'localhost';
$user = 'root';
$password = "";
$db = 'school';

$connection = mysqli_connect($host,$user,$password,$db);
$select = "SELECT * FROM `student`";

$result = mysqli_query($connection,$select);

?>