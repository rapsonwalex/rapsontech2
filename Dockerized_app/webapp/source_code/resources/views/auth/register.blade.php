@extends('layouts.master')
@section('title')
    Register
@endsection
@section('content')
    <section class="vh-120" style="background-color: #3a3f48;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong">
                        <div class="card-body p-3">

                            <!-- <h3 class="mb-2 text-center">Sign in</h3> -->
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf


                                <div class="form-outline mb-2">
                                    <label class="form-label" for="typeEmailX-2">Name</label>
                                    <input type="text" id="typeEmailX-2" class="form-control form-control-md"
                                        name="name" :value="old('name')" required autofocus />
                                </div>

                                <div class="form-outline mb-2">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-md"
                                        name="email" :value="old('email')" required autofocus />
                                </div>

                                <div class="form-outline mb-2">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-md"
                                        type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="form-outline mb-2">
                                    <label class="form-label" for="typePasswordX-2">Confirm Password</label>
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-md"
                                        type="password" name="password_confirmation" required />
                                </div>

                                <div class="form-check d-flex justify-content-start mb-2">

                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                    @endif
                                    </label>
                                    <!-- <label class="form-check-label" for="form1Example3"> Forgot your password? </label> -->
                                </div>

                                <button class="btn btn-primary btn-md btn-block" type="submit">Register</button>

                                <hr class="my-2">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('asset_justica/justica_html/js/jquery.min.js') }}"></script>
@endsection
