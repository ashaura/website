<?php
    include("dbconnect.php");
    $stunam = $_POST['stunam'];
    $stuid  = $_POST['stuid'];
    $colid = $_POST['colid'];
    $stubranch = $_POST['stubranch'];
    $studomain = $_POST['studomain'];
    $intid = $_POST['intid'];
    $checkstuid = mysqli_query($connect,"SELECT Stu_ID from student where Stu_ID ='$stuid'");
    if(mysqli_num_rows($checkstuid)>0)
    {
        echo ('Student ID already exists');
    }
    else{
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $insert=mysqli_query($connect, "INSERT INTO `student` (Stu_ID, Stu_Name, Stu_Branch, Stu_Domain, Col_ID, Int_ID) VALUES ('$stuid', '$stunam', '$stubranch', '$studomain', '$colid','$intid');");
        }
        echo ('Student registered successfully');
    }
    if($insert){
        echo '
        <script>
            alert("Student registered successfully");
            window.location = "student.php";
        </script>
            '
            ;
    }
    else{
        echo '
        <script>
            alert("Submission unsuccessful and student already exists");
            window.location = "student.php";
        </script>
        '
        ;
    }