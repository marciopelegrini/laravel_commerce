<h1>Products</h1>

<ul>
    @foreach($products as $product)
        <li>{{ $product->name }} - {{ $product->description }} - R$ {{ $product->price }} - {{ $product->featured }}</li>
    @endforeach
</ul>