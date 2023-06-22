<?php
    include("dbconnect.php");
    $intid = $_POST['intid'];
    $delete = mysqli_query($connect,"DELETE FROM `feedback` WHERE Int_ID = '$intid';");
    if($delete){
        echo '
        <script>
            alert("Feedback deleted successfully.");
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