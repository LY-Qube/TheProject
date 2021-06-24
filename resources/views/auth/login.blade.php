<x-guest-layout>

    <x-slot name="titlePage">
        {{ __('auth/login.login account') }}
    </x-slot>

    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Login form -->
        <form class="login-form" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">{{ __('auth/login.login account') }}</h5>
                        <span class="d-block text-muted">{{ __('auth/login.credentials below') }}</span>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="email"
                               name="email"
                               title="{{ __('auth/login.email') }}"
                               class="form-control"
                               value="{{ old('email') }}"
                               placeholder="{{ __('auth/login.email') }}" required>
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="password"
                               name="password"
                               title="password"
                               class="form-control"
                               placeholder="{{ __('auth/login.password') }}" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                        @error('email')
                        <span class="form-text text-danger">
                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('auth/login.sign in') }}</button>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('password.request') }}">{{ __('auth/login.forgot password') }}</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- /login form -->

    </div>
    <!-- /content area -->

</x-guest-layout>

