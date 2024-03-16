<?php
$sid=$_GET['id'];

include "connection.php";
$q="delete from registration where student_id=$sid";
$result=mysqli_query($conn,$q) or die("Query error");
header("Location:viewall.php");

?>