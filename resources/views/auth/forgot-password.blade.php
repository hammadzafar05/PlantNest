

@extends('layouts.guest')
<title>{{ config('app.name', 'PlantNest|Login') }}</title>
@section('content') 
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="customer_login">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-6 offset-3">
                <div class="account_form">
                    <h2>Forgot your password?</h2>
                    <small> {{ __(' No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </small>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <p>
                            <label>Email <span>*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}" autocomplete="off" autofocus>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </p>
                        <div class="login_submit">
                            <button type="submit">Email Password Reset Link</button>
                        </div>
                    </form>
                    
                </div>
            
            </div>
            <!--login area start-->

        </div>
    </div>
</div>
<!-- customer login end -->

@endsection
{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
