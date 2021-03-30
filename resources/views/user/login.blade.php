@extends('base')
@section('mybody')

    <div class="breadcrumb-option" style="background-color: #799646;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links mb-4 text-center">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span class="text-white">My Account</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <div class="container my-5">
        <div class="col-sm-8 ml-auto mr-auto">
            <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill"
                        href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Sign In</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent" style="border: 1px solid #799646 !important;">
                <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
                    <div class="col-sm-12  shadow rounded pt-2">
                        <div class="text-center"><img src="{{ asset('assets/img/profile.png') }}"
                                class="rounded-circle border p-1"></div>

                        <form method="post" id="" action="{{ route('user.auth') }}">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter valid email" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="***********" required>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col text-right"> <a href="" data-toggle="modal"
                                            data-target="#forgotPass">Forgot Password?</a> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    {{ session('error') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Sign In" class="btn btn-block btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" id="forgotpassForm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Forgot Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                    aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="email" name="forgotemail" id="forgotemail" class="form-control"
                                    placeholder="Enter your valid email..." required>
                            </div>
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
                            <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i>
                                Send Request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
