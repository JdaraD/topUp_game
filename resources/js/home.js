import './bootstrap';
// window.modif = function () {
//     document.getElementById("demo").innerText = "hello"
// }

// fungsi more info game

window.openHamburger = function() {
    const hamburger = document.getElementById('Hamburger');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    hamburger.classList.toggle('hidden');
    iconOpen.classList.toggle('hidden');
    iconClose.classList.toggle('hidden');
}