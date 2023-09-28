/* 
    Handle the pop-up modal that appears when the user first visits the site, 
    that asks them to agree to cookies
*/

const cookiesPopUp = document.querySelector('.cookies-popup');
const body = document.querySelector('body');
const cookiesPrefsMenu = document.querySelector('.cookies-popup__preferences-menu');
const manageConsentButton = document.querySelector('.cookies-popup__manage-consent-button');

// On page load, check if the user has accepted cookies before
if (!localStorage.getItem('cookiesAccepted')) {

    // If user has not accepted cookies before, show popup
    cookiesPopUp.classList.remove('cookies-popup--hidden');

    // Prevent scrolling down the rest of the site
    body.style.overflow = 'hidden';
}

// This function is called by two buttons: 
// 1. The 'Accept Cookies' button in the pop-up modal
// 2. The 'Continue to Website' button in the 'Cookies Preferences' menu
function acceptCookies() {
    // Store the fact that the user has accepted cookies in the browser
    localStorage.setItem('cookiesAccepted', true);
    // Hide the pop-up modal
    cookiesPopUp.classList.add('cookies-popup--hidden');
    // And make sure the 'Cookies Preferences' menu will stay hidden
    cookiesPrefsMenu.style.display = 'none';
    // Allow scrolling down the rest of the site
    body.style.overflow = 'auto';
}

// Click event listeners for when user accepts cookies

cookiesPopUp.querySelector('.cookies-popup__accept-button').addEventListener('click', event => {

    acceptCookies();
});

cookiesPrefsMenu.querySelector('.cookies-popup__accept-button').addEventListener('click', event => {

    acceptCookies();
});

// Show the 'Cookies Preferences' menu when the 'Change Settings' button is clicked
cookiesPopUp.querySelector('.cookies-popup__change-settings-button').addEventListener('click', event => {

    cookiesPrefsMenu.style.display = 'block';
});

// Handle the 'Disabled'/'Enable' buttons in the cookies preferences menu
cookiesPrefsMenu.querySelectorAll('.cookies-popup__switch-button-group').forEach(buttonGroup => {

    // Helper utility function to handle switching the visual state of the buttons
    function setButtonState(button, state) {

        if (state === 'active') {
            button.classList.add('cookies-popup__button--active');
            button.classList.remove('cookies-popup__button--inactive');
            return;
        }

        if (state === 'inactive') {
            button.classList.remove('cookies-popup__button--active');
            button.classList.add('cookies-popup__button--inactive');
            return;
        }

        // Error handling
        console.error(`Invalid state passed to setButtonState(): "${state}". Must be 'active' or 'inactive'`);
    }

    // Select each button in a 'switch button group' and add a click event listener
    buttonGroup.addEventListener('click', event => {

        if (event.target.tagName === 'BUTTON') {

            const clickedButton = event.target;
            let otherButton;

            // Evaluate which button wasn't clicked based on the one that was
            if (clickedButton.classList.contains('cookies-popup__enable-button')) {
                otherButton = buttonGroup.querySelector('.cookies-popup__disable-button');
            } else {
                otherButton = buttonGroup.querySelector('.cookies-popup__enable-button');
            }

            setButtonState(clickedButton, 'active');
            setButtonState(otherButton, 'inactive');
        }
    });
});

// Hide the 'Cookies Preferences' menu when the 'Cancel' button is clicked 
cookiesPrefsMenu.querySelector('.cookies-popup__cancel-button').addEventListener('click', event => {

    cookiesPrefsMenu.style.display = 'none';
});

// Wire up the 'Manage Consent' button in the bottom-left corner of the page 
manageConsentButton.addEventListener('click', event => {

    // Show the cookies preferences menu
    cookiesPopUp.classList.remove('cookies-popup--hidden');
    // Prevent scrolling down the rest of the site
    body.style.overflow = 'hidden';
});