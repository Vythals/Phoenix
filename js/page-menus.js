gsap.registerPlugin(ScrollTrigger);
/////////////////////////////Vedette/////////////////////
gsap.from(".titre-gsap", {
  y: "80",
  opacity: 0,
  duration: 1,
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
////////////////////////////////Boutons pour les menus/////////////////////////////
gsap.from(".button-menu", {
  scrollTrigger: {
    trigger: ".button-menu",
  },
  y: 40,
  opacity: 0,
  duration: 1,
  ease: "power3.in",
  stagger: 0.1,
});
/////////////////////titre menu categorie///////////////////
const titresCategorie = document.querySelectorAll('.titre-menu-categorie-gsap');

    // Utilisez GSAP pour animer chaque élément individuellement
    titresCategorie.forEach((titreCategorie, index) => {
        gsap.from(titreCategorie, {
            opacity: 0,
            duration: 1,
            ease:"power1.out",
            scrollTrigger: {
                trigger: titreCategorie,
            }
        });
        gsap.to(titreCategorie, {
          y: -50,
          scrollTrigger: {
              trigger: titreCategorie,
              scrub:  1,
          }
      });
    });
const containerImagesMenu = document.querySelectorAll('.container-images-menu');

    // Utilisez GSAP pour animer chaque élément individuellement
    containerImagesMenu.forEach((unContainerImagesMenu, index) => {
        gsap.from(unContainerImagesMenu, {
            height:0,
            y:-150,
            duration: 1,
            ease:"power1.out",
            scrollTrigger: {
                trigger: unContainerImagesMenu,
                start:"center bottom",
            }
            
        });
    });
    const elements = document.querySelectorAll(".images-menu");

    // Utilisez GSAP pour animer chaque élément individuellement
    elements.forEach((element, index) => {
      gsap.from(element, {
        scale: 1.5,
        scrollTrigger: {
          trigger: element,
          start:"top bottom",
          scrub: 1,
        },
      });
    });


    const menuContenus = document.querySelectorAll('.menu-contenu');

    // Utilisez GSAP pour animer chaque élément ".article-menu" à l'intérieur de chaque ".menu-contenu"
    menuContenus.forEach((menuContenu) => {
        const articlesMenu = menuContenu.querySelectorAll('.article-menu');

        articlesMenu.forEach((article, index) => {
            gsap.from(article, {
                opacity: 0,
                x: 50,
                duration: 1,
                stagger: 0.5,
                ease: "back.out",
                scrollTrigger: {
                  trigger: menuContenu,
                  start:"center bottom",
                },
            });
        });
    });
////////////////////////////////tippy//////////////////////
document.addEventListener("DOMContentLoaded", function () {
  const tippyElements = document.querySelectorAll(".article-menu");
  tippyElements.forEach(function (element) {
    const titleElement = element.querySelector(".article-titre");
    const contentElement = element.querySelector(".article-contenu");
    if (contentElement.innerHTML.trim() !== "") {
      tippy(titleElement, {
        content: contentElement.innerHTML,
        allowHTML: true,
        theme: "menu",
      });
    }
  });

  let menuEmporterOpen = true;
  let menuCarteOpen = false;
  let menuVolonteOpen = false;
  const tlEmporter = gsap.timeline({});
  const openMenuEmporter = () => {
    tlEmporter.from(".menu-emporter", {
      y: 50,
      autoAlpha: 0,
      duration: 0.4,
      ease: "power2.out",
    });
    tlEmporter.from(
      ".menu-emporter",
      {
        display: "none",
      },
      "-=0.5"
    );
  };
  const tlCarte = gsap.timeline({ paused: true });
  const openMenuCarte = () => {
    tlCarte.from(".menu-carte", {
      y: 50,
      autoAlpha: 0,
    });
    tlCarte.from(
      ".menu-carte",
      {
        display: "none",
      },
      "-=0.5"
    );
  };
  const tlVolonte = gsap.timeline({ paused: true });
  const openMenuVolonte = () => {
    tlVolonte.from(".menu-volonte", {
      y: 50,
      autoAlpha: 0,
    });
    tlVolonte.from(
      ".menu-volonte",
      {
        display: "none",
      },
      "-=0.5"
    );
  };
  const openEmporter = () => {
    openMenuEmporter();
    openMenuCarte();
    openMenuVolonte();
    const menuEmporterBtn = document.getElementById("menu-emporter-button");
    const menuCarteBtn = document.getElementById("menu-carte-button");
    const menuVolonteBtn = document.getElementById("menu-volonte-button");
    menuEmporterBtn.onclick = function (e) {
      if (menuEmporterOpen != true) {
        menuEmporterOpen = true;
        menuCarteOpen = false;
        menuVolonteOpen = false;
        setTimeout(function () {
          tlEmporter.play();
        }, 450);
        tlCarte.reverse();
        tlVolonte.reverse();
      }
    };
    menuCarteBtn.onclick = function (e) {
      if (menuCarteOpen != true) {
        menuEmporterOpen = false;
        menuCarteOpen = true;
        menuVolonteOpen = false;
        tlEmporter.reverse();
        setTimeout(function () {
          tlCarte.play();
        }, 450);
        tlVolonte.reverse();
      }
    };
    menuVolonteBtn.onclick = function (e) {
      if (menuVolonteOpen != true) {
        menuEmporterOpen = false;
        menuCarteOpen = false;
        menuVolonteOpen = true;
        tlEmporter.reverse();
        tlCarte.reverse();
        setTimeout(function () {
          tlVolonte.play();
        }, 450);
      }
    };
  };

  openEmporter();
});
