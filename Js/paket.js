document.addEventListener('DOMContentLoaded', function() {
  const filterButtons = document.querySelectorAll('.paket-filter-btn');
  const paketCategories = document.querySelectorAll('.paket-categories');
  
  filterButtons.forEach(button => {
      button.addEventListener('click', function() {
          // Hapus active dari semua tombol
          filterButtons.forEach(btn => btn.classList.remove('active'));
          this.classList.add('active');

          // Ambil filter yang dipilih
          const filter = this.getAttribute('data-filter');

          // Tampilkan/sembunyikan kategori
          paketCategories.forEach(category => {
              if (filter === 'all' || category.getAttribute('data-brand') === filter) {
                  category.classList.remove('hidden');
              } else {
                  category.classList.add('hidden');
              }
          });
      });
  });

  const addToCartButtons = document.querySelectorAll('.paket-grid-cart-btn');
  
  addToCartButtons.forEach(button => {
      button.addEventListener('click', function(e) {
          e.preventDefault();
          const bundleName = this.closest('.paket-grid').querySelector('.paket-grid-title').textContent;
          alert(`${bundleName} telah ditambahkan ke keranjang`);
      });
  });
});