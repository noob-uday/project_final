<?php
$id=$_GET['delid'];

include "connect.php";

$sql = "DELETE FROM location WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header("Location:explore.php");
?>
