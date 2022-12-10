<!-- All queries and logic -->
<?php include 'fetchAll.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I'm a Web Developer, offering various software development and maintenance services.">
    <meta name="keywords" content="HTML, CSS, Angular Developer, Website Developer, Web Developer, Frontend Web Developer, Php Developer, Full Stack Developer, Wordpress Developer, Dot Net Developer">
    <meta name="author" content="Usman Kashmiri">
    <meta http-equiv="refresh" content="60">
    <title>Kashmiri.Dev | Web Developer</title>
    <!-- Style-sheets & CDNs -->
    <link rel="stylesheet" href="assets/stylesheets/style.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Styling with php -->
    <?php include 'assets/css/style.php'; ?>
</head>

<body>

    <!-- Nav-Bar -->
    <section id="nav-bar-sec">
        <nav class="nav-bar">
            <div class="logo">
                <a href="<?php echo $siteUrl; ?>"><?php echo $logoSrc; ?></a>
            </div>
            <!-- Hamburger Icon with animation -->
            <div class="menu-btn">
                <ul class="toggle active">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="nav-bar-container">
                <ul class="menu">
                    <?php
                    if ($navTblResult > 0) {
                        foreach ($navTblResult as $nav) {
                    ?>
                            <li><a href="<?php echo $nav['nav_links'] ?>"><?php echo $nav['links_text'] ?></a></li>
                    <?php
                        }
                    }
                    ?>
                    <div class="social">
                        <li><a href="https://github.com/Usman-Kashmiri"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/usman-kashmiri-b26543208/"><i class="fab fa-linkedin"></i></a></li>
                    </div>
                </ul>
            </div>
            <!-- Dark mode btn -->
            <div class="dark-mode">
                <!-- Alert Message -->
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <p>Try out dark theme.</p>
                </div>
                <!-- Btn -->
                <div id="bg-btn">
                    <input type="checkbox" class="checkbox" id="chk" />
                    <label class="label" for="chk">
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-moon"></i>
                        <div class="ball"></div>
                    </label>
                </div>
            </div>
        </nav>
    </section>

    <!-- Banner section -->

    <section class="home light-bg" id="home">
        <div class="container">
            <div class="home-content">
                <div class="text-1"><?php echo $bannerTblResult['upper_text'] ?></div>
                <div class="text-2"><?php echo $bannerTblResult['name_text'] ?></div>
                <div class="text-3"><?php echo $bannerTblResult['lower_text'] ?> <span class="typing"></span></div>
                <a href="mailto:usmankashmiri378@gmail.com"><?php echo $bannerTblResult['btn_text'] ?></a>
            </div>
        </div>
    </section>

    <!-- Messenger Chat Plugin -->
    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <!-- about section start -->

    <section class="about" id="about">
        <div class="container">
            <h2 class="title"><?php echo $headings[1]; ?></h2>
            <div class="about-content">
                <div class="col-left">
                    <div class="text"><span><?php echo $aboutSecTblResult[0]; ?> </span><span class="typing-2"></span></div>
                    <p><?php echo $aboutSecTblResult[1]; ?></p>
                    <a href="<?php echo $aboutSecTblResult[2]; ?>">Download CV</a>
                </div>
                <div class="col-right">
                    <img id="lightimg" src="<?php echo $aboutSecTblResult[3]; ?>" alt="Usman Kashmiri">
                    <img id="darkimg" src="<?php echo $aboutSecTblResult[4]; ?>" alt="Usman Kashmiri">
                </div>
            </div>
        </div>
    </section>

    <!-- services section -->

    <section class="services" id="services">
        <div class="container">
            <h2 class="title"><?php echo $headings[2]; ?></h2>
            <div class="serv-content">
                <?php foreach ($servicesSecTblResult as $servies) { ?>
                    <div class="card">
                        <div class="box">
                            <i class="<?php echo $servies[1] ?>"></i>
                            <div class="text">
                                <h4><?php echo $servies[2] ?></h4>
                            </div>
                            <p><?php echo $servies[3] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section -->

    <section class="skills" id="skills">
        <div class="container">
            <h2 class="title"><?php echo $headings[3]; ?></h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">
                        <h3><?php echo $skillsSecTblResult[0]; ?></h3>
                    </div>
                    <p><?php echo $skillsSecTblResult[1]; ?></p>
                </div>
                <div class="column right">
                    <?php
                    $i = 1; 
                    foreach ($skillsTblResult as $skill) { ?>
                        <div class="bars">
                            <div class="info">
                                <span><?php echo $skill[1] ?></span>
                                <span><?php echo $skill[2] ?>%</span>
                            </div>
                            <div class="line <?php echo "skill_".$i."_level"; ?>"></div>
                        </div>
                    <?php $i++; } ?>
                </div>
            </div>
    </section>

    <!-- work section -->

    <section class="work " id="work ">
        <div class="container ">
            <h2 class="title "><?php echo $headings[4]; ?></h2>
            <div class="carousel owl-carousel ">
                <?php foreach ($workTblResult as $work) { ?>
                <div class="card">
                    <a href="<?php echo $work[3] ?>">
                        <div class="box">
                            <img src="<?php echo $work[2] ?>" alt="carousel image">
                            <div class="text "><?php echo $work[4] ?></div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- contact section start -->

    <section class="contact " id="contact ">
        <div class="container ">
            <h2 class="title "><?php echo $headings[5]; ?></h2>
            <div class="contact-content ">
                <div class="column left ">
                    <div class="text ">
                        <h4><?php echo $contactSecTblResult[0] ?></h4>
                    </div>
                    <p><?php echo $contactSecTblResult[1] ?></p>
                    <div class="icons ">
                        <?php foreach ($contactDetailTblResult as $detail) { ?>
                        <div class="row ">
                            <i class="<?php echo $detail[1] ?>"></i>
                            <div class="info ">
                                <div class="head ">
                                    <P><?php echo $detail[2] ?></p>
                                </div>
                                <div class="sub-title ">
                                    <?php
                                    if ($detail[2] == "Email") {
                                         echo "<a href='mailto:$detail[3]'>$detail[3]</a>";
                                        } else {
                                            echo "<p>$detail[3]</p>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="column right ">
                    <div class="text ">
                        <h4>Message me</h4>
                    </div>
                    <form action="https://formspree.io/f/xrgrowew " method="POST ">
                        <div class="fields ">
                            <div class="field name ">
                                <input type="text " name="Name " placeholder="Name " required>
                            </div>
                            <div class="field email ">
                                <input type="email " name="Email " placeholder="Email " required>
                            </div>
                        </div>
                        <div class="field ">
                            <input type="text " name="Subject " placeholder="Subject " required>
                        </div>
                        <div class="field textarea ">
                            <textarea cols="30 " name="Message " rows="10 " placeholder="Message.. " required></textarea>
                        </div>
                        <div class="button ">
                            <button type="submit ">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span><?php echo $footerTblResult[0]; ?> <a href="<?php echo $siteUrl; ?>"><?php echo $footerTblResult[1]; ?></a> | &#169 <?php echo $footerTblResult[2]." - ".date("Y")." ".$footerTblResult[3]; ?></span>
    </footer>

    <!-- JavaScript & CDN -->
    <script src="assets/scripts/jquery.js"></script>
    <script src="assets/scripts/GSAP3.js"></script>
    <script src="assets/scripts/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script src="assets/scripts/index.js"></script>
    <!-- Javascript with php -->
    <?php include 'assets/js/mainjs.php' ?>
</body>

</html>