<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Xét duyệt giấy phép nước mặt | Quản lý cấp phép nước mặt | Giám sát tài nguyên nước Sơn La</title>

    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}" type="text/css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"
        integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ=="
        crossorigin=""></script>
    <link rel="stylesheet" href="{{asset('public/TNN_QUAN_LY_CAP_PHEP/css/tnn-quan-ly-cap-phep.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
</head>

<body class=" p-0" data-new-gr-c-s-check-loaded="14.998.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <header>
        <a href="{{url('/')}}"><img class="w-100 banner-tnmt"
                src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    </header>
    <main>
        <div class="col-12 d-flex p-0 bg-primary">
            <div class="col-6 px-0 d-flex align-items-center">
                <a href="{{route('danh-sach-giay-phep-nuoc-mat')}}" title="Về trang quản lý cấp phép" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0 mr-2"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
                <span class="font-weight-bold text-white"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp; XEM / XÉT DUYỆT CẤP PHÉP NƯỚC MẶT</span>
            </div>
        </div>
        <div class="container-table p-2">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                <h2 class="font-20 font-weight-bold pl-5 py-2">Công trình: {{$construction->construction_name}} - {{$construction->status}}</h2>
                    <div class="col-12 d-flex">
                        <div class="col-6">
                            <div class="exploit-surfacewater mb-2">
                                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Tên tổ chức cá nhân đề nghị cấp phép</p>
                                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                                    <div class="col-12 d-flex flex-column flex-md-row">
                                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-13 px-0">Tên tổ chức </span>
                                            <input type="text" name="organization_name" id="organization_name" value="{{old('organization_name', $construction->organization_name)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Số ĐKKD</span>
                                            <input type="text" name="business_reg_num" id="business_reg_num" value="{{old('business_reg_num', $construction->business_reg_num)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-12 px-0">Nơi cấp ĐKKD</span>
                                            <input type="text" name="business_reg_place" id="business_reg_place" value="{{old('business_reg_place', $construction->business_reg_place)}}" class="col-7 px-1 font-13" readonly></span>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-12 px-0">Ngày cấp ĐKKD</span>
                                            <input type="date" name="business_reg_date" id="business_reg_date" value="{{old('business_reg_date', $construction->business_reg_date)}}" class="col-7 px-1 font-13" readonly >
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-12 px-0">Quyết định TL</span>
                                            <input type="text" name="tl_decision" id="tl_decision" value="{{old('tl_decision', $construction->tl_decision)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Cơ quan ký </span>
                                            <input type="text" name="agency_signed" id="agency_signed" value="{{old('agency_signed', $construction->agency_signed)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-2">
                                        <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-13 px-0">Số CMND </span>
                                            <input type="text" name="id_card_num" id="id_card_num" value="{{old('id_card_num', $construction->id_card_num)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-12 px-0">Nơi cấp CNMD</span>
                                            <input type="text" name="id_card_place" id="id_card_place" value="{{old('id_card_place', $construction->id_card_place)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-12 px-0">Ngày cấp CMND </span>
                                            <input type="date" name="id_card_date" id="id_card_date" value="{{old('id_card_date', $construction->id_card_date)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Fax</span>
                                            <input type="text" name="fax" id="fax" value="{{old('fax', $construction->fax)}}" class="col-md-7 col-3 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-2 font-13 px-0">Địa chỉ</span>&nbsp;&nbsp;&nbsp;
                                            <input type="text" name="address" id="address" value="{{old('address', $construction->address)}}" class="col-10 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
                                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-13 px-0">SĐT </span>
                                            <input type="text" name="phone" id="phone" value="{{old('phone', $construction->phone)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Email </span>
                                            <input type="text" name="email" id="email" value="{{old('email', $construction->business_reg_num)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="exploit-surfacewater mb-2">
                                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Thông tin chung về công trình khai thác, sử dụng nước</p>
                                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                                    <div class="col-12 d-flex flex-column flex-md-row">
                                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-13 px-0">Tên CT </span>
                                            <input type="text" name="construction_name" id="construction_name" value="{{old('construction_name', $construction->construction_name)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Loại CT </span>
                                            <input type="text" name="construction_type" id="construction_type" value="{{old('construction_type', $construction->construction_type)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-2 font-12 px-0">Phương thức KT</span>&nbsp;&nbsp;&nbsp;
                                            <input type="text" name="exploit_method" id="exploit_method" value="{{old('exploit_method', $construction->exploit_method)}}" class="col-10 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-2 font-13 px-0">Vị trí CT</span>&nbsp;&nbsp;&nbsp;
                                            <input type="text" name="construction_location" id="construction_location" value="{{old('construction_location', $construction->construction_location)}}" class="col-10 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-13 px-0">Huyện </span>
                                            <input type="text" class="col-7 px-1 font-13" value="{{old('district', $construction->district)}}">
                                        </div>
                                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Xã </span>
                                            <input type="text" class="col-7 px-1 font-13" value="{{old('commune', $construction->commune)}}">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row">
                                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-13 px-0">Hiện trạng CT </span>
                                            <input type="text" name="construction_status" id="construction_status" value="{{old('construction_status', $construction->construction_status)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Thời gian VH </span>
                                            <input type="text" name="operating_time" id="operating_time" value="{{old('operating_time', $construction->operating_time)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="col-6">
                            <div class="exploit-surfacewater mb-2">
                                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Nội dung đề nghị cấp phép</p>
                                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                                    <div class="col-12 d-flex flex-column flex-md-row">
                                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-12 px-0">Nguồn nước</span>
                                            <input type="text" name="water_source" id="water_source" value="{{old('water_source', $construction->water_source)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Vị trí lấy nước </span>
                                            <input type="text" name="water_location" id="water_location" value="{{old('water_location', $construction->water_location)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-13 px-0">Mục đích </span>
                                            <input type="text" name="purpose_using_water" id="purpose_using_water" value="{{old('purpose_using_water', $construction->purpose_using_water)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Q <span class="font-11">KTSD_SXNN</span> </span>
                                            <input type="text" name="q_ktsd_sxnn" id="q_ktsd_sxnn" value="{{old('q_ktsd_sxnn', $construction->q_ktsd_sxnn)}}" class="col-6 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-5 font-13 px-0">Q turbin </span>
                                            <input type="text" name="q_turbin" id="q_turbin" value="{{old('q_turbin', $construction->q_turbin)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <span class="col-5 font-13 px-0">Công suất </span>
                                            <input type="text" name="wattage" id="wattage" value="{{old('wattage', $construction->wattage)}}" class="col-7 px-1 font-13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Q_khai thác khác <input type="text" name="q_kt_khac" id="q_kt_khac" value="{{old('q_kt_khac', $construction->q_kt_khac)}}" class="col-3 px-1" readonly> (m<sup>3</sup>/ngđêm) &nbsp; </span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Chế độ khai thác sử dụng <input type="text" name="exploit_mode" id="exploit_mode" value="{{old('exploit_mode', $construction->exploit_mode)}}" class="col-3 px-1" readonly> </span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-1 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Thời gian đề nghị cấp phép <input type="text" name="license_duration" id="license_duration" value="{{old('license_duration', $construction->license_duration)}}" class="col-3 px-1"  readonly> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="exploit-surfacewater mb-2">
                                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Giấy tờ tài liệu kèm theo</p>
                                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Đơn xin cấp phép</span>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <input type="checkbox" name="checkbox_don_xin_cp" id="checkbox_don_xin_cp" class="col-4 px-1 font-13" onclick="return false;" {{(!empty($construction->don_xin_cp)) ? "checked" : ""}}></span>
                                            @if(!empty($construction->don_xin_cp))
                                                <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#don_xin_cp_modal">Xem</button>
                                            @else
                                                <span class="text-danger font-13">Chưa có</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Kết quả phân tích CLN</span>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <input type="checkbox" name="checkbox_ket_qua_ptcln" id="checkbox_ket_qua_ptcln" class="col-4 px-1 font-13" onclick="return false;" {{(!empty($construction->ket_qua_ptcln)) ? "checked" : ""}}></span>
                                            @if(!empty($construction->ket_qua_ptcln))
                                                <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#ket_qua_ptcln_modal">Xem</button>
                                            @else
                                                <span class="text-danger font-13">Chưa có</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Đề án KTSDN </span>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <input type="checkbox" name="checkbox_de_an_ktsdn" id="checkbox_de_an_ktsdn" class="col-4 px-1 font-13" onclick="return false;" {{(!empty($construction->de_an_ktsdn)) ? "checked" : ""}}></span>
                                            @if(!empty($construction->de_an_ktsdn))
                                                <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#de_an_ktsdn_modal">Xem</button>
                                            @else
                                                <span class="text-danger font-13">Chưa có</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Báo cáo KTSDN </span>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <input type="checkbox" name="checkbox_bao_cao_ktsdn" id="checkbox_bao_cao_ktsdn" class="col-4 px-1 font-13" onclick="return false;" {{(!empty($construction->bao_cao_ktsdn)) ? "checked" : ""}}></span>
                                            @if(!empty($construction->bao_cao_ktsdn))
                                                <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#bao_cao_ktsdn_modal">Xem</button>
                                            @else
                                                <span class="text-danger font-13">Chưa có</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Sơ đồ vị trí công trình KTN</span>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <input type="checkbox" name="checkbox_so_do_vtct" id="checkbox_so_do_vtct" class="col-4 px-1 font-13" onclick="return false;" {{(!empty($construction->so_do_vtct)) ? "checked" : ""}}></span>
                                            @if(!empty($construction->so_do_vtct))
                                                <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#so_do_vtct_modal">Xem</button>
                                            @else
                                                <span class="text-danger font-13">Chưa có</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Văn bản ý kiến cộng đồng</span>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <input type="checkbox" name="checkbox_van_ban_ykcd" id="checkbox_van_ban_ykcd" class="col-4 px-1 font-13" onclick="return false;" {{(!empty($construction->van_ban_ykcd)) ? "checked" : ""}}></span>
                                            @if(!empty($construction->van_ban_ykcd))
                                                <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#van_ban_ykcd_modal">Xem</button>
                                            @else
                                                <span class="text-danger font-13">Chưa có</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Kê khai tính tiền cấp quyền khai thác</span>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <input type="checkbox" name="checkbox_ke_khai_ttcqkt" id="checkbox_ke_khai_ttcqkt" class="col-4 px-1 font-13" onclick="return false;" {{(!empty($construction->ke_khai_ttcqkt)) ? "checked" : ""}}></span>
                                            @if(!empty($construction->ke_khai_ttcqkt))
                                                <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#ke_khai_ttcqkt_modal">Xem</button>
                                            @else
                                                <span class="text-danger font-13">Chưa có</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                                        <div class="col-sm-5 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                                            <span class="col-12 font-13 px-0">Giấy tờ khác</span>
                                        </div>
                                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                                            <input type="checkbox" name="checkbox_giay_to_khac" id="checkbox_giay_to_khac" class="col-4 px-1 font-13" onclick="return false;" {{(!empty($construction->giay_to_khac)) ? "checked" : ""}}></span>
                                            @if(!empty($construction->giay_to_khac))
                                                <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#giay_to_khac_modal">Xem</button>
                                            @else
                                                <span class="text-danger font-13">Chưa có</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex my-3">
                                        <button type="submit" class="col-3 px-2 py-2 font-weight-bold btn-success border-0 font-13 mr-2 rounded">Lưu</button>
                                        <button type="reset" class="col-3 px-2 py-2 font-weight-bold btn-danger border-0 font-13 mr-2 rounded">Nhập lại</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal don xin cap phep  -->
            <div class="modal fade" id="don_xin_cp_modal" tabindex="-1" role="dialog" aria-labelledby="don_xin_cp_modal_title" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-14 font-weight-bold" id="don_xin_cp_modal_title">Đơn xin cấp phép - {{$construction->construction_name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="licenseFile" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/file/yeu-cau/nuoc-mat/'.$construction->don_xin_cp)}}" style="width:100%;height:500px;"></iframe>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal ket_qua_ptcln  -->
            <div class="modal fade" id="ket_qua_ptcln_modal" tabindex="-1" role="dialog" aria-labelledby="ket_qua_ptcln_modal_title" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-14 font-weight-bold" id="ket_qua_ptcln_modal_title">Kết quả phân tích chất lượng nước - {{$construction->construction_name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="licenseFile" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/file/yeu-cau/nuoc-mat/'.$construction->ket_qua_ptcln)}}" style="width:100%;height:500px;"></iframe>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal de_an_ktsdn  -->
            <div class="modal fade" id="de_an_ktsdn_modal" tabindex="-1" role="dialog" aria-labelledby="de_an_ktsdn_modal_title" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-14 font-weight-bold" id="de_an_ktsdn_modal_title">Đề án khai thác sử dụng nước - {{$construction->construction_name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="licenseFile" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/file/yeu-cau/nuoc-mat/'.$construction->de_an_ktsdn)}}" style="width:100%;height:500px;"></iframe>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal bao_cao_ktsdn  -->
            <div class="modal fade" id="bao_cao_ktsdn_modal" tabindex="-1" role="dialog" aria-labelledby="bao_cao_ktsdn_modal_title" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-14 font-weight-bold" id="bao_cao_ktsdn_modal_title">Báo cáo khai thác sử dụng nước - {{$construction->construction_name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="licenseFile" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/file/yeu-cau/nuoc-mat/'.$construction->bao_cao_ktsdn)}}" style="width:100%;height:500px;"></iframe>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal so_do_vtct  -->
            <div class="modal fade" id="so_do_vtct_modal" tabindex="-1" role="dialog" aria-labelledby="so_do_vtct_modal_title" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-14 font-weight-bold" id="so_do_vtct_modal_title">Sơ đồ vị trí công trình - {{$construction->construction_name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="licenseFile" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/file/yeu-cau/nuoc-mat/'.$construction->so_do_vtct)}}" style="width:100%;height:500px;"></iframe>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal van_ban_ykcd  -->
            <div class="modal fade" id="van_ban_ykcd_modal" tabindex="-1" role="dialog" aria-labelledby="van_ban_ykcd_modal_title" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-14 font-weight-bold" id="van_ban_ykcd_modal_title">Văn bản ý kiến cộng đồng - {{$construction->construction_name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="licenseFile" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/file/yeu-cau/nuoc-mat/'.$construction->van_ban_ykcd)}}" style="width:100%;height:500px;"></iframe>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal ke_khai_ttcqkt  -->
            <div class="modal fade" id="ke_khai_ttcqkt_modal" tabindex="-1" role="dialog" aria-labelledby="ke_khai_ttcqkt_modal_title" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-14 font-weight-bold" id="ke_khai_ttcqkt_modal_title">Kê khai tính tiền cấp quyền khai thác - {{$construction->construction_name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="licenseFile" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/file/yeu-cau/nuoc-mat/'.$construction->ke_khai_ttcqkt)}}" style="width:100%;height:500px;"></iframe>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal giay_to_khac  -->
            <div class="modal fade" id="giay_to_khac_modal" tabindex="-1" role="dialog" aria-labelledby="giay_to_khac_modal_title" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-14 font-weight-bold" id="giay_to_khac_modal_title">Kê khai tính tiền cấp quyền khai thác - {{$construction->construction_name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="licenseFile" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/file/yeu-cau/nuoc-mat/'.$construction->giay_to_khac)}}" style="width:100%;height:500px;"></iframe>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>