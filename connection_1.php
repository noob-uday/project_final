<?php

include("connect.php");

$n=$_POST["name"];
$p=$_POST["phone"];
$e=$_POST["email"];
$c=$_POST["city"];
$d=$_POST["dob"];
$di=$_POST["division"];
$t=$_POST["text"];

$reg="INSERT INTO `user`(`id`, `name`, `phone`, `email`, `city`, `dob`, `division`, `text`)  VALUES (null,'$n','$p','$e','$c','$d','$di','$t')";
$result=$conn->query($reg);


if($result){
    header("Location:home.php");
}else{
    echo("Process Unsuccessful");

}
$conn->close();
?>
