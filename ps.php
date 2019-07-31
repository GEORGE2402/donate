<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'root');

mysqli_select_db($con, 'userregistration'); 

$name = htmlspecialchars($_GET['user']);
$pass = htmlspecialchars($_GET['password']);

$s ="select * from usertable where name ='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}
else{
    $reg = "insert into usertable(name, password) values ('$name','$pass')";
    mysqli_query($con, $reg);
    //echo "Registration Successful";
    header("location:login.php?registered=yes");
}
?>
