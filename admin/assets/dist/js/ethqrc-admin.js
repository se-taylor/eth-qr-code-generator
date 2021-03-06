"use strict";

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById('save_eth_qr_code_address').addEventListener('click', function (e) {
    var address = document.getElementById('eth-qr-code-address').value;
    var nonce = document.getElementById('_wpnonce').value;
    var formData = new FormData();
    formData.append('action', 'ethqrc_validate_address');
    formData.append('nonce', nonce);
    formData.append('address', address);
    fetch(ajaxurl, {
      method: 'post',
      body: formData
    }).then(function (res) {
      return res.json();
    }).then(function (res) {
      var messageArea = document.getElementById('ethqrc-message-area');
      messageArea.innerHTML = '';
      messageArea.innerHTML = res.data;

      if (!res.success) {
        messageArea.style.color = 'red';
      } else {
        messageArea.style.color = 'green';
      }
    });
  });
});