<?php

session_start();
// if(!isset($_SESSION['email']))
// {
//     header('location:login.html');
// }


include 'con.php';

if(isset($_POST['save']))
{
    $email=$_POST['email'];
    $p=$_POST['password'];
    $name=$_POST['name'];
    $no=$_POST['number'];
    $cp=$_POST['cpassword'];
    $rollno=$_POST['rollno'];
    $dob=$_POST['dob'];
    $gen=$_POST['gender'];
    $branch=$_POST['branch'];
    $hob=$_POST['hobbie'];
        $ho='';
        
    foreach($hob as $h)
    {
        $ho.=$h.",";
    }

    $emailc=mysqli_num_rows(mysqli_query($con,"select *  from register where email='$email'"));
    $pass=password_hash($p,PASSWORD_BCRYPT);
    $cpass=password_hash($cp,PASSWORD_BCRYPT);
    if($emailc>0)
    {
        echo '<script>alert("Email Already Exist")</script><br>';
        echo '<script>location.replace("register.php")</script>';
    }
    else if($p!=$cp)
    {
        echo '<script>alert("Password are not matching")</script><br>';
        echo '<script>location.replace("register.php")</script>';
    }
    else
    {
        $token=bin2hex(random_bytes(3));
        $_SESSION['vmail']=$email;
        $_SESSION['token']=$token;
    mysqli_query($con,"Insert into register(name,rollno,email,dob,number,gender,hobbie,branch,password,cpassword,token,status)values('$name','$rollno','$email','$dob','$no','$gen','$ho','$branch','$pass','$cpass','$token','inactive')");
   
    echo '<script>alert("Successfully Register")</script>';
    echo '<script>location.replace("sendmailback.php")</script>';
    }
}



?>