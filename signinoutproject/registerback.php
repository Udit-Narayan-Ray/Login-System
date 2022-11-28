<?php

// session_start();
// if(!isset($_SESSION['email']))
// {
//     header('location:login.html');
// }


include 'con.php';

if(isset($_POST['save']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $name=$_POST['name'];
    $no=$_POST['number'];
    $cpass=$_POST['cpassword'];
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
    
    if($emailc>0)
    {
        echo '<script>alert("Email Already Exist")</script><br>';
        echo '<script>location.replace("register.php")</script>';
    }
    else if($pass!=$cpass)
    {
        echo '<script>alert("Password are not matching")</script><br>';
    }
    else
    {
        $token=bin2hex(random_bytes(5));
    mysqli_query($con,"Insert into register(name,rollno,email,dob,number,gender,hobbie,branch,password,cpassword)values('$name','$rollno','$email','$dob','$no','$gen','$ho','$branch','$pass','$cpass')");
    echo '<script>alert("Successfully Register")</script>';
echo '<script>location.replace("signin.php")</script>';
    }
}



?>