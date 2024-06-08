<?php
$server_name="localhost";
$user_name="root";
$password="";
$database_name="PROJECT";

$conn= new mysqli($server_name,$user_name,$password,$database_name);
if ($conn->connect_error){
    die("Connection Unsuccessful".$conn->connect_error);
}else{
    echo("connected\n");
}
?>