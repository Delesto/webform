const hamburger = document.querySelector('.header .hamburger');
const close = document.querySelector('.header .close');
const mobileMenu = document.querySelector('.mobile-menu');

const menuAction = (action) => {
    return (event) => {
        let target = event.target;
        console.log(123)
        while (target !== this) {
            if (target.tagName === 'DIV') {
                if(action === 'open') {
                    mobileMenu.classList.add('block');
                } else {
                    mobileMenu.classList.remove('block');
                }
                break;
            } else {
                target = target.parentNode;
            }
        }
    }
}

hamburger.addEventListener('click', menuAction('open'));
close.addEventListener('click', menuAction('close'));