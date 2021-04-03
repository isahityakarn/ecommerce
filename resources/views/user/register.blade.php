@extends('base')

@section('mybody')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>User Registration</span>
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
                    <h4 class="coupon__link">User detail</h4>
                </div>
            </div>
            <form action="/userstore" method="POST" class="checkout__form">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="">
                                    <p>Email <span>*</span></p>
                                    <input type="text" name="email" class="form-control">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror

                                    </span>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="">
                                    <p>Password <span>*</span></p>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="">
                                    <p>confirm password <span>*</span></p>
                                    <input type="password" name="cpassword" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="">
                                    <p>Name <span>*</span></p>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 ">
                                <div class=" ">
                                    <p>Address <span>*</span></p>
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="">
                                    <p>Town/City <span>*</span></p>
                                    <input type="text" name="state" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="">
                                    <p>Country<span>*</span></p>
                                    <input type="text" name="country" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="">
                                    <p>Postcode/Zip <span>*</span></p>
                                    <input type="text" name="zipcode" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <button type="submit" class="btn btn-info">submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->



@endsection
