
(function() {
    'use strict';
    var dialogButton = document.querySelector('#add-news');
    var dialog = document.querySelector('#add-news-modal');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
    });
  }());
