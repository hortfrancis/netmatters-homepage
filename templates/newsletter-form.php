<form class="newsletter-form"> <!-- Email newsletter sign up form -->
            <div class="responsive-container">

                <h2 class="newsletter-form__heading">Email Newsletter Sign-Up</h2>

                <div class="newsletter-form__flex-container">
                    <div class="newsletter-form__input-container newsletter-form__input-container--required">
                        <label for="newsletter-form-name" class="newsletter-form__label">Your Name</label>
                        <input type="text" id="newsletter-form-name" name="name" required
                            class="newsletter-form__input--text">
                    </div>

                    <div class="newsletter-form__input-container newsletter-form__input-container--required">
                        <label for="newsletter-form-email" class="newsletter-form__label">Your Email</label>
                        <input type="email" id="newsletter-form-email" name="email" required
                            class="newsletter-form__input--text">
                    </div>
                </div>

                <div class="newsletter-form__checkbox-flex-container">
                    <input type="checkbox" id="newsletter-form-preferences" name="preferences"
                        class="newsletter-form__input--checkbox">
                    <label for="newsletter-form-preferences" class="newsletter-form__label"><span>Please tick
                            this
                            box
                            if you
                            wish to receive marketing information from us. Please see our <a href="#"
                                target="_blank">Privacy Policy</a> for more information on how we keep your data
                            safe.</span></label>
                </div>

                <button type="submit" class="newsletter-form__button">Subscribe</button>

            </div>
        </form>