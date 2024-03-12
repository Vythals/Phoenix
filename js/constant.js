gsap.registerPlugin(ScrollTrigger);
const tl = gsap.timeline({ paused: true });

//menu burger ouvert
const animateOpenNav = () => {
  tl.to(
    ".nav-container",
    {
      duration: 0,
      autoAlpha: 1,
      visibility: "visible",
    },
    "<.0"
  );
  tl.from(
    ".nav-container-bgd",
    {
      x: "100dvw",
      ease: "power2.in",
    },
    "<0"
  );
  tl.from(
    ".nav-container-bgg",
    {
      x: "-100dvw",
      ease: "power2.in",
    },
    "<0"
  );
  tl.to(
    ".site-main",
    {
      scale: 0.9,
      transformOrigin: "center top",
      ease: "power1.in",
    },
    "<.1"
  );
};
//on click burger = active
const openNav = () => {
  animateOpenNav();
  const navBtn = document.getElementById("menu-toggle-btn");
  navBtn.onclick = function (e) {
    navBtn.classList.toggle("active");
    tl.reversed(!tl.reversed());
  };
};

openNav();
///contenue burger animation affiche à l'ouverture
tl.from(".flex > div", 0.4, {
  opacity: 0,
  y: 10,
  stagger: {
    amount: 0.04,
  },
});
tl.from(
  ".nav-link",
  0.3,
  {
    opacity: 0,
    y: 10,
    ease: "power2.inOut",
    stagger: {
      amount: 0.3,
    },
  },
  "-=0.4"
);
tl.from(
  ".nav-footer",
  0.3,
  {
    opacity: 0,
  },
  "-=0.5"
).reverse();

//animation des images on hover des lien du menu burger ouvert

const links = document.querySelectorAll(".nav-link a");

links.forEach((link) => {
  const imagesBurgerTl = gsap.timeline({ paused: true });
  const limageDiv = link.nextElementSibling;

  imagesBurgerTl.to(limageDiv, {
    transformOrigin: "center",
    autoAlpha: 1,
    overwrite: "auto",
    width: "300px",
    duration: 0.3,
    ease: "power2.out",
  });

  // Variables pour stocker la position actuelle
  let currentX = 0;
  let currentY = 0;

  // Suivi de la souris
  link.addEventListener("mousemove", (e) => {
    const { offsetX, offsetY, target } = e;
    const { offsetWidth, offsetHeight } = target;

    const xPercent = (offsetX / offsetWidth - 0.5) * 2;
    const yPercent = (offsetY / offsetHeight - 0.5) * 2;

    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;

    gsap.to(limageDiv, {
      x: `${xPercent * (screenWidth / 12)}px`, // Ajustez la valeur de déplacement horizontal
      y: `${yPercent * (screenHeight / 8)}px`, // Ajustez la valeur de déplacement vertical
      skewX: xPercent * 5, // Ajustez la valeur de skew en fonction du mouvement horizontal
      ease: "power1.out",
    });
  });

  // Sauvegardez la position actuelle lorsque le lien est survolé
  link.addEventListener("mouseenter", () => {
    currentX = gsap.getProperty(limageDiv, "x");
    currentY = gsap.getProperty(limageDiv, "y");
    imagesBurgerTl.play();
  });

  // Arrêtez l'animation et réinitialisez la position de la div lorsque l'on quitte le lien
  link.addEventListener("mouseleave", () => {
    imagesBurgerTl.reverse();
  });

  // Utilisez l'événement onComplete pour réinitialiser la position après l'animation inverse
  imagesBurgerTl.eventCallback("onComplete", () => {
    gsap.to(limageDiv, {
      x: currentX,
      y: currentY,
      skewX: 0,
      skewY: 0,
      ease: "power2.out",
    });
  });
});

//----------------------------footer--------------------------
//parallaxe heures
gsap.to(".image-parallaxe", {
  y: "-200",
  ease: "none",
  scrollTrigger: {
    trigger: ".footer_heures",
    start: "-20px bottom",
    end: "bottom bottom",
    endTrigger: ".footer-low",
    scrub: 0.5,
  },
});
// Vérifier la largeur de l'écran
const isWideScreen = window.matchMedia("(min-width: 800px)").matches;

// Animation GSAP en fonction de la largeur de l'écran
if (isWideScreen) {
  gsap.to(".gsap-heures", {
    y: "-50",
    ease: "none",
    scrollTrigger: {
      trigger: ".footer_heures",
      start: "-20px bottom",
      end: "bottom bottom",
      endTrigger: ".footer-low",
      scrub: 0.5,
    },
  });
} else {
  gsap.to(".gsap-heures", {
    y: "-30",
    ease: "none",
    scrollTrigger: {
      trigger: ".footer_heures",
      start: "-20px bottom",
      end: "bottom bottom",
      endTrigger: ".footer-low",
      scrub: 0.5,
    },
  });
}

//footer classique
gsap.from(".gsap-footer", {
  y: "30",
  opacity: 0,
  duration: 1,
  ease: "power3.out",
  stagger: 0.5,
  scrollTrigger: {
    trigger: ".gsap-footer",
  },
});
gsap.from(".gsap-footer-adress", {
  y: "30",
  opacity: 0,
  duration: 2,
  ease: "power3.out",
  stagger: 0.5,
  scrollTrigger: {
    trigger: ".gsap-footer-adress",
  },
});
gsap.from(".gsap-footer-mentions", {
  y: "30",
  opacity: 0,
  duration: 2,
  ease: "power3.out",
  stagger: 0.5,
  scrollTrigger: {
    trigger: ".gsap-footer-mentions",
  },
});
gsap.from(".gsap-footer-hr", {
  y: "30",
  opacity: 0,
  duration: 1,
  ease: "power3.out",
  stagger: 0.5,
  scrollTrigger: {
    trigger: ".footer-low",
    start: "50% bottom",
  },
});
