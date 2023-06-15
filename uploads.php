<?php
//check if form is submitted

$host = "localhost";
$user = "root";
$pass = "";
$db = "shondhan";
$con = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));

session_start();
$js_id = $_SESSION['id'];

echo "$js_id";





if (isset($_POST['submit']))
{
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
            $sql = 'select max(id) as id from cv';
            $result = mysqli_query($con, $sql);
            // if (count($result))
            // {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            // }
            // else
            //     $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO cv(js_id ,filename, created) VALUES('$js_id', '$filename', '$created')";
            mysqli_query($con, $sql);
            header("Location: profile_jobseeker.php?st=success");
        }
        else
        {
            header("Location: profile_jobseeker.php?st=error");
        }
    }
    else
        header("Location: profile_jobseeker.php");
}
?>