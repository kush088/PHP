<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<form action="chkforgot.php" method="post" name="frmforgot" id="frmforgot">
        <table width=600 border=1>
        <tr align=center>
      
      <td colspan=2>
          New User Registration
      </td>
  </tr>
            <tr>
                <td>
                    Enter User Name
                </td>
                <td>
                    <input type="text" id="txtuname" name="txtuname" placeholder="Enter Your User Name" required>
                </td>
            </tr>
            <tr>
                <td>Security questions </td>
                <td>
                    <select name="selforgotsecurity" id="selforgotsecurity">
                        <option value="1">Your Favourite fruit</option>
                        <option value="2">Birth place</option>
                      
                    </select>
                </td>
            </tr>
            <tr>
            <td>
                    Answer
                </td>
                  
            <td>
                <input type=text name=txtforgotans id=txtforgotans > 
               

                </td>
            </tr>
             <tr align=center>
      
                <td colspan=2>
                    <input type="submit" id="submit" name="submit">
                </td>
            </tr>   
        </table>
    </form> 
</body>
</html>