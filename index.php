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
    <link rel="stylesheet" href="assets/stylesheets/index.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>

<body>

    <!-- Nav-Bar -->
    <section id="nav-bar-sec">
        <nav class="nav-bar">
            <div class="logo">
                <a href="index.html">Kashmiri.Dev</a>
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#contact">Contact</a></li>
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
                <div class="text-1">Hey, my name is</div>
                <div class="text-2">M. Usman Amjad</div>
                <div class="text-3">And I am a <span class="typing"></span></div>
                <a href="mailto:usmankashmiri378@gmail.com">Hire me</a>
            </div>
        </div>
    </section>

    <!-- Messenger Chat Plugin -->
    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <!-- about section start -->

    <section class="about" id="about">
        <div class="container">
            <h2 class="title">About Me</h2>
            <div class="about-content">
                <div class="col-left">
                    <div class="text"><span>I am Usman and I'm a </span><span class="typing-2"></span></div>
                    <p>I am a passionate Web developer, looking for an opportunity in the field of web development. Below in work section you'll find some examples of my work. I am really dedicated to my work. I know editing stuff & Ms-Office automation
                        as well.
                    </p>
                    <a href="assets/cv/My CV.docx">Download CV</a>
                </div>
                <div class="col-right">
                    <img id="lightimg" src="assets/imgs/LightModeimg.png" alt="Usman Kashmiri">
                    <img id="darkimg" src="assets/imgs/DarkModeimg.png" alt="Usman Kashmiri">
                </div>
            </div>
        </div>
    </section>

    <!-- services section -->

    <section class="services" id="services">
        <div class="container">
            <h2 class="title">My Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">
                            <h4>Web Design</h4>
                        </div>
                        <p>I can build UI/UX of Web sites.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-photo-video"></i>
                        <div class="text">
                            <h4>Photo/Video Editing</h4>
                        </div>
                        <p>I can edit photos & videos.</p>
                    </div>
                </div>
                <div id="third-box" class="card">
                    <div class="box">
                        <i class="fas fa-file"></i>
                        <div class="text">
                            <h4>MS-Office</h4>
                        </div>
                        <p>I know Ms-Office automation</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section -->

    <section class="skills" id="skills">
        <div class="container">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">
                        <h3>My creative skills:</h3>
                    </div>
                    <p>I've learnt Web designing from Aptech Gulshan Center. And I'm currently working on MS SQL Server, ASP.Net MVC, MySQL, PHP, Wordpress & Search Engine Optimizations (SEO). I've knowledge of HTML/CSS/JavaScript and version controlling using Git. JavaScript libraries, Jquery and Angular 13.
                        Jquery Plugins & JS plugins (such as: GSAP, AOS, WOWJS). I've command over Bootstrap & I can work with latest web frameworks as well (such as: Materialized CSS & Tailwind CSS). I can design responsive websites with custom CSS.
                        I can work with CMS as well (such as: WIX & WordPress). I've written some blogs on WordPress as well. I know MS-Office automation. And I can edit photos & Videos using Adobe Photoshop, Adobe Premiere Pro & I also have basic knowledge
                        of Adobe After Effects.</p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>95%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>90%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Frameworks (Bootstrap, Materialize CSS)</span>
                            <span>90%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript & JQuery</span>
                            <span>85%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MS-Office</span>
                            <span>80%</span>
                        </div>
                        <div class="line office"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Photo/Video Editing</span>
                            <span>75%</span>
                        </div>
                        <div class="line editing"></div>
                    </div>
                </div>
            </div>
    </section>

    <!-- work section -->

    <section class="work " id="work ">
        <div class="container ">
            <h2 class="title ">My Best Work</h2>
            <div class="carousel owl-carousel ">
                <div class="card">
                    <a href="https://usman-kashmiri.github.io/Blueberry-Accessories/index.html">
                        <div class="box">
                            <img src="assets/imgs/carousel/img01.jpg" alt=" ">
                            <div class="text ">Blueberry Accessories - Home</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://usman-kashmiri.github.io/Blueberry-Accessories/index.html">
                        <div class="box">
                            <img src="assets/imgs/carousel/img02.jpg" alt=" ">
                            <div class="text ">Blueberry Accessoriesr - Products</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://usman-kashmiri.github.io/Blueberry-Accessories/product.html">
                        <div class="box">
                            <img src="assets/imgs/carousel/img03.jpg" alt=" ">
                            <div class="text ">Blueberry Accessories - Product Details</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://www.bilawalcoachingcenter.com/">
                        <div class="box">
                            <img src="assets/imgs/carousel/img 04.JPG" alt=" ">
                            <div class="text ">bilawal coaching center - Home</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://www.bilawalcoachingcenter.com/login.php">
                        <div class="box">
                            <img src="assets/imgs/carousel/img 05.JPG" alt=" ">
                            <div class="text ">Bilawal Coaching Center - login</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://www.bilawalcoachingcenter.com/demo.php?demo=13">
                        <div class="box">
                            <img src="assets/imgs/carousel/img 06.JPG" alt=" ">
                            <div class="text ">Bilawal Coaching Center - Demo</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://usman-kashmiri.github.io/Travel.pk/">
                        <div class="box">
                            <img src="assets/imgs/carousel/img 07.JPG" alt=" ">
                            <div class="text ">Travel.pk - Banner</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://usman-kashmiri.github.io/Travel.pk/#services">
                        <div class="box">
                            <img src="assets/imgs/carousel/img 08.JPG" alt=" ">
                            <div class="text ">Travel.pk - Services</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://usman-kashmiri.github.io/Travel.pk/#footer">
                        <div class="box">
                            <img src="assets/imgs/carousel/img 09.JPG" alt=" ">
                            <div class="text ">Travel.pk - Contact</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://usman-kashmiri.github.io/crystal-products/ ">
                        <div class="box">
                            <img src="assets/imgs/carousel/img 10.JPG " alt=" ">
                            <div class="text ">Crystal Products - Home</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://usman-kashmiri.github.io/crystal-products/product.html">
                        <div class="box">
                            <img src="assets/imgs/carousel/img 11.JPG" alt=" ">
                            <div class="text ">Crystal Products - Products</div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://usman-kashmiri.github.io/crystal-products/contact.html">
                        <div class="box">
                            <img src="assets/imgs/carousel/img 12.JPG " alt=" ">
                            <div class="text ">Crystal Products - Contact</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->

    <section class="contact " id="contact ">
        <div class="container ">
            <h2 class="title ">contact me</h2>
            <div class="contact-content ">
                <div class="column left ">
                    <div class="text ">
                        <h4>My Details:</h4>
                    </div>
                    <p>I am a freshie, I don't have a working experience. I am a student; I've passed my matriculation with A grade in 2017 from Sindh Text Board. I've studied Intermediate from Islamia Sci. College, Karachi. And currently doing software
                        engineering diploma from Aptech Computer Learning Institute.</p>
                    <div class="icons ">
                        <div class="row ">
                            <i class="fas fa-user "></i>
                            <div class="info ">
                                <div class="head ">
                                    <P>Name</p>
                                </div>
                                <div class="sub-title ">
                                    <p>M. Usman Amjad</p>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <i class="fas fa-map-marker-alt "></i>
                            <div class="info ">
                                <div class="head ">
                                    <p>Address</p>
                                </div>
                                <div class="sub-title ">
                                    <p>Karachi, Pakistan</p>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <i class="fas fa-envelope "></i>
                            <div class="info ">
                                <div class="head ">
                                    <p>Email</p>
                                </div>
                                <div class="sub-title "><a href="mailto:usmankashmiri378@gmail.com ">usmankashmiri378@gmail.com</a></div>
                            </div>
                        </div>
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
        <span>Designed By <a href="mailto:usmankashmiri378@gmail.com ">Usman Kashmiri</a> | &#169 2021 All rights reserved.</span>
    </footer>

    <!-- JavaScript & CDN -->
    <script src="assets/scripts/jquery.js"></script>
    <script src="assets/scripts/GSAP3.js"></script>
    <script src="assets/scripts/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script src="assets/scripts/index.js"></script>
</body>

</html>
