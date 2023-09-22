/* 
    Handle the pop-up modal that appears when the user first visits the site, 
    that asks them to agree to cookies
*/

const cookiesPopUp = document.querySelector('.cookies-popup');
const darkOverlay = document.querySelector('.dark-overlay');
const body = document.querySelector('body');

// On page load, check if the user has accepted cookies before
if (!localStorage.getItem('cookiesAccepted')) {

    // If user has not accepted cookies before, show popup
    cookiesPopUp.classList.remove('\cookies-popup--hidden');
    // Make the rest of the site appear 'greyed out'
    darkOverlay.classList.add('dark-overlay--active');
    // Prevent scrolling down the rest of the site
    body.style.overflow = 'hidden';
}

// Add click event listener for when user accepts cookies
cookiesPopUp.querySelector('.cookies-popup__accept-button').addEventListener('click', event => {

    // Store the fact that the user has accepted cookies in the browser
    localStorage.setItem('cookiesAccepted', true);
    // Hide the pop-up modal
    cookiesPopUp.classList.add('cookies-popup--hidden');
    // Remove the 'greyed out' effect from the rest of the site
    darkOverlay.classList.remove('dark-overlay--active');
    // Allow scrolling down the rest of the site
    body.style.overflow = 'auto';
});