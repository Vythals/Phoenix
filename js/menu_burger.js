gsap.registerPlugin(ScrollTrigger);
const tl = gsap.timeline({ paused: true });
//Ajoutez une variable pour suivre l'état du menu burger
let isBurgerMenuOpen = false;

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

    isBurgerMenuOpen = !isBurgerMenuOpen;
    if (isBurgerMenuOpen) {
      // Désactiver la partie liée à la couleur du menu
      ScrollTrigger.getAll().forEach((trigger) => trigger.kill());
      gsap.to(".navbar", {
        backgroundColor: "transparent",
      });
      if (!tl.reversed()) {
        document.querySelector(".navbar").classList.remove("activenav");
      }
    } else {
      // Réactiver la partie liée à la couleur du menu
      ScrollTrigger.create({
        trigger: ".splide",
        scrub: 1,
        start: "100px top",
        end: "+=1px",
        onEnter: () => {
          document.querySelector(".navbar").classList.add("activenav");
        },
        onLeaveBack: () => {
          document.querySelector(".navbar").classList.remove("activenav");
        },
      });
      gsap.to(".navbar", {
        scrollTrigger: {
          trigger: ".splide",
          scrub: 1,
          start: "100px top",
          end: "+=1px ",
        },
        backgroundColor: "#851020b9",
      });
    }
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
    autoAlpha: 1,
    x: "-10%",
    width: "200px",
    duration: 0.4,
    ease: "power4.out",
  });
  imagesBurgerTl.to(
    ".img-menu-burger",
    {
      width: "200px",
      duration: 0.4,
      ease: "power4.out",
    },
    0.2
  );

  link.addEventListener("mouseenter", () => imagesBurgerTl.play());
  link.addEventListener("mouseleave", () => imagesBurgerTl.reverse());
});

//nav menu couleur////////////////////////////////////
gsap.to(".navbar", {
  scrollTrigger: {
    trigger: ".splide",
    scrub: 1,
    start: "100px top",
    end: "+=1px ",
  },
  backgroundColor: "#851020b9",
});
