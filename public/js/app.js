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
  //* =>> feedback
  var body = document.querySelector('body'),
      feedback = header.querySelector('.feedback'),
      feedbackOpenBtn = feedback.querySelector('.feedback-open-btn'),
      feedbackCloseBtn = feedback.querySelector('.feedback-close-btn'),
      feedbackModalClose = feedback.querySelector('.feedback-modal-close'),
      feedbackInputs = feedback.querySelectorAll('.feedback-input');

  feedbackOpenBtn.onclick = function () {
    body.classList.add('feedback');
    setTimeout(function () {
      feedbackInputs[0].focus();
    }, 200);
  };

  feedbackCloseBtn.onclick = function () {
    body.classList.remove('feedback');
  };

  feedbackModalClose.onclick = function () {
    body.classList.remove('feedback');
  }; //* <<= feedback
  //* =>> products dropdown


  var dropdown = header.querySelector('.products-dropdown'),
      dropdownShowBtn = dropdown.querySelector('[data-action="show"]'),
      dropdownHideBtn = dropdown.querySelector('[data-action="hide"]');

  dropdownShowBtn.onclick = function () {
    body.classList.add('products-dropdown');
  };

  dropdownHideBtn.onclick = function () {
    body.classList.remove('products-dropdown');
  }; //* <<= products dropdown

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