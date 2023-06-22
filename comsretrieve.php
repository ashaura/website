<!DOCTYPE html>
<html lang="en">

<head>
  <title>Companies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="page.css" media="screen">
  <link rel="stylesheet" href="college.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="page.js" defer=""></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
</head>

<body>
  <br>
  <body style="background-color:#0d244b;"></body>
  <div class="container">
    <h2 style="color:#f1c50e;" >All the company details</h2>
    <p style="color:#f1c50e;">Click the view option to get the internship vacancy details of a particular company.</p>
    <br>
    <br>
    <table class="table table-light table-hover">
      <thead>
        <tr>
          <th>Company ID</th>
          <th>Company Name</th>
          <th>Company Admin</th>
          <th>Company Address</th>
          <th>Company Email</th>
          <th>View</th>
        </tr>
      </thead>
      
<?php
$servername="localhost";
$username="root";
$password="";
$database="internship";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql = "SELECT * FROM `company`";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
    echo '<tr>';
    echo '<td>'.$row['Com_ID'].'</td>';
    echo '<td>'.$row['Com_Name'].'</td>';
    echo '<td>'.$row['Com_Admin'].'</td>';
    echo '<td>'.$row['Com_Address'].'</td>';
    echo '<td>'.$row['Com_Address'].'</td>';
    echo "<td><a href='comretrieve.php?comid=$row[Com_ID]' <button type='button' class='u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-1'>VIEW</button></td>";
    echo '</tr>';
}

?>