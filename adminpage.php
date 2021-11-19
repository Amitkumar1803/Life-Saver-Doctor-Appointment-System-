<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpage.css">
    <title>ADMINPAGE</title>
    <style>
        .grid5
{
    background-color: black;

}
    </style>
</head>
<body>
  <main>
        <div class="grid1">
            <a class="active" href="login.php">ADMIN</a>
            <a href="logout.php">LOG OUT</a>
        </div>

        <div class="grid2">
            <center><section>
            <span class="change-content"></span>
        </section></center></div>

        <div class="grid3">
            <div class="sidebar">
                <div class="shortcut-links">
                <a href="showappointment.php"><img src="tweet.png"><P>SHOW ALL APPOINTMENT</P> </a>

                    <a href=""><img src="tweet.png"><P>ADD DEPARTMENT</P> </a>
                    <a href=""><img src="tweet.png"><P>ADD DOCTOR</P> </a>
                    <a href="feedback.php"><img src="tweet.png"><P>FEEDBACK</P> </a>
                    <hr>
                </div></div>
        </div>
        <div class="grid5"><center>
            <img src="img14.jpg" height="645px" width="750px"></center>
        </div>
        <div class="grid7"><center><B>Contact Us-
							Lifesaver@gmail.com <br>
                            <span style="color: red;font-size: 20px">&copy;<?php echo date('Y'); ?>-All Rights Reserved</span></div></center></div>
    </main>
</body>
</html>