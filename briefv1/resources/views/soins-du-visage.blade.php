@include('partials._head')
<body>
@include('partials._navbar')
<div class="product-grid">
    @foreach($products->where('category_id', 3) as $product)
        <div class="product-item">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <a href="{{ route('detail-produit', ['id' => $product->id]) }}">Achat & Détails</a>
        </div>
    @endforeach
</div>
</body>

