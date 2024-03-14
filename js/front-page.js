gsap.registerPlugin(ScrollTrigger);
const tlFrontPage = gsap.timeline({});
tlFrontPage.from(".lettre-gsap", {
  opacity: 0,
  y: 50,
  duration: 1,
  ease: "power2.inOut",
  stagger: {
    amount: 1,
  },
});
tlFrontPage.from(".texte-fp-un", {
  opacity: 0,
  y: 50,
  duration: 0.5,
  ease: "power2.inOut",
});
tlFrontPage.from(
  ".scroll",
  {
    opacity: 0,
    x: 50,
    duration: 0.5,
    ease: "power2.inOut",
  },
  "<0.2"
);
tlFrontPage.from(
  ".img-accueil-un",
  {
    height: 0,
    duration: 1,
    ease: "power2.inOut",
  },
  1
);
tlFrontPage.from(
  ".img-accueil-un > .images-accueil",
  {
    scale: 2,
    duration: 1,
    ease: "power2.inOut",
  },
  2
);
///////////scrolltrigger
gsap.to(".scroll", {
  y: 100,
  scrollTrigger: {
    trigger: ".scroll",
    start: "top 200px",
    scrub: 1,
  },
});
/////////bloc G
gsap.from(".img-accueil-deux", {
  width: 0,
  duration: 1,
  ease: "power2.inOut",
  scrollTrigger: {
    trigger: ".img-accueil-deux",
  },
});
gsap.from(".img-accueil-deux > .images-accueil", {
  scale: 2,
  delay: 1,
  ease: "power2.inOut",
  scrollTrigger: {
    trigger: ".img-accueil-deux",
  },
});
gsap.from(".texte-fp-deux", {
  opacity: 0,
  duration: 1,
  ease: "power2.inOut",
  stagger: 0.5,
  scrollTrigger: {
    trigger: ".texte-fp-deux",
  },
});
gsap.from(".texte-fp-deux", {
  x: 50,
  scrollTrigger: {
    trigger: ".texte-fp-deux",
    scrub: 1,
  },
});
//////////bloc D
gsap.from(".img-accueil-trois", {
  height: 0,
  duration: 2,
  ease: "power3.inOut",
  scrollTrigger: {
    trigger: ".img-accueil-trois",
  },
});
gsap.from(".img-accueil-trois > .images-accueil", {
  scale: 2,
  delay: 2,
  ease: "power3.inOut",
  scrollTrigger: {
    trigger: ".img-accueil-trois",
  },
});
gsap.from(".texte-fp-trois", {
  opacity: 0,
  y: 50,
  duration: 1,
  ease: "power2.inOut",
  scrollTrigger: {
    trigger: ".texte-fp-trois",
  },
});
///////section 2
gsap.from(".accueil-desc-texte .mot_gsap h2", {
  opacity: 0,
  y: 10,
  duration: 0.8,
  stagger: 0.05,
  ease: "power2.inOut",
  scrollTrigger: {
    trigger: ".accueil-desc-texte .mot_gsap h2",
  },
});
gsap.from(".accueil-desc-texte .mot_gsap:nth-child(2n+1)", {
  x: 20,
  scrollTrigger: {
    trigger: ".accueil-desc-texte .mot_gsap h2",
    scrub: 1,
  },
});
gsap.from(".accueil-desc-texte .mot_gsap:nth-child(2n)", {
  x: -20,
  scrollTrigger: {
    trigger: ".accueil-desc-texte .mot_gsap h2",
    scrub: 1,
  },
});
gsap.from(".accueil-desc-texte-p h4", {
  opacity: 0,
  duration: 0.8,
  ease: "power2.inOut",
  scrollTrigger: {
    trigger: ".accueil-desc-texte-p h4",
  },
});
gsap.from(".accueil-desc-texte-p h4", {
  y: -20,
  scrollTrigger: {
    trigger: ".accueil-desc-texte-p",
    scrub: 1,
  },
});
gsap.from(".accueil-desc-texte-p p", {
  opacity: 0,
  y: 10,
  duration: 1,
  ease: "power2.inOut",
  scrollTrigger: {
    trigger: ".accueil-desc-texte-p p",
  },
});
gsap.from(".accueil-desc-texte .fancy", {
  opacity: 0,
  y: 30,
  scale: 2,
  duration: 1,
  ease: "power2.inOut",
  scrollTrigger: {
    trigger: ".accueil-desc-texte .fancy",
  },
});
gsap.from(".image-accueil-desc", {
  height: 0,
  duration: 1,
  ease: "power2.inOut",
  scrollTrigger: {
    trigger: ".image-accueil-desc",
  },
});
