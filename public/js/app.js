/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/master.js ***!
  \****************************************/
//* Ajax request setup 
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/header.js ***!
  \****************************************/
var header = document.querySelector('.header');

if (header) {
  //* => products dropdown start
  var navigation = header.querySelector('.header-navigation'),
      dropdownOpenBtn = navigation.querySelector('.header-navigation-link--products'),
      dropdownCloseBtn = navigation.querySelector('.products-navigation-close');

  dropdownOpenBtn.onclick = function (e) {
    e.preventDefault();
    navigation.classList.add('show');
  };

  dropdownCloseBtn.onclick = function (e) {
    e.preventDefault();
    navigation.classList.remove('show');
  }; //* products dropdown end <=
  //* => feedback modal


  var feedbackOpen = header.querySelector('.feedback-btn'),
      feedbackModal = header.querySelector('.feedback-modal'),
      feedbackForm = feedbackModal.querySelector('.feedback-form'),
      feedbackCloseBtns = feedbackModal.querySelectorAll('[data-action="close-modal"]'),
      feedbackHand = feedbackModal.querySelector('.feedback-hand');

  feedbackOpen.onclick = function (e) {
    e.preventDefault();
    feedbackModal.classList.remove('hidden');
    feedbackModal.focus();
  };

  feedbackCloseBtns.forEach(function (button) {
    button.onclick = function (e) {
      e.preventDefault();
      feedbackModal.classList.add('hidden');
    };
  });
  feedbackModal.addEventListener('click', function (e) {
    feedbackForm.classList.remove('fail');
    feedbackForm.classList.remove('success');
  });

  if (window.innerHeight < 700 || window.innerWidth < 444) {
    feedbackHand.style.display = 'none';
  } //* feedback modal <=

}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/footer.js ***!
  \****************************************/
//! Scroll window to top (button event)
// $("#top").click(function () {
// $("html, body").animate({ scrollTop: 0 }, "slow");
// return false;
// });
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!************************************!*\
  !*** ./resources/js/pages/home.js ***!
  \************************************/

})();

/******/ })()
;