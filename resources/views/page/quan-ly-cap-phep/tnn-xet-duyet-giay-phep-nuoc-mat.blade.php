<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Xét duyệt giấy phép nước mặt | Quản lý cấp phép nước mặt | Giám sát tài nguyên nước Sơn La</title>

    <link rel="stylesheet" href="http://localhost/tnnsl/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/tnnsl/public/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"
        integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ=="
        crossorigin=""></script>
    <link rel="stylesheet" href="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/css/tnn-quan-ly-cap-phep.css">
    <link rel="stylesheet" href="http://localhost/tnnsl/public/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="http://localhost/tnnsl/public/js/bootstrap.min.js"></script>
</head>

<body class=" p-0" data-new-gr-c-s-check-loaded="14.998.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <header>
        <a href="http://localhost/tnnsl"><img class="w-100 banner-tnmt"
                src="http://localhost/tnnsl/public/TNN_TRANG_CHU/image/ANHSOTNMT.png" alt="banner-tnmt"></a>
    </header>
    <main>
        <div class="col-12 d-flex align-items-center p-2 surfacewater-usage-title">
            <div class="col-6 px-0">
                <span class="font-weight-bold"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp; XÉT DUYỆT CẤP PHÉP NƯỚC MẶT</span>
            </div>
            <div class="col-6 px-0 text-right">
                <button class="btn btn-sm btn-primary font-13"><i class="fa fa-download" aria-hidden="true"></i> XLSX</button>
                <button class="btn btn-sm btn-primary font-13"><i class="fa fa-download" aria-hidden="true"></i> PDF</button>
            </div>
        </div>
        <div class="container-table p-2">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active py-3" id="home">
                    <table class="table-license-manage table font-13" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên công trình</th>
                                <th>Đơn xin cấp phép</th>
                                <th>Kết quả phân tích CLN</th>
                                <th>Đề án KTSDN</th>
                                <th>Báo cáo KTSDN</th>
                                <th>Sơ đồ vị trí công trình KTN</th>
                                <th>Văn bản ý kiến cộng đồng</th>
                                <th>Giấy tờ khác</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $fi)
                                <tr>
                                    <td class="text-center">{{$fi->id}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>
    </main>
</body>

</html>