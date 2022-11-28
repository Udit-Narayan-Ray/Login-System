<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// $mail=new PHPMailer(true);

// $mail->isSMTP();   

// $mail->Host       = 'smtp.gmail.com';                     
// $mail->SMTPAuth   = true;                                  
// $mail->Username   = 'unr.638@gmail.com';                    
// $mail->Password   = 'smowqhctszlmzmgw';                               
// $mail->SMTPSecure = 'ssl';          
// $mail->Port       = 465;   //alternative  $mail->SMTPSecure='tls'; $mail->Port=587;


// $mail->isHTML(true);    

// $mail->addAddress('uditnarayanray38@gmail.com');     
// $mail->Subject = 'PHPMailer testing ';
// $mail->Body    = 'Helloo Buddy this is RKU';
// $mail->setFrom('unr.638@gmail.com');

// if($mail->send())
// {
//     echo '<script>alert("Email sent Successfully")</script>';
// }
// else
// {
//     echo '<script>alert("Email sent Failed")</script>';

// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="link.css">
</head>
<body>
    <form action="sendmailback.php" method="POST">

    <div align="center">
    <h2>Enter Email to send the reset password link</h2><br>
    <table align="center">
    <tr>
        <td><label >Email</label></td>
    </tr>
    <tr>
        <td><label ><input type="email" name="rmail" value="" placeholder="Email" required></label></td>
    </tr>
    <tr>
        <td align="center">
        <label ><button type="submit" name= "sentmail" value="Send">Send</button></label>
        </td>
    </tr>
    </table>
    </div>

   
    </form>
</body>
</html>


