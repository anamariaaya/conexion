document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
});

function iniciarApp(){
    menuResponsive();
    menuScroll();
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