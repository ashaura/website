<?php
$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,'internship');
if(isset($_GET['comid']))
{
$comid= $_GET['comid'];
$sql = "SELECT * FROM `company` NATURAL JOIN `intern` where Com_ID = '$comid'";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_assoc($result))
{
    echo '<tr>';
    echo '<td>'.$row['Com_ID'].'</td>';
    echo '<td>'.$row['Int_ID'].'</td>';
    echo '<td>'.$row['Int_Role'].'</td>';
    echo '<td>'.$row['Int_Duration'].'</td>';
    echo '</tr>';
}
if($result)
{
    echo "Succesful";
}
else
{
    echo "Error";
}
}
?>
