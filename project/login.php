<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="chklogin.php" method="post" name="frmlogin" id="frmlogin">
        <table width=600 border=1>
        <tr align=center>
      
      <td colspan=2>
          Login
      </td>
  </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="email" id="txtuname" name="txtemail" placeholder="Enter Your email" required>
                </td>
            </tr>
            
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="text" id="txtpass" name="txtpass" placeholder="Enter Your Password">
                </td>
            </tr>
            <tr align=center>
      
                <td colspan=2>
                    <input type="submit" id="btnlogin" name="btnlogin">
                </td>
            </tr>
            <tr align=center>
                
      
                <td colspan=2>
                    <a href="forgotpassword.php">Forgotpassword</a>
                </td>
            </tr>
            
         </table>
        </form>
    
</body>
</html>