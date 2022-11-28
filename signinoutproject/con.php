
<?php
$host='localhost';
$user='root';
$password='';
$database='it';
$con=mysqli_connect($host,$user,$password,$database);

if(!$con)
{
    echo '<script>alert("Connection Failure, Please look into it.")</script>';
}

?>