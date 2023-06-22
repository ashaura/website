<?php
$servername="localhost";
$username="root";
$password="";
$database="internship";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql = "SELECT * FROM `company` NATURAL JOIN `intern`";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
    echo $row['Int_ID'];
    echo $row['Int_Role'];
    echo $row['Int_Duration'];
}




?>