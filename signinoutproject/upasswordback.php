
<?php
include 'con.php';


if(isset($_POST['changep']))
{   
        session_start();
        $_SESSION['cp']='change Password';
        $_SESSION['msg']='Login Please';
        $email=$_SESSION['email'];
        $np=$_POST['newp'];
        $cnp=$_POST['cnewp'];
      
        $newp=password_hash($np,PASSWORD_BCRYPT);
        $cnewp=password_hash($cnp,PASSWORD_BCRYPT);
       
        if($np!=$cnp)
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
