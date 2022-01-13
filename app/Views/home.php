<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://file.valofe.com/Valofe_file/web/vfun/css/font-awesome.4.6.2-custom.css">-->
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Font Awesome icons (free version)-->
    <!--<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>-->

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!--
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    -->
    <!-- Template Main CSS File -->
    <link href="<?= base_url('/proposal/css/style.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo site_url('Home')?>">CERENITY STUDIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('Home')?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Intro</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Introduction</a></li>
                            <li><a class="dropdown-item" href="#">News</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Business Introduction</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Business Area</a></li>
                            <li><a class="dropdown-item" href="#">Our Game</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('JobDetails')?>">Job Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('/submit-proposal') ?>">Submit
                                    Proposal</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/proposal-status') ?>">Proposal Status</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="img-fluid" autoplay loop muted>
                    <source src="<?php echo base_url('video/1.mp4')?>" type="video/mp4">
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>INFECT CLEAN</h5>
                    <p>2D Covid Educational Game</p>
                </div>
            </div>
            <div class="carousel-item">
                <video class="img-fluid" autoplay loop muted>
                    <source src="<?php echo base_url('video/2.mp4')?>" type="video/mp4">
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>LOST SAGA</h5>
                    <p>3D Fighting Casual MMO</p>
                </div>
            </div>
            <div class="carousel-item">
                <video class="img-fluid" autoplay loop muted>
                    <source src="<?php echo base_url('video/3.mp4')?>" type="video/mp4">
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>FLYFF ONLINE</h5>
                    <p>Fly For Fun</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Service -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">What we do</h2>
                <h3 class="section-subheading text-muted">Our Service</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">PC & Mobile<br>Game Publishing</h4>
                    <p class="text-muted">Based on the Asian market<br>We are serving the Global Game<br>Service
                        Business</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">PC & Mobile<br>Game Developing</h4>
                    <p class="text-muted">WEB, Mobile Game Everywhere<br>You can enjoy the CERENITY STUDIO Games.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">PC & Mobile<br>Game Operating</h4>
                    <p class="text-muted">Not only Indonesian and English but<br>also Korean, Chinese,
                        Japanese,<br>German, French and Turkish,<br>We support various languages for<br>our global
                        users.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">We are a studio that focuses on online game development<br>We
                    provide a large selection of online games for your company or startup to publish.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2019</h4>
                            <h4 class="subheading">Our Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">First time we created a community consisting of people who like
                                playing video games, then from there we focused on developing the game and how to
                                operate it</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2020</h4>
                            <h4 class="subheading">Our First Online Game</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">We success opened a new online game based on desktop called "Archisect
                                Online" with genre MMORPG 2D Pixel Game, started on medieval era.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>January - May 2021</h4>
                            <h4 class="subheading">Second Online Game</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">After our first successful online game we continue to develop an
                                online game called "FlyFF Arcadia" with genre MMORPG 3D, started on a magical world</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>June - December 2021</h4>
                            <h4 class="subheading">Third Online Game Development</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">We are keep continuing to develop our next Online Game called "Lost
                                Saga Cerenity" is an Online Game based on 3D Action Casual Fighting MMO that comes with
                                original Lost Saga content. Battle mechanics, Combo Hero Swap Combinations, and varied
                                game modes will provide a more interesting and challenging playing experience. There are
                                hundreds of Heroes with unique abilities that can be played and owned for FREE!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Proposal -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Business Proposal</h1>
            <h2>Please send your inquiry if you have a business proposal for CERENITY STUDIO
                about games and partnerships.</h2>
            <a href="<?= base_url('/submit-proposal') ?>" class="btn-get-started">Proposal</a>
        </div>

        <div class="container position-relative row gy-4 mt-5 justify-content-center" data-aos="zoom-in"
            data-aos-delay="100">
            <div class="col-xl-2 col-md-4">
                <img src="<?= base_url('/static/images/main/partner-1.png') ?>" alt="Write Business Proposal">
                <h2>Write Business Proposal</h2>
            </div>
            <div class="col-xl-2 col-md-4">
                <img src="<?= base_url('/static/images/main/partner-2.png') ?>" alt="Check Business Proposal">
                <h2>Check Business Proposal</h2>
            </div>
            <div class="col-xl-2 col-md-4">
                <img src="<?= base_url('/static/images/main/partner-3.png') ?>" alt="Coordinate the contract detail">
                <h2>Coordinate the contract detail</h2>
            </div>
            <div class="col-xl-2 col-md-4">
                <img src="<?= base_url('/static/images/main/partner-4.png') ?>" alt="Conclusion of contract">
                <h2>Conclusion of contract</h2>
            </div>
        </div>
    </section>
</body>

<!-- Footer -->
<!--
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <div class="container pt-4">
            <section class="mb-4">
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
            </section>
        </div>

        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://sfcerenity.org/">Cerenity Studio</a>
        </div>
    </footer>
-->
<footer class="footer-48201">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pr-md-5">
                <a href="#" class="footer-site-logo d-block mb-4">Cerenity Studio</a>
                <p>CEO Cerenity Studio Or., Soleil et Lune Or. : Naufal Fahim Murran | Address: Gedung Gandaria 8 Lt.20
                    Unit B-C, Gandaria City Jl.Sultan Iskandar Muda Kebayoran Lama, Jakarta
                    Selatan, Kota Jakarta Selatan, DKI Jakarta (12240)</p>
                <p>Personal Information Manager: Naufal Fahim Murran | Phone: (+62) 8221-3389-568 | Fax: (021) 29303499
                </p>
                <p></p>
            </div>
            <div class="col-md">
                <ul class="list-unstyled nav-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Partners</a></li>
                </ul>
            </div>
            <div class="col-md text-md-center">
                <p class=""><a href="mailto:support@cs.sferenity.org" class="btn btn-tertiary">Contact Us</a></p>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 text-center">
                <div class="copyright mt-5 pt-5">
                    <p><small>&copy; 2019-2021 All Rights Reserved.</small></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</html>