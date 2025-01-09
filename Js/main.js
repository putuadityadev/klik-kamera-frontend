class StickyNavigation {
    constructor() {
        this.currentId = null;
        this.currentTab = null;
        this.tabContainerHeight = 70;

        $('.et-hero-tab, .produk-et-hero-tab, .paket-et-hero-tab, .persyaratan-et-hero-tab, .informasi-et-hero-tab, .items-et-hero-tab').click((event) => {
            const $tab = $(event.currentTarget);
            this.onTabClick(event, $tab);
        });

        $(window).scroll(() => { this.checkTabContainerPosition(); });
    }

    onTabClick(event, element) {
        const href = element.attr('href');

        if (href.endsWith('.html')) {
            return true;
        }

        if (href && href !== '') {
            event.preventDefault();
            let scrollTop = $(href).offset().top - this.tabContainerHeight + 1;
            $('html, body').animate({ scrollTop: scrollTop }, 600);
        }
    }

    checkTabContainerPosition() {
        let offset = $('.et-hero-tabs, .produk-hero-tabs-container, .paket-hero-tabs-container, .persyaratan-hero-tabs-container, .informasi-hero-tabs-container').offset().top + 
                     $('.et-hero-tabs, .produk-hero-tabs-container, .paket-hero-tabs-container, .persyaratan-hero-tabs-container, .informasi-hero-tabs-container').height() - 
                     this.tabContainerHeight;

        if ($(window).scrollTop() > offset) {
            $('.et-hero-tabs-container, .produk-hero-tabs-container, .paket-hero-tabs-container, .persyaratan-hero-tabs-container, .informasi-hero-tabs-container').addClass('et-hero-tabs-container--top');
        } else {
            $('.et-hero-tabs-container, .produk-hero-tabs-container, .paket-hero-tabs-container, .persyaratan-hero-tabs-container, .informasi-hero-tabs-container').removeClass('et-hero-tabs-container--top');
        }
    }
}

$(document).ready(function() {
    const navigation = new StickyNavigation();

    function setActiveTabSlider() {
        const currentPage = window.location.pathname.split('/').pop();

        const selectors = {
            'index.html': {
                tabSelector: '.et-hero-tab',
                sliderSelector: '.et-hero-tab-slider',
                defaultActiveTab: '#tab-halaman-produk'
            },
            'produk.html': {
                tabSelector: '.produk-et-hero-tab',
                sliderSelector: '.produk-et-hero-tab-slider',
                defaultActiveTab: 'produk.html'
            },
            'paket.html': {
                tabSelector: '.paket-et-hero-tab',
                sliderSelector: '.paket-et-hero-tab-slider',
                defaultActiveTab: 'paket.html'
            },
            'persyaratan.html': {
                tabSelector: '.persyaratan-et-hero-tab',
                sliderSelector: '.persyaratan-et-hero-tab-slider',
                defaultActiveTab: 'persyaratan.html'
            },
            'informasi.html': {
                tabSelector: '.informasi-et-hero-tab',
                sliderSelector: '.informasi-et-hero-tab-slider',
                defaultActiveTab: 'informasi.html'
            },
            'items.html': {
                tabSelector: '.items-et-hero-tab',
                sliderSelector: '.items-et-hero-tab-slider',
                defaultActiveTab: 'items.html'
            }
        };

        const pageConfig = selectors[currentPage] || selectors['index.html'];

        $(pageConfig.tabSelector).removeClass('active');

        let $activeTab = $(pageConfig.tabSelector + `[href="${pageConfig.defaultActiveTab}"]`);

        $activeTab.addClass('active');

        const tabWidth = $activeTab.outerWidth();
        const tabLeft = $activeTab.position().left;

        $(pageConfig.sliderSelector).css({
            'width': tabWidth,
            'left': tabLeft
        });
    }

    setActiveTabSlider();

    $(document).on('click', '.et-hero-tab, .produk-et-hero-tab, .paket-et-hero-tab, .persyaratan-et-hero-tab, .informasi-et-hero-tab, .items-et-hero-tab', function() {
        const $this = $(this);
        
        const tabSelectors = {
            'et-hero-tab': '.et-hero-tab',
            'produk-et-hero-tab': '.produk-et-hero-tab',

            'paket-et-hero-tab': '.paket-et-hero-tab',
            'persyaratan-et-hero-tab': '.persyaratan-et-hero-tab',
            'informasi-et-hero-tab': '.informasi-et-hero-tab',
            'items-et-hero-tab': '.items-et-hero-tab'
        };

        const sliderSelectors = {
            'et-hero-tab': '.et-hero-tab-slider',
            'produk-et-hero-tab': '.produk-et-hero-tab-slider',
            'paket-et-hero-tab': '.paket-et-hero-tab-slider',
            'persyaratan-et-hero-tab': '.persyaratan-et-hero-tab-slider',
            'informasi-et-hero-tab': '.informasi-et-hero-tab-slider',
            'items-et-hero-tab': '.items-et-hero-tab-slider'
        };

        const matchedClass = Object.keys(tabSelectors).find(cls => $this.hasClass(cls));
        
        const tabSelector = tabSelectors[matchedClass];
        const sliderSelector = sliderSelectors[matchedClass];

        $(tabSelector).removeClass('active');
        $this.addClass('active');
        
        const tabWidth = $this.outerWidth();
        const tabLeft = $this.position().left;
        
        $(sliderSelector).css({
            'width': tabWidth,
            'left': tabLeft
        });
    });

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
});

$(document).on('keydown', function(e) {
    if (e.key === 'Escape') {
        $('.cart-modal').remove();
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navMenus = document.querySelectorAll('.nav-menu, .produk-nav-menu');

    hamburgerMenu.addEventListener('click', function() {
        hamburgerMenu.classList.toggle('active');
        navMenus.forEach(menu => menu.classList.toggle('active'));
    });

    const navLinks = document.querySelectorAll('.et-hero-tab, .produk-et-hero-tab, .paket-et-hero-tab, .persyaratan-et-hero-tab, .informasi-et-hero-tab, .items-et-hero-tab');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            hamburgerMenu.classList.remove('active');
            navMenus.forEach(menu => menu.classList.remove('active'));
        });
    });
});

$(document).on('click', '.add-to-cart', function(e) {
    e.preventDefault();
    const name = $(this).data('name');
    const price = $(this).data('price');
    addToCart(name, price);
});

function addToCart(name, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ name: name, price: price, quantity: 1 });
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount(); // Fungsi untuk update jumlah item di keranjang (lihat langkah 3)
    alert(`${name} ditambahkan ke keranjang!`); // Notifikasi opsional
}