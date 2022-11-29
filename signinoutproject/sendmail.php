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


