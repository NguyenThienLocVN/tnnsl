@extends('layout.base')
@section('title', 'Nước dưới đất | Quản lý cấp phép')

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
            <a href="{{url('quan-ly-cap-phep')}}" title="Về trang quản lý cấp phép" class="fw-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="fw-bold text-white d-block pl-2 exploit-surfacewater-heading">QUẢN LÝ CẤP PHÉP / KHAI THÁC SD NƯỚC MẶT</span>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary fw-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 pb-lg-0 px-md-0" id="surfacewater-usage">
        <!-- Khai thac su dung nuoc mat -->
        <div class="exploit-surfacewater mb-2">
            <p class="col-12 py-1 exploit-surfacewater-title fw-bold mb-2">Khai thác sử dụng nước mặt</p>
            <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                <div class="col-12 d-flex flex-column flex-md-row">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Số giấy phép</span>
                        <input type="text" id="license_num" class="col-7 px-1 font-13" value="{{$construction->license_num}}" readonly>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Ngày cấp</span>
                        <input type="text" id="license_date" class="col-7 px-1 font-13" value="{{$construction->license_date}}" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row my-1">
                    <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Thời hạn CP</span>
                        <input type="text" id="license_duration" class="col-md-4 col-2 px-1 font-13" value="{{$construction->license_duration}}" readonly>&nbsp; <span class="font-13">(năm)</span readonly>
                    </div>
                    <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Thẩm quyền</span>
                        <input type="text" id="license_role" class="col-7 px-1 font-13" value="{{$construction->license_role}}" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Đơn vị XCP</span>
                        <input type="text" id="organization_request" class="col-7 px-1 font-13" value="{{$construction->organization_request}}" readonly>
                    </div>
                    <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Cơ quan CP</span>
                        <input type="text" id="organization_authorities" class="col-7 px-1 font-13" value="{{$construction->organization_authorities}}" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-2">
                    <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Năm XD</span>
                        <input type="text" id="year_built" class="col-md-4 col-2 px-1 font-13" value="{{$construction->year_built}}" readonly>
                    </div>
                    <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Năm VH</span>
                        <input type="text" id="year_operation" class="col-md-4 col-2 px-1 font-13" value="{{$construction->year_operation}}" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex mb-1">
                    <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#licenseFileModal">Xem GP</button>
                    <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-print-license">In GP</button>
                    <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-edit-license">Cập nhật GP</button>
                </div>
            </div>
        </div>
        <!-- Ket thuc khai thac su dung nuoc mat -->

        <!-- Thong tin cong trinh -->
        <div class="construction-info mb-2">
            <p class="col-12 py-1 construction-info-title fw-bold mb-2">Thông tin công trình</p>
            <div class="construction-info-content col-12 p-0 mb-3">
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Tên công trình</span>
                        <input type="text" id="construction_name" class="col-7 px-1 font-13" value="{{$construction->construction_name}}" readonly>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Ký hiệu CT</span>
                        <input type="text" id="construction_code" class="col-md-7 col-3 px-1 font-13" value="{{$construction->construction_code}}" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Mục đích SDN</span>
                        <input type="text" id="purpose_using_water" class="col-7 px-1 font-13" value="{{$construction->purpose_using_water}}" readonly>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Nguồn nước</span>
                        <input type="text" id="water_source" class="col-7 px-1 font-13" value="{{$construction->water_source}}" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Huyện</span>
                        <input type="text" id="district" class="col-7 px-1 font-13" value="{{$construction->district}}" readonly>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Xã</span>
                        <input type="text" id="commune" class="col-7 px-1 font-13" value="{{$construction->commune}}" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Vị trí đập &nbsp; X </span>
                        <input type="text" id="long_dams" class="col-7 px-1 font-13" value="{{$construction->kinh_do_dap}}" readonly>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Vị trí NM &nbsp; X</span>
                        <input type="text" id="long_factory" class="col-7 px-1 font-13" value="{{$construction->kinh_do_nha_may}}" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Vị trí đập &nbsp; Y</span>
                        <input type="text" id="lat_dams" class="col-7 px-1 font-13" value="{{$construction->vi_do_dap}}" readonly>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Vị trí NM &nbsp; Y</span>
                        <input type="text" id="lat_factory" class="col-7 px-1 font-13" value="{{$construction->vi_do_dap}}" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Chế độ KT</span>
                        <input type="text" id="exploit_mode" class="col-7 px-1 font-13" value="{{$construction->exploit_mode}}" readonly>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Công suất</span>
                        <input type="text" id="wattage" class="col-3 px-1 font-13" value="{{$construction->wattage}}" readonly> &nbsp; <span class="font-13">(MW)</span readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Q<sub>KT max<sub></span>
                        <input type="text" id="q_kt_max" class="col-4 px-1 font-13" value="{{$construction->q_kt_max}}" readonly> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span readonly>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Q<sub>KT max mk<sub></span>
                        <input type="text" id="q_kt_max_mk" class="col-4 px-1 font-13" value="{{$construction->q_kt_max_mk}}" readonly> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Q<sub>xả<sub> TT</span>
                        <input type="text" id="q_tt" class="col-4 px-1 font-13" value="{{$construction->q_tt}}" readonly> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span readonly>
                    </div>
                    @if($construction->construction_type != 1)
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">DT tưới/tiêu tk</span>
                        <input type="text" id="watering_area" class="col-4 px-1 font-13" value="{{$construction->watering_area}}" readonly> &nbsp; <span class="font-13">(ha)</span readonly>
                    </div>
                    @endif
                </div>
                @if($construction->construction_type != 1)
                <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 font-13 px-0">Q<sub>tưới/tiêu</sub> tk </span>
                        <input type="text" id="q_tt" class="col-4 px-1 font-13" value="{{$construction->q_tt}}" readonly> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span readonly>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-13 px-0">Q<sub>cấp nước</sub> SH, SX </span>
                        <input type="text" id="watering_area" class="col-4 px-1 font-13" value="{{$construction->watering_area}}" readonly> &nbsp; <span class="font-13">(m<sup>3</sup>/ngđ) &nbsp;</span readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-12 font-13 px-0">Q<sub>cấp nước</sub> CN : <input type="text" id="q_cap_nuoc" class="col-3 px-1" value="{{$construction->q_cap_nuoc}}" readonly> (m<sup>3</sup>/ngđ) &nbsp; </span readonly>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1">
                    <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                        <span class="col-12 font-13 px-0">Q<sub>cấp nước</sub> KDDV : <input type="text" id="q_cap_nuoc" class="col-3 px-1" value="{{$construction->q_cap_nuoc}}" readonly> (m<sup>3</sup>/ngđ) &nbsp; </span readonly>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- Thong tin khac -->
        <div class="surfacewater-usage mb-2">
            <p class="col-12 py-1 surfacewater-usage-title fw-bold mb-2">Thông tin khác</p>
            <div class="surfacewater-usage-content col-12 pb-3 ">
                <div class="col-12 d-flex mb-1 p-0">
                    <div class="col-md-9 col-12 d-flex align-items-center p-0">
                        <span class="col-5 font-13 px-0">Cắm mốc HLBVHC</span>
                        <input type="text" id="landmark" class="col-7 px-1 font-13" readonly>
                    </div>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-md-9 col-12 d-flex align-items-center p-0">
                        <span class="col-5 font-13 px-0">Tiền cấp quyền</span>
                        <input type="text" id="authorization_money" class="col-7 px-1 font-13" readonly>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ket thuc thong tin khac -->

        <!-- Quan trac tai nguyen nuoc mat -->
        <div class="surfacewater-usage mb-2">
            <p class="col-12 py-1 surfacewater-usage-title fw-bold mb-2">Quan trắc tài nguyên nước mặt</p>
            <div class="surfacewater-usage-content col-12 p-0 px-0 mb-3">
                <div class="col-12 d-flex mb-1">
                    <div class="col-10 col-md-8 d-flex pl-0 align-items-center">
                        <span class="col-5 font-13 px-0">Trạm quan trắc</span>
                        <select name="" id="" class="col-md-7 font-13 p-0 form-control-sm cursor-pointer">
                            <option value="" selected>Chọn trạm</option>
                            <option value="">Trạm 1</option>
                            <option value="">Trạm 2</option>
                            <option value="">Trạm 3</option>
                            <option value="">Trạm 4</option>
                        </select>
                    </div>
                    <button class="col-2 px-2 py-1 btn-license border-0 font-13 mr-2 rounded">Xem</button>
                </div>
                <div class="col-12 d-flex">
                    <div class="col-10 col-md-8 d-flex pl-0 align-items-center">
                        <span class="col-5 font-13 px-0">Camera</span>
                        <select name="" id="" class="col-md-7 font-13 p-0 form-control-sm cursor-pointer">
                            <option value="" selected>Chọn trạm</option>
                            <option value="">Trạm 1</option>
                            <option value="">Trạm 2</option>
                            <option value="">Trạm 3</option>
                            <option value="">Trạm 4</option>
                        </select>
                    </div>
                    <button class="col-2 px-2 py-1 btn-license border-0 font-13 mr-2 rounded">Xem</button>
                </div>
            </div>
        </div>
        <!-- Ket thuc quan trac tai nguyen nuoc mat -->

        <!-- Thong tin ky thuat cong trinh -->
        <div class="col-12 d-flex flex-column flex-md-row mb-1 p-0 surfacewater-usage">
            <div class="col-md-12 col-12 d-flex pl-0 pr-0 mb-md-0 align-items-center">
                <span class="col-12 py-2 fw-bold">Thông tin kỹ thuật công trình đầu mối &nbsp; <a href="{{route('nuoc-mat-cong-trinh-dau-moi')}}" class="col-2 px-2 py-1 btn btn-license border-0 font-13 mr-2 rounded text-center">Xem</a> </span>
            </div>
        </div>
        <!-- Ket thuc thong tin ky thuat cong trinh -->

        <!-- Modal -->
        <div class="modal fade" id="licenseFileModal" tabindex="-1" role="dialog" aria-labelledby="licenseFileLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-15 fw-bold" id="licenseFileLabel">{{$construction->construction_name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="licenseFile" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/file/giay-phep/nuoc-mat/'.$construction->file_license)}}" style="width:100%;height:500px;"></iframe>
                </div>
                </div>
            </div>
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
    <textarea id="surfaceWaterJson" class="d-none">{!! $surfaceWaterJson !!}</textarea>
</main>

<script>
    $(document).ready(function () {
        document.getElementById('btn-print-license').addEventListener('click', function(){
            document.getElementById("licenseFile").contentWindow.print();
        })

        // Click to show popup on the map
        function onEachFeature(feature, layer) {
        if (feature.properties && feature.properties.hoverContent) {
            layer.on('click', function() { layer.bindPopup(feature.properties.detailContent, {closeOnClick: true, autoClose: false}).openPopup()});
            layer.on('mouseover', function() { layer.bindPopup(feature.properties.hoverContent).openPopup()});
        }
        }

        // Get all surfaceWater location and display as icon on map
        var surfaceWaterLocations = JSON.parse(document.getElementById('surfaceWaterJson').value);
        var surfaceWaterIcon = new L.Icon({
        iconUrl: window.location.origin+'/public/TNN_QUAN_LY_CAP_PHEP/image/dams-icon.jpg',
        iconRetinaUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-icon-2x.png',
        iconSize:    [30, 30],
        iconAnchor:  [12, 41],
        popupAnchor: [1, -34],
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        shadowSize:  [30, 15]
        });

        var myLayer = L.geoJson(surfaceWaterLocations, {
        onEachFeature: onEachFeature,
        pointToLayer: function(feature, latlng) {
            return L.marker(latlng, {
            icon: surfaceWaterIcon
            });
        }
        }).addTo(map);
    });
</script>
@endsection