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

window.toggleCheckout = function() {
    const checkout = document.getElementById('Checkout');
    const openCheckout = document.getElementById('open-checkout');
    const closeCheckout = document.getElementById('close-checkout');
    const button = document.getElementById('checkout-button');

    checkout.classList.toggle('hidden');
    openCheckout.classList.toggle('hidden');
    closeCheckout.classList.toggle('hidden');

    // toggle posisi bottom
    if (button.classList.contains('bottom-8')) {
        button.classList.remove('bottom-8');
        button.classList.add('bottom-[290px]');
    } else {
        button.classList.remove('bottom-[290px]');
        button.classList.add('bottom-8');
    }
}