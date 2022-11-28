
<?php
include 'con.php';


if(isset($_POST['changep']))
{   
        session_start();
        $_SESSION['cp']='change Password';
        $_SESSION['msg']='Login Please';
        $email=$_SESSION['email'];
        // echo '$email';
        // echo $_SESSION['email'];
        // print_r($email);
        $newp=$_POST['newp'];
        $cnewp=$_POST['cnewp'];
       
        if($newp!=$cnewp)
        {
            echo '<script>alert("Password Missmatch")</script>';
            echo '<script>location.replace("upassword.php")</script>';
        }
        else
        {
            

            $query="update register set password='$newp',cpassword='$cnewp' where email='$email'";
            mysqli_query($con,$query);
            echo '<script>alert("Password Change Successfully")</script>';
            echo '<script>location.replace("signout.php")</script>';
            session_destroy();
        }
     
    }


?>