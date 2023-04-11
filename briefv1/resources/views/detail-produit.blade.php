@include('partials._head')
<body>
@include('partials._navbar')

<h1>{{ $product->name }}</h1>
<img src="{{ $product->image }}" alt="{{ $product->name }}">
<p>{{ $product->description }}</p>
<p>Prix : {{ $product->price }}</p>

</body>
@include('partials._footer')

