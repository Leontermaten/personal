<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Leon ter Maten</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d0be48a0bc.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/custom.js"></script>

    <script type="text/javascript">
        $(window).on('load', function () {
            $('#ModalDirk').modal('show');
        });
    </script>
</head>
<body>

<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="#section_1" class="navbar-brand mx-auto mx-lg-0">Leon</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">Wie ben ik</a>
                </li>

                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link click-scroll" href="#section_3">Projecten</a>--}}
                {{--                </li>--}}

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Werkervaring</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_5">CV</a>
                </li>
            </ul>

            <div class="d-lg-flex align-items-center d-none ms-auto">
                <a class="custom-btn btn" target="_blank"
                   href="https://www.linkedin.com/in/leon-ter-maten-591070193/">
                    <i class="fa-brands fa-linkedin fa-xl mt-3"></i>
                </a>
                <a class="custom-btn btn ms-3" target="_blank"
                   href="https://www.instagram.com/leon_termaten/">
                    <i class="fa-brands fa-instagram fa-xl mt-3"></i>
                </a>
            </div>
        </div>

    </div>
</nav>

<main>
    <section class="hero d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <div class="hero-text">
                        <div class="hero-title-wrap d-flex align-items-center mb-4">
                            <img src="{{url("images/leon.jpg")}}"
                                 class="avatar-image avatar-image " alt="">

                            <h1 class="hero-title ms-3 mb-0">Hey hallo!</h1>
                        </div>

                        <h2 class="mb-4">Welkom op mijn website</h2>
                        <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Wie ben ik?</a></p>
                    </div>
                </div>

                {{--                <div class="col-lg-5 col-12 position-relative">--}}
                {{--                    <div class="hero-image-wrap"></div>--}}
                {{--                    <img src="images/portrait-happy-excited-man-holding-laptop-computer.png"--}}
                {{--                         class="hero-image img-fluid" alt="">--}}
                {{--                </div>--}}

            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#535da1" fill-opacity="1"
                  d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,
                  576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,
                  1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,
                  0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576
                  ,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path>
        </svg>
    </section>

    <section class="services section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mx-auto">
                    <div class="col-lg-8 section-title-wrap d-flex justify-content-center align-items-center mb-5">
                        <h2 class="text-white me-4 mb-0">Wie ben ik?</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-12.  col-12">
                            <div class="services-thumb">
                                <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                    <h3 class="pt-2 mb-3">A little bit about me</h3>
                                </div>

                                <p>
                                    @php($age = \Carbon\Carbon::createFromFormat('Y-m-d', '2002-07-24')->age)
                                    Mijn naam is Leon ter Maten. Ik ben geboren op 24 Juli 2002 in Zwolle en ben
                                    dus {{$age}}
                                    jaar. Ik woon samen met mijn ouders, zusje en 2 katten in het centrum van Raalte.
                                    Ik ben opgeleid als Developer op Landstede Raalte. Ondanks dat dit beroep erg
                                    uitdagend en
                                    leuk is, kwam ik er tijdens mijn stage periode achter dat ik het contact met de
                                    klant erg
                                    miste. Ik werkte destijds al als teamleider bij Dirk van den Broek en heb hier in
                                    overleg
                                    met mijn leidinggevende ervoor gekozen om bij Dirk van den Broek de BBL-opleiding
                                    tot
                                    retail manager te volgen.
                                    <br/> <br/>
                                    Ik ben leergierig ingesteld ik ben stressbestendig en kan goed samenwerken.
                                    Het contact met klanten vind ik belangrijk en hier haal ik veel enthousiasme uit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-12 ms-auto">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                        <h2 class="text-white ms-4 mb-0">Werkervaring</h2>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Werk & Stagair</small>

                            <h3 class="projects-title">Ivesa</h3>
                        </div>

                        <img src="{{url("images/ivesa.jpg")}}"
                             class="projects-image img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Werk</small>

                            <h3 class="projects-title">Dirk van den Broek</h3>
                        </div>


                        <img src="{{url("images/dirk.png")}}"
                             class="projects-image img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Vrijwillegers werk</small>

                            <h3 class="projects-title">Stoppelhaene</h3>
                        </div>

                        <img src="{{url("images/stoppelhaene.jpg")}}"
                             class="projects-image img-fluid" alt="">

                    </div>
                </div>

                <div class="offset-lg-2 col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Vrijwillegers werk</small>

                            <h3 class="projects-title">Ribs & Blues</h3>
                        </div>
                        <img src="{{url("images/ribs-blues.jpg")}}"
                             class="projects-image img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Vrijwillegers werk</small>

                            <h3 class="projects-title">Bevrijdings festival</h3>
                        </div>
                        <img src="{{url("images/BFO.png")}}"
                             class="projects-image img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-12">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                        <h2 class="text-white ms-4 mb-0">CV</h2>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row col-lg-12">
                    <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                        <div class="contact-info contact-info-border-start d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3">Contact</strong>

                            <ul class="contact-icon">
                                <li class="contact-icon-item">
                                    <a class="contact-icon-link fa-solid fa-phone"></a>
                                    +31 06 15925213
                                </li>

                                <li class="contact-icon-item">
                                    <a class="contact-icon-link fa-solid fa-envelope"></a>
                                    Leontermaten@gmail.com
                                </li>

                                <li class="contact-icon-item">
                                    <a class="contact-icon-link fa-solid fa-location-dot"></a>
                                    Brugstraat 20, 8102 ES Raalte
                                </li>
                                <li class="contact-icon-item">
                                    <a class="contact-icon-link fa-solid fa-calendar"></a>
                                    24 Juli 2002
                                </li>
                                <li class="contact-icon-item">
                                    <a class="contact-icon-link fa-solid fa-flag"></a>
                                    Nederlandse
                                </li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Certificaten</strong>
                            <ul>
                                <li>
                                    <p class="mb-0">Sociale Hygiene <small class="contact-tag">2022</small></p>

                                </li>
                                <li>
                                    <p class="mb-0">Bedrijfshulpverlening <small class="contact-tag">2022</small></p>
                                </li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Competenties</strong>
                            <ul>
                                <li>
                                    <p class="mb-0">Commercieel</p>
                                </li>
                                <li>
                                    <p class="mb-0">Flexibel</p>
                                </li>
                                <li>
                                    <p class="mb-0">Georganiseerd</p>
                                </li>
                                <li>
                                    <p class="mb-0">Klantgericht</p>
                                </li>
                                <li>
                                    <p class="mb-0">Stressbestendig</p>
                                </li>
                            </ul>


                            <strong class="site-footer-title d-block mt-4 mb-3">Talen</strong>
                            <ul>
                                <li>
                                    <div class="skill-bar">
                                        <span>Nederlands</span>
                                        <div class="skill-level">
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-bar">
                                        <span>Engels</span>
                                        <div class="skill-level">
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-bar">
                                        <span>Duits</span>
                                        <div class="skill-level">
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Vaardigheden</strong>
                            <ul>
                                <li>
                                    <div class="skill-bar">
                                        <span>MS Office</span>
                                        <div class="skill-level">
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-bar">
                                        <span>Excel</span>
                                        <div class="skill-level">
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-bar">
                                        <span>HTML & CSS</span>
                                        <div class="skill-level">
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-bar">
                                        <span>PHP </span>
                                        <div class="skill-level">
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-bar">
                                        <span>Laravel </span>
                                        <div class="skill-level">
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="fill dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-6 col-12 ps-lg-0">
                        <div class="contact-info d-flex flex-column">
                            <h3 class="projects-title border-bottom  pb-2">Opleidingen</h3>
                            <ul style="list-style: none">
                                <li>
                                    <span class="mb-0">Applicatie- en Mediaontwikkelaar | MBO 4</span>
                                    <span class="work-tag">2018 - 2021</span>
                                </li>
                                <li>
                                    <span class="mb-0">Retail Manager | MBO 4</span>
                                    <span class="work-tag">2021 - heden</span>
                                </li>
                            </ul>

                            <h3 class="projects-title border-bottom pb-2">Werkervaring</h3>

                            <div class="work-icon">
                                <div class="work-icon-item">
                                    <h6 class="mb-2">
                                        Dirk van den Broek
                                        <i class="work-icon-link fa-solid fa-info" data-bs-toggle="modal"
                                           data-bs-target="#ModalDirk"></i>
                                    </h6>
                                </div>
                            </div>

                            <ul style="list-style: none">
                                <li>
                                    <span class="mb-0">Vulploegmedewerker</span>
                                    <span class="work-tag">2017 - 2019</span>

                                </li>
                                <li>
                                    <span class="mb-0">Verkoopmedewerker</span>
                                    <span class="work-tag">2019 - 2020</span>
                                </li>
                                <li>
                                    <span class="mb-0">Teamleider</span>
                                    <span class="work-tag">2020 - heden</span>
                                </li>
                            </ul>

                            <div class="work-icon">
                                <div class="work-icon-item">
                                    <h6 class="mb-2">
                                        Ivesa
                                        <i class="work-icon-link fa-solid fa-info" data-bs-toggle="modal"
                                           data-bs-target="#ModalIvesa"></i>
                                    </h6>
                                </div>
                            </div>
                            <ul style="list-style: none">
                                <li>
                                    <span>Developer </span>
                                    <span class="work-tag">Feb 2020 - Sep 2021</span>
                                </li>
                            </ul>

                            <div class="work-icon">
                                <div class="work-icon-item">
                                    <h6 class="mb-2">
                                        Stoppelhaene
                                        <i class="work-icon-link fa-solid fa-info" data-bs-toggle="modal"
                                           data-bs-target="#ModalStoppelhaene"></i>
                                    </h6>
                                </div>
                            </div>

                            <ul style="list-style: none">
                                <li>
                                    <span class="mb-0">Horeca | Runner | Technische dienst </span>
                                    <span class="work-tag">Diverse edities</span>
                                </li>
                            </ul>

                            <div class="work-icon">
                                <div class="work-icon-item">
                                    <h6 class="mb-2">
                                        Ribs & Blues
                                        <i class="work-icon-link fa-solid fa-info" data-bs-toggle="modal"
                                           data-bs-target="#ModalRibs"></i>
                                    </h6>
                                </div>
                            </div>

                            <ul style="list-style: none">
                                <li>
                                    <span class="mb-0">Horeca | Runner | Technische dienst | Finance  </span>
                                    <span class="work-tag">Diverse edities</span>
                                </li>
                            </ul>

                            <div class="work-icon">
                                <div class="work-icon-item">
                                    <h6 class="mb-2">
                                        Bevrijdings Festival Overijssel
                                        <i class="work-icon-link fa-solid fa-info" data-bs-toggle="ModalBFO"
                                           data-bs-target="#ModalBFO"></i>
                                    </h6>
                                </div>
                            </div>

                            <ul style="list-style: none">
                                <li>
                                    <span class="mb-0">Horeca | Runner </span>
                                    <span class="work-tag">Diverse edities</span>
                                </li>
                            </ul>

                            <h3 class="projects-title border-bottom pb-2">Stages</h3>

                            <h6 class="mb-2">
                                Ivesa
                            </h6>

                            <ul style="list-style: none">
                                <li>
                                    <span class="mb-0">Developer </span>
                                    <span class="work-tag">Aug 2019 - Feb 2020 & Feb 2021 - Juli2021 </span>
                                </li>
                            </ul>

                            <h6 class="mb-2">
                                Dirk van den broek
                            </h6>

                            <ul style="list-style: none">
                                <li>
                                    <span class="mb-0">BBL stagair </span>
                                    <span class="work-tag">Aug 2021 -heden </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="ModalDirk" tabindex="-1" aria-labelledby="ModalDirk"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">

                                <div class="col-lg-12 col-md-8 col-12">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="pt-2 mb-3">Dirk van den Broek</h3>
                                    </div>
                                </div>

                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                                    Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalIvesa" tabindex="-1" aria-labelledby="ModalIvesa"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">

                                <div class="col-lg-12 col-md-8 col-12">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="pt-2 mb-3">Dirk van den Broek</h3>
                                    </div>
                                </div>

                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                                    Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalStoppelhaene" tabindex="-1" aria-labelledby="ModalStoppelhaene"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">

                                <div class="col-lg-12 col-md-8 col-12">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="pt-2 mb-3">Dirk van den Broek</h3>
                                    </div>
                                </div>

                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                                    Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalRibs" tabindex="-1" aria-labelledby="ModalRibs"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">

                                <div class="col-lg-12 col-md-8 col-12">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="pt-2 mb-3">Dirk van den Broek</h3>
                                    </div>
                                </div>

                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                                    Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ModalBFO" tabindex="-1" aria-labelledby="ModalBFO"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">

                                <div class="col-lg-12 col-md-8 col-12">
                                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                        <h3 class="pt-2 mb-3">Dirk van den Broek</h3>
                                    </div>
                                </div>

                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                                    Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="copyright-text-wrap">
                    <p class="mb-0">
                        @php($year =  \Carbon\Carbon::now()->year)
                        <span class="copyright-text">Copyright ©  Leon ter Maten {{$year}} </span>
                        Design:
                        <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>
</body>
</html>

