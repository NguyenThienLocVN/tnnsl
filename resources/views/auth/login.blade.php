@extends('layout.base')
@section('title', 'Đăng nhập | Giám sát tài nguyên nước Sơn La')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
@endpush

<img src="{{asset('public/TNN_TRANG_CHU/image/screenshot-tai-nguyen-nuoc.png')}}" class="background-login" alt="screenshot-tai-nguyen-nuoc" />

        

        <form method="POST" action="{{ route('login') }}" class="form-login">
        {{ csrf_field() }}

        <img src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" class="w-100 mb-3" alt="ANHSOTNMT">

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="col-sm-12 p-0">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <span class="text-danger font-14"><p class="m-0">{{ $error }}</p></span>
                    @endforeach
                </div>
            </div>
        @endif

            <div>
                <div class="d-flex">
                    <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <x-jet-input id="name" class="form-control block w-full font-13" type="text" name="name" :value="old('name')" required autofocus placeholder="Tên đăng nhập" />
                </div>
            </div>

            <div class="mt-4">
                <div class="d-flex">
                    <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    <x-jet-input id="password" class="form-control block w-full font-13" type="password" name="password" required autocomplete="current-password" placeholder="Mật khẩu" />
                </div>
            </div>

            <div class="block mt-3">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-1 text-sm text-gray-600 font-13">{{ __('Ghi nhớ') }}</span>
                </label>
            </div>

            <div class="text-center d-flex">
                <x-jet-button class="col-6 btn font-13 button-login">
                        {{ __('Đăng nhập') }}
                </x-jet-button>

                <a href="{{route('dang-ky')}}" class="btn font-13 col-6">Đăng ký</a>
            </div>
            <div class="text-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 font-13 font-weight-bold" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                @endif
            </div>
        </form>
