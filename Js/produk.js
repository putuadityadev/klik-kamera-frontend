document.addEventListener('DOMContentLoaded', function() {
    // Filter Sidebar Toggle (Mobile)
    const filterGroups = document.querySelectorAll('.filter-group');
    
    filterGroups.forEach(group => {
        const header = group.querySelector('.card-header');
        const content = group.querySelector('.filter-content');
        const icon = header.querySelector('.icon-control');

        header.addEventListener('click', function() {
            content.classList.toggle('show');
            icon.classList.toggle('fa-chevron-down');
            icon.classList.toggle('fa-chevron-up');
        });
    });

    // Price Range Slider
    const priceRangeSlider = document.querySelector('.custom-range');
    const minPriceInput = document.querySelector('input[placeholder="Rp 0"]');
    const maxPriceInput = document.querySelector('input[placeholder="Rp 1,000,000"]');
    const applyPriceBtn = document.querySelector('.btn-block');

    priceRangeSlider.addEventListener('input', function() {
        minPriceInput.value = this.value;
        maxPriceInput.value = this.max;
    });

    minPriceInput.addEventListener('change', function() {
        priceRangeSlider.value = this.value;
    });

    maxPriceInput.addEventListener('change', function() {
        priceRangeSlider.value = this.value;
    });

    applyPriceBtn.addEventListener('click', function() {
        filterProducts();
    });

    // Checkbox Filters
    const categoryCheckboxes = document.querySelectorAll('.custom-control-input');
    
    categoryCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            filterProducts();
        });
    });

    function filterProducts() {
        const selectedCategories = Array.from(categoryCheckboxes)
            .filter(cb => cb.checked)
            .map(cb => cb.closest('.custom-control').querySelector('.custom-control-label').textContent.trim());

        const minPrice = parseInt(minPriceInput.value);
        const maxPrice = parseInt(maxPriceInput.value);

        const productCards = document.querySelectorAll('.product-grid');

        productCards.forEach(card => {
            const productTitle = card.querySelector('.title').textContent.toLowerCase();
            const productPrice = parseInt(card.querySelector('.price').textContent.replace(/[^0-9]/g, ''));

            const categoryMatch = selectedCategories.length === 0 || 
                selectedCategories.some(cat => productTitle.includes(cat.toLowerCase()));
            
            const priceMatch = productPrice >= minPrice && productPrice <= maxPrice;

            if (categoryMatch && priceMatch) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Mobile Filter Modal
    const filterButton = document.querySelector('.filter-mobile-btn');
    const filterModal = document.querySelector('.filter-modal');
    const closeFilterModalBtn = document.querySelector('.close-filter-modal');

    if (filterButton && filterModal && closeFilterModalBtn) {
        filterButton.addEventListener('click', function() {
            filterModal.classList.add('active');
        });

        closeFilterModalBtn.addEventListener('click', function() {
            filterModal.classList.remove('active');
        });
    }

    // Add to Cart Functionality
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsCount = document.querySelector('.cart-items-mobile span');
    let cartItems = 0;

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            cartItems++;
            cartItemsCount.textContent = `(${cartItems})`;
            
            button.textContent = 'Added';
            button.disabled = true;
        });
    });
});