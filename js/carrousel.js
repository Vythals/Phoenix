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
