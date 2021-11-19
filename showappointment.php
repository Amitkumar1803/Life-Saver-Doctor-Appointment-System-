<?php
$link=mysqli_connect("localhost","root","","lifesaver");
$result= mysqli_query($link,"SELECT * FROM bookappo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpage.css">
    <title>Document</title>
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
        <div class="grid4"><br><br>

        <center><h1>ALL APPOINTMENT DETAILS</h1>
    <?php
    if (mysqli_num_rows($result)>0)
    {
        ?><br><br>
        <table border='3' style=border-radius:10px>
        <tr>
            <td> MOBILE</td>
            <td> NAME</td>
            <td> DEPARTMENT</td>
            <td> DOCTOR</td>
            <td> DOB</td>
            <td> MAIL</td>
            <td> DATE OF APPOINTMENT</td>
            <td> STATUS</td>
            <td> UPDATE</td>
            <td> DELETE</td>
    </tr></center>
    <?php
    $i=0;
    while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["mob"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["dept"]; ?></td>
            <td><?php echo $row["doc"]; ?></td>
            <td><?php echo $row["dob"]; ?></td>
            <td><?php echo $row["mail"]; ?></td>
            <td><?php echo $row["fix"]; ?></td>
            <td><?php echo $row["status"]; ?></td>
            <td><a href="update.php?mob=<?php echo $row["mob"]; ?>">Update</a></td>
            <td><a href="delete.php?mob=<?php echo $row["mob"]; ?>">Delete</a></td>

    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    
    <?php
    }
    else{
        echo "no result found";
    }
    ?>

        </div>
        
        <div class="grid7"><center><B>Contact Us-<br>
							Lifesaver@gmail.com <br>
                            <span style="color: red;font-size: 20px">&copy;<?php echo date('Y'); ?>-All Rights Reserved</span></div></center></div>
    </main>
 
</body>
</html>