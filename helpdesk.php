<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book appointment.css">
    <title>HELP DESK</title>
    <style>
    
        #wrapper{
            list-style: none;
            margin: 50px;
            padding: 80px;
            width: 600PX;
        }
        #wrapper li{
            display: flex;
            justify-content:flex-end;
            padding: 15px 5px;
            font-size:22px;
        }
        #wrapper li label{
             flex: 0.6;
        }
        #wrapper li input{
             flex: 1;
        }


        #container{
        width: 1000px;
        height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        

    }

    #inner{
        width: 800px;
        height: 500px;
        border-radius: 5PX;
        backdrop-filter: blur(10px);
        margin-left:400px;
    }

    </style>
</head>
<body>
<div id="container">

<div id="inner">

    <center>
    <form action="loadfile.php" method="post" enctype="multipart/form-data">
        <ul id="wrapper">
      <li> UPLOAD SUPPORT DOCUMENT <input type="file" name="file1" ></li>
            <li>

                <label form="">NAME :</label>
                <input type="text" name="name">
            </li>

                        <li><label>MOBILE NUMBER :</label>
                            <input type="tel" name="mob"></li>    
                            <li><label >E-MAIL :</label>
                                <input type="email" name="mail"></li>  

                               <li> <li><label>MESSAGE :</label>
                                <textarea name="msg" rows="4" cols="15" name="msg" required></textarea></li><br>

                          
            
           
                <input type="submit" name="submit" value="Upload" >
           
                           
                                
                    </ul>
    </form>   
         
   

    </center> 
    </div> 
    </div>           
</body>
</html>