@extends('layout.base')
@section('title', 'Sửa giấy phép | Quản lý cấp phép')

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
            <a href="{{url('/')}}" title="Về trang chủ" id="btn_back_page" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2">QUẢN LÝ CẤP PHÉP</span>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 pb-lg-0 px-md-0" id="surfacewater-usage">
        <div id="overlay"></div>
        <img src="{{asset('public/TNN_TRANG_CHU/image/loading.gif')}}" id="loading-gif-image" class="loading-gif position-absolute" alt="loading" style="display: none;">
        <!-- Khai thac su dung nuoc mat -->
        <div class="exploit-surfacewater mb-2">
            <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Sửa giấy phép KT nước mặt</p>
            @if ($errors->any())
                <div class="col-sm-12 p-0">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                            <span class="text-danger"><p class="m-0">{{ $error }}</p></span>
                        @endforeach
                    </div>
                </div>
            @endif
            <form action="{{route('xu-ly-sua-giay-phep-nuoc-mat', [$construction->id])}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Loại CT <span class="text-danger">*</span></span>
                            <select name="construction_type" id="construction_type" class="font-13 py-1" required>
                                <option value="">Chọn loại công trình</option>
                                <option value="1" {{ ($construction->construction_type == "1") ? "selected" : "" }}>Thủy điện</option>
                                <option value="2" {{ ($construction->construction_type == "2") ? "selected" : "" }}>Thủy lợi</option>
                                <option value="3" {{ ($construction->construction_type == "3") ? "selected" : "" }}>Công trình khác</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Số GP <span class="text-danger">*</span></span>
                            <input type="text" name="license_num" id="license_num" value="{{old('license_num', $construction->license_num)}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Ngày cấp <span class="text-danger">*</span></span>
                            <input type="text" name="license_date" id="license_date" value="{{old('license_date', $construction->license_date)}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Thời hạn <span class="text-danger">*</span></span>
                            <input type="text" name="license_duration" id="license_duration" value="{{old('license_duration', $construction->license_duration)}}" class="col-md-4 col-2 px-1 font-13" required>&nbsp; <span class="font-13">(năm)</span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Thẩm quyền</span>
                            <input type="text" name="license_role" id="license_role" value="{{old('license_role', $construction->license_role)}}" class="col-7 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Đơn vị XCP <span class="text-danger">*</span></span>
                            <input type="text" name="organization_request" id="organization_request" value="{{old('organization_request', $construction->organization_request)}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Cơ quan CP <span class="text-danger">*</span></span>
                            <input type="text" name="organization_authorities" id="organization_authorities" value="{{old('organization_authorities', $construction->organization_authorities)}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-2">
                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Năm XD <span class="text-danger">*</span></span>
                            <input type="text" name="year_built" id="year_built" value="{{old('year_built', $construction->year_built)}}" class="col-md-4 col-2 px-1 font-13" required>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Năm VH <span class="text-danger">*</span></span>
                            <input type="text" name="year_operation" id="year_operation" value="{{old('year_operation', $construction->year_operation)}}" class="col-md-4 col-2 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Tên c/trình <span class="text-danger">*</span></span>
                            <input type="text" name="construction_name" id="construction_name" value="{{old('construction_name', $construction->construction_name)}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Ký hiệu CT</span>
                            <input type="text" name="construction_code" id="construction_code" value="{{old('construction_code', $construction->construction_code)}}" class="col-md-7 col-3 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Mục đích SD<span class="text-danger">*</span></span>
                            <input type="text" name="purpose_using_water" id="purpose_using_water" value="{{old('purpose_using_water', $construction->purpose_using_water)}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Nguồn nước<span class="text-danger">*</span></span>
                            <input type="text" name="water_source" id="water_source" value="{{old('water_source', $construction->water_source)}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Huyện <span class="text-danger">*</span></span>
                            <input type="text" name="district" id="district" value="{{old('district', $construction->district)}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Xã <span class="text-danger">*</span></span>
                            <input type="text" name="commune" id="commune" value="{{old('commune', $construction->commune)}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Vị trí đập &nbsp; X </span>
                            <input type="text" name="long_dams" id="long_dams" value="{{old('long_dams', $construction->long_dams)}}" class="col-7 px-1 font-13">
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Vị trí NM &nbsp; X</span>
                            <input type="text" name="long_factory" id="long_factory" value="{{old('long_factory', $construction->long_factory)}}" class="col-7 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Vị trí đập &nbsp; Y</span>
                            <input type="text" name="lat_dams" id="lat_dams" value="{{old('lat_dams', $construction->lat_dams)}}" class="col-7 px-1 font-13">
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Vị trí NM &nbsp; Y</span>
                            <input type="text" name="lat_factory" id="lat_factory" value="{{old('lat_factory', $construction->lat_factory)}}" class="col-7 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Chế độ KT <span class="text-danger">*</span></span>
                            <input type="text" name="exploit_mode" id="exploit_mode" value="{{old('exploit_mode', $construction->exploit_mode)}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Công suất <span class="text-danger">*</span></span>
                            <input type="text" name="wattage" id="wattage" value="{{old('wattage', $construction->wattage)}}" class="col-3 px-1 font-13" required> &nbsp; <span class="font-13">(MW)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Q<sub>KT max</sub><span class="text-danger">*</span></span>
                            <input type="text" name="q_kt_max" id="q_kt_max" value="{{old('q_kt_max', $construction->q_kt_max)}}" class="col-4 px-1 font-13" required> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Q<sub>KT max mk</sub></span>
                            <input type="text" name="q_kt_max_mk" id="q_kt_max_mk" value="{{old('q_kt_max_mk', $construction->q_kt_max_mk)}}" class="col-4 px-1 font-13"> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Q<sub>xả TT</sub> <span class="text-danger">*</span></span>
                            <input type="text" name="q_tt" id="q_tt" value="{{old('q_tt', $construction->q_tt)}}" class="col-4 px-1 font-13" required> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">DT tưới/tiêu tk</span>
                            <input type="text" name="watering_area" id="watering_area" value="{{old('watering_area', $construction->watering_area)}}" class="col-4 px-1 font-13"> &nbsp; <span class="font-13">(ha)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Q<sub>tưới/tiêu</sub> tk : <input type="text" name="q_tuoi_tieu" id="q_tuoi_tieu" class="col-3 px-1" value="{{old('q_tuoi_tieu', $construction->q_tuoi_tieu)}}"> (m<sup>3</sup>/s) &nbsp; </span readonly>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Q<sub>cấp nước</sub> SH, SX : <input type="text" name="q_cap_nuoc" id="q_cap_nuoc" value="{{old('q_cap_nuoc', $construction->q_cap_nuoc)}}" class="col-3 px-1"> (m<sup>3</sup>/ngđ) &nbsp; </span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">File giấy phép (.pdf) <input type="file" name="file_license" id="file_license" class="px-1" /> </span>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-3">
                        <button type="submit" class="col-3 px-2 py-2 font-weight-bold btn-success border-0 font-13 mr-2 rounded">Lưu</ type="submit">
                        <button type="reset" class="col-3 px-2 py-2 font-weight-bold btn-danger border-0 font-13 mr-2 rounded">Nhập lại</button>
                    </div>
                </div>
            </form>
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
