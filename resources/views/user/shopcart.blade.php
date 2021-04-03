@extends('base')
@section('mybody')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option" style="background-color: #799646;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links mb-4 text-center">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span class="text-white">Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_addtocart_product as $item)
                                    <tr>
                                        <td class="cart__product__item">
                                            <img src="{{ asset('assets/img/shop/' . $item->image) }}"
                                                alt="{{ $item->image }}" style="width:80px;">
                                            <div class="cart__product__item__title">
                                                <h6>{{ $item->name }}</h6>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="cart__price"><i class="fa fa-rupee">&nbsp;</i> {{ $item->price }}</td>
                                        <td class="cart__quantity">
                                            <div class="text-center">
                                                {{-- <input type="text" value="{{ $item->qty }}"> --}}
                                                {{ $item->qty }}
                                            </div>
                                        </td>
                                        <td class="cart__total text-center"><i
                                                class="fa fa-rupee">&nbsp;</i>{{ $item->total_price }}
                                        </td>
                                        <td class="cart__updata"><a href="\addtocart_update\{{ $item->id }}">
                                                &nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i></a></td>
                                        <td class="cart__close"><a href="\addtocart_delete\{{ $item->id }}"><span
                                                    class="icon_close"></span></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <div class="cart__btn">
                        <a href="#">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span><i class="fa fa-rupee">&nbsp;</i> {{ $subtotal }}</span></li>

                        </ul>
                        <a href="/checkout" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->
@endsection
