@extends('layout.base')
@section('title', 'Quản lý cấp phép')

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
            <a href="{{route('quan-ly-cap-phep')}}" title="Về trang chủ" id="btn_back_page" class="fw-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="fw-bold text-white d-block pl-2">ĐỀ NGHỊ CẤP PHÉP XẢ NƯỚC THẢI VÀO NGUỒN NƯỚC</span>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary fw-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 map-container px-md-0" id="surfacewater-usage">
        <div class="information-about-license-owner">
            <div class="d-flex">
                <p class="col-8 py-1 information-about-license-owner-title fw-bold mb-2">Tổ chức cá nhân đề nghị cấp phép</p>
            </div>
            <div class="information-about-license-owner-content col-12 p-0 mb-3 pr-3">
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-6 font-13 px-0 fw-bold">Tên Tên tổ chức/CN </span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-6 font-13 px-0 fw-bold">Số giấy ĐKKD/nơi cấp/ngày cấp </span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0 fw-bold">Địa chỉ </span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <div class="col-4 d-flex p-0 mb-1 align-items-center">
                        <span class="col-3 font-13 px-0 fw-bold">ĐT </span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                    <div class="col-4 d-flex p-0 mb-1 align-items-center">
                        <span class="col-3 font-13 px-0 fw-bold">Fax </span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                    <div class="col-4 d-flex p-0 mb-1 align-items-center">
                        <span class="col-3 font-13 px-0 fw-bold">Email </span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="the-reason-for-the-re_issuance-of-the-license">
            <div class="d-flex">
                <p class="col-12 py-1 information-about-license-owner-title fw-bold mb-2">Thông tin về cơ sở nước thải</p>
            </div>
            <div class="pr-3">
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <div class="col-6 d-flex p-0 mb-1 align-items-center">
                        <span class="col-5 font-13 px-0 fw-bold">Tên công trình </span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                    <div class="col-6 d-flex p-0 mb-1 align-items-center">
                        <span class="col-5 font-13 px-0 fw-bold">Ký hiệu CT </span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0 fw-bold">Vị trí công trình xả NT</span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0 fw-bold">Công suất xử lý NT(m3/người đêm)</span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0 fw-bold">Vị trí điểm xả NT</span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0 fw-bold">Năm bắt đầu vận hành</span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <input type="file" name="" id="">
            </div>
        </div>
        <div class="records-and-documents-attached">
            <div class="d-flex">
                <p class="col-12 py-1 information-about-license-owner-title fw-bold mb-2">Nội dung đề nghị cấp phép</p>
            </div>
            <div class="pr-3">
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <div class="col-6 d-flex p-0 mb-1 align-items-center">
                        <span class="col-7 font-13 px-0 fw-bold">Nguồn tiếp nhận </span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                    <div class="col-6 d-flex p-0 mb-1 align-items-center">
                        <span class="col-7 font-13 px-0 fw-bold">Tọa độ vị trí XNT</span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0 fw-bold">Vị trí XNT</span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0 fw-bold">Phương thức XT</span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-4 font-13 px-0 fw-bold">Chế độ xả NT</span>
                    <input type="text" class="w-100 border-0 bg-light" name="" id="">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <div class="col-6 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">Qx TB(m3/người đêm)</span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                    <div class="col-6 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">Qx max(m3/người đêm)</span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <div class="col-6 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">Chất lượng NT</span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                    <div class="col-6 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">Thời gian CP(năm)</span>
                        <input type="text" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="undertaking-of-the-licensee">
            <div class="d-flex">
                <p class="col-12 py-1 information-about-license-owner-title fw-bold mb-2">Giấy tờ nộp kèm theo</p>
            </div>
            <div class="Information-about-license-owner-content col-12 p-0 mb-3 pr-3">
                <div class="d-flex">
                    <div class="col-4 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">Báo cáo/Đề án</span>
                        <input type="file" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                    <div class="col-8 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">Kết quả CLN tại vị trí XT</span>
                        <input type="file" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-4 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">QTVH_HTXLNT</span>
                        <input type="file" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                    <div class="col-8 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">CNL thải trước và sau XL</span>
                        <input type="file" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-4 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">Sơ đồ khu vực XNT</span>
                        <input type="file" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                    <div class="col-8 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">Văn bản ý kiến CĐ</span>
                        <input type="file" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-4 d-flex p-0 mb-1 align-items-center">
                        <span class="col-8 font-13 px-0 fw-bold">Giấy tờ khác</span>
                        <input type="file" class="w-100 border-0 bg-light" name="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="undertaking-of-the-licensee">
            <div class="d-flex">
                <p class="col-12 py-1 information-about-license-owner-title fw-bold mb-2">Cam kết cảu tổ chức/cá nhân đề nghị cấp phếp</p>
            </div>
            <div class="Information-about-license-owner-content col-12 p-0 mb-3 pr-3">
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-9 font-13 px-0 fw-bold">Thông tin và hồ sơ đúng sự thật và hoàn toàn chịu TN</span>
                    <input type="checkbox" name="" id="" class="border-0 bg-light">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-9 font-13 px-0 fw-bold">Chấp hành đúng quy định của GP </span>
                    <input type="checkbox" name="" id="" class="border-0 bg-light">
                </div>
                <div class="col-md-12 col-12 d-flex p-0 mb-1 align-items-center">
                    <span class="col-9 font-13 px-0 fw-bold">Đã gửi một bộ tới STNMT </span>
                    <input type="checkbox" name="" id="" class="border-0 bg-light">
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button class="btn py-1 font-13 font-weigh-bold px-3 btn-success mx-2">GỬI HỒ SƠ</button>
            <button class="btn py-1 font-13 font-weigh-bold px-3 btn-success mx-2" type="reset">NHẬP LẠI</button>
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
</main>
@endsection
