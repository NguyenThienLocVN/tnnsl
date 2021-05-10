@extends('layout.base')
@section('title', 'Quản lý cấp phép | Tạo mới giấy phép nước mặt')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_QUAN_LY_CAP_PHEP/css/tnn-quan-ly-cap-phep.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@section('content')
<header class="mb-3 mb-md-0 ">
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-4 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{url('/')}}" title="Về trang chủ" id="btn_back_page" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2">QUẢN LÝ CẤP PHÉP</span>
        </div>
        <div class="bg-lightgray col-lg-8 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-4 pb-3 pb-lg-0 px-md-0" id="surfacewater-usage">
        <div class="col-11 pb-3 mx-auto my-3 rounded text-white px-0 bg-info">
            <p class="bg-primary rounded p-2 font-weight font-weight-bold text-center">NƯỚC MẶT</p>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        <div class="col-11 pb-3 mx-auto my-3 rounded text-white px-0 bg-success">
            <p class="exploit-surfacewater-title rounded p-2 font-weight-bold text-center">XẢ THẢI VÀO NGUỒN NƯỚC</p>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        <div class="col-11 pb-3 mx-auto my-3 rounded text-white px-0 bg-warning">
            <p class="exploit-surfacewater-title rounded p-2 font-weight-bold text-center">KHAI THÁC NƯỚC DƯỚI ĐẤT</p>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        <div class="col-11 pb-3 mx-auto my-3 rounded text-white px-0 bg-danger">
            <p class="exploit-surfacewater-title rounded p-2 font-weight-bold text-center">THĂM DÒ NƯỚC DƯỚI ĐẤT</p>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        <div class="col-11 pb-3 mx-auto my-3 rounded text-white px-0 bg-secondary">
            <p class="exploit-surfacewater-title rounded p-2 font-weight-bold text-center">HÀNH NGHỀ</p>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Giấy phép: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Sắp hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Hết hiệu lực: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa phê duyệt: </p>
                <p class="col-3">100</p>
            </div>
            <div class="font-weight-bold col-12 d-flex">
                <p class="col-9">Chưa có giấy phép thay thế: </p>
                <p class="col-3">100</p>
            </div>
        </div>
        <a href="{{route('quan-ly-cap-phep-chi-tiet')}}" class="btn btn-sm btn-outline-primary mb-4">Xem chi tiết</a>
        
        <!-- Ket thuc khai thac su dung nuoc mat -->
    </div>
    <div class="col-12 col-lg-8 py-3 pl-3 pr-0 map-container" id="surfacewater-usage">
        <div class="col-12 border border-primary mb-3">
            <canvas id="myChartColumn"></canvas>
        </div>

        <div class="col-12 border border-danger mb-3 d-flex justify-content-center align-items-center" style="height:350px;">
            <div>
                <canvas id="myChartpie"></canvas>
            </div>
        </div>
    </div>
</main>
<script>
var ctx = document.getElementById('myChartColumn').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2015', '2016', '2017', '2018', '2019', '2020'],
        datasets: [{
            label: 'Số giấy phép',
            data: [115, 119, 103, 95, 82, 123],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
    }
});

var ctx = document.getElementById('myChartpie').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Thuỷ điện', 'Trạm bơm', 'Nhà máy nước',  'Trạm cấp nước', 'Hồ chứa', 'Cống', 'Bãi đập'],
        datasets: [{
            label: 'Số giấy phép',
            data: [70, 15, 5, 3, 2, 1, 4],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
    }
});
</script>
@endsection
