@extends('base')

@section('myjs')

@endsection

@section('mybody')

    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <!-- Start WOWSlider.com BODY section -->
                    <div id="wowslider-container1" class="ml-0">
                        <div class="ws_images">
                            <ul>
                                <li><img src="{{ asset('assets/data1/images/category1_03.png') }}" alt="category-1_03"
                                        id="wows1_0" /></li>
                                <li><img src="{{ asset('assets/data1/images/category1_04.png') }}" alt="category-1_04"
                                        id="wows1_1" /></li>
                                <li><img src="{{ asset('assets/data1/images/category1_02.png') }}" alt="slider html"
                                        id="wows1_2" /></li>
                                <li><img src="{{ asset('assets/data1/images/category1_01.png') }}" alt="category-1_01"
                                        id="wows1_3" /></li>
                            </ul>
                        </div>
                        <div class="ws_script" style="position:absolute;left:-99%"><a href="#"></a></div>
                        <div class="ws_shadow"></div>
                    </div>
                    <script type="text/javascript" src="{{ asset('assets/engine1/wowslider.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('assets/engine1/script.js') }}"></script>
                    <!-- End WOWSlider.com BODY section -->

                </div>


                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="{{ asset('assets/img/categories/category-2.png') }}">
                                <div class="categories__text">
                                    <h4> Dengue Syrup</h4>

                                    <a href="shop.html">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="{{ asset('assets/img/categories/category-3.png') }}">
                                <div class="categories__text">
                                    <h4>Majitrich <br> Hair Oil</h4>
                                    <a href="shop.html">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="{{ asset('assets/img/categories/category-4.png') }}">
                                <div class="categories__text">
                                    <h4>Oliade Oil</h4>

                                    <a href="shop2.html">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="{{ asset('assets/img/categories/category-5.png') }}">
                                <div class="categories__text">
                                    <h4>Brain-O-Fit<br>-Syrup</h4>
                                    <a href="shop2.html">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (Session::has('error'))
        <script>
            alert('After Login you can Add Product');
            window.location.href = "/login";

        </script>
    @endif

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        @foreach ($data_category as $item)
                            <li data-filter=".{{ $item->slug }}">{{ ucwords($item->slug) }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                @foreach ($data_product as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix {{ $item->c_slug }}">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{ asset('assets/img/shop/' . $item->image) }}">
                                <div class="label new">New</div>
                                <ul class="product__hover">
                                    <li><a href="{{ asset('assets/img/shop/' . $item->image) }}"
                                            class="image-popup"><span class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href=""><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">{{ $item->name }}</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price"><i class="fa fa-rupee">&nbsp;</i> 59.0</div>
                                <a href="/product_details/{{ $item->id }}" class="btn btn-block btn-dark">Product
                                    Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner Section Begin -->
    <section class="banner set-bg" data-setbg="{{ asset('assets/img/banner/ayubanner.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <img src="{{ asset('assets/img/banner/abc-1-1.jpg') }}">
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <img src="{{ asset('assets/img/banner/slider.png') }}">
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <img src="{{ asset('assets/img/banner/products2.png') }}">
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <img src="{{ asset('assets/img/banner/e1hpy4so.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->


    <!-- Discount Section Begin -->
    <section class="discount">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="discount__pic">
                        <img src="{{ asset('assets/img/sq2yrubs.jpg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Discount Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="services__item">
                        <i class="fa fa-car"></i>
                        <h6>Free Shipping</h6>
                        <p>For all oder over <i class="fa fa-rupee">&nbsp;</i> 999 inr</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="services__item">
                        <i class="fa fa-money"></i>
                        <h6>Money Back Guarantee</h6>
                        <p>If good have Problems</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="services__item">
                        <i class="fa fa-support"></i>
                        <h6>Online Support 24/7</h6>
                        <p>Dedicated support</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="services__item">
                        <i class="fa fa-headphones"></i>
                        <h6>Payment Secure</h6>
                        <p>100% secure payment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


@endsection
