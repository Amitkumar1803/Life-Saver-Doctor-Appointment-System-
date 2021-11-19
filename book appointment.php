<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book appointment.css">
    <title> Document </title>
    <style>
        #wrapper{
        
            list-style: none;
            margin: 30px;
            padding: 30px;
            width: 550PX;
        }
        #wrapper li{
            display: flex;
            justify-content:flex-end;
            padding: 8px 0;
            font-size:20px;
            
        }
        #wrapper li label{
             flex: 1;
        }
        #wrapper li input{
             flex: 1;
        }

    </style>
</head>
<body>
    <main>
        
            <div class="nav">
    
                <a href="index.php">HOME</a>
                <a href="department.php">DEPARTMENT</a>
                <a href="doctor.php">DOCTORS</a>
                <a class="active" href="appointment.php">APPOINTMENT</a>
                <a href="#">SERVICES</a>
                <a href="helpdesk.php">CONTACT</a>
                <a href="about.php">ABOUT</a>

        </div>
        <div class="div2">
            <div class="mm"><marquee scrollamount="10"><B>BELIEVE EVERYONE SHOULD HAVE EASY ACCESS TO GREAT TREATMENT</B></marquee></div></div>      
          
        <div class="div4">
                <form method="post"  action="add.php" >
                    <ul id="wrapper">
                        <li>
                            <label form="">ENTER PATIENT NAME</label>
                            <input type="text" name="name">
                        </li>
                        <li><label form="">DEPARTMENT</label>
                            <input type="text" name="dept"></li>    
                            <li><label form="">DOCTOR</label>
                                <input type="text" name="doc"></li>    
                                <li><label form="">DATE OF BIRTH</label>
                                    <input type="date" name="dob"></li>    
                                    <li><label form="">MOBILE NUMBER</label>
                                        <input type="tel" name="mob"></li>    
                                        <li><label form="">E-MAIL</label>
                                            <input type="email" name="mail"></li>    
                                            <li><label form="">DATE OF APPOINTMENT</label>
                                                <input type="DATE" name="fix"></li> 
                                            <LI><input type="submit" value="SAVE" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="button" value="CANCEL" name="cancel"></LI>
                                </ul>
                </form>                
                                                                                                       
        
       
                
    </main>
</body>
</html>