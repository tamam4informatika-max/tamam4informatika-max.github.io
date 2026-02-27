<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
</head>
<body class="bg-yellow-100">

    {{-- NAVBAR + SEARCH --}}
    @include('layouts.navbar')

    {{-- ISI HALAMAN --}}
    <main>
        @yield('content')
    </main>

    <script>
function addToCart(btn) {
    const card = btn.closest('.product-item');

    const product = {
        id: card.dataset.id,
        name: card.dataset.name,
        price: Number(card.dataset.price),
        image: card.dataset.image,
        qty: 1
    };

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    const existing = cart.find(item => item.id === product.id);

    if (existing) {
        existing.qty += 1;
    } else {
        cart.push(product);
    }

    localStorage.setItem('cart', JSON.stringify(cart));

    alert(product.name + ' added to cart');
    updateCartCount();
}

function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const total = cart.reduce((sum, item) => sum + item.qty, 0);
    document.getElementById('cartCount').innerText = total;
}

updateCartCount();
</script>

</body>
</html>