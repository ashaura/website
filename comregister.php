<?php
    include("dbconnect.php");
    $comid = $_POST['comid'];
    $comnam = $_POST['comnam'];
    $comadmin = $_POST['comadmin'];
    $comadd = $_POST['comadd'];
    $comema = $_POST['comemail'];
    $checkcomid = mysqli_query($connect,"SELECT Com_ID from company where Com_ID ='$comid'");
    if(mysqli_num_rows($checkcomid)>0)
    {
        echo ('Company ID already exists');
    }
    else{
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $insert = mysqli_query($connect,"INSERT INTO `company` (`Com_ID`, `Com_Name`,`Com_Admin`,`Com_Address`,`Com_Email`) VALUES ('$comid', '$comnam', '$comadmin', '$comadd', '$comema');");
        }
        echo ('Company registered successfully');
    }
    if($insert){
        echo '
        <script>
            alert("Company registered successfully");
            window.location = "company.php";
        </script>
            '
            ;
    }
    else{
        echo '
        <script>
            alert("Submission unsuccessful and company already exists");
            window.location = "company.php";
        </script>
        '
        ;
    }
?>