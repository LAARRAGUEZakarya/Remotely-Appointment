
    @extends('layouts.app')
    @section('title') Sign Up @endsection
    
    @section('content')
   
        <!-- Sign up form -->
        <section class="signup">
            <div class="contain">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="first_name"><i class="zmdi zmdi-account"></i></label>
                                <input id="first_name" type="text" name="first_name" :value="old('first_name')" required autofocus placeholder="First Name" />
                            </div>
                            <div class="form-group">
                                <label for="last_name"><i class="zmdi zmdi-account-o"></i></label>
                                <input id="last_name" type="text" name="last_name" :value="old('last_name')" required autofocus placeholder="Last Name" />
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input id="phone" type="text" name="phone" :value="old('phone')" required autofocus placeholder="Phone Number" />
                            </div>
                            <div class="form-group">
                                <label for="adress"><i class="zmdi zmdi-pin"></i></label>
                                <input id="adress" type="text" name="adress" :value="old('adress')" required autofocus placeholder="Address" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input id="email" type="email" name="email" :value="old('email')" required placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" name="password"
                                        required placeholder="new password"/>
                            </div>
                            <div class="form-group">
                                <label  for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input id="password_confirmation"  type="password" 
                                          name="password_confirmation" required placeholder="new password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Sign Up"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="Login_Container/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link fs-5">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
@endsection

