const header = document.querySelector('.header');

if (header) {
    // products dropdown start
    const dropdownItem = header.querySelector('.header-navigation-item--products'),
        dropdownOpenBtn = dropdownItem.querySelector('.header-navigation-link--products'),
        dropdownCloseBtn = dropdownItem.querySelector('.products-navigation-close');

    dropdownOpenBtn.onclick = e => {
        e.preventDefault();
        dropdownItem.classList.add('show');
    }
    dropdownCloseBtn.onclick = e => {
        e.preventDefault();
        dropdownItem.classList.remove('show');
    }
    // products dropdown end
}