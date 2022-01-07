const header = document.querySelector('.header');

if (header) {
  //* =>> feedback
  const body = document.querySelector('body'),
    feedback = header.querySelector('.feedback'),
    feedbackOpenBtn = feedback.querySelector('.feedback-open-btn'),
    feedbackCloseBtn = feedback.querySelector('.feedback-close-btn'),
    feedbackModalClose = feedback.querySelector('.feedback-modal-close'),
    feedbackInputs = feedback.querySelectorAll('.feedback-input');

  feedbackOpenBtn.onclick = () => {
    body.classList.add('feedback');
    setTimeout(() => {
      feedbackInputs[0].focus();
    }, 200)
  }
  feedbackCloseBtn.onclick = () => {
    body.classList.remove('feedback');
  }
  feedbackModalClose.onclick = () => {
    body.classList.remove('feedback');
  }
  //* <<= feedback

  //* =>> products dropdown
  const dropdown = header.querySelector('.products-dropdown'),
    dropdownShowBtn = dropdown.querySelector('[data-action="show"]'),
    dropdownHideBtn = dropdown.querySelector('[data-action="hide"]');

  dropdownShowBtn.onclick = () => {
    body.classList.add('products-dropdown');
  }

  dropdownHideBtn.onclick = () => {
    body.classList.remove('products-dropdown');
  }
  //* <<= products dropdown
}