// To query header height
const header = document.querySelector('header');
let height;     // Header height

// To keep clear of header
const main = document.querySelector('main');

// To control slide-in menu
const toggler = document.querySelector('button');
const menu = document.querySelector('.header-menu');
let pos = -50;  // Starting menu position, hidden
let slide;      // To set and clear interval

// Set menu and main positions on page load
menu.style.right = '-50%';

/**
 * Get the header height and place the main content below it
 */
const setMain = () => {
    height = header.offsetHeight;
    main.style.top = `${height + 17}px`;
};

setMain();  // Set the main element initial position

/**
 * Resize listener to reposition the main page content based on header layout
 */
window.addEventListener('resize', () => {
    setMain();
});

/**
 * Incrementally move the menu into view
 */
const slideIn = () => {
    if (pos >= 0) {
        clearInterval(slide);
    }
    else {
        pos++;
        menu.style.right = `${pos}%`;
    }
};

/**
 * Incrementally move the menu out of view
 */
const slideOut = () => {
    if (pos <= -50) {
        clearInterval(slide);
    }
    else {
        pos--;
        menu.style.right = `${pos}%`;
    }
};

/**
 * Click listener for the hamburger button, to slide menu in/out
 */
toggler.addEventListener('click', () => {
    height = header.offsetHeight;   // Get current header height
    menu.style.top = `${height}px`; // Place the menu underneath the header

    // If menu out of view, slide-in; otherwise, slide-out
    slide = menu.style.right === '-50%' ? setInterval(slideIn, 1) : setInterval(slideOut, 1);
});

// To show and hide scroll button
const scrollBtnClasses = document.querySelector('.scroll-btn').classList;
// To show and hide header trim
const headerClasses = header.classList;

/**
 * Scroll listener 
 * Remove the slide-in menu on scroll
 * Show/Hide scroll to top button
 */
window.addEventListener('scroll', () => {
    // Slide-in menu in view
    if (pos === 0) {
        slide = setInterval(slideOut, 1);    // Slide-out
    }

    // Scroll show for to-top button
    window.scrollY >= 160 ? scrollBtnClasses.add('show') : scrollBtnClasses.remove('show');

    // Scroll show for header trim
    window.scrollY >= 20 ? headerClasses.add('trim') : headerClasses.remove('trim');
});
