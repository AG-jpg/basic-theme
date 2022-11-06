jQuery(document).ready(function () {

    //Mobile Menu
    const mainMenu = document.querySelector('.sub-menu');
    const openMenu = document.querySelector('.openmenu');
    const closeMenu = document.querySelector('.closemenu');

    openMenu.addEventListener('click', show);
    closeMenu.addEventListener('click', close);

    function show() {
        mainMenu.style.visibility = 'visible';
        mainMenu.style.height = 'auto';
        closeMenu.style.display = 'block';
        openMenu.style.display = 'none';
    }

    function close() {
        mainMenu.style.visibility = 'hidden';
        mainMenu.style.height = '0px';
        closeMenu.style.display = 'none';
        openMenu.style.display = 'block';
    }

    //Slider
    jQuery('.slider-mobile').bxSlider({
        auto: true,
        pager: false,
        mode: 'fade',
        speed: 1000
    });

});