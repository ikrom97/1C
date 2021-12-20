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
  // products dropdown start
  var dropdownItem = header.querySelector('.header-navigation-item--products'),
      dropdownOpenBtn = dropdownItem.querySelector('.header-navigation-link--products'),
      dropdownCloseBtn = dropdownItem.querySelector('.products-navigation-close');

  dropdownOpenBtn.onclick = function (e) {
    e.preventDefault();
    dropdownItem.classList.add('show');
  };

  dropdownCloseBtn.onclick = function (e) {
    e.preventDefault();
    dropdownItem.classList.remove('show');
  }; // products dropdown end

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