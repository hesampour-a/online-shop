<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-box">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-md-6" style="padding-top: 20px;">
                                    <h4>Canon 638044</h4>
                                    <span>دوربین کانن سری 6</span>
                                    <p>دوربین کانن از سری 6 با لنز همراه.قابلیت تصویر برداری اچ دی.قابلیت تنظیم در حالت شب . دارای دو عدد باتری اضافی</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-75">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-6" style="padding-top: 20px;">
                                    <h4>Huawei Tab G45</h4>
                                    <span>تبلت جی 5 هوآوی</span>
                                    <p>تبلت 10 اینج هوآوی . با قابلیت نصب سه عدد سیمکارت همزمان . دارای شبکه فورجی و اتصال سریع . دارای باتری اتمی و دوربین 13 مگاپیکسل</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-75">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--slider-box-->
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="coopen">
                    <img src="{{ asset('easyshop/img/coopen.png') }}" class="w-100" />
                </div>
            </div>
            <div class="col-md-9">
                <div class="vizheh">
                    <div class="col-md-6">
                        <div class="vizheh-img">
                            <img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-100" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="vizheh-content">
                            <div><del>729,000 تومان</del></div>
                            <h4>685,000 تومان</h4>
                            <h3>Huawei Tab Y300G2</h3>
                            <ul>
                                <li>حافظه داخلی 32 گیگابایت</li>
                                <li>دوربین 13 مگاپیکسل</li>
                            </ul>
                            <hr>
                            <span>زمان باقیمانده تا پایان سفارش</span>
                            <div class="counter" data-minutes-left="1000"></div>
                        </div>
                    </div>
                    <div class="vizheh-tag">
                        <span>فرصت ویژه</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="one-slider">
                    <h4>دوربین عکاسی</h4>
                    <div class="owl-carousel owl-theme ov1">
                        @foreach ($products as $product)
                        <x-product-card class="item" :$product />

                        @endforeach


                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>canon-ef-50mm</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>canon 55mmSTM</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>canon S-500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>Canon_EOS_400D</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>canon d10</h5>
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
                <div class="book-baner">
                    <a href="#"><img src="{{ asset('easyshop/img/book-baner.jpg') }}" class="w-100" /></a>
                    <h4>کتاب های کنکور</h4>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="two-slider">
                    <h4>موبایل و تبلت</h4>
                    <div class="owl-carousel owl-theme ov2">
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung 500</h5>
                            <span>1,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{ asset('easyshop/img/p20lite-listimage-black.png') }}" class="w-100" /></a>
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
                <div class="bodybulding-baner">
                    <a href="#"><img src="{{asset('easyshop/img/bodybulding-baner.jpg')}}" class="w-100" /></a>
                    <h4>مکمل های ورزشی</h4>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="three-slider">
                    <h4>محصولات پر بازدید</h4>
                    <div class="owl-carousel owl-theme ov3">
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>کیبورد ایسوس50</h5>
                            <span>85.000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>Adata d5-32G</h5>
                            <span>112.000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>Verity 16G</h5>
                            <span>65.000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>کفش چرمی نئو</h5>
                            <span>75.000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>Sony PS4</h5>
                            <span>4,200,000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>پاوربانک آداتا</h5>
                            <span>145.000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>Dlink 54-65-3</h5>
                            <span>117.000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>میز تلوزیون چوبی</h5>
                            <span>357.000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>Samsung Led HD</h5>
                            <span>3.850.000 تومان</span>
                        </div>
                        <div class="item">
                            <figure>
                                <a href=""><img src="{{asset('easyshop/img/Canon_EOS_400D.png')}}" class="w-100" /></a>
                            </figure>
                            <h5>گارد آیفون</h5>
                            <span>39.000 تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="blog-content">
                    <figure>
                        <img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100">
                    </figure>
                    <h5><i class="fa fa-title"></i>گوشی هوشمند جیبی</h5>
                    <p>گوشی هوشمند جیبی تکنولوژی جدید کمپانی اپل،با خاصیت ضد آب بودن و حمل بسیار مخفی،باقابلیت حمل داخل گوش...</p>
                    <ul>
                        <li><i class="fa fa-bars"></i>دسته بندی : تکنولوژی</li>
                        <li><i class="fa fa-calendar-o"></i>نوشته شده در : 97/10/20</li>
                        <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>
                    </ul>
                    <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-content">
                    <figure>
                        <img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100">
                    </figure>
                    <h5><i class="fa fa-title"></i>گوشی هوشمند جیبی</h5>
                    <p>گوشی هوشمند جیبی تکنولوژی جدید کمپانی اپل،با خاصیت ضد آب بودن و حمل بسیار مخفی،باقابلیت حمل داخل گوش...</p>
                    <ul>
                        <li><i class="fa fa-bars"></i>دسته بندی : تکنولوژی</li>
                        <li><i class="fa fa-calendar-o"></i>نوشته شده در : 97/10/20</li>
                        <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>
                    </ul>
                    <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-content">
                    <figure>
                        <img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100">
                    </figure>
                    <h5><i class="fa fa-title"></i>گوشی هوشمند جیبی</h5>
                    <p>گوشی هوشمند جیبی تکنولوژی جدید کمپانی اپل،با خاصیت ضد آب بودن و حمل بسیار مخفی،باقابلیت حمل داخل گوش...</p>
                    <ul>
                        <li><i class="fa fa-bars"></i>دسته بندی : تکنولوژی</li>
                        <li><i class="fa fa-calendar-o"></i>نوشته شده در : 97/10/20</li>
                        <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>
                    </ul>
                    <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>