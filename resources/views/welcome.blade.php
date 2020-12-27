<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Giám sát tài nguyên nước Sơn La</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manuale:wght@500&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/TNN_TRANG_CHU/css/tnn-trang-chu.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/fontawesome.min.css')}}">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js" integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ==" crossorigin=""></script>
    </head>
    <body class="container p-0">
        <div id="e77_3" class="position-relative">
            <div id="e77_7"></div>
            <span id="e77_8" class="font-weight-bold">Chú giải</span>
            <a href="{{url('/')}}"><div id="e77_9"></div></a>
            <a href="http://tainguyenmoitruongsonla.vn/" ><div id="e77_10"></div></a>
            <div id="e77_11"></div>
            <div id="e77_12"></div>
            <div id="e77_13"></div>
            <div id="e77_14"></div>
            <div id="e77_15"></div>
            <div id="e77_16"></div>
            <div id="e77_17"></div>
            <div id="e77_18"></div>
            <div id="e77_20"></div>
            <div id="e77_42"></div>
            <div id="e77_19" class="font-weight-bold w-100 top-title"><span>HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC</span> </div>
            <span id="e77_21" class="font-weight-bold">Thông tin chung</span>
            <span id="e77_22" class="font-weight-bold">Hệ thống giám sát</span>
            <span id="e77_23" class="font-weight-bold">Quản lý cấp phép</span>
            <span id="e77_24" class="font-weight-bold">Quản lý dữ liệu</span>
            <span id="e77_25" class="font-weight-bold">Thông báo</span>
            <span id="e77_26" class="font-weight-bold">Hướng dẫn, quy định</span>
            <span id="e77_27" class="font-weight-bold">Báo cáo biểu mẫu</span>
            <span id="e77_28" class="font-weight-bold">Đăng ký/ kết nối</span>
            <a href="{{url('/')}}"><span id="e77_29" class="font-weight-bold">TRANG CHỦ</span></a>
            <div id="e77_30"></div>
            <div id="e77_31"></div>
            <div id="e77_32"></div>
            <div id="e77_33"></div>
            <div id="e77_34"></div>
            <div id="e77_35"></div>
            <div id="e77_36" title="Thu nhỏ"></div>
            <div id="e77_37" title="Phóng to"></div>
            <div id="e77_38"></div>
            <div id="e77_39" title="Vị trí hiện tại"></div>
            <div id="e77_40" title="Về giữa bản đồ"></div>
            <span id="e77_41" class="font-weight-bold">Lớp bản đồ</span>
           
        </div>

        <script src="{{ asset('public/TNN_TRANG_CHU/js/configMap.js') }}"></script>
    </body>
</html>