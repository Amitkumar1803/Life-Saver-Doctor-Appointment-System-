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

$sql = "select * from depdoc where department like '%$search%' or address like '%$search%'";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="departmentsearch.css">
    <title>DEPARTMENT</title>
</head>
<body>
        <main>
                <div class="div1">
                    <a href="index.php">HOME</a>
                <a class="active" href="#">DEPARTMENT</a>
                <a href="doctor.php">DOCTORS</a>
                <a href="appointment.php">APPOINTMENT</a>
                <a href="#">SERVICES</a>
                <a href="helpdesk.php">CONTACT</a>
                <a href="about.php">ABOUT</a>
                </div>
                <div class="div2">
                    <marquee scrollamount="12">
                                    <img src="img1.jpg" height="300px" width="1000px">
                                    <img src="dd.jpg" height="300px" width="700px">
                                    <img src="ww.jpg" height="300px" width="700px">
                                    <img src="ee.jpg" height="300px" width="700px">
                                    <img src="aa.jpg" height="300px" width="700px">
                                    <img src="rr.jpg" height="300px" width="700px">
                                    <img src="img7.jpg" height="300px" width="1000px">
                                </marquee>
                                    </div>
                <div class="div3">
                <center>
                <form action="departmentsearch.php" method="post">
                     <input type="text" name="search" placeholder="Search Department">
                     <img src="search.png">
                     <input type ="submit">
                </form>
</center>
</div>
<div class="div5">
<?php
if ($result->num_rows > 0)
{
	echo"<center><table border='2' cellspacing='5px'>
<tr>
<th>DEPARTMENT</th>
<th>DOCTOR</th>
<th>MOBILE_NO</th>
<th>ADDERSS</th>
</tr>";
while($row = $result->fetch_assoc() )
{
	echo "<tr>";
    echo "<td>" .  $row["department"]. "</td>";
    echo "<td>" . $row["doctors"] . "</td>";
    echo "<td>" .$row["mobile no"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "</tr>";	
}
} else {
	echo"</table>";
}

$conn->close();

?>

</div>

</main>
</body>
</html>


               