@extends('layout.base')
@section('title', 'Quản lý cấp phép | Tạo mới giấy phép nước mặt')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_QUAN_LY_CAP_PHEP/css/tnn-quan-ly-cap-phep.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
@endpush

@section('content')
<header class="mb-3 mb-md-0 ">
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-4 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{route('quan-ly-cap-phep')}}" title="Về trang chủ" id="btn_back_page" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2">QUẢN LÝ CẤP PHÉP</span>
        </div>
        <div class="bg-lightgray col-lg-8 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-4 pb-3 pb-lg-0 px-md-0" id="surfacewater-usage">
        <div class="col-12 pb-3 my-3 px-0 border border-info">
            <p class="exploit-surfacewater-title p-2 font-weight-bold text-center">NƯỚC MẶT</p>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-warning">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-danger">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-info">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        <div class="col-12 pb-3 my-3 px-0 border border-info">
            <p class="exploit-surfacewater-title p-2 font-weight-bold text-center">XẢ THẢI VÀO NGUỒN NƯỚC</p>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-warning">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-danger">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-info">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        <div class="col-12 pb-3 my-3 px-0 border border-info">
            <p class="exploit-surfacewater-title p-2 font-weight-bold text-center">KHAI THÁC NDĐ</p>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-warning">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-danger">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-info">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        <div class="col-12 pb-3 my-3 px-0 border border-info">
            <p class="exploit-surfacewater-title p-2 font-weight-bold text-center">TD NƯỚC DƯỚI ĐẤT</p>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-warning">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-danger">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-info">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        <div class="col-12 pb-3 my-3 px-0 border border-info">
            <p class="exploit-surfacewater-title p-2 font-weight-bold text-center">HÀNH NGHỀ</p>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-warning">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-danger">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-secondary">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex text-info">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        
        <!-- Ket thuc khai thac su dung nuoc mat -->
    </div>
    <div class="col-12 col-lg-8 py-3 pl-3 pr-0 map-container" id="surfacewater-usage">
        <div class="col-12 border border-primary mb-3" style="height:300px;">Sơ đồ cột</div>

        <div class="col-12 border border-danger mb-3 d-flex justify-content-center align-items-center" style="height:350px;">
            <div class="rounded-circle bg-warning" style="width:300px;height:300px;"></div>
        </div>
    </div>
</main>
@endsection
