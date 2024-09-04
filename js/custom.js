//scroll
window.addEventListener('scroll', function () {
  const header = document.querySelector('#header');
  header.classList.toggle('sticky', window.scrollY > 0);
});

//icons
lucide.createIcons();

// Dot
gsap.set("#cursor-dot", {xPercent: -50, yPercent: -50});

let xTo = gsap.quickTo("#cursor-dot", "x", {duration: 0.6, ease: "power3"}),
    yTo = gsap.quickTo("#cursor-dot", "y", {duration: 0.6, ease: "power3"});

window.addEventListener("mousemove", e => {
  xTo(e.clientX);
  yTo(e.clientY);
});
