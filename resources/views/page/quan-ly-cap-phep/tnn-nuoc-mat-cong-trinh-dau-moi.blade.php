@extends('layout.base')
@section('title', 'Thông tin kỹ thuật công trình đầu mối - Nước mặt | Quản lý cấp phép')

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
            <a href="{{route('tao-moi-giay-phep-nuoc-mat')}}" title="Về trang quản lý cấp phép" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2 exploit-surfacewater-heading">QUẢN LÝ CẤP PHÉP / KHAI THÁC SỬ DỤNG NƯỚC MẶT</span>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12  py-1 py-md-0">
            <span class="text-primary font-weight-bold">THÔNG TIN KỸ THUẬT CÔNG TRÌNH ĐẦU MỐI</span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 pb-lg-0 px-md-0" id="surfacewater-usage">
        <!-- Ten cong trinh -->
        <div class="exploit-surfacewater mb-2">
          	<div class="exploit-surfacewater-content col-12 p-0 my-2">
				<div class="col-12 d-flex flex-column flex-md-row">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">Tên công trình</span>
                        <select name="" id="" class="col-7 font-13 form-control-sm cursor-pointer">
                            <option value="" selected>Chọn trạm</option>
                            <option value="">Trạm 1</option>
                            <option value="">Trạm 2</option>
                            <option value="">Trạm 3</option>
                            <option value="">Trạm 4</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">Ký hiệu CT</span>
                        <select name="" id="" class="col-7 font-13 form-control-sm cursor-pointer">
                            <option value="" selected>Chọn trạm</option>
                            <option value="">Trạm 1</option>
                            <option value="">Trạm 2</option>
                            <option value="">Trạm 3</option>
                            <option value="">Trạm 4</option>
                        </select>
                    </div>
                </div>
            </div>
		</div>
        <!-- Ket thuc khai thac su dung nuoc mat -->

        <!-- Dac trung luu vuc -->
        <div class="construction-info mb-2">
          	<p class="col-12 py-1 construction-info-title font-weight-bold mb-2">Đặc trưng lưu vực</p>
          	<div class="construction-info-content col-12 p-0 mb-3">
				<div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">Diện tích</span>
                        <input type="text" required class="col-5 col-md-7 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 ">Q<sub>TK</sub></span>
                        <input type="text" required class="col-5 col-md-5 col-3 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">Q bq năm</span>
                        <input type="text" required class="col-5 col-md-7 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 ">Q<sub>KT</sub></span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Dac trung luu vuc -->
        <div class="construction-info mb-2">
          	<p class="col-12 py-1 construction-info-title font-weight-bold mb-2">Hồ chứa</p>
          	<div class="construction-info-content col-12 p-0 mb-3">
				<div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">MNLKT</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 ">MNLTK</span>
                        <input type="text" required class="col-5 col-md-5 col-3 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">MNDBT</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 ">MNC</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">V<sub>tb</sub></span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(tr m<sup>3</sup>)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 ">V<sub>c</sub></span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">V<sub>hi</sub></span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(tr m<sup>3</sup>)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-12 px-0 ">DT hồ-MNDBT</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(ha)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cong trinh dau moi -->
        <div class="construction-info mb-2">
          	<p class="col-12 py-1 construction-info-title font-weight-bold mb-2">Công trình đầu mối</p>
          	<div class="construction-info-content col-12 p-0 mb-3">
				<div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-12 px-0">CT đỉnh đập</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-12 px-0 ">CD đỉnh đập</span>
                        <input type="text" required class="col-5 col-md-5 col-3 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">Q<sub>x</sub> lũ tk</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 ">Q<sub>x</sub> lũ tk</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">Chế độ KT</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 ">Công suất</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(MW)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0">Q<sub>KT max</sub></span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0 ">Q<sub>xả</sub> TT</span>
                        <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-7 col-md-8 font-13 px-0">Cao độ ngưỡng/chiều rộng 1k_tràn/số k_tràn : </span>
                        <input type="text" required class="col-3 col-md-2 px-1"> (m<sup>3</sup>/ngđ) &nbsp; 
                    </div>
                </div>
            </div>
        </div>

        <!-- Loai nha tram -->
        <div class="col-12 mb-2 p-0 surfacewater-usage py-1">
            <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-5 col-md-4 font-13 px-0 text-purple">Loại trạm</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
                <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                    <span class="col-5 font-12 px-0  text-purple">KT kênh dẫn</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                </div>
            </div>
            <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-5 col-md-4 font-13 px-0 text-purple">KT kênh tháo</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                </div>
                <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                    <span class="col-5 font-12 px-0  text-purple">Quy mô bể hút</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
            </div>
            <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-5 col-md-4 font-13 px-0 text-purple">Quy mô bể xả</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
                <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                    <span class="col-5 font-12 px-0  text-purple">Số máy bơm</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
            </div>
            <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-5 col-md-4 font-13 px-0 text-purple">Loại máy bơm</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
                <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                    <span class="col-5 font-12 px-0  text-purple">CS t_bơm</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/h)</span>
                </div>
            </div>
            <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-5 col-md-4 font-13 px-0 text-purple">Số giờ bơm</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(h)</span>
                </div>
                <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                    <span class="col-5 font-12 px-0  text-purple">Số tổ bơm</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
            </div>
        </div>
        <!-- Ket thuc loai nha tram -->

        <!-- Q nguon KT -->
        <div class="col-12 mb-2 p-0 surfacewater-usage py-1">
            <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-5 col-md-4 font-13 px-0 text-primary">Q<sub>nguồn</sub> KT</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                </div>
                <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                    <span class="col-5 font-12 px-0  text-primary">H<sub>nguồn</sub> KT</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                </div>
            </div>
            <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-5 col-md-4 font-13 px-0 text-primary">QC áp dụng</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
                <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                    <span class="col-5 font-12 px-0  text-primary">Nhiệt độ</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
            </div>
            <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-5 col-md-4 font-13 px-0 text-primary">PH</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
                <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                    <span class="col-5 font-12 px-0  text-primary">COD</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
            </div>
            <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-5 col-md-4 font-13 px-0 text-primary">Amoni</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
                <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                    <span class="col-5 font-12 px-0  text-primary">TSS</span>
                    <input type="text" required class="col-5 col-md-5 px-1 font-13">
                </div>
            </div>
        </div>
        <!-- Ket thuc Q nguon KT -->
        <div class="col-12 d-flex my-3">
            <button class="btn py-1 font-13 font-weigh-bold px-3 btn-success mx-2">XÁC NHẬN</button>
            <a href="{{route('quan-ly-cap-phep')}}" class="btn py-1 font-13 font-weigh-bold  px-5 btn-danger mx-2" type="reset">HỦY</a>
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
