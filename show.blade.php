@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

    <!-- IMAGE -->
    <div class="bg-white rounded-xl shadow overflow-hidden">
        <img
            src="/images/products/jacket-1.jpg"
            class="w-full h-[420px] object-cover"
            alt="Product image"
        >
    </div>

    <!-- INFO -->
    <div>
        <span class="inline-block mb-2 px-3 py-1 bg-yellow-100 text-yellow-800 text-sm rounded-full">
            Jacket
        </span>

        <h1 class="text-3xl font-extrabold mb-4">
            Street Bomber Jacket
        </h1>

        <p class="text-gray-600 mb-6 leading-relaxed">
            Street Bomber Jacket adalah jaket streetwear dengan siluet bold,
            material nyaman, dan cocok untuk daily wear maupun style urban modern.
        </p>

        <div class="text-2xl font-bold mb-6">
            Rp 750.000
        </div>

        <!-- SIZE -->
        <div class="mb-6">
            <p class="font-medium mb-2">Size</p>
            <div class="flex gap-3">
                <button class="px-4 py-2 border rounded-lg hover:bg-black hover:text-white">S</button>
                <button class="px-4 py-2 border rounded-lg hover:bg-black hover:text-white">M</button>
                <button class="px-4 py-2 border rounded-lg hover:bg-black hover:text-white">L</button>
                <button class="px-4 py-2 border rounded-lg hover:bg-black hover:text-white">XL</button>
            </div>
        </div>

        <!-- ACTION -->
        <div class="flex gap-4">
            <button class="px-6 py-3 bg-yellow-400 rounded-full font-medium hover:bg-yellow-500 transition">
                Add to Cart
            </button>

            <a href="/products"
               class="px-6 py-3 border rounded-full hover:bg-gray-100 transition">
                Back to Catalog
            </a>
        </div>
    </div>

</div>

<!-- DESCRIPTION -->
<div class="mt-16 bg-white rounded-xl shadow p-8">
    <h2 class="text-xl font-bold mb-4">Product Details</h2>

    <ul class="list-disc pl-6 space-y-2 text-gray-700">
        <li>Material premium, tahan lama</li>
        <li>Nyaman dipakai seharian</li>
        <li>Potongan streetwear modern</li>
        <li>Cocok untuk casual & urban look</li>
    </ul>
</div>

<div class="bg-red-500 text-white text-5xl font-black p-10">
    TAILWIND TEST
</div>

@endsection
