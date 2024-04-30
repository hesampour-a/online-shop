<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Easy Shop</title>
    <link href="{{ asset('easyshop/style/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('easyshop/style/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('easyshop/style/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('easyshop/style/owl.theme.default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('easyshop/style/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="social">
        <ul>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-send"></i></a></li>
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
    <!---------------------------------->
    <div class="top2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="login">
                        <a href="#" class="mybtn"><i class="fa fa-user-plus"></i>ثبت نام</a>
                        <a href="#" class="mybtn"><i class="fa fa-user-o"></i>ورود</a>
                        <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="">
                        <input type="text" placeholder="کالای مورد نظر را جستجو کنید">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div><!--top2-->
    <!---------------------------------->
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <a href="#">کالای دیجیتال</a>
                            <ul>
                                <li><a href="#">گوشی موبایل</a></li>
                                <li><a href="#">تبلت</a></li>
                                <li><a href="#">لپ تاپ</a></li>
                                <li><a href="#">نمایشگر</a></li>
                                <li><a href="#">دوربین عکاسی</a></li>
                                <li><a href="#">لوازم جانبی رایانه</a></li>
                                <li><a href="#">لوازم جانبی موبایل</a></li>
                                <li><a href="#">سایر</a></li>
                            </ul>
                        </li>
                        <li><a href="#">آرایشی و بهداشتی</a></li>
                        <li>
                            <a href="#">مد و پوشاک</a>
                            <ul>
                                <li><a href="#">لباس فصل</a></li>
                                <li><a href="#">ساعت مچی</a></li>
                                <li><a href="#">بدلیجات</a></li>
                            </ul>
                        </li>
                        <li><a href="#">خانه و آشپزخانه</a></li>
                        <li><a href="#">ابزار اداری</a></li>
                        <li><a href="#">اسباب بازی</a></li>
                        <li>
                            <a href="#">اخبار</a>
                            <ul>
                                <li><a href="#">تکنولوژی</a></li>
                                <li><a href="#">علم و دانش</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!---------------------------------->
    {{ $slot }}
    <!---------------------------------->
    <div class="tab-box">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#watch"><i class="fa fa-gift"></i>ساعت مچی</a></li>
            <li><a data-toggle="tab" href="#badaligat"><i class="fa fa-gift"></i>بدلیجات</a></li>
            <li><a data-toggle="tab" href="#behdashti"><i class="fa fa-gift"></i>آرایشی و بهداشتی</a></li>
            <li><a data-toggle="tab" href="#bazi"><i class="fa fa-gift"></i>اسباب بازی</a></li>
            <li><a data-toggle="tab" href="#varzesh"><i class="fa fa-gift"></i>تجهیزات ورزشی</a></li>
            <li><a data-toggle="tab" href="#lebas"><i class="fa fa-gift"></i>لباس فصل</a></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="tab-content">
                    <div id="watch" class="tab-pane fade">
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/watch/1.jpg') }}" class="w-100" /></a>
                        </div>
                    </div>
                    <div id="badaligat" class="tab-pane fade">
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/badal/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/badal/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/badal/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/badal/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/badal/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/badal/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/badal/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/badal/1.jpg') }}" class="w-100" /></a>
                        </div>
                    </div>
                    <div id="behdashti" class="tab-pane fade">
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/behdashti/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/behdashti/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/behdashti/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/behdashti/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/behdashti/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/behdashti/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/behdashti/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/behdashti/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/behdashti/1.jpg') }}" class="w-100" /></a>
                        </div>
                    </div>
                    <div id="bazi" class="tab-pane fade">
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/bazi/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/bazi/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/bazi/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/bazi/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/bazi/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/bazi/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/bazi/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/bazi/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/bazi/1.jpg') }}" class="w-100" /></a>
                        </div>
                    </div>
                    <div id="varzesh" class="tab-pane fade">
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/varzesh/8.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/varzesh/8.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/varzesh/8.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/varzesh/8.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/varzesh/8.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/varzesh/8.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/varzesh/8.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/varzesh/8.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/varzesh/8.jpg') }}" class="w-100" /></a>
                        </div>
                    </div>
                    <div id="lebas" class="tab-pane fade">
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/lebas/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/lebas/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/lebas/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/lebas/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/lebas/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/lebas/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/lebas/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/lebas/1.jpg') }}" class="w-100" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('easyshop/img/off/lebas/1.jpg') }}" class="w-100" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!---------------------------------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-description">
                        <ul>
                            <li>تضمین اصالت کالاهای فروخته شده</li>
                            <li>فروش برند های معتبر</li>
                            <li>پاسخگویی 24 ساعته</li>
                            <li>امکان پرداخت آنلاین با کارت بانکی و پرداخت در محل</li>
                            <li>امکان بازگشت تا یک هفته در صورت عدم رضایت مشتری</li>
                            <li>خرید آسان و مطمئن</li>
                            <li>قیمت های مناسب</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-description2">
                        <ul>
                            <li><i class="fa fa-truck"></i>تحویل پستی سریع</li>
                            <li><i class="fa fa-plane"></i>ارسال با پست پیشتاز و سفارشی</li>
                            <li><i class="fa fa-cart-arrow-down"></i>خرید آسان و راحت</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-form">
                        <h5>در خبرنامه عضو شوید</h5>
                        <form action="">
                            <input type="email" placeholder="ایمیل خود را وارد کنید">
                            <button type="submit"><i class="fa fa-envelope-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    &copy;&nbsp;&nbsp;طراحی و کدنویسی سئو 90&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>info@seo90.ir</span>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <script src="{{ asset('easyshop/js/jquery-3.3.1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('easyshop/js/jquery.simple.timer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('easyshop/js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('easyshop/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('easyshop/js/js.js') }}" type="text/javascript"></script>
</body>

</html>