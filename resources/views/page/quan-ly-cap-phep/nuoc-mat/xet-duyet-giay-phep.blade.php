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
                <a href="{{route('quan-ly-cap-phep')}}" title="Về trang quản lý cấp phép" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0 mr-2"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
                <span class="font-weight-bold text-white"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp; XEM / XÉT DUYỆT CẤP PHÉP NƯỚC MẶT</span>
            </div>
        </div>
        <div class="container-table p-2">
            <!-- Tab panes -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                <a class="nav-link font-weight-bold active" href="#">TẤT CẢ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#">THỦY ĐIỆN</a>
                </li>
                <li class="nav-item">
                <a class="nav-link font-weight-bold" href="#">THỦY LỢI</a>
                </li>
                <li class="nav-item">
                <a class="nav-link font-weight-bold" href="#">CÔNG TRÌNH KHÁC</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active py-3" id="home">
                    <table class="table-license-manage table font-13" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th>Cơ quan / Tổ chức</th>
                                <th>Tên công trình</th>
                                <th>Loại công trình</th>
                                <th>Công suất</th>
                                <th>Vị trí CT</th>
                                <th class="text-center">Nguồn nước</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($requests as $rq)
                                <tr>
                                    <td class="text-center">{{$i}}</td>
                                    <td>{{$rq->organization_name}}</td>
                                    <td>{{$rq->construction_name}}</td>
                                    <td>@if($rq->construction_type == 0)
                                        Thủy điện
                                        @elseif($rq->construction_type == 1)
                                        Thủy lợi
                                        @else Công trình khác @endif</td>
                                    <td>{{$rq->wattage}}</td>
                                    <td>{{$rq->district, $rq->commune}}</td>
                                    <td>{{$rq->water_source}}</td>
                                    <td>{{($rq->status == 0) ? "Chưa duyệt" : "Đã duyệt"}}</td>
                                    <td><a href="{{route('xet-duyet-giay-phep-nuoc-mat', $rq->id)}}" class="btn btn-sm btn-success mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>
    </main>
</body>

</html>