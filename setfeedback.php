<?php
    include("dbconnect.php");
    $remark = $_POST['remark'];
    $punctuality = $_POST['punctuality'];
    $communication = $_POST['communication'];
    $intid = $_POST['intid'];
    $insert = mysqli_query($connect,"INSERT INTO `feedback` (`Remark`, `Communication`, `Punctuality`, `Int_ID`) VALUES ('$remark', '$punctuality', '$communication', '$intid');");
    if($insert){
        echo '
        <script>
            alert("Feedback successfully given.");
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
        </script>
        '
            ;
    }
?>