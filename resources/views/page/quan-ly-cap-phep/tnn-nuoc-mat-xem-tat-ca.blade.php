<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Xem tất cả | Quản lý cấp phép nước mặt | Giám sát tài nguyên nước Sơn La</title>

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
                                <th colspan="2" style="
    text-align: center;
">Tọa độ</th>
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
                            <tr>
                                <td class="text-center">1</td>
                                <td>433/GP-BTNMTEDIT</td>
                                <td>07-02-2021</td>
                                <td>Bộ TNMT</td>
                                <td>Công ty điện lực Sơn La</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/1"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Nhà máy thủy điện Sơ Vin</a></td>
                                <td>Phường Quyết Thắng, TP. Sơn La</td>
                                <td>10</td>
                                <td>501234</td>
                                <td>237532</td>
                                <td>phát điện và điều tiết, tạo nguồn nước cấp cho công trình thủy lợi Mương Rôm</td>
                                <td>1.29</td>
                                <td>0</td>
                                <td>0.04</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>482/GP-BTNMT</td>
                                <td>04-03-2019</td>
                                <td>Bộ TNMT</td>
                                <td>Công ty Cổ phần thủy điện Nậm Pia</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/2"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện - thủy lợi Nậm Pia 1</a></td>
                                <td>Phường Chiềng Lề
                                    , TP. Sơn La
                                </td>
                                <td>10</td>
                                <td>513120</td>
                                <td>2370241</td>
                                <td>phát điện và tạo nguồn nước cấp phục vụ tưới cho khoảng 41ha diện tích đất nông
                                    nghiệp
                                </td>
                                <td>13.2</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>728/GP-BTNMT</td>
                                <td>09-03-2018</td>
                                <td>Bộ TNMT</td>
                                <td>Công ty Cổ phần An Thịnh</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/3"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Suối Lừm 3</a></td>
                                <td>Phường Quyết Thắng
                                    , TP. Sơn La
                                </td>
                                <td>10</td>
                                <td>518341</td>
                                <td>2362059</td>
                                <td>phát điện, điều tiết, tạo nguồn cấp nước cho sinh hoạt và cho sản xuất nông nghiệp
                                </td>
                                <td>4.5</td>
                                <td>0</td>
                                <td>0.18</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/4"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Sơn La</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>1258/GP-BTNMT</td>
                                <td>19-04-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT Thủy điện Huổi Quảng - Bản Chát - Chi nhánh tập đoàn Điện lực Việt Nam</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/5"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Huổi Quảng</a></td>
                                <td>Khoen on, Than Uyên</td>
                                <td>8</td>
                                <td>592766</td>
                                <td>2397611</td>
                                <td>Phát điện</td>
                                <td>383.1</td>
                                <td>0</td>
                                <td>5</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>3434/GP-BTNMT</td>
                                <td>29/12/2017</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Nậm Chiến</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/6"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Chiến</a></td>
                                <td>Ngọc Chiến và Chiềng Muông, Mường La</td>
                                <td>10</td>
                                <td>510659</td>
                                <td>2379881</td>
                                <td>Phát điện</td>
                                <td>35.61</td>
                                <td>0</td>
                                <td>1.15</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td>2295/GP-BTNMT</td>
                                <td>26-09-2017</td>
                                <td>Bộ TNMT</td>
                                <td>CT CP đầu tư và phát triển điện Tây Bắc và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/7"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Chiến 2</a></td>
                                <td>Chiềng Muôn và Chiềng San, Mường La</td>
                                <td>10</td>
                                <td>508062</td>
                                <td>2376081</td>
                                <td>Phát điện</td>
                                <td>46.4</td>
                                <td>0</td>
                                <td>0.9</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/8"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Chiềng Công II</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">9</td>
                                <td>2623/GP-BTNMT</td>
                                <td>21-08-2018</td>
                                <td>Bộ TNMT</td>
                                <td>CT CP đầu tư và phát triển điện Tây Bắc và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/9"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Chiến III</a></td>
                                <td>Chiềng San, Mường La</td>
                                <td>10</td>
                                <td>508404</td>
                                <td>2375832</td>
                                <td>Phát điện</td>
                                <td>47.51</td>
                                <td>0</td>
                                <td>0.97</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">10</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/10"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Tà Cọ</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">11</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/11"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Quang Minh</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">12</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/12"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Trai 3</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">13</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/13"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Trai 4</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">14</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/14"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Mằn 1</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">15</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/15"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Chanh</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">16</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/16"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện To Buông</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">17</td>
                                <td>1064/GP-BTNMT</td>
                                <td>04-03-2018</td>
                                <td>Bộ TNMT</td>
                                <td>CT CP thủy điện To Buông</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/17"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Đông Khùa</a></td>
                                <td>Tú Nang, Yên Châu</td>
                                <td>10</td>
                                <td>0</td>
                                <td>0</td>
                                <td>Phát điện</td>
                                <td>4.22</td>
                                <td>0</td>
                                <td>0.22</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">18</td>
                                <td>1404/GP-BTNMT</td>
                                <td>05-04-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Sập Việt</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/18"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Sập Việt</a></td>
                                <td>Sập Vạt, Yên Châu</td>
                                <td>10</td>
                                <td>539362</td>
                                <td>2331998</td>
                                <td>Phát điện</td>
                                <td>35.62</td>
                                <td>0</td>
                                <td>2.55</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">19</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/19"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Quoét 1</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">20</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/20"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Suối Két</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">21</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/21"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Nghẹp</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">22</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/22"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Suối Tấc 1</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">23</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/23"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Suối Tấc 2</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">24</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/24"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Suối Khoáng</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">25</td>
                                <td>1817/GP-BTNMT</td>
                                <td>27-07-2017</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Đầu tư và phát triển điện Tây Bắc và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/25"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Công</a></td>
                                <td>Huổi Một, Sông Mã</td>
                                <td>10</td>
                                <td>469484</td>
                                <td>2327024</td>
                                <td>Phát điện</td>
                                <td>25.99</td>
                                <td>0</td>
                                <td>1.64</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">26</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/26"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Con</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">27</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/27"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Huổi Sui</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">28</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/28"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Lệ 2</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">29</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/29"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Quoét 2</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/30"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Ty 3</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">31</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/31"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Chiềng Phung</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">32</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/32"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Pừn 2</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">33</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/33"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Pừn 4</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">34</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/34"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Tỉa 1</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">35</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/35"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Tỉa 2</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">36</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/36"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Pừn 1</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">37</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/37"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Pừn 3</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">38</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/38"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Ty 2</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">39</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/39"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Ty 1</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">40</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/40"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm é</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">41</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/41"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Hét</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">42</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/42"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Ma Tơi</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">43</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/43"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Suối Lừm 1</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">44</td>
                                <td>3367/GP-BTNMT</td>
                                <td>27/12/2017</td>
                                <td>Bộ TNMT</td>
                                <td>CT CP đầu tư và phát triển Bắc Minh và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/44"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Công 3</a></td>
                                <td>Huổi Một, Sông Mã</td>
                                <td>0</td>
                                <td>360802</td>
                                <td>2325085</td>
                                <td>Phát điện</td>
                                <td>22.86</td>
                                <td>0</td>
                                <td>1.54</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">45</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/45"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Chim 1</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">46</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/46"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Chiềng Công 1</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">47</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/47"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nà Bó</a></td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">48</td>
                                <td>773/GP-BTNMT 3079/GP-BTNMT(Cấp lại lần 1)</td>
                                <td>09/03/2018 10/10/2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Đầu tư và Phát triển Bình Minh CY CP thủy điện Chiềng Ngàm Thượng"</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/48"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Chiềng Ngàm Thượng</a></td>
                                <td>Tông Cọ và Chiềng Ngàm, Thuận Châu</td>
                                <td>0</td>
                                <td>476999</td>
                                <td>2375568</td>
                                <td>Phát điện</td>
                                <td>7.9</td>
                                <td>0</td>
                                <td>0.4</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">49</td>
                                <td>907/GP-BTNMT</td>
                                <td>04-12-2019</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Thủy điện Nậm Bú và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/49"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Bú</a></td>
                                <td>Tạ Bú, Mường La</td>
                                <td>10</td>
                                <td>504541</td>
                                <td>2371281</td>
                                <td>Phát điện</td>
                                <td>44.79</td>
                                <td>0</td>
                                <td>1.7</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">50</td>
                                <td>1162/GP-BTNMT</td>
                                <td>04-12-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT TNHH Xuân Thiện Ninh Bình và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/50"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Háng Đồng A</a></td>
                                <td>Háng Đồng, Bắc Yên</td>
                                <td>10</td>
                                <td>549545</td>
                                <td>2354779</td>
                                <td>Phát điện</td>
                                <td>3.03</td>
                                <td>0</td>
                                <td>0.18</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">51</td>
                                <td>1670/GP-BTNMT</td>
                                <td>07-04-2019</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Pá Chiến và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/51"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Mường Hung</a></td>
                                <td>Mường Hung, Chiềng Khoong và Chiềng Cang
                                    , Sông Mã</td>
                                <td>10</td>
                                <td>480808</td>
                                <td>2320818</td>
                                <td>Phát điện</td>
                                <td>289.4</td>
                                <td>0</td>
                                <td>21.2</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">52</td>
                                <td>1818/GP-BTNMT</td>
                                <td>27-07-2017</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Đầu tư và phát triển điện Tây Bắc và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/52"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Sọi</a></td>
                                <td>Mường Cai, Sông Mã</td>
                                <td>10</td>
                                <td>472696</td>
                                <td>2314410</td>
                                <td>Phát điện</td>
                                <td>12.44</td>
                                <td>0</td>
                                <td>1.42</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">53</td>
                                <td>1867/GP-BTNMT</td>
                                <td>06-12-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Nậm Công Sơn La và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/53"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Công 5</a></td>
                                <td>Huổi Một, Sông Mã</td>
                                <td>10</td>
                                <td>470655</td>
                                <td>2327033</td>
                                <td>Phát điện</td>
                                <td>32.54</td>
                                <td>0</td>
                                <td>1.86</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">54</td>
                                <td>1923/GP-BTNMT</td>
                                <td>26/7/2019</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Nậm La và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/54"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm La</a></td>
                                <td>Mường Bú, Mường La</td>
                                <td>2</td>
                                <td>498070</td>
                                <td>2367822</td>
                                <td>Phát điện</td>
                                <td>7.87</td>
                                <td>0</td>
                                <td>0.38</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">55</td>
                                <td>1923/GP-BTNMT</td>
                                <td>15-06-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Đầu tư và xây lắm Sông Đà và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/55"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Mường Sang 2</a></td>
                                <td>Mường Sang, Mộc Châu</td>
                                <td>10</td>
                                <td>456329</td>
                                <td>2303888</td>
                                <td>Phát điện</td>
                                <td>7.3</td>
                                <td>0</td>
                                <td>0.72</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">56</td>
                                <td>2095/GP-BTNMT</td>
                                <td>29-06-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP năng lượng Sông Lam Sơn La và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/56"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Chim 1B</a></td>
                                <td>Hang Chú, Bắc Yên</td>
                                <td>10</td>
                                <td>531054</td>
                                <td>2358503</td>
                                <td>Phát điện</td>
                                <td>3.969</td>
                                <td>0</td>
                                <td>0.23</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">57</td>
                                <td>2332/GP-BTNMT</td>
                                <td>09-10-2019</td>
                                <td>BỘ TNMT</td>
                                <td>CT TNHH Xây dựng và Thương mại Tiến Anh và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/57"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Ngọc Chiến</a></td>
                                <td>Ngọc Chiến, Mường La</td>
                                <td>10</td>
                                <td>519933</td>
                                <td>2387991</td>
                                <td>Phát điện</td>
                                <td>3.86</td>
                                <td>0</td>
                                <td>0.224</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">58</td>
                                <td>2804/GP-BTNMT</td>
                                <td>09-12-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT TNHH Đầu tư và Xây dựng Sông Lam</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/58"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Chim 1A</a></td>
                                <td>Xím Vàng, Bắc Yên</td>
                                <td>10</td>
                                <td>531299</td>
                                <td>2358321</td>
                                <td>Phát điện</td>
                                <td>5.7</td>
                                <td>0</td>
                                <td>0.66</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">59</td>
                                <td>3134/GP-BTNMT</td>
                                <td>16/10/2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP đầu tư thủy điện Anpha và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/59"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Hóa 2</a></td>
                                <td>Mường bám, Thuận Châu</td>
                                <td>10</td>
                                <td>438317</td>
                                <td>2362460</td>
                                <td>Phát điện</td>
                                <td>62.41</td>
                                <td>0</td>
                                <td>5.93</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">60</td>
                                <td>3150/GP-BTNMT</td>
                                <td>16/10/2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP đầu tư thủy điện Anpha và Hồ</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/60"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thủy điện Nậm Hóa 1</a></td>
                                <td>Mường bám, Thuận Châu</td>
                                <td>10</td>
                                <td>438220</td>
                                <td>2368710</td>
                                <td>Phát điện</td>
                                <td>60</td>
                                <td>0</td>
                                <td>5.31</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">63</td>
                                <td>102</td>
                                <td>12-11-2000</td>
                                <td>BTNMT</td>
                                <td>Cong ty A</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/63"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thuy dien A</a></td>
                                <td>Xa, Moc CHau</td>
                                <td>10</td>
                                <td>54321</td>
                                <td>54321</td>
                                <td>bom nuoc</td>
                                <td>16</td>
                                <td>0</td>
                                <td>18</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">64</td>
                                <td>asdasd</td>
                                <td>asdasd</td>
                                <td>asdasd</td>
                                <td>asdasd</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/64"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;asdasd</a></td>
                                <td>ZxZx, zczxcz</td>
                                <td>10</td>
                                <td>12345</td>
                                <td>45678</td>
                                <td>sdasd</td>
                                <td>11</td>
                                <td>0</td>
                                <td>13</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">65</td>
                                <td>123</td>
                                <td>12-4-2002</td>
                                <td>BTNMT</td>
                                <td>Cong ty A</td>
                                <td><a href="http://localhost/tnnsl/quan-ly-cap-phep/nuoc-mat/65"
                                        class="construction-link text-primary"><img
                                            src="http://localhost/tnnsl/public/TNN_QUAN_LY_CAP_PHEP/image/earth.png"
                                            class="earth-icon" alt="earth">&nbsp;Thuy dien B</a></td>
                                <td>Chieng Le, TP.SL</td>
                                <td>10</td>
                                <td>65487</td>
                                <td>45678</td>
                                <td>Khai thac</td>
                                <td>11</td>
                                <td>0</td>
                                <td>13</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade py-3" id="profile">
                    <table class="table-license-manage table" cellspacing="0" width="100%">
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
                            <tr>
                                <td class="text-center">1</td>
                                <td>433/GP-BTNMTEDIT</td>
                                <td>07-02-2021</td>
                                <td>Bộ TNMT</td>
                                <td>Công ty điện lực Sơn La</td>
                                <td>Nhà máy thủy điện Sơ Vin</td>
                                <td>Phường Quyết Thắng, TP. Sơn La</td>
                                <td>10</td>
                                <td>10</td>
                                <td>phát điện và điều tiết, tạo nguồn nước cấp cho công trình thủy lợi Mương Rôm</td>
                                <td>1.29</td>
                                <td>0</td>
                                <td>0.04</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>482/GP-BTNMT</td>
                                <td>04-03-2019</td>
                                <td>Bộ TNMT</td>
                                <td>Công ty Cổ phần thủy điện Nậm Pia</td>
                                <td>Thủy điện - thủy lợi Nậm Pia 1</td>
                                <td>Phường Chiềng Lề
                                    , TP. Sơn La
                                </td>
                                <td>10</td>
                                <td>10</td>
                                <td>phát điện và tạo nguồn nước cấp phục vụ tưới cho khoảng 41ha diện tích đất nông
                                    nghiệp
                                </td>
                                <td>13.2</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>728/GP-BTNMT</td>
                                <td>09-03-2018</td>
                                <td>Bộ TNMT</td>
                                <td>Công ty Cổ phần An Thịnh</td>
                                <td>Thủy điện Suối Lừm 3</td>
                                <td>Phường Quyết Thắng
                                    , TP. Sơn La
                                </td>
                                <td>10</td>
                                <td>10</td>
                                <td>phát điện, điều tiết, tạo nguồn cấp nước cho sinh hoạt và cho sản xuất nông nghiệp
                                </td>
                                <td>4.5</td>
                                <td>0</td>
                                <td>0.18</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Sơn La</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>1258/GP-BTNMT</td>
                                <td>19-04-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT Thủy điện Huổi Quảng - Bản Chát - Chi nhánh tập đoàn Điện lực Việt Nam</td>
                                <td>Thủy điện Huổi Quảng</td>
                                <td>Khoen on, Than Uyên</td>
                                <td>8</td>
                                <td>8</td>
                                <td>Phát điện</td>
                                <td>383.1</td>
                                <td>0</td>
                                <td>5</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>3434/GP-BTNMT</td>
                                <td>29/12/2017</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Nậm Chiến</td>
                                <td>Thủy điện Nậm Chiến</td>
                                <td>Ngọc Chiến và Chiềng Muông, Mường La</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>35.61</td>
                                <td>0</td>
                                <td>1.15</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td>2295/GP-BTNMT</td>
                                <td>26-09-2017</td>
                                <td>Bộ TNMT</td>
                                <td>CT CP đầu tư và phát triển điện Tây Bắc và Hồ</td>
                                <td>Thủy điện Nậm Chiến 2</td>
                                <td>Chiềng Muôn và Chiềng San, Mường La</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>46.4</td>
                                <td>0</td>
                                <td>0.9</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Chiềng Công II</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">9</td>
                                <td>2623/GP-BTNMT</td>
                                <td>21-08-2018</td>
                                <td>Bộ TNMT</td>
                                <td>CT CP đầu tư và phát triển điện Tây Bắc và Hồ</td>
                                <td>Thủy điện Nậm Chiến III</td>
                                <td>Chiềng San, Mường La</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>47.51</td>
                                <td>0</td>
                                <td>0.97</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">10</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Tà Cọ</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">11</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Quang Minh</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">12</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Trai 3</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">13</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Trai 4</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">14</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Mằn 1</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">15</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Chanh</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">16</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện To Buông</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">17</td>
                                <td>1064/GP-BTNMT</td>
                                <td>04-03-2018</td>
                                <td>Bộ TNMT</td>
                                <td>CT CP thủy điện To Buông</td>
                                <td>Thủy điện Đông Khùa</td>
                                <td>Tú Nang, Yên Châu</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>4.22</td>
                                <td>0</td>
                                <td>0.22</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">18</td>
                                <td>1404/GP-BTNMT</td>
                                <td>05-04-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Sập Việt</td>
                                <td>Thủy điện Sập Việt</td>
                                <td>Sập Vạt, Yên Châu</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>35.62</td>
                                <td>0</td>
                                <td>2.55</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">19</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Quoét 1</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">20</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Suối Két</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">21</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Nghẹp</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">22</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Suối Tấc 1</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">23</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Suối Tấc 2</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">24</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Suối Khoáng</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">25</td>
                                <td>1817/GP-BTNMT</td>
                                <td>27-07-2017</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Đầu tư và phát triển điện Tây Bắc và Hồ</td>
                                <td>Thủy điện Nậm Công</td>
                                <td>Huổi Một, Sông Mã</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>25.99</td>
                                <td>0</td>
                                <td>1.64</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">26</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Con</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">27</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Huổi Sui</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">28</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Lệ 2</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">29</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Quoét 2</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Ty 3</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">31</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Chiềng Phung</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">32</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Pừn 2</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">33</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Pừn 4</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">34</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Tỉa 1</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">35</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Tỉa 2</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">36</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Pừn 1</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">37</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Pừn 3</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">38</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Ty 2</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">39</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Ty 1</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">40</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm é</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">41</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Hét</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">42</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Ma Tơi</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">43</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Suối Lừm 1</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">44</td>
                                <td>3367/GP-BTNMT</td>
                                <td>27/12/2017</td>
                                <td>Bộ TNMT</td>
                                <td>CT CP đầu tư và phát triển Bắc Minh và Hồ</td>
                                <td>Thủy điện Nậm Công 3</td>
                                <td>Huổi Một, Sông Mã</td>
                                <td>0</td>
                                <td>0</td>
                                <td>Phát điện</td>
                                <td>22.86</td>
                                <td>0</td>
                                <td>1.54</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">45</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nậm Chim 1</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">46</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Chiềng Công 1</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">47</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Thủy điện Nà Bó</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">48</td>
                                <td>773/GP-BTNMT 3079/GP-BTNMT(Cấp lại lần 1)</td>
                                <td>09/03/2018 10/10/2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Đầu tư và Phát triển Bình Minh CY CP thủy điện Chiềng Ngàm Thượng"</td>
                                <td>Thủy điện Chiềng Ngàm Thượng</td>
                                <td>Tông Cọ và Chiềng Ngàm, Thuận Châu</td>
                                <td>0</td>
                                <td>0</td>
                                <td>Phát điện</td>
                                <td>7.9</td>
                                <td>0</td>
                                <td>0.4</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">49</td>
                                <td>907/GP-BTNMT</td>
                                <td>04-12-2019</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Thủy điện Nậm Bú và Hồ</td>
                                <td>Thủy điện Nậm Bú</td>
                                <td>Tạ Bú, Mường La</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>44.79</td>
                                <td>0</td>
                                <td>1.7</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">50</td>
                                <td>1162/GP-BTNMT</td>
                                <td>04-12-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT TNHH Xuân Thiện Ninh Bình và Hồ</td>
                                <td>Thủy điện Háng Đồng A</td>
                                <td>Háng Đồng, Bắc Yên</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>3.03</td>
                                <td>0</td>
                                <td>0.18</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">51</td>
                                <td>1670/GP-BTNMT</td>
                                <td>07-04-2019</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Pá Chiến và Hồ</td>
                                <td>Thủy điện Mường Hung</td>
                                <td>Mường Hung, Chiềng Khoong và Chiềng Cang
                                    , Sông Mã</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>289.4</td>
                                <td>0</td>
                                <td>21.2</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">52</td>
                                <td>1818/GP-BTNMT</td>
                                <td>27-07-2017</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Đầu tư và phát triển điện Tây Bắc và Hồ</td>
                                <td>Thủy điện Nậm Sọi</td>
                                <td>Mường Cai, Sông Mã</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>12.44</td>
                                <td>0</td>
                                <td>1.42</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">53</td>
                                <td>1867/GP-BTNMT</td>
                                <td>06-12-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Nậm Công Sơn La và Hồ</td>
                                <td>Thủy điện Nậm Công 5</td>
                                <td>Huổi Một, Sông Mã</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>32.54</td>
                                <td>0</td>
                                <td>1.86</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">54</td>
                                <td>1923/GP-BTNMT</td>
                                <td>26/7/2019</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP thủy điện Nậm La và Hồ</td>
                                <td>Thủy điện Nậm La</td>
                                <td>Mường Bú, Mường La</td>
                                <td>2</td>
                                <td>2</td>
                                <td>Phát điện</td>
                                <td>7.87</td>
                                <td>0</td>
                                <td>0.38</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">55</td>
                                <td>1923/GP-BTNMT</td>
                                <td>15-06-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP Đầu tư và xây lắm Sông Đà và Hồ</td>
                                <td>Thủy điện Mường Sang 2</td>
                                <td>Mường Sang, Mộc Châu</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>7.3</td>
                                <td>0</td>
                                <td>0.72</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">56</td>
                                <td>2095/GP-BTNMT</td>
                                <td>29-06-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP năng lượng Sông Lam Sơn La và Hồ</td>
                                <td>Thủy điện Nậm Chim 1B</td>
                                <td>Hang Chú, Bắc Yên</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>3.969</td>
                                <td>0</td>
                                <td>0.23</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">57</td>
                                <td>2332/GP-BTNMT</td>
                                <td>09-10-2019</td>
                                <td>BỘ TNMT</td>
                                <td>CT TNHH Xây dựng và Thương mại Tiến Anh và Hồ</td>
                                <td>Thủy điện Ngọc Chiến</td>
                                <td>Ngọc Chiến, Mường La</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>3.86</td>
                                <td>0</td>
                                <td>0.224</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">58</td>
                                <td>2804/GP-BTNMT</td>
                                <td>09-12-2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT TNHH Đầu tư và Xây dựng Sông Lam</td>
                                <td>Thủy điện Nậm Chim 1A</td>
                                <td>Xím Vàng, Bắc Yên</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>5.7</td>
                                <td>0</td>
                                <td>0.66</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">59</td>
                                <td>3134/GP-BTNMT</td>
                                <td>16/10/2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP đầu tư thủy điện Anpha và Hồ</td>
                                <td>Thủy điện Nậm Hóa 2</td>
                                <td>Mường bám, Thuận Châu</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>62.41</td>
                                <td>0</td>
                                <td>5.93</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">60</td>
                                <td>3150/GP-BTNMT</td>
                                <td>16/10/2018</td>
                                <td>BỘ TNMT</td>
                                <td>CT CP đầu tư thủy điện Anpha và Hồ</td>
                                <td>Thủy điện Nậm Hóa 1</td>
                                <td>Mường bám, Thuận Châu</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Phát điện</td>
                                <td>60</td>
                                <td>0</td>
                                <td>5.31</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">64</td>
                                <td>asdasd</td>
                                <td>asdasd</td>
                                <td>asdasd</td>
                                <td>asdasd</td>
                                <td>asdasd</td>
                                <td>ZxZx, zczxcz</td>
                                <td>10</td>
                                <td>10</td>
                                <td>sdasd</td>
                                <td>11</td>
                                <td>0</td>
                                <td>13</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center">65</td>
                                <td>123</td>
                                <td>12-4-2002</td>
                                <td>BTNMT</td>
                                <td>Cong ty A</td>
                                <td>Thuy dien B</td>
                                <td>Chieng Le, TP.SL</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Khai thac</td>
                                <td>11</td>
                                <td>0</td>
                                <td>13</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade py-3" id="profile1">
                    <table class="table-license-manage table" cellspacing="0" width="100%">
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
                            <tr>
                                <td class="text-center">63</td>
                                <td>102</td>
                                <td>12-11-2000</td>
                                <td>BTNMT</td>
                                <td>Cong ty A</td>
                                <td>Thuy dien A</td>
                                <td>Xa, Moc CHau</td>
                                <td>10</td>
                                <td>10</td>
                                <td>bom nuoc</td>
                                <td>16</td>
                                <td>0</td>
                                <td>18</td>
                                <td>0</td>
                                <td>0</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade py-3" id="profile2">
                    <table class="table-license-manage table" cellspacing="0" width="100%">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
</body>

</html>