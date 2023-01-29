const menuBtn = document.querySelector('.burger-menu');
const nav = document.querySelector('.links-container');
let burgerOpen = false;
let menuOpen = false;

menuBtn.addEventListener('click', () => {
    if(menuOpen == false){
        menuBtn.classList.add('open');
        nav.classList.add('open');

        burgerOpen = true;
        menuOpen = true;
    }else{
        menuBtn.classList.remove('open');
        nav.classList.remove('open');
        burgerOpen = false;
        menuOpen = false;
    }
})