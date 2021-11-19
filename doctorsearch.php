<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "lifesaver";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from depdoc where doctors like '%$search%' or address like '%$search%'";

$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc() )
{
	echo $row["department"]."  ".$row["doctors"]."  ".$row["mobile no"]." ".$row["address"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>