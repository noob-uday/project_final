<?php

include("connect.php");
$sql = "SELECT * FROM location";
$result = $conn->query($sql);


$id=$_POST["id"];
$c=$_POST["cname"];
$l=$_POST["lname"];
$bl=$_POST["blog"];


$conn->close();
?>



<html>
    <head>
        <title>explore</title>
        <link rel="stylesheet" href="./project.css">
        <style>
            table{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th{
    border: 1px solid #ddd;
  padding: 8px;
  color:black;
}
tr:nth-child(even){background-color: #f2f2f2;}
th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color:black;
}
tr:hover {background-color: #ddd;}

hr{
    width:100%; height:10px ; color: black; background-color: black;
}
ul{
    text-align: center;
}
        </style>

    </head>
    <body style="background: linear-gradient(to right, #006600 0%, #FFFFFF 100%);">
    <a href="./home.php"> <img src="./photos/images-8.jpeg"></a>
        <div class="index">
            <a href="register.php">Register</a>
            <a href="insert.php">Contribute</a>
            <a href="explore.php">Explore</a><br><br>
            <hr>
            <hr>
        </div>
        <div class="explore">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Contributer</th>
                    <th>LOCATION</th>
                    <th>BOLG</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php 
			if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc())
                { 
                    $id=$row["id"];
                    echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo"<td>".$row['cname']."</td>";
                        echo "<td>". $row["lname"]."</td>";
                        echo "<td>". $row["blog"]."</td>";
                        echo "<td>"."<a href='update.php?editid=$id'>Edit</a>"."</td>";
                        echo "<td>"."<a href='delete.php?delid=$id'>Delete</a>"."</td>";
                        echo "</tr>";
                }
            }
            else echo "0 results";
            ?>
                
            </table>
        </div>
        
    </body>
</html>