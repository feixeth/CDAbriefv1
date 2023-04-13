@include('partials._head')
<body>
@include('partials._navbar')

<main class="product-detail">
    <h1 class="product-title">{{ $product->name }}</h1>
    <div class="product-image">
        <img src="{{ $product->image }}" alt="{{ $product->name }}">
    </div>
    <div class="product-description">
        <p>{{ $product->description }}</p>
        <p class="product-price">Prix : {{ $product->price }}</p>
    </div>
</main>
</body>
@include('partials._footer')

