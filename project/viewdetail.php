<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $sid=$_GET['id'];
    
    include "connection.php";

    $q="select * from registration where student_id=$sid";
    //$q="select * from registration where first_name='$se'";
    $result=mysqli_query($conn,$q) or die("Query error");
    $cnt=mysqli_num_rows($result);

    if($cnt==0)
    {
        echo "No record found";

    }
    else
    {

    echo "<table border=1 cellspacing=0 cellpadding=0 width=500>";
    while($data = mysqli_fetch_array($result))
    {
        
        echo "<tr><td>First Name</td> <td>".$data['first_name']."</td></tr>";
        echo "<tr><td>Last Name</td> <td>".$data['last_name']."</td></tr>";
        

    }
    echo "</table>";
    }
    ?>
</body>
</html>