<!DOCTYPE html>
<html>
<?php $page = 'oc'; ?>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Organizing Committeee | SPACE 2024</title>

  <link rel="shortcut icon" href="../images/favicon.ico" type="">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="../css/slick-theme.css" />
  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
  <style>
    .card {
      margin-top: 20px;
      border: none;
      background-color: transparent;
    }

    .card-title {
      font-size: 20px;
      font-weight: bold;
    }

    .card-text {
      text-align: left;
      color: #473F3F;
      font-family: 'Red Hat Text', Sans-serif;
      font-size: 18px;
    }

    .card-img-top {
      width: 300px;
      height: 325px;
    }

    .span_head {
      font-weight: bold;
      color: #EF4D48;
    }
  </style>

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <!-- <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              SPACE 2024
            </span>
          </a>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Committee
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item active" href="../organizing-committee/index.php">Organizing Committee</a>
                    <a class="dropdown-item" href="../technical-program-committee/index.php">Technical Program
                      Committee</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Authors
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../call-for-papers/index.php">Call For Papers</a>
                    <a class="dropdown-item" href="../paper-submission/index.php">Paper Submission</a>
                    <a class="dropdown-item" href="../important-dates/index.php">Important Dates</a>
                    <a class="dropdown-item" href="../awards.php">Awards</a>
                    <a class="dropdown-item" href="../downloads/MAPCON-CFP.pdf" target="_blank" download="MAPCON-brochure">
                      Download CFP
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Student Program
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../phd-student-initiative/index.php">PhD Student Initiative
                      Program</a>
                    <a class="dropdown-item" href="../student-paper-award/index.php">Student Paper Award</a>
                    <a class="dropdown-item" href="../b.tech_m.tech-student-connect/index.php">B.Tech / M.Tech Student
                      Connect Initiative Program</a>
                    <a class="dropdown-item" href="../student-opportunities/index.php">Opportunities for Students</a>
                    <a class="dropdown-item" href="../job-opportunities/index.php">Job Opportunities</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../speakers.php"> Speakers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../sponsorship.php"> Sponsorship</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Schedule
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../tutorial.php">Tutorial</a>
                    <a class="dropdown-item" href="../workshop-1.php">Workshop-1</a>
                    <a class="dropdown-item" href="../workshop-2.php">Workshop-2</a>
                    <a class="dropdown-item" href="../downloads/MAPCON PROGRAM SCHEDULE.pdf" target="_blank">Conference</a>
                    <a class="dropdown-item" href="../downloads/MAPCON Presentation.pptx" target="_blank">Presentation
                      Template</a>
                    <a class="dropdown-item" href="../downloads/MAPCON_digital_poster.pptx" target="_blank">Poster Template (A0 size only)</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Register
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../register.php">MAPCON Registration
                    </a>
                    <a class="dropdown-item" href="https://forms.gle/FgXKFrPKpeaYxzFd7">Chapter Chair Meeting</a>
                    <a class="dropdown-item" href="../startup-initiative.php">Startup Initiative</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Venue
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../venue.php">Venue</a>
                    
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav> -->
        <?php include '../include/nav.php'; ?>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <!-- course section -->



  <!-- end course section -->
  <div class="content_bg">

    <section class="course_section layout_padding content-bg">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Organizing <span>Committee</span>
          </h2>
        </div>
        <hr style="border-bottom: 3px solid #2575fc; width: 50%;">

        <div class="heading_container span_body">

          <h2><span>Chief Patrons:</span></h2>

          <div class="row">

            <div class="card col-lg-4 col-md-4 col-sm-6">
              <center>
                <img class="card-img-top" src="./images/k_radhakrishnan.webp" alt="Card image">
              </center>
              <div class="card-body">
                <h4 class="card-title">K Radhakrishnan</h4>
                <p class="card-text">Former: Secretary, DoS / Chairman, ISRO</p>
              </div>
            </div>

            <div class="card col-lg-4 col-md-4 col-sm-6">
              <center>
                <img class="card-img-top" src="./images/somanath.webp" alt="Card image">
              </center>
              <div class="card-body">
                <h4 class="card-title">S. Somanath</h4>
                <p class="card-text">Secretary, DoS / Chairman ISRO</p>
              </div>
            </div>

            <div class="card col-lg-4 col-md-4 col-sm-6">
              <center>
                <img class="card-img-top" src="./images/satheesh.webp" alt="Card image">
              </center>
              <div class="card-body">
                <h4 class="card-title">G. Satheesh Reddy</h4>
                <p class="card-text">Secretary, DDR&D/ Chairman, DRDO</p>
              </div>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Patrons:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/sankaran.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">M Sankaran</h4>
              <p class="card-text">Director, URSC, ISRO</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/LRDE-Director.jpg" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Dr. P Radhakrishna</h4>
              <p class="card-text">Director, LRDE, DRDO</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">General Chairs:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Puneet-K.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Puneet Kumar Mishra</h4>
              <p class="card-text">Chair, IEEE AP-MTT Joint Bangalore Chapter</p>
            </div>
          </div>

          <!-- <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/mirnal.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Mrinal Kanti Mandal</h4>
              <p class="card-text">IIT KGP</p>
            </div>
          </div> -->

        </div>

  </div>
  </section>

  </div>

  <!-- sponsors section -->

  <?php include '../sponsors.php'; ?>

  <!-- end sponsprs section -->

  <div class="bottom_bg">
    <!-- info section -->
    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <hr>
          </div>
        </div>
        <div class="info_box ">
          <div class="col-md-2">
            <div class="row">
              <img src="../images/MAPCON-LOGO.png" width="200px">
            </div>
            <div class="row">
              <div class="social_box">
                <a href="https://m.facebook.com/IEEEMAPCON/" target="_blank">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/ieeemapcon?lang=en" target="_blank">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/in/ieee-mapcon-4a9845233/recent-activity/" target="_blank">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3 class="f-header">Connect With IEEE</h3>
            <ul>
              <li class="f-links"><a href="https://ieee.taleo.net/careersection/2/jobsearch.ftl?utm_source=mf&utm_campaign=taleo-jobs&utm_medium=footer&utm_term=taleo-jobs%20at%20ieee">Careers
                  at IEEE</a></li>
              <li class="f-links"><a href="https://ieeeaps.org/">IEEE APS</a></li>
              <li class="f-links"><a href="https://mtt.org/">IEEE MTT-S</a></li>
              <li class="f-links"><a href="https://aps-mtts.ieeebangalore.org/">AP/MTT Joint Bangalore Chapter</a></li>
              <li class="f-links"><a href="https://iln.ieee.org/public/TrainingCatalog.aspx">IEEE Learning Network</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="f-header">Membership</h3>
            <ul>
              <li class="f-links"><a href="https://www.ieee.org/membership/join/index.php?utm_source=dhtml_footer&utm_medium=hp&utm_campaign=join">Join</a>
              </li>
              <li class="f-links"><a href="https://www.ieee.org/membership/renew.php?utm_source=dhtml_footer&utm_medium=hp&utm_campaign=renew">Renew</a>
              </li>
              <li class="f-links"><a href="https://www.ieee.org/membership/benefits/index.php">Benefits</a></li>
              <li class="f-links"><a href="https://ieee-collabratec.ieee.org/?utm_source=dhtml_footer&utm_medium=hp&utm_campaign=collabratec-membership-list">IEEE
                  Collabratec</a></li>
              <li class="f-links"><a href="https://ieeebangalore.org/guide-to-join-ieee/">Guide to Join IEEE</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="f-header">Quick Links</h3>
            <ul>
              <li class="f-links"><a href="https://ieeespace.org/">Home</a></li>
              <li class="f-links"><a href="https://ieeespace.org/organizing-committee/">Organizing Committee</a></li>
              <li class="f-links"><a href="https://ieeespace.org/call-for-papers/">Call For Papers</a></li>
              <li class="f-links"><a href="https://ieeespace.org/sponsorship.php">Sponsorship</a></li>
              <li class="f-links"><a href="https://ieeespace.org/awards.php">Awards</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h3 class="f-header">Contact Info</h3>
            <div class="detail_box">
              <a href="https://ieeespace.org/contact.php" class="button-con">
                Contact and Support
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- end info_section -->

  </div>
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="footer_box">
        <p>
          Copyright &copy; 2022 SPACE2024 - IEEE Microwaves, Antennas and Propagation Conference | Powered by
          SPACE2024 - IEEE Microwaves, Antennas and Propagation Conference
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="../js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>