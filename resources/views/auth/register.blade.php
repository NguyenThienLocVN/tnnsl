@extends('layout.base')
@section('title', 'Đăng ký tài khoản')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_DANG_KY/css/tnn-dang-ky.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
@endpush

@section('content')
<header>
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_DANG_KY/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-lg-7 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
        <img class="w-100 h-100" src="{{asset('public/TNN_DANG_KY/image/ban-do-dia-hinh-son-la.png')}}" alt="ban-do-dia-hinh-son-la">
    </div>
    <div class="bg-lightgray col-lg-5 col-sm-12 col-md-12 text-center py-1 py-lg-0">
        <div class="d-flex">
            <div class="col-2 px-0 py-2">
                <img src="{{asset('public/TNN_DANG_KY/image/ANH_DANGKY.png')}}" alt="ANH_DANGKY" class="w-100">
            </div>
            <div class="col-10 p-0">
                <h6 class="text-primary font-weight-bold d-block py-2">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </h6>
            </div>
        </div>
        <p>Hoàn tất biểu mẫu để đăng ký tài khoản</p>

        <x-jet-validation-errors class="mb-4 text-danger" />
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Chọn đối tượng <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="col-6">
                        <x-jet-label class="m-0 font-14" for="" value="Tổ chức" />
                        <x-jet-input type="radio" name="object" value="0" class="" />
                    </div>
                    <div class="col-6">
                        <x-jet-label class="m-0 font-14" for="" value="Cá nhân" />
                        <x-jet-input type="radio" name="object" value="1" class="" />
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Tên đăng nhập <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <x-jet-input id="name" class="form-control font-14" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Tên đăng nhập" />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Mật khẩu <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock" aria-hidden="true"></i></span>
                    </div>
                    <x-jet-input id="password" class="form-control font-14" placeholder="Mật khẩu" type="password" name="password" required autocomplete="new-password" />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Xác nhận mật khẩu <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock" aria-hidden="true"></i></span>
                    </div>
                    <x-jet-input id="password_confirmation" class="form-control font-14" placeholder="Xác nhận mật khẩu" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Số điện thoại <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone" aria-hidden="true"></i></span>
                    </div>
                    <x-jet-input id="phone" name="phone" class="form-control font-14" placeholder="Số điện thoại" type="text" require :value="old('phone')" />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Email <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope" aria-hidden="true"></i></span>
                    </div>
                    <x-jet-input id="email" name="email" class="form-control font-14" placeholder="Email" type="text" require :value="old('email')" />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Tên doanh nghiệp <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                    </div>
                    <x-jet-input id="organization_name" name="organization_name" class="form-control font-14" placeholder="Tên doanh nghiệp" type="text" require :value="old('organization_name')" />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Mã doanh nghiệp</p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-university" aria-hidden="true"></i></span>
                    </div>
                    <x-jet-input name="organization_code" class="form-control font-14" placeholder="Mã doanh nghiệp" type="text" :value="old('organization_code')" />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Địa chỉ <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    </div>
                    <x-jet-input name="address" class="form-control font-14" placeholder="Địa chỉ" type="text" require :value="old('organization_code')" />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Trụ sở chính</p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building" aria-hidden="true"></i></span>
                    </div>
                    <x-jet-input name="organization_address" class="form-control font-14" placeholder="Trụ sở chính" type="text" :value="old('organization_code')" />
                </div>
            </div>

            <div class="d-flex justify-content-center py-2">
                <div class="col-8 d-flex align-items-center">
                    <x-jet-button type="submit" class="col-6 btn btn-success">Đăng ký !</x-jet-button>
                    <span>&nbsp; hoặc <a href="{{ route('login') }}">Đăng nhập</a></span>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection