// Why Giopio Mega Menu
const whyGiopio = document.querySelector('.why-giopio-link');
const whyGiopioMegaMenu = document.querySelector('.mega-menu');

whyGiopio.addEventListener('click', function(e){
    e.preventDefault();
    whyGiopioMegaMenu.classList.toggle('active');
});

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

// Giopio Modal
const openGiopioModal = document.querySelector('#openGiopioModal');
const giopioModalClose = document.querySelector('#giopioModalClose');
const giopioContactModal = document.querySelector('.giopio-modal');
const giopioContactModalBackdrop = document.querySelector('.giopio-modal-backdrop');

openGiopioModal.addEventListener('click', function(e){
    e.preventDefault();
    giopioContactModal.classList.add('active');
    giopioContactModalBackdrop.classList.add('active');
});

giopioModalClose.addEventListener('click', function(e){
    e.preventDefault();
    giopioContactModal.classList.remove('active');
    giopioContactModalBackdrop.classList.remove('active');
});


// Category menu horizontal slider
function slide(direction){
    var categoryContainer = document.getElementById('categoryContainer');
    scrollCompleted = 0;
    var slideVar = setInterval(function(){
        if(direction == 'left'){
            categoryContainer.scrollLeft -= 10;
        } else {
            categoryContainer.scrollLeft += 10;
        }
        scrollCompleted += 10;
        if(scrollCompleted >= 100){
            window.clearInterval(slideVar);
        }
    }, 50);
}


// search box
const searchBtn = document.querySelector('#searchBtn');
const searchField = document.querySelector('#searchField');
if(searchBtn){
searchBtn.addEventListener('click', function(e){
    e.preventDefault();
    searchField.classList.toggle('block');
    searchField.classList.toggle('hidden');
});
}
