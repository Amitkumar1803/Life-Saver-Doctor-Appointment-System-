<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="department.css">
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

</div>
                <div class="div4">
                    <div class="box">
                    <div class="grid1"> <a href="#" >GENERAL PHYSICIANS</a></div>
                    <div class="grid2"><a href="#" >GYNECOLOGIST & OBSTETRICIANS</a></div>
                    <div class="grid3"><a href="#" >CARDIOLOGISTS</a></div>
                    <div class="grid4"><a href="#" >DENTISTS</a></div>
                    <div class="grid5"><a href="#" >AUDIOLOGIST</a></div>
                    <div class="grid6"><a href="#" >ENT</a></div>
                    <div class="grid7"><a href="#" >ORTHOPAEDIC SURGEON</a></div>
                    <div class="grid8"><a href="#" >PAEDIATRICIAN</a></div>
                    <div class="grid9"><a href="#" >RADIOLOGIST</a></div>
                    <div class="grid10"><a href="#" >ENDOCRINOLOGIST</a></div>
                    <div class="grid11"><a href="#" >NEUROLOGIST</a></div>
                    <div class="grid12"><a href="#" >DERMATOLOGY</a></div>
                    <div class="grid13"><a href="#" >ANAESTHESIOLOGY</a></div>
                    <div class="grid14"><a href="#" >NEPHROLOGY</a></div>
                    <div class="grid15"><a href="#" >PATHOLOGY</a></div>

                   
                </div></div>
                <div class="card">
                <div class="content">
                    <div class="front"><img src="ww.jpg" height="200px" width="430px"></div>
                    <div class="back">back</div>
                </div>
                </div>
                <div class="card">
                <div class="content">
                    <div class="front"><img src="rr.jpg" height="200px" width="430px"></div>
                    <div class="back">back</div>
                </div>
                </div>
                <div class="card">
                <div class="content">
                    <div class="front"><img src="dd.jpg" height="200px" width="430px"></div>
                    <div class="back">back</div>
                </div>
                </div>
                <div class="div8"><center><B>Contact Us<br>
							Lifesaver@gmail.com&nbsp&nbsp
                            <span style="color: red;font-size: 20px">&copy;<?php echo date('Y'); ?>-All Rights Reserved.</span>&nbsp&nbspDesigned by Amit Kumar</div></center></div>

        </main>
</body>
</html>