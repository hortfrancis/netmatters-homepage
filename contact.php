<?php
$pageTitle = "Contact Us | Netmatters";
require_once 'templates/meta.php';
?>

<body>

    <?php
    include_once 'templates/header.php';
    ?>

    <main>

        <div class="contact-page__breadcrumbs">
            <a href="index.php">Home</a> / Our Offices
        </div>

        <div class="contact-page__heading-container">
            <h1>Our Offices</h1>
        </div>

        <div class="responsive-container">

            <div class="contact-page__office-cards-container">

                <section class="contact-page__office-card">
                    <div class="contact-page__office-card-info-box">
                        <a href="#">
                            <img src="images/contact/london-office.jpg" alt="Netmatters London office" class="contact-page__office-card-building-image">
                        </a>

                        <div class="contact-page__office-card-text-container">
                            <h2><a href="#">London Office</a></h2>
                            <address>
                                Unit G6, <br>
                                Pixel Business Centre, <br>
                                110 Brooker Road, Waltham Abbey,<br>
                                London, <br>
                                EN9 1JH
                            </address>
                            <a href="#" class="contact-page__office-card-phone-number">
                                02045 397354
                            </a>
                            <a href="#" class="contact-page__office-card-view-more-button">View More</a>
                        </div>
                    </div>

                    <div class="contact-page__google-maps-widget-container">
                        <img src="images/contact/google-maps/google-maps-london-office.png">
                    </div>
                </section>

                <section class="contact-page__office-card">
                    <div class="contact-page__office-card-info-box">
                        <a href="#">
                            <img src="images/contact/cambridge-office.jpg" alt="Netmatters Cambridge office" class="contact-page__office-card-building-image">
                        </a>

                        <div class="contact-page__office-card-text-container">
                            <h2><a href="#">Cambridge Office</a></h2>
                            <address>
                                Unit 1.31, <br>
                                St John's Innovation Centre, <br>
                                Cowley Road, Milton<br>
                                Cambridge,<br>
                                CB4 0WS
                            </address>
                            <a href="#" class="contact-page__office-card-phone-number">
                                01223 37 57 72
                            </a>
                            <a href="#" class="contact-page__office-card-view-more-button">View More</a>
                        </div>
                    </div>

                    <div class="contact-page__google-maps-widget-container">
                        <img src="images/contact/google-maps/google-maps-cambridge-office.png">
                    </div>
                </section>

                <section class="contact-page__office-card">
                    <div class="contact-page__office-card-info-box">
                        <a href="#">
                            <img src="images/contact/wymondham-office.jpg" alt="Netmatters Wymondham office" class="contact-page__office-card-building-image">
                        </a>

                        <div class="contact-page__office-card-text-container">
                            <h2><a href="#">Wymondham Office</a></h2>
                            <address>
                                Unit 15,<br>
                                Penfold Drive,<br>
                                Gateway 11 Business Park,<br>
                                Wymondham, Norfolk<br>
                                NR18 0WZ
                            </address>
                            <a href="#" class="contact-page__office-card-phone-number">
                                01603 70 40 20
                            </a>
                            <a href="#" class="contact-page__office-card-view-more-button">View More</a>
                        </div>
                    </div>

                    <div class="contact-page__google-maps-widget-container">
                        <img src="images/contact/google-maps/google-maps-wymondham-office.png">
                    </div>
                </section>

                <section class="contact-page__office-card">
                    <div class="contact-page__office-card-info-box">
                        <a href="#">
                            <img src="images/contact/great-yarmouth-office.jpg" alt="Netmatters Great Yarmouth office" class="contact-page__office-card-building-image">
                        </a>

                        <div class="contact-page__office-card-text-container">
                            <h2><a href="#">Great Yarmouth Office</a></h2>
                            <address>
                                Suite F23,<br>
                                Beacon Innovation Centre,<br>
                                Beacon Park, Gorleston,<br>
                                Great Yarmouth, Norfolk, <br>
                                NR31 7RA
                            </address>
                            <a href="#" class="contact-page__office-card-phone-number">
                                01493 60 32 04
                            </a>
                            <a href="#" class="contact-page__office-card-view-more-button">View More</a>
                        </div>
                    </div>

                    <div class="contact-page__google-maps-widget-container">
                        <img src="images/contact/google-maps/google-maps-great-yarmouth-office.png">
                    </div>
                </section>

                <section class="contact-page__general-contact-info">

                    <h2>Email us on:</h2>
                    <a href="#">sales@netmatters.com</a>

                    <h2>Business hours:</h2>
                    <p><strong>Monday - Friday 07:00 - 18:00</strong></p>

                    <h2>Out of Hours IT Support</h2>

                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>

                    <p><strong>Monday - Friday 18:00 - 22:00<br>
                            Saturday 08:00 - 16:00<br>
                            Sunday 10:00 - 18:00</strong></p>

                    <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>

                </section>

                <form class="contact-page__contact-form">

                    <div class="contact-page__contact-form-flex-container">

                        <div class="contact-page__contact-form-input-container contact-page__contact-form-input-container--required">
                            <label for="contact-form-name" class="contact-page__contact-form-label">Your Name</label>
                            <input type="text" id="contact-form-name" required class="contact-page__contact-form-input">
                        </div>

                        <div class="contact-page__contact-form-input-container">
                            <label for="contact-form-company" class="contact-page__contact-form-label">Company Name</label>
                            <input type="text" id="contact-form-company" class="contact-page__contact-form-input">
                        </div>

                        <div class="contact-page__contact-form-input-container contact-page__contact-form-input-container--required">
                            <label for="contact-form-email" class="contact-page__contact-form-label">Your Email</label>
                            <input type="email" id="contact-form-email" required class="contact-page__contact-form-input">
                        </div>

                        <div class="contact-page__contact-form-input-container contact-page__contact-form-input-container--required">
                            <label for="contact-form-phone" class="contact-page__contact-form-label">Your Telephone Number</label>
                            <input type="tel" id="contact-form-phone" required class="contact-page__contact-form-input">
                        </div>
                    </div>

                    <div class="contact-page__contact-form-input-container contact-page__contact-form-input-container--required">
                        <label for="contact-form-message" class="contact-page__contact-form-label">Message</label>
                        <textarea id="contact-form-message" required class="contact-page__contact-form-input contact-page__contact-form-input--textarea">Hi, I am interested in discussing an 'Our Offices' solution, could you please give me a call or send an email?</textarea>
                    </div>

                    <input type="checkbox" id="contact-form-marketing" class="contact-page__contact-form-input--checkbox">
                    <label for="contact-form-marketing" class="contact-page__contact-form-label"><span>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</span></label>

                    <div class="contact-page__contact-form-helper-text-flex-group">
                        <button type="submit" class="contact-page__contact-form-submit-button">Send enquiry</button>
                        <small aria-hidden="true" class="contact-page__contact-form-helper-text"><span class="contact-page__contact-form-helper-text-asterisk">*</span> Fields Required</small>
                    </div>
                </form>

            </div>
        </div>

        <?php
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

</body>

</html>