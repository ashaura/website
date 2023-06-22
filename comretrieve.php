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
    <h2 style="color:#f1c50e;" >Specific company details</h2>
    <p style="color:#f1c50e;">This is the companies. To get individual details, note the company ID and then go to company page and choose "Get Company details" option.</p>
    <br>
    <br>
    <table class="table table-light table-hover">
      <thead>
        <tr>
          <th>Company ID</th>
          <th>Intern ID</th>
          <th>Role</th>
          <th>Duration</th>
        </tr>
      </thead>
<?php
$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,'internship');
if(isset($_GET['comid']))
{
$comid= $_GET['comid'];
$sql = "SELECT * FROM `company` NATURAL JOIN `intern1` where Com_ID = '$comid'";
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
}
?>

</body>
</html>
