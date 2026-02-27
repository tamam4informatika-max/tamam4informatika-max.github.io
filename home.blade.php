<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>UrbanStyle — Streetwear Store</title>

<style>
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #fff;
    color: #111;
}

/* HEADER */
header {
    background: #facc15;
    padding: 18px 32px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.brand {
    font-size: 24px;
    font-weight: bold;
}

.brand span { color: #fff; }

nav a {
    margin-left: 22px;
    text-decoration: none;
    color: #111;
    font-weight: 500;
}

/* HERO */
.hero {
    padding: 80px 40px;
    background: linear-gradient(to bottom, #fff8cc, #ffffff);
    text-align: center;
}

.hero h1 {
    font-size: 42px;
    margin-bottom: 12px;
}

.hero p {
    font-size: 18px;
    color: #555;
    margin-bottom: 28px;
}

.hero a {
    padding: 14px 28px;
    background: #111;
    color: #fff;
    border-radius: 30px;
    text-decoration: none;
    font-size: 15px;
}

/* SECTION */
section {
    padding: 60px 40px;
}

section h2 {
    margin-bottom: 30px;
}

/* GRID */
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
    gap: 24px;
}

/* CARD */
.card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0,0,0,.08);
    padding: 14px;
}

.card img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    border-radius: 12px;
}

.price {
    font-weight: bold;
    margin-top: 6px;
}

.btn {
    display: inline-block;
    margin-top: 12px;
    padding: 10px 18px;
    background: #facc15;
    border-radius: 20px;
    color: #111;
    text-decoration: none;
    font-size: 14px;
}

/* CATEGORY */
.categories {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
}

.cat {
    padding: 16px 26px;
    border-radius: 30px;
    border: 1px solid #ddd;
    text-decoration: none;
    color: #111;
    font-weight: 500;
}

.cat:hover {
    background: #111;
    color: #fff;
}

/* FOOTER */
footer {
    background: #111;
    color: #fff;
    text-align: center;
    padding: 24px;
    font-size: 14px;
}
</style>
</head>

<body>

<header>
    <div class="brand">Urban<span>Style</span></div>
    <nav>
        <a href="/">Home</a>
        <a href="/catalog">Catalog</a>
    </nav>
</header>

<!-- HERO -->
<div class="hero">
    <h1>Urban Streetwear Collection</h1>
    <p>Modern style for everyday movement</p>
    <a href="/catalog">Browse Catalog</a>
</div>

<section style="padding:60px 40px; background:#f9f9f9;">
    <h2 style="margin-bottom:30px;">What We Offer</h2>

    <div style="
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
        gap:24px;
    ">

        <div style="background:#fff; padding:24px; border-radius:16px;">
            <h3>📦 Curated Products</h3>
            <p style="color:#555; font-size:14px;">
                Selected items based on current streetwear trends and daily usability.
            </p>
        </div>

        <div style="background:#fff; padding:24px; border-radius:16px;">
            <h3>🔍 Easy Browsing</h3>
            <p style="color:#555; font-size:14px;">
                Clean layout with categories and product previews for quick exploration.
            </p>
        </div>

        <div style="background:#fff; padding:24px; border-radius:16px;">
            <h3>🎨 Modern Design</h3>
            <p style="color:#555; font-size:14px;">
                Minimal interface focused on visuals and product presentation.
            </p>
        </div>

        <div style="background:#fff; padding:24px; border-radius:16px;">
            <h3>⚡ Lightweight</h3>
            <p style="color:#555; font-size:14px;">
                No heavy system — optimized for fast loading and simple interaction.
            </p>
        </div>

    </div>
</section>

<!-- FEATURED -->
<section>
<h2>Featured Products</h2>

<div class="grid">

<div class="card">
<img src="/images/products/jacket-1.jpg">
<h4>Street Bomber</h4>
<p>Urban jacket style</p>
<div class="price">Rp 750.000</div>
<a href="/products/street-bomber" class="btn">View Detail</a>
</div>

<div class="card">
<img src="/images/products/jacket-2.jpg">
<h4>Urban Parka</h4>
<p>Clean daily wear</p>
<div class="price">Rp 920.000</div>
<a href="/products/urban-parka" class="btn">View Detail</a>
</div>

<div class="card">
<img src="/images/products/tee-1.jpg">
<h4>Graphic Tee</h4>
<p>Street cotton tee</p>
<div class="price">Rp 280.000</div>
<a href="/products/graphic-tee" class="btn">View Detail</a>
</div>

<div class="card">
<img src="/images/products/pants-1.jpg">
<h4>Wide Pants</h4>
<p>Relaxed fit pants</p>
<div class="price">Rp 490.000</div>
<a href="/products/wide-pants" class="btn">View Detail</a>
</div>

</div>
</section>

<section style="padding:60px 40px; background:#fff;">
    <h2 style="margin-bottom:16px;">Why UrbanStyle?</h2>

    <p style="max-width:700px; line-height:1.7; color:#555;">
        UrbanStyle is a streetwear-focused fashion catalog inspired by modern urban culture.
        We curate jackets, tops, pants, and knitwear that balance comfort, functionality,
        and clean design for everyday wear.
    </p>

    <p style="max-width:700px; line-height:1.7; color:#555; margin-top:12px;">
        This website is designed as a visual catalog to showcase products clearly,
        helping users explore styles easily before making a purchase decision.
    </p>
</section>

<section style="
    padding:80px 40px;
    background:linear-gradient(to bottom, #facc15 0%, #fde68a 60%, #ffffff 100%);
">

    <div style="
        max-width:1000px;
        margin:0 auto;
    ">

        <h2 style="
            font-size:34px;
            margin-bottom:20px;
        ">
            About UrbanStyle
        </h2>

        <p style="
            font-size:16px;
            line-height:1.8;
            color:#444;
            max-width:800px;
        ">
            UrbanStyle is a streetwear catalog website created to showcase modern urban fashion.
            The focus of this website is not only to display products, but also to present a clean,
            structured, and user-friendly browsing experience.
        </p>

        <p style="
            font-size:16px;
            line-height:1.8;
            color:#444;
            max-width:800px;
            margin-top:14px;
        ">
            This platform highlights jackets, tops, pants, and knitwear inspired by street culture
            and everyday wear. Each product is displayed visually to help users explore styles
            easily before moving to the full catalog.
        </p>

        <!-- DIVIDER -->
        <div style="
            margin:50px 0;
            height:1px;
            background:#ddd;
        "></div>

        <!-- HOW WEBSITE WORKS -->
        <h3 style="
            font-size:24px;
            margin-bottom:18px;
        ">
            How This Website Works
        </h3>

        <div style="
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(220px, 1fr));
            gap:24px;
        ">

            <div style="
                background:#fff;
                padding:26px;
                border-radius:18px;
                box-shadow:0 10px 24px rgba(0,0,0,.08);
            ">
                <h4>🏠 Home</h4>
                <p style="font-size:14px; color:#555;">
                    Acts as the main introduction to UrbanStyle, explaining the concept
                    of the website and highlighting selected featured products.
                </p>
            </div>

            <div style="
                background:#fff;
                padding:26px;
                border-radius:18px;
                box-shadow:0 10px 24px rgba(0,0,0,.08);
            ">
                <h4>🛍️ Catalog</h4>
                <p style="font-size:14px; color:#555;">
                    Displays the complete list of products with categories and filters,
                    allowing users to browse items more efficiently.
                </p>
            </div>

            <div style="
                background:#fff;
                padding:26px;
                border-radius:18px;
                box-shadow:0 10px 24px rgba(0,0,0,.08);
            ">
                <h4>🔎 Product Preview</h4>
                <p style="font-size:14px; color:#555;">
                    Each product card shows essential information such as image,
                    name, category, and price to support quick decision making.
                </p>
            </div>

            <div style="
                background:#fff;
                padding:26px;
                border-radius:18px;
                box-shadow:0 10px 24px rgba(0,0,0,.08);
            ">
                <h4>⚙️ Simple Interaction</h4>
                <p style="font-size:14px; color:#555;">
                    Search and category filters help users narrow down products
                    without reloading the page.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- CATEGORY -->
<section>
<h2>Shop by Category</h2>

<div class="categories">
<a class="cat" href="/catalog#jacket">Jacket</a>
<a class="cat" href="/catalog#baju">Baju</a>
<a class="cat" href="/catalog#celana">Celana</a>
<a class="cat" href="/catalog#knitwear">Knitwear</a>
</div>
</section>

<section style="
    padding:80px 40px;
    background:linear-gradient(to right, #facc15, #fde68a);
    text-align:center;
">
    <h2 style="font-size:32px; margin-bottom:12px;">
        Explore Our Full Collection
    </h2>

    <p style="color:#444; margin-bottom:28px;">
        Discover more streetwear essentials in our complete catalog.
    </p>

    <a href="/catalog"
       style="
        padding:14px 30px;
        background:#111;
        color:#fff;
        text-decoration:none;
        border-radius:30px;
        font-size:15px;
       ">
        View Catalog
    </a>
</section>

<footer>
© 2026 UrbanStyle — Streetwear Culture
</footer>

</body>
</html>
