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
                        <li><a href="{{route('user.home')}}">home</a></li>
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
            

            <!--register area start-->
            <div class="col-lg-6 col-md-6 offset-3">
                <div class="account_form register">
                    <h2>Register</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <p>
                            <label>Name <span>*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </p>
                        <p>
                            <label>Email address <span>*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </p>
                        <p>
                            <label>Contact Number <span>*</span></label>
                            <input type="number" name="contact_number" value="{{ old('contact_number') }}">
                            @error('contact_number')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </p>
                        <p>
                            <label>Confirm Password <span>*</span></label>
                            <input type="password" name="password_confirmation">
                        </p>
                        <div class="login_submit">
                            <a class="" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                            <button type="submit">Register</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>
<!-- customer login end -->

@endsection

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
