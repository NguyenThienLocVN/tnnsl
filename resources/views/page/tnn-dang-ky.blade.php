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
        @if ($errors->any())
            <div class="col-sm-12 p-0">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <span class="text-danger font-14"><p class="m-0">{{ $error }}</p></span>
                    @endforeach
                </div>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Chọn đối tượng <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="col-6">
                        <label class="m-0 font-14" for="">Tổ chức </label>
                        <input type="radio" name="object" value="0" class="">
                    </div>
                    <div class="col-6">
                        <label class="m-0 font-14" for="">Cá nhân </label>
                        <input type="radio" name="object" value="1" class="">
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Tên đăng nhập <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <input name="name" class="form-control font-14" value="{{old('name')}}" placeholder="Tên đăng nhập" type="text" required />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Mật khẩu <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock" aria-hidden="true"></i></span>
                    </div>
                    <input name="password" class="form-control font-14" value="{{old('password')}}" placeholder="Mật khẩu" type="password" required />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Tên doanh nghiệp <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                    </div>
                    <input name="organization_name" class="form-control font-14" value="{{old('organization_name')}}" placeholder="Tên doanh nghiệp" type="text" required />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Mã doanh nghiệp</p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-university" aria-hidden="true"></i></span>
                    </div>
                    <input name="organization_code" class="form-control font-14" value="{{old('organization_code')}}" placeholder="Mã doanh nghiệp" type="text" />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Địa chỉ <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    </div>
                    <input name="address" class="form-control font-14" value="{{old('address')}}" placeholder="Địa chỉ" type="text" required/>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Trụ sở chính</p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building" aria-hidden="true"></i></span>
                    </div>
                    <input name="organization_address" class="form-control font-14" value="{{old('organization_address')}}" placeholder="Trụ sở chính" type="text">
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Số điện thoại <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone" aria-hidden="true"></i></span>
                    </div>
                    <input name="phone" class="form-control font-14" value="{{old('phone')}}" placeholder="Số điện thoại" type="text" required />
                </div>
            </div>

            <div class="d-flex align-items-center">
                <p class="col-4 p-0 m-0 font-weight-bold text-left font-14">Email <span class="text-danger">*</span></p>
                <div class="col-8 d-flex pr-0 form-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope" aria-hidden="true"></i></span>
                    </div>
                    <input name="email" class="form-control font-14" value="{{old('email')}}" placeholder="Email" type="text" required/>
                </div>
            </div>

            <div class="d-flex justify-content-center py-2">
                <a href="{{url('/')}}" class="col-3 btn btn-danger">Quay lại</a>
                <div class="col-7 d-flex align-items-center">
                    <button type="submit" class="col-5 btn btn-success">Đăng ký</button>
                    <span>&nbsp; hoặc <a href="{{route('login')}}">Đăng nhập</a></span>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection
