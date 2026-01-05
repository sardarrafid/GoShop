
        @include('theam.layout.layout')
        <!-- Start Login Register Area -->
        <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url({{ asset('theam/images/bg/5.jpg') }}) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ms-auto me-auto">
                        <ul class="login__register__menu nav" role="tablist">
                            <li role="presentation" class="login ">
                            <a class="active" href="{{ route('login') }}" >Login</a>
                            </li>
                            <li role="presentation" class="register">
                            <a href="{{ route('register') }}"  >Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Start Login Register Content -->
                <div class="row">
                    <div class="col-md-6 ms-auto me-auto">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade show active">
                                <form class="login" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <input 
                                        type="email" 
                                        name="email" 
                                        placeholder="Email*" 
                                        value="{{ old('email') }}" 
                                        required 
                                        autofocus
                                    >

                                    <input 
                                        type="password" 
                                        name="password" 
                                        placeholder="Password*" 
                                        required
                                    >

                                    <div class="tabs__checkbox">
                                        {{-- <input type="checkbox" name="remember" id="remember">
                                        <span> Remember me</span> --}}

                                        @if (Route::has('password.request'))
                                            <span class="forget">
                                                <a href="{{ route('password.request') }}">Forget Password?</a>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="htc__login__btn mt--30">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                    </div>
                                </form>
                                
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                           
                            
                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
        </div>
        <!-- End Login Register Area -->
        @include('theam.layout.footer')
      