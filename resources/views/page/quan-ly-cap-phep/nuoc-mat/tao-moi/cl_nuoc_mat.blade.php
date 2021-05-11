
<div class="exploit-surfacewater mb-2">
    <div class="row p-2 mx-0">
        <div class="form-group col-sm-4">
            <label for="my-select">Vị trí quan trắc</label>
            <input type="text" class="form-control form-control-sm" placeholder=" -- Vị trí quan trắc -- ">
        </div>
        <div class="form-group col-sm-4">
            <label for="my-select">Quy chuẩn Việt Nam</label>
            <select  class="form-control form-control-sm bg-white" name="">
                <option>QCVN 08-MT:2015/BTNMT</option>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="my-select">Mục đích sử dụng</label>
            <select  class="form-control form-control-sm bg-white" name="">
                <option>A1</option>
                <option>A2</option>
                <option>B1</option>
                <option>B2</option>
            </select>
        </div>
    </div>
    <div class="pb-2 mx-0 px-2">
       <table class="table table-bordered table_overflow">
           <thead class="thead-light">
               <tr class="text-center">
                   <th class="font-13">#</th>
                   <th class="font-13">Quan trắc tự động</th>
                   <th class="font-13 text-nowrap">Thông số</th>
                   <th class="font-13 text-nowrap">Đơn vị đo</th>
                   <th class="font-13">Giá trị giới hạn nhỏ nhất</th>
                   <th class="font-13">Giá trị giới hạn lớn nhất</th>
               </tr>
           </thead>
           <tbody>
               <tr class="text-left">
                   <td class="font-13 text-center">1</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Mực nước hồ</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">2</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả duy trì dòng chảy tối thiểu</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">3</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả qua nhà máy</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">4</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả qua tràn</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">5</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Giám sát bằng camera</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">6</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Chất lượng nước trong quá trình khai thác theo quy định</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">7</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng khai thác</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">1</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Mực nước hồ</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">2</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả duy trì dòng chảy tối thiểu</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">3</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả qua nhà máy</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">4</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả qua tràn</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">5</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Giám sát bằng camera</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">6</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Chất lượng nước trong quá trình khai thác theo quy định</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">7</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng khai thác</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">1</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Mực nước hồ</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">2</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả duy trì dòng chảy tối thiểu</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">3</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả qua nhà máy</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">4</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả qua tràn</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">5</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Giám sát bằng camera</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">6</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Chất lượng nước trong quá trình khai thác theo quy định</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">7</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng khai thác</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">1</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Mực nước hồ</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">2</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả duy trì dòng chảy tối thiểu</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">3</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả qua nhà máy</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">4</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng xả qua tràn</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">5</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Giám sát bằng camera</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">6</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Chất lượng nước trong quá trình khai thác theo quy định</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
               <tr class="text-left">
                   <td class="font-13 text-center">7</td>
                   <td class="text-center"><input type="checkbox"></td>
                   <td class="text-wrap">Lưu lượng khai thác</td>
                   <td>
                       <div class="form-group">
                           <select  class="form-control  form-control-sm bg-white" name="don_vi">
                               <option value="m" class="text-center">m</option>
                               <option value="mm" class="text-center">mm</option>
                           </select>
                       </div>
                   </td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
                   <td><input class="form-control form-control-sm w-50 mx-auto" type="number"></td>
               </tr>
           </tbody>
       </table>
    </div>
</div>