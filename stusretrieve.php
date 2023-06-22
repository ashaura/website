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
    <h2 style="color:#f1c50e;" >Students details</h2>
    <p style="color:#f1c50e;">This is the details of all the students. To get individual details, note the Student ID and then go to company page and choose "Get student details" option.</p>
    <br>
    <br>
    <table class="table table-light table-hover">
      <thead>
        <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Student Branch</th>
          <th>Student Domain</th>
        </tr>
      </thead>
      
      <?php
      $connect = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connect,'internship');
      if(isset($_GET['col_id']))
      {
          $col_id = $_GET['col_id'];
          $query = "SELECT * FROM `student` where Col_ID = '$col_id'";
          $query_run = mysqli_query($connect,$query);
          while($row = mysqli_fetch_assoc($query_run))
          {
            echo '<tr>';
            echo '<td>'.$row['Stu_ID'].'</td>';
            echo '<td>'.$row['Stu_Name'].'</td>';
            echo '<td>'.$row['Stu_Branch'].'</td>';
            echo '<td>'.$row['Stu_Domain'].'</td>';
            echo "<td><a href='sturetrieve.php?stuid=$row[Stu_ID]&colid=$row[Col_ID]' <button type='button' class='u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-1'>VIEW</button></td>";
            echo '</tr>';
        }
      }
      ?>
</table>

<?php mysqli_close($connect); 
?>

</body>
</html>