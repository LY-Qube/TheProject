<x-guest-layout>

    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Password recovery form -->
        <form class="login-form" action="{{ route('password.confirm') }}" method="POST">
            @csrf
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-user-lock icon-2x text-warning border-warning border-3 rounded-pill p-3 mb-3
                        mt-1"></i>
                        <h5 class="mb-0">Confirm your password</h5>
                        <span class="d-block text-muted">
                            This is a secure area of the application. Please confirm your password before continuing.
                        </span>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password"
                               name="password"
                               class="form-control"
                               title="Your password"
                               placeholder="Your password" required>
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
                        <i class="icon-user-lock mr-2"></i> Confirm your password
                    </button>
                </div>
            </div>
        </form>
        <!-- /password recovery form -->

    </div>
    <!-- /content area -->

</x-guest-layout>
