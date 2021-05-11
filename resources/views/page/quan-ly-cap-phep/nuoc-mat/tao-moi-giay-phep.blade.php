@extends('layout.base')
@section('title', 'Quản lý cấp phép | Tạo mới giấy phép nước mặt')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_QUAN_LY_CAP_PHEP/css/tnn-quan-ly-cap-phep.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
@endpush

@section('content')
<header class="mb-3 mb-md-0 ">
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-6 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{route('quan-ly-cap-phep')}}" title="Về trang chủ" id="btn_back_page" class="fw-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="fw-bold text-white d-block pl-2">KHAI THÁC SỬ DỤNG NƯỚC MẶT</span>
        </div>
        <div class="bg-lightgray col-lg-6 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary fw-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-6 pb-3 pb-lg-0 px-md-0" id="surfacewater-usage">
        <div id="overlay"></div>
        <img src="{{asset('public/TNN_TRANG_CHU/image/loading.gif')}}" id="loading-gif-image" class="loading-gif position-absolute" alt="loading" style="display: none;">
        <!-- Khai thac su dung nuoc mat -->
        @if ($errors->any())
            <div class="col-sm-12 p-0">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <span class="text-danger"><p class="m-0">{{ $error }}</p></span>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="exploit-surfacewater mb-2">
            <p class="col-12 py-1 px-2 exploit-surfacewater-title fw-bold mb-2">Điền bằng biểu mẫu file Excel</p>
            <input type="hidden" id="url__xu__ly__upload__excel" value="{{route('xu-ly-upload-excel-giay-phep-nuoc-mat')}}">
            <form id="form-upload-excel-surfacewater-license" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="d-flex justify-content-center align-items-center mb-2">
                    <label class="btn btn-default btn-sm center-block btn-file border my-0 mx-2">
                        <i class="fa fa-upload" aria-hidden="true"></i> Upload file
                        <input type="file" name="upload-excel-surfacewater-license" id="upload-excel-surfacewater-license" required accept=".xlsx, .xls, .csv" style="display: none;">
                    </label>
                    <input type="submit" class="btn btn-sm btn-success" value="Xác Nhận">
                </div>
            </form> 
        </div>
        
        <div class="exploit-surfacewater mb-5">
        <form action="{{route('xu-ly-tao-moi-giay-phep-nuoc-mat')}}" class="" method="POST" enctype="multipart/form-data" id="form-create-surfacewater-license">
        {{ csrf_field() }}
            <nav>
                <div class="nav nav-tabs tabs__form" id="nav-tab" role="tablist">
                    <button class="nav-link font-13 col-sm-3 active" id="nav-general_infomation-tab" data-bs-toggle="tab" data-bs-target="#nav-general_infomation" type="button" role="tab" aria-controls="nav-general_infomation" aria-selected="true">1 <br> <hr> Thông tin chung</button>
                    <button class="nav-link font-13 col-sm-3" id="nav-construction_infomation-tab" data-bs-toggle="tab" data-bs-target="#nav-construction_infomation" type="button" role="tab" aria-controls="nav-construction_infomation" aria-selected="false">2 <br> <hr> Thông tin công trình</button>
                    <button class="nav-link font-13 col-sm-3" id="nav-gs_kt_sd-tab" data-bs-toggle="tab" data-bs-target="#nav-gs_kt_sd" type="button" role="tab" aria-controls="nav-gs_kt_sd" aria-selected="false">3 <br> <hr> Giám sát khai thác sử dụng</button>
                    <button class="nav-link font-13 col-sm-3" id="nav-cl_nuoc_mat-tab" data-bs-toggle="tab" data-bs-target="#nav-cl_nuoc_mat" type="button" role="tab" aria-controls="nav-cl_nuoc_mat" aria-selected="false">4 <br> <hr> chất lượng nước mặt</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active py-2" id="nav-general_infomation" role="tabpanel" aria-labelledby="nav-general_infomation-tab">
                    @include('page.quan-ly-cap-phep.nuoc-mat.tao-moi.general_information')
                </div>
                <div class="tab-pane fade" id="nav-construction_infomation" role="tabpanel" aria-labelledby="nav-construction_infomation-tab">
                    @include('page.quan-ly-cap-phep.nuoc-mat.tao-moi.construction_infomation')
                </div>
                <div class="tab-pane fade" id="nav-gs_kt_sd" role="tabpanel" aria-labelledby="nav-gs_kt_sd-tab">
                    @include('page.quan-ly-cap-phep.nuoc-mat.tao-moi.gs_kt_sd')
                </div>
                <div class="tab-pane fade" id="nav-cl_nuoc_mat" role="tabpanel" aria-labelledby="nav-cl_nuoc_mat-tab">
                    @include('page.quan-ly-cap-phep.nuoc-mat.tao-moi.cl_nuoc_mat')
                </div>
            </div>
           <div class="row m-0 p-2 border-top">
            <input type="submit" value="GỬI HỒ SƠ" class="btn btn-sm btn-success col-md-3" disable="true">
                <a href="#" class="btn btn-sm btn-danger col-md-3">HỦY</a>
           </div>
        </form>
    </div>
        
        <!-- Ket thuc khai thac su dung nuoc mat -->
    </div>
    <div class="col-12 col-lg-6 map-container px-md-0">
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
    <script>
        $(".next_tab").click(function(){
            $("#nav-construction_infomation-tab").click();
        });
        $( document ).ready(function() {
            $("#commune>option").hide();
            $("#district").on('change',function(){
                $("#commune>option").hide();
                $('.'+$(this).val()).show();
                $('select[name="commune"]').val('#commune_begin');
            })
        });

        // ket thuc xu ly cong trinh dau moi
        $("form#form-upload-excel-surfacewater-license").submit(function(e) {
            e.preventDefault();    
            var formData = new FormData(this);
            var url_xu_ly_upload_excel = $("#url__xu__ly__upload__excel").val();
            $.ajax({
                url: url_xu_ly_upload_excel,
                type: 'POST',
                data: formData,
                success: function (data) {
                    var excelData = data.data[0][1];
                    														
                    $("#organization_name").val(excelData[1]);
                    $("#business_reg_num").val(excelData[2]);
                    $("#business_reg_place").val(excelData[3]);
                    $("#business_reg_date").val(excelData[4]);
                    $("#tl_decision").val(excelData[5]);
                    $("#agency_signed").val(excelData[6]);
                    $("#id_card_num").val(excelData[7]);
                    $("#id_card_place").val(excelData[8]);
                    $("#id_card_date").val(excelData[9]);
                    $("#fax").val(excelData[10]);
                    $("#address").val(excelData[11]);
                    $("#phone").val(excelData[12]);
                    $("#email").val(excelData[13]);
                    $("#construction_name").val(excelData[14]);
                    $("#construction_code").val(excelData[15]);
                    $("#construction_type").val(excelData[16]);
                    $("#year_built").val(excelData[17]);
                    $("#year_operation").val(excelData[18]);
                    $("#exploit_method").val(excelData[19]);
                    $("#construction_location").val(excelData[20]);
                    $("#district").val(excelData[21]);
                    $("#commune").val(excelData[22]);
                    $("#lat_dams").val(excelData[23]);
                    $("#long_dams").val(excelData[24]);
                    $("#lat_factory").val(excelData[25]);
                    $("#long_factory").val(excelData[26]);
                    $("#construction_status").val(excelData[27]);
                    $("#operating_time").val(excelData[28]);
                    $("#water_source").val(excelData[29]);
                    $("#water_location").val(excelData[30]);
                    $("#purpose_using_water").val(excelData[31]);
                    $("#q_ktsd_sxnn").val(excelData[32]);
                    $("#q_turbin").val(excelData[33]);
                    $("#wattage").val(excelData[34]);
                    $("#q_kt_khac").val(excelData[35]);
                    $("#exploit_mode").val(excelData[36]);
                    $("#license_duration").val(excelData[37]);
                    $("#q_kt_max").val(excelData[38]);
                    $("#q_kt_max_mk").val(excelData[39]);
                    $("#q_xa_tt").val(excelData[40]);
                    $("#dt_tuoi_tieu").val(excelData[41]);
                    $("#q_tuoi_tieu").val(excelData[42]);
                    $("#q_cap_nuoc_shsx").val(excelData[43]);
                    $("#q_cap_nuoc_cn").val(excelData[44]);
                    $("#q_cap_nuoc_kddv").val(excelData[45]);
                    $("#landmark").val(excelData[46]);
                    $("#authorization_money").val(excelData[47]);
                    alert("Thêm thành công, hãy kiểm tra lại dữ liệu trước khi nộp hồ sơ!");
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    </script>
</main>
@endsection
