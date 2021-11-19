<?php

include ("connection.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $dept=$_POST['dept'];
    $doc=$_POST['doc'];
    $dob=$_POST['dob'];
    $mob=$_POST['mob'];
    $mail=$_POST['mail'];
    $fix=$_POST['fix'];
    $query = "INSERT INTO  bookappo(name,dept,doc,dob,mob,mail,fix) VALUES('$name','$dept','$doc','$dob','$mob','$mail','$fix')";
    $run=mysqli_query($link, $query);
    if($run)
    {
        echo "DATA INSERTED";
    }
    else{
        echo mysqli_error($link);
    }
}
else{
    header("Location:adminpage.php");
}
?>


