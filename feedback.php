<?php
$link=mysqli_connect("localhost","root","","lifesaver");
$result= mysqli_query($link,"SELECT * FROM tbl_files");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpage.css">
    <title>FEEDBACK</title>
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

        <center><h1>FEEDBACK DETAILS</h1><br><br>
    <?php
    if (mysqli_num_rows($result)>0)
    {
        ?>
        <table border='2' cellspacing="10px" style=border-radius:20px>
        <tr>
            
            <td> NAME</td>
            <td> MOBILE</td>
            <td> MAIL</td>
            <td> MESSAGE</td>
            <td> DOCUMENT</td>
            <td> VIEW PDF</td>
            <td> UPDATE</td>
            <td> DELETE</td>
    </tr></center>
    <?php
    $i=0;
    while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
           
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["mob"]; ?></td>
            <td><?php echo $row["mail"]; ?></td>
            <td><?php echo $row["msg"]; ?></td>
            <td><?php echo $row["filename"]; ?></td>
            <td><a href="upload/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
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