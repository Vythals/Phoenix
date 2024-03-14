gsap.registerPlugin(ScrollTrigger);
/////////////////////////////Vedette/////////////////////
document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".splide", {
    type: "fade",
    rewind: true,
    speed: 2000,
    autoplay: (boolean = true),
    interval: (number = 5000),
    arrows: (boolean = false),
    pagination: (boolean = false),
    height: "100dvh",
  });
  splide.mount();
});
///////////gsap
gsap.from(".titre-gsap", {
  y: "80",
  opacity: 0,
  duration: 1,
  delay: 1,
  ease: "power1.out",
  stagger: 0.1,
});
gsap.to(".titre-gsap:nth-child(2n+1)", {
  x: "30",
  ease: "none",
  scrollTrigger: {
    trigger: ".voile-carrou",
    start: "center center",
    end: "bottom top",
    scrub: 1,
  },
});
gsap.to(".titre-gsap:nth-child(2n)", {
  x: "-30",
  ease: "none",
  scrollTrigger: {
    trigger: ".voile-carrou",
    start: "center center",
    end: "bottom top",
    scrub: 1,
  },
});
gsap.from(".contact-texte h2", {
  scrollTrigger: {
    trigger: ".contact-texte h2",
  },
  y: 40,
  opacity: 0,
  duration: 1,
  ease: "power2.inout",
  stagger: 0.1,
});
gsap.from(".contact-texte p", {
  scrollTrigger: {
    trigger: ".contact-texte p",
  },
  y: 40,
  opacity: 0,
  duration: 1,
  ease: "power2.inout",
  stagger: 0.1,
});
gsap.from(".coordonees h2", {
  scrollTrigger: {
    trigger: ".coordonees h2",
  },
  y: 40,
  opacity: 0,
  duration: 1,
  ease: "power2.inout",
  stagger: 0.1,
});
gsap.from(".coordonees h4", {
  scrollTrigger: {
    trigger: ".coordonees h4",
  },
  y: 40,
  opacity: 0,
  duration: 1,
  ease: "power2.inout",
  stagger: 0.1,
});
gsap.from(".container-heures-contact h2", {
  scrollTrigger: {
    trigger: ".container-heures-contact h2",
  },
  y: 40,
  opacity: 0,
  duration: 1,
  ease: "power2.inout",
  stagger: 0.1,
});
gsap.from(".container-heures-contact div", {
  scrollTrigger: {
    trigger: ".container-heures-contact div",
  },
  y: -40,
  opacity: 0,
  duration: 1,
  ease: "power2.inout",
  stagger: 0.1,
});
