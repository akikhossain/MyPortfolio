// JavaScript to trigger the fade-in and fade-out animation
const fadeInOutImage = document.getElementById("fadeInOutImage");

// Initial fade-in when the page loads
fadeInOutImage.style.opacity = 1;

// Function to toggle the fade-in and fade-out animation
function toggleFadeInOut() {
    fadeInOutImage.style.opacity =
        fadeInOutImage.style.opacity === "0" ? "1" : "0";
}

// Set an interval to toggle the animation every 2000 milliseconds (2 seconds)
setInterval(toggleFadeInOut, 2000);

// header button
