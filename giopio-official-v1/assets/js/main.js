// Mobile Menu
const menuTrigger = document.querySelector('.mobile-menu-trigger');
const menuArea = document.querySelector('.mobile-nav');
const mobileDrawback = document.querySelector('.mobile-black-screen');
const mobileMenuClose = document.querySelector('.mobile-menu-close');
menuTrigger.addEventListener('click', function(){
    menuArea.classList.toggle('active');
    mobileDrawback.classList.toggle('active');
});
mobileDrawback.addEventListener('click', function(){
    menuArea.classList.toggle('active');
    this.classList.toggle('active');
});
mobileMenuClose.addEventListener('click', function(){
    menuArea.classList.toggle('active');
    mobileDrawback.classList.toggle('active');
});


// Sticky Navbar
const header = document.querySelector('header')
window.addEventListener('scroll', function() {
    scrollPosition = window.scrollY;

    if (scrollPosition >= 10) {
        header.classList.add('menu-sticky');
    }else{
        header.classList.remove('menu-sticky');
    }
});