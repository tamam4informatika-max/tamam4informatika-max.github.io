<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UrbanStyle Catalog</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f5f5;
            color: #111;
        }

        header {
            background: #facc15;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
        }

        .brand span {
            color: #fff;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            color: #111;
            font-weight: 500;
        }

        .search {
            padding: 8px 14px;
            border-radius: 20px;
            border: none;
            width: 240px;
            outline: none;
        }

        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 24px;
        }

        h2 {
            margin-bottom: 24px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 24px;
        }

        .card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,.08);
            transition: transform .2s ease;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        .image-box {
            width: 100%;
            height: 260px;
            overflow: hidden;
            background: #ddd;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-body {
            padding: 16px;
        }

        .card-body h4 {
            margin: 0 0 6px;
        }

        .card-body p {
            font-size: 14px;
            color: #555;
            margin: 0 0 8px;
        }

        .price {
            font-weight: bold;
            margin-bottom: 12px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background: #facc15;
            color: #111;
            text-decoration: none;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        footer {
            margin-top: 80px;
            padding: 24px;
            background: #111;
            color: #fff;
            text-align: center;
            font-size: 14px;
        }

        .categories {
            margin: 30px 0 40px;
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .category-btn {
            padding: 10px 22px;
            border-radius: 999px;
            border: 1px solid #e5e5e5;
            background: #fff;
            font-size: 14px;
            cursor: pointer;
            transition: all .25s ease;
        }

        .category-btn:hover {
            background: #facc15;
            border-color: #facc15;
        }

        .category-btn.active {
            background: #111;
            color: #fff;
            border-color: #111;
        }

        /* CATEGORY GRID */
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .category-card {
            background: #fff;
            border-radius: 18px;
            padding: 26px 22px;
            box-shadow: 0 10px 24px rgba(0,0,0,.08);
            cursor: pointer;
            transition: all .25s ease;
        }

        .category-card h3 {
            margin: 0 0 6px;
            font-size: 20px;
        }

        .category-card p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }

        .category-card:hover {
            background: #111;
            color: #fff;
            transform: translateY(-4px);
        }

        .category-card:hover p {
            color: #ddd;
        }

        .cart-popup {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .cart-box {
            background: #fff;
            width: 360px;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,.2);
        }

        .cart-box h3 {
            margin-bottom: 12px;
        }

        .cart-items {
            max-height: 220px;
            overflow-y: auto;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .cart-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-footer button {
            background: #facc15;
            border: none;
            padding: 6px 14px;
            border-radius: 6px;
            cursor: pointer;
        }

        .empty {
            color: #999;
            font-size: 13px;
        }

        .category-card.active {
            background:#111;
            color:#fff;
        }

        .category-card.active p {
            color:#ddd;
        }
    </style>
</head>

<body>

<header>
    <div class="brand">Urban<span>Style</span></div>

    <input
        id="searchInput"
        class="search"
        type="text"
        placeholder="Search products..."
        onkeyup="filterProducts()"
    >

    <nav>
        <a href="/cart" style="position:relative; text-decoration:none;">
            🛒
            <span id="cartCount"
                style="
                    position:absolute;
                    top:-6px;
                    right:-10px;
                    background:red;
                    color:white;
                    font-size:11px;
                    padding:2px 6px;
                    border-radius:50%;
                ">0</span>
        </a>
    </nav>
</header>

<main>
    <h2>Product Catalog</h2>

    <section style="margin-top:40px;">
        <h2 style="margin-bottom:18px;">Browse by Category</h2>

        <div class="category-grid">

            <div class="category-card" onclick="setCategory('jacket')">
                <h3>🧥 Jacket</h3>
                <p>Street & daily outerwear</p>
            </div>

            <div class="category-card" onclick="setCategory('baju')">
                <h3>👕 Baju</h3>
                <p>Graphic & casual tees</p>
            </div>

            <div class="category-card" onclick="setCategory('celana')">
                <h3>👖 Celana</h3>
                <p>Relaxed street pants</p>
            </div>

            <div class="category-card" onclick="setCategory('knitwear')">
                <h3>🧶 Knitwear</h3>
                <p>Warm & textured pieces</p>
            </div>

        </div>
    </section>

    <div class="categories">
    <button class="category-btn active" onclick="setCategory(null, this)">All</button>
    <button class="category-btn" onclick="setCategory('jacket', this)">Jacket</button>
    <button class="category-btn" onclick="setCategory('baju', this)">Baju</button>
    <button class="category-btn" onclick="setCategory('celana', this)">Celana</button>
    <button class="category-btn" onclick="setCategory('knitwear', this)">Knitwear</button>
</div>

<div class="grid" id="productGrid">

        <div class="card product-item"
            data-id="1"
            data-name="Street Bomber"
            data-price="750000"
            data-image="/images/products/jacket-1.jpg"
            data-category='jacket'>

            <div class="image-box">
                <img src="/images/products/jacket-1.jpg">
            </div>

            <div class="card-body">
                <h4>Street Bomber</h4>
                <p>Urban Jacket Style</p>
                <div class="price">Rp 750.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="2"
            data-name="Urban Parka"
            data-price="920000"
            data-image="/images/products/jacket-2.jpg"
            data-category="jacket">

            <div class="image-box">
                <img src="/images/products/jacket-2.jpg">
            </div>

            <div class="card-body">
                <h4>Urban Parka</h4>
                <p>Clean Daily Wear</p>
                <div class="price">Rp 920.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="3"
            data-name="Graphic Tee"
            data-price="280000"
            data-image="/images/products/tee-1.jpg"
            data-category="baju">

            <div class="image-box">
                <img src="/images/products/tee-1.jpg">
            </div>

            <div class="card-body">
                <h4>Graphic Tee</h4>
                <p>Street Cotton Tee</p>
                <div class="price">Rp 280.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="4"
            data-name="Minimal Jacket"
            data-price="690000"
            data-image="/images/products/jacket-3.jpg"
            data-category="jacket">

            <div class="image-box">
                <img src="/images/products/jacket-3.jpg">
            </div>

            <div class="card-body">
                <h4>Minimal Jacket</h4>
                <p>Clean Urban Outerwear</p>
                <div class="price">Rp 690.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="5"
            data-name="Techwear Tee"
            data-price="310000"
            data-image="/images/products/tee-2.jpg"
            data-category="baju">

            <div class="image-box">
                <img src="/images/products/tee-2.jpg">
            </div>

            <div class="card-body">
                <h4>Techwear Tee</h4>
                <p>Street Graphic Tee</p>
                <div class="price">Rp 310.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="6"
            data-name="Daily Tee"
            data-price="250000"
            data-image="/images/products/tee-3.jpg"
            data-category="baju">

            <div class="image-box">
                <img src="/images/products/tee-3.jpg">
            </div>

            <div class="card-body">
                <h4>Daily Tee</h4>
                <p>Daily Cotton Tee</p>
                <div class="price">Rp 250.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="7"
            data-name="Cargo Pants"
            data-price="520000"
            data-image="/images/products/pants-2.jpg"
            data-category="celana">

            <div class="image-box">
                <img src="/images/products/pants-2.jpg">
            </div>

            <div class="card-body">
                <h4>Cargo Pants</h4>
                <p>Utility Street Pants</p>
                <div class="price">Rp 520.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="8"
            data-name="Knit Hoodie"
            data-price="580000"
            data-image="/images/products/sweater-2.jpg"
            data-category="knitwear">

            <div class="image-box">
                <img src="/images/products/sweater-2.jpg">
            </div>

            <div class="card-body">
                <h4>Knit Hoodie</h4>
                <p>Warm Textured Knit</p>
                <div class="price">Rp 580.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="9"
            data-name="Corduroy Pants"
            data-price="470000"
            data-image="/images/products/pants-3.jpg"
            data-category="celana">

            <div class="image-box">
                <img src="/images/products/pants-3.jpg">
            </div>

            <div class="card-body">
                <h4>Corduroy Pants</h4>
                <p>Loose Daily Pants</p>
                <div class="price">Rp 470.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="10"
            data-name="Sweet Loose Pants"
            data-price="400000"
            data-image="/images/products/pants-4.jpg"
            data-category="celana">

            <div class="image-box">
                <img src="/images/products/pants-4.jpg">
            </div>

            <div class="card-body">
                <h4>Sweet Loose Pants</h4>
                <p>Loose Daily Pants</p>
                <div class="price">Rp 400.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="11"
            data-name="Sweater/Knitwear"
            data-price="500000"
            data-image="/images/products/sweater-1.jpg"
            data-category="knitwear">

            <div class="image-box">
                <img src="/images/products/sweater-1.jpg">
            </div>

            <div class="card-body">
                <h4>Sweater/Knitwear</h4>
                <p>Knit Daily Outfit</p>
                <div class="price">Rp 500.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>

        <div class="card product-item"
            data-id="12"
            data-name="Bomber Jacket"
            data-price="860000"
            data-image="/images/products/jacket-4.jpg"
            data-category="jacket">

            <div class="image-box">
                <img src="/images/products/jacket-4.jpg">
            </div>

            <div class="card-body">
                <h4>Bomber Jacket</h4>
                <p>Marvel Jacket Outfit</p>
                <div class="price">Rp 860.000</div>

                <a href="#" class="btn">View Detail</a>

                <button onclick="addToCart(this)"
                    style="
                        border:none;
                        background:#111;
                        color:white;
                        padding:8px 12px;
                        border-radius:50%;
                        cursor:pointer;">
                    🛒
                </button>

            </div>

        </div>
    </div>
</main>

<footer>
    © 2026 UrbanStyle — Streetwear Culture
</footer>

<script>
let activeCategory = null;

document.addEventListener("DOMContentLoaded", function(){

    const searchInput = document.getElementById("searchInput");
    const items = document.querySelectorAll(".product-item");

    function filterProducts(){
        const keyword = searchInput.value.toLowerCase();

        items.forEach(item => {
            const name = item.dataset.name.toLowerCase();
            const category = item.dataset.category;

            const matchSearch = name.includes(keyword);
            const matchCategory = activeCategory ? category === activeCategory : true;

            item.style.display = (matchSearch && matchCategory) ? "block" : "none";
        });
    }

    searchInput.addEventListener("keyup", filterProducts);

    window.setCategory = function(category, el){
        activeCategory = category;

        document.querySelectorAll(".category-btn")
            .forEach(btn => btn.classList.remove("active"));

        if(el) el.classList.add("active");

        filterProducts();
    };

});
</script>

<!-- CART POPUP -->
<div id="cartPopup" class="cart-popup">
    <div class="cart-box">
        <h3>🛒 Your Cart</h3>

        <div id="cartItems" class="cart-items">
            <p class="empty">Your cart is empty</p>
        </div>

        <div class="cart-footer">
            <strong>Total: Rp <span id="cartTotal">0</span></strong>
            <button onclick="closeCart()">Close</button>
        </div>
    </div>
</div>

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
    updateCartCount();
    alert(product.name + " added to cart");
}

function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalQty = cart.reduce((sum, item) => sum + item.qty, 0);
    document.getElementById('cartCount').innerText = totalQty;
}

updateCartCount();
</script>

</body>
</html>
