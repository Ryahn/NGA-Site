<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills nav-justified" id="login-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#login" role="tab" aria-controls="login"
                            aria-selected="true">WoW Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#admin" role="tab" aria-controls="admin"
                            aria-selected="false">Admin Login</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <div class="tab-content mt-3">
                    <div class="tab-pane active" id="login" role="tabpanel">
                        <span id="warships_login">
                            <a href="{{ route('wargaming') }}"><img src="{{ asset('assets/images/wowlogo.png') }}" style="width:100%"></a>
                        </span>
                    </div>

                    <div class="tab-pane" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <x-jet-label value="{{ __('Username') }}" />

                            <x-jet-input class="{{ $errors->has('username') ? 'is-invalid' : '' }}" type="text"
                                name="username" :value="old('username')" required />
                            <x-jet-input-error for="username"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Password') }}" />

                            <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                type="password" name="password" required autocomplete="current-password" />
                            <x-jet-input-error for="password"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <label class="custom-control-label" for="remember_me">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="d-flex justify-content-end align-items-baseline">
                                @if (Route::has('password.request'))
                                    <a class="text-muted mr-3" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-jet-button>
                                    {{ __('Log in') }}
                                </x-jet-button>
                            </div>
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
