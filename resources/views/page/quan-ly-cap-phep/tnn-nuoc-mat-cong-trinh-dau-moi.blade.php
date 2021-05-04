@extends('layout.base')
@section('title', 'Thông tin kỹ thuật công trình đầu mối - Nước mặt | Quản lý cấp phép')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('public/TNN_QUAN_LY_CAP_PHEP/css/tnn-quan-ly-cap-phep.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
@endpush

@section('content')
        <form id="form">
            <!-- Ten cong trinh -->
            <div class="exploit-surfacewater mb-2">
                <div class="exploit-surfacewater-content col-12 p-0 my-2">
                    <div class="col-12 d-flex flex-column flex-md-row">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">Tên công trình</span>
                            <input type="text" class="w-100" name="construction_clue_name" id="construction_clue_name" readonly>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">Ký hiệu CT</span>
                            <input type="text" class="w-100" name="construction_symbols" id="construction_symbols" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ket thuc khai thac su dung nuoc mat -->

            <!-- Dac trung luu vuc -->
            <div class="construction-info mb-2">
                <p class="col-12 py-1 construction-info-title font-weight-bold mb-2">Đặc trưng lưu vực</p>
                <div class="construction-info-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">Diện tích</span>
                            <input name="dien_tich" type="text" required class="col-5 col-md-7 px-1 font-13">
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0 ">Q<sub>TK</sub></span>
                            <input name="q_tk" type="text" required class="col-5 col-md-5 col-3 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">Q bq năm</span>
                            <input name="q_bq_nam" type="text" required class="col-5 col-md-7 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0 ">Q<sub>KT</sub></span>
                            <input name="q_kt" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Dac trung luu vuc -->
            <div class="construction-info mb-2">
                <p class="col-12 py-1 construction-info-title font-weight-bold mb-2">Hồ chứa</p>
                <div class="construction-info-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">MNLKT</span>
                            <input name="mnlkt" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0 ">MNLTK</span>
                            <input name="mnltk" type="text" required class="col-5 col-md-5 col-3 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">MNDBT</span>
                            <input name="mndbt" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0 ">MNC</span>
                            <input name="mnc" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">V<sub>tb</sub></span>
                            <input name="v_tb" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(tr m<sup>3</sup>)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0 ">V<sub>c</sub></span>
                            <input name="v_c" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">V<sub>hi</sub></span>
                            <input name="v_hi" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(tr m<sup>3</sup>)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-12 px-0 ">DT hồ-MNDBT</span>
                            <input name="dt_ho_mndbt" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(ha)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cong trinh dau moi -->
            <div class="construction-info mb-2">
                <p class="col-12 py-1 construction-info-title font-weight-bold mb-2">Công trình đầu mối</p>
                <div class="construction-info-content col-12 p-0 mb-3">
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-12 px-0">CT đỉnh đập</span>
                            <input name="ct_dinh_lap" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-12 px-0 ">CD đỉnh đập</span>
                            <input  name="cd_dinh_lap" type="text" required class="col-5 col-md-5 col-3 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">Q<sub>x</sub> lũ tk</span>
                            <input name="q_x_lu_tk" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0 ">Q<sub>x</sub> lũ kt</span>
                            <input name="q_x_lu_kt" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">Chế độ KT</span>
                            <input name="che_do_tk" type="text" required class="col-5 col-md-5 px-1 font-13">
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0 ">Công suất</span>
                            <input name="cong_suat" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(MW)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                        <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-5 col-md-4 font-13 px-0">Q<sub>KT max</sub></span>
                            <input name="q_kt_max" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                            <span class="col-5 font-12 px-0 ">Q<sub>xả</sub> TT</span>
                            <input name="q_xa_tt" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-md-row mb-1">
                        <div class="col-md-12 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                            <span class="col-7 col-md-8 font-13 px-0">Cao độ ngưỡng/chiều rộng 1k_tràn/số k_tràn : </span>
                            <input name="cdn_cr1kt_skt" type="text" required class="col-3 col-md-2 px-1"> (m<sup>3</sup>/ngđ) &nbsp; 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Loai nha tram -->
            <div class="col-12 mb-2 p-0 surfacewater-usage py-1">
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 text-purple">Loại trạm</span>
                        <input name="loai_tram" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0  text-purple">KT kênh dẫn</span>
                        <input name="kt_kenh_dan" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 text-purple">KT kênh tháo</span>
                        <input name="kt_kenh_thao" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0  text-purple">Quy mô bể hút</span>
                        <input name="quy_mo_be_hut" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 text-purple">Quy mô bể xả</span>
                        <input name="quy_mo_be_xa" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0  text-purple">Số máy bơm</span>
                        <input name="so_may_bom" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 text-purple">Loại máy bơm</span>
                        <input  name="loai_may_bom" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0  text-purple">CS t_bơm</span>
                        <input name="cs_t_bom" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/h)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 text-purple">Số giờ bơm</span>
                        <input name="so_gio_bom" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(h)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0  text-purple">Số tổ bơm</span>
                        <input name="so_to_bom" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                </div>
            </div>
            <!-- Ket thuc loai nha tram -->

            <!-- Q nguon KT -->
            <div class="col-12 mb-2 p-0 surfacewater-usage py-1">
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 text-primary">Q<sub>nguồn</sub> KT</span>
                        <input name="q_nguon_kt" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m<sup>3</sup>/s)</span>
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0  text-primary">H<sub>nguồn</sub> KT</span>
                        <input name="h_nguon_kt" type="text" required class="col-5 col-md-5 px-1 font-13">&nbsp;<span class="font-13">(m)</span>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 text-primary">QC áp dụng</span>
                        <input name="qc_ap_dung" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0  text-primary">Nhiệt độ</span>
                        <input name="nhiet_do" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 text-primary">PH</span>
                        <input name="ph" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0  text-primary">COD</span>
                        <input name="cod" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mb-1 my-1">
                    <div class="col-md-6 col-12 d-flex pl-0 pr-0 pr-md-3 mb-1 mb-md-0 align-items-center">
                        <span class="col-5 col-md-4 font-13 px-0 text-primary">Amoni</span>
                        <input name="amoni" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                    <div class="col-md-6 col-12 d-flex pr-0 pl-0 pl-md-3 align-items-center">
                        <span class="col-5 font-12 px-0  text-primary">TSS</span>
                        <input name="tss" type="text" required class="col-5 col-md-5 px-1 font-13">
                    </div>
                </div>
                <hr>
                <div class="col-12 p-0 text-center">
                    <input type="button" id="btn_accept" class="btn py-1 font-13 font-weigh-bold px-3 btn-success mx-2" value="XÁC NHẬN"></input>
                </div>
            </div>
            
            <!-- Ket thuc Q nguon KT -->
        </form>
    <script>
        function update(data, keys, value) {
            if (keys.length === 0) {
                // Leaf node
                return value;
            }

            let key = keys.shift();
            if (!key) {
                data = data || [];
                if (Array.isArray(data)) {
                key = data.length;
                }
            }

            // Try converting key to a numeric value
            let index = +key;
            if (!isNaN(index)) {
                // We have a numeric index, make data a numeric array
                // This will not work if this is a associative array 
                // with numeric keys
                data = data || [];
                key = index;
            }
            
            // If none of the above matched, we have an associative array
            data = data || {};

            let val = update(data[key], keys, value);
            data[key] = val;

            return data;
            }

            function serializeForm (form) {
            return Array.from((new FormData(form)).entries())
                .reduce((data, [field, value]) => {
                let [_, prefix, keys] = field.match(/^([^\[]+)((?:\[[^\]]*\])*)/);

                if (keys) {
                    keys = Array.from(keys.matchAll(/\[([^\]]*)\]/g), m => m[1]);
                    value = update(data[prefix], keys, value);
                }
                data[prefix] = value;
                return data;
                }, {});
            }
            document.getElementById('btn_accept').addEventListener("click",function(){
                var data =  JSON.stringify(serializeForm(document.getElementById('form')), null, 2);
                $("#ct_dau_moi_data").val(data);
                $("#ct___dau___moi").hide();
            })

    </script>
</main>
@endsection
