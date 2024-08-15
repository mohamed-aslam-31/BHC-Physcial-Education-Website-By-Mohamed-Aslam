<?php
include 'globalDB.php';

// $con = mysqli_connect("localhost", "root", "", "physicaleducationdb");
// if ($con->connect_error) {
//     die("connection failed" . $con->connect_error);
// }
$con = $connection;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="./images/logos/bhc-logo.png">
    <link rel="stylesheet" href="./CSS/desktop view/gallery.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
    <link rel="stylesheet" href="./CSS/desktop view/home-footer.css">
    <link rel="stylesheet" href="./CSS/media query/home-footer-median-query.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

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
</head>

<body>

    <nav>
        <div class="nav-bar-image-container">
            <a href="https://bhc.edu.in/" target="_blank">
                <img class="college-logo-2" src="./images/logos/bhc-logo-media-query-min.png" alt="College Logo" /></a>
        </div>
        <a class="nav-links" href="">
            <h1 class="example7">GALLERY </h1>
        </a>
        <a class="nav-links home-txt" href="applications.php">
            <h1>HOME</h1>
        </a>
    </nav>

    <main class="gallery-disp">
        <div class="gallery-selection">

            <div class="sports-collection">

                <button class="sports-selectors-btn" data-targeted-sport="cricket">CRICKET</button>
                <button class="sports-selectors-btn" data-targeted-sport="badminton">BADMINTON</button>
                <button class="sports-selectors-btn" data-targeted-sport="chess">CHESS</button>
                <button class="sports-selectors-btn" data-targeted-sport="Table Tennis">TABLE TENNIS</button>
                <button class="sports-selectors-btn" data-targeted-sport="Basketball">BASKETBALL</button>
                <button class="sports-selectors-btn" data-targeted-sport="football">FOOTBALL</button>
                <button class="sports-selectors-btn" data-targeted-sport="hockey">HOCKEY</button>
                <button class="sports-selectors-btn" data-targeted-sport="VOLLEYBALL">VOLLEYBALL</button>
                <button class="sports-selectors-btn" data-targeted-sport="Tennis">TENNIS</button>
                <button class="sports-selectors-btn" data-targeted-sport="archery">ARCHERY</button>
                <button class="sports-selectors-btn" data-targeted-sport="other">OTHER</button>
            </div>
        </div>
        <div class="replaceable-gallery-container" data-targeted-sport="cricket">
            <h1 class="current-sports-title">CRICKET</h1>
            <div class="gallery gallery-grid">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'cricket'";
                $crik_res = mysqli_query($connection, $cric_sql);


                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>

            </div>
        </div>
        <div class="replaceable-gallery-container" data-targeted-sport="badminton">
            <h1 class="current-sports-title">BADMINTON</h1>
            <div class="gallery gallery-grid">

                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'badminton'";
                $crik_res = mysqli_query($connection, $cric_sql);

                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>

            </div>
        </div>
        <div class="replaceable-gallery-container" data-targeted-sport="chess">
            <h1 class="current-sports-title">CHESS</h1>
            <div class="gallery gallery-grid">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'chess'";
                $crik_res = mysqli_query($connection, $cric_sql);



                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>
            </div>
        </div>
        <div class="replaceable-gallery-container" data-targeted-sport="Table Tennis">
            <h1 class="current-sports-title">TABLE TENNIS</h1>
            <div class="gallery gallery-grid">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'table tennis'";
                $crik_res = mysqli_query($connection, $cric_sql);

                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>
            </div>
        </div>
        <div class="replaceable-gallery-container" data-targeted-sport="Basketball">
            <h1 class="current-sports-title">BASKETBALL</h1>
            <div class="gallery">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'basketball'";
                $crik_res = mysqli_query($connection, $cric_sql);

                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>

            </div>
        </div>

        <div class="replaceable-gallery-container" data-targeted-sport="football">
            <h1 class="current-sports-title">FOOTBALL </h1>
            <div class="gallery gallery-grid">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'football'";
                $crik_res = mysqli_query($connection, $cric_sql);

                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>
            </div>
        </div>
        <div class="replaceable-gallery-container" data-targeted-sport="hockey">
            <h1 class="current-sports-title">HOCKEY</h1>
            <div class="gallery gallery-grid">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'hockey'";
                $crik_res = mysqli_query($connection, $cric_sql);

                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>
            </div>
        </div>
        <div class="replaceable-gallery-container" data-targeted-sport="VOLLEYBALL">
            <h1 class="current-sports-title">VOLLEYBALL</h1>
            <div class="gallery gallery-grid">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'volleyball'";
                $crik_res = mysqli_query($connection, $cric_sql);

                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>
            </div>
        </div>
        <div class="replaceable-gallery-container" data-targeted-sport="Tennis">
            <h1 class="current-sports-title">TENNIS</h1>
            <div class="gallery gallery-grid">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'tennis'";
                $crik_res = mysqli_query($connection, $cric_sql);

                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>
            </div>
        </div>

        <div class="replaceable-gallery-container" data-targeted-sport="archery">
            <h1 class="current-sports-title">ARCHERY</h1>
            <div class="gallery gallery-grid">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'archery'";
                $crik_res = mysqli_query($connection, $cric_sql);

                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>
            </div>
        </div>

        <div class="replaceable-gallery-container" data-targeted-sport="other">
            <h1 class="current-sports-title">OTHER</h1>
            <div class="gallery gallery-grid">
                <?php
                $cric_sql = "SELECT * FROM `pe_sports_galley` WHERE `sports` LIKE 'other'";
                $crik_res = mysqli_query($connection, $cric_sql);

                while ($i = mysqli_fetch_assoc($crik_res)) {


                ?>
                    <a class="gallery__link ">
                        <figure class="gallery__thumb clickableImages" data-img-src="<?php echo $i["url"] ?>">
                            <img src="<?php echo $i["url"] ?>" alt="<?php echo $i["img_des"] ?>" class="gallery__image">
                            <figcaption class="gallery__caption"><?php echo $i["img_des"] ?></figcaption>
                        </figure>
                    </a>
                <?php
                }


                ?>
            </div>
        </div>


    </main>
    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>
        <a download id="download-btn" class="fa fa-download download"></a>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <!-- <div id="caption"></div> -->

    </div>



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
                    //$con2 = $connection;

                    $mqQ = "SELECT * FROM `pe_credit_section` ORDER BY ID DESC LIMIT 1";
                    //mysqli_query($con, $mqQ);
                    $mqQueryRes = mysqli_query($con, $mqQ);

                    while ($i = mysqli_fetch_assoc($mqQueryRes)) {

                    ?>

                        <a href="<?php echo $i["portfolio_url"] ?>">Developed By <strong>Mohamed Aslam & Logeshwaran K</strong><img src="./images/icons/developed by icon.png" alt="" loading="lazy"></a>
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
<script>
    let modal = document.getElementById("myModal");
    let downloadBtn = document.getElementById("download-btn");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    let imgs = document.querySelectorAll(".clickableImages");
    let modalImg = document.getElementById("img01");
    // let captionText = document.getElementById("caption");
    imgs.forEach(e => {
        e.onclick = () => {
            modal.style.display = "block";
            modalImg.src = e.getAttribute("data-img-src");
            // captionText.innerHTML = e.alt;
            downloadBtn.href = e.getAttribute("data-img-src");
        }
    })


    // Get the <span> element that closes the modal
    let span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    let allGalleryContainers = document.querySelectorAll(".replaceable-gallery-container");
    let allSportsBtn = document.querySelectorAll(".sports-selectors-btn");

    allSportsBtn.forEach(btn => {
        btn.onclick = () => {
            allGalleryContainers.forEach(container => {
                if (container.getAttribute("data-targeted-sport") === btn.getAttribute("data-targeted-sport")) {
                    container.style.display = "block"
                } else {
                    container.style.display = "none"
                }
            })
        }
    })
</script>

</html>