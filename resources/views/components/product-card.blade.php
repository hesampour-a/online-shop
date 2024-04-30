<div>
    <figure>

        <a href="{{ route('product.show',$product) }}"><img src="{{asset($product->product_image[0]->img_path)}}" class="w-100" /></a>
    </figure>
    <h5>{{ $product->title }}</h5>
    <span>{{ number_format($product->price) }} تومان</span>
</div>