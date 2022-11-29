
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="link.css">

    <?php

    session_start();
    if(!isset($_SESSION['email']))
    {
        
        header('location:signin.php');
    }

?>
   

   <style>
    form button
        {
            background-color: blueviolet;
            cursor: pointer;
        }
   </style>
</head>
<body>
    <form action="signoutback.php" method="post">

        <div align="center" >
            <h1>
                Login Successfully
            </h1>
        <table border="1px" bgcolor='lightblue'>
                <div align='center'>
                    <tr>
                      
                            <h3>
                       &nbsp; Student Profile
                            </h3>   
                    </tr>
                    
            <?php
                    include 'con.php';
                    if(isset($_SESSION['email']))
                    {
                        $email=$_SESSION['email'];
                    $rows=mysqli_fetch_assoc(mysqli_query($con,"select * from register where email='$email'"));
                   foreach($rows as $row)
                  
                   ?>
                        <tr><td align='right'>Student Name:-&nbsp;</td>
                        <td><?php  print_r($rows['Name']);  ?></td></tr>

                         <tr><td align='right'>Roll Number:-&nbsp;</td>
                        <td><?php  print_r($rows['rollno']); ?></td></tr>

                        <tr><td align='right'>Email:-&nbsp;</td>
                        <td><?php  print_r($rows['email']); ?></td></tr>

                        <tr><td align='right'>Date Of Birth:-&nbsp;</td>
                        <td><?php  print_r($rows['dob']); ?></td></tr>

                        <tr><td align='right'>Mobile Number:-&nbsp;</td>
                        <td><?php  print_r($rows['number']); ?></td></tr>

                        <tr><td align='right'>Gender:-&nbsp;</td>
                        <td><?php  print_r($rows['gender']); ?></td></tr>

                        <tr><td align='right'>Hobbie:-&nbsp;</td>
                        <td><?php  print_r($rows['hobbie']); ?></td></tr>

                        <tr><td align='right'>Branch:-&nbsp;</td>
                        <td><?php  print_r($rows['branch']); ?></td></tr>

                 <?php
                    }
                    ?>
            </div>
           <td align="center">
           <label ><button type="submit" value="Log Out" name="signout">Log Out</button></td>
          <td align="center"> <button type='button' value="" name='reset' onclick="location.href='upassword.php'">Reset Password</button></label>
           </td> 
           
        </div>
    </table>
    </form>
    
</body>
</html>
