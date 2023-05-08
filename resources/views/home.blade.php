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
                            <img src="images/leon.jpg"
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


    <section class="about section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="offset-4 col-lg-8 section-title-wrap d-flex justify-content-center align-items-center mb-4">
                    <h2 class="text-white me-4 mb-0">Wie ben ik?</h2>
                </div>

                <div class="row">
                    <div class="about-thumb">


                        <h3 class="pt-2 mb-3">A little bit about me</h3>

                        <p>
                            @php($age = \Carbon\Carbon::createFromFormat('Y-m-d', '2002-07-24')->age)
                            Mijn naam is Leon ter Maten. Ik ben geboren op 24 Juli 2002 in Zwolle en ben dus {{$age}}
                            jaar. Ik woon samen met mijn ouders, zusje en 2 katten in het centrum van Raalte.
                            Ik ben opgeleid als Developer op Landstede Raalte. Ondanks dat dit beroep erg uitdagend en
                            leuk is, kwam ik er tijdens mijn stage periode achter dat ik het contact met de klant erg
                            miste. Ik werkte destijds al als teamleider bij Dirk van den Broek en heb hier in overleg
                            met mijn leidinggevende ervoor gekozen om bij Dirk van den Broek de BBL-opleiding tot
                            retail manager te volgen.
                            <br/>
                            Ik ben flexibel en leergierig ik kan goed samenwerken en ben stressbestendig.
                            Het contact met klanten vind ik belangrijk en hier haal ik veel enthousiasme uit.
                        </p>

                    </div>
                </div>


            </div>
        </div>
    </section>

    {{--    <section class="services section-padding" id="section_3">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}

    {{--                <div class="col-lg-12 col-12 mx-auto">--}}
    {{--                    <div class="col-lg-8 section-title-wrap d-flex justify-content-center align-items-center mb-5">--}}
    {{--                          <h2 class="text-white ms-4 mb-0">Projecten</h2>--}}
    {{--                    </div>--}}

    {{--                    <div class="row">--}}
    {{--                        <div class="col-lg-12.  col-12">--}}
    {{--                            <div class="services-thumb">--}}
    {{--                                <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">--}}
    {{--                                    <h3 class="mb-0">Dirk van den Broek</h3>--}}
    {{--                                </div>--}}

    {{--                                <p>You may want to explore Too CSS for great collection of free HTML CSS--}}
    {{--                                    templates.</p>--}}

    {{--                                <a href="#" class="custom-btn custom-border-btn btn mt-3">Bekijk portfolio</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

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
                            <small class="projects-tag">Werk & Stagair | Developer</small>

                            <h3 class="projects-title">Ivesa</h3>
                        </div>

                        <img src="images/ivesa.jpg"
                             class="projects-image img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Werk | Teamleider</small>

                            <h3 class="projects-title">Dirk van den Broek</h3>
                        </div>


                        <img src="images/dirk.png"
                             class="projects-image img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Vrijwillegers werk | Horeca & logistiek</small>

                            <h3 class="projects-title">Stoppelhaene</h3>
                        </div>

                        <img src="images/stoppelhaene.jpg"
                             class="projects-image img-fluid" alt="">

                    </div>
                </div>

                <div class="offset-lg-2 col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Vrijwillegers werk | Horeca & logistiek</small>

                            <h3 class="projects-title">Ribs & Blues</h3>
                        </div>
                        <img src="images/ribs-blues.jpg"
                             class="projects-image img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Vrijwillegers werk | Horeca & logistiek</small>

                            <h3 class="projects-title">Bevrijdings festival</h3>
                        </div>
                        <img src="images/BFO.png"
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
                                Brugstraat 20, 8102ES Raalte
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
                                <p class="mb-0">Sociale Hygiene <small class="projects-tag">2022</small></p>

                            </li>
                            <li>
                                <p class="mb-0">Bedrijfshulp verlening <small class="projects-tag">2022</small></p>
                            </li>
                        </ul>

                        <strong class="site-footer-title d-block mt-4 mb-3">Eigenshappen</strong>
                        <ul>
                            <li>
                                <p class="mb-0">Flexibel</p>
                            </li>
                            <li>
                                <p class="mb-0">Stressbestendig</p>
                            </li>
                            <li>
                                <p class="mb-0">Klantgericht</p>
                            </li>
                        </ul>


                        <strong class="site-footer-title d-block mt-4 mb-3">Talen</strong>
                        <ul>
                            <li>
                                <p class="mb-0">Nederlands <small class="projects-tag">Moedertaal</small></p>
                            </li>
                            <li>
                                <p class="mb-0">Engels <small class="projects-tag">Goed</small></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6 col-12 ps-lg-0">
                    <div class="contact-info d-flex flex-column">
                        <h3 class="projects-title border-bottom  pb-2">Opleidingen</h3>
                        <ul style="list-style: none">
                            <li>
                                <p class="mb-0">Applicatie- en Mediaontwikkelaar | MBO 4 <small class="projects-tag">2018
                                        - 2021</small></p>
                            </li>
                            <li>
                                <p class="mb-0">Retail Manager | MBO 4 <small class="projects-tag">2021 - heden</small>
                                </p>
                            </li>
                        </ul>

                        <h3 class="projects-title border-bottom pb-2">Werkervaring</h3>

                        <h6 class="mb-2">
                            Dirk van den Broek
                        </h6>

                        <ul style="list-style: none">
                            <li>
                                <p class="mb-0">Vulploegmedewerker <small class="projects-tag">2017 - 2019</small></p>
                            </li>
                            <li>
                                <p class="mb-0">Verkoopmedewerker <small class="projects-tag">2019 - 2020</small></p>
                            </li>
                            <li>
                                <p class="mb-0">Teamleider <small class="projects-tag">2020 - heden</small></p>
                            </li>
                        </ul>

                        <h6 class="mb-2">
                            Ivesa
                        </h6>

                        <ul style="list-style: none">
                            <li>
                                <p class="mb-0">Developer <small class="projects-tag">Feb 2020 - Sep 2021</small></p>
                            </li>
                        </ul>


                        <h3 class="projects-title border-bottom pb-2">Stages</h3>

                        <h6 class="mb-2">
                            Ivesa
                        </h6>

                        <ul style="list-style: none">
                            <li>
                                <p class="mb-0">Developer <small class="projects-tag">Aug 2019 - Feb 2020 & Feb 2021 -
                                        Juli 2021 </small></p>
                            </li>
                        </ul>

                        <h6 class="mb-2">
                            Dirk van den broek
                        </h6>

                        <ul style="list-style: none">
                            <li>
                                <p class="mb-0">BBL stagair <small class="projects-tag">Aug 2021 - heden </small></p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </section>
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
