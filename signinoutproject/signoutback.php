
<?php
include 'con.php';


if(isset($_POST['signout']))
{
    session_start();
    echo '<script>alert("Log Out Successfully")</script>';
    session_destroy();
  
    echo '<script>location.replace("signin.php")</script>';
}


?>
