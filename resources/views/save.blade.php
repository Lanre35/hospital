<x-layout>
    <div class="main-wrapper  account-wrapper bg-primary">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="{{ url('save') }}" method="post" class="form-signin">
                        @csrf
                        <div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>

                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" value="{{ old('username') }}" type="text" class="form-control rounded">
                        </div>

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control rounded">
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control rounded">
                        </div>
                        @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input name="phone_number" value="{{ old('phone_number') }}" type="text" class="form-control rounded">
                        </div>
                        {{-- <div class="form-group checkbox">
                            <label>
                                <input type="checkbox" name="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div> --}}
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="{{ route('login') }}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
