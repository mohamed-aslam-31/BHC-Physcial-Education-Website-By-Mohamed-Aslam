<?php
include "globalDB.php";
$connect_1 = $connection

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Achievements</title>
  <!--CSS-->
  <link rel="stylesheet" href="./CSS-2/achievements-header.css">
  <link rel="stylesheet" href="./CSS-2/achievement-section-1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./CSS-2/media_query/achievements-header-media-query.css">
  <link rel="shortcut icon" type="image/x-icon" href="./images/logos/bhc-logo.png">
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
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>



  <link rel="stylesheet" href="./CSS/desktop view/home-footer.css">
  <link rel="stylesheet" href="./CSS/media query/home-footer-median-query.css">
  <link rel="stylesheet" href="./CSS-2/media_query/achievements-section-media-query.css">

  <script defer src="./script/achievement.js"></script>
</head>

<body>
  <header>
    <div class="achievement-header-nav-container">

      <div class="achievement-logo-container">
        <a href=""><img class="achievement-logo-desktop" src="./images/logos/bhc-logo.png" alt=""></a>
        <a href=""><img class="achievement-logo-media-query" src="./images/logos/bhc-logo-media-query-min.png" alt=""></a>
      </div>

      <nav>


        <ul class="achievement-nav-ul" id="show-menu-ul">

          <div class="achievement-nav-register_button-container-1">
            <a class="achievement-nav-register_button-container-a" href="applications.php#loaction-inquiry">REGISTER ONLINE</a>
          </div>

          <li class="achievement-nav-ul-li"><a class="achievement-nav-ul-li-a" href="applications.php">HOME</a></li>
          <li class="achievement-nav-ul-li"><a class="achievement-nav-ul-li-a" href="/applications.php#location-about-us">ABOUT US</a></li>


          <li class="achievement-nav-ul-li"><a class="achievement-nav-ul-li-a" href="applications.php">ACADEMIES
              <i class="fa fa-caret-right arrow-down" aria-hidden="true"></i></a>

            <ul class="achievement-nav-ul-li-sub_ul">

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="applications.php#location-academies">&#187;&nbsp;Cricket </a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="applications.php#location-academies">&#187;&nbsp;Hockey </a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="applications.php#location-academies"> &#187;&nbsp;Archery </a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="applications.php#location-academies">&#187;&nbsp;Football </a>
              </li>



            </ul>
          </li>

          <li class="achievement-nav-ul-li"><a class="achievement-nav-ul-li-a" href="" style="color:red;">
              ACHIEVEMENTS
              <i class="fa fa-caret-right arrow-down" aria-hidden="true"></i> </a>

            <ul class="achievement-nav-ul-li-sub_ul">

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="#international"> &#187;&nbsp;International Level</a>
              </li>
              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="#bharathidasan"> &#187;&nbsp;Bharathidasan University</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="#national"> &#187;&nbsp;National Level</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="#bhc-college"> &#187;&nbsp;Golden Jubilee Tournaments</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="#others"> &#187;&nbsp;State and Other Level</a>
              </li>



            </ul>
          </li>
          <li class="achievement-nav-ul-li"><a class="achievement-nav-ul-li-a" href="gallery.php">GALLERY</a></li>
          <li class="achievement-nav-ul-li">
            <a class="achievement-nav-ul-li-a" href="applications.php">INFRASTRUCTURE
              <i class="fa fa-caret-right arrow-down" aria-hidden="true"></i>
            </a>

            <ul class="achievement-nav-ul-li-sub_ul">

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-tennis-court-arena">
                  &#187;&nbsp;Tennis Court Arena</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-cricket-net"> &#187;&nbsp;Cricket Nets</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-volley-ball-court"> &#187;&nbsp;Volleyball Court</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-hockey-field-and-200-cum"> &#187;&nbsp;Hockey Field</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-basket-ball">&#187;&nbsp;Basket Ball</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-hockey-field-and-200-cum"> &#187;&nbsp;200 Meter Track
                  Field</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-indoor-stadium">&#187;&nbsp;Indoor Stadium Sports
                  Complex</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-yoga-room">&#187;&nbsp;Yoga Meditation Room</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-BADMINTON-COURT"> &#187;&nbsp;Badminton Court</a>
              </li>


              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-ftb-crc"> &#187;&nbsp;Football Field Cum
                  Cricket Ground</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-Semi-Indoor-Table"> &#187;&nbsp;Semi Indoor Table</a>
              </li>

              <li class="achievement-nav-ul-li-sub_ul-li">
                <a class="achievement-nav-ul-li-sub_ul-li-a" href="/applications.php#location-Fitness-Centre">&#187;&nbsp;Fitness Centre</a>
              </li>

            </ul>
          </li>
          <li class="achievement-nav-ul-li"><a class="achievement-nav-ul-li-a" href="/applications.php#location-news-and-events">NEWS AND
              EVENTS</a></li>
          <li class="achievement-nav-ul-li"><a class="achievement-nav-ul-li-a" href="#location-footer-ach">CONTACT US</a>
          </li>
        </ul>

        <div class="achievement-nav-menu-container" id="hide-menu-icon" onclick="myFunction(this)">
          <div></div>
          <div></div>
          <div></div>
        </div>

        <div class="achievement-nav-register_button-container-2">
          <a class="achievement-nav-register_button-container-2-a" href="applications.php#loaction-inquiry">REGISTER ONLINE</a>
        </div>
        <div class="achievement-nav-close-menu-container" id="close-menu-icon" onclick="myFunction2(this)">
          <a href="#">&times;</a>
        </div>
      </nav>

    </div>

    <div class="achievement-header-heading-container" id="header-background-colour-div">


      <h1>

        ACHIEVEMENTS

        <div class="text-container">
          <span style="--i: 0">"Bharathidasan University"</span>
          <span style="--i: 1">"International Level"</span>
          <span style="--i: 2">"National Level"</span>
          <span style="--i: 3">"Golden Jubilee Tournaments"</span>
          <span style="--i: 4">"State Level"</span>
        </div>
      </h1>

      <div class="arrow-animation-container">
        <i class="arrow down"></i>
        <i class="arrow down"></i>
      </div>

    </div>

  </header>
  <main>
    <div class="gallery-selection annual-sports-meet" id="annual-sports-meet">
      <h1>ANNUAL SPORTS REPORT</h1>
      <div class="sports-collection">

        <a href="/flipbook-pdf/flipbook-1.html">2016-2017</a>
        <a href="/flipbook-pdf/flipbook-2.html">2017-2018</a>
        <a href="/flipbook-pdf/flipbook-3.html">2018-2019</a>
        <a href="/flipbook-pdf/flipbook-4.html">2019-2020</a>
        <a href="/flipbook-pdf/flipbook-5.html">2021-2022</a>
        <a href="/flipbook-pdf/flipbook-6.html">2022-2023</a>

      </div>
    </div>
    <section class="achievement-section-1" id="international">
      <div class="international-heading">
        <div class="international-heading-1">

        </div>
        <div class="international-heading-2">
          <h1> INTERNATIONAL LEVEL</h1>
        </div>
        <div class="international-heading-3">

        </div>
      </div>
      <div class="international-option-container">
        <div class="international-sports-option">
          <h1>SPORTS&nbsp;</h1>
          <select id="sports2" class="selectspt">
            <option value="all">select</option>
            <?php

            $spQurey_1 = "SELECT DISTINCT `category`FROM `pe_international_level`";
            $spQureyRes_1 = mysqli_query($connection, $spQurey_1);
            while ($i1 = mysqli_fetch_assoc($spQureyRes_1)) {
            ?>
              <option value="<?php echo $i1["category"] ?>"><?php echo $i1["category"] ?></option>
            <?php
            }
            ?>

          </select>

        </div>
        <div class="international-title-and-year-container">
          <select id="year-opt2">
            <option value="all">year</option>
            <?php
            $stmt_1 = mysqli_query($connection, "SELECT DISTINCT `year` FROM `pe_international_level`");
            while ($row_1 = mysqli_fetch_assoc($stmt_1)) {

            ?>
              <option value="<?php echo $row_1["year"] ?>"><?php echo $row_1["year"] ?></option>
            <?php
            }
            ?>

          </select>
        </div>

      </div>
      <!--Display-->



      <div class="international-container-top will-hide2">

        <?php
        $bharathidasan_display_1 = "SELECT * FROM `pe_international_display_1`";



        $dd_1 = mysqli_query($connection, $bharathidasan_display_1);

        while ($d_1 = mysqli_fetch_assoc($dd_1)) {


        ?>
          <div class="international-card">
            <div class="international-card-img">
              <img src="<?php echo $d_1["image_address"] ?>" alt="">
            </div>

            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["position"] ?>
                </h2><span></span>
              </div>


              <h1>
                <?php echo $d_1["player_name"] ?>
              </h1>
              <div class="international-card-details-2">

                <span></span>

                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["sports_name"] ?>
                </h2><span></span>
              </div>
              <p>
                <?php echo $d_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $d_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />


          </div>
        <?php
        }
        ?>





      </div>
      <div class="international-container-top-2 will-hide2">

        <?php
        $international_display_2 = "SELECT * FROM `pe_international_display_2`";
        //mysqli_query($connection, $international_display_2);

        $ddd_2 = mysqli_query($connection, $international_display_2);

        while ($d_2 = mysqli_fetch_assoc($ddd_2)) {


        ?>

          <div class="international-card">
            <div class="international-card-img">
              <img src="<?php echo $d_2["image_address"] ?>" alt="">
            </div>
            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_2["position"] ?>
                </h2><span></span>
              </div>
              <h1>
                <?php echo $d_2["player_name"] ?>
              </h1>
              <div class="international-card-details-2">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_2["sports_name"] ?>
                </h2><span></span>
              </div>

              <p>
                <?php echo $d_2["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $d_2["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />


          </div>
        <?php
        }
        ?>


      </div>


      <div class="international-team-games-container international-team-games-years replace-container" id="cards-holder2">
        <?php
        // $indQuery = "SELECT * FROM `pe_team_games` WHERE `year` = ?";
        // $indStmt = $con->prepare($indQuery);
        // $indStmt->bind_param("s", $row24["year"]);
        // $indStmt->execute();
        // $indQres = $indStmt->get_result();


        $q2 = "SELECT * FROM `pe_international_level`";
        //"SELECT * FROM `pe_team_games`"
        $indQres_1 = mysqli_query($connection, $q2);

        //SELECT * FROM `pe_team_games` WHERE `category` = 'team-games' AND `year` = '2016-2017';



        while ($i_1 = mysqli_fetch_assoc($indQres_1)) {
        ?>
          <div class="international-card  international-remove-card " id="<?php echo $i_1["category"] ?>" data-year="<?php echo $i_1["year"] ?>" data-sport="<?php echo $i_1["category"] ?>" data-filter="<?php echo "{$i_1["category"]}-{$i_1["year"]}" ?>">
            <div class="international-card-img">
              <img src="<?php echo $i_1["image_address"] ?>" alt="">
            </div>
            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["position"] ?>
                </h2><span>
                </span>
              </div>
              <h1>
                <?php echo $i_1["player_name"] ?>
              </h1>
              <div class="international-card-details-2">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["sports_name"] ?>
                </h2><span>
                </span>
              </div>

              <p>
                <?php echo $i_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $i_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />
          </div>
        <?php } ?>
      </div>


    </section>
    <section class="achievement-section-2" id="bharathidasan">
      <div class="bharathidasan-heading">
        <div class="bharathidasan-heading-1">

        </div>
        <div class="bharathidasan-heading-2">
          <h1>Bharathidasan University <br> Inter College</h1>
        </div>
        <div class="bharathidasan-heading-3">

        </div>
      </div>
      <div class="bharathidasan-option-container">
        <div class="bharathidasan-sports-option">
          <h1>SPORTS&nbsp;</h1>
          <select id="sports" class="selectspt">
            <option value="all">select</option>
            <?php
            $spQurey_1 = "SELECT DISTINCT `category`FROM `pe_bharathidasan_level`";
            $spQureyRes_1 = mysqli_query($connection,$spQurey_1);
            while ($i1 = mysqli_fetch_assoc($spQureyRes_1)) {
            ?>
              <option value="<?php echo $i1["category"] ?>"><?php echo $i1["category"] ?></option>
            <?php
            }
            ?>

          </select>

        </div>
        <div class="bharathidasan-title-and-year-container">
          <select id="year-opt">
            <option value="all">year</option>
            <?php
            $stmt_1 = mysqli_query($connection, "SELECT DISTINCT `year` FROM `pe_bharathidasan_level`");
            while ($row_1 = mysqli_fetch_assoc($stmt_1)) {

            ?>
              <option value="<?php echo $row_1["year"] ?>"><?php echo $row_1["year"] ?></option>
            <?php
            }
            ?>

          </select>
        </div>

      </div>
      <!--Display-->



      <div class="bharathidasan-container-top will-hide">

        <?php
        // $sql_1 = "SELECT * FROM `pe_bharathidasan_level` WHERE `category` LIKE 'team-games' ORDER BY `category` ASC";
        // $respons_1 = $connect_1->query($sql_1);
        $stmt_1 = mysqli_query($connection, "SELECT * FROM `pe_bharathidasan_display_1`");
        //while ($row_1 =mysqli_fetch_assoc($stmt_1)) {
        //$bharathidasan_display_1 = "SELECT * FROM `pe_bharathidasan_display_1`";


        //$dd_1 = $connect_1->query($bharathidasan_display_1);

        while ($d_1 = mysqli_fetch_assoc($stmt_1)) {


        ?>
          <div class="bharathidasan-card">
            <div class="bharathidasan-card-img">
              <img src="<?php echo $d_1["image_address"] ?>" alt="">
            </div>

            <div class="bharathidasan-card-details">
              <div class="bharathidasan-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["position"] ?>
                </h2><span></span>
              </div>


              <h1>
                <?php echo $d_1["player_name"] ?>
              </h1>
              <div class="bharathidasan-card-details-2">

                <span></span>

                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["sports_name"] ?>
                </h2><span></span>
              </div>
              <p>
                <?php echo $d_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $d_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />


          </div>
        <?php
        }
        ?>





      </div>
      <div class="bharathidasan-container-top-2 will-hide">

        <?php
        $bharathidasan_display_2 = "SELECT * FROM `pe_bharathidasan_display_2`";


        $ddd_2 = mysqli_query($connection, $bharathidasan_display_2);

        while ($d_2 = mysqli_fetch_assoc($ddd_2)) {


        ?>

          <div class="bharathidasan-card">
            <div class="bharathidasan-card-img">
              <img src="<?php echo $d_2["image_address"] ?>" alt="">
            </div>
            <div class="bharathidasan-card-details">
              <div class="bharathidasan-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_2["position"] ?>
                </h2><span></span>
              </div>
              <h1>
                <?php echo $d_2["player_name"] ?>
              </h1>
              <div class="bharathidasan-card-details-2">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_2["sports_name"] ?>
                </h2><span></span>
              </div>
              <p>
                <?php echo $d_2["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $d_2["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />


          </div>
        <?php
        }
        ?>


      </div>


      <div class="bharathidasan-team-games-container bharathidasan-team-games-years replace-container" id="cards-holder">
        <?php

        $q2 = "SELECT * FROM `pe_bharathidasan_level`";
        //"SELECT * FROM `pe_team_games`"
        $indQres_1 = mysqli_query($connection, $q2);

        //SELECT * FROM `pe_team_games` WHERE `category` = 'team-games' AND `year` = '2016-2017';



        while ($i_1 = mysqli_fetch_assoc($indQres_1)) {
        ?>
          <div class="bharathidasan-card" id="<?php echo $i_1["category"] ?>" data-year="<?php echo $i_1["year"] ?>" data-sport="<?php echo $i_1["category"] ?>" data-filter="<?php echo "{$i_1["category"]}-{$i_1["year"]}" ?>">
            <div class="bharathidasan-card-img">
              <img src="<?php echo $i_1["image_address"] ?>" alt="">
            </div>
            <div class="bharathidasan-card-details">
              <div class="bharathidasan-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["position"] ?>
                </h2><span>
                </span>
              </div>
              <h1>
                <?php echo $i_1["player_name"] ?>
              </h1>
              <div class="bharathidasan-card-details-2">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["sports_name"] ?>
                </h2><span>
                </span>
              </div>
              <p>
                <?php echo $i_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $i_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />
          </div>
        <?php } ?>
      </div>



    </section>

    <section class="achievement-section-3" id="national">
      <div class="international-heading">
        <div class="international-heading-1">

        </div>
        <div class="international-heading-2">
          <h1> NATIONAL LEVEL</h1>
        </div>
        <div class="international-heading-3">

        </div>
      </div>
      <div class="international-option-container">
        <div class="international-sports-option">
          <h1>SPORTS&nbsp;</h1>
          <select id="sports3" class="selectspt">
            <option value="all">select</option>
            <?php

            //$spQurey_1 = "SELECT DISTINCT `category`FROM `pe_national_level`";
            $spQureyRes_1 = mysqli_query($connection, "SELECT DISTINCT `category`FROM `pe_national_level`");
            while ($i1 = mysqli_fetch_assoc($spQureyRes_1)) {
            ?>
              <option value="<?php echo $i1["category"] ?>"><?php echo $i1["category"] ?></option>
            <?php
            }
            ?>

          </select>

        </div>
        <div class="international-title-and-year-container">
          <select id="year-opt3">
            <option value="all">year</option>
            <?php
            //$stmt_1 = $connect_1->query("SELECT DISTINCT `year` FROM `pe_national_level`");
            $spQureyRes_1 = mysqli_query($connection, "SELECT DISTINCT `year` FROM `pe_national_level`");

            while ($row_1 = mysqli_fetch_assoc($spQureyRes_1)) {

            ?>
              <option value="<?php echo $row_1["year"] ?>"><?php echo $row_1["year"] ?></option>
            <?php
            }
            ?>

          </select>
        </div>

      </div>
      <!--Display-->

      <div class="international-container-top will-hide3">

        <?php
        $bharathidasan_display_1 = "SELECT * FROM `pe_national_display_1`";


        $dd_1 = mysqli_query($connection,$bharathidasan_display_1);

        while ($d_1 = mysqli_fetch_assoc($dd_1)) {


        ?>
          <div class="international-card national-remove-card">
            <div class="international-card-img">
              <img src="<?php echo $d_1["image_address"] ?>" alt="">
            </div>

            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["position"] ?>
                </h2><span></span>
              </div>


              <h1>
                <?php echo $d_1["player_name"] ?>
              </h1>
              <div class="international-card-details-2">

                <span></span>

                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["sports_name"] ?>
                </h2><span></span>
              </div>
              <p>
                <?php echo $d_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $d_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />


          </div>
        <?php
        }
        ?>





      </div>
      <div class="international-container-top-2 will-hide3">

        <?php
        $international_display_2 = "SELECT * FROM `pe_national_display_2`";


        $ddd_2 = mysqli_query($connection, $international_display_2);

        while ($d_2 = mysqli_fetch_assoc($ddd_2)) {


        ?>

          <div class="international-card">
            <div class="international-card-img">
              <img src="<?php echo $d_2["image_address"] ?>" alt="">
            </div>
            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_2["position"] ?>
                </h2><span></span>
              </div>
              <h1>
                <?php echo $d_2["player_name"] ?>
              </h1>
              <div class="international-card-details-2">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_2["sports_name"] ?>
                </h2><span></span>
              </div>
              <p>
                <?php echo $d_2["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $d_2["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />


          </div>
        <?php
        }
        ?>


      </div>


      <div class="international-team-games-container international-team-games-years replace-container" id="cards-holder3">
        <?php
        // $indQuery = "SELECT * FROM `pe_team_games` WHERE `year` = ?";
        // $indStmt = $con->prepare($indQuery);
        // $indStmt->bind_param("s", $row24["year"]);
        // $indStmt->execute();
        // $indQres = $indStmt->get_result();

        $q2 = "SELECT * FROM `pe_national_level`";
        //"SELECT * FROM `pe_team_games`"
        $indQres_1 = mysqli_query($connection, $q2);
        while ($i_1 = mysqli_fetch_assoc($indQres_1)) {
        ?>
          <div class="international-card national-remove-card  " id="<?php echo $i_1["category"] ?>" data-year="<?php echo $i_1["year"] ?>" data-sport="<?php echo $i_1["category"] ?>" data-filter="<?php echo "{$i_1["category"]}-{$i_1["year"]}" ?>">
            <div class="international-card-img">
              <img src="<?php echo $i_1["image_address"] ?>" alt="">
            </div>
            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["position"] ?>
                </h2><span>
                </span>
              </div>
              <h1>
                <?php echo $i_1["player_name"] ?>
              </h1>
              <div class="international-card-details-2">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["sports_name"] ?>
                </h2><span>
                </span>
              </div>
              <p>
                <?php echo $i_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $i_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />
          </div>
        <?php } ?>
      </div>



    </section>


    <section class="achievement-section-4" id="bhc-college">



      <div class="international-heading">
        <div class="international-heading-1">

        </div>
        <div class="international-heading-2">
          <h1> GOLDEN JUBLIEE TOURNAMENTS</h1>
        </div>
        <div class="international-heading-3">

        </div>
      </div>
      <div class="golden-jubilee-tournaments-detail-container">
        <div class="g-j-t-1">

          <div class="g-j-t-1-container-1">
            <h1> THE COLLEGE </h1>
            <p>Bishop Heber College can boast of being the oldest college in Trichy
              Started as a School in 1762 it blossomed into a second grade college in
              1873 and got elevated as a first grade college in 1882 .It was closed and
              merged with the Madras Christian College in 1934 and was
              revived in the year 1966. The revived College, with its serene
              ambience, sylvern setting, aesthetically designed buildings and high
              academic standards, is the heartthrob of students and parents. The
              College enjoys unstinted and liberal support from the Management for the development of
              sports to catch up with the emerging trends.
            </p>
          </div>
        </div>
        <div class="g-j-t-2">
          <div class="g-j-t-2-container-1">
            <h1>THE DEPARTMENT</h1>
            <p>The Department of Physical Education of Bishop Heber College has
              matched the academic achievements of the College with its performance par
              excellence in the field of sports and games. Apart from its students' winning
              the University blues in almost all the disciplines year after year, it has won the
              Bharathidasan University championship in Cricket for Fourteen years including Nine years
              in a row and in Tennis for thirteen years with a record Ten years in a row.</p>

          </div>
          <div class="g-j-t-2-container-2">
            <h1>GOLDEN JUBLIEE TOURNAMENTS</h1>
            <p>
              Golden Jubilee Tournaments in Football, Volleyball and Basketball
              for men are conducted since the year 2016 which marks 50 years of glorious
              run of the college since its revival in 1966. Badminton tournaments is added from this
              year onwards. The tournaments are intended to promote sports as a way of life among students,
              to encourage achievements of excellence in sports and above all to build friendship and harmony among students
              from various colleges of Tamilnadu.
            </p>

          </div>

        </div>
        <div class="g-j-t-3">
        <div class="price-heading-container">
          <h1>PRIZE MONEY</h1>
        </div>
        <div class="price-container">
              <div class="price-p"><p>1ST&nbsp;₹20,000/-</p></div>
              <div class="price-p"><p>2ND&nbsp;₹15,000/-</p></div>
              <div class="price-p"><p>3RD&nbsp;₹10,000/-</p></div>
              <div class="price-p"><p>4TH&nbsp;₹7,000/-</p></div>
        </div>
      </div>
      </div>

      <div class="international-option-container">
        <div class="international-sports-option">
          <h1>SPORTS&nbsp;</h1>
          <select id="sports4" class="selectspt">
            <option value="all">select</option>
            <?php

            $spQurey_1 = "SELECT DISTINCT `category`FROM `pe_bhc_college_level`";
            $spQureyRes_1 = mysqli_query($connection,$spQurey_1);
            while ($i1 = mysqli_fetch_assoc($spQureyRes_1)) {
            ?>
              <option value="<?php echo $i1["category"] ?>"><?php echo $i1["category"] ?></option>
            <?php
            }
            ?>

          </select>

        </div>
        <div class="international-title-and-year-container">
          <select id="year-opt4">
            <option value="all">year</option>
            <?php
            $stmt_1 =mysqli_query($connection,"SELECT DISTINCT `year` FROM `pe_bhc_college_level`");
            while ($row_1 = mysqli_fetch_assoc($stmt_1)) {

            ?>
              <option value="<?php echo $row_1["year"] ?>"><?php echo $row_1["year"] ?></option>
            <?php
            }
            ?>

          </select>
        </div>

      </div>
      <!--Display-->

      <div class="international-container-top will-hide4">

        <?php
        $bharathidasan_display_1 = "SELECT * FROM `pe_bhc_college_display_1`";


        $dd_1 = mysqli_query($connection,$bharathidasan_display_1);

        while ($d_1 = mysqli_fetch_assoc($dd_1)) {


        ?>
          <div class="international-card">
            <div class="international-card-img">
              <img src="<?php echo $d_1["image_address"] ?>" alt="">
            </div>

            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["position"] ?>
                </h2><span></span>
              </div>


              <h1>
                <?php echo $d_1["player_name"] ?>
              </h1>
              <div class="international-card-details-2">

                <span></span>

                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["sports_name"] ?>
                </h2><span></span>
              </div>
              <p>
                <?php echo $d_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $d_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />


          </div>
        <?php
        }
        ?>





      </div>



      <div class="international-team-games-container international-team-games-years replace-container" id="cards-holder4">
        <?php
        // $indQuery = "SELECT * FROM `pe_team_games` WHERE `year` = ?";
        // $indStmt = $con->prepare($indQuery);
        // $indStmt->bind_param("s", $row24["year"]);
        // $indStmt->execute();
        // $indQres = $indStmt->get_result();

        $q2 = "SELECT * FROM `pe_bhc_college_level`";
        //"SELECT * FROM `pe_team_games`"
        $indQres_1 = mysqli_query($connection, $q2);
        while ($i_1 = mysqli_fetch_assoc($indQres_1)) {
        ?>
          <div class="international-card gold-remove-card  " id="<?php echo $i_1["category"] ?>" data-year="<?php echo $i_1["year"] ?>" data-sport="<?php echo $i_1["category"] ?>" data-filter="<?php echo "{$i_1["category"]}-{$i_1["year"]}" ?>">
            <div class="international-card-img">
              <img src="<?php echo $i_1["image_address"] ?>" alt="">
            </div>
            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["position"] ?>
                </h2><span>
                </span>
              </div>
              <h1>
                <?php echo $i_1["player_name"] ?>
              </h1>
              <div class="international-card-details-2">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["sports_name"] ?>
                </h2><span>
                </span>
              </div>
              <p>
                <?php echo $i_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $i_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />
          </div>
        <?php } ?>
      </div>



    </section>

    <section class="achievement-section-5" id="others">
      <div class="international-heading">
        <div class="international-heading-1">

        </div>
        <div class="international-heading-2">
          <h1>STATE AND OTHER LEVELS</h1>
        </div>
        <div class="international-heading-3">

        </div>
      </div>
      <div class="international-option-container">
        <div class="international-sports-option">
          <h1>SPORTS&nbsp;</h1>
          <select id="sports5" class="selectspt">
            <option value="all">select</option>
            <?php

            $spQurey_1 = "SELECT DISTINCT `category`FROM `pe_state_and_other_level`";
            $spQureyRes_1 = mysqli_query($connection,$spQurey_1);
            while ($i1 = mysqli_fetch_assoc($spQureyRes_1)) {
            ?>
              <option value="<?php echo $i1["category"] ?>"><?php echo $i1["category"] ?></option>
            <?php
            }
            ?>

          </select>

        </div>
        <div class="international-title-and-year-container">
          <select id="year-opt5">
            <option value="all">year</option>
            <?php
            $stmt_1 = mysqli_query($connection,"SELECT DISTINCT `year` FROM `pe_state_and_other_level`");
            while (mysqli_fetch_assoc($stmt_1)) {

            ?>
              <option value="<?php echo $row_1["year"] ?>"><?php echo $row_1["year"] ?></option>
            <?php
            }
            ?>

          </select>
        </div>

      </div>
      <!--Display-->

      <div class="international-container-top will-hide5">

        <?php
        $bharathidasan_display_1 = "SELECT * FROM `pe_state_and_other_display_1`";


        $dd_1 =mysqli_query($connection,$bharathidasan_display_1);

        while ($d_1 = mysqli_fetch_assoc($dd_1)) {


        ?>
          <div class="international-card">
            <div class="international-card-img">
              <img src="<?php echo $d_1["image_address"] ?>" alt="">
            </div>

            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["position"] ?>
                </h2><span></span>
              </div>


              <h1>
                <?php echo $d_1["player_name"] ?>
              </h1>
              <div class="international-card-details-2">

                <span></span>

                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_1["sports_name"] ?>
                </h2><span></span>
              </div>
              <p>
                <?php echo $d_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $d_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />


          </div>
        <?php
        }
        ?>





      </div>
      <div class="international-container-top-2 will-hide5">

        <?php
        $international_display_2 = "SELECT * FROM `pe_state_and_other_display_2`";


        $ddd_2 = mysqli_query($connection,$international_display_2);

        while ($d_2 = mysqli_fetch_assoc($ddd_2)) {


        ?>

          <div class="international-card">
            <div class="international-card-img">
              <img src="<?php echo $d_2["image_address"] ?>" alt="">
            </div>
            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_2["position"] ?>
                </h2><span></span>
              </div>
              <h1>
                <?php echo $d_2["player_name"] ?>
              </h1>
              <div class="international-card-details-2">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $d_2["sports_name"] ?>
                </h2><span></span>
              </div>
              <p>
                <?php echo $d_2["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $d_2["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />


          </div>
        <?php
        }
        ?>


      </div>


      <div class="international-team-games-container international-team-games-years replace-container" id="cards-holder5">
        <?php
        // $indQuery = "SELECT * FROM `pe_team_games` WHERE `year` = ?";
        // $indStmt = $con->prepare($indQuery);
        // $indStmt->bind_param("s", $row24["year"]);
        // $indStmt->execute();
        // $indQres = $indStmt->get_result();

        $q2 = "SELECT * FROM `pe_state_and_other_level`";
        //"SELECT * FROM `pe_team_games`"
        $indQres_1 = mysqli_query($connection, $q2);
        while ($i_1 = mysqli_fetch_assoc($indQres_1)) {
        ?>
          <div class="international-card other-remove-card  " id="<?php echo $i_1["category"] ?>" data-year="<?php echo $i_1["year"] ?>" data-sport="<?php echo $i_1["category"] ?>" data-filter="<?php echo "{$i_1["category"]}-{$i_1["year"]}" ?>">
            <div class="international-card-img">
              <img src="<?php echo $i_1["image_address"] ?>" alt="">
            </div>
            <div class="international-card-details">
              <div class="international-card-details-1">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["position"] ?>
                </h2><span>
                </span>
              </div>
              <h1>
                <?php echo $i_1["player_name"] ?>
              </h1>
              <div class="international-card-details-2">
                <span></span>
                <h2><span style="visibility: hidden;">.</span>
                  <?php echo $i_1["sports_name"] ?>
                </h2><span>
                </span>
              </div>
              <p>
                <?php echo $i_1["year"] ?>
              </p>
            </div>

            <img class="achievement-medal-gold" src="./images/icons/noto-v1_<?php echo $i_1["medal_address"] ?>-place-medal.svg" alt="My Happy SVG" />
          </div>
        <?php } ?>
      </div>



    </section>


  </main>

  <footer id="location-footer-ach">
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
              <img src="http://bhc.edu.in/img/bhcrqcodedark.png" loading="lazy">
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

          $mqQ = "SELECT * FROM `pe_credit_section` ORDER BY ID DESC LIMIT 1";
          $mqQueryRes = mysqli_query($connection,$mqQ);
          if ($mqQueryRes->num_rows > 0) {
            while ($i = mysqli_fetch_assoc($mqQueryRes)) {

          ?>
              <a href="<?php echo $i["portfolio_url"] ?>">Developed By <strong>Mohamed Aslam & Logeshwaran K</strong><img src="./images/icons/developed by icon.png" alt="" loading="lazy"></a>
          <?php
            }
          }
          $connect_1->close();
          ?>

        </div>

      </div>

      <div class="footer-4-container">

      </div>

    </div>
  </footer>

  <script>
    function myFunction(x) {
      let y = document.getElementById("show-menu-ul");
      let z = document.getElementById("hide-menu-icon");
      let o = document.getElementById("close-menu-icon");
      y.classList.toggle("achievement-show-menu-ul");
      z.classList.toggle("achievement-hide-menu-icon");
      o.classList.toggle("achievement-close-menu-icon");


    }

    function myFunction2(x) {
      let y = document.getElementById("show-menu-ul");
      let z = document.getElementById("hide-menu-icon");
      let o = document.getElementById("close-menu-icon");
      y.classList.toggle("achievement-show-menu-ul");
      z.classList.toggle("achievement-hide-menu-icon");
      o.classList.toggle("achievement-close-menu-icon");

    }
  </script>
</body>

</html>