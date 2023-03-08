@extends('layouts.master')
@section('title')
    Login
@endsection
@section('content')
    <section class="vh-100" style="background-color: #3a3f48;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong">
                        <div class="card-body p-3">

                            <!-- <h3 class="mb-2 text-center">Sign in</h3> -->
                            <!-- Session Status -->

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->
                                {{-- <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div> --}}

                                <div class="form-outline mb-2">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-md"
                                        name="email" :value="old('email')" required autofocus />

                                </div>


                                {{-- <div class="flex items-center justify-end mt-4">
                                    <x-button>
                                        {{ __('Email Password Reset Link') }}
                                    </x-button>
                                </div> --}}
                                <button class="btn btn-primary btn-md btn-block"
                                    type="submit">{{ __('Email Password Reset Link') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    {{-- <section>
<div class="card-body p-3"></div>
</section> --}}
    <script src="{{ asset('asset_justica/justica_html/js/jquery.min.js') }}"></script>
@endsection
