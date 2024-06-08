<?php
include("connect.php");

$cname=$_POST["cname"];
$phone=$_POST["phone"];
$lname=$_POST["lname"];
$blog=$_POST["blog"];


$sql="INSERT INTO `location`(`id`, `cname`, `phone`, `lname`,`blog`)
 VALUES (null,'$cname','$phone','$lname','$blog')";
$loc=$conn->query($sql);


if ($loc){
    echo "thank you";
}else{
    echo "sorry";
}
if($loc)
		{
			//echo "Success";
			header("Location:explore.php");
		}
		else
		{
			echo "Application failed";
		}
$conn->close();
?>

