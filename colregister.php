<?php
    include("dbconnect.php");
    $colid = $_POST['colid'];
    $colnam  = $_POST['colnam'];
    $coladmin = $_POST['coladmin'];
    $coladd = $_POST['coladd'];
    $colema = $_POST['colema'];
    $checkcolid = mysqli_query($connect,"SELECT Col_ID from college where Col_ID ='$colid'");
    if(mysqli_num_rows($checkcolid)>0)
    {
        echo ('College ID already exists');
    }
    else{
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $insert = mysqli_query($connect, "INSERT INTO `college` (`Col_ID`, `Col_Name`,`Col_Admin`,`Col_Address`,`Col_Email`) VALUES ('$colid', '$colnam','$coladmin','$coladd','$colema');");
        }
        echo ('College registered successfully');
    }
    if($insert)
    {
        echo '
            <script>
            alert("College registered successfully");
            window.location = "college.php";
            </script>
            '
            ;
    }
    else
    {
        echo '
            <script>
            alert("Submission unsuccessful and college already exists");
            window.location = "college.php";
            </script>
            '
            ;
    }
    
?>
