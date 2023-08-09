    <form id="" wire:submit.prevent="login">
        @csrf
        <h2 class="login-title">Log in</h2>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
                <input class="form-control" type="email" wire:model="email" autofocus name="email" placeholder="Email"
                    autocomplete="off">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                <input class="form-control" type="password" wire:model="password" name="password"
                    placeholder="Password">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group d-flex justify-content-between">
            <label class="ui-checkbox ui-checkbox-info">
                <input type="checkbox">
                <span class="input-span"></span>Remember me</label>
            <a href="forgot_password.html">Forgot password?</a>
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-block" type="submit">Login</button>
        </div>


        @php
            $has_social_login = false;
        @endphp
        @if ($has_social_login)
            <div class="social-auth-hr">
                <span>Or login with</span>
            </div>

            <div class="text-center social-auth m-b-20">
                <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i
                        class="fa fa-google-plus"></i></a>
                <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
            </div>
        @endif

        <div class="text-center">Not a member?
            <a class="color-blue" href="register.html">Create accaunt</a>
        </div>
    </form>
