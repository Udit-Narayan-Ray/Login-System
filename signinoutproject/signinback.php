<?php


include 'con.php';


if(isset($_POST['signin']))
{
    session_start(); //this will start the session of the login 
    $_SESSION['msg']='Login Please';
    $email=$_POST['email'];
    $pass=$_POST['password'];

       
    $query=mysqli_query($con,"select * from register where email='$email' and status='active'");
    $emailc=mysqli_num_rows($query);
    if($emailc)
    {
                $validemail=mysqli_fetch_assoc($query);
                $_SESSION['email']=$validemail['email'];     
                $passv=$validemail['password'];
                $pd=password_verify($pass,$passv);
                if(!$pd)
                {
                    
                    if(isset($_SESSION['otp']))
                    {
                        $to=$_SESSION['otp'];

                    if($pass!=$to)
                    {

                        echo '<script>alert("Wrong Credential")</script>';
                        echo '<script>location.replace("signin.php")</script>';
            
                    }
                        else
                        {
                            echo '<script>alert("Login Successfully")</script>';
                
                            echo '<script>location.replace("signout.php")</script>';
                        }            
                    }
                    else
                    {
                        echo '<script>alert("Wrong Credential")</script>';
                        echo '<script>location.replace("signin.php")</script>';
                    }
                }
                else
                {
                    echo '<script>alert("Login Successfully")</script>';
                
                    echo '<script>location.replace("signout.php")</script>';
                }
     }
     else
    {
                echo '<script>alert("User ID not Register")</script>';
                echo '<script>location.replace("signin.php")</script>';
    }
}


?>
