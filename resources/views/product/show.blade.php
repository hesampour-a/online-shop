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
                                            <li>برند : <a href="#">{{ $product->product_brand->name }}</a></li>
                                            <li>دسته بندی : <a href="#"> {{ $product->category->name }} </a></li>
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
                                                    <li><i class="fa fa-square {{ $value }}"></i>{{ $key }}</li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3>{{ number_format($product->price) }} تومان</h3>
                            <div class="btn-single">
                                <a href="#"><i class="fa fa-cart-plus"></i>خرید آنلاین</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="single-img">
                                <figure>
                                    <img src="{{ asset($product->product_image[0]->img_path) }}" class="w-100 s-img" data-zoom-image="{{ asset($product->product_image[0]->img_path) }}">
                                </figure>
                            </div>
                            <div class="single-img-slider">
                                <div class="owl-carousel owl-theme ov-single">
                                    @foreach ($product->product_image as $img)
                                    <div class="item">
                                        <a data-fancybox="gallery" href="{{ asset($img->img_path) }}"><img src="{{ asset($img->img_path) }}" class="w-100"></a>
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
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/Canon_EOS_400D.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#one"><i class="fa fa-file"></i>مشخصات فنی</a></li>
                        <li><a data-toggle="tab" href="#two"><i class="fa fa-pencil"></i>نظرات کاربران</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="one" class="tab-pane fade">
                            <p class="bg-light"><span>شرکت سازنده:</span>هوآوی</p>
                            <p class="bg-light"><span>مدل:</span>Tab G6</p>
                            <p class="bg-light"><span>گارانتی:</span>Huawei</p>
                            <p class="bg-light"><span>شبکه های تلفن:</span>4G-3G-LTE</p>
                            <p class="bg-light"><span>تعداد سیمکارت:</span>2</p>
                            <p class="bg-light"><span>حافظه داخلی:</span>32G</p>
                            <p class="bg-light"><span>پشتیبانی از کارت sd:</span>بله</p>
                            <p class="bg-light"><span>باتری:</span>1300 میلی آمپر</p>
                            <p class="bg-light"><span>باتری اضافی:</span>ندارد</p>
                            <p class="bg-light"><span>جک هدفون:</span>دارد</p>
                            <p class="bg-light"><span>گارد:</span>ندارد</p>
                        </div>
                        <div id="two" class="tab-pane fade">
                            نظری وجود ندارد...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>