
<div class="exploit-surfacewater">
    <div class="row pb-2 mx-0">
        <label for="construction_name" class="col-sm-12 col-form-label fw-bold font-13">Tên công trình</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="construction_name" name="construction_name" placeholder=" -- Tên công trình --" >
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="construction_type" class="col-sm-12 col-form-label fw-bold font-13"> Ký hiệu công trình </label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="construction_type" name="construction_type" placeholder=" -- Ký hiệu công trình --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="contruction_address" class="col-sm-12 col-form-label fw-bold font-13"> Địa điểm công trình</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="contruction_address" name="contruction_address" placeholder=" --  Địa điểm công trình --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <div class="col-sm-6 pb-2 mx-0">
            <label for="huyen" class="col-sm-12 col-form-label fw-bold font-13">Huyện </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="huyen" class="form-control form-control-sm bg-white" name="huyen">
                        <option value="0">-- Huyện --</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-6 pb-2 mx-0">
            <label for="xa" class="col-sm-12 col-form-label fw-bold font-13">Xã </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="xa" class="form-control form-control-sm bg-white" name="xa">
                        <option value="0">-- Xã --</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-2 px-2 mx-0">
        <label for="muc_dich_sd" class="col-sm-12 col-form-label fw-bold font-13">Mục đích sử dụng </label>
        <div class="col-sm-12">
        <textarea name="muc_dich_sd" id="muc_dich_sd" class="form-control form-control-sm" cols="30" rows="4" placeholder=" -- Mục đích sử dụng--" ></textarea>
        </div>
    </div>
    <div class="pb-2 px-2 mx-0">
        <label for="nguon_nuoc_kt_sd" class="col-sm-12 col-form-label fw-bold font-13">Nguồn nước khai thác sử dụng</label>
        <div class="col-sm-12">
            <textarea name="nguon_nuoc_kt_sd" id="nguon_nuoc_kt_sd" class="form-control form-control-sm" cols="30" rows="4" placeholder=" -- Nguồn nước khai thác sử dụng--" ></textarea>
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="thuoc_song" class="col-sm-12 col-form-label fw-bold font-13"> Thuộc sông</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="thuoc_song" name="thuoc_song" placeholder=" -- Thuộc sông --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="thuoc_luu_vuc_song" class="col-sm-12 col-form-label fw-bold font-13"> Thuộc lưu vực sông</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="thuoc_luu_vuc_song" name="thuoc_luu_vuc_song" placeholder=" -- Thuộc lưu vực sông --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="che_do_kt" class="col-sm-12 col-form-label fw-bold font-13"> Chế độ khai thác</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="che_do_kt" name="che_do_kt" placeholder=" -- Chế độ khai thác --">
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="luong_nuoc_kt_sd" class="col-sm-12 col-form-label fw-bold font-13"> Lượng nước khai thác, sử dụng</label>
        <div class="col-sm-12">
            <textarea class="form-control form-control-sm" id="luong_nuoc_kt_sd" name="luong_nuoc_kt_sd" placeholder=" -- Lượng nước khai thác, sử dụng --" cols="30" rows="4"></textarea>
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="phuong_thuc_kt" class="col-sm-12 col-form-label fw-bold font-13"> Phương thức khai thác</label>
        <div class="col-sm-12">
            <textarea class="form-control form-control-sm" id="phuong_thuc_kt" name="phuong_thuc_kt" placeholder=" -- Phương thức khai thác --" cols="30" rows="4"></textarea>
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <div class="col-sm-6 pb-2 mx-0">
            <label for="loai_kinh_tuyen_truc" class="col-sm-12 col-form-label fw-bold font-13">Loại kinh tuyến trục </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="loai_kinh_tuyen_truc" class="form-control form-control-sm bg-white" name="loai_kinh_tuyen_truc">
                        <option value="0">-- Loại kinh tuyến trục --</option>
                        <option value="1">-- Cấp địa phương --</option>
                        <option value="2">-- Cấp trung ương --</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-6 pb-2 mx-0">
            <label for="mui_chieu" class="col-sm-12 col-form-label fw-bold font-13">Múi chiếu </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="mui_chieu" class="form-control form-control-sm bg-white" name="mui_chieu">
                        <option value="0">-- Múi chiếu --</option>
                        <option value="1"> Múi chiếu 3 độ</option>
                        <option value="2"> Múi chiếu 6 độ</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="nam_sd" class="col-sm-12 col-form-label fw-bold font-13"> Năm sử dụng</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="nam_sd" name="nam_sd" placeholder=" -- Năm sử dụng --">
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="ghi_chu_ct" class="col-sm-12 col-form-label fw-bold font-13"> Ghi chú CT</label>
        <div class="col-sm-12">
            <textarea class="form-control form-control-sm" id="ghi_chu_ct" name="ghi_chu_ct" placeholder=" -- Ghi chú CT --" cols="30" rows="4"></textarea>
        </div>
    </div>
</div>
<div class="exploit-surfacewater mb-2">
    <div class="row pb-2 mx-0">
        <label for="cong_suat_lap_may" class="col-sm-12 col-form-label fw-bold font-13"> Công suất lắp máy(MW)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="cong_suat_lap_may" name="cong_suat_lap_may" placeholder=" -- Công suất lắp máy(MW) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="q_max_thuy_dien" class="col-sm-12 col-form-label fw-bold font-13"> Lưu lượng lớn nhất qua nhà máy thủy điện (m3/s)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="q_max_thuy_dien" name="q_max_thuy_dien" placeholder=" -- Lưu lượng lớn nhất qua nhà máy thủy điện (m3/s) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="q_xa_tt" class="col-sm-12 col-form-label fw-bold font-13"> Lưu lượng xả dòng chảy tối thiểu (m3/s)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="q_xa_tt" name="q_xa_tt" placeholder=" -- Lưu lượng xả dòng chảy tối thiểu (m3/s) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="dung_tich_huu_ich" class="col-sm-12 col-form-label fw-bold font-13"> Dung tích hữu ích (triệu m3)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="dung_tich_huu_ich" name="dung_tich_huu_ich" placeholder=" -- Dung tích hữu ích (triệu m3) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="dung_tich_toan_bo" class="col-sm-12 col-form-label fw-bold font-13"> Dung tích toàn bộ (triệu m3)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="dung_tich_toan_bo" name="dung_tich_toan_bo" placeholder=" -- Dung tích toàn bộ (triệu m3) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="muc_nuoc_chet" class="col-sm-12 col-form-label fw-bold font-13"> Mực nước chết (m)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="muc_nuoc_chet" name="muc_nuoc_chet" placeholder=" -- Mực nước chết (m) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="muc_nuoc_dang_bt" class="col-sm-12 col-form-label fw-bold font-13"> Mực nước dâng bình thường (m)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="muc_nuoc_dang_bt" name="muc_nuoc_dang_bt" placeholder=" -- Mực nước dâng bình thường (m) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="muc_nuoc_max_truoc_lu" class="col-sm-12 col-form-label fw-bold font-13"> Mực nước cao nhất trước lũ (m)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="muc_nuoc_max_truoc_lu" name="muc_nuoc_max_truoc_lu" placeholder=" -- Mực nước cao nhất trước lũ (m) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="muc_nuoc_don_lu" class="col-sm-12 col-form-label fw-bold font-13"> Mực nước đón lũ (m)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="muc_nuoc_don_lu" name="muc_nuoc_don_lu" placeholder=" -- Mực nước đón lũ (m) --">
        </div>
    </div>
</div>
<div class="exploit-surfacewater mb-2">
    <p class="col-12 py-1 px-2 exploit-surfacewater-title fw-bold mb-2">Lưu lượng theo mục đích khai thác sử dụng</p>
    <div class="pb-2 mx-0 px-2">
       <table class="table table-bordered">
           <thead class="thead-light">
           <tr class="text-center">
                   <td colspan="6">
                       <div class="col-12 d-flex justify-content-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LuuLuongThepMucDichKTSD">
                            +
                            </button>
                        </div>
                    </td>
               </tr>
               <tr class="text-center">
                   <th class="font-13">#</th>
                   <th class="font-13">Mục đích</th>
                   <th class="font-13">Lưu lượng</th>
                   <th class="font-13">Đơn vị đo</th>
                   <th class="font-13">Thao tác</th>
               </tr>
           </thead>
           <tbody>
               <tr class="text-center">
                   <td colspan="5"><p class="text-secondary font-12">Không có dữ liệu</p></td>
               </tr>
           </tbody>
       </table>
    </div>
     <!-- Modal LuuLuongThepMucDichKTSD -->
     <div class="modal fade" id="LuuLuongThepMucDichKTSD" tabindex="-1" aria-labelledby="LuuLuongThepMucDichKTSDLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ThanhTraKiemTraLabel">Lưu lượng theo mục đích khai thác sử dụng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="font-13 fw-bold" for="muc_dich">Mục đích</label>
                    <input type="text" class="form-control font-13" id="muc_dich" placeholder="Mục đích">
                </div>
                <div class="form-group">
                    <label class="font-13 fw-bold" for="luu_luong">Lưu lượng</label>
                    <input type="text" class="form-control font-13" id="luu_luong" placeholder="Lưu lượng">
                </div>
                <div class="form-group">
                    <label class="font-13 fw-bold" for="dv_do">Đơn vị đo</label>
                    <input type="text" class="form-control font-13" id="dv_do" placeholder="Đơn vị đo">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-save"></i></button>
            </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
</div>
<div class="exploit-surfacewater mb-2">
    <p class="col-12 py-1 px-2 exploit-surfacewater-title fw-bold mb-2">Tọa độ công trình</p>
    <div class="pb-2 mx-0 px-2">
       <table class="table table-bordered">
           <thead class="thead-light">
                <tr class="text-center">
                   <td colspan="6">
                       <div class="col-12 d-flex justify-content-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ToaDoCongTrinh">
                            +
                            </button>
                        </div>
                    </td>
               </tr>
               <tr class="text-center">
                   <th class="font-13">#</th>
                   <th class="font-13">Ký hiệu</th>
                   <th class="font-13">Tọa Độ X</th>
                   <th class="font-13">Tọa Độ Y</th>
                   <th class="font-13">Thao tác</th>
               </tr>
           </thead>
           <tbody>
               <tr class="text-center">
                   <td colspan="5"><p class="text-secondary font-12">Không có dữ liệu</p></td>
               </tr>
           </tbody>
       </table>
    </div>
    <!-- Modal ToaDoCongTrinh -->
    <div class="modal fade" id="ToaDoCongTrinh" tabindex="-1" aria-labelledby="ToaDoCongTrinhLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ThanhTraKiemTraLabel">Tọa độ công trình</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="font-13 fw-bold" for="ky_hieu_ct">Ký hiêu CT</label>
                    <input type="text" class="form-control font-13" id="ky_hieu_ct" placeholder="Ký hiêu CT">
                </div>
                <div class="form-group">
                    <label class="font-13 fw-bold" for="toa_do_x_ct">Tọa độ X</label>
                    <input type="text" class="form-control font-13" id="toa_do_x_ct" placeholder="Tọa độ X">
                </div>
                <div class="form-group">
                    <label class="font-13 fw-bold" for="toa_do_y_ct">Tọa Độ Y</label>
                    <input type="text" class="form-control font-13" id="toa_do_y_ct" placeholder="Tọa Độ Y">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-save"></i></button>
            </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
</div>
<div class="exploit-surfacewater mb-2">
    <p class="col-12 py-1 px-2 exploit-surfacewater-title fw-bold mb-2">Hạng mục công trình</p>
    <div class="pb-2 mx-0 px-2">
       <table class="table table-bordered">
           <thead class="thead-light">
                <tr class="text-center">
                   <td colspan="6">
                       <div class="col-12 d-flex justify-content-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#HangMucCongTrinh">
                            +
                            </button>
                        </div>
                    </td>
               </tr>
               <tr class="text-center">
                   <th class="font-13" rowspan="2">#</th>
                   <th class="font-13" rowspan="2">Tên hạng mục</th>
                   <th class="font-13" colspan="2">Tọa Độ</th>
                   <th class="font-13" rowspan="2">Mô tả</th>
                   <th class="font-13" rowspan="2">Thao tác</th>
               </tr>
               <tr class="text-center">
                    <th class="font-13">X</th>
                    <th class="font-13">Y</th>
               </tr>
           </thead>
           <tbody>
               <tr class="text-center">
                   <td colspan="6"><p class="text-secondary font-12">Không có dữ liệu</p></td>
               </tr>
           </tbody>
       </table>
    </div>
    <!-- Modal HangMucCongTrinh -->
    <div class="modal fade" id="HangMucCongTrinh" tabindex="-1" aria-labelledby="HangMucCongTrinhLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ThanhTraKiemTraLabel">Hạng mục công trình</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="font-13 fw-bold" for="ten_hang_muc_ct">Tên hạng mục</label>
                    <input type="text" class="form-control font-13" id="ten_hang_muc_ct" placeholder="Ký hiêu CT">
                </div>
                <div class="form-group">
                    <label class="font-13 fw-bold" for="toa_do_x_hang_muc_ct">Tọa độ X</label>
                    <input type="text" class="form-control font-13" id="toa_do_x_hang_muc_ct" placeholder="Tọa độ X">
                </div>
                <div class="form-group">
                    <label class="font-13 fw-bold" for="toa_do_y_hang_muc_ct">Tọa Độ Y</label>
                    <input type="text" class="form-control font-13" id="toa_do_y_hang_muc_ct" placeholder="Tọa Độ Y">
                </div>
                <div class="form-group">
                    <label class="font-13 fw-bold" for="muc_dich_hang_muc_vt">Mục đích</label>
                    <input type="text" class="form-control font-13" id="muc_dich_hang_muc_vt" placeholder="Mục đích">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-save"></i></button>
            </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
</div>

