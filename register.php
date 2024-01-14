<?php
session_start();
header('location:login.html');
$con= mysql_connect('localhost','root');
if($con){
    echo "connection successfully"
}
else{
    echo "no connection"
}
mysql_connect_db($con,'marcado_clon');
$name = $_POST['email'];
$pass = $_POST['password'];

$quer- "select" from user-data where name = '$name' && password - '$pass';
$result = mysqli_query($con, $quer);
$num = mysqli_num_rows($result);
if($num==1)
{
    echo "Duplicate Data";
}
else{
    $querr="insert into user-data(username, password) values('$namw', '$pass')";
    mysqli_query($con, $querr);
}

?>