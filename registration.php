<?php

session_start();

$con = mysqli_connect('localhost:7882', 'root','');
if($con)
{
    echo "done connection";
}
else
{
    echo " not done";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1)
{
    echo "duplicate data";
}
else
{
    $qy = " insert into signin(name, password) values ('$name', '$pass')";
    mysqli_query($con , $qy);
}


?>