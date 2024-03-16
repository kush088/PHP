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
    $q="select * from city";
    $result=mysqli_query($conn,$q) or die("Query error");
    
    
    echo "<form method=post action=chks.php>";
    echo "<select name=selname>";
    while($data = mysqli_fetch_array($result))
    {
    echo "<option>".$data['cname']."</option>";
    }
    echo "</select>";
    
    echo "</form>";
    ?>
    
</body>
</html>