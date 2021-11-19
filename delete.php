<?php
$link=mysqli_connect("localhost","root","","lifesaver");
$sql="DELETE FROM bookappo WHERE mob='" . $_GET['mob'] . "'";
if (mysqli_query($link,$sql)){
    echo "Record Deleted Successfully";
}
else{
    echo "Error Deleting Record: " . mysqli_error($conn);
}
mysqli_close($link);
?>