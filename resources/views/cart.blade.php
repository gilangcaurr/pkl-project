@extends('layouts.user')

@section('content')
    <section class="product-cart product footer-padding">
        <div class="container">
            <div class="cart-section">
                <table>
                    <tbody>
                        <tr class="table-row table-top-row">
                            <td class="table-wrapper wrapper-product">
                                <h5 class="table-heading">PRODUCT</h5>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">PRICE</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">QUANTITY</h5>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">TOTAL</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">ACTION</h5>
                                </div>
                            </td>
                        </tr>
                        @foreach ($carts as $cart)
                            <tr class="table-row ticket-row">
                                <td class="table-wrapper wrapper-product">
                                    <div class="wrapper">
                                        <div class="wrapper-img">
                                            <img src="{{ $cart->produk->gambar }}" alt="{{ $cart->produk->nama_produk }}">
                                        </div>
                                        <div class="wrapper-content">
                                            <h5 class="heading">{{ $cart->produk->nama_produk }}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-wrapper">
                                    <div class="table-wrapper-center">
                                        <h5 class="heading main-price">${{ $cart->produk->harga }}</h5>
                                    </div>
                                </td>
                                <td class="table-wrapper">
                                    <div class="table-wrapper-center">
                                        <div class="quantity" data-id="{{ $cart->id }}">
                                            <span class="minus">-</span>
                                            <span class="number">{{ $cart->quantity }}</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-wrapper wrapper-total">
                                    <div class="table-wrapper-center">
                                        <h5 class="heading total-price">${{ $cart->produk->harga * $cart->quantity }}</h5>
                                    </div>
                                </td>
                                <td class="table-wrapper">
                                    <div class="table-wrapper-center">
                                        <a href="#" class="remove-cart-item" data-id="{{ $cart->id }}">
                                            <span>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                        fill="#AAAAAA"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="wishlist-btn cart-btn">
                <a href="#" class="clean-btn">Clear Cart</a>
                <a href="#" class="shop-btn update-btn">Update Cart</a>
                <a href="{{url('checkout')}}" class="shop-btn">Proceed to Checkout</a>
            </div>
        </div>
    </section>

    <script>
        // JavaScript for increment and decrement buttons
        document.querySelectorAll('.quantity').forEach(item => {
            let numberField = item.querySelector('.number');
            let plusBtn = item.querySelector('.plus');
            let minusBtn = item.querySelector('.minus');
            let cartId = item.getAttribute('data-id');

            plusBtn.addEventListener('click', () => {
                let currentValue = parseInt(numberField.textContent);
                let newValue = currentValue + 0;
                numberField.textContent = newValue;
                updateCartQuantity(cartId, newValue);
            });

            minusBtn.addEventListener('click', () => {
                let currentValue = parseInt(numberField.textContent);
                if (currentValue > 1) {
                    let newValue = currentValue - 1;
                    numberField.textContent = newValue;
                    updateCartQuantity(cartId, newValue);
                }
            });
        });

        // JavaScript for remove item from cart
        document.querySelectorAll('.remove-cart-item').forEach(item => {
            item.addEventListener('click', (event) => {
                event.preventDefault();
                let cartId = item.getAttribute('data-id');
                removeCartItem(cartId);
                item.closest('.ticket-row').remove();
            });
        });

        function updateCartQuantity(id, quantity) {
            fetch('/cart/update-quantity', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    id: id,
                    quantity: quantity
                })
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      console.log(data.message);
                  }
              }).catch(error => {
                  console.error('Error:', error);
              });
        }

        function removeCartItem(id) {
            fetch('/cart/remove-item', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    id: id
                })
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      console.log(data.message);
                  }
              }).catch(error => {
                  console.error('Error:', error);
              });
        }
    </script>
@endsection