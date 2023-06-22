<?php $db = mysqli_connect("localhost","root","","internship");?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="template">
  <title>Company</title>
  <link rel="stylesheet" href="page.css" media="screen">
  <link rel="stylesheet" href="company.css" media="screen">
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
  <meta property="og:title" content="company">
  <meta property="og:type" content="website">
</head>
</html>
<!-- Section 0 - Three picture carousel -->
<html>
<body class="u-body">
  <section class="u-carousel u-slide u-block-com1a-1" id="com_carousel_1" data-interval="5000" data-u-ride="carousel">
    <ol class="u-absolute-hcenter u-carousel-indicators u-block-com1a-2">
      <li data-u-target="#com_carousel_1" class="u-active u-grey-30" data-u-slide-to="0"></li>
      <li data-u-target="#com_carousel_1" class="u-grey-30" data-u-slide-to="1"></li>
      <li data-u-target="#com_carousel_1" class="u-grey-30" data-u-slide-to="2"></li>
    </ol>
    <div class="u-carousel-inner" role="listbox">
      <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src="" data-image-width="1440" data-image-height="550">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
      </div>
      <div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-2" src="" data-image-width="749" data-image-height="280">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
      </div>
      <div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="900" data-image-height="600">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
      </div>
    </div>
    <!-- Previous icon -->
    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-com1a-3" href="#com_carousel_1" role="button" data-u-slide="prev">
      <span aria-hidden="true">
        <svg viewBox="0 0 477.175 477.175">
          <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
        </svg>
      </span>
      <span class="sr-only">Previous</span>
    </a>
    <!-- Next icon -->
    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-com1a-4"
      href="#com_carousel_1" role="button" data-u-slide="next">
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
  <section class="u-clearfix u-palette-1-base u-section-2" id="com_carousel_2">
    <div class="u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
    <h2 class="u-text u-text-default u-text-1">Welcome !</h2>
    <p class="u-text u-text-2"> In order to build a successful career relavant work experience in the form of internship is vey cruical for every student. Therefore here is a flexible and easy internship management system that fits around. </p>
    
    <!-- Three columns -->
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-container-style u-grey-5 u-list-item u-radius-20 u-repeater-item u-shape-round u-list-item-1">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
            <h3 class="u-text u-text-default u-text-3">01</h3>
            <p class="u-text u-text-4">Click here to register and create an account for your company.</p>
            <a href="company.php#sec1-register" data-page-id=""
              class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-20 u-btn-1">REGISTER</a>
          </div>
        </div>
        <div class="u-container-style u-grey-5 u-list-item u-radius-20 u-repeater-item u-shape-round">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
            <h3 class="u-text u-text-default u-text-5">02</h3>
            <p class="u-text u-text-6">Give details of the internship, roles, and duration.</p>
            <a href="company.php#sec2-choose" data-page-id=""
              class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-20 u-btn-2">SET UP</a>
          </div>
        </div>
        <div class="u-container-style u-grey-5 u-list-item u-radius-20 u-repeater-item u-shape-round">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
            <h3 class="u-text u-text-default u-text-5">03</h3>
            <p class="u-text u-text-6">Update details of the internship, roles, and duration.</p>
            <a href="company.php#sec5-update" data-page-id=""
              class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-20 u-btn-2">UPDATE</a>
          </div>
        </div>
        <div class="u-container-style u-grey-5 u-list-item u-radius-20 u-repeater-item u-shape-round">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
            <h3 class="u-text u-text-default u-text-7">04</h3>
            <p class="u-text u-text-8">Provide feedback to the students who have completed internships.</p>
            <a href="company.php#sec3-get" data-page-id=""
              class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-20 u-btn-3">GET</a>
          </div>
        </div>
        <div class="u-container-style u-grey-5 u-list-item u-radius-20 u-repeater-item u-shape-round">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
            <h3 class="u-text u-text-default u-text-7">05</h3>
            <p class="u-text u-text-8">Delete feedback of the internships.</p>
            <a href="company.php#sec4-delete" data-page-id=""
              class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-20 u-btn-3">DELETE</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  </body>
  </html>

  <html>
  <body>
  <!-- Registration of Company -->
  <section class="u-clearfix u-palette-1-base u-section-3" id="sec1-register">
    <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-align-center u-container-style u-group u-radius-33 u-shape-round u-white u-group-1">
      <div class="u-container-layout u-container-layout-1">
        <h2 class="u-text u-text-default u-text-1">Register the company</h2>
        <div class="u-form u-form-1">
          <form action="comregister.php" method="POST">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form" style="padding: 0px;" source="custom" name="form-2">
            <div class="u-form-group u-form-name">
              <!-- Company ID -->
              <label for="com_ID" 
              class="u-label" 
              wfd-invisible="true">Company ID</label>
              <input type="text" 
              placeholder="Enter the Unique Company ID" 
              id="comid" 
              name="comid"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Company Name -->
            <div class="u-form-group u-form-partition-factor-2 u-form-group-2">
              <label for="com_id" 
              class="u-label" wfd-invisible="true">Company Name</label>
              <input 
              type="text" 
              placeholder="Enter Company Name" 
              id="comnam" 
              name="comnam"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10" 
              required="">
            </div>
            <!-- Company cordinator name -->
            <div class="u-form-group u-form-group u-form-partition-factor-2">
              <label for="com_admin" class="u-label" wfd-invisible="true">Cordinator Name</label>
              <input type="text" 
              placeholder="Enter company coordinator name" 
              id="comadmin" name="comadmin"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Location -->
            <div class="u-form-address u-form-group u-form-partition-factor-2 u-form-group-4">
              <label for="com_add" 
              class="u-label">Location</label>
              <input type="text" 
              placeholder="Enter company location" 
              id="comadd" 
              name="comadd"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Email -->
            <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-5">
              <label for="com_email" 
              class="u-label">Email id</label>
              <input type="com_email" 
              placeholder="Enter a valid email address" 
              id="comemail" 
              name="comemail"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Button -->
            <div class="u-align-center u-form-group u-form-submit">
              <br>
              <a href="sec1-register"
                class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-1">REGISTER</a>
              <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
            </div>
            <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Database updated. </div>
            <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Sorry! Retry. </div>
          </form>
          </form>
        </div>
      </div>
    </div>
  </section>
  </body>
  <html>
  <?php
    if(isset($_POST['submit']))
    {
      $comid = $_POST['comid'];
      $comnam  = $_POST['comnam'];
      $comadmin = $_POST['comadmin'];
      $comadd = $_POST['comadd'];
      $comema = $_POST['comema'];
      $qry = "insert into company values (null, '$comid', '$comnam', '$comadmin', '$comadd', '$comema')";
      if(mysqli_query($db, $qry))
      {
        echo '<script>alert("company registered successfully");</script>';
        header('location: company.php ');
  
      }
      else{
        echo mysqli_error($db);
      }
    }
  ?>

  <html>
  <body>
  <!-- Set up intership details -->
  <section class="u-clearfix u-palette-1-base u-section-4" id="sec2-choose">
    <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-align-center u-container-style u-group u-radius-33 u-shape-round u-white u-group-1">
      <div class="u-container-layout u-valign-top u-container-layout-1">
        <h2 class="u-text u-text-default u-text-1">Set up Internship details</h2>
        <br>
        <div class="u-form u-form-1">
          <form action="setinternship.php" method="POST">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form"
            style="padding: 0px;" source="custom" name="form-2">
            <!-- Company ID -->
            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-1">
              <label for="com_id" 
              class="u-label" 
              wfd-invisible="true">Company ID</label>
              <input type="text" 
              placeholder="Enter Unique ID" 
              id="comid" 
              name="comid"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Intern ID -->
            <div class="u-form-group u-form-partition-factor-3 u-form-group-3">
              <label for="int_id" class="u-label">Intern ID</label>
              <input type="text" 
              placeholder="Unique intern ID" 
              id="intid" name="intid"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Role -->
            <div class="u-form-group u-form-name u-form-partition-factor-3 u-form-group-4">
              <label for="int_role" class="u-label">Role</label>
              <input type="text" 
              placeholder="Available role for Internship" 
              id="introle" 
              name=" introle"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Duration -->
            <div class="u-form-group u-form-group-5">
              <label for="int" 
              class="u-label">Duration</label>
              <input type="int"
              pattern= "^([1-9]|1[012])$"
              placeholder="Enter duration in months" 
              id="intduration" 
              name="intduration"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Submit button -->
            <div class="u-align-center u-form-group u-form-submit">
              <br>
              <br>
              <a href="sec5-update"
                class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-1">SUBMIT</a>
              <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
            </div>
            <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Internship added</div>
            <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Sorry! Unable to add the internship</div>
            <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
          </form>
        </form>
        </div>
      </div>
    </div>
  </section>
  </body>
  <html>
  <?php
    if(isset($_POST['submit']))
    {
      $intid = $_POST['intid'];
      $introle = $_POST['introle'];
      $intduration = $_POST['intduration'];
      $comid = $_POST['comid'];
      $upquery = "insert into intern values (null, '$intid', '$introle', '$intduration', '$comid')";
      if(mysqli_query($db, $upquery))
      {
        echo '<script>alert("Internship added successfully");</script>';
        header('location: company.php ');
  
      }
      else{
        echo mysqli_error($db);
      }
    }
  ?>


<html>
  <body>
  <!-- Update intership details -->
  <section class="u-clearfix u-palette-1-base u-section-4" id="sec5-update">
    <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-align-center u-container-style u-group u-radius-33 u-shape-round u-white u-group-1">
      <div class="u-container-layout u-valign-top u-container-layout-1">
        <h2 class="u-text u-text-default u-text-1">Update Internship details</h2>
        <br>
        <div class="u-form u-form-1">
          <form action="updateinternship.php" method="POST">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form"
            style="padding: 0px;" source="custom" name="form-2">
            <!-- Company ID -->
            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-1">
              <label for="com_id" 
              class="u-label" 
              wfd-invisible="true">Company ID</label>
              <input type="text" 
              placeholder="Enter Unique ID" 
              id="comid" 
              name="comid"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Intern ID -->
            <div class="u-form-group u-form-partition-factor-3 u-form-group-3">
              <label for="int_id" class="u-label">Intern ID</label>
              <input type="text" 
              placeholder="Unique intern ID" 
              id="intid" name="intid"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Role -->
            <div class="u-form-group u-form-name u-form-partition-factor-3 u-form-group-4">
              <label for="int_role" class="u-label">Role</label>
              <input type="text" 
              placeholder="Available role for Internship" 
              id="introle" 
              name=" introle"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Duration -->
            <div class="u-form-group u-form-group-5">
              <label for="int" 
              class="u-label">Duration</label>
              <input type="int"
              pattern= "^([1-9]|1[012])$"
              placeholder="Enter duration in months" 
              id="intduration" 
              name="intduration"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <!-- Submit button -->
            <div class="u-align-center u-form-group u-form-submit">
              <br>
              <br>
              <a href="sec1-register"
                class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-1">UPDATE</a>
              <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
            </div>
            <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Internship added</div>
            <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Sorry! Unable to add the internship</div>
            <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
          </form>
        </form>
        </div>
      </div>
    </div>
  </section>
  </body>
  <html>
  <?php
    if(isset($_POST['submit']))
    {
      $intid = $_POST['intid'];
      $introle = $_POST['introle'];
      $intduration = $_POST['intduration'];
      $comid = $_POST['comid'];
      $intquery = "UPDATE `intern` SET Int_Role = '$introle', Int_Duration = '$intduration' WHERE Int_ID = '$intid' AND Com_ID = '$comid';";
      if(mysqli_query($db, $intquery))
      {
        echo '<script>alert("Internship details updated successfully");</script>';
        header('location: company.php ');
  
      }
      else{
        echo mysqli_error($db);
      }
    }
  ?>

  <html>
  <body>



  <html>
  <body>
<!-- Feedback  -->
  <section class="u-clearfix u-palette-1-base u-section-5" id="sec3-get">
    <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-container-style u-group u-radius-33 u-shape-round u-white u-group-1">
      <div class="u-align-center u-container-layout u-container-layout-1">
        <h2 class="u-align-center u-text u-text-1">Feedback&nbsp;</h2>
        <div class="u-form u-form-1">
          <form action="setfeedback.php" method="POST">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form"
            style="padding: 15px;" source="custom" name="form">
            <div class="u-form-group u-form-group-1">
              <label for="intern_id" class="u-label">Intern ID</label>
              <input type="text" 
              placeholder="Enter Intern ID" 
              id="intid" 
              name="intid"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <div class="u-form-group u-form-group-2">
              <label for="remark" class="u-label">Remark</label>
              <input type="text" 
              placeholder="Enter Remark" 
              id="remark" 
              name="remark"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="int" 
              class="u-label">Punctuality</label>
              <input type="int"
              pattern= "^[0]?[0-5]$|^5$"
              placeholder="Enter duration rating from 1 to 5" 
              id="punctuality" 
              name="punctuality"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
          </div>
          <div class="u-form-group u-form-group-4">
              <label for="int" 
              class="u-label">Communication</label>
              <input type="int"
              pattern= "^[0]?[0-5]$|^5$"
              placeholder="Enter duration rating from 1 to 5" 
              id="communication" 
              name="communication"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
          </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="sec1-register"
                class="u-active-palette-1-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-1">SUBMIT</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Feedback is sent.</div>
            <div class="u-form-send-error u-form-send-message">Sorry! Feedack wasnt sent, retry.</div>
          </form>
        </form>
        </div>
      </div>
    </div>
  </section>
  </section>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
      $remark = $_POST['remark'];
      $punctuality = $_POST['punctuality'];
      $communication = $_POST['communication'];
      $intid = $_POST['intid'];
      $feedqry = "insert into feedback values (null, '$remark', '$punctuality', '$communication', '$intid')";
      if(mysqli_query($db, $feedqry))
      {
        echo '<script>alert("Feedback successfully given");</script>';
        header('location: company.php ');
  
      }
      else{
        echo mysqli_error($db);
      }
    }
  ?>
 <html>
  <body>
<!-- Delete feedback  -->
  <section class="u-clearfix u-palette-1-base u-section-5" id="sec4-delete">
    <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-container-style u-group u-radius-33 u-shape-round u-white u-group-1">
      <div class="u-align-center u-container-layout u-container-layout-1">
        <h2 class="u-align-center u-text u-text-1">Delete feedback&nbsp;</h2>
        <div class="u-form u-form-1">
          <form action="delfeedback.php" method="POST">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form"
            style="padding: 15px;" source="custom" name="form">
            <div class="u-form-group u-form-group-1">
              <label for="intern_id" class="u-label">Intern ID</label>
              <input type="text" 
              placeholder="Enter Intern ID" 
              id="intid" 
              name="intid"
              class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10"
              required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="sec1-register"
                class="u-active-palette-1-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-1">DELETE</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Feedback is sent.</div>
            <div class="u-form-send-error u-form-send-message">Sorry! Feedack wasnt sent, retry.</div>
          </form>
        </form>
        </div>
      </div>
    </div>
  </section>
  </section>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
      $intid = $_POST['intid'];
      $delqry = "DELETE FROM `feedback` WHERE Int_ID = '$intid';";
      if(mysqli_query($db, $delqry))
      {
        echo '<script>alert("Feedback deleted successfully");</script>';
        header('location: company.php ');
  
      }
      else{
        echo mysqli_error($db);
      }
    }
  ?>