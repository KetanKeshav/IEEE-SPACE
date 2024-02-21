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

  <title>Organizing Committeee | MAPCON 2022</title>

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
              MAPCON 2022
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

          <h2><span>International Advisory Committee:</span></h2>

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

            <!-- <div class="card col-lg-4 col-md-4 col-sm-6">
              <center>
                <img class="card-img-top" src="./images/somanath.webp" alt="Card image">
              </center>
              <div class="card-body">
                <h4 class="card-title">S. Somanath</h4>
                <p class="card-text">Secretary, DoS / Chairman ISRO</p>
              </div>
            </div> -->
            <div class="card col-lg-4 col-md-4 col-sm-6">
                            <center>
                                <img class="card-img-top" src="./images/rahman.jpg" alt="Card image">
                            </center>
                            <div class="card-body">
                                <h4 class="card-title">Prof. Saifur Rahman</h4>
                                <p class="card-text">2023 IEEE President</p>
                            </div>
            </div>

            <div class="card col-lg-4 col-md-4 col-sm-6">
              <center>
                <img class="card-img-top" src="./images/kathleen.webp" alt="Card image">
              </center>
              <div class="card-body">
                <h4 class="card-title">Prof. Kathleen Kramer</h4>
                <p class="card-text">2025 IEEE President</p>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6">
              <center>
                <img class="card-img-top" src="./images/rob.webp" alt="Card image">
              </center>
              <div class="card-body">
                <h4 class="card-title">Dr. Rob S Fish, 2021-2022 Chair</h4>
                <p class="card-text">IEEE Industry Engagement Committee</p>
              </div>
            </div>
            <div class="card col-lg-4 col-md-4 col-sm-6">
              <center>
                <img class="card-img-top" src="./images/aylin.webp" alt="Card image">
              </center>
              <div class="card-body">
                <h4 class="card-title">Aylin Yener</h4>
                <p class="card-text">IEEE Division IX Director</p>
              </div>
            </div>
            <div class="card col-lg-4 col-md-4 col-sm-6">
              <center>
                <img class="card-img-top" src="./images/chris.webp" alt="Card image">
              </center>
              <div class="card-body">
                <h4 class="card-title">Chris  Schober</h4>
                <p class="card-text">IEEE Division V Director</p>
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

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/mirnal.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Mrinal Kanti Mandal</h4>
              <p class="card-text">IIT KGP</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">TPC Chairs:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/ashutosh.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ashutosh Kedar</h4>
              <p class="card-text">LRDE/DRDO, Bangalore<br>Secretary IEEE AP-MTT Joint Chapter Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/meenakshi.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Meenakshi Rawat</h4>
              <p class="card-text">IIT Roorkee</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Finance Chair:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/chandrakanta.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Chandrakanta Kumar</h4>
              <p class="card-text">URSC/ISRO</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">MAPCON Executive Committee:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/yahiya.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Yahia Antar</h4>
              <p class="card-text">Co-Chair</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/goutam.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Goutam Chattopadhyay</h4>
              <p class="card-text">Co-Chair</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/rajeev.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rajeev Jyoti</h4>
              <p class="card-text">Distinguished Scientist, Associate Director SAC, ISRO </p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/shiban.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Shibon Kaul</h4>
              <!-- <p class="card-text">Distinguished Scientist, Associate Director SAC, ISRO </p> -->
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/DGuha.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Debatosh Guha</h4>
              <!-- <p class="card-text">Distinguished Scientist, Associate Director SAC, ISRO </p> -->
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/k-j-vinoy.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">K J Vinoy</h4>
              <!-- <p class="card-text">Distinguished Scientist, Associate Director SAC, ISRO </p> -->
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Puneet-K.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Puneet K Mishra</h4>
              <!-- <p class="card-text">Distinguished Scientist, Associate Director SAC, ISRO </p> -->
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/jaleel.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Jaleel Akhtar</h4>
              <!-- <p class="card-text">Distinguished Scientist, Associate Director SAC, ISRO </p> -->
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/chinmoy.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Dr. Chinmoy Saha</h4>
              <p class="card-text">IIST, Trivandrum</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/sherry.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sherry Hess</h4>
              <!-- <p class="card-text">IIST, Trivandrum</p> -->
            </div>
          </div>

        </div>

        <h2><span class="span_head">Tutorials & FDP:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/k-j-vinoy.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">K J Vinoy</h4>
              <p class="card-text">IISc, Bangalore (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/k p ray.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">K P Ray</h4>
              <p class="card-text">DIAT Pune (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/c  j reddy.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">C J Reddy</h4>
              <p class="card-text">Altair, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Mahadevan.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">V Mahadevan</h4>
              <p class="card-text">Ex-URSC/PESIT, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/hema-singh.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Hema Singh</h4>
              <p class="card-text">NAL, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/amlendu.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Amlendu Patnaik</h4>
              <p class="card-text">IIT Roorkee</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Yogesh.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Yogesh Kumar Varma</h4>
              <p class="card-text">RCI Hyderabad</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Special Sessions:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/rajeev.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rajeev Jyoti</h4>
              <p class="card-text">SAC, Ahmedabad (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/prabhakar.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Prabhakar Pathak</h4>
              <p class="card-text">OSU Professor Emeritus
                & FIU visiting faculty</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Srinivasan.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">V V Srinivasan</h4>
              <p class="card-text">ISRO HQ, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/john-volakis.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">John Volakis</h4>
              <p class="card-text">Florida International Univ, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/m-m-sharma.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">M M Sharma</h4>
              <p class="card-text">NIT Jaipur</p>
            </div>
          </div>

          <!-- <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/dummy.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rajesh Chivukula</h4>
              <p class="card-text">Honeywell</p>
            </div>
          </div> -->

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/a-k-singh.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">A K Singh</h4>
              <p class="card-text">Ex-Director, DLRL</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Invited Talk:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/m-b-mahajan.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">M B Mahajan</h4>
              <p class="card-text">SAC Ahmedabad (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/a-r-harish.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">A R Harish</h4>
              <p class="card-text">IIT Kanpur (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/d-r-jahagirdar.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">D R Jahagirdar</h4>
              <p class="card-text">RCI Hyderabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/sarang.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sarang Pendharkar</h4>
              <p class="card-text">IIT Kharagpur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/amit-kumar.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Amit Kumar Singh</h4>
              <p class="card-text">IIT Jammu</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/chayan.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Chayan Roy</h4>
              <p class="card-text">IIT Kharagpur</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Workshop:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/kvs.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Kumar Vaibhav Shrivastava</h4>
              <p class="card-text">IIT Kanpur (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/satyajeet.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Satyajeet Chakravarti </h4>
              <p class="card-text">SAMEER Kolkata (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/senthil.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Senthil Kumar V.</h4>
              <p class="card-text">URSC, Bangalore </p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Sandeep.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sandeep Chaturvedi</h4>
              <p class="card-text">GATEC Hyderabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/karun.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Karun Rawat</h4>
              <p class="card-text">IIT Roorkee</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/nikhil.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Nikhil Arora</h4>
              <p class="card-text">IN-SPACe, Bangalore</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Industry Engagement:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/rajeev.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rajeev Jyoti</h4>
              <p class="card-text">SAC, Ahmedabad (Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Rod Waterhouse.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rod Waterhouse</h4>
              <p class="card-text">Octane Wireless, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Puneet-K.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Puneet Kumar Mishra</h4>
              <p class="card-text">URSC, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/tushar.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Tushar Sharma</h4>
              <p class="card-text">Renesas Electronics, USA</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">5G & Beyond:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/aloknath.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Aloknath De</h4>
              <p class="card-text">Samsung, Bangalore (Chair))</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/dummy.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Koichi Ito</h4>
              <p class="card-text">Chiba Univeristy, Japan</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/tim.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Tim Lee</h4>
              <p class="card-text">Boeing, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/venkat.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Venkata Vanukuru</h4>
              <p class="card-text">Global Foundries, Bangalore</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Sponsorship & Exhibit:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/ashutosh.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ashutosh Kedar</h4>
              <p class="card-text">LRDE, Bangalore (Co-Chair)<br>Secretary IEEE AP-MTT Joint Chapter Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/sanjeev.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sanjeev Kulshrestha</h4>
              <p class="card-text">SAC, Ahmedabad (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Purushothaman S.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Purushothaman S.</h4>
              <p class="card-text">URSC, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Debojyoti Choudhuri.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Debajyoti Chaudhari</h4>
              <p class="card-text">HCL, Chennai</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Govt of India Initiatives & Outreach:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/tushar.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Tushar Sharma</h4>
              <p class="card-text">Renesas Electronics, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Puneet-K.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Puneet Kumar Mishra</h4>
              <p class="card-text">URSC, Bangalore</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">WiE:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="../images/speakers/Madhumita.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Madhumita Ckakravarti</h4>
              <p class="card-text">CMSDS, Kolkata (Co-Chair)))</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Keerthi.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Keerthipriya N</h4>
              <p class="card-text">RRI, Bangalore, (Co-Chair)</p>
            </div>
          </div>

          <!-- <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/dummy.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Jolly Dhar</h4>
              <p class="card-text">SAC, Ahmedabad</p>
            </div>
          </div> -->

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/sherry.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sherry Hess</h4>
              <p class="card-text">Cadence, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/chandreyee.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Chandreyee Sarkar</h4>
              <p class="card-text">BIT Mesra</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/ruchita.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ruchita Sonak</h4>
              <p class="card-text">IIT Kharagpur</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">YP:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Debdeep Sarkar.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Debdeep Sarkar</h4>
              <p class="card-text">IISc, Bangalore (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Somak.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Dr. Somak Bhattacharya</h4>
              <p class="card-text">IIT BHU (Co-Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/arani.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Arani Ali Khan</h4>
              <p class="card-text">IIT Jodhpur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Suvadeep Choudhury.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Suvadeep Choudhari</h4>
              <p class="card-text">LNMIIT Jaipur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Raghvendra.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Raghvendra K Chaudhari</h4>
              <p class="card-text">IIT(ISM) Dhanbad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/gaurangi-gupta.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Gaurangi Gupta</h4>
              <p class="card-text">JPL, NASA</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">SIGHT:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/chinmoy.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Dr. Chinmoy Saha</h4>
              <p class="card-text">IIST, Thiruvanathapuram</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/jawad.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Jawad Y Siddiqui</h4>
              <p class="card-text">RMC, Canada</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/ajay.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ajay Poddar</h4>
              <p class="card-text">Synergy Microwave, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/gs-mani.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">G S Mani</h4>
              <p class="card-text">Pune, Ex-DIAT, Pune</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Student Paper Contest:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Soumyabrata Chakrabarty.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">S B Chakravarti</h4>
              <p class="card-text">IIT Gandhi Nagar</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Abhilasha Mishra.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Dr. Abhilasha Mishra</h4>
              <p class="card-text">MIT Aurangabad</p>
            </div>
          </div>

          <!-- <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/dummy.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Abhishek Chatterji</h4>
              <p class="card-text">IIT Kharagpur</p>
            </div>
          </div> -->

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Dinesh Yadav.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Dr. Dinesh Yadav</h4>
              <p class="card-text">MU Jaipur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Rashi Srivastava.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rashi Srivastava</h4>
              <p class="card-text">CUK, Gulbarga</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Publication:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Koushik Dutta.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Koushik Dutta</h4>
              <p class="card-text">NSCE, Kolkata (Chair)</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/ananya.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ananya De</h4>
              <p class="card-text">IIT Kharagpur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Pallab Gogoi.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Pallab Kumar Gogoi</h4>
              <p class="card-text">IIT Kharagpur</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">PhD Initiative:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Mahesh.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Mahesh Kumar A.</h4>
              <p class="card-text">RVCE, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Saptarshi Ghosh.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Saptarshi Ghosh</h4>
              <p class="card-text">IIT Indore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Suganthi.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Suganthi S.</h4>
              <p class="card-text">Christ University, Bangalore</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Local Organization:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/pawan-kumar.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Pawan Kumar B.</h4>
              <p class="card-text">URSC , Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/reena.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Reena Mamgain</h4>
              <p class="card-text">LRDE, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Abhinav.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Abhinav Kumar Jha</h4>
              <p class="card-text">URSC Bangalore</p>
            </div>
          </div>

          <!-- <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/dummy.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Shwetha Amit</h4>
              <p class="card-text">MSPL, Bangalore</p>
            </div>
          </div> -->

        </div>

        <h2><span class="span_head">Mentor-Mentee:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Chengappa.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Chengappa M R</h4>
              <p class="card-text">HPE, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/nipun.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Nipun Kumar Mishra</h4>
              <p class="card-text">GGU, Bilaspur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Madhuri Prasad.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Madhuri Prasad</h4>
              <p class="card-text">MSRIT</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Arvind.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Arvind Anant Bhat</h4>
              <p class="card-text">RVCE</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Website And IT:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/Ketan.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ketan Keshav</h4>
              <p class="card-text">Software Engineer, Gupshup, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/nagalekha.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Nagalekha Ramesh</h4>
              <p class="card-text">Execom, IEEE Bangalore Section</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/anzar.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Peerzada Anzar Azmat</h4>
              <p class="card-text">New Horizon College of Engineering, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/ruthvik.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">S J Ruthvik</h4>
              <p class="card-text">Dell technologies, Bangalore</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Publicity & Social Media:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/mohit.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Mohit Mishra</h4>
              <p class="card-text">IIT Guwahati</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/kishore.webp" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Kishor Kumar</h4>
              <p class="card-text">Robert Bosch, Bangalore</p>
            </div>
          </div>
          <!-- 
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/dummy.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Azharudeen</h4>
              <p class="card-text">IIT Kharagpur</p>
            </div>
          </div> -->

        </div>

      </div>

      <!-- <div class="row" style="margin: 50px;"> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Tutorials & FDP</span></h2>
          <p>
          <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Special Sessions</span></h2>
          <p>
          <ul>
            <li>Rajeev Jyoti, SAC, Ahmedabad (Co-Chair)</li>
            <li>Prabhakar Pathak, OSU, USA, (Co-Chair)</li>
            <li>V V Srinivasan, ISRO HQ, Bangalore</li>
            <li>John Volakis,Florida International Univ, USA</li>
            <li>M M Sharma, NIT Jaipur</li>
            <li>Rajeev Chivukula, Honeywell</li>
            <li>A K Singh, CAIR, Bangalore</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Invited Talk</span></h2>
          <p>
          <ul>
            <li>M B Mahajan, SAC Ahmedabad (Co-Chair)</li>
            <li>A R Harish, IIT Kanpur (Co-Chair)</li>
            <li>D R Jahagirdar, RCI Hyderabad</li>
            <li>Sarang Pendharkar, IIT Kharagpur</li>
            <li>Amit Kumar Singh, IIT Jammu</li>
            <li>Chayan Roy, IIT Kharagpur</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Workshop</span></h2>
          <p>
          <ul>
            <li>Kumar Vaibhav Shrivastava, IIT Kanpur (Co-Chair)</li>
            <li>Satyajeet Chakravarti, SAMEER Kolkata (Co-Chair)</li>
            <li>Senthil Kumar V., URSC, Bangalore </li>
            <li>Sandeep Chaturvedi, GATEC Hyderabad</li>
            <li>Karun Rawat, IIT Roorkee</li>
            <li>Nikhil Arora, IN-SPACe, Bangalore</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Industry Engagement</span></h2>
          <p>
          <ul>
            <li>Rajeev Jyoti, SAC, Ahmedabad (Chair)</li>
            <li>Rod Waterhouse, Octane Wireless, USA </li>
            <li>Puneet Kumar Mishra, URSC, Bangaloe</li>
            <li>Tushar Sharma, Renesas Electronics, USA</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>5G & Beyond</span></h2>
          <p>
          <ul>
            <li>Aloknath De, Samsung, Bangalore (Chair)</li>
            <li>Koichi, Ito, Chiba Univeristy, Japan</li>
            <li>Tim Lee, Boeing, USA</li>
            <li>Venkata Vanukuru, Global Foundries, Bangalore</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Sponsorship & Exhibit</span></h2>
          <p>
          <ul>
            <li>Ashutosh Kedar, LRDE, Bangalore (Co-Chair)</li>
            <li>Sanjeev Kulshrestha, SAC, Ahmedabad (Co-Chair)</li>
            <li>Purushothaman S., URSC, Bangalore</li>
            <li>Debajyoti Chaudhari, HCL, Chennai</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Govt of India Initiatives & Outreach</span></h2>
          <p>
          <ul>
            <li>Tushar Sharma, Renesas Electronics, USA</li>
            <li>Puneet Kumar Mishra, URSC, Bangalore</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>WiE</span></h2>
          <p>
          <ul>
            <li>MadhumitaCkakravarti, CMSDS, Kolkata (Co-Chair)</li>
            <li>Keerthipriya N, RRI, Bangalore, (Co-Chair)</li>
            <li>Jolly Dhar, SAC, Ahmedabad</li>
            <li>Sherry Hess, Cadence, USA</li>
            <li>Chandreyee Sarkar, BIT Mesra</li>
            <li>Ruchita Sonak, IIT Kharagpur</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>YP</span></h2>
          <p>
          <ul>
            <li>Debdeep Sarkar, IISc, Bangalore (Co-Chair)</li>
            <li>Somak Bhattacharya, IIT BHU (Co-Chair)</li>
            <li>Arani Ali Khan, IIT Jodhpur</li>
            <li>SuvadeepChoudhari, LNMIIT Jaipur</li>
            <li>Raghvendra K Chaudhari, IIT(ISM) Dhanbad</li>
            <li>Gaurangi Gupta, JPL, NASA</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>SIGHT</span></h2>
          <p>
          <ul>
            <li>ChinmoySaha, IIST, Thiruvanathapuram</li>
            <li>Jawad Y Siddiqui, RMC, Canada</li>
            <li>Ajay Poddar, Synergy Microwave, USA</li>
            <li>G S Mani, Pune, Ex-DIAT, Pune</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Student Paper Contest</span></h2>
          <p>
          <ul>
            <li>S B Chakravarti, IIT Gandhi Nagar</li>
            <li>Abhilasha Mishra, MIT Aurangabad</li>
            <li>Abhishek Chatterji, IIT Kharagpur</li>
            <li>Dinesh Yadav, MU Jaipur</li>
            <li>Rashi Srivastava, CUK, Gulbarga</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Publication</span></h2>
          <p>
          <ul>
            <li>Koushik Dutta, NSCE, Kolkata (Chair)</li>
            <li>Ananya De, IIT Kharagpur</li>
            <li>Pallab Kumar Gogoi, IIT Kharagpur</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>PhD Initiative</span></h2>
          <p>
          <ul>
            <li>Mahesh Kumar A., RVCE, Bangalore</li>
            <li>Saptarshi Ghosh, IIT Indore</li>
            <li>Suganthi S., Christ University, Bangalore</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Local Organization</span></h2>
          <p>
          <ul>
            <li>Pawan Kumar B., URSC , Bangalore</li>
            <li>Reena Mamgain, LRDE, Bangalore </li>
            <li>Abhinav Kumar Jha, URSC Bangalore</li>
            <li>Shwetha Amit, MSPL, Bangalore</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Mentor-Mentee</span></h2>
          <p>
          <ul>
            <li>Chengappa M R, HPE, Bangalore</li>
            <li>Nipun Kumar Mishra, GGU, Bilaspur</li>
            <li>Madhuri Prasad, MSRIT</li>
            <li>Arvind Anant Bhat, RVCE</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Website And IT</span></h2>
          <p>
          <ul>
            <li>Ketan Keshav, Software Engineer, Gupshup, Bangalore</li>
            <li>Nagalekha Ramesh, Execom, IEEE Bangalore Section</li>
            <li>Peerzada Anzar Azmat, New Horizon College of Engineering, Bangalore</li>
            <li>S J Ruthvik, Dell technologies, Bangalore</li>
          </ul>
          </p>
        </div> -->
      <!-- <div class="spon_body col-md-6">
          <h2><span>Publicity & Social Media</span></h2>
          <p>
          <ul>
            <li>Mohit Mishra, IIT Guwahati</li>
            <li>Kishor Kumar, Robert Bosch, Bangalore</li>
            <li>Azharudeen, IIT Kharagpur</li>
          </ul>
          </p>
        </div> -->
      <!-- </div> -->
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
              <li class="f-links"><a href="https://ieeemapcon.org/">Home</a></li>
              <li class="f-links"><a href="https://ieeemapcon.org/organizing-committee/">Organizing Committee</a></li>
              <li class="f-links"><a href="https://ieeemapcon.org/call-for-papers/">Call For Papers</a></li>
              <li class="f-links"><a href="https://ieeemapcon.org/sponsorship.php">Sponsorship</a></li>
              <li class="f-links"><a href="https://ieeemapcon.org/awards.php">Awards</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h3 class="f-header">Contact Info</h3>
            <div class="detail_box">
              <a href="https://ieeemapcon.org/contact.php" class="button-con">
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
          Copyright &copy; 2022 MAPCON2022 - IEEE Microwaves, Antennas and Propagation Conference | Powered by
          MAPCON2022 - IEEE Microwaves, Antennas and Propagation Conference
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