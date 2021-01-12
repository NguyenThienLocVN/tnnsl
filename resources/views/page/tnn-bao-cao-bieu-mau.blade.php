@extends('layout.base')
@section('title', 'Báo cáo biểu mẫu')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_BAO_CAO_BIEU_MAU/css/tnn-bao-cao-bieu-mau.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
@endpush

@section('content')
<header>
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-5 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{url('/')}}" title="Về trang chủ" class="font-weight-bold text-white btn-home-top d-block pl-2 pt-2 pt-md-0"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
            <span class="font-weight-bold text-white d-block pl-2">BÁO CÁO BIỂU MẪU</span>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-md-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <!-- Cot bao cao 1 -->
    <div class="col-12 col-lg-3 pb-3 pb-lg-0 px-0 mb-lg-3 d-flex flex-column report-block-one">
        <div class="col-12 d-flex align-items-center report-item report-item-one py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 01</p>
                <p class="text-success font-weight-bold">Số lượng trạm quan trắc</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU1.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU1">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-one py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 02</p>
                <p class="text-success font-weight-bold">Tổng lượng mưa, phân phối mưa</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU2.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU2">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-one py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 03</p>
                <p class="text-success font-weight-bold">Lượng mưa tháng, năm kỳ báo cáo</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU3.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU3">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-one py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 04</p>
                <p class="text-success font-weight-bold">Tổng lượng nước mặt trên các LVS</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU4.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU4">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-one py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 05</p>
                <p class="text-success font-weight-bold">Dòng chảy TB tháng, năm kỳ báo cáo</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU5.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU5">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-one py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 06</p>
                <p class="text-success font-weight-bold">Tổng dung tích các hồ chứa lớn</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU6.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU6">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-one py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 07</p>
                <p class="text-success font-weight-bold">Diện tích đã được điều tra đánh giá TNNDĐ</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU7.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU7">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-one py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 08</p>
                <p class="text-success font-weight-bold">Tổng hợp các đặc trưng MNDĐ</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU8.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU8">
        </div>
    </div>

    <!-- Cot bao cao 2 -->
    <div class="col-12 col-lg-3 pb-3 pb-lg-0 px-0 mb-lg-3 d-flex flex-column report-block-two">
        <div class="col-12 d-flex align-items-center report-item report-item-two py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 09</p>
                <p class="text-success font-weight-bold">Số lượng CTKT theo nguồn nước</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU9.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU9">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-two py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 10</p>
                <p class="text-success font-weight-bold">Số lượng CTKT phân theo sử dụng</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU10.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU10">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-two py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 11</p>
                <p class="text-success font-weight-bold">Số lượng CTKT phân theo loại hình</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU11.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU11">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-two py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 12</p>
                <p class="text-success font-weight-bold">Lượng nước khai thác sử dụng</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU12.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU12">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-two py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 13</p>
                <p class="text-success font-weight-bold">Chỉ tiêu chất lượng nước mặt</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU13.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU13">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-two py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 14</p>
                <p class="text-success font-weight-bold">Chỉ tiêu chất lượng nước dưới đất</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU14.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU14">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-two py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 15</p>
                <p class="text-success font-weight-bold">Văn bản PLTNN đã ban hành</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU15.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU15">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-two py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 16</p>
                <p class="text-success font-weight-bold">Số lượng giấy phép TNN đã cấp</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU16.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU16">
        </div>
    </div>

    <!-- Cot bao cao 3 -->
    <div class="col-12 col-lg-3 pb-3 px-0 pb-lg-0 px-lg-0 mb-lg-3 d-flex flex-column report-block-three">
        <div class="col-12 d-flex align-items-center report-item report-item-three py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 17</p>
                <p class="text-success font-weight-bold">Cấp quyền khai thác</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU17.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU17">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-three py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 10</p>
                <p class="text-success font-weight-bold">Dòng chảy tối thiểu</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU10.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU10">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-three py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 11</p>
                <p class="text-success font-weight-bold">Số lượng CTKT phân theo loại hình</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU11.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU11">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-three py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 12</p>
                <p class="text-success font-weight-bold">Lượng nước khai thác sử dụng</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU12.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU12">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-three py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 13</p>
                <p class="text-success font-weight-bold">Chỉ tiêu chất lượng nước mặt</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU13.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU13">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-three py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 14</p>
                <p class="text-success font-weight-bold">Chỉ tiêu chất lượng nước dưới đất</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU14.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU14">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-three py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 15</p>
                <p class="text-success font-weight-bold">Văn bản PLTNN đã ban hành</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU15.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU15">
        </div>
        <div class="col-12 d-flex align-items-center report-item report-item-three py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 16</p>
                <p class="text-success font-weight-bold">Số lượng giấy phép TNN đã cấp</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU16.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU16">
        </div>
    </div>

    <!-- Cot bao cao 4 -->
    <div class="col-12 col-lg-3 pb-3 pb-lg-0 px-0 mb-lg-3 d-flex flex-column report-block-four">
        <div class="col-12 d-flex align-items-center report-item report-item-three py-3 py-lg-0">
            <div class="col-8 p-0">
                <p class="text-danger font-weight-bold pt-2 mb-1">Biểu mẫu 25</p>
                <p class="text-success font-weight-bold">Nồng độ chất ô nhiễm</p>
            </div>
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/ANHBIEUMAU25.webp')}}" class="col-4 p-0 d-block" alt="ANHBIEUMAU25">
        </div>
        <div class="col-12 d-flex flex-column align-items-center report-item report-item-four pt-4">
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/bao-cao-su-dung-tnn.webp')}}" class="col-4 p-0 my-2 d-block" alt="bao-cao-su-dung-tnn">
            <div class="col-9 p-0">
                <p class="text-danger font-weight-bold text-center">BÁO CÁO SỬ DỤNG TNN</p>
            </div>
        </div>
        <div class="col-12 d-flex flex-column align-items-center report-item report-item-four pt-4">
            <img src="{{asset('public/TNN_BAO_CAO_BIEU_MAU/image/bao-cao-khai-thac-su-dung-xa-thai.webp')}}" class="col-4 p-0 my-2 d-block" alt="bao-cao-khai-thac-su-dung-xa-thai">
            <div class="col-9 p-0">
                <p class="text-danger font-weight-bold text-center">BÁO CÁO HOẠT ĐỘNG KHAI THÁC, SỬ DỤNG, <br> XẢ THẢI</p>
            </div>
        </div>
    </div>
</main>
@endsection
