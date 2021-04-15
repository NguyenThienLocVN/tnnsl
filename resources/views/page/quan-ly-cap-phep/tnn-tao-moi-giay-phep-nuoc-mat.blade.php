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
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-5 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{route('quan-ly-cap-phep')}}" title="Về trang chủ" id="btn_back_page" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2">ĐỀ NGHỊ CẤP PHÉP KHAI THÁC SỬ DỤNG NƯỚC MẶT</span>
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
        @if ($errors->any())
            <div class="col-sm-12 p-0">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <span class="text-danger"><p class="m-0">{{ $error }}</p></span>
                    @endforeach
                </div>
            </div>
        @endif
        <form action="{{route('xu-ly-tao-moi-giay-phep-nuoc-mat')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="exploit-surfacewater mb-2">
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Tên tổ chức cá nhân đề nghị cấp phép</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Tên tổ chức </span>
                            <input type="text" name="organization_name" id="organization_name" value="{{old('organization_name')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Số ĐKKD</span>
                            <input type="text" name="business_reg_num" id="business_reg_num" value="{{old('business_reg_num')}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-12 px-0">Nơi cấp ĐKKD</span>
                            <input type="text" name="business_reg_place" id="business_reg_place" value="{{old('business_reg_place')}}" class="col-7 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-12 px-0">Ngày cấp ĐKKD</span>
                            <input type="date" name="business_reg_date" id="business_reg_date" value="{{old('business_reg_date')}}" class="col-7 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-12 px-0">Quyết định TL</span>
                            <input type="text" name="tl_decision" id="tl_decision" value="{{old('tl_decision')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Cơ quan ký </span>
                            <input type="text" name="agency_signed" id="agency_signed" value="{{old('agency_signed')}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-2">
                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Số CMND </span>
                            <input type="text" name="id_card_num" id="id_card_num" value="{{old('id_card_num')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-12 px-0">Nơi cấp CNMD</span>
                            <input type="text" name="id_card_place" id="id_card_place" value="{{old('id_card_place')}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-12 px-0">Ngày cấp CMND </span>
                            <input type="date" name="id_card_date" id="id_card_date" value="{{old('id_card_date')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Fax</span>
                            <input type="text" name="fax" id="fax" value="{{old('fax')}}" class="col-7 col-3 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center justify-content-end justify-content-md-start">
                            <span class="col-md-2 col-5 font-13 px-0">Địa chỉ</span>
                            <input type="text" name="address" id="address" value="{{old('address')}}" class="col-md-10 col-7 px-1 font-13 ml-md-3" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">SĐT </span>
                            <input type="text" name="phone" id="phone" value="{{old('phone')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Email </span>
                            <input type="text" name="email" id="email" value="{{old('email')}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="exploit-surfacewater mb-2">
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Thông tin chung về công trình khai thác, sử dụng nước</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Tên CT </span>
                            <input type="text" name="construction_name" id="construction_name" value="{{old('construction_name')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Loại CT </span>
                            <select name="construction_type" id="construction_type" class="col-7 px-1 font-13" required>
                                <option value="1">Thủy điện</option>
                                <option value="2">Thủy lợi</option>
                                <option value="3">Công trình khác</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center justify-content-end justify-content-md-start">
                            <span class="col-md-2 col-5 font-13 px-0">Phương thức KT</span>
                            <input type="text" name="exploit_method" id="exploit_method" value="{{old('exploit_method')}}" class="col-md-10 col-7 px-1 font-13 ml-md-3" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center justify-content-end justify-content-md-start">
                            <span class="col-md-2 col-5 font-13 px-0">Vị trí CT</span>
                            <input type="text" name="construction_location" id="construction_location" value="{{old('construction_location')}}" class="col-md-10 col-7 px-1 font-13 ml-md-3" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Huyện </span>
                            <select name="district" id="district" class="col-7 px-1 font-13" required>
                                <option value="Yên Châu">Yên Châu</option>
                                <option value="Mộc Châu">Mộc Châu</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Xã </span>
                            <select name="commune" id="commune" class="col-7 px-1 font-13" required>
                                <option value="Xã 1">Yên Châu</option>
                                <option value="Xã 2">Mộc Châu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Hiện trạng CT </span>
                            <input type="text" name="construction_status" id="construction_status" value="{{old('construction_status')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Thời gian VH </span>
                            <input type="text" name="operating_time" id="operating_time" value="{{old('operating_time')}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="exploit-surfacewater mb-2">
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Nội dung đề nghị cấp phép</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-12 px-0">Nguồn nước</span>
                            <input type="text" name="water_source" id="water_source" value="{{old('water_source')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Vị trí lấy nước </span>
                            <input type="text" name="water_location" id="water_location" value="{{old('water_location')}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Mục đích </span>
                            <input type="text" name="purpose_using_water" id="purpose_using_water" value="{{old('purpose_using_water')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Q <span class="font-11">KTSD_SXNN</span> </span>
                            <input type="text" name="q_ktsd_sxnn" id="q_ktsd_sxnn" value="{{old('q_ktsd_sxnn')}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Q turbin </span>
                            <input type="text" name="q_turbin" id="q_turbin" value="{{old('q_turbin')}}" class="col-7 px-1 font-13" required>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-13 px-0">Công suất </span>
                            <input type="text" name="wattage" id="wattage" value="{{old('wattage')}}" class="col-7 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Q_khai thác khác </span>
                            <span class="col-7 font-13 px-0"><input type="text" name="q_kt_khac" id="q_kt_khac" value="{{old('q_kt_khac')}}" class="col-4 px-1 font-13"  required> (m<sup>3</sup>/ngđêm) &nbsp; </span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Chế độ khai thác sử dụng </span>
                            <input type="text" name="exploit_mode" id="exploit_mode" class="col-7 px-1 font-13" value="{{old('exploit_mode')}}"  required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 font-13 px-0">Thời gian đề nghị cấp phép </span>
                            <input type="text" name="license_duration" id="license_duration" class="col-7 px-1 font-13" value="{{old('license_duration')}}" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="exploit-surfacewater mb-2">
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Giấy tờ tài liệu kèm theo</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Đơn xin cấp phép</span>
                            
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="checkbox" name="checkbox_don_xin_cp" id="checkbox_don_xin_cp" class="col-4 px-1 font-13" required></span>
                            <input type="file" name="don_xin_cp" id="don_xin_cp" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Kết quả phân tích CLN</span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="checkbox" name="checkbox_ket_qua_ptcln" id="checkbox_ket_qua_ptcln" class="col-4 px-1 font-13" required></span>
                            <input type="file" name="ket_qua_ptcln" id="ket_qua_ptcln" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Đề án KTSDN </span>
                            
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="checkbox" name="checkbox_de_an_ktsdn" id="checkbox_de_an_ktsdn" class="col-4 px-1 font-13" required></span>
                            <input type="file" name="de_an_ktsdn" id="de_an_ktsdn" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Báo cáo KTSDN </span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <input type="checkbox" name="checkbox_bao_cao_ktsdn" id="checkbox_bao_cao_ktsdn" class="col-4 px-1 font-13" required></span>
                            <input type="file" name="bao_cao_ktsdn" id="bao_cao_ktsdn" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Sơ đồ vị trí công trình KTN</span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="checkbox" name="checkbox_so_do_vtct" id="checkbox_so_do_vtct" class="col-4 px-1 font-13" required></span>
                            <input type="file" name="so_do_vtct" id="so_do_vtct" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Văn bản ý kiến cộng đồng</span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="checkbox" name="checkbox_van_ban_ykcd" id="checkbox_van_ban_ykcd" class="col-4 px-1 font-13" required></span>
                            <input type="file" name="van_ban_ykcd" id="van_ban_ykcd" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Kê khai tính tiền cấp quyền khai thác</span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="checkbox" name="checkbox_ke_khai_ttcqkt" id="checkbox_ke_khai_ttcqkt" class="col-4 px-1 font-13" required></span>
                            <input type="file" name="ke_khai_ttcqkt" id="ke_khai_ttcqkt" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-12 font-13 px-0">Giấy tờ khác</span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="checkbox" name="checkbox_giay_to_khac" id="checkbox_giay_to_khac" class="col-4 px-1 font-13"></span>
                            <input type="file" name="giay_to_khac" id="giay_to_khac" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <input type="text" name="status" value="Chưa duyệt" class="d-none" />
                    <div class="col-12 d-flex my-3">
                        <button type="submit" class="col-3 px-2 py-2 font-weight-bold btn-success border-0 font-13 mr-2 rounded">Lưu</button>
                        <button type="reset" class="col-3 px-2 py-2 font-weight-bold btn-danger border-0 font-13 mr-2 rounded">Nhập lại</button>
                    </div>
                </div>
            </div>
        </form>
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
