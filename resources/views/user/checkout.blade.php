@extends('base')

@section('mybody')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#"></a> </h6>
                </div>
            </div>
            <form action="/order_info" method="POST" class="checkout__form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing detail</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" name="fristname" value="{{ $data->name }}">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Address <span>*</span></p>
                                    <textarea name="address" id="" cols="80" rows="3">{{ $data->address }}</textarea>
                                </div>
                                <div class="checkout__form__input">
                                    <p>Town/City <span>*</span></p>
                                    <input type="text" name="state" value="{{ $data->state }}">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Country<span>*</span></p>
                                    <input type="text" name="country" value="{{ $data->country }}">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Postcode/Zip <span>*</span></p>
                                    <input type="text" name="zipcode" value="{{ $data->zipcode }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" name="phone" value="{{ $data->phone }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="text" name="email" value="{{ $data->email }}">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout__order">
                            <h5>Your order</h5>
                            <div class="checkout__order__product">
                                <ul>
                                    <li>
                                        <span class="top__text">Product</span>
                                        <span class="top__text__right">Total</span>
                                    </li>
                                    @foreach ($data_addtocart_product as $item)
                                        <li>{{ $sn++ }}. {{ $item->name }} <span><i class="fa fa-rupee">&nbsp;</i>
                                                {{ $item->total_price }}</span>
                                            <input type="hidden" name="product_id{{ $p++ }}"
                                                value={{ $item->product_id }}>
                                            <input type="hidden" name="addtocart_id{{ $a++ }}"
                                                value={{ $item->id }}>
                                            <input type="hidden" name="qty{{ $i++ }}" value={{ $item->qty }}>
                                            <input type="hidden" name="total_price{{ $j++ }}"
                                                value={{ $item->total_price }}>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                            <div class="checkout__order__total">
                                <ul>
                                    <li>Subtotal <span><i class="fa fa-rupee">&nbsp;</i> {{ $subtotal }}</span></li>
                                </ul>
                            </div>
                            <div class="checkout__order__widget">
                                <label for="o-acc">
                                    Create an acount?
                                    <input type="checkbox" id="o-acc">
                                    <span class="checkmark"></span>
                                </label>
                                <p>Create am acount by entering the information below. If you are a returing customer
                                    login at the top of the page.</p>
                                <label for="check-payment">
                                    Cheque payment
                                    <input type="checkbox" id="check-payment">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="paypal">
                                    PayPal
                                    <input type="checkbox" id="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" class="site-btn">Place oder</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->



@endsection
