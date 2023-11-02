<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/application.css">
    <title>
        Full Service Digital Agency |
        Cambridgeshire &amp; Norfolk |
        Netmatters
    </title>
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/a48990909f.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php
    // (Includes secondary-nav & primary-nav) 
    include_once 'templates/header.php';
    ?>

    <main>

        <section class="banner"> <!-- Banner -->
            <div class="banner__carousel-container">
                <div class="banner__carousel-items-wrapper banner__carousel-items-wrapper--transition">

                    <section class="banner__carousel-item banner__carousel-item--headline">
                        <div class="responsive-container">
                            <div class="banner__flex-parent-container">
                                <h1 class="banner__heading">The East Of England's Leading Technology Company</h1>
                                <p class="banner__tagline">Performance-driven digital and technology services with
                                    complete transparency.</p>
                                <a href="#" class="banner__button">Why Choose Us?
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </section>

                    <section class="banner__carousel-item banner__carousel-item--bespoke-software">
                        <div class="responsive-container">
                            <div class="banner__flex-parent-container">
                                <h1 class="banner__heading">Bespoke Software</h1>
                                <p class="banner__tagline">Delivering expert bespoke software solutions across a range
                                    of industries.</p>
                                <a href="#" class="banner__button">Find out more
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </section>

                    <section class="banner__carousel-item banner__carousel-item--it-support">
                        <div class="responsive-container">
                            <div class="banner__flex-parent-container">
                                <h1 class="banner__heading">IT Support</h1>
                                <p class="banner__tagline">Fast and cost-effective IT support services for your
                                    business.</p>
                                <a href="#" class="banner__button">Find out more
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </section>

                    <section class="banner__carousel-item banner__carousel-item--digital-marketing">
                        <div class="responsive-container">
                            <div class="banner__flex-parent-container">
                                <h1 class="banner__heading">Digital Marketing</h1>
                                <p class="banner__tagline">Generating your new business through results-driven marketing
                                    activites.</p>
                                <a href="#" class="banner__button">Find out more
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </section>

                    <section class="banner__carousel-item banner__carousel-item--telecoms-services">
                        <div class="responsive-container">
                            <div class="banner__flex-parent-container">
                                <h1 class="banner__heading">Telecoms Services</h1>
                                <p class="banner__tagline">A new approach to connectivity, see how we can help your
                                    business.</p>
                                <a href="#" class="banner__button">Find out more
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </section>

                    <section class="banner__carousel-item banner__carousel-item--web-design">
                        <div class="responsive-container">
                            <div class="banner__flex-parent-container">
                                <h1 class="banner__heading">Web Design</h1>
                                <p class="banner__tagline">For businesses looking to make a strong and effective first
                                    impression.</p>
                                <a href="#" class="banner__button">Find out more
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </section>

                    <section class="banner__carousel-item banner__carousel-item--cyber-security">
                        <div class="responsive-container">
                            <div class="banner__flex-parent-container">
                                <h1 class="banner__heading">Cyber Security</h1>
                                <p class="banner__tagline">Keeping businesses' and their customers' sensitive
                                    information
                                    protected.</p>
                                <a href="#" class="banner__button">Find out more
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </section>

                </div>

                <!-- Banner carousel navigation menu-->
                <div class="banner__carousel-nav">
                    <button data-slide-index="1" class="banner__carousel-nav-button--active"></button>
                    <button data-slide-index="2"></button>
                    <button data-slide-index="3"></button>
                    <button data-slide-index="4"></button>
                    <button data-slide-index="5"></button>
                    <button data-slide-index="6"></button>
                    <button data-slide-index="7"></button>
                </div>
            </div>
        </section>

        <section class="services"> <!-- Services -->
            <div class="responsive-container">

                <div class="flex-container-for-heading-and-view-more-link">
                    <h2 class="services__heading">Our Services</h2>
                    <a href="#" class="services__view-case-studies-link services__view-case-studies-link--wide-viewport">View
                        Our Work
                        <svg class="icon">
                            <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                        </svg>
                    </a>
                </div>

                <div class="services__flex-parent-container">

                    <a href="#" class="services__card services__card--bespoke-software">
                        <span class="services__card-icon-background">
                            <svg class="icon">
                                <use href="icons/symbol-defs.svg#icon-cogs"></use>
                            </svg>
                        </span>
                        <h3 class="services__card-heading">Bespoke Software</h3>
                        <p class="services__card-description">Bespoke software solutions for all your business
                            needs
                            including
                            integrations and reporting.</p>
                        <span class="services__card-read-more-button services__card-read-more-button--bespoke-software">Read
                            more</span>
                    </a>

                    <a href="#" class="services__card services__card--it-support">
                        <span class="services__card-icon-background">
                            <svg class="icon">
                                <use href="icons/symbol-defs.svg#icon-display"></use>
                            </svg>
                        </span>
                        <h3 class="services__card-heading">IT Support</h3>
                        <p class="services__card-description">Fully managed IT support and consultancy packages
                            tailored
                            to
                            meet
                            your exact business needs.</p>
                        <span class="services__card-read-more-button services__card-read-more-button--it-support">Read
                            more</span>
                    </a>

                    <a href="#" class="services__card services__card--digital-marketing">
                        <span class="services__card-icon-background">
                            <svg class="icon">
                                <use href="icons/symbol-defs.svg#icon-bar-graph"></use>
                            </svg>
                        </span>
                        <h3 class="services__card-heading">Digital Marketing</h3>
                        <p class="services__card-description">Driven brand awareness & ROI through creative
                            digital
                            marketing
                            campaigns.</p>
                        <span class="services__card-read-more-button services__card-read-more-button--digital-marketing">Read
                            more</span>
                    </a>

                    <a href="#" class="services__card services__card--telecoms-services">
                        <span class="services__card-icon-background">
                            <svg class="icon">
                                <use href="icons/symbol-defs.svg#icon-phone-in-talk"></use>
                            </svg>
                        </span>
                        <h3 class="services__card-heading">Telecoms Services</h3>
                        <p class="services__card-description">Business telephony solutions including mobile &
                            connectivity
                            solutions.</p>
                        <span class="services__card-read-more-button services__card-read-more-button--telecoms-services">Read
                            more</span>
                    </a>


                    <a href="#" class="services__card services__card--web-design">
                        <span class="services__card-icon-background">
                            <svg class="icon">
                                <use href="icons/symbol-defs.svg#icon-code"></use>
                            </svg>
                        </span>
                        <h3 class="services__card-heading">Web Design</h3>
                        <p class="services__card-description">User-centric design for businesses looking to make
                            a
                            lasting
                            impression.</p>
                        <span class="services__card-read-more-button services__card-read-more-button--web-design">Read
                            more</span>
                    </a>

                    <a href="#" class="services__card services__card--cyber-security">
                        <span class="services__card-icon-background">
                            <svg class="icon">
                                <use href="icons/symbol-defs.svg#icon-security"></use>
                            </svg>
                        </span>
                        <h3 class="services__card-heading">Cyber Security</h3>
                        <p class="services__card-description">Prevention, testing, consultancy & breach
                            management
                            services.
                        </p>
                        <span class="services__card-read-more-button services__card-read-more-button--cyber-security">Read
                            more</span>
                    </a>

                    <a href="#" class="services__card services__card--developer-training">
                        <span class="services__card-icon-background">
                            <svg class="icon">
                                <use href="icons/symbol-defs.svg#icon-school"></use>
                            </svg>
                        </span>
                        <h3 class="services__card-heading">Developer Training</h3>
                        <p class="services__card-description">Web design & software training courses designed to
                            secure
                            a
                            job in
                            tech.</p>
                        <span class="services__card-read-more-button services__card-read-more-button--developer-training">Read
                            more</span>
                    </a>

                </div>

                <a href="#" class="services__view-case-studies-link services__view-case-studies-link--narrow-viewport">View Our
                    Work
                    <svg class="icon">
                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                    </svg></a>

            </div>
        </section>

        <section class="partners"> <!-- Partners -->

            <h2 class="screen-reader-only">Partners</h2>

            <div class="logo-carousel-horizontal-centering-container">
                <div class="logo-carousel-flex-parent-container">

                    <img src="images/partners/investing-in-future-growth-colour.jpg" alt="Investing In Future Growth logo">
                    <img src="images/partners/norfolk-carbon-charter-colour.jpg" alt="Norfolk Carbon Charter logo">
                    <img src="images/partners/prompt-payment-code-colour.jpg" alt="Prompt Payment Code logo">
                    <img src="images/partners/princess-royal-training-colour.jpg" alt="Princess Royal Training logo">
                    <img src="images/partners/future-50-colour.jpg" alt="Future 50 logo">
                    <img src="images/partners/iso-9001-colour.jpg" alt="ISO 9001 logo">
                    <img src="images/partners/iso-27001-colour.jpg" alt="ISO 27001 logo">
                    <img src="images/partners//skills-of-tomorrow-colour.jpg" alt="Skills Of Tomorrow logo">
                    <img src="images/partners/google-partner-colour.jpg" alt="Google Partners logo">
                    <img src="images/partners/living-wage-colour.png" alt="Living Wage logo">
                    <img src="images/partners/norfolk-prohelp-colour.png" alt="Norfolk Prohelp logo">

                </div>
            </div>
        </section>

        <section class="welcome"> <!-- Welcome -->
            <div class="responsive-container">
                <div class="welcome__flex-parent-container">

                    <div class="welcome__flex-item-container">

                        <h2 class="welcome__heading">Welcome to Netmatters</h2>
                        <p class="welcome__paragraph welcome__paragraph--first">Netmatters is a leading <a href="#">Bespoke
                                Software</a>, <a href="#">IT
                                Support</a>, and <a href="#">Digital Marketing</a> company based in the East of
                            England with offices in <a href="#">London</a>, <a href="#">Cambridge</a>, <a href="#">Wymondham</a>,
                            and <a href="#">Great Yarmouth</a>.</p>
                        <p class="welcome__paragraph">We aren't tied into contracts with third-party providers,
                            so
                            you
                            know
                            that
                            our
                            recommendations for your
                            business are based purely with one benefit in mind: to help improve your business
                            with
                            the
                            most
                            appropriate solutions.</p>
                        <p class="welcome__paragraph">We pride ourselves on being an ethical business and have a
                            unique
                            business
                            offering and cost model that
                            ensures you get the most from our relationship in an upfront manner.
                        </p>
                        <div class="">
                            <a href="#" class="welcome__button-link">Why choose us?
                                <svg class="icon">
                                    <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                </svg>
                            </a>
                            <a href="#" class="welcome__button-link">Our culture
                                <svg class="icon">
                                    <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <div class="welcome__flex-item-container">

                        <h2 class="welcome__heading">What Our Clients Think</h2>

                        <svg class="welcome__star" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg class="welcome__star" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg class="welcome__star" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg class="welcome__star" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg class="welcome__star" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>

                        <blockquote class="welcome__testimonial">
                            <span class="welcome__testimonial-quote"> Netmatters stood out from the start. Great
                                guys
                                and very easy to work with. Both the build and digital marketing teams are
                                clearly
                                skilled &mdash; they know their stuff! They delivered a website to our (high!)
                                expectations and went over and above to ensure we were satisfied clients &mdash;
                                and
                                we
                                are! </span>
                            <footer class="welcome__testimonial-author">
                                <span class="welcome__testimonial-author-name"><cite>Eleanor Bishop</cite>, Head
                                    of
                                    Marketing</span><span class="welcome__testimonial-author-organisation"><a href="#">Ashcroft
                                        Partnership LLP</a></span>
                            </footer>
                        </blockquote>

                        <a href="#" class="welcome__button-link welcome__button-link--google">Google reviews
                            <svg class="icon">
                                <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                            </svg>
                        </a>
                        <a href="#" class="welcome__button-link welcome__button-link--trustpilot">TrustPilot
                            reviews
                            <svg class="icon">
                                <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                            </svg>
                        </a>

                    </div>

                </div>
            </div>
        </section>

        <?php
        // Get most recent news article data from database and display 3 cards 
        include_once 'templates/index/latest-news.php';
        ?>

        <section class="clients"> <!-- Clients -->

            <h2 class="screen-reader-only">Clients</h2>

            <div class="logo-carousel-horizontal-centering-container">
                <div class="logo-carousel-flex-parent-container">

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Ashcroft Partnership LLP</h3>
                                <p class="clients__pop-up-description">Originally founded in 2006 as Ashcroft
                                    Anthony,
                                    they
                                    became
                                    Ashcroft
                                    Partnership LLP in 2020 and
                                    are
                                    one of the top chartered accountancy firms in Cambridge, advising
                                    entrepreneurs
                                    and
                                    families.
                                </p>
                                <a href="#" class="clients__pop-up-link--web-design">View Our Case Study
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <img src="images/clients/ashcroft-logo.png" alt="Ashcroft Partnership LLP logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">One Traveller</h3>
                                <p class="clients__pop-up-description">One Traveller, founded in 2007, is a
                                    leading
                                    provider of solo holidays for over 50s.</p>
                                <a href="#" class="clients__pop-up-link--web-design">View Our Case Study
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <img src="images/clients/one-traveller-logo.png" alt="One Traveller logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Searles Leisure Resort</h3>
                                <p class="clients__pop-up-description">Searles Leisure Resort, on the beautiful
                                    North
                                    Norfolk coast, is an award-winning UK holiday
                                    resort for families.</p>
                                <a href="#" class="clients__pop-up-link--digital-marketing">View Our Case Study
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <img src="images/clients/searles-logo.jpg" alt="Searles Leisure Resort logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Busseys</h3>
                                <p class="clients__pop-up-description">One of the UK's leading Ford dealerships.
                                </p>
                            </div>
                        </div>
                        <img src="images/clients/busseys-logo.png" alt="Busseys logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Crane Garden Buildings</h3>
                                <p class="clients__pop-up-description">Leading manufacturer and supplier of
                                    high-end
                                    garden rooms, summerhouses, workshops and
                                    sheds in
                                    the
                                    UK.</p>
                            </div>
                        </div>
                        <img src="images/clients/crane-logo.png" alt="Crane Garden Buildings logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Black Swan Care Group</h3>
                                <p class="clients__pop-up-description">Black Swan Care Group own and manage 21
                                    high-quality care and residential homes with
                                    a
                                    focus on
                                    putting the needs of their residents first.</p>
                                <a href="#" class="clients__pop-up-link--bespoke-software">View Our Case Study
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>

                            </div>
                        </div>
                        <img src="images/clients/black_swan_logo.png" alt="Black Swan Care Group logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Xupes</h3>
                            </div>
                        </div>
                        <img src="images/clients/xupes-logo.png" alt="Xupes logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">BEAT</h3>
                                <p class="clients__pop-up-description">The UK's eating disorder charity founded
                                    in
                                    1989.
                                </p>
                            </div>
                        </div>
                        <img src="images/clients/beat-logo.png" alt="BEAT logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Survey Solutions</h3>
                            </div>
                        </div>
                        <img src="images/clients/survey-solutions-logo.png" alt="Survey Solutions logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Girl Guiding Anglia</h3>
                                <p class="clients__pop-up-description">Girl Guiding Anglia is part of
                                    Girlguiding,
                                    the
                                    UK's leading charity for girls and young
                                    women in the UK.</p>
                                <a href="#" class="clients__pop-up-link--it-support">View Our Case Study
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <img src="images/clients/girl-guides-anglia-logo.png" alt="Girl Guiding Anglia logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Sweetzy</h3>
                                <p class="clients__pop-up-description">Sweetzy are an online sweets retailer,
                                    based
                                    in
                                    Wymondham.</p>
                                <a href="#" class="clients__pop-up-link--digital-marketing">View Our Case Study
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <img src="images/clients/sweetzy-logo.png" alt="Sweetzy logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">Howes Percival</h3>
                            </div>
                        </div>
                        <img src="images/clients/howes-percival-logo.png" alt="Howes Percival logo">
                    </section>

                    <section class="clients__section-for-each-client">
                        <div class="clients__pop-up-hover-container">
                            <div class="clients__pop-up-box">
                                <h3 class="clients__pop-up-heading">GDST</h3>
                                <p class="clients__pop-up-description">The Girls' Day School Trust (GDST) is the
                                    UK's
                                    leading family of 25 independent girls'
                                    schools. </p>
                                <a href="#" class="clients__pop-up-link--digital-marketing">View Our Case Study
                                    <svg class="icon">
                                        <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <img src="images/clients/girls-day-school-trust-logo.png" alt="Girl's Day School Trust logo">
                    </section>

                </div>
            </div>
        </section>

        <?php
        // Includes email newsletter sign up form 
        include_once 'templates/footer.php';
        ?>

    </main>
    <div class="dark-overlay"></div>

    <?php
    // Includes 'Manage Consent' button 
    include_once 'templates/cookies-popup.php';
    ?>

    <script src="js/cookiesPopUp.js"></script>
    <script src="js/secondaryNav.js"></script>
    <script src="js/scrollHeader.js"></script>
    <script src="js/bannerCarousel.js"></script>
</body>

</html>