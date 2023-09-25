/*
    Handle secondary-nav in the `<aside>` that appears to the right of the page
*/

const navMenuButton = document.querySelector(".header__nav-menu-button");
const secondaryNav = document.querySelector(".secondary-nav");
const main = document.querySelector("main");
const header = document.querySelector(".header");

// When the burger button in the header is clicked:
navMenuButton.addEventListener("click", event => {

    // Add minor layout styling rules to make secondary-nav clickable & scrollable
    secondaryNav.classList.add("secondary-nav--active");

    // Shift the main page content to the left to reveal secondary-nav
    main.classList.add("main--secondary-nav-active");
    // The header must also be shifted to the left, separately but equally
    header.classList.add("header--secondary-nav-active");

    // (`darkOverlay` is defined in `cookiesPopUp.js`)
    darkOverlay.classList.add('dark-overlay--active');

    // Prevent scrolling down the rest of the site
    body.style.overflow = 'hidden';

    // The overlay on top of `<main>` essentially becomes the button to close the secondary nav,
    // so add a cursor pointer to make this more obvious
    darkOverlay.style.cursor = "pointer";
});

darkOverlay.addEventListener("click", event => {

    // Move the main page content back to its normal position to hide secondary-nav
    main.classList.remove("main--secondary-nav-active");
    // Do the same for the header
    header.classList.remove("header--secondary-nav-active");

    // Remove the 'greyed out' effect from the rest of the site
    darkOverlay.classList.remove('dark-overlay--active');

    // Push the secondary-nav back behind the `<main>` page content
    secondaryNav.classList.remove("secondary-nav--active");

    // Allow scrolling down the rest of the site
    body.style.overflow = 'auto';
});