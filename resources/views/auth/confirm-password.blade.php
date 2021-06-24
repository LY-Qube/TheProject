<x-guest-layout>

    <x-slot name="titlePage">
        {{ __('auth/confirm-password.Confirm your password') }}
    </x-slot>

    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Password confirmation form -->
        <form class="login-form" action="{{ route('password.confirm') }}" method="POST">
            @csrf
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-user-lock icon-2x text-warning border-warning border-3 rounded-pill p-3 mb-3
                        mt-1"></i>
                        <h5 class="mb-0">{{ __('auth/confirm-password.Confirm your password') }}</h5>
                        <span class="d-block text-muted">
                            {{ __('auth/confirm-password.secure area') }}
                        </span>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password"
                               name="password"
                               class="form-control"
                               title="{{ __('auth/confirm-password.password') }}"
                               placeholder="{{ __('auth/confirm-password.password') }}" required>
                        <div class="form-control-feedback">
                            <i class="icon-user-lock text-muted"></i>
                        </div>
                        @error('password')
                        <span class="form-text text-danger">
                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="icon-user-lock mr-2"></i> {{ __('auth/confirm-password.Confirm your password') }}
                    </button>
                </div>
            </div>
        </form>
        <!-- /password recovery form -->

    </div>
    <!-- /content area -->

</x-guest-layout>
