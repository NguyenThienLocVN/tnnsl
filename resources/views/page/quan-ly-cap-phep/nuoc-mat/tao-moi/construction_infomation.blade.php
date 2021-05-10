
<div class="exploit-surfacewater">
    <div class="row pb-2 mx-0">
        <label for="constrction_name" class="col-sm-12 col-form-label fw-bold">Tên công trình</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="constrction_name" name="constrction_name" placeholder=" -- Tên công trình --" >
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="construction_type" class="col-sm-12 col-form-label fw-bold"> Ký hiệu công trình </label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="construction_type" name="construction_type" placeholder=" -- Ký hiệu công trình --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="contruction_address" class="col-sm-12 col-form-label fw-bold"> Địa điểm công trình</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="contruction_address" name="contruction_address" placeholder=" --  Địa điểm công trình --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <div class="col-sm-6 pb-2 mx-0">
            <label for="cap_tham_quyen" class="col-sm-12 col-form-label fw-bold">Huyện </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="cap_tham_quyen" class="form-control form-control-sm" name="cap_tham_quyen">
                        <option value="0">-- Huyện --</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-6 pb-2 mx-0">
            <label for="license_type" class="col-sm-12 col-form-label fw-bold">Xã </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="license_type" class="form-control form-control-sm" name="license_type">
                        <option value="0">-- Xã --</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-2 px-2 mx-0">
        <label for="muc_dich_sd" class="col-sm-12 col-form-label fw-bold">Mục đích sử dụng </label>
        <div class="col-sm-12">
        <textarea name="muc_dich_sd" id="muc_dich_sd" class="form-control form-control-sm" cols="30" rows="4" placeholder=" -- Mục đích sử dụng--" ></textarea>
        </div>
    </div>
    <div class="pb-2 px-2 mx-0">
        <label for="nguon_nuoc_kt_sd" class="col-sm-12 col-form-label fw-bold">Nguồn nước khai thác sử dụng</label>
        <div class="col-sm-12">
            <textarea name="nguon_nuoc_kt_sd" id="nguon_nuoc_kt_sd" class="form-control form-control-sm" cols="30" rows="4" placeholder=" -- Nguồn nước khai thác sử dụng--" ></textarea>
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="thuoc_song" class="col-sm-12 col-form-label fw-bold"> Thuộc sông</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="thuoc_song" name="thuoc_song" placeholder=" -- Thuộc sông --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="thuoc_luu_vuc_song" class="col-sm-12 col-form-label fw-bold"> Thuộc lưu vực sông</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="thuoc_luu_vuc_song" name="thuoc_luu_vuc_song" placeholder=" -- Thuộc lưu vực sông --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="che_do_kt" class="col-sm-12 col-form-label fw-bold"> Chế độ khai thác</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="che_do_kt" name="che_do_kt" placeholder=" -- Chế độ khai thác --">
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="luong_nuoc_kt_sd" class="col-sm-12 col-form-label fw-bold"> Lượng nước khai thác, sử dụng</label>
        <div class="col-sm-12">
            <textarea class="form-control form-control-sm" id="luong_nuoc_kt_sd" name="luong_nuoc_kt_sd" placeholder=" -- Lượng nước khai thác, sử dụng --" cols="30" rows="4"></textarea>
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="phuong_thuc_kt" class="col-sm-12 col-form-label fw-bold"> Phương thức khai thác</label>
        <div class="col-sm-12">
            <textarea class="form-control form-control-sm" id="phuong_thuc_kt" name="phuong_thuc_kt" placeholder=" -- Phương thức khai thác --" cols="30" rows="4"></textarea>
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <div class="col-sm-4 pb-2 mx-0">
            <label for="loai_kinh_tuyen_truc" class="col-sm-12 col-form-label fw-bold">Loại kinh tuyến trục </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="loai_kinh_tuyen_truc" class="form-control form-control-sm" name="loai_kinh_tuyen_truc">
                        <option value="0">-- Loại kinh tuyến trục --</option>
                        <option value="1">-- Cấp địa phương --</option>
                        <option value="2">-- Cấp trung ương --</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-4 pb-2 mx-0">
            <label for="kinh_tuyen_truc" class="col-sm-12 col-form-label fw-bold">Kinh tuyến trục(VN2000) </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="kinh_tuyen_truc" class="form-control form-control-sm" name="kinh_tuyen_truc">
                        <option value="0">-- Kinh tuyến trục(VN2000) --</option>
                        <option value="1"> 104o0' - Sơn la</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-4 pb-2 mx-0">
            <label for="mui_chieu" class="col-sm-12 col-form-label fw-bold">Múi chiếu </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="mui_chieu" class="form-control form-control-sm" name="mui_chieu">
                        <option value="0">-- Múi chiếu --</option>
                        <option value="1"> Múi chiếu 3 độ</option>
                        <option value="2"> Múi chiếu 6 độ</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="nam_sd" class="col-sm-12 col-form-label fw-bold"> Năm sử dụng</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="nam_sd" name="nam_sd" placeholder=" -- Năm sử dụng --">
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="ghi_chu_ct" class="col-sm-12 col-form-label fw-bold"> Ghi chú CT</label>
        <div class="col-sm-12">
            <textarea class="form-control form-control-sm" id="ghi_chu_ct" name="ghi_chu_ct" placeholder=" -- Ghi chú CT --" cols="30" rows="4"></textarea>
        </div>
    </div>
</div>
<div class="exploit-surfacewater mb-2">
    <div class="row pb-2 mx-0">
        <label for="cong_suat_lap_may" class="col-sm-12 col-form-label fw-bold"> Công suất lắp máy(MW)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="cong_suat_lap_may" name="cong_suat_lap_may" placeholder=" -- Công suất lắp máy(MW) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="q_max_thuy_dien" class="col-sm-12 col-form-label fw-bold"> Lưu lượng lớn nhất qua nhà máy thủy điện (m3/s)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="q_max_thuy_dien" name="q_max_thuy_dien" placeholder=" -- Lưu lượng lớn nhất qua nhà máy thủy điện (m3/s) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="q_xa_tt" class="col-sm-12 col-form-label fw-bold"> Lưu lượng xả dòng chảy tối thiểu (m3/s)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="q_xa_tt" name="q_xa_tt" placeholder=" -- Lưu lượng xả dòng chảy tối thiểu (m3/s) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="dung_tich_huu_ich" class="col-sm-12 col-form-label fw-bold"> Dung tích hữu ích (triệu m3)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="dung_tich_huu_ich" name="dung_tich_huu_ich" placeholder=" -- Dung tích hữu ích (triệu m3) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="dung_tich_toan_bo" class="col-sm-12 col-form-label fw-bold"> Dung tích toàn bộ (triệu m3)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="dung_tich_toan_bo" name="dung_tich_toan_bo" placeholder=" -- Dung tích toàn bộ (triệu m3) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="muc_nuoc_chet" class="col-sm-12 col-form-label fw-bold"> Mực nước chết (m)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="muc_nuoc_chet" name="muc_nuoc_chet" placeholder=" -- Mực nước chết (m) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="muc_nuoc_dang_bt" class="col-sm-12 col-form-label fw-bold"> Mực nước dâng bình thường (m)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="muc_nuoc_dang_bt" name="muc_nuoc_dang_bt" placeholder=" -- Mực nước dâng bình thường (m) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="muc_nuoc_max_truoc_lu" class="col-sm-12 col-form-label fw-bold"> Mực nước cao nhất trước lũ (m)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="muc_nuoc_max_truoc_lu" name="muc_nuoc_max_truoc_lu" placeholder=" -- Mực nước cao nhất trước lũ (m) --">
        </div>
    </div>
    <div class="row pb-2 mx-0">
        <label for="muc_nuoc_don_lu" class="col-sm-12 col-form-label fw-bold"> Mực nước đón lũ (m)</label>
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
                   <td colspan="4"><div class="col-12 d-flex justify-content-end"><button class="btn btn-info float-left">+</button></div></td>
               </tr>
               <tr class="text-center">
                   <th>#</th>
                   <th>Mục đích</th>
                   <th>Lưu lượng</th>
                   <th>Đơn vị đo</th>
                   <th>Thao tác</th>
               </tr>
           </thead>
           <tbody>
               <tr class="text-center">
                   <td colspan="4"><p class="text-secondary">Không có dữ liệu</p></td>
               </tr>
           </tbody>
       </table>
    </div>
</div>
<div class="exploit-surfacewater mb-2">
    <p class="col-12 py-1 px-2 exploit-surfacewater-title fw-bold mb-2">Tọa độ công trình</p>
    <div class="pb-2 mx-0 px-2">
       <table class="table table-bordered">
           <thead class="thead-light">
                <tr class="text-center">
                   <td colspan="5"><div class="col-12 d-flex justify-content-end"><button class="btn btn-info float-left">+</button></div></td>
               </tr>
               <tr class="text-center">
                   <th>#</th>
                   <th>Ký hiệu</th>
                   <th>Tọa Độ X</th>
                   <th>Tọa Độ Y</th>
                   <th>Thao tác</th>
               </tr>
           </thead>
           <tbody>
               <tr class="text-center">
                   <td colspan="5"><p class="text-secondary">Không có dữ liệu</p></td>
               </tr>
           </tbody>
       </table>
    </div>
</div>
<div class="exploit-surfacewater mb-2">
    <p class="col-12 py-1 px-2 exploit-surfacewater-title fw-bold mb-2">Hạng mục công trình</p>
    <div class="pb-2 mx-0 px-2">
       <table class="table table-bordered">
           <thead class="thead-light">
                <tr class="text-center">
                   <td colspan="6"><div class="col-12 d-flex justify-content-end"><button class="btn btn-info float-left">+</button></div></td>
               </tr>
               <tr class="text-center">
                   <th rowspan="2">#</th>
                   <th rowspan="2">Tên hạng mục</th>
                   <th colspan="2">Tọa Độ</th>
                   <th rowspan="2">Mô tả</th>
                   <th rowspan="2">Thao tác</th>
               </tr>
               <tr class="text-center">
                    <th>X</th>
                    <th>Y</th>
               </tr>
           </thead>
           <tbody>
               <tr class="text-center">
                   <td colspan="6"><p class="text-secondary">Không có dữ liệu</p></td>
               </tr>
           </tbody>
       </table>
    </div>
</div>
<div class="row m-0 p-2 justify-content-end">
    <input type="button" value="Tiếp tục >>" id="next_tab" class="col-md-3 btn btn-sm btn-primary mx-2">
</div>
