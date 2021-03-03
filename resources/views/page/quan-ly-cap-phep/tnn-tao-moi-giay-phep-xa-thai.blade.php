@extends('layout.base')
@section('title', 'Xả thải vào nguồn nước | Quản lý cấp phép')

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
            <a href="{{url('quan-ly-cap-phep')}}" title="Về trang quản lý cấp phép" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2 exploit-surfacewater-heading">QUẢN LÝ CẤP PHÉP XẢ THẢI VÀO NGUỒN NƯỚC</span>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 px-md-0" id="wastewater-wrap">
        @if ($errors->any())
            <div class="col-sm-12 p-0">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <span class="text-danger"><p class="m-0">{{ $error }}</p></span>
                    @endforeach
                </div>
            </div>
        @endif
        <!-- Khai thac su dung nuoc mat -->
        <form action="{{route('xu-ly-tao-moi-giay-phep-xa-thai')}}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="mb-2">
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Tạo mới giấy phép xả nước thải vào nguồn nước</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Số giấy phép</span>
                            <input type="text" class="col-7 px-1 font-13" name="license_num" value="{{old('license_num')}}" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Ngày cấp</span>
                            <input type="text" class="col-7 px-1 font-13" name="license_date" value="{{old('license_date')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Thời hạn CP</span>
                            <input type="text" class="col-7 px-1 font-13" name="license_duration" value="{{old('license_duration')}}" required>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Thẩm quyền</span>
                            <input type="text" class="col-7 px-1 font-13" name="license_role" value="{{old('license_role')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Đơn vị XCP</span>
                            <input type="text" class="col-7 px-1 font-13" name="organization_request" value="{{old('organization_request')}}" required>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Cơ quan CP</span>
                            <input type="text" class="col-7 px-1 font-13" name="organization_authorities" value="{{old('organization_authorities')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-2">
                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Loại hình</span>
                            <input type="text" class="col-md-4 col-2 px-1 font-13" name="construction_type" value="{{old('construction_type')}}" required>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Năm VH</span>
                            <input type="text" class="col-md-4 col-2 px-1 font-13" name="year_operation" value="{{old('year_operation')}}" required>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ket thuc khai thac su dung nuoc mat -->

            <!-- Thong tin cong trinh -->
            <div class="mb-2">
                <div class="construction-info-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Tên công trình</span>
                            <input type="text" class="col-7 px-1 font-13" name="construction_name" value="{{old('construction_name')}}" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Ký hiệu CT</span>
                            <input type="text" class="col-md-7 col-3 px-1 font-13" name="construction_code" value="{{old('construction_code')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-4 font-13 px-0">Vị trí công trình xả NT</span>
                            <input type="text" class="col-6 px-1 font-13" name="construction_location" value="{{old('construction_location')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-4 font-13 px-0">Công suất xử lý NT</span>
                            <input type="text" class="col-3 px-1 font-13" name="wattage" value="{{old('wattage')}}" required>&nbsp; <span class="font-13">(m<sup>3</sup>/ng đêm)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-4 font-13 px-0">Vị trí điểm xả NT</span>
                            <input type="text" class="col-6 px-1 font-13" name="point_location" value="{{old('point_location')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Vị trí đập &nbsp; X </span>
                            <input type="text" class="col-7 px-1 font-13" name="longitude" value="{{old('longitude')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Vị trí đập &nbsp; Y</span>
                            <input type="text" class="col-7 px-1 font-13" name="latitude" value="{{old('latitude')}}" required>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Thong tin khac -->
            <div class="mb-2">
                <div class="surfacewater-usage-content col-12 pb-3 ">
                    <div class="col-12 d-flex mb-1 p-0">
                        <div class="col-md-9 col-12 d-flex align-items-center p-0">
                            <span class="col-5 font-13 px-0">Nguồn tiếp nhận</span>
                            <input type="text" class="col-7 px-1 font-13" name="water_resource" value="{{old('water_resource')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex p-0">
                        <div class="col-md-9 col-12 d-flex align-items-center p-0">
                            <span class="col-5 font-13 px-0">Mục đích sử dụng</span>
                            <input type="text" class="col-7 px-1 font-13" name="purpose_using" value="{{old('purpose_using')}}" required>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-7 font-13 px-0">Quy chuẩn áp dụng </span>
                        <input type="text" class="col-6 px-1 font-13" name="receive_water_standard" value="{{old('receive_water_standard')}}" required>
                    </div>
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0 text-center">pH</span>
                        <input type="text" class="col-md-7 col-3 px-1 font-13" name="ph_receive" value="{{old('ph_receive')}}" required>
                    </div>
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0 text-center">DO</span>
                        <input type="text" class="col-md-7 col-3 px-1 font-13" name="DO" value="{{old('DO')}}" required>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row">
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 align-items-center">
                        <span class="col-5 font-13 px-0">TSS</span>
                        <input type="text" class="col-md-6 col-3 px-1 font-13" name="TSS" value="{{old('TSS')}}" required>
                    </div>
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 pl-md-2 align-items-center">
                        <span class="col-5 font-12 px-0 text-center">N-NO2-</span>
                        <input type="text" class="col-md-7 col-3 px-1 font-13" name="NNO2" value="{{old('NNO2')}}" required>
                    </div>
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-6 font-12 px-0 text-center">P-P043-</span>
                        <input type="text" class="col-md-7 col-3 px-1 font-13" name="PPO43" value="{{old('PPO43')}}" required>
                    </div>
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0 text-center">Sắt</span>
                        <input type="text" class="col-md-7 col-3 px-1 font-13" name="iron" value="{{old('iron')}}" required>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 align-items-center">
                        <span class="col-5 font-13 px-0">N-NO3-</span>
                        <input type="text" class="col-md-6 col-3 px-1 font-13" name="NNO3" value="{{old('NNO3')}}" required>
                    </div>
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 pl-md-2 align-items-center">
                        <span class="col-5 font-12 px-0 text-center">N-NH4+</span>
                        <input type="text" class="col-md-7 col-3 px-1 font-13" name="NNH4" value="{{old('NNH4')}}" required>
                    </div>
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-6 font-12 px-0 text-center">Coliforms</span>
                        <input type="text" class="col-md-7 col-3 px-1 font-13" name="coliforms" value="{{old('coliforms')}}" required>
                    </div>
                    <div class="col-md-3 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0 text-center">BOD5</span>
                        <input type="text" class="col-md-7 col-3 px-1 font-13" name="BOD5" value="{{old('BOD5')}}" required>
                    </div>
                </div>
            </div>

            <div class="pb-2 mb-1">
                <div class="surfacewater-usage-filter">
                    <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                        <div class="col-8 d-flex pl-0">
                            <span class="col-6 font-13 px-0">Loại hình nước thải</span>
                            <input type="text" class="col-7 px-1 font-13" name="wastewater_type" value="{{old('wastewater_type')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex pr-0 justify-content-between align-items-center">
                        <div class="col-8 d-flex pl-0">
                            <span class="col-6 font-13 px-0">Lưu lượng NT lớn nhất</span>
                            <input type="text" class="col-7 px-1 font-13" name="wastewater_max_flow" value="{{old('wastewater_max_flow')}}" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                        <div class="col-8 d-flex pl-0">
                            <span class="col-6 font-13 px-0">Quy chuẩn áp dụng</span>
                            <input type="text" class="col-7 px-1 font-13" name="wastewater_standard" value="{{old('wastewater_standard')}}" required>
                        </div>
                    </div>
                    <div class="col-8 d-flex pr-0 justify-content-between align-items-center my-1">
                        <div class="col-6 d-flex pl-0 align-items-center">
                            <span class="col-5 font-13 px-0 text-center">pH</span>
                            <input type="text" class="col-7 px-1 font-13" name="ph_wastewater" value="{{old('ph_wastewater')}}" required>
                        </div>
                        <div class="col-6 d-flex pl-0 align-items-center">
                            <span class="col-5 font-13 px-0 text-center">TDS</span>
                            <input type="text" class="col-7 px-1 font-13" name="TDS" value="{{old('TDS')}}" required>
                        </div>
                    </div>
                    <div class="col-8 d-flex pr-0 justify-content-between align-items-center my-1">
                        <div class="col-6 d-flex pl-0 align-items-center">
                            <span class="col-5 font-13 px-0">Nhiệt độ</span>
                            <input type="text" class="col-7 px-1 font-13" name="temperature" value="{{old('temperature')}}" required>
                        </div>
                        <div class="col-6 d-flex pl-0 align-items-center">
                            <span class="col-5 font-13 px-0 text-center">Amoni</span>
                            <input type="text" class="col-7 px-1 font-13" name="amoni" value="{{old('amoni')}}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex flex-column flex-md-row mb-1">
                <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                    <span class="col-12 font-13 px-0">File giấy phép (.pdf) <input type="file" name="file_license" id="file_license" class="px-1" /> </span>
                </div>
            </div>

            <div class="col-12 d-flex my-3">
                <button type="submit" class="col-3 px-2 py-2 font-weight-bold btn-success border-0 font-13 mr-2 rounded">Lưu<!-- type="submit"-->
                </button><button type="reset" class="col-3 px-2 py-2 font-weight-bold btn-danger border-0 font-13 mr-2 rounded">Nhập lại</button>
            </div>
        </form>
	</div>
    <!-- Ket thuc thong tin khac -->

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