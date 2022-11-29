<?php
session_start();

include 'con.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exceptiosn;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

$mail=new PHPMailer(true);

$rmail=$_POST['rmail'];

    if(isset($_POST['sentmail']))
    {
        
       
        // $con=mysqli_connect('localhost','root','','it');

        $emailc=mysqli_num_rows(mysqli_query($con,"select * from register where email='$rmail'"));
        // $emailc=mysqli_num_rows(mysqli_query($con,"select * from register where email='$email'"));

        if($emailc<1)
        {
            // echo $emailc;
            // echo $rmail;
            
            echo '<script>alert("Email is not Register")</script>';
            echo '<script>location.replace("sendmail.php")</script>';
        }
        else
        {
            try
            {
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->SMTPAuth=true;
            $mail->Username='unr.638@gmail.com';
            $mail->Password='smowqhctszlmzmgw';
            $mail->SMTPSecure='ssl';
            $mail->Port=465;
    
            $mail->isHTML(true);
            $mail->addAddress($rmail);
            $mail->Subject='Reset Password';

            $otp=rand(100000,999999);

            // mysqli_query($con,"update register set token='$token' where email='$rmail'");
            $mail->Body=" $otp  is the password for the given time"; 
       
        
        //here with (?key=value) we sending data to server and with help of get we can fetch it

            $mail->setFrom('unr.638@gmail.com','RKU');
            if($mail->send())
            {
    
    
                $_SESSION['msg']="Check the mail to see the password";
                $_SESSION['otp']=$otp;
                echo '<script>alert("Email sent successfully")</script>';
                // echo header('location:signin.php');
                    echo '<script>location.replace("signin.php")</script>';
    
            }
            else
            {
                echo '<script>alert("Email sent Failed")</script>';
            }
         }
         catch(Exception $e)
            {
                echo $e;
            }
    }
     
}
       
if(isset($_SESSION['vmail']) && isset($_SESSION['token']))
    {
        
       
        // $con=mysqli_connect('localhost','root','','it');
        $vmail=$_SESSION['vmail'];
        $emailc=mysqli_num_rows(mysqli_query($con,"select * from register where email='$vmail'"));
        // $emailc=mysqli_num_rows(mysqli_query($con,"select * from register where email='$email'"));
        
        if($emailc<1)
        {
            // echo $emailc;
            // echo $rmail;
            
            echo '<script>alert("Email is not Register")</script>';
            echo '<script>location.replace("register.php")</script>';
        }
        else
        {
            
            try
            {
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->SMTPAuth=true;
            $mail->Username='unr.638@gmail.com';
            $mail->Password='smowqhctszlmzmgw';
            $mail->SMTPSecure='ssl';
            $mail->Port=465;
    
            $mail->isHTML(true);
            $mail->addAddress($vmail);
            $mail->Subject='Verification for activating Account';

            $token=$_SESSION['token'];
            // $token=mysqli_query($con,"select token from register where email='$vmail'");

            // mysqli_query($con,"update register set token='$token' where email='$rmail'");
            $mail->Body="click the link to verify the account 
            http://localhost:81/signinoutproject/signin.php?token=$token ";
        
        //here with (?key=value) we sending data to server and with help of get we can fetch it

            $mail->setFrom('unr.638@gmail.com','RKU');
            if($mail->send())
            {
    
    
                $_SESSION['msg']="Check the mail to verify the account";
                // $_SESSION['token']=$token;
                echo '<script>alert("Email sent successfully")</script>';
                // echo header('location:signin.php');
                    echo '<script>location.replace("signin.php")</script>';
    
            }
            else
            {
                echo '<script>alert("Email sent Failed due to Error")</script>';
            }
         }
         catch(Exception $e)
            {
                echo $e;
            }
    }
     
}
       
?>