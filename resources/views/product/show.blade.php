<x-layout>

    <!---------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-box">
                    <div class="row">
                        <div class="col-md-7">
                            <h5>{{ $product->title }}</h5>
                            <h6>{{$product->fa_title}}</h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="single-content-right">
                                        <ul class="brand-ul">
                                            <li>برند :
                                                <a href="{{ route('product.index',['brand'=>$product->product_brand->name]) }}">
                                                    {{ $product->product_brand->name }}</a>
                                            </li>
                                            <li>دسته بندی :
                                                <a href="{{ route('product.index',['category'=>$product->category->name]) }}">
                                                    {{ $product->category->name }}
                                                </a>
                                            </li>
                                        </ul>
                                        <br>
                                        <span>مشخصات مختصر محصول :</span><br>
                                        <ul class="product-ul">
                                            <li></li>
                                            @foreach ($properties as $property)
                                            <li>{{ $property }}</li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="single-content-left">
                                        <ul>
                                            <span>وضعیت : {{$product->count>0?'موجود در انبار':'ناموجود'}}</span><br><br>
                                            <li>گارانتی : {{ $product->garanty }}</li>
                                            <br>
                                            <li>
                                                رنگ بندی :
                                                <ul>
                                                    @foreach ($colors as $key => $value)
                                                    <li><i class="fa fa-square {{ $value }}"></i>{{ $value }}</li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3>{{ number_format($product->price) }} تومان</h3>
                            <div>
                                <form action="{{route('cart-item.store',['product'=>$product])}}" method="post">
                                    @csrf
                                    <button class="btn" type="submit"><i class="fa fa-cart-plus"></i>اضافه کردن به سبد خرید</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="single-img">
                                <figure>
                                    <img src="{{  Storage::url($product->product_image[0]->img_path) }}" class="w-100 s-img" data-zoom-image="{{  Storage::url($product->product_image[0]->img_path) }}">
                                </figure>
                            </div>
                            <div class="single-img-slider">
                                <div class="owl-carousel owl-theme ov-single">
                                    @foreach ($product->product_image as $img)
                                    <div class="item">
                                        <a data-fancybox="gallery" href="{{ Storage::url($img->img_path) }}"><img src="{{ Storage::url($img->img_path) }}" class="w-100"></a>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="container">
        <span class="releated-products">محصولات مرتبط</span>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="single-two-slider">
                    <div class="owl-carousel owl-theme ov-single-two">
                        @foreach ($product->category->product as $product)
                        <x-product-card class="item" :$product />
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->

</x-layout>