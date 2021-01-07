@extends('layout.base')
@section('title', 'Giới thiệu chung')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_GIOI_THIEU_CHUNG/css/tnn-gioi-thieu-chung.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
@endpush

@section('content')
<header>
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-5 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{url('/')}}" title="Về trang chủ" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <a href="{{route('thong-tin-chung')}}" class="font-weight-bold text-white d-block pl-2"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; GIỚI THIỆU CHUNG</a>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-lg-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 pb-lg-0 px-lg-0">
        <div class="d-flex align-items-center pt-3">
            <img class="introduce-image" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_HETHONGGIAMSAT.png')}}" alt="ANH_HETHONGGIAMSAT">
            <b class="pl-2 introduct-text">GIỚI THIỆU HỆ THỐNG QUẢN LÝ GIÁM SÁT</b>
        </div>
        <div class="d-flex align-items-center pt-3">
            <img class="introduce-image" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_QUANLYCAPPHEP.png')}}" alt="ANH_QUANLYCAPPHEP">
            <b class="pl-2 introduct-text">GIỚI THIỆU HỆ THỐNG QUẢN LÝ CẤP PHÉP</b>
        </div>
        <div class="d-flex align-items-center pt-3">
            <img class="introduce-image" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_QUANLYDULIEU.png')}}" alt="ANH_QUANLYDULIEU">
            <b class="pl-2 introduct-text">GIỚI THIỆU HỆ THỐNG QUẢN LÝ DỮ LIỆU</b>
        </div>
        <div class="d-flex align-items-center pt-3">
            <img class="introduce-image" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_BIEUMAUBAOCAO.png')}}" alt="ANH_BIEUMAUBAOCAO">
            <b class="pl-2 introduct-text">GIỚI THIỆU HỆ THỐNG QUẢN LÝ BÁO CÁO</b>
        </div>
        <div class="d-flex align-items-center pt-3">
            <img class="introduce-image" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_THONGBAO.png')}}" alt="ANH_THONGBAO">
            <b class="pl-2 introduct-text">GIỚI THIỆU HỆ THỐNG QUẢN LÝ THÔNG BÁO</b>
        </div>
        <div class="d-flex align-items-center pt-3">
            <img class="introduce-image" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_HUONGDANQUYDINH.png')}}" alt="ANH_HUONGDANQUYDINH">
            <b class="pl-2 introduct-text">GIỚI THIỆU CÁC HƯỚNG DẪN QUY ĐỊNH CHUNG</b>
        </div>
        <div class="d-flex align-items-center pt-3">
            <img class="introduce-image" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_QUANLYCAPPHEP.png')}}" alt="ANH_QUANLYCAPPHEP">
            <b class="pl-2 introduct-text">GIỚI THIỆU CÁCH ĐĂNG KÝ/ KẾT NỐI</b>
        </div>
    </div>
    <div class="col-12 col-lg-7 pb-3 map-container px-md-0">
        <div id="map" class="h-100 w-100 position-relative">
            <img title="Về trung tâm bản đồ" class="position-absolute map-tool center-map" id="center-map" src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_VEGIUABANDO.png'}}" alt="trung-tam-ban-do">
            <img title="Vị trí hiện tại" class="position-absolute map-tool current-location" id="current-location" src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_VITRIHIENTAI.png'}}" alt="vi-tri-hien-tai">
            <img title="Phóng to" class="position-absolute map-tool zoom-in" id="zoom-in" src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_PHONGTO.png'}}" alt="phong-to">
            <img title="Thu nhỏ" class="position-absolute map-tool zoom-out" id="zoom-out" src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_THUNHO.png'}}" alt="thu-nho">
            <img title="Thêm công trình" class="position-absolute map-tool add-construction" src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_THEMCONGTRINH.png'}}" alt="them-cong-trinh">
            <img title="Sửa công trình" class="position-absolute map-tool edit-construction" src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_SUACONGTRINH.png'}}" alt="sua-cong-trinh">
            <img title="Xem thông tin" class="position-absolute map-tool view-info" src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_XEMTHONGTIN.png'}}" alt="xem-thong-tin">
            <img title="Đo khoảng cách" class="position-absolute map-tool distance-measure" src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_DOKHOANGCACH.png'}}" alt="do-khoang-cach">
            <div class="position-absolute map-layers d-flex align-items-center" id="map-layers" title="Chọn lớp bản đồ">
                <img src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_LOPBANDO.png'}}" alt="lop-ban-do">
                <span class="font-weight-bold">&nbsp; Lớp bản đồ</span>
            </div>
            <div class="position-absolute map-panel-layers align-items-center text-white" id="map-panel-layers">
                <ul class="p-2 m-0">
                    <li class="text-right"><i class="fa fa-window-close text-danger btn-close-layers" id="btn-close-layers" aria-hidden="true"></i></li>
                    <li class="d-flex align-items-center"><input type="radio" onclick="setBasemap(this.value)" name="select-layer" id="select-layer" value="Topographic" checked>&nbsp; Bản đồ địa hình</li>
                    <li class="d-flex align-items-center"><input type="radio" onclick="setBasemap(this.value)" name="select-layer" id="select-layer" value="Imagery" >&nbsp; Bản đồ vệ tinh</li>
                    <li class="d-flex align-items-center"><input type="radio" onclick="setBasemap(this.value)" name="select-layer" id="select-layer" value="Streets">&nbsp; Bản đồ đường</li>
                    <li class="d-flex align-items-center"><input type="radio" onclick="setBasemap(this.value)" name="select-layer" id="select-layer" value="NationalGeographic">&nbsp; Bản đồ hành chính</li>
                </ul>
            </div>
            <div class="position-absolute map-note d-flex align-items-center">
                <img src="{{'public/TNN_GIOI_THIEU_CHUNG/image/ANH_CHUGIAIBANDO.png'}}" alt="chu-giai-ban-do">
                <span class="font-weight-bold">&nbsp; Chú giải</span>
            </div>
        </div>
    </div>
</main>
@endsection
