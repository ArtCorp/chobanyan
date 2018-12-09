<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title>LRK - Creative vCard Template</title>
    <!--=====================================================
        CSS Stylesheets
    =====================================================-->
    <link rel='stylesheet' type='text/css' href='{{ asset('css/bootstrap.min.css') }}'>
    <link rel='stylesheet' type='text/css' href='{{ asset('css/linea.css') }}'>
    <link rel='stylesheet' type='text/css' href='{{ asset('css/ionicons.min.css') }}'>
    <link rel='stylesheet' type='text/css' href='{{ asset('css/owl.carousel.css') }}'>
    <link rel='stylesheet' type='text/css' href='{{ asset('css/magnific-popup.css') }}'>
    <link rel='stylesheet' type='text/css' href='{{ asset('css/style.css') }}'>
</head>
<body>


<!--=====================================================
    Preloader
=====================================================-->
<div id='preloader'>
    <div class='loader'>
        <img src='{{ asset('img/preloader.gif') }}' alt>
    </div>
</div>
<div class='main-content'>
    <!--=====================================================
        Menu Button
    =====================================================-->
    <a href='#' class='menu-btn'>
				<span class='lines'>
					<span class='l1'></span>
					<span class='l2'></span>
					<span class='l3'></span>
				</span>
    </a>
    <!--=====================================================
        Menu
    =====================================================-->
    <div class='menu'>
        <div class='inner'>
            <ul class='menu-items'>
                <li>
                    <a href='#' class='section-toggle' data-section='intro'>
                        Home
                    </a>
                </li>
                <li>
                    <a href='#about' class='section-toggle' data-section='about'>
                        About
                    </a>
                </li>
                <li>
                    <a href='#resume' class='section-toggle' data-section='resume'>
                        Resume
                    </a>
                </li>
                <li>
                    <a href='#portfolio' class='section-toggle' data-section='portfolio'>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href='#contact' class='section-toggle' data-section='contact'>
                        Contact
                    </a>
                </li>
                <li>
                    <a href='#Blog' class='section-toggle' data-section='blog'>
                        Blog
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--=====================================================
        Sections
    =====================================================-->
    <div class='sections'>
        <!--=====================================================
            Main Section
        =====================================================-->
        <section id='intro' class='section section-main active'>
            <div class='container-fluid'>
                <div class='v-align'>
                    <div class='inner'>
                        <div class='intro-text'>
                            <h1>Arthur Chobanyan</h1>
                            <p>
                                A cool and creative developer that makes websites.
                            </p>
                            <div class='intro-btns'>
                                <a href='#about' class='btn-custom section-toggle' data-section='about'>
                                    Discover More
                                </a>
                                <a href='#contact' class='btn-custom section-toggle' data-section='contact'>
                                    Contact My
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--=====================================================
            About Section
        =====================================================-->
        <section id='about' class='section about-section border-d'>
            <div class='section-block about-block'>
                <div class='container-fluid'>
                    <div class='section-header'>
                        <h2>
                            I'm a <strong>Backend Developer</strong> & <strong>Sometimes Frontend Developer</strong>
                        </h2>
                    </div>
                    <div class='row'>
                        <div class='col-md-4'>
                            <ul class='info-list'>
                                <li>
                                    <strong>Name:</strong>
                                    <span>Arthur Chobanyan</span>
                                </li>
                                <li>
                                    <strong>Job:</strong>
                                    <span>Developer</span>
                                </li>
                                <li>
                                    <strong>Age:</strong>
                                    <span>22 Years</span>
                                </li>
                                <li>
                                    <strong>Residence:</strong>
                                    <span>Armenia</span>
                                </li>
                                <li>
                                    <strong>Hometown:</strong>
                                    <span>Everywhere</span>
                                </li>
                            </ul>
                        </div>
                        <div class='col-md-8'>
                            <div class='about-text'>
                                <p>
                                    There should be a creative beautiful text, but I Backend Developer....
                                </p>
                            </div>
                            <div class='about-btns'>
                                <!--<a href='#' class='btn-custom btn-dark' >-->
                                <!--Download Resume-->
                                <!--</a>-->
                                <a href='#contact' class='btn-custom btn-dark section-toggle' data-section='contact'>
                                    Contact My
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class='section-block services-block' >-->

            <!--<div class='container-fluid' >-->

            <!--<div class='section-header' >-->

            <!--<h2>My <strong class='color' >Services</strong></h2>-->

            <!--</div>-->


            <!--<div class='row' >-->

            <!--<div class='col-md-4' >-->
            <!--<div class='service' >-->

            <!--<div class='icon' >-->
            <!--<i class='icon-basic-photo' ></i>-->
            <!--</div>-->

            <!--<div class='content' >-->

            <!--<h4>Photography</h4>-->

            <!--<p>-->
            <!--Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum.-->
            <!--</p>-->

            <!--</div>-->

            <!--</div>-->
            <!--</div>-->

            <!--<div class='col-md-4' >-->
            <!--<div class='service' >-->

            <!--<div class='icon' >-->
            <!--<i class='icon-basic-keyboard' ></i>-->
            <!--</div>-->

            <!--<div class='content' >-->

            <!--<h4>Programming</h4>-->

            <!--<p>-->
            <!--Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum.-->
            <!--</p>-->

            <!--</div>-->

            <!--</div>-->
            <!--</div>-->

            <!--<div class='col-md-4' >-->
            <!--<div class='service' >-->

            <!--<div class='icon' >-->
            <!--<i class='ion-social-wordpress-outline' ></i>-->
            <!--</div>-->

            <!--<div class='content' >-->

            <!--<h4>WordPress</h4>-->

            <!--<p>-->
            <!--Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum.-->
            <!--</p>-->

            <!--</div>-->

            <!--</div>-->
            <!--</div>-->


            <!--</div>-->


            <!--</div>-->

            <!--</div>-->

            <div class='section-block skills-block'>
                <div class='container-fluid'>
                    <div class='section-header'>
                        <h2>
                            My Main <strong class='color'>Stack</strong>
                        </h2>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class='skill'>
                                <h4>HTML / CSS / SASS</h4>
                                <div class='bar'>
                                    <div class='percent' style='width:95%;'></div>
                                </div>
                            </div>
                            <div class='skill'>
                                <h4>PHP / OOP / Laravel</h4>
                                <div class='bar'>
                                    <div class='percent' style='width:90%;'></div>
                                </div>
                            </div>
                            <div class='skill'>
                                <h4>JavaScript</h4>
                                <div class='bar'>
                                    <div class='percent' style='width:85%;'></div>
                                </div>
                            </div>
                        </div>
                        {{--<div class='col-md-6'>--}}
                            {{--<div class='skill'>--}}
                                {{--<h4>JavaScript</h4>--}}
                                {{--<div class='bar'>--}}
                                    {{--<div class='percent' style='width:85%;'></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class='skill'>--}}
                                {{--<h4>Node js</h4>--}}
                                {{--<div class='bar'>--}}
                                    {{--<div class='percent' style='width:40%;'></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class='skill'>--}}
                                {{--<h4>Vue js</h4>--}}
                                {{--<div class='bar'>--}}
                                    {{--<div class='percent' style='width:40%;'></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <div class='section-block skills-block'>
                <div class='container-fluid'>
                    <div class='section-header'>
                        <h2>
                            My <strong class='color'>Skills</strong>
                        </h2>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class='skill'>
                                <h4>Go Lang</h4>
                                <div class='bar'>
                                    <div class='percent' style='width:30%;'></div>
                                </div>
                            </div>
                            <div class='skill'>
                                <h4>Node js</h4>
                                <div class='bar'>
                                    <div class='percent' style='width:30%;'></div>
                                </div>
                            </div>
                            <div class='skill'>
                                <h4>REACT JS / REACT NATIVE</h4>
                                <div class='bar'>
                                    <div class='percent' style='width:30%;'></div>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='skill'>
                                <h4>Vue js</h4>
                                <div class='bar'>
                                    <div class='percent' style='width:40%;'></div>
                                </div>
                            </div>
                            <div class='skill'>
                                <h4>Angular JS / Angular 2+</h4>
                                <div class='bar'>
                                    <div class='percent' style='width:30%;'></div>
                                </div>
                            </div>
                            <div class='skill'>
                                <h4>Linux / Ubuntu 18.04</h4>
                                <div class='bar'>
                                    <div class='percent' style='width:40%;'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class='section-block pricing-block' >-->

            <!--<div class='section-header' >-->
            <!--<h2>My <strong class='color' >Pricing</strong></h2>-->
            <!--</div>-->


            <!--<div class='row' >-->

            <!--<div class='col-md-4' >-->

            <!--<div class='p-table' >-->

            <!--<div class='header' >-->

            <!--<h4>Basic</h4>-->

            <!--<div class='price' >-->
            <!--<span class='currency' >$</span>-->
            <!--<span class='amount' >19</span>-->
            <!--<span class='period' >/HR</span>-->
            <!--</div>-->


            <!--</div>-->

            <!--<ul class='items' >-->
            <!--<li>-->
            <!--App Designing-->
            <!--</li>-->
            <!--<li>-->
            <!--App Development-->
            <!--</li>-->
            <!--<li>-->
            <!--Web Development-->
            <!--</li>-->
            <!--</ul>-->

            <!--<a href='#' class='btn-custom btn-dark' >-->
            <!--Choose This-->
            <!--</a>-->

            <!--</div>-->

            <!--</div>-->

            <!--<div class='col-md-4' >-->

            <!--<div class='p-table' >-->

            <!--<div class='header' >-->

            <!--<h4>Pro</h4>-->

            <!--<div class='price' >-->
            <!--<span class='currency' >$</span>-->
            <!--<span class='amount' >29</span>-->
            <!--<span class='period' >/HR</span>-->
            <!--</div>-->


            <!--</div>-->

            <!--<ul class='items' >-->
            <!--<li>-->
            <!--App Designing-->
            <!--</li>-->
            <!--<li>-->
            <!--App Development-->
            <!--</li>-->
            <!--<li>-->
            <!--Web Development-->
            <!--</li>-->
            <!--</ul>-->

            <!--<a href='#' class='btn-custom btn-dark' >-->
            <!--Choose This-->
            <!--</a>-->

            <!--</div>-->

            <!--</div>-->

            <!--<div class='col-md-4' >-->

            <!--<div class='p-table' >-->

            <!--<div class='header' >-->

            <!--<h4>Gold</h4>-->

            <!--<div class='price' >-->
            <!--<span class='currency' >$</span>-->
            <!--<span class='amount' >39</span>-->
            <!--<span class='period' >/HR</span>-->
            <!--</div>-->


            <!--</div>-->

            <!--<ul class='items' >-->
            <!--<li>-->
            <!--App Designing-->
            <!--</li>-->
            <!--<li>-->
            <!--App Development-->
            <!--</li>-->
            <!--<li>-->
            <!--Web Development-->
            <!--</li>-->
            <!--</ul>-->

            <!--<a href='#' class='btn-custom btn-dark' >-->
            <!--Choose This-->
            <!--</a>-->

            <!--</div>-->

            <!--</div>-->


            <!--</div>-->


            <!--</div>-->

        </section>
        <!--=====================================================
            Resume Section
        =====================================================-->
        <section id='resume' class='section resume-section border-d'>
            <div class='section-block timeline-block'>
                <div class='container-fluid'>
                    <div class='section-header'>
                        <h2>My <strong class='color'>Education</strong></h2>
                    </div>
                    <ul class='timeline'>
                        <li>
                            <div class='timeline-content'>
                                <h4>CSS College Larkana</h4>
                                <em>
                                    <span>Masters Degree</span>
                                    <span>2013-2016</span>
                                </em>
                                <p>
                                    Te sea deleniti suscipiantur deterruisset, eu quis detracto sapientem mea. An purto
                                    dicunt deserunt vix, eam te iudico tritani.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class='timeline-content'>
                                <h4>Cool School Larkana</h4>
                                <em>
                                    <span>Masters Degree</span>
                                    <span>2013-2016</span>
                                </em>
                                <p>
                                    Te sea deleniti suscipiantur deterruisset, eu quis detracto sapientem mea. An purto
                                    dicunt deserunt vix, eam te iudico tritani.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class='timeline-content'>
                                <h4>The Techno Larkana</h4>
                                <em>
                                    <span>Masters Degree</span>
                                    <span>2013-2016</span>
                                </em>
                                <p>
                                    Te sea deleniti suscipiantur deterruisset, eu quis detracto sapientem mea. An purto
                                    dicunt deserunt vix, eam te iudico tritani.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class='section-block timeline-block'>
                <div class='container-fluid'>
                    <div class='section-header'>
                        <h2>My <strong class='color'>Experience</strong></h2>
                    </div>
                    <ul class='timeline'>
                        <li>
                            <div class='timeline-content'>
                                <h4>ThemeForest</h4>
                                <em>
                                    <span>Masters Degree</span>
                                    <span>2013-2016</span>
                                </em>
                                <p>
                                    Te sea deleniti suscipiantur deterruisset, eu quis detracto sapientem mea. An purto
                                    dicunt deserunt vix, eam te iudico tritani.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class='timeline-content'>
                                <h4>CodeCanyon</h4>
                                <em>
                                    <span>Masters Degree</span>
                                    <span>2013-2016</span>
                                </em>
                                <p>
                                    Te sea deleniti suscipiantur deterruisset, eu quis detracto sapientem mea. An purto
                                    dicunt deserunt vix, eam te iudico tritani.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class='timeline-content'>
                                <h4>Blogger</h4>
                                <em>
                                    <span>Masters Degree</span>
                                    <span>2013-2016</span>
                                </em>
                                <p>
                                    Te sea deleniti suscipiantur deterruisset, eu quis detracto sapientem mea. An purto
                                    dicunt deserunt vix, eam te iudico tritani.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--<div class='section-block testimonials-block' >-->

            <!--<div class='container-fluid' >-->

            <!--<div class='section-header' >-->

            <!--<h2>My <strong class='color' >Clients</strong></h2>-->

            <!--</div>-->


            <!--<div class='testimonials-slider' >-->


            <!--<div class='testimonial' >-->

            <!--<div class='icon' >-->
            <!--<i class='ion-quote' ></i>-->
            <!--</div>-->

            <!--<p>-->
            <!--Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.-->
            <!--</p>-->

            <!--<div class='author' >-->
            <!--<h4>Jake Doe</h4>-->
            <!--<span>CEO at Company</span>-->
            <!--</div>-->

            <!--</div>-->

            <!--<div class='testimonial' >-->

            <!--<div class='icon' >-->
            <!--<i class='ion-quote' ></i>-->
            <!--</div>-->

            <!--<p>-->
            <!--Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.-->
            <!--</p>-->

            <!--<div class='author' >-->
            <!--<h4>Jake Doe</h4>-->
            <!--<span>CEO at Company</span>-->
            <!--</div>-->

            <!--</div>-->


            <!--<div class='testimonial' >-->

            <!--<div class='icon' >-->
            <!--<i class='ion-quote' ></i>-->
            <!--</div>-->

            <!--<p>-->
            <!--Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.-->
            <!--</p>-->

            <!--<div class='author' >-->
            <!--<h4>Jake Doe</h4>-->
            <!--<span>CEO at Company</span>-->
            <!--</div>-->

            <!--</div>-->

            <!--<div class='testimonial' >-->

            <!--<div class='icon' >-->
            <!--<i class='ion-quote' ></i>-->
            <!--</div>-->

            <!--<p>-->
            <!--Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.-->
            <!--</p>-->

            <!--<div class='author' >-->
            <!--<h4>Jake Doe</h4>-->
            <!--<span>CEO at Company</span>-->
            <!--</div>-->

            <!--</div>-->


            <!--<div class='testimonial' >-->

            <!--<div class='icon' >-->
            <!--<i class='ion-quote' ></i>-->
            <!--</div>-->

            <!--<p>-->
            <!--Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.-->
            <!--</p>-->

            <!--<div class='author' >-->
            <!--<h4>Jake Doe</h4>-->
            <!--<span>CEO at Company</span>-->
            <!--</div>-->

            <!--</div>-->

            <!--<div class='testimonial' >-->

            <!--<div class='icon' >-->
            <!--<i class='ion-quote' ></i>-->
            <!--</div>-->

            <!--<p>-->
            <!--Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.-->
            <!--</p>-->

            <!--<div class='author' >-->
            <!--<h4>Jake Doe</h4>-->
            <!--<span>CEO at Company</span>-->
            <!--</div>-->

            <!--</div>-->


            <!--</div>-->

            <!--</div>-->

            <!--</div>-->

        </section>
        <!--=====================================================
            Portfolio Section
        =====================================================-->
        <section id='portfolio' class='section portfolio-section border-d'>
            <div class='section-block portfolio-block'>
                <div class='container-fluid'>
                    <div class='section-header'>
                        <h2>My <strong class='color'>Works</strong></h2>
                    </div>

                    <ul class='portfolio-filters'>
                        <li>
                            <a href='#' class='active' data-group='all'>
                                All
                            </a>
                        </li>
                        <li>
                            <a href='#' data-group='web'>
                                Web
                            </a>
                        </li>
                        <li>
                            <a href='#' data-group='tech'>
                                Tech
                            </a>
                        </li>
                        <li>
                            <a href='#' data-group='photography'>
                                Photography
                            </a>
                        </li>
                    </ul>
                    <ul class='portfolio-items'>
                        <li data-groups='["web","tech"]'>
                            <div class='inner'>
                                <img src='{{ asset('img/1.jpg') }}' alt>
                                <div class='overlay'>
                                    <a href='#popup-1' class='view-project'>
                                        View Project
                                    </a>
                                    <!--project popup-->
                                    <div id='popup-1' class='popup-box zoom-anim-dialog mfp-hide'>
                                        <figure>
                                            <!--project popup image-->
                                            <img src='{{ asset('img/1.jpg') }}' alt>
                                        </figure>
                                        <div class='content'>
                                            <!--project popup title-->
                                            <h4>My Project Title</h4>
                                            <!--project popup description-->
                                            <p>
                                                Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu
                                                volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas
                                                explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-groups='["tech","photography"]'>
                            <div class='inner'>
                                <img src='{{ asset('img/2.jpg') }}' alt>
                                <div class='overlay'>
                                    <a href='#popup-2' class='view-project'>
                                        View Project
                                    </a>
                                    <!--project popup-->
                                    <div id='popup-2' class='popup-box zoom-anim-dialog mfp-hide'>
                                        <figure>
                                            <!--project popup image-->
                                            <img src='{{ asset('img/2.jpg') }}' alt>
                                        </figure>
                                        <div class='content'>
                                            <!--project popup title-->
                                            <h4>My Project Title</h4>
                                            <!--project popup description-->
                                            <p>
                                                Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu
                                                volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas
                                                explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-groups='["web","photography"]'>
                            <div class='inner'>
                                <img src='{{ asset('img/3.jpg') }}' alt>
                                <div class='overlay'>
                                    <a href='#popup-3' class='view-project'>
                                        View Project
                                    </a>
                                    <!--project popup-->
                                    <div id='popup-3' class='popup-box zoom-anim-dialog mfp-hide'>
                                        <figure>
                                            <!--project popup image-->
                                            <img src='{{ asset('img/3.jpg') }}' alt>
                                        </figure>
                                        <div class='content'>
                                            <!--project popup title-->
                                            <h4>My Project Title</h4>
                                            <!--project popup description-->
                                            <p>
                                                Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu
                                                volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas
                                                explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-groups='["web"]'>
                            <div class='inner'>
                                <img src='{{ asset('img/4.jpg') }}' alt>
                                <div class='overlay'>
                                    <a href='#popup-4' class='view-project'>
                                        View Project
                                    </a>
                                    <!--project popup-->
                                    <div id='popup-4' class='popup-box zoom-anim-dialog mfp-hide'>
                                        <figure>
                                            <!--project popup image-->
                                            <img src='{{ asset('img/4.jpg') }}' alt>
                                        </figure>
                                        <div class='content'>
                                            <!--project popup title-->
                                            <h4>My Project Title</h4>
                                            <!--project popup description-->
                                            <p>
                                                Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu
                                                volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas
                                                explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-groups='["tech"]'>
                            <div class='inner'>
                                <img src='{{ asset('img/5.jpg') }}' alt>
                                <div class='overlay'>
                                    <a href='#popup-5' class='view-project'>
                                        View Project
                                    </a>
                                    <!--project popup-->
                                    <div id='popup-5' class='popup-box zoom-anim-dialog mfp-hide'>
                                        <figure>
                                            <!--project popup image-->
                                            <img src='{{ asset('img/5.jpg') }}' alt>

                                        </figure>
                                        <div class='content'>
                                            <!--project popup title-->
                                            <h4>My Project Title</h4>
                                            <!--project popup description-->
                                            <p>
                                                Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu
                                                volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas
                                                explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-groups='["photography"]'>
                            <div class='inner'>
                                <img src='{{ asset('img/6.jpg') }}' alt>
                                <div class='overlay'>
                                    <a href='#popup-6' class='view-project'>
                                        View Project
                                    </a>
                                    <!--project popup-->
                                    <div id='popup-6' class='popup-box zoom-anim-dialog mfp-hide'>
                                        <figure>
                                            <!--project popup image-->
                                            <img src='{{ asset('img/6.jpg') }}' alt>
                                        </figure>
                                        <div class='content'>
                                            <!--project popup title-->
                                            <h4>My Project Title</h4>

                                            <!--project popup description-->
                                            <p>
                                                Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu
                                                volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas
                                                explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=====================================================
            Contact Section
        =====================================================-->
        <section id='contact' class='section contact-section border-d'>
            <div class='section-block contact-block'>
                <div class='container-fluid'>
                    <div class='section-header text-center'>
                        <h2>Shoot me a <strong class='color'>Message</strong></h2>
                    </div>
                    <div class='row'>
                        <div class='col-md-6 col-md-offset-3'>
                            <div class='row contact-info-icons'>
                                <div class='col-md-4 col-sm-6'>
                                    <div class='contact-info'>
                                        <i class='ion-ios-location-outline'></i>
                                        <p>
                                            Armenia<br>
                                            Yerevan
                                        </p>
                                    </div>
                                </div>
                                <div class='col-md-4 col-sm-6'>
                                    <div class='contact-info'>
                                        <i class='ion-ios-telephone-outline'></i>
                                        <p>
                                            (+374) 94-14-00-24<br>
                                        </p>
                                    </div>
                                </div>
                                <div class='col-md-4 col-sm-6'>
                                    <div class='contact-info'>
                                        <i class='ion-android-globe'></i>
                                        <p>
                                            www.chobanyan.org<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class='contact-form'>
                                <form id='contact-form' data-toggle='validator' method='post' action='mail.php'>
                                    <div id='contact-form-result'></div>
                                    <div class='row'>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <input type='text' class='form-control' placeholder='Name' name='name'
                                                       required>
                                                <div class='help-block with-errors'></div>
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <input type='email'
                                                       class='form-control'
                                                       placeholder='Email'
                                                       name='email'
                                                       required>
                                                <div class='help-block with-errors'></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <input type='text'
                                               class='form-control'
                                               placeholder='Subject'
                                               name='subject'
                                               required>
                                        <div class='help-block with-errors'></div>
                                    </div>
                                    <div class='form-group'>
                                        <textarea class='form-control'
                                                  placeholder='Message'
                                                  name='message'
                                                  rows='5'
                                                  required>
                                        </textarea>
                                        <div class='help-block with-errors'></div>

                                    </div>
                                    <div class='form-group text-center'>
                                        <button type='submit' class='btn-custom btn-dark'>
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=====================================================
           Blog Section
       =====================================================-->
        <section id='blog' class='section blog-section border-d'>
            <div class='section-block blog-block'>
                <div class='container-fluid'>

                </div>
            </div>
        </section>
    </div>
</div>


<!--=====================================================
    JavaScript Files
=====================================================-->
<script src='{{ asset('js/jquery.min.js') }}'></script>
<script src='{{ asset('js/jquery.shuffle.min.js') }}'></script>
<script src='{{ asset('js/owl.carousel.min.js') }}'></script>
<script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
<script src='{{ asset('js/validator.min.js') }}'></script>
<script src='{{ asset('js/script.js') }}'></script>

</body>
<script>'undefined' === typeof _trfq || (window._trfq = []);
    'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({'tccl.baseHost': 'secureserver.net'}), _trfd.push({'ap': 'cpsh'}, {'server': 'a2plcpnl0040'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script>
<script src='{{ asset('js/tcc_l.combined.1.0.6.min.js') }}'></script>
</html>