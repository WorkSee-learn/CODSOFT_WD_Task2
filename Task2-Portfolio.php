<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="port.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="shortcut icon" href="favicon_edited.png" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMa9E/tA/JwlXf6GIo13IZhZ+2I46yOhgqYojJq" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo"> Welcome to My Digital World!</a>
            <div data-aos="fade-in" class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__items">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>
                    <li class="nav__items">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> About Me
                        </a>
                    </li>
                    <li class="nav__items">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-file nav__icon"></i> Services
                        </a>
                    </li>
                    <li class="nav__items">
                        <a href="#projects" class="nav__link">
                            <i class="uil uil-briefcase nav__icon"></i> Projects
                        </a>
                    </li>
                    <li class="nav__items">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i> Contact Me
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
        </nav>
    </header>


    <!--==================== MAIN ====================-->
    <div class="main">


        <!--==================== HOME ====================-->
        <section class="home section" id="home"
            style="background-image: url('images/HomeBG (2).jpg');
             background-size: cover; height:60%;">
            <div  data-aos="fade-left" class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://github.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-twitter-alt"></i>
                        </a>
                    </div>
                    <div class="homedata">
                        <h1 class="home_title">Hi!<span class="wave">👋</span>, I'm Pooja Kushwaha</h1>
                        <h3 class="home__subtitle">
                            and I'm <span class="auto-input"></span>
                        </h3>
                    </div>
                </div>
                <center>
                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name"> Scroll down</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </center>
            </div>
        </section>


        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My Introduction</span>

            <div data-aos="fade-left" class="about__container container grid">
                <div class="about__data">
                    <p class="about__description">
                        <center>A tech wizard with a knack for turning code into gold.</center><br> My journey through
                        the digital realm has
                        been nothing short of an epic adventure, fueled by a love for all things tech and a drive to
                        create magic with code.
                    </p>
                    <div class="about__buttons">
                        <a download="pooja-cv.pdf" href="pdf/CV Pooja.pdf" class="button button--flex">
                            Download CV <i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>

                </div>

                <div class="about__image">
                    <div class="diamond-shape">
                        <img src="myimg2.jpg" alt="Pooja Kushwaha" class="about__img">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="service section" id="services">
            <h2 class="section__title">What I Do</h2>
            <span class="section__subtitle">Services</span>

            <div data-aos="fade-up">
                <div class="skills__content skills__open">
                    <div class="skills__header">
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>

                    <div class="services-container">
                        <div class="service-card">
                            <div class="card-content">
                                <h4><b>Resume Building</b></h4>
                                <img src="images/CV.png" alt="Resume Building" class="service-img">
                                <p>Creating professional and impactful resumes to showcase your skills and experience.
                                </p>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-content">
                                <h4><b>Portfolio Building</b></h4>
                                <img src="images/portfol.png" alt="Portfolio Building" class="service-img">
                                <p>Designing stunning portfolios to highlight your best work and projects.</p>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-content">
                                <h4><b>Web Designer</b></h4>
                                <img src="images/webs.png" alt="Web Designer" style="height:250px; width:300px;"
                                    class="service-img">
                                <p>Crafting beautiful and functional websites that provide a great user experience.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!--==================== PROJECTS ====================-->
        <section class="projects section" id="projects">
            <h2 class="section__title">Projects</h2>
            <span class="section__subtitle">My Work</span>

            <div class="portfolio__container container">
                <div id="carouselProjects" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <iframe width="560" height="315" ></iframe>
                            <div class="portfolio__data">
                                <p></p>
                                <a href="pdf/certificates.pdf"
                                    class="button button--flex button--small portfolio-button">View</a>
                            </div>
                        </div>
                    </div>
                 <!--   <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjects"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProjects"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>-->
                </div>
            </div>
        </section>

        <!--==================== CONTACT ME ====================-->
        <div class="contact section" id="contact">
            <h2 class="section__title">Contact Me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact__container container grid">
                <div data-aos="fade-in">
                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">poojakushwaha52797@gmail.com</span>
                        </div>
                    </div>
                    <div class="contact__information">
                        <i class="uil uil-linkedin contact__icon"></i>
                        <div>
                            <h3 class="contact__title">LinkedIn</h3>
                            <span class="contact__subtitle"><a href="https://linkedin.com/in/" target="_blank">LinkedIn
                                    Profile</a></span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-github-alt contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Github</h3>
                            <span class="contact__subtitle"><a href="https://github.com/" target="_blank">Github
                                    Profile</a></span>
                        </div>
                    </div>
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Phone Number</h3>
                            <span class="contact__subtitle">9022635092</span>
                        </div>
                    </div>
                </div>

                <div class="contact__form" style="background-color: #f7f7f7;">
                    <form action="poojakushwaha52797@gmail.com" method="post">
                        <center> <span class="fas fa-envelope fa-lg "></span></center><br><br>
                        Name<input type="text" placeholder="Enter Name here" name="name" class="form-control" required
                            autocomplete="off" required >
                        Mobile <input type="text" placeholder="Enter Mobile here" name="mobile" class="form-control"
                            maxlength="10" required autocomplete="off">
                        Email Address<input type="email" id="email_address" class="form-control"
                            placeholder="type_your@email.com" name="email">
                        Your Message here<br><textarea id="subject" name="msg" placeholder="Write something.."
                            style="height:100px;"></textarea><br>
                        <br>

                        <div class="alt-send-button">
                            <button> <i class="fa fa-paper-plane"><span class="send-text">SEND</span></i><br>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">

                        </h1>
                        <span class="footer__subtitle">

                        </span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#services" class="footer__link">Category</a>
                        </li>
                        <li>
                            <a href="#projects" class="footer__link">Projects</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact Me</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="https://www.instagram.com/invites/contact/?i=1nzdie95dni4q&utm_content=p6o72vi"
                            target="_blank" class="footer__social">
                            <i class="uil uil-instagram"></i></a>
                        <a href="https://twitter.com/poojakus" target="_blank" class="footer__social">
                            <i class="uil uil-twitter-alt"></i></a>
                    </div>
                </div>
                <p class="footer__copy">&copy; 2024 | All Rights Reserved</p>
            </div>
        </footer>

        <!--==================== SCROLL TOP ====================-->
        <div><a href="#" class="scrollup" id="scroll-up">
                <i class="uil uil-arrow-up scrollup__icon"></i>
            </a></div>


        <!--=================== Animated text ===============-->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".auto-input", {
                strings: [
                    "a Web Developer",
                    "an Social Activitist",
                    "a FreeLancer",
                ],
                typeSpeed: 100,
                backSpeed: 100,
                loop: true,
            });
        </script>

        <!--=================== Animate scroll js ===============-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 300,
                duration: 2000
            });
        </script>
</body>

</html>