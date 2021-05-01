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
    <header class="container p-0">
        <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
        <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
            <div class="col-lg-12 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
                <a href="{{route('quan-ly-cap-phep')}}" title="Về trang chủ" id="btn_back_page" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
                <span class="font-weight-bold text-white d-block pl-2">BIỂU MẪU BÁO CÁO - MẪU 1</span>
            </div>
        </div> 
    </header>
    <main class="px-3">
        <div class="text-primary row m-0 align-items-center py-2">
            <div class="h4">Biểu mẫu số 1: Số lượng trạm quan trắc khí tượng, thủy văn, tài nguyên nước, nước dưới đất</div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr class="align-middle text-center text-nowrap">
                    <th rowspan="5">TT</th> 
                    <th rowspan="3">Lưu vực sông/Vùng</th>
                    <th rowspan="2" colspan="3">Tổng số trạm quan trắc(trạm)</th>
                    <th colspan="12">Loại trạm</th>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                <td colspan="3">Khí tượng</td>
                <td colspan="3">Thủy văn, thủy văn kết hợp tài nguyên nước</td>
                <td colspan="3">Tài nguyên nước độc lập</td>
                <td colspan="3">Quan trắc nước dưới đất</td>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                    <td>Kỳ trước</td>
                    <td>Kỳ báo cáo</td>
                    <td>Thay đổi</td>
                    <td>Kỳ trước</td>
                    <td>Kỳ báo cáo</td>
                    <td>Thay đổi</td>
                    <td>Kỳ trước</td>
                    <td>Kỳ báo cáo</td>
                    <td>Thay đổi</td>
                    <td>Kỳ trước</td>
                    <td>Kỳ báo cáo</td>
                    <td>Thay đổi</td>
                    <td>Kỳ trước</td>
                    <td>Kỳ báo cáo</td>
                    <td>Thay đổi</td>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                    <td>(1)</td>
                    <td>(2)</td>
                    <td>(3)</td>
                    <td>(4)=(3)-(2)</td>
                    <td>(5)</td>
                    <td>(6)</td>
                    <td>(7)=(6)-(5)</td>
                    <td>(8)</td>
                    <td>(9)</td>
                    <td>(10)=(9)-(8)</td>
                    <td>(11)</td>
                    <td>(12)</td>
                    <td>(13)=(12)-(11)</td>
                    <td>(14)</td>
                    <td>(15)</td>
                    <td>(16)=(15)-(14)</td>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                    <th>Tổng</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle text-center text-nowrap">
                    <td>1</td>
                    <td>Lưu vực</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                    <td></td>
                    <td>...</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                    <td>2</td>
                    <td>Vùng</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="align-middle text-center text-nowrap">
                    <td></td>
                    <td>...</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>
