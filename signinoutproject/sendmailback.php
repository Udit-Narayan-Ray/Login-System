<?php
session_start();

include 'con.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exceptiosn;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

$mail=new PHPMailer(true);//here it may generate false error so don't pay attention to it

$rmail=$_POST['rmail'];

    if(isset($_POST['sentmail']))
    {
        
       

        $emailc=mysqli_num_rows(mysqli_query($con,"select * from register where email='$rmail'"));

        if($emailc<1)
        {
            
            
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
            $mail->Username='<your email>';
            $mail->Password='<your app password>';//app password will be generated after you have enabled 2-step verification.
            $mail->SMTPSecure='ssl';
            $mail->Port=465;
    
            $mail->isHTML(true);
            $mail->addAddress($rmail);
            $mail->Subject='Reset Password';

            $otp=rand(100000,999999);

            $mail->Body=" $otp  is the password for the given time"; 
       
        
        
            $mail->setFrom('<your email>','RKU');
            if($mail->send())
            {
    
    
                $_SESSION['msg']="Check the mail to see the password";
                $_SESSION['otp']=$otp;
                echo '<script>alert("Email sent successfully")</script>';
                
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
        
       
       
        $vmail=$_SESSION['vmail'];
        $emailc=mysqli_num_rows(mysqli_query($con,"select * from register where email='$vmail'"));
        
        
        if($emailc<1)
        {
            
            
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
            $mail->Username='<your email>';
            $mail->Password='<your app password>';//app password will be generated after you have enabled 2-step verification.
            $mail->SMTPSecure='ssl';
            $mail->Port=465;
    
            $mail->isHTML(true);
            $mail->addAddress($vmail);
            $mail->Subject='Verification for activating Account';

            $token=$_SESSION['token'];
                
            $mail->Body="click the link to verify the account 
            http://localhost:81/signinoutproject/signin.php?token=$token ";
        
        

            $mail->setFrom('<your email>','RKU');
            if($mail->send())
            {
    
    
                $_SESSION['msg']="Check the mail to verify the account";
               
                echo '<script>alert("Email sent successfully")</script>';
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
