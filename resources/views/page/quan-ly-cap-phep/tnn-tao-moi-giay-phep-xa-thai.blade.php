@extends('layout.base')
@section('title', 'Quản lý cấp phép | Tạo mới giấy phép xả thải')

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
            <span class="font-weight-bold text-white d-block pl-2">ĐỀ NGHỊ CẤP PHÉP XẢ THẢI VÀO NGUỒN NƯỚC</span>
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
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">1. Tên tổ chức cá nhân đề nghị cấp phép</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Tên tổ chức </span>
                            <input type="text" name="organization_name" id="organization_name" value="{{old('organization_name')}}" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Số giấy ĐKKD </span>
                            <input type="text" name="dkkd" id="dkkd" value="{{old('dkkd')}}" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 d-flex flex-column flex-md-row p-0 mb-1 align-items-center px-3">
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-3 col-4 font-13 px-0">Nơi cấp</span>
                            <input type="text" class="w-100 px-1 font-13" name="" id="">
                        </div>
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-3 col-4 font-13 px-0">Ngày cấp </span>
                            <input type="text" class="w-100 px-1 font-13" name="" id="">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Địa chỉ </span>
                            <input type="text" name="address" id="address" value="{{old('address')}}" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 d-flex flex-column flex-md-row p-0 mb-1 align-items-center px-3">
                        <div class="col-md-4 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-3 col-4 font-13 px-0">ĐT </span>
                            <input type="text" class="col-md-9 col-8 px-1 font-13" name="" id="">
                        </div>
                        <div class="col-md-4 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-3 col-4 font-13 px-0">Fax </span>
                            <input type="text" class="col-md-9 col-8 px-1 font-13" name="" id="">
                        </div>
                        <div class="col-md-4 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-3 col-4 font-13 px-0">Email </span>
                            <input type="text" class="col-md-9 col-8 px-1 font-13" name="" id="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="exploit-surfacewater mb-2">
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">2. Thông tin về cơ sở nước thải</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-md-12 col-12 d-flex flex-column flex-md-row p-0 mb-1 align-items-center px-3">
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-3 col-4 font-13 px-0">Tên CT </span>
                            <input type="text" class="col-md-9 col-8 px-1 font-13" name="" id="">
                        </div>
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-3 col-4 font-13 px-0">Ký hiệu CT </span>
                            <input type="text" class="col-md-9 col-8 px-1 font-13" name="" id="">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Vị trí CT xả NT </span>
                            <input type="text" name="" id="" value="" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Công suất xử lý NT(m3/ ngày đêm) </span>
                            <input type="text" name="" id="" value="" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Vị trí điểm xả NT </span>
                            <input type="text" name="" id="" value="" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Năm bắt đầu vận hành </span>
                            <input type="text" name="" id="" value="" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <!-- <span class="col-4 font-13 px-0">Năm bắt đầu vận hành </span> -->
                            <input type="file" name="" id="" value="" class="col-12 px-1 font-13" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="exploit-surfacewater mb-2">
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">3. Nội dung đề nghị cấp phép</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-md-12 col-12 d-flex flex-column flex-md-row p-0 mb-1 align-items-center px-3">
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-3 col-4 font-13 px-0">Nơi tiếp nhận</span>
                            <input type="text" class="col-md-9 col-8 px-1 font-13" name="" id="">
                        </div>
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-3 col-4 font-13 px-0">Tọa độ vị trí XNT </span>
                            <input type="text" class="col-md-9 col-8 px-1 font-13" name="" id="">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Vị trí XNT </span>
                            <input type="text" name="" id="" value="" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Phương thức XNT </span>
                            <input type="text" name="" id="" value="" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row pr-md-0">
                        <div class="col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 align-items-center">
                            <span class="col-4 font-13 px-0">Chế độ XNT </span>
                            <input type="text" name="" id="" value="" class="w-100 px-1 font-13" required>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 d-flex flex-column flex-md-row p-0 mb-1 align-items-center px-3">
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-6 col-4 font-13 px-0">Qx TB(m3/ngày đêm)</span>
                            <input type="text" class="col-md-6 col-8 px-1 font-13" name="" id="">
                        </div>
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-6 col-4 font-13 px-0">Qx max(m3/ngày đêm) </span>
                            <input type="text" class="col-md-6 col-8 px-1 font-13" name="" id="">
                        </div>
                    </div>
                    <div class="col-md-12 col-12 d-flex flex-column flex-md-row p-0 mb-1 align-items-center px-3">
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-6 col-4 font-13 px-0">Chất lượng NT</span>
                            <input type="text" class="col-md-6 col-8 px-1 font-13" name="" id="">
                        </div>
                        <div class="col-md-6 col-12 d-flex p-0 mb-1 align-items-center">
                            <span class="col-md-6 col-4 font-13 px-0">Thời gian CP(năm)</span>
                            <input type="text" class="col-md-6 col-8 px-1 font-13" name="" id="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="exploit-surfacewater mb-2">
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">4. Giấy tờ tài liệu kèm theo</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Đơn xin cấp phép</span>
                            <input type="checkbox" name="checkbox_don_xin_cp" id="checkbox_don_xin_cp" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="don_xin_cp" id="don_xin_cp" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Kết quả phân tích CLN</span>
                            <input type="checkbox" name="checkbox_ket_qua_ptcln" id="checkbox_ket_qua_ptcln" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="ket_qua_ptcln" id="ket_qua_ptcln" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Đề án KTSDN </span>
                            
                            <input type="checkbox" name="checkbox_de_an_ktsdn" id="checkbox_de_an_ktsdn" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="de_an_ktsdn" id="de_an_ktsdn" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Báo cáo KTSDN </span>
                            <input type="checkbox" name="checkbox_bao_cao_ktsdn" id="checkbox_bao_cao_ktsdn" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="bao_cao_ktsdn" id="bao_cao_ktsdn" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Sơ đồ vị trí công trình KTN</span>
                            <input type="checkbox" name="checkbox_so_do_vtct" id="checkbox_so_do_vtct" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="so_do_vtct" id="so_do_vtct" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Văn bản ý kiến cộng đồng</span>
                            <input type="checkbox" name="checkbox_van_ban_ykcd" id="checkbox_van_ban_ykcd" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="van_ban_ykcd" id="van_ban_ykcd" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Kê khai tính tiền cấp quyền khai thác</span>
                            <input type="checkbox" name="checkbox_ke_khai_ttcqkt" id="checkbox_ke_khai_ttcqkt" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="ke_khai_ttcqkt" id="ke_khai_ttcqkt" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Giấy tờ khác</span>
                            <input type="checkbox" name="checkbox_giay_to_khac" id="checkbox_giay_to_khac" class="col-4 px-1 font-13"></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="giay_to_khac" id="giay_to_khac" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                </div>
            </div>
            <div class="exploit-surfacewater mb-2">
                <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">5. Cam kết của tổ chức/cá nhân đề nghị CP</p>
                <div class="exploit-surfacewater-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Cam đoan thông tin đúng sự thật</span>
                            <input type="checkbox" name="checkbox_don_xin_cp" id="checkbox_don_xin_cp" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="don_xin_cp" id="don_xin_cp" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Chấp hành đúng nội quy Luật tài nguyên nước</span>
                            <input type="checkbox" name="checkbox_ket_qua_ptcln" id="checkbox_ket_qua_ptcln" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="ket_qua_ptcln" id="ket_qua_ptcln" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row my-1">
                        <div class="col-sm-4 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-8 col-md-12 font-13 px-0">Đã gửi hồ sơ tới Sở TNMT</span>
                            <input type="checkbox" name="checkbox_de_an_ktsdn" id="checkbox_de_an_ktsdn" class="col-4 px-1 font-13" required></span>
                        </div>
                        <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <input type="file" name="de_an_ktsdn" id="de_an_ktsdn" class="col-8 col-md-12 px-1 font-13">
                        </div>
                    </div>
                    <input type="text" name="status" value="Chưa duyệt" class="d-none" />
                    <div class="col-12 d-flex my-3">
                    <button class="btn py-1 font-13 font-weigh-bold px-3 btn-success mx-2">GỬI HỒ SƠ</button>
            <a href="{{route('quan-ly-cap-phep')}}" class="btn py-1 font-13 font-weigh-bold  px-5 btn-danger mx-2" type="reset">HỦY</a>
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
    <script>
        $( document ).ready(function() {
            $("#commune>option").hide();
            $("#district").on('change',function(){
                $("#commune>option").hide();
                $('.'+$(this).val()).show();
                $('select[name="commune"]').val('#commune_begin');
            })
        });
    </script>
</main>
@endsection
