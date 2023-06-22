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
    <h2 style="color:#f1c50e;" >Specific student details</h2>
    <p style="color:#f1c50e;">This is the details of all the students. To get individual details, note the Student ID and then go to company page and choose "Get student details" option.</p>
    <br>
    <br>
    <table class="table table-light table-hover">
      <thead>
        <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Student Branch</th>
          <th>Intern ID</th>
          <th>Role</th>
          <th>Duration</th>
          <th>Company ID</th>
        </tr>
      </thead>
      
      <?php
      $connect = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connect,'internship');
      if(isset($_GET['colid']) || isset($_GET['stuid']))
      {
          $colid = $_GET['colid'];
          $stuid = $_GET['stuid'];
          $query = "SELECT * FROM `student` NATURAL JOIN `intern` where Col_ID = '$colid' AND Stu_ID = '$stuid'";
          $query_run = mysqli_query($connect,$query);
          while($row = mysqli_fetch_assoc($query_run))
          {
            echo '<tr>';
            echo '<td>'.$row['Stu_ID'].'</td>';
            echo '<td>'.$row['Stu_Name'].'</td>';
            echo '<td>'.$row['Stu_Branch'].'</td>';
            echo '<td>'.$row['Int_ID'].'</td>';
            echo '<td>'.$row['Int_Role'].'</td>';
            echo '<td>'.$row['Int_Duration'].'</td>';
            echo '<td>'.$row['Com_ID'].'</td>';
          }
      }  
      ?>
</table>

<?php mysqli_close($connect); 
?>

</body>
</html>