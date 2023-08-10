
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
            <!--login area start-->
            <div class="col-lg-6 col-md-6 offset-3">
                <div class="account_form">
                    <h2>Confirm Password</h2>
                    <small>'This is a secure area of the application. Please confirm your password before continuing.</small>
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="password">
                            @error('password')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </p>
                        <div class="login_submit">
                           
                            <button type="submit">Confirm</button>
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
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
