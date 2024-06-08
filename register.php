<?php
include("connect.php");
$sql="SELECT * FROM division";
$result=$conn->query($sql);
?>

<html>
    <head>
        <title>register</title>
		<link rel="stylesheet" href="./project.css">
    </head>
    <body style="background-color:#ffcc00;">
	<div>
		<a href="./home.php"><img src="./photos/Sundarban_Tiger.jpg" class="center"></a>
		<div class="index">
            <a href="register.php">Register</a>
            <a href="insert.php">Contribute</a>
            <a href="explore.php">Explore</a>
			<br>
			<hr>
			<hr>
        </div> 

    <h1 align="center">Do Register Here</h1>
			<form action="connection_1.php" method="POST">
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter Your Name">
				<label>Phone</label>
				<input type="text" name="phone" placeholder="Enter Your Phone">
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Your Email">
				<label>City</label>
				<input type="text" name="city" placeholder="Enter Your City">
				<label>Date of Birth</label>
				<input type="date" name="dob">
				<label>Choose your division</label>				
				<select>
				<?php
				while($row=$result->fetch_assoc()){
					echo '<option value="'.$row["id"] .'">'.$row["division"] .'</option>';
				}
				
				?>
				</select><br>
				 <label>Enter 5 most underrated places in your Division and give a little short description,</label>
				 <input type="text" name="text">
				 <input type="submit" Value="Submit">
				
			</form>
		</div>
		<div class="footer">
            [TO RETURN HOME,CLICK ON PICTURE.]<br>
			Developed and maintained by _uday_karmakar_. &copy; 2024
		</div>



	
    </body>
</html>