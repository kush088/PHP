<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    include "connection.php";
    $q="select * from registration";
    //$q="select * from registration where first_name='$se'";
    $result=mysqli_query($conn,$q) or die("Query error");
    $cnt=mysqli_num_rows($result);

    if($cnt==0)
    {
        echo "No record found";

    }
    else
    {

    echo "<table border=1 cellspacing=0 cellpadding=0>";
    echo "<tr><td>First Name</td><td>Last Name</td><td>Email</td><td></td></tr>";
    while($data = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$data['first_name']."</td>";
        echo "<td>".$data['last_name']."</td>";
        echo "<td>".$data['email']."</td>";
        echo "<td><a href=viewdetail.php?id=".$data['student_id'].">".$data['email']."</td>";
        echo "<td><a href=delete.php?id=".$data['student_id']."><img src=delete.png height=15 width=15></td>";
        echo "</tr>";

    }
    echo "</table>";
    }
    ?>
</body>
</html>