<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>


<form action="chkregistration.php" method="post" name="frmregistration" id="frmregistration">
<h1 id="h1">Registration form</h1>
        <table  id="txttable">
        <tr align=center>
      
      
  </tr>
            <tr>
                <td>
                    FirstName
                </td>
                <td>
                    <input type="text" id="txtfname" name="txtfname" placeholder="Enter Your Name" required>
                </td>
            </tr>
            
            <tr>
                <td>
                    LastName
                </td>
                <td>
                    <input type="text" id="txtlname" name="txtlname" placeholder="Enter Your Last name">
                </td>
            </tr>
            
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="text" id="txtemail" name="txtemail" placeholder="Enter your Email">
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
            <tr>
                <td>
                    Mobile Number
                </td>
                <td>
                    <input type="text" id="txtmobile" name="txtmobile" placeholder="Enter Your Mobile">
                </td>
            </tr>
            
            <tr>
                <td>
                    Address
                </td>
                <td>
                <textarea name=txtaddress id=txtaddress placeholder="Enter Your Address"></textarea>
                </td>
            </tr>
            <tr>
            <td>
                    Gender
                </td>
                  
            <td>
                <input type=radio name=radgender id=radgender value=Male> Male
                <input type=radio name=radgender id=radgender value=Female> Female

                </td>
            </tr>
            
            <tr>
                <td>City</td>
                <td>
                    <select name="selcity" id="selcity">
                        <option value="">Surat</option>
                        <option value="">Goa</option>
                        <option value="">Ahemdabad</option>
                        <option value="">Manali</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Security questions </td>
                <td>
                    <select name="selsecurity" id="selsecurity">
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
                <input type=text name=txtans id=txtans > 
               

                </td>
            </tr>
           
           
            <tr align=center>
      
                <td colspan=2>
                    <input type="submit" id="submit" name="submit">
                </td>
            </tr>
            <tr align=center>
                <td colspan=2>
                    Already have an account?
                </td>
                
      
                <td colspan=2>
                    <a href="login.php">Login</a>
                </td>
            </tr>
            
            
            
            
            
            
            
        </table>
        
 
    </form>
    
</body>
</html>