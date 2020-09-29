<!DOCTYPE html>
<html lang="en">
    
<head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="Personal, Portfolio, Creative">
        
        <title>Mikkycody - My Portfolio</title>

        <!-- favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/png">

        <!--Font Awesome css-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!--Owl Carousel css-->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!--Magnific Popup css-->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900%7cOpen+Sans:400,600,700,800" rel="stylesheet">

        <!--Site Main Style css-->
        <link rel="stylesheet" href="css/style.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122650090-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-122650090-1');
        </script>

    </head>

    <body>

        <!--Preloader-->
        <div class="preloader">
            <div class="loader "></div>
        </div>
        <!--Preloader-->
            
        <?php
            if(isset($_POST['email'])){
            $Name = "Name:".$_POST['name']."
            ";
            $Email = "Email:".$_POST['email']."
            ";
            $Message = "Message:".$_POST['message']."
            ";
            $file=fopen("contactmsg.txt", "w");
            fwrite($file, $Name);
            fwrite($file, $Email);
            fwrite($file, $Message);
            fclose($file);
                
            echo '<script type="text/javascript">
               myFunction();
              </script>';
               
            }
        ?>
        
        
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index.html">
                    Mikkycody
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <!--Nav Links-->
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-scroll-nav="0" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="1" >About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="2" >Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="3">Works</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="4">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="5">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->

        <!--Home Section Start-->
        <section id="home" class="banner" style="background-image: url('https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500g')" data-stellar-background-ratio=".7" data-scroll-index="0">
            <div class="container">
                <!--Banner Content-->
                <div class="banner-caption">
                    <h1>Hi! I'm Michael.</h1>
                    <p class="cd-headline clip mt-30">
                        <span>Creative Software Developer .</span><br>
                        <span class="blc">Specialized in <b class="is-visible">Creating Websites.</b></span>
                       
                    </p>
                </div>
                <div class="arrow bounce">
                    <a class="fa fa-chevron-down fa-2x" href="#" data-scroll-nav="1"></a>
                </div>
            </div>
        </section>
        <!--Home Section End-->

        <!--About Section Start-->
        <section class="about pt-100 pb-100" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <!--About Image-->
                        <div class="about-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTZ3TlzWrMeKTrc1mtbwYH1OrmmHGGAXHJkQL9Lqy6wi7-4SzqT&usqp=CAU" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <!--About Content-->
                        <div class="about-content">
                            <div class="about-heading">
                                <h2>About Me.</h2>
                                <span>Software Developer</span>
                            </div>
                            <p>I am <b>George Michael </b>a motivated designer and developer with experience creating custom websites using PHP/LARAVEL/CODEIGNITER, HTML, CSS, JAVASCRIPT and JQUERY.
                                Strong collaboration skills and demonstrated history of web application development.</p>
                            <!--About Social Icons-->
                            <div class="social-icons">
                                <a target="_blank" href="https://github.com/holuwatobeey"><i class="fa fa-github"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/in/mikkycody/"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <span class="about-button">
                                <form target="_blank" method="get" action="resume.pdf">
                                    <button class="main-btn" type="submit">Download Resume</button>
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section End-->

        <!--Services Section Start-->
        <section class="services bg-gray pt-100 pb-50" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Services</h6>
                            <h2>What I Can Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <p style="padding:1%;">I offer high-end web development services
                                for diverse needs. Mastering the use of the latest methods and tools to render
                                appealing and user-friendly website design services, you can approach me for business
                                website, eCommerce website design and web applications.</p>
                            <p>Right from the startups to reputed large-scale international corporations, as a software
                                developer, My tailor-made services aim to benefit everyone. With my web
                                design services, you can now easily overcome your competition and achieve your
                                objectives. I cater to your desires and will not disappoint you!</p>                
                </div>
            </div>
        </section>
        <!--Services Section End-->



        <!--Portfolio Section Start-->
        <section class="portfolio pt-100 pb-70" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Portfolio</h6>
                            <h2>Works I Have Done</h2>
                        </div>
                       
                    </div>
                </div>
                <div class="row portfolio-items">
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item application">
<<<<<<< HEAD
                        <div class="item-content">
                            <img src="images/portfolio/yray.png" alt="">
                            <div class="item-overlay">
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="https://yrayfx.com">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
=======
                        <div class="item-conten">
                           <a target="_blank" href="http://globalstreaming.herokuapp.com"> <img src="images/portfolio/img-6.jpg" alt=""></a>

>>>>>>> d4f63377e83d10dd15e1f67029283fb717080ce3
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item design">
<<<<<<< HEAD
                        <div class="item-content">
                            <img src="images/portfolio/havimar.png" alt="">
                            <div class="item-overlay">
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="havimar-headstart.herokuapp.com">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
=======
                        <div class="item-conten">
                           <a target="_blank" href="http://havimarheadstart.com"> <img src="images/portfolio/img-2.jpg" alt=""></a>
                           
>>>>>>> d4f63377e83d10dd15e1f67029283fb717080ce3
                        </div>
                    </div>
                   
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item development application">
<<<<<<< HEAD
                        <div class="item-content">
                            <img src="images/portfolio/dmn.png" alt="">
                            <div class="item-overlay">
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="https://demusicnavigators.herokuapp.com/">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
=======
                        <div class="item-conten">
                           <a target="_blank" href="https://demusicnavigators.herokuapp.com/"> <img src="images/portfolio/img-5.jpg" alt=""></a>
                           
>>>>>>> d4f63377e83d10dd15e1f67029283fb717080ce3
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--Portfolio Section End-->

        

        <!--Testimonials Section Start-->
        <section class="testimonials pt-100 pb-100" data-scroll-index="4" style="background-image: url('images/background/testimonials-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="owl-carousel owl-theme text-center">
                            <!--Testimonials Item-->
                            <div class="testimonial-item">
                            
                                <h5>Mr Oladele I.</h5>
                                <p>Thanks for the great job. I really appreciate everything you have
                                    done for me. I will highly recommend you to business people I meet.</p>
                            </div>
                            <!--Testimonials Item-->
                            <div class="testimonial-item">
                                
                                <h5>Mr Pritanjay M.</h5>
                                <p>Excellent work!! This freelancer is well experienced and has good knowledge in web development. Finished everything on time and even faster. Best freelancer and budget friendly. well mannered and understands a problem and deliver quick solution, I would recommend this freelancer to everyone. would hire him again.</p>
                            </div>
                            <!--Testimonials Item-->
                            <div class="testimonial-item">
                                <h5>Mr Adeboboye G.</h5>
                                <p>It's a wonder, I was spoiled for choice. You have done a good job. We will work
                                    together in other projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials Section End-->

        <!--Contact Section Start-->
        <section class="contact pt-100 pb-100" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading">
                            <h6>Contact</h6>
                            <h2>Get In Touch</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <!--Contact Form-->
                        <form method='POST' action="index.php"><input type='hidden' name='form-name' value='contactForm' />
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <!--name-->
                                    <input name="name" type="text" class="form-control con-validate" id="contact-name" placeholder="Name" minlength=3 >
                                </div>
                                <div class="col-md-6 form-group">
                                    <!--email-->
                                    <input name="email" type="email" class="form-control con-validate" id="contact-email" placeholder="Email" >
                                </div>
                                <div class="col-md-12 form-group">
                                    <!--message box-->
                                    <textarea name="message" class="form-control con-validate" id="contact-message" placeholder="How can I help you?" rows=6 ></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <!--contact button-->
                                    <button id="" type="submit" class="mt-30 main-btn">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Section End-->

        <!--Footer Start-->
        <footer class="pt-50 pb-50">
            <div class="container">
                <div class="row text-center">
                   
                    <div class="col-md-6 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Phone No.</h5>
                            <p>(+234) 802 9201 14</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Email</h5>
                            <p>mikkycody@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <hr>
                        <p class="copy pt-30">
                            Mikkycody &copy; 2020.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->

        <!--Jquery js-->
        <script src="../code.jquery.com/jquery-3.0.0.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!--Bootstrap js-->
        <script src="js/bootstrap.min.js"></script>
        <!--Stellar js-->
        <script src="js/jquery.stellar.js"></script>
        <!--Animated Headline js-->
        <script src="js/animated.headline.js"></script>
        <!--Owl Carousel js-->
        <script src="js/owl.carousel.min.js"></script>
        <!--ScrollIt js-->
        <script src="js/scrollIt.min.js"></script>
        <!--Isotope js-->
        <script src="js/isotope.pkgd.min.js"></script>
        <!--Magnific Popup js-->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!--Site Main js-->
        <script src="js/main.js"></script>
        <script type="text/javascript">
            function myFunction(){
                    swal({ 
                          title: "Success",
                          text: "Thank you for contacting me. I will get back to you soon!",
                          type: "success" 
                    },

            }
        </script>

    </body>

</html>
