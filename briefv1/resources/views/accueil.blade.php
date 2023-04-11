@include('partials._head')
<body>
<div class="wrapper">
    @include('partials._navbar')

    <div class="product-grid content">
        @foreach($products as $product)
            <div class="product-item">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <a href="{{ route('detail-produit', ['id' => $product->id]) }}">Achat & Détails</a>
            </div>
        @endforeach
    </div>
</div>
@include('partials._footer')
</body>

