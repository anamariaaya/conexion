document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
});

let slideIndex = 0;
let slides = document.querySelectorAll(".gallery__slides");
let dots = document.querySelectorAll(".gallery__dot");

function iniciarApp(){
    menuResponsive();
    menuScroll();
    if(slides){
        showSlides();
    }
}

//Variables
const menu = document.querySelector('#menu');
const menuBtn = document.querySelector('#btn-menu');

function menuResponsive(){
    menuBtn.addEventListener('click', function(){
        menu.classList.toggle('header__nav--mobile');
        menuBtn.classList.toggle('fa-bars');
        menuBtn.classList.toggle('fa-times');
        }
    );
}

function menuScroll(){
    window.addEventListener('scroll', function(){
        if(window.pageYOffset > 70){
            menu.style.backgroundColor = '#02B665';
        } else{
            menu.style.backgroundColor = 'transparent';
        }
    });
}

function showSlides() {
  let i;  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" gallery__dot__active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " gallery__dot__active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}