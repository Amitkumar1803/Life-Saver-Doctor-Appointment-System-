<?php
//check if form is submitted
$con=mysqli_connect('localhost','root','','lifesaver');
if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $mail=$_POST['mail'];
    $msg=$_POST['msg'];
    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from tbl_files';
            $result = mysqli_query($con, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'upload/';
                
            $created = @date('Y-m-d H:m:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO tbl_files(filename, created, name, mob, mail, msg) VALUES('$filename', '$created', '$name', '$mob', '$mail', '$msg')";
            mysqli_query($con, $sql);
            header("Location: helpdesk.php?st=success");
        }
        else
        {
            header("Location: helpdesk.php?st=error");
        }
    }
    else
        header("Location: helpdesk.php");
}
?>