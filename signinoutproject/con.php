
<?php
$host='<host name>';//default localhost
$user='<user name>';//default root
$password='<your password>';//dafault no password ''
$database='<your database name>';
$con=mysqli_connect($host,$user,$password,$database);

if(!$con)
{
    echo '<script>alert("Connection Failure, Please look into it.")</script>';
}

?>
