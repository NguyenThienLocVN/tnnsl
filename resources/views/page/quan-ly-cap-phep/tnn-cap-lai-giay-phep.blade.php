@extends('layout.base')
@section('title', 'Quản lý cấp phép')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_QUAN_LY_CAP_PHEP/css/tnn-quan-ly-cap-phep.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
@endpush

@section('content')
<header>
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-5 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{route('quan-ly-cap-phep')}}" title="Về trang chủ" id="btn_back_page" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2">ĐỀ NGHỊ CẤP LẠI PHÉP TÀI NGUYÊN NƯỚC</span>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 map-container px-md-0" id="surfacewater-usage">
    <div class="exploit-surfacewater mb-2">
            <p class="col-12 py-1 information-about-license-owner-title font-weight-bold mb-2">1. THÔNG TIN VỀ CHỦ GIẤY PHÉP</p>
            <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                <div class="col-md-12 col-12 d-flex p-0 px-3 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0">Tên chủ giấy phép </span>
                    <input type="text" class="w-100 px-1 font-13" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 px-3 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0">Địa chỉ </span>
                    <input type="text" class="w-100 px-1 font-13" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex flex-column flex-md-row p-0 mb-1 align-items-center px-3">
                    <div class="col-md-4 col-12 d-flex p-0 mb-1 align-items-center">
                        <span class="col-md-3 col-4 font-13 px-0">ĐT </span>
                        <input type="text" class="w-100 px-1 font-13" name="" id="">
                    </div>
                    <div class="col-md-4 col-12 d-flex p-0 mb-1 align-items-center">
                        <span class="col-md-3 col-4 font-13 px-0">Fax </span>
                        <input type="text" class="w-100 px-1 font-13" name="" id="">
                    </div>
                    <div class="col-md-4 col-12 d-flex p-0 mb-1 align-items-center">
                        <span class="col-md-3 col-4 font-13 px-0">Email </span>
                        <input type="text" class="w-100 px-1 font-13" name="" id="">
                    </div>
                </div>
                <div class="col-md-12 col-12 d-flex flex-column flex-md-row p-0 mb-1 align-items-center px-3">
                    <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                        <span class="col-md-3 col-4 font-13 px-0">Giấy phép số </span>
                        <input type="text" class="w-100 px-1 font-13" name="" id="">
                    </div>
                    <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                        <span class="col-md-3 col-4 font-13 px-0">Ngày cấp </span>
                        <input type="text" class="w-100 px-1 font-13" name="" id="">
                    </div>
                </div>
                <div class="col-md-12 col-12 d-flex p-0 px-3 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0">Thời hạn của giấy phép </span>
                    <input type="text" class="w-100 px-1 font-13" name="" id="">
                </div>
            </div>
        </div>
        <div class="the-reason-for-the-re_issuance-of-the-license exploit-surfacewater mb-2">
            <p class="col-12 py-1 information-about-license-owner-title font-weight-bold mb-2">2. LÝ DO ĐỀ NGHỊ CẤP LẠI GIẤY PHÉP</p>
            <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center px-3">
                <textarea name="" id="" cols="30" rows="5" class="w-100 px-1 font-13"></textarea>
            </div>
        </div>
        <div class="records-and-documents-attached exploit-surfacewater mb-2">
            <p class="col-12 py-1 information-about-license-owner-title font-weight-bold mb-2">3. GIẤY TỜ TÀI LIỆU NỘP KÈM THEO</p>
            <div class="Information-about-license-owner-content col-12 p-0 mb-3 pr-3">
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center px-3">
                    <span class="col-6 font-13 px-0">T/l c/m lý do đề nghị cấp lại GP</span>
                    <input type="file" name="" id="" class="px-1 font-13">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center px-3">
                    <span class="col-6 font-13 px-0">Giấy tờ khác </span>
                    <input type="file" name="" id="" class="px-1 font-13">
                </div>
            </div>
        </div>
        <div class="exploit-surfacewater mb-2">
            <p class="col-12 py-1 information-about-license-owner-title font-weight-bold mb-2">5. CAM KẾT CỦA CHỦ GIẤY PHÉP</p>
            <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                <div class="col-12 d-flex flex-column flex-md-row my-1">
                    <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-8 col-md-12 font-13 px-0">Thông tin và hồ sơ đúng sự thật và hoàn toàn chịu TN</span>
                        <input type="checkbox" name="license_duration" id="license_duration" class="col-4 px-1 font-13" required></span>
                    </div>
                    <div class="col-sm-5 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <input type="file" name="license_role" id="license_role" class="col-8 col-md-12 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row my-1">
                    <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-8 col-md-12 font-13 px-0">Chấp hành đúng quy định của GP</span>
                        <input type="checkbox" name="license_duration" id="license_duration" class="col-4 px-1 font-13" required></span>
                    </div>
                    <div class="col-sm-5 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <input type="file" name="license_role" id="license_role" class="col-8 col-md-12 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row my-1">
                    <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-8 col-md-12 font-13 px-0">Đã gửi một bộ tới STNMT</span>
                        <input type="checkbox" name="license_duration" id="license_duration" class="col-4 px-1 font-13" required></span>
                    </div>
                    <div class="col-sm-5 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <input type="file" name="license_role" id="license_role" class="col-8 col-md-12 px-1 font-13">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button class="btn py-1 font-13 font-weigh-bold px-3 btn-success mx-2">GỬI HỒ SƠ</button>
            <button class="btn py-1 font-13 font-weigh-bold px-3 btn-danger mx-2" type="reset">NHẬP LẠI</button>
        </div>
    </div>
    <div class="col-12 col-lg-7 pb-3 map-container px-md-0">
        <div id="map" class="h-100 w-100 position-relative">
            <img title="Về trung tâm bản đồ" class="position-absolute map-tool center-map" id="center-map" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_VEGIUABANDO.png')}}" alt="trung-tam-ban-do">
            <img title="Vị trí hiện tại" class="position-absolute map-tool current-location" id="current-location" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_VITRIHIENTAI.png')}}" alt="vi-tri-hien-tai">
            <img title="Phóng to" class="position-absolute map-tool zoom-in" id="zoom-in" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_PHONGTO.png')}}" alt="phong-to">
            <img title="Thu nhỏ" class="position-absolute map-tool zoom-out" id="zoom-out" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_THUNHO.png')}}" alt="thu-nho">
            <img title="Thêm công trình" class="position-absolute map-tool add-construction" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_THEMCONGTRINH.png')}}" alt="them-cong-trinh">
            <img title="Sửa công trình" class="position-absolute map-tool edit-construction" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_SUACONGTRINH.png')}}" alt="sua-cong-trinh">
            <img title="Xem thông tin" class="position-absolute map-tool view-info" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_XEMTHONGTIN.png')}}" alt="xem-thong-tin">
            <img title="Đo khoảng cách" class="position-absolute map-tool distance-measure" src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_DOKHOANGCACH.png')}}" alt="do-khoang-cach">
            <div class="position-absolute map-layers d-flex align-items-center" id="map-layers" title="Chọn lớp bản đồ">
                <img src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_LOPBANDO.png')}}" alt="lop-ban-do">
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
                <img src="{{asset('public/TNN_GIOI_THIEU_CHUNG/image/ANH_CHUGIAIBANDO.png')}}" alt="chu-giai-ban-do">
                <span class="font-weight-bold">&nbsp; Chú giải</span>
            </div>
        </div>
    </div>
</main>
@endsection
