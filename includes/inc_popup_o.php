<!-- Xoa phieu -->
<div class="popup_show popup_xoa_phieu" id="popup_show_xoa_phieu">
    <div class="container_popup">
        <div class="box_popup box_popup_500 box_popup_xoa_phieu">
            <div class="header_popup d_flex space_b align_c back_blue">
                <p class="font_s18 font_wB color_white">Xóa phiếu</p>
                <img src="../images/close_w.png" alt="" class="btn_close">
            </div>
            <div class="body_popup">
                <p>Bạn có chắc chắn muốn xóa phiếu tiếp nhận <span class="font_w500">PTN0000078</span>?</p>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_huy btn_red_w">Hủy</div>
                    <div class="btn_dong_y btn_blue">Đồng ý</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sua trang thai -->
<div class="popup_show popup_sua_trang_thai" id="popup_show_sua_trang_thai">
    <div class="container_popup">
        <div class="box_popup box_popup_500 box_popup_sua_trang_thai">
            <div class="header_popup d_flex space_b align_c back_blue">
                <p class="font_s18 font_wB color_white">Sửa trạng thái</p>
                <img src="../images/close_w.png" alt="" class="btn_close">
            </div>
            <div class="body_popup">
                <p>Bạn có chắc chắn muốn chuyển trạng thái thành <span class="font_w500">Đã sửa xong</span>?</p>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_huy btn_red_w">Hủy</div>
                    <div class="btn_dong_y btn_blue">Đồng ý</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Them moi khach hang thanh cong -->
<div class="popup_show popup_add_success" id="popup_show_add_success" style="z-index: 999;">
    <div class="container_popup">
        <div class="box_popup box_popup_460 box_popup_add_success">
            <div class="body_popup d_flex flex_column align_c">
                <img src="../images/success_icon.png" alt="">
                <p class="font_s16 color_grey font_wB mt_20">Thêm mới thành công</p>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_dong btn_blue">Đóng</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Thêm mới thất bại -->
<div class="popup_show popup_add_error" id="popup_show_add_error" style="z-index: 999;">
    <div class="container_popup">
        <div class="box_popup box_popup_460 box_popup_add_error">
            <div class="body_popup d_flex flex_column align_c">
                <img src="../images/error_icon.png" alt="">
                <p class="font_s16 color_grey font_wB mt_20">Thêm mới thất bại</p>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_dong btn_blue">Đóng</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Them hang mau xe -->
<div class="popup_show popup_add_vehicle" id="popup_show_add_vehicle">
    <div class="container_popup">
        <div class="box_popup box_popup_580 box_popup_add_vehicle">
            <div class="header_popup d_flex space_b align_c back_blue">
                <p class="font_s18 font_wB color_white">Thêm hãng, mẫu xe</p>
                <img src="../images/close_w.png" alt="" class="btn_close">
            </div>
            <div class="body_popup">
                <div class="infor_vehicle d_flex align_c">
                    <label for="upload_logo">
                        <div class="upload_logo_vehicle position_r">
                            <img class="" src="../images/add_logo.svg" alt="">
                            <input type="file" id="upload_logo" class=" display_none" accept=".png, .jpg, .jpeg">
                        </div>
                    </label>
                    <div class="upload_logo_vehicle_done position_r display_none">
                        <img class="ready_upload_logo" src="../images/add_logo.svg" alt="">
                        <img class="add_logo_hover position_a" src="../images/add_logo_hover.png" alt="">
                        <label for="upload_logo">
                            <img class="add_logo position_a" src="../images/add_photo.png" alt="">
                            <input type="file" id="upload_logo" class=" display_none" accept=".png, .jpg, .jpeg">
                        </label>
                        <img class="del_logo position_a" src="../images/dell_logo.svg" alt="">
                    </div>
                    <div class="input_infor_vehicle">
                        <div class="box_input_infor box_input_infor_l1">
                            <p>Hãng xe</p>
                            <input type="text" class="input_infor_tag" name="" placeholder="Nhập tên hãng xe">
                        </div>
                        <div class="box_input_infor box_input_infor_l1">
                            <p>Mẫu xe</p>
                            <input type="text" class="input_infor_tag" name="" placeholder="Nhập mẫu xe">
                        </div>
                    </div>
                </div>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_huy btn_red_w">Hủy</div>
                    <div class="btn_dong_y btn_blue">Đồng ý</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Them loai xe -->
<div class="popup_show popup_add_type_vehicle" id="popup_show_add_type_vehicle">
    <div class="container_popup">
        <div class="box_popup box_popup_500 box_popup_add_type_vehicle">
            <div class="header_popup d_flex space_b align_c back_blue">
                <p class="font_s18 font_wB color_white">Thêm hãng, mẫu xe</p>
                <img src="../images/close_w.png" alt="" class="btn_close">
            </div>
            <div class="body_popup">
                <div class="box_input_infor box_input_infor_l1">
                    <p>Loại xe</p>
                    <input type="text" class="input_infor_tag" name="" placeholder="Nhập loại xe">
                </div>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_huy btn_red_w">Hủy</div>
                    <div class="btn_dong_y btn_blue">Đồng ý</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tạo phiếu báo giá thành công -->
<div class="popup_show popup_add_baogia_success" id="popup_show_add_baogia_success" style="z-index: 999;">
    <div class="container_popup">
        <div class="box_popup box_popup_460 box_popup_add_baogia_success">
            <div class="body_popup d_flex flex_column align_c">
                <img src="../images/success_icon.png" alt="">
                <p class="font_s16 color_grey font_wB mt_20">Tạo phiếu báo giá thành công</p>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_dong btn_blue">Đóng</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup_show popup_edit_baogia_success" id="popup_show_edit_baogia_success">
    <div class="container_popup">
        <div class="box_popup box_popup_460 box_popup_edit_baogia_success">
            <div class="body_popup d_flex flex_column align_c">
                <img src="../images/success_icon.png" alt="">
                <p class="font_s16 color_grey font_wB mt_20">Chỉnh sửa phiếu báo giá thành công</p>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_dong btn_blue">Đóng</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lich su sua chua bao duong -->
<div class="popup_show popup_repair_history" id="popup_show_repair_history">
    <div class="container_popup">
        <div class="box_popup box_popup_920 box_popup_repair_history">
            <div class="header_popup d_flex space_b align_c back_blue">
                <p class="font_s18 font_wB color_white">Lịch sử sửa chữa/bảo dưỡng</p>
                <img src="../images/close_w.png" alt="" class="btn_close">
            </div>
            <div class="body_popup">
                <div class="head_main_body d_flex space_b align_c">
                    <div id="toolbar_01" class="toolbar form_search position_r">
                        <input type="text" class="input_search" value="" placeholder="Tìm kiếm">
                        <span class="btn_search"></span>
                    </div>
                    <div id="toolbar_02" class="toolbar form_date position_r cursor_p">
                        <input type="text" name="" id="" class="p_output_date">
                        <!-- <div class="p_output p_output_date color_x ">
                                    <span class="p_date_start" data-id="1639612800">dd/mm/yyyy</span>
                                    <span>&nbsp;-&nbsp;</span>
                                    <span class="p_date_end" data-id="1639872000">dd/mm/yyyy</span>
                                    <img class="" src="../images/choose_date.png" alt="">
                                </div> -->
                    </div>
                    <div id="toolbar_03" class="toolbar choose_status_traf cursor_p position_r white_s_nw">
                        <div class="d_flex box_select select_tt space_b align_c">
                            <p class="p_box_option1 p_output_tt" data-id="0">Toàn bộ chi nhánh</p>
                            <img src="../images/show_infor.png" alt="">
                        </div>
                        <div class="show_list_popup list_popup_stt position_a" style="display: none">
                            <div class="box_list_popup_stt text_a_l">
                                <p class="option_tt d_flex align_c">Toàn bộ chi nhánh</p>
                                <p class="option_tt d_flex align_c">Chi nhánh Định Công</p>
                                <p class="option_tt d_flex align_c">Chi nhánh Ngọc Hồi</p>
                                <p class="option_tt d_flex align_c">Chi nhánh Phạm Ngọc Thạch</p>
                                <p class="option_tt d_flex align_c">Chi nhánh Phạm Hùng</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt_20">
                    <div class="main_table_list">
                        <div class="main_table_list_all">
                            <div class="box_main_table_list">
                                <table class="table table_repair_history">
                                    <thead>
                                        <tr>
                                            <th>Mã hoá đơn<span class="span_thead"></span></th>
                                            <th>Tổng hóa đơn<span class="span_thead"></span></th>
                                            <th>Đã thanh toán<span class="span_thead"></span></th>
                                            <th>Thanh toán còn lại<span class="span_thead"></span></th>
                                            <th>Ngày thực hiện<span class="span_thead"></span></th>
                                            <th>Chi nhánh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="color_blue cursor_p font_w500">HDSC00000221</td>
                                            <td>13.000.000 đ</td>
                                            <td>10.000.000 đ</td>
                                            <td>3.000.000 đ</td>
                                            <td>17:28 11/02/2020</td>
                                            <td>Gara Auto Định Công</td>
                                        </tr>
                                        <tr>
                                            <td class="color_blue cursor_p font_w500">HDSC00000221</td>
                                            <td>13.000.000 đ</td>
                                            <td>10.000.000 đ</td>
                                            <td>3.000.000 đ</td>
                                            <td>17:28 11/02/2020</td>
                                            <td>Gara Auto Định Công</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_huy btn_blue">Đồng ý</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------------------------------------- Popup Thanh toan -->
<div class="popup_show popup_bill_tt" id="popup_show_bill_tt">
    <div class="container_popup">
        <div class="box_popup box_popup_580 box_popup_bill_tt">
            <div class="header_popup d_flex space_b align_c back_blue">
                <p class="font_s18 font_wB color_white">Thanh toán</p>
                <img src="../images/close_w.png" alt="" class="btn_close">
            </div>
            <div class="body_popup">
                <div class="d_flex space_b">
                    <div class="box_input_infor box_input_infor_l2">
                        <p>Mã hoá đơn</p>
                        <input type="text" class="input_infor_tag" name="" placeholder="Chọn mã hoá đơn">
                    </div>
                    <div class="box_input_infor box_input_infor_l2">
                        <p>Mã phiếu thu</p>
                        <input type="text" class="input_infor_tag readonly" disabled="true" name="" placeholder="">
                    </div>
                </div>
                <div class="total_pay back_blue color_white d_flex space_b font_s14 font_w500 mt_20">
                    <p>Tổng thanh toán</p>
                    <p>0 &nbsp;VND</p>
                </div>
                <div class="div_scroll">
                    <div class="div_tt_bill">
                        <div class="d_flex space_b align_c mt_10 font_s15 font_w500 color_grey">
                            <p>Tiền mặt</p>
                            <input type="number" value="" placeholder="VND">
                        </div>
                        <div class="d_flex space_b align_c mt_10 font_s15 font_w500 color_grey payPOS">
                            <p>Tiền quẹt POS</p>
                            <select name="" id="" class="select2_one_POS">
                                <option value="1">VietinBank</option>
                                <option value="2">VietComBank</option>
                                <option value="3">AgriBank</option>
                            </select>
                            <input type="number" value="" placeholder="VND">
                        </div>
                        <div class="d_flex space_b align_c mt_10 font_s15 font_w500 color_grey payBanking">
                            <p>Chuyển khoản ngân hàng</p>
                            <select name="" id="" class="select2_one_POS">
                                <option value="1">VietinBank</option>
                                <option value="2">VietComBank</option>
                                <option value="3">AgriBank</option>
                            </select>
                            <input type="number" value="" placeholder="VND">
                        </div>
                        <div class="d_flex space_b align_c mt_20 font_s15 font_w500 color_grey">
                            <p>Khách đã thanh toán</p>
                            <p>0 <span>VNĐ</span></p>
                        </div>
                        <div class="d_flex space_b align_c mt_20 font_s15 font_w500 color_grey">
                            <p>Tiền thừa</p>
                            <p>0 <span>VNĐ</span></p>
                        </div>
                        <div class="d_flex space_b align_c mt_20 font_s15 font_w500 color_grey">
                            <p>Còn thiếu (Ghi vào công nợ)</p>
                            <p>0 <span>VNĐ</span></p>
                        </div>
                    </div>
                </div>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_huy btn_red_w">Hủy</div>
                    <div class="btn_dong_y btn_blue">Đồng ý</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------------------------- Them nhom nha cung cap -->
<div class="popup_show popup_add_gr_ncc" id="popup_show_add_ncc">
    <div class="container_popup">
        <div class="box_popup box_popup_500 box_popup_add_  ncc">
            <div class="header_popup d_flex space_b align_c back_blue">
                <p class="font_s18 font_wB color_white">Thêm nhóm nhà cung cấp</p>
                <img src="../images/close_w.png" alt="" class="btn_close">
            </div>
            <div class="body_popup">
                <div class="box_input_infor box_input_infor_l1">
                    <p>Tên nhóm nhà cung cấp</p>
                    <input type="text" class="input_infor_tag" name="" placeholder="Thêm tên">
                </div>
                <div class="div_btn_func d_flex space_a">
                    <div class="btn_huy btn_red_w">Hủy</div>
                    <div class="btn_them_moi btn_blue">Đồng ý</div>
                </div>
            </div>
        </div>
    </div>
</div>