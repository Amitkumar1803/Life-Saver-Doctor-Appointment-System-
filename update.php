<?php
error_reporting(0);
$link=mysqli_connect('localhost','root','','lifesaver');
$mob = $_POST["mob"];
$name = $_POST["name"];
$dept = $_POST["dept"];
$doc = $_POST["doc"];
$dob = $_POST["dob"];
$mail = $_POST["mail"];
$fix = $_POST["fix"];
$status = $_POST["status"];
if(count($_POST)>0) {
mysqli_query($link,"UPDATE `bookappo` set name='$name', dept='$dept', doc='$doc', dob='$dob', mail='$mail', fix='$fix', status='$status' WHERE mob='$mob'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($link,"SELECT * FROM bookappo WHERE mob='" . $_GET['mob'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <center>
    <form method="POST" action="">
    <div>
        <?php if(isset($message)) { echo $message; } ?>

    <a href="showappointment.php">User List</a>
    <br>
    <br>
    <input type="hidden" name="mob" value="<?php echo $row['mob']; ?>">
    Name:<input type="text" name="name" value="<?php echo $row['name']; ?>">
    <br>
    Department:<input type="text" name="dept" value="<?php echo $row['dept']; ?>">
    <br>
    Doctor:<input type="text" name="doc" value="<?php echo $row['doc']; ?>">
    <br>
    Dob:<input type="date" name="dob" value="<?php echo $row['dob']; ?>">
    <br>
    Mail:<input type="text" name="mail" value="<?php echo $row['mail']; ?>">
    <br>
    Date of appointment:<input type="date" name="fix" value="<?php echo $row['fix']; ?>"><br>
    STATUS:<select name="status" required>
                             <option value="NOT SELECTED" >SELECT STATUS</option> 
                            <option value="APPROVE">APPROVE</option> 
                            <option value="DECLINE">DECLINE</option> 
</select>
  <br>  <br><input type="submit" name="submit" value="Submit" ><br>

</form>
</center>
</body>
</html>