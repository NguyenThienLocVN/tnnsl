@extends('layout.base')
@section('title', 'Trang chủ ')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_TRANG_CHU/css/tnn-trang-chu.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
@endpush

@section('content')
<header>
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-4 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="http://tainguyenmoitruongsonla.vn" title="Về trang chủ" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <a href="{{url('/')}}" class="font-weight-bold text-white d-block pl-2"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; TRANG CHỦ</a>
        </div>
        <div class="bg-lightgray col-lg-8 col-sm-12 col-md-12 text-center py-1 py-lg-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-4">
        <div class="d-flex flex-column flex-md-row flex-lg-column">
            <div class="col-12 col-md-6 col-lg-12 px-0 pt-3 pb-0 d-flex">
                <a href="{{route('thong-tin-chung')}}" class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_THONGTINCHUNG.png')}}" alt="thong-tin-chung">
                    <p class="grid-item-text font-weight-bold">Thông tin chung</p>
                </a>
                <a href="{{route('he-thong-giam-sat')}}" class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_HETHONGGIAMSAT.png')}}" alt="he-thong-giam-sat">
                    <p class="grid-item-text font-weight-bold">Hệ thống giám sát</p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-12 px-0 pt-3 pb-0 d-flex">
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_QUANLYCAPPHEP.png')}}" alt="cap-phep">
                    <p class="grid-item-text font-weight-bold">Quản lý cấp phép</p>
                </div>
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_QUANLYDULIEU.png')}}" alt="quan-ly-du-lieu">
                    <p class="grid-item-text font-weight-bold">Quản lý dữ liệu</p>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row flex-lg-column">
            <div class="col-12 col-md-6 col-lg-12 px-0 pt-3 pb-0 d-flex">
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_BIEUMAUBAOCAO.png')}}" alt="bieu-mau">
                    <p class="grid-item-text font-weight-bold">Báo cáo biểu mẫu</p>
                </div>
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_THONGBAO.png')}}" alt="thong-bao">
                    <p class="grid-item-text font-weight-bold">Thông báo</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-12 px-0 pt-3 pb-0 d-flex">
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_HUONGDANQUYDINH.png')}}" alt="huong-dan-quy-dinh">
                    <p class="grid-item-text font-weight-bold">Hướng dẫn quy định</p>
                </div>
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_DANGKY.png')}}" alt="dang-ky">
                    <p class="grid-item-text font-weight-bold">Đăng ký / Kết nối</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8 pb-3 map-container px-md-0">
        <div id="map" class="h-100 w-100 position-relative">
            <img title="Về trung tâm bản đồ" class="position-absolute map-tool center-map" id="center-map" src="{{'public/TNN_TRANG_CHU/image/ANH_VEGIUABANDO.png'}}" alt="trung-tam-ban-do">
            <img title="Vị trí hiện tại" class="position-absolute map-tool current-location" id="current-location" src="{{'public/TNN_TRANG_CHU/image/ANH_VITRIHIENTAI.png'}}" alt="vi-tri-hien-tai">
            <img title="Phóng to" class="position-absolute map-tool zoom-in" id="zoom-in" src="{{'public/TNN_TRANG_CHU/image/ANH_PHONGTO.png'}}" alt="phong-to">
            <img title="Thu nhỏ" class="position-absolute map-tool zoom-out" id="zoom-out" src="{{'public/TNN_TRANG_CHU/image/ANH_THUNHO.png'}}" alt="thu-nho">
            <img title="Thêm công trình" class="position-absolute map-tool add-construction" src="{{'public/TNN_TRANG_CHU/image/ANH_THEMCONGTRINH.png'}}" alt="them-cong-trinh">
            <img title="Sửa công trình" class="position-absolute map-tool edit-construction" src="{{'public/TNN_TRANG_CHU/image/ANH_SUACONGTRINH.png'}}" alt="sua-cong-trinh">
            <img title="Xem thông tin" class="position-absolute map-tool view-info" src="{{'public/TNN_TRANG_CHU/image/ANH_XEMTHONGTIN.png'}}" alt="xem-thong-tin">
            <img title="Đo khoảng cách" class="position-absolute map-tool distance-measure" src="{{'public/TNN_TRANG_CHU/image/ANH_DOKHOANGCACH.png'}}" alt="do-khoang-cach">
            <div class="position-absolute map-layers d-flex align-items-center">
                <img src="{{'public/TNN_TRANG_CHU/image/ANH_LOPBANDO.png'}}" alt="lop-ban-do">
                <span class="font-weight-bold">&nbsp; Lớp bản đồ</span>
            </div>
            <div class="position-absolute map-note d-flex align-items-center">
                <img src="{{'public/TNN_TRANG_CHU/image/ANH_CHUGIAIBANDO.png'}}" alt="chu-giai-ban-do">
                <span class="font-weight-bold">&nbsp; Chú giải</span>
            </div>
        </div>
    </div>
</main>
@endsection
