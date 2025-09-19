{{-- <!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298); /* 🔹 Background changed */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #444;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }
        .form-group input:focus {
            border-color: #2575fc;
            box-shadow: 0px 0px 8px rgba(37, 117, 252, 0.5);
        }
        .btn {
            background: #2575fc;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn:hover {
            background: #1a5ed6;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>

        @if (session('error'))
            <p class="error-message">{{ session('error') }}</p>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>


 --}}



@extends('layout.site')

@section('content')
    <!--End Page Header-->
    <!--Start Login One-->
    <section class="login-one">
        <div class="container">
            <div class="login-one__form">
                <div class="inner-title text-center">
                    <h2>Login Here</h2>
                </div>

                <!-- ✅ Form Start -->
                <form id="login-one__form" action="{{ route('login.submit') }}" method="POST">
                    @csrf

                    <div class="row">
                        <!-- Username -->
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" name="username" placeholder="Username..." required>
                                </div>
                            </div>
                        </div>

                                                <!-- Password -->
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="text" name="password" id="formPassword" placeholder="Password..." required>
                                        </div>
                                    </div>
                                </div>

                        <!-- Submit Button -->
                        <div class="col-xl-12">
                            <div class="form-group">
                                <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                    Login Here
                                    <i class="icon-next"></i>
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </button>
                            </div>
                        </div>

                        <!-- Remember & Forget -->
                        <div class="remember-forget">
                            <div class="checked-box1">
                                <input type="checkbox" name="remember" id="saveinfo">
                                <label for="saveinfo">
                                    <span></span>
                                    Remember me
                                </label>
                            </div>
                            {{-- <div class="forget">
                            <a href="{{ route('password.request') }}">Forget password?</a>
                        </div> --}}
                        </div>
                    </div>
                </form>
                <!-- ✅ Form End -->

            </div>
        </div>
    </section>

    <!--End Login One-->

    <!--Start Brand One-->
    <section class="brand-one brand-one--two about">
        <div class="container">
            <div class="brand-one__inner">
                <div class="brand-one__carousel owl-carousel owl-theme">
                    <!--Start Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__single-inner">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!--End Brand One Single-->

                    <!--Start Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__single-inner">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!--End Brand One Single-->

                    <!--Start Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__single-inner">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!--End Brand One Single-->

                    <!--Start Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__single-inner">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!--End Brand One Single-->

                    <!--Start Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__single-inner">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!--End Brand One Single-->

                    <!--Start Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__single-inner">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!--End Brand One Single-->
                </div>
            </div>
        </div>
    </section>
    <!--End Brand One-->
@endsection
