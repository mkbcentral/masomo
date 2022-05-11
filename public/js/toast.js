/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/toast.js ***!
  \*******************************/
window.$(document).ready(function () {
  toastr.options = {
    "positionClass": "toast-bottom-right",
    "progressBar": true
  };
  window.addEventListener('data-added', function (event) {
    toastr.success(event.detail.message, 'Validation');
    $('#addSectorModal').modal('hide');
    $('#addOptionModal').modal('hide');
  });
  window.addEventListener('data-updated', function (event) {
    toastr.info(event.detail.message, 'Validation');
    $('#editSectorModal').modal('hide');
    $('#editOptionModal').modal('hide');
  });
});
/******/ })()
;