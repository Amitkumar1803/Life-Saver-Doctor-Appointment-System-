<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        #wrapper{
            background:darkred
            list-style: none;
            margin: 30px;
            padding: 30px;
            width: 600PX;
        }
        #wrapper li{
            display: flex;
            justify-content:flex-end;
            padding: 8px 0;
        }
        #wrapper li label{
             flex: 1;
        }
        #wrapper li input{
             flex: 1;
        }
        body{
            background-image: url(img11.jpg);
            text-align: center;
            color:maroon;
        }
        #h1{
            text-align: center;    
        }
    </style>
</head>
<body>
    <h1><B>APPOINTMENT BOOKED</B></h1>
    <center>
    <form action="">
        <ul id="wrapper">
            <li>
                <input type="text">
            </li>
               <li> <input type="text"></li>    
                   <li> <input type="text"></li>    
                       <li> <input type="date"></li>    
                           <li> <input type="tel"></li>    
                               <li> <input type="email"></li>    
                                   <li> <input type="DATE"></li> 
                               <li>
                                   <H2><label>MODE OF PAYMENT</label></H2></li>
                               <li><input type="radio" name="ABC">ONLINE <input type="radio" name="ABC">OFFLINE</li>
                               <LI><button type="submit">SUBMIT</button></LI>

                    </ul>
    </form>                
            </center>                                                                               
</body>
</html>