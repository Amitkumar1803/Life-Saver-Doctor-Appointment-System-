<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #wrapper{
        
            background-color: transparent;
            list-style: none;
            padding: 20px;
            width: 600PX;
        
        }
        #wrapper li{
            display: flex;
            justify-content:flex-end;
            padding: 12px 2px;
        

        
        }
        #wrapper li label{
             flex: 1;
             font-size: 33px;
            
        }
        #wrapper li input{
             flex: 1;
        }

        .grid{


}
body{
    background-color: wheat;

}

.box{
background-color: transparent;
height: 650px;
width: auto;
display: grid;

}

.button{
    position: absolute;
    top: 45%;
    left: 38%;
    
}
.btn{
    border: 3px solid #ffff00;
    color:black;
    text-decoration: none;
    padding: 12px 2px;
    transition: 0.5s ease;
    font-size: 15px;
    color:black;
}
.btn:hover{
    background-color:yellow;
    color: black;
}

.box .menu{
    background-color: floralwhite;
    height: 150px;
    width: 300px;
    row-gap: 1px;
    column-gap: 1px;

}
.box .menu .pop{
    position: absolute;
    margin-top: 45px;
    margin-left: 95px;
    font-size: 25px;
    border: 3px solid #800080;
    color:blue;
    text-decoration: none;
    padding: 15px 5px;
    transition: 0.5s ease;
}
.box .menu .pop:hover
{
    background-color:yellow;
    color: black; 
}

.box .menu .pop1{
    position: absolute;
    margin-top: 45px;
    margin-left: 25px;
    font-size: 21px;
    border: 3px solid #800080;
    color:blue;
    text-decoration: none;
    padding: 15px 5px;
    transition: 0.5s ease;
}
.box .menu .pop1:hover
{
    background-color:yellow;
    color: black; 
}
.box .menu .pop2{
    position: absolute;
    margin-top: 45px;
    margin-left: 65px;
    font-size: 25px;
    border: 3px solid #800080;
    color:blue;
    text-decoration: none;
    padding: 15px 5px;
    transition: 0.5s ease;
}
.box .menu .pop2:hover
{
    background-color:yellow;
    color: black; 
}
.box .menu .pop3
{
    position: absolute;
    margin-top: 10px;
    margin-left: 2px;
    font-size: 21px;
    
    color:blue;
    text-decoration: none;
    padding: 15px 5px;
    transition: 0.5s ease;
}


    </style>
</head>
<body>
<div class="box">
        <div class="menu menu1"><a href="index.php" class="pop">HOME</a></div>
        <div class="menu menu2"><a href="appointment.php" class="pop1">BOOK MY APPOINTMENT</a></div>
        <div class="menu menu3"><a href="doctor.php" class="pop2">DOCTORS</a></div>
        <div class="menu menu4"><a class="pop3"> <b>FIND A DOCTOR <BR><CENTER>&</CENTER>BOOK APPOINTMENT</b></a></div>
        <div class="button">
        <form method="get" action="result.php">
                    
                       
        
                                    MOBILE NUMBER
                                        <input type="number" name="mob">   
                                       
                                            
                                            <input type="submit" class="btn" name="track">
                                            
                                
                </form>                
            
    </div>
</div>
                
</body>
</html>
