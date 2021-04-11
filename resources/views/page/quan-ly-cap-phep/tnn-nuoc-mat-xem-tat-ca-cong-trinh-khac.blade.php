<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Xem tất cả | Quản lý cấp phép nước mặt | Giám sát tài nguyên nước Sơn La</title>

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
        <div class="col-12 d-flex align-items-center p-2 surfacewater-usage-title">
            <div class="col-6 px-0">
                <span class="font-weight-bold"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp; QUẢN LÝ CẤP PHÉP
                    NƯỚC MẶT</span>
            </div>
            <div class="col-6 px-0 text-right">
                <button class="btn btn-sm btn-primary font-13"><i class="fa fa-download" aria-hidden="true"></i> XLSX</button>
                <button class="btn btn-sm btn-primary font-13"><i class="fa fa-download" aria-hidden="true"></i> PDF</button>
            </div>
        </div>
        <div class="container-table p-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('nuoc-mat-xem-tat-ca')}}">TẤT CẢ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold " href="{{route('nuoc-mat-xem-tat-ca-thuy-dien')}}">THỦY ĐIỆN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold " href="{{route('nuoc-mat-xem-tat-ca-thuy-loi')}}">THỦY LỢI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold active" href="{{route('nuoc-mat-xem-tat-ca-cong-trinh-khac')}}">CÔNG TRÌNH KHÁC</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane py-3 active" id="hydroConstruction">
                    <table class="table-license-manage table font-13" cellspacing="0" width="100%">
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
                            @foreach($pumpConstruction as $pumpCon)
                                <tr>
                                    <td class="text-center">{{$pumpCon->id}}</td>
                                    <td>{{$pumpCon->license_num}}</td>
                                    <td class="font-12">{{$pumpCon->license_date}}</td>
                                    <td>{{$pumpCon->organization_authorities}}</td>
                                    <td>{{$pumpCon->organization_request}}</td>
                                    <td><a href="{{route('quan-ly-cap-phep-nuoc-mat', $pumpCon->id)}}"
                                            class="construction-link text-primary"><img
                                                src="{{asset('public/TNN_QUAN_LY_CAP_PHEP/image/earth.png')}}"
                                                class="earth-icon" alt="earth">&nbsp;{{$pumpCon->construction_name}}</a></td>
                                    <td>{{$pumpCon->commune}}, {{$pumpCon->district}}</td>
                                    <td>{{$pumpCon->license_duration}}</td>
                                    <td>{{$pumpCon->vi_do_dap}}</td>
                                    <td>{{$pumpCon->kinh_do_dap}}</td>
                                    <td>{{$pumpCon->purpose_using_water}}</td>
                                    <td>{{$pumpCon->q_kt_max}}</td>
                                    <td>{{$pumpCon->q_kt_max_mk}}</td>
                                    <td>{{$pumpCon->q_tt}}</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $pumpConstruction->links() }}
                    </div>
                </div>
            </div>
            
        </div>
    </main>
</body>

</html>