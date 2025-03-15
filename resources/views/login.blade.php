<x-layout>
    <div class="main-wrapper account-wrapper bg-primary">
        <div class="account-page rounded">
            <div class="account-center">
                <div class="account-box rounded">
                    <form action="{{ url('login') }}" method="post" class="form-signin">
                        @csrf
                        <div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>

                        @error('failed')
                            <span class="text-danger">{{ $message}}</span>
                        @enderror

                        @error('username')
                            <span class="text-danger">{{ $message}}</span>
                        @enderror

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" autofocus="" class="form-control rounded">
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message}}</span>
                        @enderror

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control rounded">
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="{{ route('signup') }}">Register Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>

</x-layout>

