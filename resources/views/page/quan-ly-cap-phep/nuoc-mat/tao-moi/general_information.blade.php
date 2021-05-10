
<div class="exploit-surfacewater">
    <div class="pb-2 mx-0 px-2">
        <label for="organization_name" class="col-sm-12 col-form-label fw-bold">Tên tổ chức/cá nhân  được CP</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="organization_name" name="organization_name" placeholder=" -- Tên tổ chức/cá nhân  được CP --" >
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="organization_address" class="col-sm-12 col-form-label fw-bold"> Địa chỉ tổ chức/cá nhân được CP </label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="organization_address" name="organization_address" placeholder=" -- Địa chỉ tổ chức/cá nhân được CP --">
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="license_num" class="col-sm-12 col-form-label fw-bold"> Số GP </label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="license_num" name="license_num" placeholder=" -- Số GP --">
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="license_name" class="col-sm-12 col-form-label fw-bold"> Tên văn bản GP</label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="license_name" name="license_name" placeholder=" -- Tên văn bản --">
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="co_quan_cp" class="col-sm-12 col-form-label fw-bold"> Cơ quan cấp phép </label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="co_quan_cp" name="co_quan_cp" placeholder=" -- Cơ quan cấp phép --">
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="dv_tham_dinh" class="col-sm-12 col-form-label fw-bold"> Đơn vị thẩm định </label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="dv_tham_dinh" name="dv_tham_dinh" placeholder=" -- Đơn vị thẩm định --">
        </div>
    </div>
    <div class="row mx-0">
        <div class="pb-2 mx-0 px-2 col-sm-6">
            <label for="cap_tham_quyen" class="col-sm-12 col-form-label fw-bold">Cấp thẩm quyền </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="cap_tham_quyen" class="form-control form-control-sm" name="cap_tham_quyen">
                        <option value="0">-- Cấp thẩm quyền --</option>
                        <option value="1">Cấp trung ương</option>
                        <option value="2">Cấp địa phương</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="pb-2 mx-0 px-2 col-sm-6">
            <label for="license_type" class="col-sm-12 col-form-label fw-bold">Loại hình GP </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select id="license_type" class="form-control form-control-sm" name="license_type">
                        <option value="0">-- Loại hình GP --</option>
                        <option value="1">Cấp mới GP</option>
                        <option value="2">Cấp lại GP</option>
                        <option value="2">Gia hạn/Điều chỉhh GP</option>
                        <option value="2">Thu hồi GP</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0">
        <div class="col-sm-4 pb-2 mx-0">
            <label for="nguoi_ky_gp" class="col-sm-12 col-form-label fw-bold"> Người ký GP </label>
            <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="nguoi_ky_gp" name="nguoi_ky_gp" placeholder=" -- Người ký GP --">
            </div>
        </div>
        <div class="col-sm-4 pb-2 mx-0">
            <label for="chuc_vu_nguoi_ky_gp" class="col-sm-12 col-form-label fw-bold"> Chức vụ </label>
            <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="chuc_vu_nguoi_ky_gp" name="chuc_vu_nguoi_ky_gp" placeholder=" -- Chức vụ --">
            </div>
        </div>
        <div class="col-sm-4 pb-2 mx-0">
            <label for="ngay_ky_gp" class="col-sm-12 col-form-label fw-bold">Ngày ký </label>
            <div class="col-sm-12">
                <input type="date" class="form-control form-control-sm" id="ngay_ky_gp" name="ngay_ky_gp" placeholder=" -- Ngày ký --">
            </div>
        </div>
    </div>
    <div class="row m-0 px-2 g-2">
        <div class="col-sm-6 pb-2 px-0 mx-0">
            <label for="ngay_hieu_luc_dp" class="col-sm-12 col-form-label fw-bold">Ngày hiệu lực GP</label>
            <div class="col-sm-12">
                <input type="date" class="form-control form-control-sm" id="ngay_hieu_luc_dp" name="ngay_hieu_luc_dp" placeholder=" -- Ngày hiệu lực--">
            </div>
        </div>
        <div class="col-sm-6 pb-2 pl-2 pr-0 mx-0">
            <label for="han_hieu_luc_dp" class="col-sm-12 col-form-label fw-bold">Hạn hiệu lực GP </label>
            <div class="col-sm-12">
                <input type="date" class="form-control form-control-sm" id="han_hieu_luc_dp" name="han_hieu_luc_dp" placeholder=" -- Hạn hiệu lực GP --">
            </div>
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="noi_nhan_gp" class="col-sm-12 col-form-label fw-bold">Nơi nhận GP </label>
        <div class="col-sm-12">
            <input type="text" class="form-control form-control-sm" id="noi_nhan_gp" name="noi_nhan_gp" placeholder=" -- Nơi nhận GP --">
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
        <label for="ghi_chu_gp" class="col-sm-12 col-form-label fw-bold">Ghi chú GP</label>
        <div class="col-sm-12">
            <textarea name="ghi_chu_gp" id="ghi_chu_gp" class="form-control form-control-sm" cols="30" rows="4" placeholder=" -- Ghi chú--" ></textarea>
        </div>
    </div>
</div>
<div class="exploit-surfacewater mb-2">
    <p class="col-12 py-1 px-2 exploit-surfacewater-title fw-bold mb-2">Thanh tra - Kiểm tra</p>
    <div class="pb-2 mx-0 px-2">
       <table class="table table-bordered">
           <thead class="thead-light">
                <tr class="text-center">
                   <td colspan="6"><div class="col-12 d-flex justify-content-end"><button class="btn btn-info float-left">+</button></div></td>
               </tr>
               <tr class="text-center">
                   <th>#</th>
                   <th>Tên đợt</th>
                   <th>Tên đơn vị thực hiện</th>
                   <th>Tên trưởng đoàn</th>
                   <th>Năm thực hiện</th>
                   <th>Thao tác</th>
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
<div class="exploit-surfacewater mb-2">
    <p class="col-12 py-1 px-2 exploit-surfacewater-title fw-bold mb-2">Tiền cấp quyền khai thác sử dụng</p>
    <div class="pb-2 mx-0 px-2">
       <table class="table table-bordered">
           <thead class="thead-light">
                <tr class="text-center">
                   <td colspan="4"><div class="col-12 d-flex justify-content-end"><button class="btn btn-info float-left">+</button></div></td>
               </tr>
               <tr class="text-center">
                   <th>#</th>
                   <th>Số quyết định</th>
                   <th>Tổng tiền</th>
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
    <p class="col-12 py-1 px-2 exploit-surfacewater-title fw-bold mb-2">Thông tin tài liệu đính kèm</p>
    <div class="pb-2 mx-0 px-2">
        <div class="d-flex justify-content-start align-items-center mb-2 px-2">
            <label for="don_xin_cp" class="col-6">Đơn xin cấp phép</label>
            <label class="btn btn-default btn-sm center-block btn-file border my-0 mx-2" id="don_xin_cp">
                <i class="fa fa-upload" aria-hidden="true"></i> Upload file
                <input type="file" name="" id="" required accept=".pdf" style="display: none;">
            </label>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-2 px-2">
            <label for="don_xin_cp" class="col-6">Đơn xin cấp phép</label>
            <label class="btn btn-default btn-sm center-block btn-file border my-0 mx-2" id="don_xin_cp">
                <i class="fa fa-upload" aria-hidden="true"></i> Upload file
                <input type="file" name="" id="" required accept=".pdf" style="display: none;">
            </label>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-2 px-2">
            <label for="don_xin_cp" class="col-6">Đơn xin cấp phép</label>
            <label class="btn btn-default btn-sm center-block btn-file border my-0 mx-2" id="don_xin_cp">
                <i class="fa fa-upload" aria-hidden="true"></i> Upload file
                <input type="file" name="" id="" required accept=".pdf" style="display: none;">
            </label>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-2 px-2">
            <label for="don_xin_cp" class="col-6">Đơn xin cấp phép</label>
            <label class="btn btn-default btn-sm center-block btn-file border my-0 mx-2" id="don_xin_cp">
                <i class="fa fa-upload" aria-hidden="true"></i> Upload file
                <input type="file" name="" id="" required accept=".pdf" style="display: none;">
            </label>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-2 px-2">
            <label for="don_xin_cp" class="col-6">Đơn xin cấp phép</label>
            <label class="btn btn-default btn-sm center-block btn-file border my-0 mx-2" id="don_xin_cp">
                <i class="fa fa-upload" aria-hidden="true"></i> Upload file
                <input type="file" name="" id="" required accept=".pdf" style="display: none;">
            </label>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-2 px-2">
            <label for="don_xin_cp" class="col-6">Đơn xin cấp phép</label>
            <label class="btn btn-default btn-sm center-block btn-file border my-0 mx-2" id="don_xin_cp">
                <i class="fa fa-upload" aria-hidden="true"></i> Upload file
                <input type="file" name="" id="" required accept=".pdf" style="display: none;">
            </label>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-2 px-2">
            <label for="don_xin_cp" class="col-6">Đơn xin cấp phép</label>
            <label class="btn btn-default btn-sm center-block btn-file border my-0 mx-2" id="don_xin_cp">
                <i class="fa fa-upload" aria-hidden="true"></i> Upload file
                <input type="file" name="" id="" required accept=".pdf" style="display: none;">
            </label>
        </div>
        
    </div>
</div>
<div class="row m-0 p-2 justify-content-end">
    <input type="button" value="Tiếp tục >>" id="next_tab" class="col-md-3 btn btn-sm btn-primary mx-2">
</div>
