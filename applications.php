<?php
include "globalDB.php";
$con = $connection;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="">
  <meta name="keywords" content="bishop heber college,
    bishop heber college trichy,
    bishop heber college sports,
    bishop heber college sports website,
    sports website bishop heber college,
    sports bishop heber,
    sports bishop heber
    ">
  <meta http-equiv="refresh" content="1200">
  <!--Title-->
  <title>Bishop Heber College Sports</title>
  <!--ICON-->
  <link rel="shortcut icon" type="image/x-icon" href="./images/logos/bhc-logo.png">
  <!--CSS-->
  <link rel="stylesheet" href="./CSS/desktop view/AOS-animation-delay.css">
  <link rel="stylesheet" href="./CSS/desktop view/loading-bar.css">
  <link rel="stylesheet" href="./CSS/desktop view/swiper-bundle.min.css">
  <link rel="stylesheet" href="./CSS/desktop view/home-header.css" />
  <link rel="stylesheet" href="./CSS/desktop view/main-section-1.css" />
  <link rel="stylesheet" href="./CSS/desktop view/main-section-1-0.css">
  <link rel="stylesheet" href="./CSS/desktop view/main-section-1-1.css">
  <link rel="stylesheet" href="./CSS/desktop view/main-section-2.css" />
  <link rel="stylesheet" href="./CSS/desktop view/main-section-3.css" />
  <link rel="stylesheet" href="./CSS/desktop view/main-section-4.css" />
  <link rel="stylesheet" href="./CSS/desktop view/main-section-5.css">
  <link rel="stylesheet" href="./CSS/desktop view/main-section-6.css">
  <link rel="stylesheet" href="./CSS/desktop view/main-section-7.css">
  <link rel="stylesheet" href="./CSS/desktop view/main-section-8.css">
  <link rel="stylesheet" href="./CSS/desktop view/main-section-9.css">
  <link rel="stylesheet" href="./CSS/desktop view/main-section-10.css">
  <link rel="stylesheet" href="./CSS/desktop view/home-footer.css">
  <!--MEDIA QUERY-->
  <link rel="stylesheet" href="./CSS/media query/home-header-media-query.css" />
  <link rel="stylesheet" href="./CSS/media query/main-section-1-media-query.css" />
  <link rel="stylesheet" href="./CSS/media query/main-section-1-0-media-query.css">
  <link rel="stylesheet" href="./CSS/media query/main-section-1-1-media-query.css">
  <link rel="stylesheet" href="./CSS/media query/main-section-2-media-query.css" />
  <link rel="stylesheet" href="./CSS/media query/main-section-3-media-qyery.css" />
  <link rel="stylesheet" href="./CSS/media query/main-section-4-media-query.css" />
  <link rel="stylesheet" href="./CSS/media query/main-section-5-media-query.css">
  <link rel="stylesheet" href="./CSS/media query/main-section-6-media-query.css">
  <link rel="stylesheet" href="./CSS/media query/main-section-7-media-query.css">
  <link rel="stylesheet" href="./CSS/media query/main-section-8-media-query.css">
  <link rel="stylesheet" href="./CSS/media query/main-section-9-media-query.css">
  <link rel="stylesheet" href="./CSS/media query/home-footer-median-query.css">
  <!--Graphics-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />
  <link href="//db.onlinewebfonts.com/c/35ce0fb4890286271f9b3baae4a7dda8?family=Longline+Quart+FREE" rel="stylesheet" type="text/css" />
  <!--JS Links-->
  <script src="https://use.fontawesome.com/1744f3f671.js"></script>
  <script src="./script/swiper-bundle.min.js"></script>
  <!--JS Files-->
  <script src="./script/header.js" defer></script>
  <script src="./script/section-1-0.js" defer></script>
  <script src="./script/section-1-1.js" defer></script>
  <script src="./script/section-2.js" defer></script>
  <script src="./script/section-3.js" defer></script>
  <script src="./script/section-5.js" defer></script>
  <script src="./script/section-4.js" defer></script>
  <script src="./script/section-6.js" defer></script>
  <script src="./script/section-7.js" defer></script>
  <script src="./script/section-9.js" defer></script>
  <script src="./script/loading-bar.js" defer></script>
</head>

<body>
  <div class="loading-bar-container " id="lbcontainer">
    <img id="loading-bar-clg-logo" src="./images/logos/Physical-edcation-logo.png" alt="" >
    <div class="loading-bar-counter" id="lc">0</div>
  </div>

  <header class="header">

    <div class="header-container header-container-bg-light" id="header-container-div">
      <div class="nav-bar-image-container">
        <a href="https://bhc.edu.in/" target="_blank"><img class="college-logo-1" src="./images/logos/bhc-logo.png" alt="College Logo"  /></a>
        <a href="https://bhc.edu.in/" target="_blank"><img class="college-logo-2" src="./images/logos/bhc-logo-media-query-min.png" alt="College Logo"  /></a>
      </div>
      <nav class="header-nav-bar">
        <ul class="nav-bar-ul" id="show-cross-menu">
          <div class="nav-menu-bar-icon-2">
            <div class="menu-bar-icon-container" onclick="myFunction(this)">
              <div class="cross-bar-1"></div>
              <div class="cross-bar-2"></div>
              <div class="cross-bar-3"></div>
            </div>
          </div>
          <div class="nav-menu-bar-button">
            <div class="center">
              <a class="nav-menu-bar-button-a" href="#loaction-inquiry"><button id="nav-button" class="nav-bar-btn">
                  REGISTER ONLINE
                </button></a>
            </div>
          </div>
          <li class="nav-bar-li">


            <a class="nav-bar-a" href="#" style="color: red;"> HOME </a>


          </li>
          <li class="nav-bar-li">
            <a class="nav-bar-a" href="#location-about-us"> ABOUT US &nbsp; </a>
          </li>
          <li class="nav-bar-li">
            <a class="nav-bar-a" href="#location-academies">
              ACADEMIES &nbsp;<i class="fa fa-caret-right arrow-down" aria-hidden="true"></i>
            </a>
            <ul class="nav-bar-sub-ul" id="open-academies">
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-academies"> &#187;&nbsp;Cricket </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-academies"> &#187;&nbsp;Hockey </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-academies"> &#187;&nbsp;Archery </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-academies"> &#187;&nbsp;Football </a>
              </li>

            </ul>
          </li>

          <li class="nav-bar-li">
            <a class="nav-bar-a" href="#location-achievement">
              ACHIEVEMENTS &nbsp;<i class="fa fa-caret-right arrow-down" aria-hidden="true"></i>
            </a>
            <ul class="nav-bar-sub-ul" id="open-achievements">

              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="/achievements.php#international">
                  &#187;&nbsp;International Level
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="/achievements.php#bharathidasan">
                  &#187;&nbsp;Bharathidasan University Level
                </a>
              </li>

              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="/achievements.php#national">
                  &#187;&nbsp;National Level
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="/achievements.php#bhc-college">
                  &#187;&nbsp;Golden Jubilee Tournaments
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="achievements.php#others">
                  &#187;&nbsp;State and Other Level
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-bar-li">
            <a class="nav-bar-a" href="#location-infrastructure">
              INFRASTRUCTURE &nbsp;<i class="fa fa-caret-right arrow-down" aria-hidden="true"></i>
            </a>
            <ul class="nav-bar-sub-ul" id="open-infrastructure">
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-tennis-court-arena">
                  &#187;&nbsp;Tennis Court Arena
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-cricket-net">
                  &#187;&nbsp;Cricket Nets
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-volley-ball-court">
                  &#187;&nbsp;Volleyball Court
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-hockey-field-and-200-cum">
                  &#187;&nbsp;Hockey Field
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-basket-ball">
                  &#187;&nbsp;Basket Ball
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-hockey-field-and-200-cum">
                  &#187;&nbsp;200 Meter Track Field
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-indoor-stadium">
                  &#187;&nbsp;Indoor Stadium Sports Complex
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-yoga-room">
                  &#187;&nbsp;Yoga Meditation Room
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-BADMINTON-COURT">
                  &#187;&nbsp;Badminton Court
                </a>
              </li>

              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-ftb-crc">
                  &#187;&nbsp;Football Field Cum Cricket Ground
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-Semi-Indoor-Table">
                  &#187;&nbsp;Semi Indoor Table
                </a>
              </li>
              <li class="nav-bar-sub-li">
                <a class="nav-bar-sub-a" href="#location-Fitness-Centre">
                  &#187;&nbsp;Fitness Centre
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-bar-li">
            <a class="nav-bar-a" href="gallery.php"> GALLERY </a>
          </li>
          <li class="nav-bar-li">
            <a class="nav-bar-a" href="#location-news-and-events"> NEWS AND EVENTS </a>
          </li>
          <li class="nav-bar-li">
            <a class="nav-bar-a" href="#location-footer"> CONTACT US </a>
          </li>
        </ul>
      </nav>
      <div class="nav-menu-bar-icon-1" id="show-line-menu">
        <div class="menu-bar-icon-container" onclick="myFunction(this)">
          <div class="line-bar-1"></div>
          <div class="line-bar-2"></div>
          <div class="line-bar-3"></div>
        </div>
      </div>
      <div class="nav-bar-button-container" id="reg-btn">
        <a href="#loaction-inquiry" style="text-decoration: none;"><button class="nav-bar-btn">REGISTER
            ONLINE</button></a>
      </div>
    </div>


    <div class="side-header-image-container">
      <a id="header-welcome-btn">
        <div class="side-header-image-1">
          <div class="color">
            <p>WELCOME <span id="arrow-header">&#187;&nbsp;</span></p>
          </div>
        </div>
      </a>
      <a id="header-infra-btn">
        <div class="side-header-image-2">
          <div class="color">
            <p>INFRASTRUCTURE <span id="arrow-header">&#187;&nbsp;</span></p>
          </div>
        </div>
      </a>
      <a target="_blank" href="https://youtu.be/FiOYtzYSmC4?si=VmxGfFkFg6fs8gwQ" >
        <div class="side-header-image-3">
          <div class="color">
            <p>ANNUAL SPORTS<span id="arrow-header">&#187;&nbsp;</span></p>
          </div>
        </div>
      </a>
    </div>

    <div id="header-clg-text">
      <div class="welcome-text-container" data-aos="zoom-out">
        <div class="sports-logo-container">
          <img src="./images/logos/Physical-edcation-logo.png" alt=""  />
        </div>
        <div class="welcome-to-text">
          <p>WELCOME TO</p>
        </div>
        <div class="waviy">
          <span style="--i: 1">B</span>
          <span style="--i: 2">H</span>
          <span style="--i: 3">C</span>
        </div>
      </div>
      <div class="college-text">
        <h1>
          <span>Nationaly Re-accredited</span>
          <span>With
            'A' grade By NAAC </span>
          <span>With CGPA of</span>
          <span>3.58 Out Of 4</span>
        </h1>
      </div>
    </div>

    <div class="heading-marquee-container">
      <div>
        <?php
        $mqQ = "SELECT * FROM `pe_marquee_txt` ORDER BY ID DESC LIMIT 1";
        $mqQueryRes = mysqli_query($connection, $mqQ);

        //$row = mysqli_fetch_assoc($result)
        while ($i = mysqli_fetch_assoc($mqQueryRes)) {

        ?>
          <span><?php echo $i["text"] ?></span>
          <span><?php echo $i["text"] ?></span>
        <?php
        }

        ?>
      </div>
    </div>
    <div class="header-video-container hide-header-elements" id="header-video-container-elem">
      <video id="header-video-tag" data-tour-video-src="./video/header-videos-and-section-7-video/output360.mp4" data-infra-video-src="https://bhc.edu.in/newsite/BHC/Campus.mp4" >

      </video>
    </div>
    <div class="header-background-colour" id="header-background-colour-div">

    </div>
    <div id="fixed-contact-us" class="fixed-contact-us-icon-container">
      <img src="./images/icons/customer-service-icon.png" id="fixed-contact-us-img" alt="" >
      <h3 id="hidable-qc" class="hide">quick contacts</h3>
    </div>
    <div id="fixed-contact-us-popup-scr" class="fixed-contact-icon-popup-screen hide">
      <div class="fixed-contact-icon-popup-screen-items">
        <i class='fab fa-whatsapp-square' style='color:#52cb5f;'></i>
        <a href="https://wa.me/919443566300">whatsapp</a>

      </div>
      <div class="fixed-contact-icon-popup-screen-items">
        <i class="fa fa-envelope" style="color:#d93e05;text-align: center;"></i>
        <a href="mailto:palraj@bhc.edu.in">E-mail</a>
      </div>
      <div class="fixed-contact-icon-popup-screen-items">
        <img width="40px" height="40px" src="./images/logos/bhc-logo.png" alt="" >
        <a href="https://bhc.edu.in/index.php">BHC</a>
      </div>

    </div>
    <div class="back-to-header-icon-container">
      <a href="#"><img src="./images/icons/up-arrow-icon.png" alt=""></a>
    </div>


  </header>
  <main>
    <div id="staff-animation-height">
      <div id="hd-to-s3-height">
        <!--SECTION-1-->
        <section class="section-1">
          <div class="facultys-container">
            <div class="department-name-container">
              <h1>PHYSICAL EDUCATION FACULTY</h1>
            </div>
            <div class="faculty-details-container">
              <div class="faculty-1" data-aos="fade-right" data-aos-duration="700">
                <img src="./images/staffs/director of physical education.png" alt="Not Found"  />
                <div class="faculty-detail-1">
                  <div class="faculty-detail-h2" id="jjj">
                    <h2>Dr. A. PALRAJ M.A., M.P.Ed., Ph.D</h2>
                  </div>
                  <div class="position">
                    <p>Director of Physical Education</p>
                  </div>
                  <div class="num">
                    <p>
                      <object data="./images/icons/phone-icon.svg" width="14" height="14"></object>
                      &nbsp;+91 94435 66300
                    </p>
                  </div>
                  <div class="email">
                    <p>
                      <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:palraj@bhc.edu.in">palraj@bhc.edu.in</a>
                    </p>
                  </div>
                  <div class="social-container">
                    <div class="social facebook">
                      <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social twitter">
                      <i class="fab fa-twitter"></i>
                    </div>
                    <div class="social google"><i class="fab fa-google"></i></div>
                    <div class="social linkedin">
                      <i class="fab fa-linkedin-in"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faculty-2" data-aos="fade-left" data-aos-duration="700">
                <img style="border:4px solid rgb(255, 255, 255); border-top-left-radius:25px;border-bottom-right-radius:25px;" src="./images/staffs/assistant physical education director.jpg" alt="Not Found"  />
                <div class="faculty-detail-2">
                  <div class="faculty-detail-h2">
                    <h2>Miss S.Preetha M.PEd</h2>
                  </div>
                  <div class="position">
                    <p>Asst. Director of Physical Education</p>
                  </div>
                  <div class="num">
                    <p>
                      <object data="./images/icons/phone-icon.svg" width="14" height="14"></object>
                      &nbsp; +91 94435 66300
                    </p>
                  </div>
                  <div class="email">
                    <p>
                      <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:preethakarthu77@gmail.com">preethakarthu@bhc.edu.in</a>
                    </p>
                  </div>
                  <div class="social-container">
                    <div class="social facebook">
                      <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social twitter">
                      <i class="fab fa-twitter"></i>
                    </div>
                    <div class="social google"><i class="fab fa-google"></i></div>
                    <div class="social linkedin">
                      <i class="fab fa-linkedin-in"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--SECTION-1-1-->
        <section class="section-1-1" id="location-news-and-events" data-aos="zoom-in" data-aos-duration="700">
          <div class="news-and-events-container">



            <div class="news-container glowing">
              <div class="news-heading"><span>NEWS</span>
                <div class="view-more-news-papers"><a href="./flipbook-pdf/fullflipbook.html">More News</a>
                </div>

              </div>

              <div class="news-papers-container">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <ul class="news-paper-content">
                  <?php
                  $sql2 = "SELECT imageURL from pe_sportsimages";
                  $res2 = mysqli_query($connection, $sql2);

                  while ($i = mysqli_fetch_assoc($res2)) {


                  ?>
                    <li class="news-card">
                      <div class="news-img">
                        <img src=" <?php echo $i["imageURL"] ?>" alt="img" draggable="false" onclick="fullscreen1(this.src)" >

                      </div>
                    </li>

                  <?php
                  }


                  ?>
                </ul>
                <i id="right" class="fa-solid fa-angle-right"></i>
              </div>

              <div id="full-screen-news-paper">
                <img id="full-screen-image"  />
                <span id="close-news-paper" onclick="closefullscreen()">&times;</span>
              </div>
            </div>



            <div class="events-container glowing">
              <div class="events-heading">
                <h1>EVENTS</h1>
              </div>
              <div class="events-content">
                <div class="event-details-container ">
                  <div class="events-details-align marquee" id="marq">
                    <?php
                    $sql = "SELECT title,	content	,date,	location,	time,	createdAt from pe_sportsevets";
                    $result = mysqli_query($connection, $sql);

                    while ($r = mysqli_fetch_assoc($result)) {


                    ?>
                      <div class="events-details">

                        <h3><?php echo $r["title"] ?></h3>
                        <div class="events-details-row">
                          <h5>DATE : <?php echo $r["date"] ?></h5>
                          <h5>TIME : <?php echo $r["time"] ?></h5>
                          <h5>LOCATION : <?php echo $r["location"] ?></h5>
                        </div>
                        <h6>EVENT DETIALS:
                        </h6>
                        <p style="font-size: 18px;"><?php echo $r["content"] ?></p>
                      </div>
                    <?php
                    }

                    //$con->close();
                    ?>


        </section>


        <!--SECTION-2-->
        <section class="section-2" id="location-about-us">
          <div class="since-container">
            <div class="bg">
              <div class="content-container-1">
                <h1>DEPARTMENT OF PHYSICAL EDUCATION SINCE 1966</h1>
              </div>


              <div class="content-container-2">

                <div class="content-1" data-aos="fade-right" data-aos-duration="700">
                  <h2>BHC SPORTS <span id="ss">&#187;</span></h2>
                  <p>
                    The department being the forerunner in the field of sports and games has
                    produced many outstanding sports personalities and had brought laurels to
                    the nation by Nation and International Meet.The College
                    has an impressive fully air-conditioned Multipurpose Sports Complex, Fitness Center,Flood
                    lit Basketball and Volley Ball court . The Department organizes various State Level Invitation
                    Tournaments and has bagged various trophies in almost all the events for more than a
                    decade of years. The Department holds several academies to oversee promotion of sports
                    and games among youth and children. It also trains the specially abled persons for Paralympics .

                    <a href="#show-vision" onclick="Myfunctionrm(this)">
                      Read More<span id="se"><span class="se se-dot-1">.</span><span class="se se-dot-2">.</span><span class=" se se-dot-3">.</span></span></a>
                  </p>
                </div>
                <div class="content-2" id="logo-testi" data-aos="fade-left" data-aos-duration="700">
                  <img src="./images/logos/Physical-edcation-logo.png" alt=""  />
                </div>
              </div>

              <div class="content-container-3" id="show-vision">
                <div class="content-1-and-2-inner">
                  <div class="content-1-head" data-aos="fade-right" data-aos-duration="700">
                    <h2>VISION&nbsp;<span id="ss">&#187;</span></h2>
                    <p>
                      To impart an inclusive Physical Education to foster
                      sportsmanship, competitiveness and awareness of well- being
                      among the youth and make a significant contribution to the
                      creation of a healthy Nation.
                    </p>
                  </div>



                  <div class="content-2-head" data-aos="fade-up" data-aos-duration="700">
                    <h2>MISSION&nbsp;<span id="ss">&#187;</span></h2>
                    <p>
                      To improve the Holistic development of the youth and hone the
                      sports skills of the students through expert training and
                      competitions at all levels.
                    </p>
                  </div>
                </div>
                <div class="content-3-head" data-aos="fade-left" data-aos-duration="700">

                  <h2 style=" padding-bottom:0px; ">MOTTO&nbsp;<span id="ss">&#187;</span></h2>
                  <div class="content-3-inner">
                    <h1>ONE</h1>
                    <p>
                      <span>TEAM</span>
                      <span>SPIRIT</span>
                      <span>WIN</span>
                    </p>
                  </div>

                </div>
              </div>

              <div class="conter" id="show-read-more">
                <div class="content-container-4">
                  <div class="content-1">
                    <h2>
                      AWARD FOR BEST OUT GOING SPORTSMANS&nbsp;<span id="ss">&#187;</span>
                    </h2>
                    <p>
                      Awards for best outgoing sportsman one in U.G. and one in
                      P.G is presented in the college day celebrations.
                    </p>
                  </div>
                  <div class="content-2">
                    <h2>PART TIME JOBS&nbsp;<span id="ss">&#187;</span></h2>
                    <p>
                      Help seeking sportsmen are supported to find part time jobs in various
                      companies through Sports and Alumni Associations to meet
                      their financial needs.
                    </p>
                  </div>
                </div>
                <div class="content-container-5">
                  <div class="content-1">
                    <h2>
                      ANNUAL SPORTS FELICITATION DAY&nbsp;<span id="ss">&#187;</span>
                    </h2>
                    <p>
                      In order to appreciate and honor outstanding achievements in the Field of
                      sports, Annual Sports Felicitation Day is celebrated every
                      year since 2009 to honour the achievers in various fields of sports and games.
                    </p>
                  </div>
                  <div class="content-2">
                    <h2>
                      SUMMER COACHING CAMPS&nbsp;<span id="ss">&#187;</span>
                    </h2>
                    <p>
                      Every year summer coaching camps are conducted in the games
                      like football, basketball and chess for both boys and girls at
                      free of cost for a duration of three weeks.
                    </p>
                  </div>
                </div>
                <div class="content-container-6">
                  <div class="content-1">
                    <h2>RURAL SPORTS&nbsp;<span id="ss">&#187;</span></h2>
                    <p>
                      In order to encourage and identify potential rural students
                      in sports, tournaments in the games like kabaddi, volleyball, basketball are
                      conducted among the village students every year.
                    </p>
                  </div>
                  <div class="content-2">
                    <h2>
                      SPORTS ALUMNI ASSOCIATION&nbsp;<span id="ss">&#187;</span>
                    </h2>
                    <p>
                      The Sports Alumni Association is formed by the past elite
                      sports persons who meet on the Sports Alumni day and lend a supporting
                      hand to a number of sports activities conducted by the Department.
                    </p>
                  </div>
                </div>
                <div class="content-container-7">
                  <div class="content-1">
                    <h2>REFEREEING&nbsp;<span id="ss">&#187;</span></h2>
                    <p>
                      Students are encouraged to obtain license for refereeing in
                      various games for officiating matches these days are not only
                      remunerative but also an activity that fetches lot of fame.
                      Referee classes are arranged in the Department itself with
                      the help of Referee Instructors from various State
                      Associations, and the students are made to appear for the
                      exams conducted by the Sports Federations.The Department has a
                      track record of several students turned refrees in a score of years.

                    </p>
                  </div>
                  <div class="content-2">
                    <h2>HEALTH AWARENESS&nbsp;<span id="ss">&#187;</span></h2>
                    <p>
                      To create health awareness among staff and students,
                      weighing machines, Digital Blood Pressure Monitor, Height
                      Scale, Obesity Chart, simple physiotherapy kits are made available to the staff and
                      students enabling them to monitor their weight, blood
                      pressure, obesity status etc.<br />

                      As a social obligation, the public are permitted from 5.00
                      a.m to 7.00 a.m. every day for physical activities like
                      walking, jogging etc. inside the college play field free of cost.
                    </p>
                  </div>
                </div>
                <div class="content-container-8">
                  <div class="content-1">
                    <h2>HEBER ACADEMY&nbsp;<span id="ss">&#187;</span></h2>
                    <p>
                      With a vision to impart quality training to the aspiring
                      school students Heber cricket academy and Heber Chess
                      academy is run by the Department, through which a number of school
                      students have enrolled to get special coaching from the
                      experts.
                    </p>
                  </div>
                  <div class="content-2"></div>
                </div>
              </div>
              <div class="visit-container" data-aos="zoom-in" data-aos-duration="700">
                <h1 class="visit-heading">VISIT</h1>



                <nav>
                  <ul>
                    <a href="#location-sports-tour">
                      <li>SPORTS CAMPUS TOUR</li>
                    </a>
                    <a href="#location-coaches">
                      <li>COACHES</li>
                    </a>
                    <a href="#">
                      <li>RESEARCH</li>
                    </a>
                    <a onclick="toggleSpBulContainer()">
                      <li>SPORTS BULLETIN</li>


                    </a>
                    <a href="#location-footer">
                      <li>CONTACT US</li>
                    </a>
                  </ul>
                </nav>
                <div class="sports-bullet-container sports-bullet-container-show " id="sports-bullet-container-div">
                  <div class="sports-bullet">
                    <div class="sports-bullet-year">
                      <div class="sports-bullet-year-heading">
                        <div class="sports-bullet-year-h1">
                          <h1>YEARS</h1>
                        </div>
                        <div id="close-sports-bullet-2" onclick="toggleSpBulContainer()">&times;</div>
                      </div>
                      <ul>
                        <li data-iframe-source="./flipbook-pdf/flipbook-1.html" id="year-2016-2017-pdf" onclick=" changeIframeSrc(this)"><a>2016 - 2017</a>

                        </li>
                        <li data-iframe-source="./flipbook-pdf/flipbook-2.html" id="year-2016-2017-pdf" onclick=" changeIframeSrc(this)">
                          <a>2017 - 2018</a>
                        </li>
                        <li data-iframe-source="./flipbook-pdf/flipbook-3.html" id="year-2016-2017-pdf" onclick=" changeIframeSrc(this)"><a>2018 - 2019</a></li>
                        <li data-iframe-source="./flipbook-pdf/flipbook-4.html" id="year-2016-2017-pdf" onclick=" changeIframeSrc(this)"><a>2019 - 2020</a></li>
                        <li data-iframe-source="./flipbook-pdf/flipbook-5.html" id="year-2016-2017-pdf" onclick=" changeIframeSrc(this)"><a>2021 - 2022</a></li>
                        <li data-iframe-source="./flipbook-pdf/flipbook-6.html" id="year-2016-2017-pdf" onclick=" changeIframeSrc(this)"><a>2022 - 2023</a></li>
                      </ul>
                    </div>
                    <div class="sports-bullet-pdf">

                      <iframe id="iframe-sports-bullet-1" allowfullscreen="allowfullscreen" scrolling="no" src="./flipbook-pdf/flipbook-6.html" style="width: 95%; height:100%; border:none;"></iframe>
                      <div id="close-sports-bullet" onclick="toggleSpBulContainer()">&times;</div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </div>

        </section>
        <!--SECTION-3-->
        <section class="section-3">
          <div class="testimonial-container">
            <div class="testimonial-heading">
              <h1>TESTIMONIAL</h1>
            </div>

            <div class="testi-marquee-container">
              <div>
                <span>"Always work hard, never give up, and fight until the end because it's never really over until the
                  whistle blows."</span>
                <span>"Always work hard, never give up, and fight until the end because it's never really over until the
                  whistle blows".</span>
              </div>
            </div>

            <div class="testimonial">
              <div class="testimonial-left" data-aos="fade-right" data-aos-duration="700">
                <div class="testimonial-video-1">
                  <video class="testi-min-vids" src="./video/section-3-videos/1.mp4" width="260" height="200"></video>
                  <img class="testi-vid-play-btn" src="./images/icons/play-button-icon.png" alt="" >
                  <div class="testimonial-about-player">
                    <h3>Saratha</h3>
                    <h3>MBA</h3>
                  </div>
                </div>
                <div class="testimonial-video-2">
                  <video class="testi-min-vids" src="./video/section-3-videos/2.mp4" width="260" height="200"></video>
                  <img class="testi-vid-play-btn" src="./images/icons/play-button-icon.png" alt="" >
                  <div class="testimonial-about-player">
                    <h3>Lokeshwaran</h3>
                    <h3>B.A.Economics</h3>
                  </div>
                </div>
              </div>

              <div class="testimonial-center" data-aos="zoom-in" data-aos-duration="700">
                <section id="testim" class="testim ggg">
                  <div class="wrap">
                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
                    <ul id="testim-dots" class="dots">
                      <li class="dot active"></li>

                      <li class="dot"></li>

                      <li class="dot"></li>

                      <li class="dot"></li>
                    </ul>
                    <div id="testim-content" class="cont">
                      <div class="active">


                        <h2 class="testi-name" style="font-size: 2rem">Saratha</h2>
                        <p class="testi-regular">
                          Our college generously grants complete fee
                          waivers and offers comprehensive assistance to
                          support students in various ways and We prioritize gender-inclusive
                          sports education with proficient coaches catering to all students.
                        </p>
                      </div>

                      <div>

                        <h2 class="testi-name" style="font-size: 2rem">Akshaya</h2>
                        <p class="testi-regular">
                          Upon enrolling, I seized the opportunity to proudly represent the university's football team and
                          an experience that brought immense growth, unforgettable camaraderie, and a strong sense of achievement.
                        </p>
                      </div>

                      <div>

                        <h2 class="testi-name" style="font-size: 2rem">Abinaya</h2>
                        <p class="testi-regular">
                          Our college is proud to offer skilled coaches for both boys and girls, ensuring comprehensive athletic development and
                          the college offers a wide range of support services to ensure student success and holistic development
                        </p>
                      </div>

                      <div>
                        <h2 class="testi-name" style="font-size: 2rem">Lokeshwaran</h2>
                        <p class="testi-regular">
                          I'm studying in Bishop heber college right now and I'm super excited and
                          being supported while it comes to sports and I'm given full assistance needed
                          and I'm so happy to have professional coaches to get myself tuned and thanks to
                          Bishop Heber College for providing me this opportunity

                        </p>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

              <div class="testimonial-right" data-aos="fade-left" data-aos-duration="700">
                <div class="testimonial-video-1">
                  <video class="testi-min-vids" src="./video/section-3-videos/3.mp4" width="280" height="200"></video>
                  <img class="testi-vid-play-btn" src="./images/icons/play-button-icon.png" alt="" >
                  <div class="testimonial-about-player">
                    <h3>Akshaya</h3>
                    <h3>B.sc.Computer Science</h3>
                  </div>
                </div>
                <div class="testimonial-video-2">
                  <video class="testi-min-vids" src="./video/section-3-videos/4.mp4" width="280" height="200"></video>
                  <img class="testi-vid-play-btn" src="./images/icons/play-button-icon.png" alt="" >
                  <div class="testimonial-about-player">
                    <h3>Abinaya</h3>
                    <h3>B.A.Economics</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--SECTION-4-->
      <section class="section-4" id="section-4">

        <h1 class="heading-football">QUICK FACTS</h1>

        <div class="graphics-container-2">

          <img class="football-player-image" src="./images/section-background/section-4-football-player.png" alt="" >


          <div class="side-number-football left-to-right-football" id="football-number-1">
            <h1 id="number-anime">+</h1>
            <h3>Participants so far</h3>
          </div>
          <div class="side-number-football football-mid right-to-left-football" id="football-number-2">
            <h1 id="number-anime-2">+</h1>
            <h3>Medals Won</h3>
          </div>
          <div class="side-number-football left-to-right-football" id="football-number-3">
            <h1 id="number-anime-3">+</h1>
            <h3>Trained staffs</h3>
          </div>
          <div class="top-number-football right-to-left-football" id="football-number-4">
            <h1 id="number-anime-4">4.5+</h1>
            <h3>Rating</h3>
          </div>
          <div class="ball-conatoner" id="ball-image">
            <img src="./images/section-background/section-4-ball.png" style="opacity: 1;" alt="" >
          </div>


        </div>


      </section>




      <!--SECTION-5-->
      <section class="section-5" id="location-infrastructure">
        <div class="infrastructure-container">
          <div class="infrastructur-heading">
            <h1>INFRASTRUCTURE</h1>
          </div>
          <div class="slide-container swiper">
            <div class="slide-content">
              <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide " id="location-tennis-court-arena" data-aos="flip-left" data-aos-duration="1000">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/tennis.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">TENNIS COURT ARENA<br>&nbsp;</h2>

                      <button class="infra-button" id="show-infra-button">More Detials</button>

                    </div>

                    <div class="infra-frame show-frame-2" id="show-frame">
                      <div class="infra-head">
                        <h1>TENNIS COURT ARENA</h1>
                        <div class="close-icon" onclick="myFunction3(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>23.77 X 10.97 Mts</h3>
                          <h3>02</h3>
                          <h3>6240 Sq.ft</h3>
                          <h3>220</h3>
                          <h3>17632 Sq.ft </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card swiper-slide " id="location-cricket-net" data-aos="flip-up" data-aos-duration="1000">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/cricket net.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">CRICKET NETS<br>&nbsp;</h2>

                      <button class="infra-button" id="show-infra-button-2">More Detials</button>
                    </div>

                    <div class="infra-frame-2 show-frame-2-2" id="show-frame-2">
                      <div class="infra-head">
                        <h1>CRICKET NETS</h1>
                        <div class="close-icon-2" onclick="myFunction4(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>96 Ft X 15 Ft</h3>
                          <h3>04</h3>
                          <h3>--</h3>
                          <h3>--</h3>
                          <h3>50760 Sq.ft </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card swiper-slide " id="location-volley-ball-court" data-aos="flip-right" data-aos-duration="1000">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/volley ball.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">

                      <h2 class="infra-name">VOLLEY BALL COURT<br>(FLOODLIT)</h2>

                      <button class="infra-button" id="show-infra-button-3">More Detials</button>
                    </div>

                    <div class="infra-frame-3 show-frame-2-3" id="show-frame-3">
                      <div class="infra-head">
                        <h1>VOLLEY BALL COURT<br>(FLOODLIT)</h1>
                        <div class="close-icon-3" onclick="myFunction5(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>09 X 18 Mts</h3>
                          <h3>02</h3>
                          <h3>696 Sq.m</h3>
                          <h3>350</h3>
                          <h3>1020 Sq.m </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>




                <div class="card swiper-slide " id="location-hockey-field-and-200-cum">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/200 mts Track and field.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">200 MTS.TRACK CUM <br>HOCKEY FIELD</h2>

                      <button class="infra-button" id="show-infra-button-4">More Detials</button>
                    </div>

                    <div class="infra-frame-4 show-frame-2-4" id="show-frame-4">
                      <div class="infra-head">
                        <h1>200 MTS.TRACK CUM <br>HOCKEY FIELD</h1>
                        <div class="close-icon-4" onclick="myFunction6(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>100 X 82.30 Mts</h3>
                          <h3>01</h3>
                          <h3>--</h3>
                          <h3>--</h3>
                          <h3>8230 Sq.m </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="card swiper-slide " id="location-indoor-stadium">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/indoor stadium.jpg" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">INDOOR STADIUM SPORTS <br> COMPLEX</h2>

                      <button class="infra-button" id="show-infra-button-5">More Detials</button>
                    </div>

                    <div class="infra-frame-5 show-frame-2-5" id="show-frame-5">
                      <div class="infra-head">
                        <h1>INDOOR STADIUM SPORTS <br> COMPLEX</h1>
                        <div class="close-icon-5" onclick="myFunction7(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>29 X 19 Sq.m</h3>
                          <h3>--</h3>
                          <h3>--</h3>
                          <h3>500</h3>
                          <h3>551 Sq.m </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="card swiper-slide " id="location-yoga-room">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/yoga.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">YOGA MEDITATION ROOM <br>&nbsp;</h2>

                      <button class="infra-button" id="show-infra-button-6">More Detials</button>
                    </div>

                    <div class="infra-frame-6 show-frame-2-6" id="show-frame-6">
                      <div class="infra-head">
                        <h1>YOGA MEDITATION ROOM</h1>
                        <div class="close-icon-6" onclick="myFunction8(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>46 X 10 Sq.Ft</h3>
                          <h3>01</h3>
                          <h3>--</h3>
                          <h3>50</h3>
                          <h3>460 Sq.ft </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>




                <div class="card swiper-slide " id="location-basket-ball">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/basketball court.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">BASKETBALL COURT <br>(FLOODLIT)</h2>

                      <button class="infra-button" id="show-infra-button-8">More Detials</button>
                    </div>

                    <div class="infra-frame-8 show-frame-2-8" id="show-frame-8">
                      <div class="infra-head">
                        <h1>BASKETBALL COURT <br>(FLOODLIT)</h1>
                        <div class="close-icon-8" onclick="myFunction10(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>28 X 15 Mts</h3>
                          <h3>01</h3>
                          <h3>385 Sq.m</h3>
                          <h3>785</h3>
                          <h3>805 Sq.m </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="card swiper-slide " id="location-BADMINTON-COURT">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/Badminton.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">BADMINTON COURT<br> (GRADINER HOSTEL)</h2>

                      <button class="infra-button" id="show-infra-button-9">More Detials</button>
                    </div>

                    <div class="infra-frame-9 show-frame-2-9" id="show-frame-9">
                      <div class="infra-head">
                        <h1>BADMINTON COURT<br> (GRADINER HOSTEL)</h1>
                        <div class="close-icon-9" onclick="myFunction11(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>13.40 X 6.10 Mts</h3>
                          <h3>01</h3>
                          <h3>--</h3>
                          <h3>--</h3>
                          <h3>81.74 Sq.m </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="card swiper-slide ">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/Badminton.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">BADMINTON COURT <br>(Rt.rev.c.h.firbank indoor stadium)</h2>
                      <button class="infra-button" id="show-infra-button-12">More Detials</button>
                    </div>
                    <div class="infra-frame-12 show-frame-2-12" id="show-frame-12">
                      <div class="infra-head">
                        <h1>BADMINTON COURT (Rt.rev.c.h.firbank indoor stadium)</h1>
                        <div class="close-icon-12" onclick="myFunction14(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>13.40 X 6.10 Mts</h3>
                          <h3>03</h3>
                          <h3>--</h3>
                          <h3>--</h3>
                          <h3>245.22 Sq.m </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card swiper-slide " id="location-ftb-crc">
                  <div class="image-content">
                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/Football field.jpg" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">FOOTBALL FIELD CUM<br> CRICKET GROUND</h2>
                      <button class="infra-button" id="show-infra-button-13">More Detials</button>
                    </div>
                    <div class="infra-frame-13 show-frame-2-13" id="show-frame-13">
                      <div class="infra-head">
                        <h1>FOOTBALL FIELD CUM<br> CRICKET GROUND</h1>
                        <div class="close-icon-13" onclick="myFunction15(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>131.50 X 103.00 Mts</h3>
                          <h3>01</h3>
                          <h3>--</h3>
                          <h3>--</h3>
                          <h3>1544.5 Sq.m</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card swiper-slide " id="location-Semi-Indoor-Table">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images//infrastructure/table tennis.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">SEMI INDOOR TABLE <br> TENNIS BOARD</h2>

                      <button class="infra-button" id="show-infra-button-14">More Detials</button>
                    </div>

                    <div class="infra-frame-14 show-frame-2-14" id="show-frame-14">
                      <div class="infra-head">
                        <h1>SEMI INDOOR TABLE <br> TENNIS BOARD</h1>
                        <div class="close-icon-14" onclick="myFunction16(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>59 X 30 ft</h3>
                          <h3>05</h3>
                          <h3>--</h3>
                          <h3>--</h3>
                          <h3>1770 Sq.ft </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card swiper-slide " id="location-Fitness-Centre">
                  <div class="image-content">

                    <div class="card-image">
                      <div class="infra-view-more-image-colour"><a href="/gallery.php">More Images</a></div>
                      <img src="./images/infrastructure/Fitness center.JPG" alt="" class="card-img" >
                    </div>
                    <div class="card-content">
                      <h2 class="infra-name">FITNESS CENTER <br>&nbsp;</h2>

                      <button class="infra-button" id="show-infra-button-15">More Detials</button>
                    </div>

                    <div class="infra-frame-15 show-frame-2-15" id="show-frame-15">
                      <div class="infra-head">
                        <h1>FITNESS CENTER</h1>
                        <div class="close-icon-15" onclick="myFunction17(this)">
                          <div class="cross-1"></div>
                          <div class="cross-2"></div>
                          <div class="cross-3"></div>
                        </div>
                      </div>
                      <div class="infra-head-2">
                        <div class="frame-text">
                          <h3>Play Area Court Size</h3>
                          <h3>No.Of Courts </h3>
                          <h3>Moving Space </h3>
                          <h3>Galler Seating Capacity</h3>
                          <h3>Total Area </h3>
                        </div>
                        <div class="frame-text" id="infra-color-yellow">
                          <h3>60 X 45 Sq.ft</h3>
                          <h3>01</h3>
                          <h3>--</h3>
                          <h3>--</h3>
                          <h3>2700 Sq.ft </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

            </div>
            <div class="swiper-pagination swiper-nav-point"></div>
            <div class="swiper-button-next swiper-nav-button"></div>
            <div class="swiper-button-prev swiper-nav-button"></div>
          </div>

        </div>
    </div>


    <!--SECTION-1.0-->
    <section class="section-1-0" id="location-coaches">
      <div class="heading-staffs">
        <h1>COACHES</h1>
      </div>
      <div class="staffs-container">
        <div class="staff-items" id="animation-staff-item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
          <div class="staff-details">
            <div class="colour-staff">
              <div class="staff-details-2-show" onclick="myFunctionstaffopen()">
                <div class="personal-info-icon-container">
                  <img src="./images/icons/personal-info-icon.png">
                </div>
              </div>
              <img src="./images/staffs/staff-1.png" alt="" >
            </div>

          </div>



        </div>
        <div class="full-screen-staff-details-container" id="full-screen-staff-details-show-1">
          <div class="full-screen-staff-details">
            <div class="colour-staff-fullscreen">
              <img src="./images/staffs/staff-1.png" alt="" >
            </div>
            <div class="full-screen-staff-details-2-container">
              <div class="full-screen-up-staff-details">
                <div class="full-screen-staff-details-2-content-1">
                  <h2>NAME</h2>
                  <p>RAJADURAI</p>
                </div>
                <div class="full-screen-staff-details-2-content-2">
                  <h2>SPORTS</h2>
                  <p>ARCHERY</p>
                </div>
                <div class="full-screen-staff-details-2-content-3">
                  <h2>EXPIERIENCE</h2>
                  <p>10 YEARS</p>
                </div>
              </div>
              <div class="full-screen-staff-details-2-content-4">
                <h2>DESCRIPTION :</h2>
                <p>To be updated soon!</p>
              </div>
            </div>

          </div>
          <div class="full-screen-staff-details-close-conatiner">

            <a id="#full-screen-staff-details-close" onclick="myFunctionstaffclose()">&times;</a>
          </div>
        </div>


        <div class="staff-items" id="animation-staff-item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">
          <div class="staff-details">
            <div class="colour-staff">
              <div class="staff-details-2-show" onclick="myFunctionstaffopen2()">
                <div class="personal-info-icon-container">
                  <img src="./images/icons/personal-info-icon.png" width="24" height="24">
                </div>
              </div>
              <img src="./images/staffs/staff-2.png" alt="" >

            </div>
          </div>

        </div>
        <div class="full-screen-staff-details-container" id="full-screen-staff-details-show-2">
          <div class="full-screen-staff-details">

            <div class="colour-staff-fullscreen">
              <img src="./images/staffs/staff-2.png" alt="" >
            </div>
            <div class="full-screen-staff-details-2-container">
              <div class="full-screen-up-staff-details">
                <div class="full-screen-staff-details-2-content-1">
                  <h2>NAME</h2>
                  <p>VEERAGHAVAN</p>
                </div>
                <div class="full-screen-staff-details-2-content-2">
                  <h2>SPORTS</h2>
                  <p>CRICKET</p>
                </div>
                <div class="full-screen-staff-details-2-content-3">
                  <h2>EXPIERIENCE</h2>
                  <p>15 YEARS</p>
                </div>
              </div>
              <div class="full-screen-staff-details-2-content-4">
                <h2>DESCRIPTION :</h2>
                <p>To be updated soon!</p>
              </div>
            </div>
          </div>
          <div class="full-screen-staff-details-close-conatiner">
            <a id="#full-screen-staff-details-close" onclick="myFunctionstaffclose2()">&times;</a>
          </div>
        </div>

        <div class="staff-items" id="animation-staff-item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1500">
          <div class="staff-details">
            <div class="colour-staff">
              <div class="staff-details-2-show" onclick="myFunctionstaffopen3()">
                <div class="personal-info-icon-container">
                  <img src="./images/icons/personal-info-icon.png" width="24" height="24">
                </div>
              </div>
              <img src="./images/staffs/staff-3.png" alt="" >
            </div>
          </div>

        </div>
        <div class="full-screen-staff-details-container" id="full-screen-staff-details-show-3">
          <div class="full-screen-staff-details">
            <div class="colour-staff-fullscreen">
              <img src="./images/staffs/staff-3.png" alt="" >
            </div>
            <div class="full-screen-staff-details-2-container">
              <div class="full-screen-up-staff-details">
                <div class="full-screen-staff-details-2-content-1">
                  <h2>NAME</h2>
                  <p>SEETHARAMAN</p>
                </div>
                <div class="full-screen-staff-details-2-content-2">
                  <h2>SPORTS</h2>
                  <p>TENNIS</p>
                </div>
                <div class="full-screen-staff-details-2-content-3">
                  <h2>EXPIERIENCE</h2>
                  <p>20 YEARS</p>
                </div>
              </div>
              <div class="full-screen-staff-details-2-content-4">
                <h2>DESCRIPTION :</h2>
                <p>To be updated soon!</p>
              </div>
            </div>
          </div>
          <div class="full-screen-staff-details-close-conatiner">
            <a id="#full-screen-staff-details-close" onclick="myFunctionstaffclose3()">&times;</a>
          </div>
        </div>

        <div class="staff-items" id="animation-staff-item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="2000">
          <div class="staff-details">
            <div class="colour-staff">
              <div class="staff-details-2-show" onclick="myFunctionstaffopen4()">
                <div class="personal-info-icon-container">
                  <img src="./images/icons/personal-info-icon.png" width="24" height="24">
                </div>
              </div>
              <img src="./images/staffs/staff-4.png" alt="" >

            </div>
          </div>

        </div>
        <div class="full-screen-staff-details-container" id="full-screen-staff-details-show-4">
          <div class="full-screen-staff-details">
            <div class="colour-staff-fullscreen">
              <img src="./images/staffs/staff-4.png" alt="" >
            </div>
            <div class="full-screen-staff-details-2-container">
              <div class="full-screen-up-staff-details">
                <div class="full-screen-staff-details-2-content-1">
                  <h2>NAME</h2>
                  <p>MUTHU KUMAR</p>
                </div>
                <div class="full-screen-staff-details-2-content-2">
                  <h2>SPORTS</h2>
                  <p>FOOTBALL</p>
                </div>
                <div class="full-screen-staff-details-2-content-3">
                  <h2>EXPIERIENCE</h2>
                  <p>3 YEARS</p>
                </div>
              </div>
              <div class="full-screen-staff-details-2-content-4">
                <h2>DESCRIPTION :</h2>
                <p>To be updated soon!</p>
              </div>
            </div>
          </div>
          <div class="full-screen-staff-details-close-conatiner">
            <a id="#full-screen-staff-details-close" onclick="myFunctionstaffclose4()">&times;</a>
          </div>
        </div>
        <div class="staff-items" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="2000">
          <div class="staff-details">
            <div class="colour-staff">
              <div class="staff-details-2-show" onclick="myFunctionstaffopen5()">
                <div class="personal-info-icon-container">
                  <img src="./images/icons/personal-info-icon.png" width="24" height="24">
                </div>
              </div>
              <img src="./images/staffs/staff-5.png" alt="" >

            </div>

          </div>

        </div>
        <div class="full-screen-staff-details-container" id="full-screen-staff-details-show-5">
          <div class="full-screen-staff-details">
            <div class="colour-staff-fullscreen">
              <img src="./images/staffs/staff-5.png" alt="" >
            </div>
            <div class="full-screen-staff-details-2-container">
              <div class="full-screen-up-staff-details">
                <div class="full-screen-staff-details-2-content-1">
                  <h2>NAME</h2>
                  <p>VEERA SARAVANAN</p>
                </div>
                <div class="full-screen-staff-details-2-content-2">
                  <h2>SPORTS</h2>
                  <p>BASKETBALL</p>
                </div>
                <div class="full-screen-staff-details-2-content-3">
                  <h2>EXPIERIENCE</h2>
                  <p>12 YEARS</p>
                </div>
              </div>
              <div class="full-screen-staff-details-2-content-4">
                <h2>DESCRIPTION :</h2>
                <p>To be updated soon!p>
              </div>
            </div>
          </div>
          <div class="full-screen-staff-details-close-conatiner">
            <a id="#full-screen-staff-details-close" onclick="myFunctionstaffclose5()">&times;</a>
          </div>
        </div>
        <div class="staff-items" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1500">
          <div class="staff-details">

            <div class="colour-staff">
              <div class="staff-details-2-show" onclick="myFunctionstaffopen6()">
                <div class="personal-info-icon-container">
                  <img src="./images/icons/personal-info-icon.png" width="24" height="24">
                </div>
              </div>
              <img src="./images/staffs/staff-6.png" alt="" >

            </div>

          </div>

        </div>
        <div class="full-screen-staff-details-container" id="full-screen-staff-details-show-6">
          <div class="full-screen-staff-details">
            <div class="colour-staff-fullscreen">
              <img src="./images/staffs/staff-6.png" alt="" >
            </div>
            <div class="full-screen-staff-details-2-container">
              <div class="full-screen-up-staff-details">
                <div class="full-screen-staff-details-2-content-1">
                  <h2>NAME</h2>
                  <p>VIGNESH</p>
                </div>
                <div class="full-screen-staff-details-2-content-2">
                  <h2>SPORTS</h2>
                  <p>VOLLEYBALL</p>
                </div>
                <div class="full-screen-staff-details-2-content-3">
                  <h2>EXPIERIENCE</h2>
                  <p>2 YEARS</p>
                </div>
              </div>
              <div class="full-screen-staff-details-2-content-4">
                <h2>DESCRIPTION :</h2>
                <p>To be updated soon!</p>
              </div>
            </div>
          </div>
          <div class="full-screen-staff-details-close-conatiner">
            <a id="#full-screen-staff-details-close" onclick="myFunctionstaffclose6()">&times;</a>
          </div>
        </div>


        <div class="staff-items" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
          <div class="staff-details">
            <div class="colour-staff">
              <div class="staff-details-2-show" onclick="myFunctionstaffopen7()">
                <div class="personal-info-icon-container">
                  <img src="./images/icons/personal-info-icon.png" width="24" height="24">
                </div>
              </div>
              <img src="./images/staffs/staff-7.png" alt="" >

            </div>

          </div>

        </div>
        <div class="full-screen-staff-details-container" id="full-screen-staff-details-show-7">
          <div class="full-screen-staff-details">
            <div class="colour-staff-fullscreen">
              <img src="./images/staffs/staff-7.png" alt="" >
            </div>
            <div class="full-screen-staff-details-2-container">
              <div class="full-screen-up-staff-details">
                <div class="full-screen-staff-details-2-content-1">
                  <h2>NAME</h2>
                  <p>ASHWINI</p>
                </div>
                <div class="full-screen-staff-details-2-content-2">
                  <h2>SPORTS</h2>
                  <p>FOOTBALL</p>
                </div>
                <div class="full-screen-staff-details-2-content-3">
                  <h2>EXPIERIENCE</h2>
                  <p>1 YEARS</p>
                </div>
              </div>
              <div class="full-screen-staff-details-2-content-4">
                <h2>DESCRIPTION :</h2>
                <p>To be updated soon!</p>
              </div>
            </div>
          </div>
          <div class="full-screen-staff-details-close-conatiner">
            <a id="#full-screen-staff-details-close" onclick="myFunctionstaffclose7()">&times;</a>
          </div>
        </div>
        <div class="staff-items" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
          <div class="staff-details">
            <div class="colour-staff">
              <div class="staff-details-2-show" onclick="myFunctionstaffopen8()">
                <div class="personal-info-icon-container">
                  <img src="./images/icons/personal-info-icon.png" width="24" height="24">
                </div>
              </div>
              <img src="./images/staffs/staff-8.png" alt="" >

            </div>

          </div>

        </div>
        <div class="full-screen-staff-details-container" id="full-screen-staff-details-show-8">
          <div class="full-screen-staff-details">
            <div class="colour-staff-fullscreen">
              <img src="./images/staffs/staff-8.png" alt="" >
            </div>
            <div class="full-screen-staff-details-2-container">
              <div class="full-screen-up-staff-details">
                <div class="full-screen-staff-details-2-content-1">
                  <h2>NAME</h2>
                  <p>SATHISH KUMAR</p>
                </div>
                <div class="full-screen-staff-details-2-content-2">
                  <h2>SPORTS</h2>
                  <p>ATHELETICS</p>
                </div>
                <div class="full-screen-staff-details-2-content-3">
                  <h2>EXPIERIENCE</h2>
                  <p>9 YEARS</p>
                </div>
              </div>
              <div class="full-screen-staff-details-2-content-4">
                <h2>DESCRIPTION :</h2>
                <p>To be updated soon!</p>
              </div>
            </div>

          </div>
          <div class="full-screen-staff-details-close-conatiner">
            <a id="#full-screen-staff-details-close" onclick="myFunctionstaffclose8()">&times;</a>
          </div>
        </div>
      </div>
    </section>
    <!--SECTION-6-->
    <section class="section-6" id="location-academies">
      <div class="sports-name-container">
        <div class="in-door-container">
          <h1 class="in-door-title" id="in-title">INDOOR SPORTS</h1>
          <div class="grid-container-1">
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/1/TABEL TENNIS.jpg" alt="" >
                <h2>TABLE TENNIS</h2>

              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/1/BADMINTON.jpg" alt="" >
                <h2>BADMINTON</h2>
              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/1/chess.jpg" alt="" >
                <h2>CHESS</h2>
              </div>
            </div>


          </div>
        </div>


        <div class="out-door-container">
          <h1 class="out-door-title" id="out-title">OUTDOOR SPORTS</h1>
          <div class="grid-container-2">
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/2/cricket.jpg" alt="" >
                <h2>CRICKET</h2>

              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/2/BASKETBALL.jpg" alt="" >
                <h2>BASKETBALL</h2>
              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/2/FOOTBALL.jpg" alt="" >
                <h2>FOOTBALL</h2>
              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/2/VOLLEYBALL.jpg" alt="" >
                <h2>VOLLEYBALL</h2>
              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/2/HOCKEY.jpg" alt="" >
                <h2>HOCKEY</h2>
              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/2/TENNIS.jpg" alt="" >
                <h2>TENNIS</h2>
              </div>
            </div>

          </div>
        </div>
        <div class="summer-container">
          <h1 class="summer-title" id="summer-title">SUMMER CAMP</h1>
          <div class="grid-container-3">
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/3/FOOTBALL.jpg" alt="" >
                <h2>FOOTBALL</h2>
              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/3/BASKETBALL.jpg" alt="" >
                <h2>BASKETBALL</h2>
              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/1/BADMINTON.jpg" alt="" >
                <h2>BADMINTON</h2>
              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/3/CRICKET.jpg" alt="" >
                <h2>CRICKET</h2>
              </div>
            </div>
            <div class="grid-item">
              <div class="sports-card">
                <div class="colour-gird-sports"><a href="gallery.php">View Images</a></div>
                <img src="./images/sports-card/3/CHESS.jpg" alt="">
                <h2>CHESS</h2>
              </div>
            </div>


          </div>
        </div>

      </div>
    </section>
    <!--SECTION-7-->
    <section class="section-7" id="location-sports-tour" data-aos="zoom-out-up" data-aos-duration="700">

      <div class="college-video-heading">
        <h1>COLLEGE TOUR</h1>
      </div>


      <div class="college-video-container">
        <div class="video-tour-logo-1">
          <img src="./images/logos/bhc-logo.png" alt="" >
        </div>
        <div class="video-tour-video">
        <iframe style="height:100%; width:100%" src="https://www.youtube.com/embed/FiOYtzYSmC4?si=_np76YeVufCGvG7I" title="YouTube video player" frameborder="0" allow=" autoplay;  encrypted-media; picture-in-picture; " allowfullscreen></iframe>
        </div>
        <div class="video-tour-logo-2">
          <img src="./images/logos/Physical-edcation-logo.png" alt="" >

        </div>
      </div>
    </section>
    <!--SECTION-8-->
    <section class="section-8" id="location-achievement" data-aos="zoom-out-up" data-aos-duration="700">
      <div class="achievement-heading">
        <h1># ACHIEVEMENTS</h1>
      </div>
      <div class="achievement-container">

        <div class="achievement-card">
          <img src="./images/achievement/1.png" alt="" >

          <div class="about-achievement">
            <a href="achievements.php">
              <h1>Aravinda Prakash.R<br> </h1>
            </a>
            <h5></h5>
            <p class="achievement-description ">
              In 2017 Aravinda Decided to support the dreams of unpriviledged children like him and he opened an Academy called 'ARVIND'S ACADEMY OF BOXING' where he has been training 20+ unprivileged students for free of cost where they have also won many district and state level Championships.He has also played in different International Championship which are as followes:
              In 2016 he played 'INDO BHUTAN INTERNATIONAL GAMES' where he won the 1st place, 2017 Aravinda played 'INDO - NEPAL INTERNATIONAL GAMES' where again he gained 1st place.Later In 2018 he played 'WBC INTERNATIONAL CHAMPIONSHIP -THAILAND' where again he acquired 1st place.In 2019 Prakash played 'WBA INTERNATIONAL CHAMPIONSHIP' there he won at the 2nd place,again in 2019 Aravinda played for 'BEACH COMBACT INTERNATIONAL GAMES' held in Goa in India. In the recent years he played 'INTERNATIONAL SPORTS CARNIVAL UAE' which was held in Dubai where Aravinda won the 1st place and Won Bronze Medal in the 'International Pro-Boxing Championship (IPBC) held in Colombo in Srilanka-2021.

            </p>
          </div>
        </div>

        <div class="achievement-card">
          <img src="./images/achievement/2.png" alt="" >

          <div class="about-achievement">
            <a href="achievements.php">
              <h1>Selva Prabhu</h1>
            </a>
            <h5 style="color: red;">Triple jump silver in World Under-20 Championships in Colombia</h5>

            <p class="achievement-description">Mr. T. Selva Prabhu he is an Athelete and extraordinary sports player in our college. He was represented India at Grand Prix International athletic Meet held at Greece and bagged the gold medal in the Triple Jump Event for Men. And he won lots of events. Especially, he was awarded as the best Asian U20 Male Athlete of the year 2023 honoured at Thailand on the 50th celebrations of the Asian Athletic Association.

            </p>



          </div>
        </div>
        <div class="achievement-card">
          <img src="./images/achievement/3.png" alt="" >

          <div class="about-achievement">
            <a href="achievements.php">
              <h1>Fide Master Nawin JJ Won Gold medal in SGFI 2020</h1>
            </a>
            <h5 style="color: red;">RATING : 2305</h5>
            <p class="achievement-description">
              Playing a lot of international events. He became a Fidemaster of chess after crossing the rating of 2350+ within a span of 3 years. He won lot of district,state events. In the year, 2021 he showed his debut in the International events at Spain and Serbia, where he played extraordinarly well in the game and won 1st prize in his rating category. He looks forward to become an International master in the upcoming years.

            </p>
          </div>
        </div>


      </div>
      <div class="achievement-button-container">
        <a href="achievements.php"><button class="pure-material-button-contained" onclick="sound()"> view more</button></a>
      </div>

    </section>
    <!--SECTION-9-->
    <section class="section-9" id="loaction-inquiry">

      <fieldset>
        <legend>
          <h1>INQUIRY</h1>
        </legend>
        <form onsubmit="return formSubmit(event)" name="inq-form" id="inq-frm" method="post" action="insert.php">
          <div class="form-grid">
            <span class="group">
              <select required id="category" name="category">
                <option value="Styding At select">Styding At</option>
                <option value="college">College</option>
                <option value="school">School</option>
              </select>
            </span>

            <input required type="text" id="name-inp-tag" name="fullname" placeholder="Enter Full Name" />
            <input required type="tel" id="contact" name="contact" placeholder="Mobile Number">
            <input required type="email" name="email" placeholder="Email" max="" />
            <input required type="text" id="dob" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')">
            <input required type="number" name="age" placeholder="Age" />
            <textarea required autocomplete="address-line1" id="address" name="address" placeholder="Address"></textarea>

            <span class="group">
              <select required id="gender" name="gender">
                <option value="gender select">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </span>


            <div id="vary">
              <div id="college" class="gap">
                <label style="font-size: 2rem;" for="gender">College Detials</label>
                <input required type="text" id="college-roll-number" name="college-roll-number" placeholder="Enter Your Roll Number" />
                <input required type="text" placeholder="Department" name="Department" />
                <input required type="text" placeholder="Batch Year" name="BatchYear">

              </div>
              <div id="school" class="gap">
                <label style="font-size: 2rem;" for="gender">School Detials</label>
                <input required type="text" name="school-class" placeholder="Enter your school name" />
                <input required type="text" name="school-name" placeholder="Enter your Class">
                <textarea name="school-address" placeholder="Enter your school Address"></textarea>
              </div>
            </div>


            <div class="gap">
              <label style="font-size: 2rem;">Parent/Guardian Info</label>
              <select required name="par-or-gaurd" id="par-or-gaurd">
                <option>Select Parent/Guardian</option>
                <option value="Parent">Parent</option>
                <option value="Guardian">Guardian</option>
              </select>
              <div id="vary2">
                <div id="for-parents" class="gap">
                  <input required type="text" name="PNAme" id="PName" placeholder="Enter your  Father/Mother Name" />
                  <input required type="tel" name="PMobile" id="PMobile" placeholder="Enter your  Father/Mother Mobile Number" />
                </div>
                <div id="for-gaurdian" class="gap">
                  <input required type="text" id="GName" placeholder="Enter your  Guardian Name" />
                  <input required type="tel" id="GMobile" placeholder="Enter your  Guardian Mobile Number" />
                </div>
              </div>
            </div>


          </div>

          <h1 style="font-size: 2rem; padding: 1rem;">Select Sports</h1>
          <div class="sports-container">


            <div class="indvidual-sports">
              <input type="checkbox" name="table-tennis[]" value="Table Tennis">
              <label for="table-tennis-check-box">Table Tennis</label>
            </div>
            <div class="indvidual-sports">
              <input type="checkbox" name="table-tennis[]" value="BADMINTON">
              <label for="table-tennis-check-box">BADMINTON</label>
            </div>
            <div class="indvidual-sports">
              <input type="checkbox" name="table-tennis[]" value="Chess">
              <label for="table-tennis-check-box">Chess</label>
            </div>

            <div class="indvidual-sports">
              <input type="checkbox" name="table-tennis[]" value="CRICKET">
              <label for="table-tennis-check-box">CRICKET</label>
            </div>

            <div class="indvidual-sports">
              <input type="checkbox" name="table-tennis[]" value="basket ball">
              <label for="table-tennis-check-box">basket ball</label>
            </div>
            <div class="indvidual-sports">
              <input type="checkbox" name="table-tennis[]" value="football">
              <label for="table-tennis-check-box">football</label>
            </div>
            <div class="indvidual-sports">
              <input type="checkbox" name="table-tennis[]" value="VOLLEYBALL">
              <label for="table-tennis-check-box">VOLLEYBALL</label>
            </div>
            <div class="indvidual-sports">
              <input type="checkbox" name="table-tennis[]" value="Hockey">
              <label for="table-tennis-check-box">Hockey</label>
            </div>
            <div class="indvidual-sports">
              <input type="checkbox" name="table-tennis[]" value="Tennis">
              <label for="table-tennis-check-box">Tennis</label>
            </div>


          </div>

          <div class="btn-container">
            <input type="submit" value="Submit">
          </div>


        </form>
      </fieldset>
    </section>

  </main>
  <footer id="location-footer">
    <div class="footer-container">

      <div class="footer-1-container">
        <div class="footer-contact-heading-container">
          <div class="corn">
            <h1>CONTACT US</h1>
          </div>

        </div>
        <div class="footer-contact-details-container">
          <div class="footer-div-align">
            <div class="footer-contact-detail-1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <h3>ADDRESS</h3>

              <p id="ppp">BISHOP HEBER COLLEGE</p>
              <p id="ppp2">Tiruchirappalli - 620 017.</p>

            </div>
            <div class="footer-contact-detail-2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <h3>PHONE NUMBER</h3>
              <p>+91 94435 66300</p>
            </div>
          </div>

          <div class="footer-div-align">
            <div class="footer-contact-detail-3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <h3>EMAIL</h3>
              <p>palrajbhc@gmail.com</p>
            </div>
            <div class="footer-contact-detail-4">
              <i class="fa fa-fax"></i>
              <h3>FAX NUMBER</h3>
              <p>0431-27702</p>
            </div>
          </div>
          <div class="footer-div-align-2">
            <div class="footer-contact-detail-5">
              <img src="http://bhc.edu.in/img/bhcrqcodedark.png" >
              <i class="fa fa-qrcode" aria-hidden="true"></i>

              <h3>QR CODE</h3>
              <p>click me !</p>
            </div>
          </div>
        </div>
        <div class="footer-social-media-container">
          <ul>
            <li><a style="width: 100%;" href="https://www.facebook.com/bishophebercollegeofficial/"><i id="footer-icon-1" class="fa fa-facebook"></i></a></li>
            <li><a style="width: 100%;" href="https://twitter.com/bhc_trichy?lang=en"><i id="footer-icon-2" class="fa-brands fa-twitter"></i></a></li>
            <li><a style="width: 100%;" href="https://www.youtube.com/@bishophebercollege2711"><i id="footer-icon-4" class="fab fa-youtube"></i></a></li>
          </ul>
        </div>

      </div>
      <div class="footer-2-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d489.8681634766735!2d78.67383041995126!3d10.815497520839589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf530eb6b6983%3A0x1002d6b3f12d053!2sDepartment%20Of%20Physical%20Education!5e0!3m2!1sen!2sin!4v1691510297259!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
      </div>

      <div class="footer-3-container">

        <div class="Copyright-left">

          <p>&copy; Copyright <strong><span>Bishop Heber College</span></strong> . All Rights Reserved</p>
        </div>
        <div class="Copyright-right">
          <?php
          //$con2 = $connection;

          $mqQ = "SELECT * FROM `pe_credit_section` ORDER BY ID DESC LIMIT 1";
          //mysqli_query($con, $mqQ);
          $mqQueryRes = mysqli_query($con, $mqQ);

          while ($i = mysqli_fetch_assoc($mqQueryRes)) {

          ?>

            <a href="<?php echo $i["portfolio_url"] ?>">Developed By <strong>Mohamed Aslam & Logeshwaran K</strong><img src="./images/icons/developed by icon.png" alt="" ></a>
          <?php
          }

          mysqli_close($con);
          ?>

        </div>

      </div>

      <div class="footer-4-container">

      </div>

    </div>

  </footer>
</body>

</html>