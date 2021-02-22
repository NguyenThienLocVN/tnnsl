<!-- Khai thac su dung nuoc mat -->
<div class="exploit-surfacewater mb-2">
    <p class="col-12 py-1 exploit-surfacewater-title font-weight-bold mb-2">Khai thác sử dụng nước mặt</p>
    <div class="exploit-surfacewater-content col-12 p-0 mb-3">
        <div class="col-12 d-flex flex-column flex-md-row">
            <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Số giấy phép</span>
                <input type="text" id="license_num" class="col-7 px-1 font-13" readonly>
            </div>
            <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Ngày cấp</span>
                <input type="text" id="license_date" class="col-7 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row my-1">
            <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Thời hạn CP</span>
                <input type="text" id="license_duration" class="col-md-4 col-2 px-1 font-13">&nbsp; <span class="font-13">(năm)</span readonly>
            </div>
            <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Thẩm quyền</span>
                <input type="text" id="license_role" class="col-7 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1">
            <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Đơn vị XCP</span>
                <input type="text" id="organization_request" class="col-7 px-1 font-13" readonly>
            </div>
            <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Cơ quan CP</span>
                <input type="text" id="organization_authorities" class="col-7 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-2">
            <div class="col-sm-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Năm XD</span>
                <input type="text" id="year_built" class="col-md-4 col-2 px-1 font-13" readonly>
            </div>
            <div class="col-sm-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Năm VH</span>
                <input type="text" id="year_operation" class="col-md-4 col-2 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex mb-1">
            <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-view-license" data-toggle="modal" data-target="#licenseFileModal">Xem GP</button>
            <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded" id="btn-print-license">In GP</button>
            <button class="px-2 py-1 btn-license border-0 font-13 mr-2 rounded">Cập nhật GP</button>
            <button class="px-2 py-1 btn-license border-0 font-13 rounded">Gia hạn/Điều chỉnh GP</button>
        </div>
    </div>
</div>
<!-- Ket thuc khai thac su dung nuoc mat -->

<!-- Thong tin cong trinh -->
<div class="construction-info mb-2">
    <p class="col-12 py-1 construction-info-title font-weight-bold mb-2">Thông tin công trình</p>
    <div class="construction-info-content col-12 p-0 mb-3">
        <div class="col-12 d-flex flex-column flex-md-row mb-1">
            <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Tên công trình</span>
                <input type="text" id="construction_name" class="col-7 px-1 font-13" readonly>
            </div>
            <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Ký hiệu CT</span>
                <input type="text" id="construction_code" class="col-md-7 col-3 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
            <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Mục đích SDN</span>
                <input type="text" id="purpose_using_water" class="col-7 px-1 font-13" readonly>
            </div>
            <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Nguồn nước</span>
                <input type="text" id="water_source" class="col-7 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
            <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Huyện</span>
                <input type="text" id="district" class="col-7 px-1 font-13" readonly>
            </div>
            <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Xã</span>
                <input type="text" id="commune" class="col-7 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
            <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Vị trí đập &nbsp; X </span>
                <input type="text" id="long_dams" class="col-7 px-1 font-13" readonly>
            </div>
            <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Vị trí NM &nbsp; X</span>
                <input type="text" id="long_factory" class="col-7 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
            <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Vị trí đập &nbsp; Y</span>
                <input type="text" id="lat_dams" class="col-7 px-1 font-13" readonly>
            </div>
            <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Vị trí NM &nbsp; Y</span>
                <input type="text" id="lat_factory" class="col-7 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
            <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Chế độ KT</span>
                <input type="text" id="exploit_mode" class="col-7 px-1 font-13" readonly>
            </div>
            <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Công suất</span>
                <input type="text" id="wattage" class="col-3 px-1 font-13"> &nbsp; <span class="font-13">(MW)</span readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
            <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Q<sub>KT max<sub></span>
                <input type="text" id="q_kt_max" class="col-4 px-1 font-13"> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span readonly>
            </div>
            <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">Q<sub>KT max mk<sub></span>
                <input type="text" id="q_kt_max_mk" class="col-4 px-1 font-13"> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1 mb-1">
            <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-5 font-13 px-0">Q<sub>xả<sub> TT</span>
                <input type="text" id="q_tt" class="col-4 px-1 font-13"> &nbsp; <span class="font-13">(m<sup>3</sup>/s)</span readonly>
            </div>
            <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                <span class="col-5 font-13 px-0">DT tưới/tiêu tk</span>
                <input type="text" id="watering_area" class="col-4 px-1 font-13"> &nbsp; <span class="font-13">(ha)</span readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1">
            <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-12 font-13 px-0">Q<sub>tưới/tiêu</sub> tk : <input type="text" id="q_tuoi_tieu" class="col-3 px-1"> (m<sup>3</sup>/s) &nbsp; </span readonly>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row mb-1">
            <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                <span class="col-12 font-13 px-0">Q<sub>cấp nước</sub> SH, SX : <input type="text" id="q_cap_nuoc" class="col-3 px-1"> (m<sup>3</sup>/ngđ) &nbsp; </span readonly>
            </div>
        </div>
    </div>
</div>

<!-- Thong tin khac -->
<div class="surfacewater-usage mb-2">
    <p class="col-12 py-1 surfacewater-usage-title font-weight-bold mb-2">Thông tin khác</p>
    <div class="surfacewater-usage-content col-12 pb-3 ">
        <div class="col-12 d-flex mb-1 p-0">
            <div class="col-md-9 col-12 d-flex align-items-center p-0">
                <span class="col-5 font-13 px-0">Cắm mốc HLBVHC</span>
                <input type="text" id="landmark" class="col-7 px-1 font-13" readonly>
            </div>
        </div>
        <div class="col-12 d-flex p-0">
            <div class="col-md-9 col-12 d-flex align-items-center p-0">
                <span class="col-5 font-13 px-0">Tiền cấp quyền</span>
                <input type="text" id="authorization_money" class="col-7 px-1 font-13" readonly>
            </div>
        </div>
    </div>
</div>
<!-- Ket thuc thong tin khac -->

<!-- Quan trac tai nguyen nuoc mat -->
<div class="surfacewater-usage mb-2">
    <p class="col-12 py-1 surfacewater-usage-title font-weight-bold mb-2">Quan trắc tài nguyên nước mặt</p>
    <div class="surfacewater-usage-content col-12 p-0 px-0 mb-3">
        <div class="col-12 d-flex mb-1">
            <div class="col-10 col-md-8 d-flex pl-0 align-items-center">
                <span class="col-5 font-13 px-0">Trạm quan trắc</span>
                <select name="" id="" class="col-md-7 font-13 p-0 form-control-sm cursor-pointer">
                    <option value="" selected>Chọn trạm</option>
                    <option value="">Trạm 1</option>
                    <option value="">Trạm 2</option>
                    <option value="">Trạm 3</option>
                    <option value="">Trạm 4</option>
                </select>
            </div>
            <button class="col-2 px-2 py-1 btn-license border-0 font-13 mr-2 rounded">Xem</button>
        </div>
        <div class="col-12 d-flex">
            <div class="col-10 col-md-8 d-flex pl-0 align-items-center">
                <span class="col-5 font-13 px-0">Camera</span>
                <select name="" id="" class="col-md-7 font-13 p-0 form-control-sm cursor-pointer">
                    <option value="" selected>Chọn trạm</option>
                    <option value="">Trạm 1</option>
                    <option value="">Trạm 2</option>
                    <option value="">Trạm 3</option>
                    <option value="">Trạm 4</option>
                </select>
            </div>
            <button class="col-2 px-2 py-1 btn-license border-0 font-13 mr-2 rounded">Xem</button>
        </div>
    </div>
</div>
<!-- Ket thuc quan trac tai nguyen nuoc mat -->

<!-- Thong tin ky thuat cong trinh -->
<div class="col-12 d-flex flex-column flex-md-row mb-1 p-0 surfacewater-usage">
    <div class="col-md-12 col-12 d-flex pl-0 pr-0 mb-md-0 align-items-center">
        <span class="col-12 py-2 font-weight-bold">Thông tin kỹ thuật công trình đầu mối &nbsp; <a href="{{route('nuoc-mat-cong-trinh-dau-moi')}}" class="col-2 px-2 py-1 btn btn-license border-0 font-13 mr-2 rounded text-center">Xem</a> </span>
    </div>
</div>
<!-- Ket thuc thong tin ky thuat cong trinh -->

<!-- Modal -->
<div class="modal fade" id="licenseFileModal" tabindex="-1" role="dialog" aria-labelledby="licenseFileLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-15 font-weight-bold" id="licenseFileLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="licenseFile" src="#" style="width:100%;height:500px;"></iframe>
      </div>
    </div>
  </div>
</div>