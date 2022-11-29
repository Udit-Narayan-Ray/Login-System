<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="link.css">


    <?php
        include 'con.php';
        session_start();
        if(isset($_GET['token']))
        {
            try
            {
                $tok=$_GET['token'];
                
                $u="update register set status='active' where token='$tok' and status='inactive'";
               $query=mysqli_query($con,$u);
                if($query)
                {
                    $_SESSION['msg']='Account Verified Successfully you can Login Now';
                }
                else
                {
                    $_SESSION['msg']='Account is not verified yet.';
                }
            }
            catch (Exception $e)
            {
                echo $e;
            }
            
        }

    ?>
</head>
<body>


    <form action="signinback.php" method="post" >
        <div align="center">
        
                <h2>Student Section</h2>
            </div>
            <div align="center">
          <center>  <img  src="loginimage.jpg"  width="200px" height="200px" ></center>

            <table  align="center" >
                <tr>
                    <td align="center">
                        <p>
                        <?php 
            
            if(isset($_SESSION['msg']))
            {
                echo $_SESSION['msg'];
               
            }
            else
            {
                echo 'Login Please';
            }
          ?>
                        </p>
                    </td>
              </tr>
             <tr>
                <td><label> User Id</label></td></tr>
                <tr><td><input type="email" required placeholder="User ID" name="email" ></td>
             </tr>
             <tr><td><label>Password</label></td></tr>
            <tr><td><input type="password" value="" name="password" placeholder="Password" required> </td></tr>
            <tr><td align="center">
                <button  type="button"  value="SIGN UP" onclick="location.href='register.php'">SIGN UP</button>
                <button type="submit"  value="SIGN IN" name="signin" >SIGN IN</button>
            </td></tr>
            <tr>
                <td align="center">
                    <label>
             <a href="sendmail.php">Forgot Password</a>
                    </label>
                </td>
            </tr>
        </table>   
       
        </div>
    </form>
    
</body>
</html>
