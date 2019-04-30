import jquery from 'jquery';
import ScrollReveal from 'scrollreveal'

window.jQuery = window.$ = jquery;

(function () {

  /**
   * Burger-menu
   */
  $('.burger-menu').click(function () {
    var menu = $('.menu');
    $(this).toggleClass('active');
    menu.toggleClass('active');
  });

  /**
   * Fix menu
   */
  $(window).on('scroll', function() {
    if($(this).scrollTop() > $('#intro').height()) {
      $('#app-header').addClass('is-fixed');
    } else {
      $('#app-header').removeClass('is-fixed');
    }
  })

  /**
   * Scroll
   */
  $(".scroll-link").on("click", function (event) {
    event.preventDefault();

    var id = $(this).attr('href');

    if (id.length > 1) {

      var top = ($(id).offset().top - $('#app-header').height());

      $('body,html').animate({
        scrollTop: top
      }, 1500);

      $('.burger-menu').removeClass('active');
      $('.menu').removeClass('active');
    }
  });


  /**
   * Form
   */

  $('.form-control').on('focus', function () {
    $(this).parents('.form-group').addClass('in-focus');
  });

  $('.form-control').on('blur', function () {
    if ($(this).val() !== "") {
      $(this).parents('.form-group').addClass('in-focus');
    } else {
      $(this).parents('.form-group').removeClass('in-focus');
    }
  });



    /**
     * Modal
     */
    var singupModal = $('.custom-modal');
    var closeModal = $('.close-modal');
    var modalMask = $('.modal-mask');

    $('.open-singup').on('click', function (e) {
        e.preventDefault();
        $(singupModal).addClass('active');
        $(closeModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(singupModal).removeClass('active');
        $(closeModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(singupModal).removeClass('active');
        $(closeModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

  /**
   * Footer secondary
   */
  $('.app-footer-secondary').css('margin-top', '-' + $('.app-footer-secondary').innerHeight() + 'px');

  /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-item', {
      origin: 'left',
      delay: 400,
      distance: '200px',
  });
  ScrollReveal().reveal('.intro-description', {
      origin: 'left',
      delay: 400,
      distance: '200px',
  });
  ScrollReveal().reveal('.for-who-img', {
      origin: 'left',
      delay: 400,
      distance: '200px',
  });
  ScrollReveal().reveal('.for-who-item', {
      origin: 'right',
      delay: 400,
      distance: '200px',
  });
  ScrollReveal().reveal('.speaker-card', {
      origin: 'bottom',
      delay: 500,
      distance: '400px',
  });
  ScrollReveal().reveal('.contacts-item', {
      origin: 'right',
      delay: 500,
      distance: '200px',
  });

  /**
   * Map
   */
var element = document.getElementById('map');

var map = L.map(element);

var logoIcon = L.icon({
  iconUrl: 'wp-content/themes/conference/images/icon/logo/marker-icon.png',

  iconSize: [45, 45], 
  iconAnchor:   [0, 0], 
  popupAnchor:  [-3, -76] 
});

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var target = L.latLng('47.837804', '35.142561');

map.setView(target, 14);

map.scrollWheelZoom.disable();

L.marker(target, {icon: logoIcon}).addTo(map);

})(jQuery)