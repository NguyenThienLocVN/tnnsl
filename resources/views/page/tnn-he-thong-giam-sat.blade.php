@extends('layout.base')
@section('title', 'Hệ thống giám sát')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_HE_THONG_GIAM_SAT/css/tnn-he-thong-giam-sat.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>>
@endpush

@section('content')
<header>
    <a href="{{url('/')}}"><img class="w-100 banner-tnmt" src="{{asset('public/TNN_TRANG_CHU/image/ANHSOTNMT.png')}}" alt="banner-tnmt"></a>
    <div class="bg-primary d-flex flex-column flex-lg-row top-bar">
        <div class="col-lg-5 col-sm-12 col-md-12 px-0 pt-md-0 pb-md-0 d-flex align-items-center">
            <a href="{{url('/')}}" title="Về trang tài nguyên nước" class="font-weight-bold text-white d-block btn-home-top pl-2 pt-2 pt-md-0 px-2" id="btn_back_page"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
			<div class="d-flex">
				<div class="font-weight-bold text-white d-block pl-2 border-left">HỆ THỐNG GIÁM SÁT</div>
			</div>
        </div>
        <div class="bg-lightgray col-lg-7 col-sm-12 col-md-12 text-center py-1 py-lg-0">
            <span class="text-primary font-weight-bold">HỆ THỐNG QUẢN LÝ,  GIÁM SÁT, KHAI THÁC SỬ DỤNG TÀI NGUYÊN NƯỚC </span>
        </div>
    </div> 
</header>
<main class="d-flex flex-column flex-lg-row">
    <div class="col-12 col-lg-5 pb-3 pb-lg-0 px-lg-0 monitoring-system" id="monitoring-system">
		<!-- Doi tuong giam sat -->
        <div class="monitoring-object pb-2">
          	<p class="col-12 py-1 monitoring-object-title font-weight-bold mb-2">Đối tượng giám sát</p>
          	<div class="monitoring-object-content">
				<div class="d-flex mb-1">
					<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_NUOCMAT.png')}}" alt="ANH_NUOCMAT" class="col-1 py-0 pl-0 pr-2">
					<span class="font-weight-bold col-3 p-0 font-13 mr-1">NƯỚC MẶT</span>
					<div class="text-center w-100">
						<span>Loại công trình</span>
						<select name="construction" class="facewater-construction-select construction-select" id="facewater-construction-select">
							<option value="tat-ca-nuoc-mat">Tất cả</option>
							<option value="TREN2MW">Hồ thủy điện trên 2MW</option>
							<option value="DUOI2MW">Hồ thủy điện dưới 2MW</option>
							<option value="ho-thuy-dien-tren-2m">Hồ SXNN trên 2m3/s</option>
							<option value="ho-thuy-dien-duoi-2m">Hồ SXNN dưới 2m3/s</option>
							<option value="ho-thuy-muc-dich-khac-tren-50000m">Hồ mục đích khác &gt; 50.000 3/s</option>
							<option value="ho-thuy-muc-dich-khac-duoi-50000m">Hồ mục đích khác &lt; 50.000 3/s</option>
							<option value="cong-tram-bom-tren-2m">Cống, trạm bơm &gt; 2m3/s</option>
							<option value="cong-tram-bom-duoi-2m">Cống, trạm bơm &lt; 2m3/s</option>
							<option value="cong-tram-bom-tren-50000m">Cống, trạm bơm &gt; 50.000 3/s</option>
							<option value="cong-tram-bom-duoi-50000m">Cống, trạm bơm &lt; 50.000 3/s</option>
						</select>
					</div>
				</div>
				<div class="d-flex">
					<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_NUOCDUOIDAT.png')}}" alt="ANH_NUOCDUOIDAT" class="col-1 py-0 pl-0 pr-2">
					<span class="font-weight-bold col-3 p-0 font-13 mr-1">NƯỚC DƯỚI ĐẤT</span>
					<div class="text-center w-100">
						<span>Loại công trình</span>
						<select name="" class="facewater-construction-select construction-select" id="facewater-construction-select">
							<option value="tat-ca-nuoc-mat">Tất cả</option>
							<option value="ho-thuy-dien-tren-2MW">Hồ thủy điện trên 2MW</option>
							<option value="ho-thuy-dien-duoi-2MW">Hồ thủy điện dưới 2MW</option>
							<option value="ho-thuy-dien-tren-2m">Hồ SXNN trên 2m3/s</option>
							<option value="ho-thuy-dien-duoi-2m">Hồ SXNN dưới 2m3/s</option>
							<option value="ho-thuy-muc-dich-khac-tren-50000m">Hồ mục đích khác &gt; 50.000 3/s</option>
							<option value="ho-thuy-muc-dich-khac-duoi-50000m">Hồ mục đích khác &lt; 50.000 3/s</option>
							<option value="cong-tram-bom-tren-2m">Cống, trạm bơm &gt; 2m3/s</option>
							<option value="cong-tram-bom-duoi-2m">Cống, trạm bơm &lt; 2m3/s</option>
							<option value="cong-tram-bom-tren-50000m">Cống, trạm bơm &gt; 50.000 3/s</option>
							<option value="cong-tram-bom-duoi-50000m">Cống, trạm bơm &lt; 50.000 3/s</option>
						</select>
					</div>
				</div>
          	</div>
		</div>
		<!-- Ket thuc doi tuong giam sat -->

		<!-- So lieu quan trac -->
		<div class="observed-data pb-2">
			<p class="col-12 py-1 observed-data-title font-weight-bold mb-1">Số liệu quan trắc, vận hành</p>
			<div class="observed-data-content font-13">
				<div class="d-flex col-12 pl-0 observed-data-content-row mb-1">
					<div class="col-3 grid-item d-flex flex-column px-1" id="mua">
						<p class="text-center mb-1">MƯA</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span class="count_rain_stations">{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Trạm</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_MUA.png')}}" class="w-100" alt="ANH_MUA">
							</div>
						</div>
					</div>
					<div class="col-3 grid-item d-flex flex-column px-1 ml-1">
						<p class="text-center mb-1">MỰC NƯỚC</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span class="count_rain_stations">{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_MUCNUOC.png')}}" class="w-100" alt="ANH_MUCNUOC">
							</div>
						</div>
					</div>
					<div class="col-3 grid-item d-flex flex-column px-1 ml-1">
						<p class="text-center mb-1">Q<sub>đến</sub> (m<sup>3</sup>/s)</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span class="count_rain_stations">{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QDEN.png')}}" class="w-100" alt="ANH_QDEN">
							</div>
						</div>
					</div>
					<div class="col-3 grid-item d-flex flex-column px-1 ml-1">
						<p class="text-center mb-1">Q<sub>xả</sub> (m<sup>3</sup>/s)</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span class="count_rain_stations">{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QXA.png')}}" class="w-100" alt="ANH_QXA">
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex col-12 pl-0 observed-data-content-row">
					<div class="col-3 grid-item d-flex flex-column px-1 justify-content-between">
						<p class="text-center mb-1">Q<sub>tối thiểu</sub> (m<sup>3</sup>/s)</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Trạm</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QTOITHIEU.png')}}" class="w-100" alt="ANH_QTOITHIEU">
							</div>
						</div>
					</div>
					<div class="col-3 grid-item d-flex flex-column px-1 ml-1 justify-content-between">
						<p class="text-center mb-1">Chất lượng nước</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_CHATLUONGNUOC.png')}}" class="w-100" alt="ANH_CHATLUONGNUOC">
							</div>
						</div>
					</div>
					<div class="col-3 grid-item d-flex flex-column px-1 ml-1">
						<p class="text-center mb-1">Mực nước trong giếng quan trắc</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_MUCNUOCGIENG.png')}}" class="w-100" alt="ANH_MUCNUOCGIENG">
							</div>
						</div>
					</div>
					<div class="col-3 grid-item d-flex flex-column px-1 ml-1">
						<p class="text-center mb-1">Lưu lượng khai thác NDD</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_LUULUONGKHAITHACNUOCDUOIDAT.png')}}" class="w-100" alt="ANH_LUULUONGKHAITHACNUOCDUOIDAT">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Ket thuc so lieu quan trac -->

		<!-- Thong tin giam sat -->
		<div class="observed-info pb-2">
			<p class="col-12 py-1 observed-info-title font-weight-bold mb-1">Thông tin tổng hợp tình hình giám sát</p>
			<div class="observed-info-content font-13">
				<div class="d-flex col-12 pl-0 observed-info-content-row mb-1">
					<div class="col-3 grid-item d-flex flex-column px-1">
						<p class="text-center mb-1">Camera</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_CAMERA.png')}}" class="w-100" alt="ANH_CAMERA">
							</div>
						</div>
					</div>
					<div class="col-3 grid-item d-flex flex-column px-1 ml-1">
						<p class="text-center mb-1">Trực tuyến</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_TRUCTUYEN.png')}}" class="w-100" alt="ANH_TRUCTUYEN">
							</div>
						</div>
					</div>
					<div class="col-3 grid-item d-flex flex-column px-1 ml-1">
						<p class="text-center mb-1">Định kỳ</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_DINHKY.png')}}" class="w-100" alt="ANH_DINHKY">
							</div>
						</div>
					</div>
					<div class="col-3 grid-item d-flex flex-column px-1 ml-1">
						<p class="text-center mb-1">Hình ảnh</p>
						<div class="d-flex align-items-center">
							<div class="col-6 p-0">
								<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
								<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
							</div>
							<div class="col-6 p-0">
								<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_HINHANH.png')}}" class="w-100" alt="ANH_HINHANH">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Ket thuc thong tin giam sat -->

		<!-- Giam sat ho chua de phat dien & sxnn -->
		<div class="observed-for-electric pb-2 d-flex">
			<div class="col-6 pl-0 pr-1">
				<!-- Giam sat ho chua de phat dien -->
				<p class="col-12 py-1 px-1 text-center observed-for-electric-title font-weight-bold mb-1 font-14">Giám sát hồ chứa để phát điện</p>
				<div class="observed-for-electric-content font-13">
					<div class="d-flex col-12 pl-0 pr-1 observed-for-electric-content-row mb-1">
						<div class="col-6 grid-item d-flex flex-column px-1">
							<p class="text-center mb-1">Mực nước</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_MUCNUOC.png')}}" class="w-100" alt="ANH_MUCNUOC">
								</div>
							</div>
						</div>
						<div class="col-6 grid-item d-flex flex-column px-1 ml-1">
							<p class="text-center mb-1">Q<sub>xả</sub> tối thiểu</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QXATOITHIEU.png')}}" class="w-100" alt="ANH_QXATOITHIEU">
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex col-12 pl-0 pr-1 observed-for-electric-content-row mb-1">
						<div class="col-6 grid-item d-flex flex-column px-1">
							<p class="text-center mb-1">Q<sub>xả</sub> qua nhà máy</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QXANHAMAY.png')}}" class="w-100" alt="ANH_QXANHAMAY">
								</div>
							</div>
						</div>
						<div class="col-6 grid-item d-flex flex-column px-1 ml-1">
							<p class="text-center mb-1">Q<sub>xả</sub> tràn</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QXATRAN.png')}}" class="w-100" alt="ANH_QXATRAN">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Giam sat ho chua de sxnn -->
			<div class="col-6 p-0 ">
				<p class="col-12 py-1 px-1 text-center observed-for-electric-title font-weight-bold mb-1 font-14">Giám sát hồ chứa để SXNN</p>
				<div class="observed-for-electric-content font-13">
					<div class="d-flex col-12 pl-0 pr-1 observed-for-electric-content-row mb-1">
						<div class="col-6 grid-item d-flex flex-column px-1">
							<p class="text-center mb-1">Mực nước</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_MUCNUOC.png')}}" class="w-100" alt="ANH_MUCNUOC">
								</div>
							</div>
						</div>
						<div class="col-6 grid-item d-flex flex-column px-1 ml-1">
							<p class="text-center mb-1">Q<sub>xả</sub> tối thiểu</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QXATOITHIEU.png')}}" class="w-100" alt="ANH_QXATOITHIEU">
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex col-12 pl-0 pr-1 observed-for-electric-content-row mb-1">
						<div class="col-6 grid-item d-flex flex-column px-1">
							<p class="text-center mb-1">Q<sub>khai thác</sub> </p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QKHAITHAC.png')}}" class="w-100" alt="ANH_QKHAITHAC">
								</div>
							</div>
						</div>
						<div class="col-6 grid-item d-flex flex-column px-1 ml-1">
							<p class="text-center mb-1">CLN khai thác</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">Hồ</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_CLNSXNN.png')}}" class="w-100" alt="ANH_CLNSXNN">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Giam sat cong trinh khac -->
		<div class="observed-for-electric pb-2 d-flex">
			<div class="col-5 pl-0 pr-1">
				<p class="col-12 py-1 px-1 text-center observed-for-electric-title font-weight-bold mb-1 font-14">Giám sát công trình khác</p>
				<div class="observed-for-electric-content font-13">
					<div class="d-flex col-12 pl-0 pr-1 observed-for-electric-content-row mb-1">
						<div class="col-6 grid-item d-flex flex-column px-1">
							<p class="text-center mb-1">Q<sub>khai thác</sub></p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">CT</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QKHAITHACKHAC.png')}}" class="w-100" alt="ANH_QKHAITHACKHAC">
								</div>
							</div>
						</div>
						<div class="col-6 grid-item d-flex flex-column px-1 ml-1">
							<p class="text-center mb-1">CLN khai thác</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">CT</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_CLNKHAITHAC.png')}}" class="w-100" alt="ANH_CLNKHAITHAC">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Giam sat khai thac nuoc duoi dat -->
			<div class="col-7 p-0 ">
				<p class="col-12 py-1 px-1 text-center observed-for-electric-title font-weight-bold mb-1 font-14">Giám sát khai thác NDD</p>
				<div class="observed-for-electric-content font-13">
					<div class="d-flex col-12 pl-0 pr-2 observed-for-electric-content-row mb-1">
						<div class="col-4 grid-item d-flex flex-column px-1">
							<p class="text-center mb-1">Q<sub>khai thác</sub></p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">CT</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_QKHAITHACNDD.png')}}" class="w-100" alt="ANH_QKHAITHACNDD">
								</div>
							</div>
						</div>
						<div class="col-4 grid-item d-flex flex-column px-1 ml-1">
							<p class="text-center mb-1">Mực nước</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">CT</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_MUCNUOCGIENG.png')}}" class="w-100" alt="ANH_MUCNUOCGIENG">
								</div>
							</div>
						</div>
						<div class="col-4 grid-item d-flex flex-column px-1 ml-1">
							<p class="text-center mb-1">CLN k/thác</p>
							<div class="d-flex align-items-center">
								<div class="col-6 p-0">
									<p class="text-center font-13 font-weight-bold m-0 text-success"><span>0</span>/<span>{{$count_all_rain_stations}}</span></p>
									<p class="font-weight-bold text-danger text-center mb-1">CT</p>
								</div>
								<div class="col-6 p-0">
									<img src="{{asset('public/TNN_HE_THONG_GIAM_SAT/image/ANH_CLNNDD.png')}}" class="w-100" alt="ANH_CLNNDD">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="col-12 col-lg-7 pb-3 map-container px-md-0">
      <div id="map" class="h-100 w-100 position-relative">
        <img title="Về trung tâm bản đồ" class="position-absolute map-tool center-map" id="center-map" src="{{'public/TNN_TRANG_CHU/image/ANH_VEGIUABANDO.png'}}" alt="trung-tam-ban-do">
        <img title="Vị trí hiện tại" class="position-absolute map-tool current-location" id="current-location" src="{{'public/TNN_TRANG_CHU/image/ANH_VITRIHIENTAI.png'}}" alt="vi-tri-hien-tai">
        <img title="Phóng to" class="position-absolute map-tool zoom-in" id="zoom-in" src="{{'public/TNN_TRANG_CHU/image/ANH_PHONGTO.png'}}" alt="phong-to">
        <img title="Thu nhỏ" class="position-absolute map-tool zoom-out" id="zoom-out" src="{{'public/TNN_TRANG_CHU/image/ANH_THUNHO.png'}}" alt="thu-nho">
        <img title="Thêm công trình" class="position-absolute map-tool add-construction" src="{{'public/TNN_TRANG_CHU/image/ANH_THEMCONGTRINH.png'}}" alt="them-cong-trinh">
        <img title="Sửa công trình" class="position-absolute map-tool edit-construction" src="{{'public/TNN_TRANG_CHU/image/ANH_SUACONGTRINH.png'}}" alt="sua-cong-trinh">
        <img title="Xem thông tin" class="position-absolute map-tool view-info" src="{{'public/TNN_TRANG_CHU/image/ANH_XEMTHONGTIN.png'}}" alt="xem-thong-tin">
        <img title="Đo khoảng cách" class="position-absolute map-tool distance-measure" src="{{'public/TNN_TRANG_CHU/image/ANH_DOKHOANGCACH.png'}}" alt="do-khoang-cach">
        <div class="position-absolute map-layers d-flex align-items-center">
            <img src="{{'public/TNN_TRANG_CHU/image/ANH_LOPBANDO.png'}}" alt="lop-ban-do">
            <span class="font-weight-bold">&nbsp; Lớp bản đồ</span>
        </div>
        <div class="position-absolute map-note d-flex align-items-center">
            <img src="{{'public/TNN_TRANG_CHU/image/ANH_CHUGIAIBANDO.png'}}" alt="chu-giai-ban-do">
            <span class="font-weight-bold">&nbsp; Chú giải</span>
        </div>
      </div>
    </div>
</main>
<script>
	$(document).ready(function () {
		// click link rain page
		$("#mua").click(function(){
			$.ajax(
				{
					url:"http://localhost/tnnsl/he-thong-giam-sat-thuy-dien-mua", 
					success: function(rs){
						$("#monitoring-system").html(rs);
					}
				}
			)
			// set atr href back page
			$("#btn_back_page").attr("href","{{route('he-thong-giam-sat')}}");
			$("#btn_back_page").attr("title","Về trang hệ thống giám sát");
		})
		// count_rain_stations 
		$("#facewater-construction-select").change(function() {
			if($(this).val() == "tat-ca-nuoc-mat"){
				$(".count_rain_stations").html("{{$count_all_rain_stations}}");
			}
			else if($(this).val() == "TREN2MW"){
				$(".count_rain_stations").html("{{$count_rain_stations_over_2MW}}");
			}else if($(this).val() == "DUOI2MW"){
				$(".count_rain_stations").html("{{$count_rain_stations_below_2MW}}");
			}

		});
	});
</script>
@endsection
