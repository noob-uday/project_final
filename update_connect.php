
<?php

include "connect.php";

$id = $_POST['id'];
$blog = $_POST['blog'];

$sq="UPDATE `location`
 SET `blog`='$bolg' WHERE id='$id'";

/*
$result=;*/

if($conn->query($sq)){
    header("Location:explore.php");
}else{
    echo "check your code again.";
}

?>
