<?php
include("connect.php")
?>


<html>
    <head>
        <title>Contribute</title>
        <link rel="stylesheet" href="./project.css">
        
    </head>
    <body style="background:linear-gradient(to top right, #0066ff 0%, #ffff66 100%);">
       <a href="./home.php"> <img src="./photos/Santa_Maria_della_Salute_(50428075772).jpg" class="center"></a>
    <div class="index">
            <a href="register.php">Register</a>
            <a href="insert.php">Contribute</a>
            <a href="explore.php">Explore</a><br>
            <hr>
            <hr>
        </div>
        <div class="con">
            <form action="connection_2.php"method="POST">
                <label>Your Name</label>
                <input type="text" name="cname">
                <label>Your Phone number</label>
                <input type="text" name="phone">
                <label>location</label>
                <input type="text" name="lname"><br>
                <label>your Experience</label>
                <div class="ex" style="width: 100%; height:auto; background-color:#ffff66" >
                    <input type="text" name="blog">
                </div>
                <input type="submit" value="Insert">
            </form>
        </div>
       <form action="./c" method="post">
       </form>
       <div class="footer">
            [TO RETURN HOME,CLICK ON PICTURE.]<br>
			Developed and maintained by _uday_karmakar_. &copy; 2024
		</div>
    </body>
</html>