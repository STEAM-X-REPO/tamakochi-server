@extends('master.auth.index')
@section('content')
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
        <div class="col mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="text-center">
                            <h3 class="">Sign in</h3>
                            <p>Don't have an account yet? <a href="{{ url('regsiter') }}">Sign up
                                    here</a>
                            </p>
                        </div>
                        <div class="login-separater text-center mb-4"> <span>SIGN IN WITH EMAIL</span>
                            <hr />
                        </div>
                        <div class="form-body">
                            <form class="row g-3">
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Enter
                                        Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" class="form-control border-end-0" id="inputChoosePassword"
                                            value="12345678" placeholder="Enter Password"> <a href="javascript:;"
                                            class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end"> <a href="authentication-forgot-password.html">Forgot
                                        Password ?</a>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign
                                            in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection