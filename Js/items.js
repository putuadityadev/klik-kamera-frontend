$(document).ready(function() {
  $('.items-qty-plus').click(function() {
      let input = $(this).siblings('.items-qty-input');
      let currentVal = parseInt(input.val());
      input.val(currentVal + 1);
      updateSummary();
  });

  $('.items-qty-minus').click(function() {
      let input = $(this).siblings('.items-qty-input');
      let currentVal = parseInt(input.val());
      if (currentVal > 1) {
          input.val(currentVal - 1);
          updateSummary();
      }
  });

  $('.items-product-remove').click(function() {
      $(this).closest('.items-product-card').remove();
      updateSummary();
  });

  function updateSummary() {
      let subtotal = 0;
      $('.items-product-card').each(function() {
          let price = parseInt($(this).find('.items-product-price span').text().replace('Rp ', '').replace('.', ''));
          let quantity = parseInt($(this).find('.items-qty-input').val());
          subtotal += price * quantity;
      });
      let tax = subtotal * 0.1;
      let total = subtotal + tax;

      $('.items-summary-value').eq(0).text('Rp ' + subtotal.toLocaleString());
      $('.items-summary-value'). eq(1).text('Rp ' + tax.toLocaleString());
      $('.items-summary-value').eq(2).text('Rp ' + total.toLocaleString());
  }
});