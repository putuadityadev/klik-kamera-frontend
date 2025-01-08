class StickyNavigation {
  constructor() {
      this.currentId = null;
      this.currentTab = null;
      this.tabContainerHeight = 70;
      
      $('.et-hero-tab:not([href=""])').click((event) => {
          const $tab = $(event.currentTarget);
          this.onTabClick(event, $tab);
      });
  }
  
  onTabClick(event, element) {
      event.preventDefault();
      let scrollTop = $(element.attr('href')).offset().top - this.tabContainerHeight + 1;
      $('html, body').animate({ scrollTop: scrollTop }, 600);
  }
}

$(document).ready(function() {
  const navigation = new StickyNavigation();
  
  $('.et-hero-tab[href=""]').click(function(e) {
      e.preventDefault();
      
      $('<div class="cart-modal">')
          .html(`
              <div class="cart-content">
                  <h2>Keranjang Belanja</h2>
                  <div class="cart-items">
                      <p>Keranjang Anda masih kosong</p>
                  </div>
                  <div class="cart-actions">
                      <button class="btn-close">Tutup</button>
                      <button class="btn-checkout">Checkout</button>
                  </div>
              </div>
          `)
          .appendTo('body')
          .addClass('active');
      
      $('.btn-close').on('click', function() {
          $('.cart-modal').remove();
      });
      
      $('.btn-checkout').on('click', function() {
          alert('Fitur checkout sedang dikembangkan');
      });
  });

  $('.et-hero-tab').click(function() {
      $('.et-hero-tab').removeClass('active');
      $(this).addClass('active');
      
      let tabWidth = $(this).outerWidth();
      let tabLeft = $(this).position().left;
      
      $('.et-hero-tab-slider').css({
          'width': tabWidth,
          'left': tabLeft
      });
  });

  $('.et-hero-tab[href="#tab-halaman-produk"]').addClass('active');
  $('.et-hero-tab-slider').css({
      'width': $('.et-hero-tab[href="#tab-halaman-produk"]').outerWidth(),
      'left': $('.et-hero-tab[href="#tab-halaman-produk"]').position().left
  });
});

$(document).on('keydown', function(e) {
  if (e.key === 'Escape') {
      $('.cart-modal').remove();
  }
});

document.addEventListener('DOMContentLoaded', function() {
  const hamburgerMenu = document.querySelector('.hamburger-menu');
  const navMenu = document.querySelector('.nav-menu');

  hamburgerMenu.addEventListener('click', function() {
      hamburgerMenu.classList.toggle('active');
      navMenu.classList.toggle('active');
  });

  const navLinks = document.querySelectorAll('.et-hero-tab');
  navLinks.forEach(link => {
      link.addEventListener('click', function() {
          hamburgerMenu.classList.remove('active');
          navMenu.classList.remove('active');
      });
  });
});