<?php
if(!isset($_POST['submit']))
{
    header("Location:index.php");
}
$fname=$_POST['txtfname'];
$lname=$_POST['txtlname'];
$email=$_POST['txtemail'];
$password=$_POST['txtpass'];
$mobile=$_POST['txtmobile'];
$address=$_POST['txtaddress'];
$city=$_POST['selcity'];
$gender=$_POST['radgender'];
$ques=$_POST['selsecurity'];
$ans=$_POST['txtans'];


include "connection.php";

//check duplicate email

$qchk="select * from registration where email='$email' or mobile=$mobile";
$reschk=mysqli_query($conn,$qchk) or die("Query 1 error");

$count=mysqli_num_rows($reschk);

if($count>0)
{
    echo "Email or mobile already exist";
}
else
{
    $query="insert into registration(first_name,last_name,email,pass,mobile,address,city,gender,ques,ans) values('$fname','$lname','$email','$password',$mobile,'$address','$city','$gender','$ques','$ans')";

    $result=mysqli_query($conn,$query) or die("Query Error");
    
    echo "Success";
}






?>

