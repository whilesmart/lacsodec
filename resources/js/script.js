// selecting all required components 
const menu = document.getElementById('navigation-menu');
const menuToggler = document.getElementById('navigation-toggler');
const menuClose = document.getElementById('navigation-close');

// open menu
const openMenu = () => {
    menu.classList.add('open');
}

// close menu
const closeMenu = () => {
    menu.classList.remove('open');
}

menuToggler.addEventListener('click', () => { openMenu() })
menuClose.addEventListener('click', () => { closeMenu() })