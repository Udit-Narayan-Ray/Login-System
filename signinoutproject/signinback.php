<?php


include 'con.php';


if(isset($_POST['signin']))
{
    session_start(); 
    $email=$_POST['email'];
    $pass=$_POST['password'];

       //this will start the session of the login 
    $query=mysqli_query($con,"select * from register where email='$email'");
    $emailc=mysqli_num_rows($query);
    if($emailc)
    {
        $validemail=mysqli_fetch_assoc($query);
        $_SESSION['email']=$validemail['email'];     //this will store the session value for the login credential
//which will match with the visiting page if not destroy then will remain in same page otherwise if destroy then directed to signin form
        $passv=$validemail['password'];
        $token=$validemail['token'];
        if($passv!=$pass)
        {
            
            if(isset($_SESSION['token']))
            {
                $to=$_SESSION['token'];

               if($pass!=$token)
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
