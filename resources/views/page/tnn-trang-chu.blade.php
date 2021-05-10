@extends('layout.base')
@section('title', 'Trang chủ ')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_TRANG_CHU/css/tnn-trang-chu.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
@endpush

@section('content')
<header>
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-4 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="http://tainguyenmoitruongsonla.vn" title="Về trang chủ" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-home" aria-hidden="true"></i></a>
            <div class="font-weight-bold text-white d-block pl-2"> TÀI NGUYÊN NƯỚC</div>
        </div>
        <div class="bg-lightgray col-lg-8 col-sm-12 col-md-12 text-center py-1 py-lg-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-4 px-md-0 menu-home">
        @if(Auth::user())
            <div class="d-flex auth-bar pl-2 justify-content-between align-items-center">
                <span class="font-weight-bold p-0">Xin chào, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();" class="px-md-2 p-2 d-block text-white btn-logout" title="Đăng xuất">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </x-jet-dropdown-link>
                </form>
            </div>
        @endif
        <div class="d-flex flex-column flex-md-row flex-lg-column">
            <div class="col-12 col-md-6 col-lg-12 px-0 pt-3 pb-0 d-flex">
                <a href="{{url('thong-tin-chung')}}" class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_THONGTINCHUNG.png')}}" alt="thong-tin-chung">
                    <p class="grid-item-text font-weight-bold">Giới thiệu chung</p>
                </a>
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_QUANLYDULIEU.png')}}" alt="quan-ly-du-lieu">
                    <p class="grid-item-text font-weight-bold">Thông tin dữ liệu</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-12 px-0 pt-3 pb-0 d-flex">
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_HETHONGQUANTRAC.png')}}" alt="he-thong-quan-trac">
                    <p class="grid-item-text font-weight-bold">Hệ thống quan trắc</p>
                </div>
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_THONGBAO.png')}}" alt="thong-bao">
                    <p class="grid-item-text font-weight-bold">Thông báo</p>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row flex-lg-column">
            <div class="col-12 col-md-6 col-lg-12 px-0 pt-3 pb-0 d-flex">
                <a href="{{url('he-thong-giam-sat')}}" class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_HETHONGGIAMSAT.png')}}" alt="he-thong-giam-sat">
                    <p class="grid-item-text font-weight-bold">Hệ thống giám sát</p>
                </a>
                <a href="{{route('bao-cao-bieu-mau')}}" class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_BIEUMAUBAOCAO.png')}}" alt="bieu-mau">
                    <p class="grid-item-text font-weight-bold">Báo cáo biểu mẫu</p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-12 px-0 pt-3 pb-0 d-flex">
                <a href="{{url('quan-ly-cap-phep')}}" class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_QUANLYCAPPHEP.png')}}" alt="cap-phep">
                    <p class="grid-item-text font-weight-bold">Quản lý cấp phép</p>
                </a>
                <a href="{{route('dang-ky')}}" class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_DANGKY.png')}}" alt="dang-ky">
                    <p class="grid-item-text font-weight-bold">Đăng ký</p>
                </a>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row flex-lg-column">
            <div class="col-12 px-0 pt-3 pb-0 d-flex">
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_HUONGDANQUYDINH.png')}}" alt="huong-dan-quy-dinh">
                    <p class="grid-item-text font-weight-bold">Hướng dẫn quy định</p>
                </div>
                <div class="col-6 text-center">
                    <img class="grid-item-image" src="{{asset('public/TNN_TRANG_CHU/image/ANH_YEUCAUKETNOI.png')}}" alt="yeu-cau-ket-noi">
                    <p class="grid-item-text font-weight-bold">Yêu cầu kết nối</p>
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
            <div class="position-absolute map-layers d-flex align-items-center" id="map-layers" title="Chọn lớp bản đồ">
                <img src="{{'public/TNN_TRANG_CHU/image/ANH_LOPBANDO.png'}}" alt="lop-ban-do">
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
                <img src="{{'public/TNN_TRANG_CHU/image/ANH_CHUGIAIBANDO.png'}}" alt="chu-giai-ban-do">
                <span class="font-weight-bold">&nbsp; Chú giải</span>
            </div>
        </div>
    </div>
</main>
@endsection
