@extends('layout.base')
@section('title', 'Xem tất cả | Quản lý cấp phép nước mặt')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_QUAN_LY_CAP_PHEP/css/tnn-quan-ly-cap-phep.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
@endpush

@section('content')
<header>
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-4 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{route('quan-ly-cap-phep')}}" title="Về trang chủ" id="btn_back_page" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2">QUẢN LÝ CẤP PHÉP</span>
        </div>
        <div class="bg-lightgray col-lg-8 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div>
</header>
<main class="">
    <div class="col-12 d-flex py-2 px-0">
        <div class="col-6 px-0">
            <span class="font-weight-bold"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp; QUẢN LÝ CẤP PHÉP NƯỚC MẶT</span>
        </div>
        <div class="col-6 px-0 text-right">
            <button class="btn btn-sm btn-primary"><i class="fa fa-download" aria-hidden="true"></i> XLSX</button>
            <button class="btn btn-sm btn-primary"><i class="fa fa-download" aria-hidden="true"></i> PDF</button>
        </div>
    </div>
    <div class="container-table">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link active font-weight-bold" href="#home">TẤT CẢ</a>
            </li>
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link font-weight-bold" href="#profile">THỦY ĐIỆN</a>
            </li>
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link font-weight-bold" href="#profile1">THỦY LỢI</a>
            </li>
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link font-weight-bold" href="#profile2">CÔNG TRÌNH KHÁC</a>
            </li>
        </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active py-3" id="home">
                <table class="table-license-manage table" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Số GP</th>
                            <th>Ngày cấp</th>
                            <th>Cơ quan cấp</th>
                            <th>Chủ giấy phép</th>
                            <th>Tên công trình</th>
                            <th>Địa chỉ CT</th>
                            <th>Thời gian KT (năm)</th>
                            <th colspan="2">Tọa độ</th>
                            <th>Mục đích KT</th>
                            <th>Q<sub>KT max</sub></th>
                            <th>Q<sub>KT max mùa kiệt</sub></th>
                            <th>Q<sub>xả TT</sub></th>
                            <th>Báo cáo định kỳ</th>
                            <th>VB đôn đốc</th>
                            <th>QĐ thanh kiểm tra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($constructions as $cons)
                        <tr>
                            <td class="text-center">{{$cons->id}}</td>
                            <td>{{$cons->license_num}}</td>
                            <td>{{$cons->license_date}}</td>
                            <td>{{$cons->organization_authorities}}</td>
                            <td>{{$cons->organization_request}}</td>
                            <td><span class="construction-link text-primary"><img src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/earth.png')}}" class="earth-icon" alt="earth" />&nbsp;{{$cons->construction_name}}</span></td>
                            <td>{{(!empty($cons->commune)) ? $cons->commune.', '.$cons->district : ""}}</td>
                            <td>{{$cons->license_duration}}</td>
                            <td>{{$cons->vi_do_nha_may}}</td>
                            <td>{{$cons->kinh_do_nha_may}}</td>
                            <td>{{$cons->purpose_using_water}}</td>
                            <td>{{$cons->q_kt_max}}</td>
                            <td>0</td>
                            <td>{{$cons->q_tt}}</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <div class="tab-pane fade py-3" id="profile">
                    <table class="table-license-manage table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Số GP</th>
                                <th>Ngày cấp</th>
                                <th>Cơ quan cấp</th>
                                <th>Chủ giấy phép</th>
                                <th>Tên công trình</th>
                                <th>Địa chỉ CT</th>
                                <th>Thời gian KT (năm)</th>
                                <th>Tọa độ</th>
                                <th>Mục đích KT</th>
                                <th>Q<sub>KT max</sub></th>
                                <th>Q<sub>KT max mùa kiệt</sub></th>
                                <th>Q<sub>xả TT</sub></th>
                                <th>Báo cáo định kỳ</th>
                                <th>VB đôn đốc</th>
                                <th>QĐ thanh kiểm tra</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hydroConstruction as $cons)
                            <tr>
                                <td class="text-center">{{$cons->id}}</td>
                                <td>{{$cons->license_num}}</td>
                                <td>{{$cons->license_date}}</td>
                                <td>{{$cons->organization_authorities}}</td>
                                <td>{{$cons->organization_request}}</td>
                                <td>{{$cons->construction_name}}</td>
                                <td>{{(!empty($cons->commune)) ? $cons->commune.', '.$cons->district : ""}}</td>
                                <td>{{$cons->license_duration}}</td>
                                <td>{{$cons->license_duration}}</td>
                                <td>{{$cons->purpose_using_water}}</td>
                                <td>{{$cons->q_kt_max}}</td>
                                <td>0</td>
                                <td>{{$cons->q_tt}}</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade py-3" id="profile1">
                    <table class="table-license-manage table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Số GP</th>
                                <th>Ngày cấp</th>
                                <th>Cơ quan cấp</th>
                                <th>Chủ giấy phép</th>
                                <th>Tên công trình</th>
                                <th>Địa chỉ CT</th>
                                <th>Thời gian KT (năm)</th>
                                <th>Tọa độ</th>
                                <th>Mục đích KT</th>
                                <th>Q<sub>KT max</sub></th>
                                <th>Q<sub>KT max mùa kiệt</sub></th>
                                <th>Q<sub>xả TT</sub></th>
                                <th>Báo cáo định kỳ</th>
                                <th>VB đôn đốc</th>
                                <th>QĐ thanh kiểm tra</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($irrigationConstruction as $cons)
                            <tr>
                                <td class="text-center">{{$cons->id}}</td>
                                <td>{{$cons->license_num}}</td>
                                <td>{{$cons->license_date}}</td>
                                <td>{{$cons->organization_authorities}}</td>
                                <td>{{$cons->organization_request}}</td>
                                <td>{{$cons->construction_name}}</td>
                                <td>{{(!empty($cons->commune)) ? $cons->commune.', '.$cons->district : ""}}</td>
                                <td>{{$cons->license_duration}}</td>
                                <td>{{$cons->license_duration}}</td>
                                <td>{{$cons->purpose_using_water}}</td>
                                <td>{{$cons->q_kt_max}}</td>
                                <td>0</td>
                                <td>{{$cons->q_tt}}</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade py-3" id="profile2">
                    <table class="table-license-manage table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Số GP</th>
                                <th>Ngày cấp</th>
                                <th>Cơ quan cấp</th>
                                <th>Chủ giấy phép</th>
                                <th>Tên công trình</th>
                                <th>Địa chỉ CT</th>
                                <th>Thời gian KT (năm)</th>
                                <th>Tọa độ</th>
                                <th>Mục đích KT</th>
                                <th>Q<sub>KT max</sub></th>
                                <th>Q<sub>KT max mùa kiệt</sub></th>
                                <th>Q<sub>xả TT</sub></th>
                                <th>Báo cáo định kỳ</th>
                                <th>VB đôn đốc</th>
                                <th>QĐ thanh kiểm tra</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pumpConstruction as $cons)
                            <tr>
                                <td class="text-center">{{$cons->id}}</td>
                                <td>{{$cons->license_num}}</td>
                                <td>{{$cons->license_date}}</td>
                                <td>{{$cons->organization_authorities}}</td>
                                <td>{{$cons->organization_request}}</td>
                                <td>{{$cons->construction_name}}</td>
                                <td>{{(!empty($cons->commune)) ? $cons->commune.', '.$cons->district : ""}}</td>
                                <td>{{$cons->license_duration}}</td>
                                <td>{{$cons->license_duration}}</td>
                                <td>{{$cons->purpose_using_water}}</td>
                                <td>{{$cons->q_kt_max}}</td>
                                <td>0</td>
                                <td>{{$cons->q_tt}}</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</main>

<script>
    $(document).ready(function () {
        
    });
</script>
@endsection
