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
    <header class="p-0">
        <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
        <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
            <div class="col-lg-6 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
                <a href="{{route('bao-cao-bieu-mau')}}" title="Về trang chủ" id="btn_back_page" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
                <span class="font-weight-bold text-white d-block pl-2">BIỂU MẪU BÁO CÁO - MẪU 6</span>
            </div>
        </div> 
        <div class="col-6 p-0 text-right float-right">
                <button class="btn btn-sm btn-primary font-13"><i class="fa fa-download" aria-hidden="true"></i> XLSX</button>
                <button class="btn btn-sm btn-primary font-13"><i class="fa fa-download" aria-hidden="true"></i> PDF</button>
            </div>
    </header>
    <main class="px-3">
        <div class="text-primary row m-0 align-items-center py-2">
            <div class="h4">Biểu mẫu số 6: Tổng hợp dung tích các hồ chứa lớn, quan trọng trên các lưu vực sông</div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr class="align-middle text-center text-nowrap">
                    <th rowspan="4">TT</th>
                    <th rowspan="2">Lưu vực sông</th>
                    <th rowspan="2">Số lượng hồ chứa tổng hợp (hồ)</th>
                    <th colspan="4">Tổng dung tích</th>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                    <td>Toàn bộ (triệu m3)</td>
                    <td>Hữu ích (triệu m3)</td>
                    <td>Phòng lũ (triệu m3)</td>
                    <td>Tích được vào cuối mùa lũ, đầu mùa cạn(triệu m3)</td>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                    <td>(1)</td>
                    <td>(2)</td>
                    <td>(3)</td>
                    <td>(4)</td>
                    <td>(5)</td>
                    <td>(6)</td>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                    <th>Tổng</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>   
            </thead>
            <tbody>
                <tr class="align-middle text-center text-nowrap">
                        <th>1</th>
                        <th>Lưu vực sông A</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr class="align-middle text-center text-nowrap">
                        <th>2</th>
                        <th>Lưu vực sông B</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr class="align-middle text-center text-nowrap">
                        <th></th>
                        <th>...</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
            </tbody>
        </table>
    </main>
</body>

</html>
