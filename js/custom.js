//scroll
window.addEventListener('scroll', function () {
  const header = document.querySelector('#header');
  header.classList.toggle('sticky', window.scrollY > 0);
});

//icons
lucide.createIcons();

// Dot
const dot = document.getElementById("cursor-dot");
const circle = document.getElementById("cursor-circle");

// Initialize opacity
let opacity = 1;

let dotX = 0, dotY = 0;
let circleX = 0, circleY = 0;

// Mouse move event handler
document.addEventListener("mousemove", (e) => {
    dotX = e.clientX;
    dotY = e.clientY;
    
    dot.style.top = `${dotY}px`;
    dot.style.left = `${dotX}px`;

    // Set opacity to 1 when moving
    dot.style.opacity = circle.style.opacity = opacity;
});

// Circle animation function
const circleAnimation = () => {
    const parts = 6;
    circleX += (dotX - circleX) / parts;
    circleY += (dotY - circleY) / parts;
    
    circle.style.top = `${circleY}px`;
    circle.style.left = `${circleX}px`;

    window.requestAnimationFrame(circleAnimation);
};

// Start the animation
window.requestAnimationFrame(circleAnimation);
