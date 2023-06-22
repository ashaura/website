<?php
    include("dbconnect.php");
    $intid = $_POST['intid'];
    $introle = $_POST['introle'];
    $intduration = $_POST['intduration'];
    $comid = $_POST['comid'];
    $update = mysqli_query($connect, " UPDATE `intern` SET Int_Role = '$introle', Int_Duration = '$intduration' WHERE Int_ID = '$intid' AND Com_ID = '$comid';");
    if($update)
    {
        echo '
        <script>
            alert("Internship details updated successfully.");
            window.location = "company.php";
        </script>
            '
            ;
    }
    else{
        echo '
        <script>
            alert("Some error has occured");
            window.location = "company.php";
        </scipt>
            ';
    }