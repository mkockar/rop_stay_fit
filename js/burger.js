const menuBtn = document.querySelector('.burger-menu');
const nav = document.querySelector('.links-container');
const background = document.querySelector('.background');
let menuOpen = false;
let navOpen = false;
let backgroundBlack = false;

menuBtn.addEventListener('click', () => {
  if (!menuOpen) {
    menuBtn.classList.add('open');
    nav.classList.add('open');
    background.classList.add('black');

    menuOpen = true;
    navOpen = true;
    backgroundBlack = true;
    
  } else {
    menuBtn.classList.remove('open');
    nav.classList.remove('open');
    background.classList.remove('black');

    menuOpen = false;
    navOpen = false;
    backgroundBlack = false;
  }
});
