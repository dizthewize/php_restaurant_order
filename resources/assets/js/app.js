
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(function() {
  //click about-btn
  $('.open-btn').click(function() {
    $('.overlay').addClass('is-open');
  });
  //close-modal
  $('.close-btn').click(function() {
    $('.overlay').removeClass('is-open');
  });

  var stripe = Stripe('pk_test_LwQhHKhF3J3UOkEORZ3YuJE0');

  var elements = stripe.elements();

  var card = elements.create('card');

  stripe.createToken(card).then(function(result) {
  // handle result.error or result.token
  });
});
