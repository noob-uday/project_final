<?php
include "connect.php";

$id=$_GET['editid'];
$rq="SELECT * FROM `location` WHERE id=$id";

$result=$conn->query($rq);
$row=$result->fetch_assoc();
?>

<html>
    <head>
        <title>updated</title>
        <link rel="stylesheet" href="./project.css">      
    </head>
    <body style="background:#008ae6">
    <a href="./home.php"> <img src="./photos/images-8.jpeg"></a>
        <div class="index">
            <a href="register.php">Register</a>
            <a href="insert.php">Contribute</a>
            <a href="explore.php">Explore</a><br><br>
            <hr>
            <hr>
        </div>
        <div class="update">
            <form action="./update_connect.php" method="POST">
                <label>Blog</label>
                <input type="text" name="blog" value="<?php echo $row['blog']; ?>">
                <input type="submit" value="UPDATE">
            </form>
        </div>
        <div class="footer">
            [TO RETURN HOME,CLICK ON PICTURE.]<br>
			Developed and maintained by _uday_karmakar_. &copy; 2024
		</div>

    </body>
</html>