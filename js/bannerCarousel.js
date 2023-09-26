/* 
    Handle the animated carousel in the `.banner` section
*/

// Carousel container will have the various event listeners attached to it. 
const carouselContainer = document.querySelector(".banner__carousel-container");
// Carousel items wrapper will actually be moved on the X axis to move the carousel.
const carouselWrapper = document.querySelector(".banner__carousel-items-wrapper");

// Initialise with the first slide
let currentSlideIndex = 0;  
const totalSlides = 7;  // (There are 7 slide items in the banner carousel)

// Declare variable for storing the interval ID so it can be cancelled later
let autoMoveInterval;  
const autoMoveDelay = 5000; // Carousel will move every 5 seconds

// Variables for drag-and-drop functionality
let isDragging = false;
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationId = 0;

// Move the carousel forwards by one slide
// Used in the auto-move functionality
function moveCarouselForward() {

    // Cycle to the beginning when reaching the end
    currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
    
    // Calculate the offset based on the slide index
    const offset = -currentSlideIndex * 100; 

    // Apply the offset to the wrapper to move the carousel
    carouselWrapper.style.transform = `translateX(${offset}vw)`;
}

// Make the carousel move forwards automatically
function startAutoMove() {

    // Ensure any existing intervals are cleared
    stopAutoMove(); 

    // Store the interval ID and start the auto-move behaviour
    autoMoveInterval = setInterval(moveCarouselForward, autoMoveDelay);
}

function stopAutoMove() {

    // Cancel the repeating auto-mvve behaviour
    clearInterval(autoMoveInterval);
}

// Fired when the mouse button is pressed down or a finger touches the screen
function startDrag(event) {

    // Pause auto-moving when user starts dragging
    stopAutoMove(); 

    isDragging = true;
    startPos = getPosition(event);

    // Get the current translateX value as the starting point
    const styles = window.getComputedStyle(carouselWrapper);
    const matrix = new WebKitCSSMatrix(styles.transform);
    prevTranslate = matrix.m41;

    // Set currentTranslate to the actual position of the wrapper, 
    // so the carousel doesn't jump back when the user starts dragging the next time. 
    currentTranslate = prevTranslate; 

    // The transition effect needs to be temporarily removed to make the drag-and-drop feel immediate and responsive.
    carouselWrapper.classList.remove("banner__carousel-items-wrapper--transition"); 
    // Change the cursor to a grabbing hand icon
    carouselWrapper.style.cursor = "grabbing";  

    animationId = requestAnimationFrame(animation);
}

// Fires whenever the cursor moves over the carousel
function onDrag(event) {

    if (!isDragging) return;
    const currentPosition = getPosition(event);
    currentTranslate = prevTranslate + currentPosition - startPos;
}

function endDrag() {

    isDragging = false;
    cancelAnimationFrame(animationId);

    // Add `transition: transform 0.3s ease-out` in CSS
    carouselWrapper.classList.add("banner__carousel-items-wrapper--transition");
    // Reset the cursor back to a normal arrow
    carouselWrapper.style.cursor = "auto";  

    // Logic to snap to the closest slide
    const movedBy = currentTranslate - prevTranslate;
    let slideToSnapTo = Math.round(movedBy / window.innerWidth);
    slideToSnapTo = Math.min(Math.max(slideToSnapTo, -1), 1); 
    currentSlideIndex -= slideToSnapTo;
    currentSlideIndex = Math.min(Math.max(currentSlideIndex, 0), totalSlides - 1); 
    setPositionByIndex();

    prevTranslate = currentTranslate;

    // Resume auto-move behaviour again after the user interaction
    startAutoMove(); 
}

// Helper utility functions for drag-and-drop functionality

function getPosition(event) {
    return event.type.includes("mouse") ? event.pageX : event.touches[0].clientX;
}

function animation() {
    setSliderPosition();
    if (isDragging) requestAnimationFrame(animation);
}

function setSliderPosition() {
    carouselWrapper.style.transform = `translateX(${currentTranslate}px)`;
}

function setPositionByIndex() {
    currentTranslate = -currentSlideIndex * window.innerWidth;
    prevTranslate = currentTranslate;
    setSliderPosition();
}

// Set all of the event listeners for the carousel

// Stop and restart the auto-move timer if the user hovers over the carousel
carouselContainer.addEventListener("mouseover", stopAutoMove);
carouselContainer.addEventListener("mouseout", startAutoMove);

// Add drag-and-drop functionality
carouselContainer.addEventListener("mousedown", startDrag);
carouselContainer.addEventListener("mousemove", onDrag);
carouselContainer.addEventListener("mouseup", endDrag);
// Mobile requires touch event listeners for drag-and-drop
carouselContainer.addEventListener("touchstart", startDrag);
carouselContainer.addEventListener("touchmove", onDrag);
carouselContainer.addEventListener("touchend", endDrag);


// Being the automatic sliding through the carousel on page load.
startAutoMove();
