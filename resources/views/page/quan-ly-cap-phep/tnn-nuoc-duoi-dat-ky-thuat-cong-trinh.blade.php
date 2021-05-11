@extends('layout.base')
@section('title', 'Thông tin kỹ thuật công trình - Nước dưới đất | Quản lý cấp phép')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_QUAN_LY_CAP_PHEP/css/tnn-quan-ly-cap-phep.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
@endpush

@section('content')
<header>
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-5 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{url('quan-ly-cap-phep')}}" title="Về trang quản lý cấp phép" class="fw-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="fw-bold text-white d-block pl-2 exploit-surfacewater-heading">THÔNG TIN KỸ THUẬT CÔNG TRÌNH NƯỚC DƯỚI ĐẤT</span>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary fw-bold">HỆ THỐNG QUẢN LÝ, GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC</span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 pb-lg-0 px-md-0" id="surfacewater-usage">
        <!-- Khai thac su dung nuoc mat -->
        <div class="exploit-surfacewater mb-2">
          	<p class="col-12 py-1 exploit-surfacewater-title fw-bold mb-2">Thông tin công trình</p>
          	<div class="exploit-surfacewater-content col-12 p-0 mb-2">
				<div class="col-12 d-flex flex-column flex-md-row">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Tên công trình</span>
                        <input type="text" class="col-7 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Ngày cấp</span>
                        <input type="text" class="col-7 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row my-1">
                    <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Đơn vị CP</span>
                        <input type="text" class="col-7 px-1 font-13">
                    </div>
                    <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Thẩm quyền</span>
                        <input type="text" class="col-7 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-2">
                    <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Thời hạn CP</span>
                        <input type="text" class="col-7 px-1 font-13">
                    </div>
                    <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">QĐ tiền CQ</span>
                        <input type="text" class="col-7 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex mb-1">
                    <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded">Xem GP</button>
                    <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded">In GP</button>
                    <button class="px-2 py-1 btn-license border-0 font-13 rounded">Cập nhật GP</button>
                </div>
            </div>
		</div>
        <!-- Ket thuc khai thac su dung nuoc mat -->
        
        <!-- So hieu KT -->
        <div class="construction-info mb-2">
          	<div class="construction-info-content col-12 p-0 my-2">
				<div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Số hiệu KT</span>
                        <input type="text" class="col-7 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Vị trí &nbsp; X</span>
                        <input type="text" class="col-7 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Vị trí &nbsp; Y</span>
                        <input type="text" class="col-7 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-4 font-13 px-0">Tầng chứa nước KT</span>
                        <input type="text" class="col-2 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-4 font-13 px-0">Tổng lượng nước KT</span>
                        <input type="text" class="col-2 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/ngđ)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-4 font-13 px-0">Tổng số giếng KT</span>
                        <input type="text" class="col-2 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/ngđ)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thong tin ve hoat dong khai thac -->
        <div class="exploit-surfacewater mb-2">
          	<p class="col-12 py-1 exploit-surfacewater-title fw-bold mb-2">Khai thác sử dụng nước dưới đất</p>
          	<div class="exploit-surfacewater-content col-12 p-0 mb-3">
				<div class="col-12 d-flex flex-column flex-md-row">
                    <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Lưu lượng KT</span>
                        <input type="text" class="col-3 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/ngđ)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row my-1">
                    <div class="col-sm-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Mực nước giếng khai thác</span>
                        <input type="text" class="col-3 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row my-1">
                    <div class="col-sm-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Mực nước giếng quan trắc</span>
                        <input type="text" class="col-3 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-sm-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Tầng chứa nước khai thác</span>
                        <input type="text" class="col-3 px-1 font-13">
                    </div>
                </div>
            </div>
		</div>
        <!-- Ket thuc thong tin ve hoat dong khai thac -->

        <!-- Khai thac su dung nuoc mat -->
        <div class="exploit-surfacewater mb-2">
          	<p class="col-12 py-1 exploit-surfacewater-title fw-bold mb-2">Thông tin về chất lượng nguồn nước khai thác</p>
          	<div class="exploit-surfacewater-content col-12 p-0 mb-2">
				<div class="col-12 d-flex flex-column flex-md-row">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-4 font-13 px-0">pH</span>
                        <input type="text" class="col-4 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-4 font-12 px-0">Độ cứng tổng số</span>
                        <input type="text" class="col-4 px-1 font-13">&nbsp;<span class="font-13">(mg/L)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row my-1">
                    <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-4 font-13 px-0">TDS</span>
                        <input type="text" class="col-4 px-1 font-13">&nbsp;<span class="font-13">(mg/L)</span>
                    </div>
                    <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-4 font-13 px-0">Amoni</span>
                        <input type="text" class="col-4 px-1 font-13">&nbsp;<span class="font-13">(mg/L)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-2">
                    <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-4 font-13 px-0">Asen</span>
                        <input type="text" class="col-4 px-1 font-13">&nbsp;<span class="font-13">(mg/L)</span>
                    </div>
                    <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-4 font-13 px-0">Sắt</span>
                        <input type="text" class="col-4 px-1 font-13">&nbsp;<span class="font-13">(mg/L)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-2">
                    <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-4 font-13 px-0">Coliform</span>
                        <input type="text" class="col-4 px-1 font-12">&nbsp;<span class="font-12">(CFU/100ml)</span>
                    </div>
                    <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-4 font-13 px-0">E.Coli</span>
                        <input type="text" class="col-4 px-1 font-12">&nbsp;<span class="font-13">(CFU/100ml)</span>
                    </div>
                </div>
            </div>
		</div>
        <!-- Ket thuc khai thac su dung nuoc mat -->

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
                <span class="fw-bold">&nbsp; Lớp bản đồ</span>
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
                <span class="fw-bold">&nbsp; Chú giải</span>
            </div>
        </div>
    </div>
</main>
@endsection
