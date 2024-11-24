let navbar = document.querySelector('.header .navbar');
document.querySelectorAll('#menu-btn').forEach(faqBox => {
  faqBox.onclick = ()=> {
    navbar.classList.toggle('active');
 }
 
}) 
window.onscroll = () => {
   navbar.classList.remove('active');
}
document.querySelectorAll('.contact .row .faq .box h3').forEach(faqBox => {
   faqBox.onclick = () => {
      faqBox.parentElement.classList.toggle('active');
   }
});

var swiper = new Swiper(".home-slider", {
   loop: true,
   effect: "coverflow",
   spaceBetween: 30,
   grabCursor: true,
   coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
   },
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },
});



 

// slider about 
$(document).ready(function () {
   $('.owl-carousel').owlCarousel({
       center: false,
       items: 2,
       loop: true,
       margin: 10,
       autoplay:true,
       responsive: {
           600: {
               items: 1
           },
           1000: {
               items: 1
           }
       }
   });

});

(function() {
   "use strict";
 
   /**
    * Easy selector helper function
    */
   const select = (el, all = false) => {
     el = el.trim()
     if (all) {
       return [...document.querySelectorAll(el)]
     } else {
       return document.querySelector(el)
     }
   }
 
   /**
    * Easy event listener function
    */
   const on = (type, el, listener, all = false) => {
     let selectEl = select(el, all)
 
     if (selectEl) {
       if (all) {
         selectEl.forEach(e => e.addEventListener(type, listener))
       } else {
         selectEl.addEventListener(type, listener)
       }
     }
   }
 
   /**
    * Scrolls to an element with header offset
    */
   const scrollto = (el) => {
     window.scrollTo({
       top: 0,
       behavior: 'smooth'
     })
   }
 
   /**
    * Mobile nav toggle
    */
   on('click', '.mobile-nav-toggle', function(e) {
     select('#navbar').classList.toggle('navbar-mobile')
     this.classList.toggle('bi-list')
     this.classList.toggle('bi-x')
   })
 
   /**
    * Scrool with ofset on links with a class name .scrollto
    */
   on('click', '#navbar .nav-link', function(e) {
     let section = select(this.hash)
     if (section) {
       e.preventDefault()
 
       let navbar = select('#navbar')
       let header = select('#header')
       let sections = select('section', true)
       let navlinks = select('#navbar .nav-link', true)
 
       navlinks.forEach((item) => {
         item.classList.remove('active')
       })
 
       this.classList.add('active')
 
       if (navbar.classList.contains('navbar-mobile')) {
         navbar.classList.remove('navbar-mobile')
         let navbarToggle = select('.mobile-nav-toggle')
         navbarToggle.classList.toggle('bi-list')
         navbarToggle.classList.toggle('bi-x')
       }
 
       if (this.hash == '#header') {
         header.classList.remove('header-top')
         sections.forEach((item) => {
           item.classList.remove('section-show')
         })
         return;
       }
 
       if (!header.classList.contains('header-top')) {
         header.classList.add('header-top')
         setTimeout(function() {
           sections.forEach((item) => {
             item.classList.remove('section-show')
           })
           section.classList.add('section-show')
 
         }, 350);
       } else {
         sections.forEach((item) => {
           item.classList.remove('section-show')
         })
         section.classList.add('section-show')
       }
 
       scrollto(this.hash)
     }
   }, true)
 
   /**
    * Activate/show sections on load with hash links
    */
   window.addEventListener('load', () => {
     if (window.location.hash) {
       let initial_nav = select(window.location.hash)
 
       if (initial_nav) {
         let header = select('#header')
         let navlinks = select('#navbar .nav-link', true)
 
         header.classList.add('header-top')
 
         navlinks.forEach((item) => {
           if (item.getAttribute('href') == window.location.hash) {
             item.classList.add('active')
           } else {
             item.classList.remove('active')
           }
         })
 
         setTimeout(function() {
           initial_nav.classList.add('section-show')
         }, 350);
 
         scrollto(window.location.hash)
       }
     }
   });
 
   /**
    * Skills animation
    */
   let skilsContent = select('.skills-content');
   if (skilsContent) {
     new Waypoint({
       element: skilsContent,
       offset: '80%',
       handler: function(direction) {
         let progress = select('.progress .progress-bar', true);
         progress.forEach((el) => {
           el.style.width = el.getAttribute('aria-valuenow') + '%'
         });
       }
     })
   }
 
   /**
    * Testimonials slider
    */
   new Swiper('.testimonials-slider', {
     speed: 600,
     loop: true,
     autoplay: {
       delay: 5000,
       disableOnInteraction: false
     },
     slidesPerView: 'auto',
     pagination: {
       el: '.swiper-pagination',
       type: 'bullets',
       clickable: true
     },
     breakpoints: {
       320: {
         slidesPerView: 1,
         spaceBetween: 20
       },
 
       1200: {
         slidesPerView: 3,
         spaceBetween: 20
       }
     }
   });
 
   /**
    * Porfolio isotope and filter
    */
   window.addEventListener('load', () => {
     let portfolioContainer = select('.portfolio-container');
     if (portfolioContainer) {
       let portfolioIsotope = new Isotope(portfolioContainer, {
         itemSelector: '.portfolio-item',
         layoutMode: 'fitRows'
       });
 
       let portfolioFilters = select('#portfolio-flters li', true);
 
       on('click', '#portfolio-flters li', function(e) {
         e.preventDefault();
         portfolioFilters.forEach(function(el) {
           el.classList.remove('filter-active');
         });
         this.classList.add('filter-active');
 
         portfolioIsotope.arrange({
           filter: this.getAttribute('data-filter')
         });
       }, true);
     }

     
 
   });
 
   /**
    * Initiate portfolio lightbox 
    */
   const portfolioLightbox = GLightbox({
     selector: '.portfolio-lightbox'
   });
 
   /**
    * Initiate portfolio details lightbox 
    */
   const portfolioDetailsLightbox = GLightbox({
     selector: '.portfolio-details-lightbox',
     width: '90%',
     height: '90vh'
   });
 
   /**
    * Portfolio details slider
    */
   new Swiper('.portfolio-details-slider', {
     speed: 400,
     loop: true,
     autoplay: {
       delay: 5000,
       disableOnInteraction: false
     },
     pagination: {
       el: '.swiper-pagination',
       type: 'bullets',
       clickable: true
     }
   });
 
   /**
    * Initiate Pure Counter 
    */
  
 
 })()


////////////////////////////////////////////////////////
// booking code
// credit card 
let visa = document.getElementById("visa");
let card = document.querySelectorAll(".cardNumber");
visa.addEventListener('change', function () {
  if (visa.value == 'visa') {
    for (let i = 0; i < card.length; i++) {
      card[i].style.display = 'block';
      card[i].style.visibility = 'visible'
    }
  } else {
    for (let i = 0; i < card.length; i++) {
      card[i].style.display = 'none';
      card[i].style.visibility = 'hidden'

    }
  }
})

// suite and hall code
let suite = document.getElementById("roomType")
let room = document.querySelectorAll(".Room")
let hall = document.querySelectorAll(".hall")
let bed = document.querySelectorAll("#bed")
suite.addEventListener("change", function () {
  if (suite.value == 'suite') {
    for (let i = 0; i < room.length; i++) {
      room[i].style.display = 'block';
      room[i].style.visibility = 'visible'
    }
  } else if (suite.value == 'hall') {
    for (let i = 0; i < hall.length; i++) {
      room[i].style.display = 'none';
      room[i].style.visibility = 'hidden'
      bed[i].style.visibility = "hidden";
      bed[i].style.display = 'none'
    }
  } else {
    for (let i = 0; i < room.length; i++) {
 
      room[i].style.display = 'none';
      room[i].style.visibility = 'hidden'
    }
  }
})
// End booking
///////////////////////////////////////////////////////////

