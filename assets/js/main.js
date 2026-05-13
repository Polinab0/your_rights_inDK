document.addEventListener('DOMContentLoaded', function () {

    /* ACCORDION */

    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(function(item) {
        const button = item.querySelector('.accordion-header');

        if (button) {
            button.addEventListener('click', function() {
                item.classList.toggle('is-open');
            });
        }
    });



    /* STEP CARDS ANIMATION */

    const stepCards = document.querySelectorAll('.step-card-wrap');

    const observer = new IntersectionObserver(function(entries) {

        entries.forEach(function(entry) {

            const card = entry.target;
            const index = Array.from(stepCards).indexOf(card);

            if (entry.isIntersecting) {
                setTimeout(function() {
                    card.classList.add('is-visible');
                }, index * 180);
            } else {
                card.classList.remove('is-visible');
            }

        });

    }, {
        threshold: 0.25
    });

    stepCards.forEach(function(card) {
        observer.observe(card);
    });



    /* MOBILE MENU */

    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');

    if (mobileMenuButton && mobileMenuOverlay) {
        mobileMenuButton.addEventListener('click', function () {
            document.body.classList.toggle('menu-open');
        });

        mobileMenuOverlay.addEventListener('click', function () {
            document.body.classList.remove('menu-open');
        });
    }

});


const searchButton = document.querySelector('.search-toggle');
const searchForm = document.querySelector('.search-form');

if (searchButton && searchForm) {
    searchButton.addEventListener('click', function () {
        searchForm.classList.toggle('is-open');
    });
}