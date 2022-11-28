
<!DOCTYPE html>
<html>
<head>
    <title>
        Update Password
    </title>
    <link rel="stylesheet" href="link.css" >
    <?php
    session_start();
     if(isset($_GET['token']))
     {
        $_SESSION['msg']='Email Verified Successfully for Password Reset';
     }
    
    ?>
</head>
<body>
    <form action="upasswordback.php" method="post">

    <div align="center">
        <h2>Generate Password</h2>
<table>

        <tr>
        <td>
        <label >New Password</label>
        </td>
        </tr>
        <tr>
            <td>
        <label> <input type="password" name="newp" placeholder="New Password" value=""></label>
            </td>
        </tr>
        <br>
        <tr>
        <td>
        <label >Confirm Password</label>
        </td>
        </tr>
       <tr>
        <td>
            <label>
            <input type="pasword" name="cnewp" placeholder="Confirm Password" value="">
            </label>
        </td>
       </tr> 
        <tr>
        <td align="center"> <label><button type="submit" name="changep" value="Reset Password">Reset Password</button></label>
        </td>
        </tr>
        </table>
</div>
    
    </form>
</body>
</html>
