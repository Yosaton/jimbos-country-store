<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
            @foreach($mightAlsoLike as $recommendedProduct)
                <a href="{{route('shop.show', $recommendedProduct->slug)}}" class="might-like-product">
                    <img src="{{ asset('img/products/'.$recommendedProduct->slug.'.jpg') }}" alt="product">
                    <div class="might-like-product-name">{{$recommendedProduct->name}}</div>
                    <div class="might-like-product-price">{{$recommendedProduct->presentPrice()}}</div>
                </a>
            @endforeach
        </div>
    </div>
</div>
