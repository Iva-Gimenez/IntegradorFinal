
//Carousel Principak

const buttonsWrapper = document.querySelector(".map");
const slides = document.querySelector(".inner");

buttonsWrapper.addEventListener("click", (e) => {
  if (e.target.nodeName === "BUTTON") {
    Array.from(buttonsWrapper.children).forEach((item) =>
      item.classList.remove("active")
    );
    if (e.target.classList.contains("first")) {
      slides.style.transform = "translateX(-0%)";
      e.target.classList.add("active");
    } else if (e.target.classList.contains("second")) {
      slides.style.transform = "translateX(-33.33333333333333%)";
      e.target.classList.add("active");
    } else if (e.target.classList.contains("third")) {
      slides.style.transform = "translatex(-66.6666666667%)";
      e.target.classList.add("active");
    }
  } 
});


//Clientes
(function(){
  //obtengo todos los elementos de main body
  const mains = [...document.querySelectorAll('main__body')];
  const arrowNext = document.querySelector('#next');
  const arrowBefore = document.querySelector('#before');
  let value;

  arrowNext.addEventListener('click', ()=>changePosition(1));
  arrowBefore.addEventListener('click', ()=>changePosition(-1));

  const buttonsWrapper = document.querySelector(".map");
  const slides = document.querySelector(".inner");
  
  buttonsWrapper.addEventListener("click", (e) => {
    if (e.target.nodeName === "BUTTON") {
      Array.from(buttonsWrapper.children).forEach((item) =>
        item.classList.remove("active")
      );
      if (e.target.classList.contains("first")) {
        slides.style.transform = "translateX(-0%)";
        e.target.classList.add("active");
      } else if (e.target.classList.contains("second")) {
        slides.style.transform = "translateX(-33.33333333333333%)";
        e.target.classList.add("active");
      } else if (e.target.classList.contains("third")) {
        slides.style.transform = "translatex(-66.6666666667%)";
        e.target.classList.add("active");
      }
    } 
  });
})
  
$(document).ready(function(){
  $(window).scroll(function(){
      // sticky navbar on scroll script
      if(this.scrollY > 20){
          $('.navbar').addClass("sticky");
      }else{
          $('.navbar').removeClass("sticky");
      }
      
      // scroll-up button show/hide script
      if(this.scrollY > 500){
          $('.scroll-up-btn').addClass("show");
      }else{
          $('.scroll-up-btn').removeClass("show");
      }
  });

  // slide-up script
  $('.scroll-up-btn').click(function(){
      $('html').animate({scrollTop: 0});
      // removing smooth scroll on slide-up button click
      $('html').css("scrollBehavior", "auto");
  });

  $('.navbar .menu li a').click(function(){
      // applying again smooth scroll on menu items click
      $('html').css("scrollBehavior", "smooth");
  });

  // toggle menu/navbar script
  $('.menu-btn').click(function(){
      $('.navbar .menu').toggleClass("active");
      $('.menu-btn i').toggleClass("active");
  });


  // owl carousel script
  $('.carousel').owlCarousel({
      margin: 20,
      loop: true,
      autoplay: true,
      autoplayTimeOut: 2000,
      autoplayHoverPause: true,
      responsive: {
          0:{
              items: 1,
              nav: false
          },
          600:{
              items: 2,
              nav: false
          },
          1000:{
              items: 3,
              nav: false
          }
      }
  });
});


