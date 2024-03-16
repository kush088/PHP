<?php
if(!isset($_POST['btnlogin']))
{
header("Location:login.php");

}
$email=$_POST['txtemail'];
$password=$_POST['txtpass'];

include "connection.php";

$qchk="select * from registration where email='$email' and pass='$password'";
$reschk=mysqli_query($conn,$qchk) or die("Query 1 error");
$count=mysqli_num_rows($reschk);
if($count>0)
{
    echo "valid";
}
else
{
  echo "Invalid";
}


?>