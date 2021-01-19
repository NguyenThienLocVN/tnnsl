@extends('layout.base')
@section('title', 'Quản lý cấp phép')

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
            <a href="{{url('/')}}" title="Về trang chủ" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2">QUẢN LÝ CẤP PHÉP</span>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 pb-lg-0 px-md-0" id="surfacewater-usage">
        <!-- Khai thac su dung nuoc mat -->
        <div class="surfacewater-usage pb-2 mb-1">
          	<p class="col-12 py-1 surfacewater-usage-title font-weight-bold mb-2">Khai thác sử dụng nước mặt</p>
          	<div class="surfacewater-usage-content col-12 d-flex p-0 mb-3">
				<div class="col-4 surfacewater-usage-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Thủy điện</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">10</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">30</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_HETHONGGIAMSAT.png')}}" alt="ANH_HETHONGGIAMSAT">
                    </div>
                </div>
                <div class="col-4 surfacewater-usage-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Thủy lợi</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">10</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">30</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_THUYLOI.png')}}" alt="ANH_THUYLOI">
                    </div>
                </div>
                <div class="col-4 surfacewater-usage-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Cống / Trạm bơm</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">10</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">30</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_THUYLOI.png')}}" alt="ANH_THUYLOI">
                    </div>
                </div>
            </div>
            <div class="surfacewater-usage-filter">
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Tên công trình:</span>
                        <select name="construction-name" id="construction-name" class="col-7 p-0 font-13">
                            <option value="">Chọn công trình</option>
                            <option value="">Công trình A</option>
                            <option value="">Công trình B</option>
                        </select>
                    </div>
                    <a href="{{route('quan-ly-cap-phep-nuoc-mat')}}" class="col-2 p-0 px-lg2 mr-2 btn-primary font-13 text-center rounded" >Xem</a>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Số giấy phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập số giấy phép..">
                    </div>
                    <button class="col-2 p-0 px-lg2 mr-2 btn-primary font-13" >Y/c kết nối</button>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Cơ quan cấp phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập cơ quan cấp phép..">
                    </div>
                </div>
            </div>
		</div>
        <!-- Ket thuc khai thac su dung nuoc mat -->
        
        <!-- Xa thai vao nguon nuoc -->
        <div class="discharge-water pb-2 mb-1">
          	<p class="col-12 py-1 discharge-water-title font-weight-bold mb-2">Xả thải vào nguồn nước</p>
          	<div class="discharge-water-content col-12 d-flex p-0 mb-3">
				<div class="col-4 discharge-water-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Hộ gia đình</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">10</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">30</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_HOGIADINH.png')}}" alt="ANH_HOGIADINH">
                    </div>
                </div>
                <div class="col-4 discharge-water-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">CSSX</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">10</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">30</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_HOKINHDOANH.png')}}" alt="ANH_HOKINHDOANH">
                    </div>
                </div>
                <div class="col-4 discharge-water-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Y tế</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">10</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">30</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_YTE.png')}}" alt="ANH_YTE">
                    </div>
                </div>
            </div>
            <div class="discharge-water-filter">
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Tên công trình:</span>
                        <select name="construction-name" id="construction-name" class="col-7 px-1 font-13">
                            <option value="">Chọn công trình</option>
                            <option value="">Công trình A</option>
                            <option value="">Công trình B</option>
                        </select>
                    </div>
                    <button class="col-2 p-0 px-lg2 mr-2 btn-primary" >Xem</button>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Số giấy phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập số giấy phép..">
                    </div>
                    <button class="col-2 p-0 px-lg2 mr-2 btn-primary font-13" >Y/c kết nối</button>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Cơ quan cấp phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập cơ quan cấp phép..">
                    </div>
                </div>
            </div>
		</div>
        <!-- Ket thuc xa thai vao nguon nuoc -->

        <!-- Khai thac su dung nuoc duoi dat -->
        <div class="discharge-water pb-2">
          	<p class="col-12 py-1 discharge-water-title font-weight-bold mb-2">Khai thác sử dụng nước dưới đất</p>
          	<div class="discharge-water-content col-12 d-flex p-0 mb-3">
				<div class="col-4 discharge-water-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Giếng khoan</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">10</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">30</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_GIENGKHOAN.png')}}" alt="ANH_GIENGKHOAN">
                    </div>
                </div>
                <div class="col-4 discharge-water-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Nước mó/huổi</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">10</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">30</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_NUOCMOHUOI.png')}}" alt="ANH_NUOCMOHUOI">
                    </div>
                </div>
                <div class="col-4 discharge-water-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Nước tập trung</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">10</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">30</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_NUOCTAPTRUNG.png')}}" alt="ANH_NUOCTAPTRUNG">
                    </div>
                </div>
            </div>
            <div class="discharge-water-filter">
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Tên công trình:</span>
                        <select name="construction-name" id="construction-name" class="col-7 px-1 font-13">
                            <option value="">Chọn công trình</option>
                            <option value="">Công trình A</option>
                            <option value="">Công trình B</option>
                        </select>
                    </div>
                    <a href="{{route('quan-ly-cap-phep-nuoc-duoi-dat')}}" class="col-2 p-0 px-lg2 mr-2 btn-primary font-13 text-center rounded" >Xem</a>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Số giấy phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập số giấy phép..">
                    </div>
                    <button class="col-2 p-0 px-lg2 mr-2 btn-primary font-13" >Y/c kết nối</button>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Cơ quan cấp phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập cơ quan cấp phép..">
                    </div>
                </div>
            </div>
		</div>
        <!-- Ket thuc su dung nuoc duoi dat -->
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