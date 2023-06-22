<?php
    include("dbconnect.php");
    $intid = $_POST['intid'];
    $introle = $_POST['introle'];
    $intduration = $_POST['intduration'];
    $comid = $_POST['comid'];
    $insert = mysqli_query($connect, "INSERT INTO `intern` (`Int_ID`, `Int_Role`, `Int_Duration`, `Com_ID`) VALUES ('$intid', '$introle', '$intduration', '$comid')");
    if($insert)
    {
        echo '
        <script>
            alert("Internship added successfully.");
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