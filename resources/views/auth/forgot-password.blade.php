<x-guest-layout>

    <x-slot name="titlePage">
        {{ __('auth/forgot-password.Password recovery') }}
    </x-slot>

    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Password recovery form -->
        <form class="login-form" action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-pill p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">{{ __('auth/forgot-password.Password recovery') }}</h5>
                        @if (session('status'))
                            <span class="d-block text-success">{{ session('status') }}</span>
                        @else
                            <span class="d-block text-muted">{{ __("auth/forgot-password.We'll emailed") }}</span>
                        @endif
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               class="form-control"
                               title="{{ __('auth/forgot-password.email') }}"
                               placeholder="{{ __('auth/forgot-password.email') }}" required>
                        <div class="form-control-feedback">
                            <i class="icon-mail5 text-muted"></i>
                        </div>
                        @error('email')
                        <span class="form-text text-danger">
                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="icon-spinner11 mr-2"></i> {{ __('auth/forgot-password.Reset password') }}
                    </button>
                </div>
            </div>
        </form>
        <!-- /password recovery form -->

    </div>
    <!-- /content area -->

</x-guest-layout>
