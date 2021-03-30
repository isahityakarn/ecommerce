@extends('base')

@section('mybody')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option" style="background-color: #799646;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links mb-4 text-center">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="capsule.html">Capsule</a>
                        <span class="text-white"> {{ $data_product->name }} </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->

    <section class="product-details spad">
        <form action="/addtocart" method="POST">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__left product__thumb nice-scroll">
                                <a class="pt active" href="#product-1">
                                    <img src="{{ asset('assets/img/shop/' . $data_product->image) }}"
                                        alt="{{ $data_product->image }}">
                                </a>
                                <a class="pt" href="#product-2">
                                    <img src="{{ asset('assets/img/shop/' . $data_product->image) }}"
                                        alt="{{ $data_product->image }}">
                                </a>
                                <a class="pt" href="#product-3">
                                    <img src="{{ asset('assets/img/shop/' . $data_product->image) }}"
                                        alt="{{ $data_product->image }}">
                                </a>
                                <a class="pt" href="#product-4">
                                    <img src="{{ asset('assets/img/shop/' . $data_product->image) }}"
                                        alt="{{ $data_product->image }}">
                                </a>
                            </div>
                            <div class="product__details__slider__content">
                                <div class="product__details__pic__slider owl-carousel">
                                    <img data-hash="product-1" class="product__big__img"
                                        src="{{ asset('assets/img/shop/' . $data_product->image) }}"
                                        alt="{{ $data_product->image }}">
                                    <img data-hash="product-2" class="product__big__img"
                                        src="{{ asset('assets/img/shop/' . $data_product->image) }}"
                                        alt="{{ $data_product->image }}">
                                    <img data-hash="product-3" class="product__big__img"
                                        src="{{ asset('assets/img/shop/' . $data_product->image) }}"
                                        alt="{{ $data_product->image }}">
                                    <img data-hash="product-4" class="product__big__img"
                                        src="{{ asset('assets/img/shop/' . $data_product->image) }}"
                                        alt="{{ $data_product->image }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="product__details__text">
                            <h3>{{ $data_product->name }}<span>Brand&nbsp;:&nbsp;IND-Swift LTD</span></h3>
                            <input type="hidden" class="form-control" name="product_id" id=""
                                value="{{ $data_product->id }}">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__details__price"><i class="fa fa-rupee">&nbsp;</i>
                                {{ $data_product->price }}
                                <input type="hidden" name="price" value="{{ $data_product->price }}">
                                {{-- <span><i class="fa fa-rupee">&nbsp;</i>1430.0</span> --}}
                            </div>
                            <p>{{ $data_product->s_description }}</p>
                            <div class="product__details__button">
                                <div class="quantity">
                                    <span>Quantity:</span>
                                    <div class="pro-qty">
                                        <input type="text" name="qty" value="1">
                                    </div>
                                </div>
                                {{-- <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a> --}}
                                <button type="submit" class="cart-btn"><span class="icon_bag_alt"></span> Add to
                                    cart</button>
                                <ul>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__details__widget">
                                <ul>
                                    <li>
                                        <span>Availability:</span>
                                        <div class="stock__checkbox">
                                            <label for="stockin">
                                                {{ $data_product->stock }}
                                                <input type="checkbox" id="stockin">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Promotions:</span>
                                        <p>Free shipping</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <h6>Description</h6>
                                    <p>{{ $data_product->description }}</p>
                                </div>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <h6>Specification</h6>
                                    <p>{{ $data_product->specification }}</p>
                                </div>
                                <div class="tab-pane" id="tabs-3" role="tabpanel">
                                    <h6>Reviews</h6>
                                    <p>There are no reviews yet.</p>
                                    <p>Only logged in customers who have purchased this product may leave a review.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="related__title">
                            <h5>RELATED PRODUCTS</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/related/dengu-cure-capsule.jpg">
                                <div class="label new">New</div>
                                <ul class="product__hover">
                                    <li><a href="img/product/related/dengu-cure-capsule.jpg" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Swift Dengue Cure Capsule</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price"><i class="fa fa-rupee">&nbsp;</i>800.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/related/pile-capsule.jpg">
                                <ul class="product__hover">
                                    <li><a href="img/product/related/pile-capsule.jpg" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Pile-Swift Caps
                                    </a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price"><i class="fa fa-rupee">&nbsp;</i>950.0</div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </form>
    </section>
    <!-- Product Details Section End -->


@endsection
