
<?php 
    $connection=mysqli_connect("localhost","root","","lifesaver");

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="seen.css">
    <title>SIGHT SEEN</title>
    
    
        
</head>
<body>
    <main>
  
        <div class="grid1"> <a href="index.php">HOME</a>
                <a href="#">DEPARTMENT</a>
                <a href="doctor.php">DOCTORS</a>
                <a href="appointment.php">APPOINTMENT</a>
                <a class="active" href="#">BEST HOSPITALS</a>
                
                <a href="about.php">ABOUT</a> </div>
        <div class="grid2">
            <center>
            <span class="change-content"></span>
            </center></div>
        <div class="grid3">                
                 <a href="book appointment.php" class="btn"><b>BOOK APPOINTMENT</b></a></div>
        <div class="grid4"><img src="H1.jpg"><h2></h2></div>
        <div class="grid5"><img src="H2.jpeg"><h2></h2></div>
        <div class="grid6"><img src="H3.jpg"><h2></h2></div>
        <div class="grid7"><img src="H4.jpg"><h2></h2></div>
        <div class="grid8"><img src="H5.jpg"><h2></h2></div>
        <div class="grid9"><img src="H6.jpg"><h2></h2></div>
        <div class="grid10"><img src="H7.jpg"><h2></h2></div>
        <div class="grid11"><img src="H8.jpg"><h2></h2></div>
        <div class="grid12"><img src="H9.JPG"><h2></h2></div>
        <div class="grid13"><center><B>Contact Us<br>
							Lifesaver@gmail.com&nbsp&nbsp
                            <span style="color: red;font-size: 20px">&copy;<?php echo date('Y'); ?>-All Rights Reserved.</span>&nbsp&nbspDesigned by Amit Kumar</div></center></div></div>
        </main>

</body>
</html>