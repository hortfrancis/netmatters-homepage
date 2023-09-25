const header = body.querySelector(".header");

// Initialise a variable to hold the most recent scroll position on the Y axis.
let prevScroll = 0;

// Determine the height (in 'display pixels') of the header element
const headerHeight = header.offsetHeight;

// Add an event listener when the page moves up or down
window.addEventListener("scroll", () => {

    // Get the current vertical scroll position of the page 
    const currentScroll = window.scrollY;

    if (currentScroll > prevScroll
        && currentScroll > headerHeight) {
        // Scrolling downwards & scrolling past the normal header placement at the top of the page

        // Add `transform: translateY(-100%)` in CSS
        header.classList.add('header--hide-upwards');
    } else {
        // Scrolling upwards
        header.classList.remove('header--hide-upwards');
    }

    // Record the current scroll position to be evaluated against at the next scroll event. 
    prevScroll = currentScroll;
});