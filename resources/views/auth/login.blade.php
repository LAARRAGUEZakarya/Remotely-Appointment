@extends('layouts.app')
@section('title') Sign In @endsection

    @section('content')

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="contain">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="Login_Container/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link fs-5">Create an account</a>
                    </div>


                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>

                        <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                                @csrf

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" id="email" name="email" :value="old('email')" required autofocus placeholder="Email" />


                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                             <input type="password" name="password" id="password" required placeholder="Password" />

                            </div>


                            <div class="form-group">
                                <input type="checkbox" name="remember"  id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Sign in"/>

                            </div>
                            @error('LoginError')
                            <small class="text-danger">
                                <span>{{ $message }}</span>
                            </small>
                              @enderror
                             {{-- @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif --}}
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
