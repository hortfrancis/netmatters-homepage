<?php include_once 'secondary-nav.php' ?>

<header class="header">
    <div class="responsive-container">

        <div class="header__top-row-container">

            <!-- Nematters logo -->
            <a href="#" class="header__logo">
                <img src="images/netmatters-logo-darkgrey.png" alt="Netmatters logo" class="header__logo-image">
            </a>

            <a href="#" class="header__support-button">
                <svg class="icon icon-mouse">
                    <use href="icons/symbol-defs.svg#icon-mouse"></use>
                </svg>
                Support
            </a>
            <a href="contact.php" class="header__contact-button">
                <svg class="icon icon-paperplane">
                    <use href="icons/symbol-defs.svg#icon-paperplane"></use>
                </svg>
                Contact
            </a>

            <!-- Search bar for medium & large viewport width -->
            <form action="#" class="header__search-form header__search-form--wide-viewport">
                <label for="search-input-wide-viewport" class="screen-reader-only">Search the
                    website:</label>
                <input type="text" id="search-input-wide-viewport" placeholder="Search..." name="keyword" class="header__search-input header__search-input--wide-viewport">
                <button type="submit" aria-label="Search" class="header__search-button header__search-button--wide-viewport">

                    <svg viewBox="0 0 100 125" class="header__search-icon header__search-icon--wide-viewport">
                        <g transform="translate(0,-952.36218)">
                            <path d="m 42.112668,962.43754 c -8.208248,0 -16.455959,3.11826 -22.718642,9.35474 -12.5253651,12.47298 -12.5253651,32.74162 0,45.21462 10.771386,10.726 27.262613,12.176 39.646263,4.4546 l 20.825429,20.8253 10.13428,-10.1341 -20.825422,-20.7142 c 7.832932,-12.36176 6.349426,-28.88827 -4.454622,-39.64622 -6.263219,-6.23648 -14.399038,-9.35474 -22.607286,-9.35474 z m -1.893215,9.35474 a 23.164108,23.164108 0 0 1 24.834587,23.1641 23.164108,23.164108 0 0 1 -46.328204,0 23.164108,23.164108 0 0 1 21.493617,-23.1641 z" />
                        </g>
                        <!-- Credit: “Magnifying Glass” icon by Dalpat Prajapati, from thenounproject.com CC BY 3.0 -->
                    </svg>

                </button>
            </form>

            <!-- Phone Icon for Mobile -->
            <a href="tel:000" aria-label="Call us" class="header__phone-us-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125" x="0px" y="0px" class="header__phone-icon">
                    <g data-name="Layer 2">
                        <path d="M53.91,14.7A35.58,35.58,0,0,1,84.84,45.63,4.92,4.92,0,0,0,89.7,50h.38a4.91,4.91,0,0,0,4.85-5.54A45.74,45.74,0,0,0,55.08,4.6a4.92,4.92,0,0,0-5.54,4.86v.38A4.92,4.92,0,0,0,53.91,14.7Z" />
                        <path d="M55.47,25.29a4.87,4.87,0,0,0-5.93,4.78v.4a5,5,0,0,0,3.8,4.77,15.11,15.11,0,0,1,7,4,15.3,15.3,0,0,1,4,7A5,5,0,0,0,69.07,50h.39a4.87,4.87,0,0,0,4.78-5.94A25.42,25.42,0,0,0,55.47,25.29Z" />
                        <path d="M93.75,75.44,80.93,62.62a4.27,4.27,0,0,0-6.18.16l-9,9.89A4.34,4.34,0,0,1,61.68,74a45.55,45.55,0,0,1-35.6-35.62,4.34,4.34,0,0,1,1.27-4.09l9.85-9.08A4.27,4.27,0,0,0,37.33,19L24.5,6.2a4.26,4.26,0,0,0-6.06,0l-12,12.25a4.31,4.31,0,0,0-1.23,2.72C2.41,65.1,34.94,97.64,78.84,94.89a4.28,4.28,0,0,0,2.75-1.25L93.75,81.48A4.27,4.27,0,0,0,93.75,75.44Z" />
                    </g>
                    <!-- Credit: “phone in talk” icon by Justin Blake, from thenounproject.com CC BY 3.0 -->
                </svg>
            </a>

            <button aria-label="Toggle navigation" class="header__nav-menu-button">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>



        <!-- Search bar for narrow viewport width -->
        <form action="#" class="header__search-form header__search-form--narrow-viewport">
            <label for="search-input-narrow-viewport" class="screen-reader-only">Search the website:</label>
            <input type="text" id="search-input-narrow-viewport" placeholder="Search..." name="keyword" class="header__search-input header__search-input--narrow-viewport">
            <button type="submit" aria-label="Search" class="header__search-button">

                <svg viewBox="0 0 100 125" class="header__search-icon header__search-icon--narrow-viewport">
                    <g transform="translate(0,-952.36218)">
                        <path d="m 42.112668,962.43754 c -8.208248,0 -16.455959,3.11826 -22.718642,9.35474 -12.5253651,12.47298 -12.5253651,32.74162 0,45.21462 10.771386,10.726 27.262613,12.176 39.646263,4.4546 l 20.825429,20.8253 10.13428,-10.1341 -20.825422,-20.7142 c 7.832932,-12.36176 6.349426,-28.88827 -4.454622,-39.64622 -6.263219,-6.23648 -14.399038,-9.35474 -22.607286,-9.35474 z m -1.893215,9.35474 a 23.164108,23.164108 0 0 1 24.834587,23.1641 23.164108,23.164108 0 0 1 -46.328204,0 23.164108,23.164108 0 0 1 21.493617,-23.1641 z" />
                    </g>
                    <!-- Credit: “Magnifying Glass” icon by Dalpat Prajapati, from thenounproject.com CC BY 3.0 -->
                </svg>

            </button>
        </form>

    </div>

    <nav class="primary-nav"> <!-- Primary navigation -->
        <div class="responsive-container">
            <ul class="primary-nav__list">

                <li class="primary-nav__item primary-nav__item--bespoke-software">
                    <a href="#" class="primary-nav__item-link">
                        <svg class="icon">
                            <use href="icons/symbol-defs.svg#icon-cogs"></use>
                        </svg>
                        <span class="primary-nav__item-text primary-nav__item-text--small">Bespoke</span>
                        <span class="primary-nav__item-text primary-nav__item-text--large">Software</span>
                    </a>
                    <div class="primary-nav__submenu">
                        <div class="responsive-container">
                            <span aria-description="submenu heading" class="primary-nav__submenu-heading">Our
                                Bespoke Services</span>
                            <ul class="primary-nav__submenu-list">
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-cogs"></use>
                                        </svg>
                                        Bespoke CRM</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-business-center"></use>
                                        </svg>
                                        Business Automation</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-tab"></use>
                                        </svg>
                                        Software Integrations</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-mobile"></use>
                                        </svg>
                                        Mobile App Development</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-folder-open"></use>
                                        </svg>
                                        Bespoke Databases</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-loop-alt4"></use>
                                        </svg>
                                        Sharepoint Development</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-cloud-download"></use>
                                        </svg>
                                        Operational Systems</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-group"></use>
                                        </svg>
                                        Business Central Implementation</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-laptop"></use>
                                        </svg>
                                        Internet of Thing (IoT) Software</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-cloud"></use>
                                        </svg>
                                        Intranet Development</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-cloud-download"></use>
                                        </svg>
                                        Customer Portal Development</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-globe1"></use>
                                        </svg>
                                        Reporting Hub</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="primary-nav__item primary-nav__item--it-support">
                    <a href="#" class="primary-nav__item-link">
                        <svg class="icon">
                            <use href="icons/symbol-defs.svg#icon-display"></use>
                        </svg>
                        <span class="primary-nav__item-text primary-nav__item-text--small">IT</span>
                        <span class="primary-nav__item-text primary-nav__item-text--large">Support</span>
                    </a>
                    <div class="primary-nav__submenu">
                        <div class="responsive-container">
                            <span aria-description="submenu heading" class="primary-nav__submenu-heading">Our IT
                                Support Services</span>
                            <ul class="primary-nav__submenu-list">
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-headphones"></use>
                                        </svg>
                                        Managed IT Support</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-business-center"></use>
                                        </svg>
                                        Business IT Support</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-laptop"></use>
                                        </svg>
                                        Office 365 for Business</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-school"></use>
                                        </svg>
                                        IT Consultancy</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-cloud"></use>
                                        </svg>
                                        Cloud Service Provider</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-drive"></use>
                                        </svg>
                                        Data Backup & Disaster Recovery</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="primary-nav__item primary-nav__item--digital-marketing">
                    <a href="#" class="primary-nav__item-link ">
                        <svg class="icon">
                            <use href="icons/symbol-defs.svg#icon-bar-graph"></use>
                        </svg>
                        <span class="primary-nav__item-text primary-nav__item-text--small">Digital</span>
                        <span class="primary-nav__item-text primary-nav__item-text--large">Marketing</span>
                    </a>
                    <div class="primary-nav__submenu">
                        <div class="responsive-container">
                            <span aria-description="submenu heading" class="primary-nav__submenu-heading">Our
                                Digital Marketing Services</span>
                            <ul class="primary-nav__submenu-list">
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-magnifying-glass"></use>
                                        </svg>
                                        Search Engine Optimisation (SEO)</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-money"></use>
                                        </svg>
                                        Pay Per Click Advertising (PPC)</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-arrow-up-right"></use>
                                        </svg>
                                        Conversion Rate Optimisation (CRO)</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-envelope"></use>
                                        </svg>
                                        Email Marketing</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-group"></use>
                                        </svg>
                                        Social Media Marketing</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-pencil"></use>
                                        </svg>
                                        Content Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="primary-nav__item primary-nav__item--telecoms-services">
                    <a href="#" class="primary-nav__item-link ">
                        <svg class="icon">
                            <use href="icons/symbol-defs.svg#icon-phone-in-talk"></use>
                        </svg>
                        <span class="primary-nav__item-text primary-nav__item-text--small">Telecoms</span>
                        <span class="primary-nav__item-text primary-nav__item-text--large">Services</span>
                    </a>
                    <div class="primary-nav__submenu">
                        <div class="responsive-container">
                            <span aria-description="submenu heading" class="primary-nav__submenu-heading">Telecoms
                                Services</span>
                            <ul class="primary-nav__submenu-list">
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-ticket"></use>
                                        </svg>
                                        Business Mobile</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-phone"></use>
                                        </svg>
                                        Hosted VoIP Provider</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-phone-square"></use>
                                        </svg>
                                        Business VoIP Systems</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-gauge"></use>
                                        </svg>
                                        Business Broadband</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-handshake-o"></use>
                                        </svg>
                                        Leased Lines Provider</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-phone-in-talk"></use>
                                        </svg>
                                        3CX Systems</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="primary-nav__item primary-nav__item--web-design">
                    <a href="#" class="primary-nav__item-link ">
                        <svg class="icon">
                            <use href="icons/symbol-defs.svg#icon-code"></use>
                        </svg>
                        <span class="primary-nav__item-text primary-nav__item-text--small">Web</span>
                        <span class="primary-nav__item-text primary-nav__item-text--large">Design</span>
                    </a>
                    <div class="primary-nav__submenu">
                        <div class="responsive-container">
                            <span aria-description="submenu heading" class="primary-nav__submenu-heading">Our
                                Web
                                Design Services</span>
                            <ul class="primary-nav__submenu-list">
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-pencil"></use>
                                        </svg>
                                        Bespoke Website Design</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-cart"></use>
                                        </svg>
                                        eCommerce Website Design</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-desktop"></use>
                                        </svg>
                                        Pay Monthly Websites</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-bullhorn"></use>
                                        </svg>
                                        Branding & Design</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-mobile"></use>
                                        </svg>
                                        Mobile App Development</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-cloud"></use>
                                        </svg>
                                        Web Hosting</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="primary-nav__item primary-nav__item--cyber-security">
                    <a href="#" class="primary-nav__item-link ">
                        <svg class="icon">
                            <use href="icons/symbol-defs.svg#icon-security"></use>
                        </svg>
                        <span class="primary-nav__item-text primary-nav__item-text--small">Cyber</span>
                        <span class="primary-nav__item-text primary-nav__item-text--large">Security</span>
                    </a>
                    <div class="primary-nav__submenu">
                        <div class="responsive-container">
                            <span aria-description="submenu heading" class="primary-nav__submenu-heading">Our
                                Cyber
                                Security Services</span>
                            <ul class="primary-nav__submenu-list">
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-file-copy"></use>
                                        </svg>
                                        Cyber Security Assessment</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-clock-o"></use>
                                        </svg>
                                        Cyber Security Management</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-flask"></use>
                                        </svg>
                                        Cyber Penetration Testing</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-school"></use>
                                        </svg>
                                        Cyber Essentials Certification</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-security"></use>
                                        </svg>
                                        PCI Compliance</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-lock"></use>
                                        </svg>
                                        Hacking Prevention</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="primary-nav__item primary-nav__item--developer-training">
                    <a href="#" class="primary-nav__item-link ">
                        <svg class="icon">
                            <use href="icons/symbol-defs.svg#icon-school"></use>
                        </svg>
                        <span class="primary-nav__item-text primary-nav__item-text--small">Developer</span>
                        <span class="primary-nav__item-text primary-nav__item-text--large">Course</span>
                    </a>
                    <div class="primary-nav__submenu">
                        <div class="responsive-container">
                            <span aria-description="submenu heading" class="primary-nav__submenu-heading">Our
                                Developer Course Services</span>
                            <ul class="primary-nav__submenu-list">
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-laptop"></use>
                                        </svg>
                                        Train For A Career in Tech</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-code"></use>
                                        </svg>
                                        Skills Bootcamp</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-question-circle"></use>
                                        </svg>
                                        Scion Scheme Frequently Asked Questions</a></li>
                                <li><a href="#">
                                        <svg class="icon">
                                            <use href="icons/symbol-defs.svg#icon-handshake-o"></use>
                                        </svg>
                                        Scion Collaborators</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

</header>