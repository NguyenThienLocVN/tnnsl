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
        <div class="surfacewater-usage pb-2 mb-1">
          	<p class="col-12 py-1 surfacewater-usage-title font-weight-bold mb-2">Khai thác sử dụng nước mặt</p>
            @if(Session::has('success'))
                <div class="alert alert-success mx-3">
                    {{Session::get('success')}}
                </div>
            @endif
          	<div class="surfacewater-usage-content col-12 d-flex p-0 mb-3">
				<div class="col-4 surfacewater-usage-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Thủy điện</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">{{ ($numHydroConstruction > 10) ? $numHydroConstruction : "0".$numHydroConstruction }}</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">{{ ($allHydroConstruction > 10) ? $allHydroConstruction : "0".$allHydroConstruction }}</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_HETHONGGIAMSAT.png')}}" alt="ANH_HETHONGGIAMSAT">
                    </div>
                </div>
                <div class="col-4 surfacewater-usage-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Thủy lợi</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">{{ ($numIrrigationConstruction > 10) ? $numIrrigationConstruction : "0".$numIrrigationConstruction }}</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">{{ ($numConstruction > 10) ? $numConstruction : "0".$numConstruction }}</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_THUYLOI.png')}}" alt="ANH_THUYLOI">
                    </div>
                </div>
                <div class="col-4 surfacewater-usage-item pl-0 text-center">
                    <p class="text-primary font-weight-bold mb-1">Công trình khác</p>
                    <div class="col-12 d-flex">
                        <div class="col-6 p-0">
                            <span id="dams-num" class="text-danger font-weight-bold position-absolute">{{ ($numPumpConstruction > 10) ? $numPumpConstruction : "0".$numPumpConstruction }}</span>
                            <span id="slash" class="text-danger font-weight-bold position-absolute">/</span>
                            <span id="total-dams" class="text-danger font-weight-bold position-absolute">{{ ($numConstruction > 10) ? $numConstruction : "0".$numConstruction }}</span>
                        </div>
                        <img class="col-6 p-0 d-none d-md-block" src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/ANH_THUYLOI.png')}}" alt="ANH_THUYLOI">
                    </div>
                </div>
            </div>
            <div class="surfacewater-usage-filter">
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Tên công trình:</span>
                        <div class="col-7 p-0">
                            <input type="text" name="construction-name" id="construction-name" class="col-12 px-1 font-13" placeholder="Tìm tên công trình..">
                            <ul class="px-0 position-absolute list-construction" id="list-construction">
                                <li class="py-1 px-1 font-13 bg-primary text-white" data-id="view-all">XEM TẤT CẢ</li>
                                @foreach($constructions as $cons)
                                    <li class="py-1 px-1 font-13" data-id="{{$cons->id}}">{{ $cons->construction_name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <button title="Chọn tên công trình để xem thông tin" disabled="true" class="col-2 p-0 px-lg2 mr-2 btn-primary font-13 text-center rounded" id="view-surfacewater">Xem GP</button>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Số giấy phép:</span>
                        <input type="text" class="col-7 px-1 font-13" id="license_num" placeholder="Nhập số giấy phép.." readonly>
                    </div>
                    <a href="{{route('tao-moi-giay-phep-nuoc-mat')}}" title="Tạo mới giấy phép" class="col-2 p-1 px-lg2 mr-2 btn-primary font-13 text-center rounded text-white">Cấp mới</a>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Cơ quan cấp phép:</span>
                        <input type="text" class="col-7 px-1 font-13" id="organization_authorities" placeholder="Nhập cơ quan cấp phép.." readonly>
                    </div>
                    <a href="{{route('de-nghi-gia-han-dieu-chinh-giay-phep-khai-thac-su-dung-nuoc-mat')}}" title="Điều chỉnh GP" class="col-2 p-1 px-lg2 mr-2 btn-primary font-13 text-center rounded text-white">Điều chỉnh</a>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0"></div>
                    <a href="{{route('cap-lai-giay-phep')}}" title="Xin cấp lại GP" class="col-2 p-1 px-lg2 mr-2 btn-primary font-13 text-center rounded text-white">Cấp lại GP</a>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0"></div>
                    <a href="{{route('danh-sach-giay-phep-nuoc-mat')}}" class="col-2 p-1 px-lg2 mr-2 btn-primary font-13 text-center rounded text-white" >Xét duyệt</a href="">
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
                    <a href="{{route('quan-ly-cap-phep-xa-thai-nguon-nuoc')}}" class="col-2 p-1 px-lg2 mr-2 btn-primary font-13 text-center rounded" >Xem GP</a>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Số giấy phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập số giấy phép..">
                    </div>
                    <a href="{{route('de-nghi-cap-phep-xa-nuoc-thai-vao-nguon-nuoc')}}"  class="col-2 p-1 px-lg2 mr-2 btn-primary font-13 text-center rounded text-white" >Cấp mới</a>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Cơ quan cấp phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập cơ quan cấp phép..">
                    </div>
                    <button class="col-2 p-0 px-lg2 mr-2 btn-primary font-13" >Điều chỉnh</button>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0"></div>
                    <button class="col-2 p-0 px-lg2 mr-2 btn-primary font-13" >Cấp lại GP</button>
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
                    <a href="{{route('quan-ly-cap-phep-nuoc-duoi-dat')}}" class="col-2 p-1 px-lg2 mr-2 btn-primary font-13 text-center rounded" >Xem</a>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Số giấy phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập số giấy phép..">
                    </div>
                    <a href="{{route('tao-moi-giay-phep-nuoc-duoi-dat')}}" class="col-2 p-1 px-lg2 mr-2 btn-primary font-13 text-center rounded" >Cấp mới</a>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0">
                        <span class="col-6 p-0 font-weight-bold">Cơ quan cấp phép:</span>
                        <input type="text" class="col-7 px-1 font-13" placeholder="Nhập cơ quan cấp phép..">
                    </div>
                    <button class="col-2 p-0 px-lg2 mr-2 btn-primary font-13" >Điều chỉnh</button>
                </div>
                <div class="col-12 d-flex pr-0 justify-content-between align-items-center my-1">
                    <div class="col-8 d-flex pl-0"></div>
                    <button class="col-2 p-0 px-lg2 mr-2 btn-primary font-13" >Cấp lại GP</button>
                </div>
            </div>
		</div>
        <!-- Ket thuc su dung nuoc duoi dat -->
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
    <textarea id="surfaceWaterJson" class="d-none">{!! $surfaceWaterJson !!}</textarea>
</main>

<script>
    $(document).ready(function () {
        // Hien thi thong tin cong trinh: So giay phep & Co quan cap phep
        $("#construction-name").on('click', function(){
            $("#list-construction").toggle();
            $("#construction-name").keyup(function() {
                if (this.value.length) {
                    var that = this;
                    $("#list-construction li").hide().filter(function() {
                        return $(this).html().toLowerCase().indexOf(that.value.toLowerCase()) !== -1;
                    }).show();
                    $("##list-construction").show();
                } else {
                    $("##list-construction").hide();
                }
            });
            $("#list-construction li").on('click', function(){
                var text = $(this).text();
                var id = $(this).attr('data-id'); 

                $("#construction-name").val(text);
                $("#list-construction").hide();

                // Disabled button
                $('#view-surfacewater').prop('disabled', id != "" ? false:true);
                $.ajax({
                    method: "GET",
                    url: window.location.href+"/thong-tin-nuoc-mat/"+id,
                    beforeSend: function(){
                        $("#loading-gif-image").show();
                        $("#overlay").show();
                    }, 
                    success: function(data){
                        $("#loading-gif-image").hide();
                        $("#overlay").hide();

                        $("#license_num").val(data.license_num);
                        $("#organization_authorities").val(data.organization_authorities);
                    }
                });

                // Khi bam nut "Xem" - Khai thac su dung nuoc mat
                $("#view-surfacewater").on('click',function(){
                    if(id == "view-all")
                    {
                        window.location.href = window.location.href+"/nuoc-mat/xem-tat-ca-cong-trinh";
                    }
                    else
                    {
                        window.location.href = window.location.href+"/nuoc-mat/"+id;
                    }
                })
            });
        });

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
