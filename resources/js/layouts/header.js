const header = document.querySelector('.header');

if (header) {
    //* => products dropdown start
    const navigation = header.querySelector('.header-navigation'),
        dropdownOpenBtn = navigation.querySelector('.header-navigation-link--products'),
        dropdownCloseBtn = navigation.querySelector('.products-navigation-close');

    dropdownOpenBtn.onclick = e => {
        e.preventDefault();
        navigation.classList.add('show');
    }
    dropdownCloseBtn.onclick = e => {
        e.preventDefault();
        navigation.classList.remove('show');
    }
    //* products dropdown end <=
    //* => feedback modal
    const feedbackOpen = header.querySelector('.feedback-btn'),
        feedbackModal = header.querySelector('.feedback-modal'),
        feedbackForm = feedbackModal.querySelector('.feedback-form'),
        feedbackCloseBtns = feedbackModal.querySelectorAll('[data-action="close-modal"]'),
        feedbackHand = feedbackModal.querySelector('.feedback-hand');

    feedbackOpen.onclick = e => {
        e.preventDefault();
        feedbackModal.classList.remove('hidden');
        feedbackModal.focus();
    }
    feedbackCloseBtns.forEach(button => {
        button.onclick = e => {
            e.preventDefault();
            feedbackModal.classList.add('hidden');
        }
    });
    feedbackModal.addEventListener('click', e => {
        feedbackForm.classList.remove('fail');
        feedbackForm.classList.remove('success');
    });
    if (window.innerHeight < 700) {
        feedbackHand.style.display = 'none';
    }
    //* feedback modal <=
}