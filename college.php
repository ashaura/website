<?php $db = mysqli_connect("localhost","root","","internship");?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="template">
  <title>College</title>
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
  <meta name="theme-color" content="#0d244b">
  <meta property="og:title" content="college">
  <meta property="og:type" content="website">
</head>

<!-- Section 0 - Three picture carousel -->
<body class="u-body">
  <section class="u-carousel u-slide u-block-col1a-1" id="col_carousel_1" data-interval="5000" data-u-ride="carousel">
    <ol class="u-absolute-hcenter u-carousel-indicators u-block-col1a-2">
      <li data-u-target="#col_carousel_1" class="u-active u-grey-30" data-u-slide-to="0"></li>
      <li data-u-target="#col_carousel_1" class="u-grey-30" data-u-slide-to="1"></li>
      <li data-u-target="#col_carousel_1" class="u-grey-30" data-u-slide-to="2"></li>
    </ol>
    <div class="u-carousel-inner" role="listbox">
      <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src="" data-image-width="1200" data-image-height="450">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
      </div>
      <div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-2" src="" data-image-width="1500" data-image-height="390">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
      </div>
      <div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="2560" data-image-height="853">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
      </div>
    </div>
    <!-- Previous icon -->
    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-col1a-3"
      href="#col_carousel_1" role="button" data-u-slide="prev">
      <span aria-hidden="true">
        <svg viewBox="0 0 477.175 477.175">
          <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
        </svg>
      </span>
      <span class="sr-only">Previous</span>
    </a>
    <!-- Next icon -->
    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-col1a-4"
      href="#col_carousel_1" role="button" data-u-slide="next">
      <span aria-hidden="true">
        <svg viewBox="0 0 477.175 477.175">
          <path
            d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z">
          </path>
        </svg>
      </span>
      <span class="sr-only">Next</span>
    </a>
  </section>
  
<!-- Section 1 - Welcome and main options -->
  <section class="u-clearfix u-palette-1-base u-section-2" id="col_carousel_2">
    <div class="u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
    <h2 class="u-text u-text-default u-text-1">Welcome !</h2>
    <p class="u-text u-text-2"> In order to build a successful career relavant work experience in the form of internship is vey cruical for every student. Therefore here is a flexible and easy internship management system that fits around. </p>
    <!-- Three columns -->
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-container-style u-grey-5 u-list-item u-radius-20 u-repeater-item u-shape-round u-list-item-1">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
            <h3 class="u-text u-text-default u-text-3">01</h3>
            <p class="u-text u-text-4">Click here to register and create an account for your college.</p>
            <a href="college.php#sec1-register" data-page-id=""
              class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-20 u-btn-1">REGISTER</a>
          </div>
        </div>
        <div class="u-container-style u-grey-5 u-list-item u-radius-20 u-repeater-item u-shape-round">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
            <h3 class="u-text u-text-default u-text-5">02</h3>
            <p class="u-text u-text-6">Choose a specific company that is providing internships for students</p>
            <a href="college.php#sec2-choose" data-page-id=""
              class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-20 u-btn-2">CHOOSE</a>
          </div>
        </div>
        <div class="u-container-style u-grey-5 u-list-item u-radius-20 u-repeater-item u-shape-round">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
            <h3 class="u-text u-text-default u-text-7">03</h3>
            <p class="u-text u-text-8">Details of the internships done by your student</p>
            <a href="college.php#sec2-choose" data-page-id=""
              class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-20 u-btn-3">GET</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Registration of College -->
  <section class="u-clearfix u-palette-1-base u-section-3" id="sec1-register">
    <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-align-center u-container-style u-group u-radius-33 u-shape-round u-white u-group-1">
      <div class="u-container-layout u-valign-top u-container-layout-1">
        <h2 class="u-text u-text-default u-text-1">Register the college</h2>
        <div class="u-form u-form-1">
        <form action="colregister.php" method="POST">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form"
            style="padding: 0px;" source="custom" name="form-2">
            <!-- College name -->
            <div class="u-form-group u-form-name">
              <label for="name-col1" 
              class="u-label" 
              wfd-invisible="true">College ID</label>
              <input type="text" 
              placeholder="Enter unique college id" 
              id="colid" 
              name="colid"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10" 
              required="">
            </div>
            <!-- College ID -->
            <div class="u-form-group u-form-partition-factor-2 u-form-name u-form-group-2">
              <label 
              for="phone-col1" 
              class="u-label" 
              wfd-invisible="true">College Name</label>
              <input 
              type="text" 
              placeholder="Enter College Name" 
              id="colnam" 
              name="colnam"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10" 
              required="">
            </div>
            <!-- College Admin name -->
            <div class="u-form-group u-form-partition-factor-2 u-form-name u-form-group-2">
              <label for="phone-10f2" 
              class="u-label" 
              wfd-invisible="true">College Admin</label>
              <input type="text" 
              placeholder="Enter Admin's name" 
              id="coladmin" 
              name="coladmin"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10" 
              required="">
            </div>
            <!-- College Address -->
            <div class="u-form-address u-form-group u-form-partition-factor-2 u-form-group-4">
              <label for="address-988e" 
              class="u-label">Address</label>
              <input type="text" 
              placeholder="Enter the college address" 
              id="coladd" 
              name="coladd"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10" 
              required="">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-5">
              <label for="email" 
              class="u-label">Email</label>
              <input type="email"
              placeholder="Enter the college email" 
              id="colema" 
              name="colema"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Submit button and pop-up for it -->
            <div>
              <br>
              <center>
                <button type="submit" class="u-align-center u-btn u-btn-round u-button-style u-palette-3-base u-radius-20 u-btn-1 u-form-submit">Submit</button>
              </center>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
<?php
  if(isset($_POST['submit']))
  {
    $colid = $_POST['colid'];
    $colnam  = $_POST['colnam'];
    $coladmin = $_POST['coladmin'];
    $coladd = $_POST['coladd'];
    $colema = $_POST['colema'];
    $qry = "insert into college values (null, '$colid', '$colnam', '$coladmin', '$coladd', '$colema')";
    if(mysqli_query($db, $qry))
    {
      echo '<script>alert("college registered successfully");</script>';
      header('location: college.php ');

    }
    else{
      echo mysqli_error($db);
    }
  }
?>

<!-- Veiwing list of companies or individual company -->
  <!-- Get all company details -->
<html>
  <body>
  <section class="u-clearfix u-palette-1-base u-section-5" id="sec2-choose">
    <div class="u-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-container-style u-group u-radius-33 u-shape-round u-white u-group-1">
      <div class="u-container-layout u-container-layout-1">
        <h2 class="u-align-center u-text u-text-1">Get companies detail</h2>
        <div class="u-form u-form-1">
        <form action="comsretrieve.php" method="POST">
          <form action="#" method="GET" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form"
            style="padding: 15px;" source="custom" name="form">
            <div class="u-form-group u-form-name u-form-group-1">
              <center>
                <label for="com_id" class="u-label">Click below to view the list of all the companies that provide internships.</label>
              </center>
            </div>
            <br>
            <div class="u-align-center u-form-group u-form-submit">
              <br>
              <a href="comsretrieve.php"
                class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-1">VIEW</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
          </form>
          </form>
        </div>
      </div>
    </div>
</body>
</html>


<!-- Get students details -->
<html>
  <body>
    <div class="u-container-style u-group u-radius-33 u-shape-round u-white u-group-2">
      <div class="u-container-layout u-container-layout-2">
        <h2 class="u-align-center u-text u-text-2">Get students detail</h2>
        <div class="u-form u-form-2">
          <form action="stusretrieve.php" method="GET">
          <form action="" method="GET" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form"
            style="padding: 15px;" source="custom" name="form">
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-3">
              <label for="col_id" class="u-label">College ID</label>
              <input type="text" 
              placeholder="Enter college ID" 
              id="col_id" name="col_id"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="stusretrieve.php"
                class="u-active-palette-1-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-2">VIEW</a>
              <input type="submit" value="search" class="u-form-control-hidden">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  </section>
  </body>
</html>