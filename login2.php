<?php
    session_start();
    $name = htmlspecialchars($_GET['user']);
    $pass = htmlspecialchars($_GET['password']);

    $con = mysqli_connect('localhost', 'root', 'root');

mysqli_select_db($con, 'donate'); 
$s ="select * from usertable where name ='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("location:index2.php");
} else {
    header("location:error.php?id=3");
}
?>