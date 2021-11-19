<?php
session_start();
include("connection.php");
if(isset($_POST['login']))
{
    $id=$_POST['id'];
    $password=$_POST['password'];
    $query="Select * from login where id='$id' and password='$password'";
    $run=mysqli_query($link,$query);
    if(mysqli_num_rows($run)!=0)
    {
        $array=mysqli_fetch_assoc($run);
        $id=$array['id'];
        $_SESSION['id']=$id;
        header("Location:adminpage.php");
    }
else
{
    echo "wrong id/password";
}
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login1.css">
    
    <title>LOGIN PAGE</title>
    <style>
        #wrapper
        {
        
            list-style: none;
            margin: 60px;
            padding: 20px;
            width: 400PX;

        }

        #wrapper li
        {
            display: flex;
            justify-content:flex-end;
            padding: 15px 10px;
            font-size:20px;
    
        }
        
        #wrapper li input
        {
             flex: 1;
        }
        #wrapper li .btn {
            flex: 0.5;
            
        }
    </style>
</head>
<body>
    <hr>
    <center><h1>WELCOME TO LIFE SAVER</h1>
        <hr>
        <form method="POST">
                    <ul id="wrapper">
                        <li> ADMIN LOGIN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" placeholder="ADMIN ID"></li>
                                   <li>PASSWORD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       <input type="password" name="password" placeholder="PASSWORD">   </li>
                                 <li>  <div class="btn" >
                                         <input type="submit" value="LOGIN" name="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="button" value="CLEAR" name="clear"></LI>
    </div>
                                </ul>           
    
        <h2><footer>DESIGN BY:  AMIT KUMAR</footer><br></h2>
    
        </center>
    
    </form>
            
</body>             
</html> 

