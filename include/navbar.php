<nav class="navbar navbar-expand-lg custom_nav-container ">
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
            <ul class="navbar-nav">
                <li class="nav-item <?php if($page== "index") echo "active"?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown <?php if($page== "tpc") echo "active"?> ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Committee
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if($page== "iac") echo "active"?>" href="../international-advisory/index.php">International Advisory Committee</a>
                        <a class="dropdown-item" href="./organizing-committee/index.php">Organizing Committee</a>
                        <a class="dropdown-item <?php if($page== "tpc") echo "active"?>" href="./technical-program-committee/index.php">Technical Program
                            Committee</a>
                        <!-- <a class="dropdown-item <?php if($page== "sc") echo "active"?>" href="./session-chairs.php">Session Chairs</a> -->
                    </div>
                </li>
                <!-- <li class="nav-item dropdown <?php if($page== "w1" || $page== "w2" || $page== "tutorial" || $page== "6g" || $page== "aa" || $page== "tt" || $page== "kn" || $page== "gan" || $page== "program" || $page== "yp" || $page== "ap") echo "active"?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Program
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if($page== "tutorial") echo "active"?>" href="./tutorial.php">Tutorial</a>
                        <a class="dropdown-item <?php if($page== "ppl") echo "active"?>" href="./program/Pathak_lectures.php">Prof. Pathak lectures</a>
                        <a class="dropdown-item <?php if($page== "w1") echo "active"?>" href="workshop-1.php">Workshop-1</a>
                        <a class="dropdown-item <?php if($page== "w2") echo "active"?>" href="workshop-2.php">Workshop-2</a>
                        <a class="dropdown-item <?php if($page== "program") echo "active"?>" href="program.php">Conference</a>
                        <a class="dropdown-item <?php if($page== "6g") echo "active"?>" href="./program/6g.php">Special Sessions on 6G</a>
                        <a class="dropdown-item <?php if($page== "aa") echo "active"?>" href="./program/antenna.php">Antenna Arrays</a>
                        <a class="dropdown-item <?php if($page== "gan") echo "active"?>" href="./program/gan.php">GaN ASIC</a>
                        <a class="dropdown-item <?php if($page== "kn") echo "active"?>" href="./program/keynotes.php">Keynotes</a> 
                        <a class="dropdown-item <?php if($page== "tt") echo "active"?>" href="./program/tedtalk.php">Banquet TED Talk</a>
                        <a class="dropdown-item <?php if($page== "yp") echo "active"?>" href="./program/yp.php">YP Activities</a>
                        <a class="dropdown-item <?php if($page== "wie") echo "active"?>" href="./program/wie.php">WIE Activities</a>
                        <a class="dropdown-item <?php if($page== "ap") echo "active"?>" href="./program/ap.php">AP-S & MTT-S SIGHT</a>
                        <a class="dropdown-item" href="downloads/MAPCON Presentation.pptx" target="_blank">Presentation
                            Template</a>
                    </div>
                </li> -->
                <li class="nav-item dropdown <?php if($page== "awards") echo "active"?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Authors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- <a class="dropdown-item <?php if($page== "ra") echo "active"?>" href="./registered-authors.php">Registered Authors</a> -->
                        <a class="dropdown-item" href="./call-for-papers/index.php">Call For Papers</a>
                        <a class="dropdown-item" href="./call-for-stc/index.php">Call For SPACE Technology Compendium</a>
                        <a class="dropdown-item" href="./call-for-3-mins-comp/index.php">3 Minute Thesis Competition</a>
                        <a class="dropdown-item" href="./paper-submission/index.php">Paper Submission</a>
                        <!-- <a class="dropdown-item" href="https://edas.info/index.php?c=32329">Submit a Paper</a> -->
                        <a class="dropdown-item" href="./important-dates/index.php">Important Dates</a>
                        <a class="dropdown-item <?php if($page== "awards") echo "active"?>" href="awards.php">Awards</a>
                        <!-- <a class="dropdown-item" href="./downloads/MAPCON-CFP.pdf" target="_blank" download="MAPCON-brochure">
                            Download CFP
                        </a> -->
                    </div>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Student Program
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./phd-student-initiative/index.php">PhD Student Initiative
                            Program</a>
                        <a class="dropdown-item" href="./student-paper-award/index.php">Student Paper Award</a>
                        <a class="dropdown-item" href="./b.tech_m.tech-student-connect/index.php">B.Tech / M.Tech Student
                            Connect Initiative Program</a>
                        <a class="dropdown-item" href="./student-opportunities/index.php">Opportunities for Students</a>
                        <a class="dropdown-item" href="./job-opportunities/index.php">Job Opportunities</a>
                    </div>
                </li> -->
                <li class="nav-item <?php if($page == "speakers") echo "active"?>">
                    <a class="nav-link" href="speakers.php">Speakers</a>
                </li>
                <li class="nav-item <?php if($page == "sponsorship") echo "active"?>">
                    <a class="nav-link" href="sponsorship.php"> Sponsorship</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page== "workshop" || $page== "start-up") echo "active"?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Workshop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if($page== "antenna") echo "active"?>" href="antenna.php">Workshop on Antenna Measurements
                        </a>
                        <a class="dropdown-item <?php if($page== "vlsi") echo "active"?>" href="vlsi.php">Workshop on Mastering VLSI RTL Design
                        </a>
                        <a class="dropdown-item <?php if($page== "milli") echo "active"?>" href="milli.php">Workshop on Create Physics based High-Fidelity Space Mission Using Simulation
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page== "register" || $page== "start-up") echo "active"?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Register
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if($page== "register") echo "active"?>" href="register.php">SPACE Registration
                        </a>
                        <!-- <a class="dropdown-item <?php if($page== "accomodation") echo "active"?>" href="accomodation-list.php">Accomodation List - Reva University
                        </a>
                        <a class="dropdown-item" href="https://forms.gle/FgXKFrPKpeaYxzFd7">Chapter Chair Meeting</a>
                        <a class="dropdown-item <?php if($page== "start-up") echo "active"?>" href="startup-initiative.php">Startup Initiative</a> -->
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page== "acc" || $page== "start-up") echo "active"?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accommodation
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if($page== "venue") echo "active"?>" href="venue.php">Conference Venue
                        </a>
                        <a class="dropdown-item <?php if($page== "acc") echo "active"?>" href="accomodation.php">Accommodation
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>