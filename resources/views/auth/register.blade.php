@include('theam.layout.layout')

<!-- Start Login Register Area -->
<div class="htc__login__register bg__white ptb--130"
     style="background: url({{ asset('theam/images/bg/5.jpg') }}) no-repeat center / cover;">

    <div class="container">

        <!-- Tabs -->
        <div class="row">
            <div class="col-md-6 ms-auto me-auto">
                <ul class="login__register__menu nav">
                    <li class="login">
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="register">
                        <a class="active" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Register Form -->
        <div class="row">
            <div class="col-md-6 ms-auto me-auto">
                <div class="htc__login__register__wrap">

                    <div class="single__tabs__panel tab-pane fade show active">
                        <form class="login" method="POST" action="{{ route('register') }}">
                            @csrf

                            <input type="text" name="name" placeholder="Name*" value="{{ old('name') }}" required>

                            <input type="email" name="email" placeholder="Email*"
                                   value="{{ old('email') }}" required>

                            <input type="password" name="password" placeholder="Password*" required>

                            <input type="password" name="password_confirmation"
                                   placeholder="Confirm Password*" required>

                            

                            <div class="htc__login__btn">
                                <button type="submit" class="btn btn-primary w-100">
                                    Register
                                </button>
                            </div>
                        </form>

                        <!-- Social Login (Optional) -->
                        <div class="htc__social__connect">
                            <h2>Or Register With</h2>
                            <ul class="htc__soaial__list">
                                <li><a class="bg--facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a class="bg--googleplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

@include('theam.layout.footer')
