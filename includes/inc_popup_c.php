<div class="modal_notify">
    <div class="notify">
        <div class="d_flex flex_center mb_32">
            <img src="../images/done.png">
        </div>
        <div class="text_a_c">
            <span class="content_notify">Tạo hoá đơn bán hàng thành công</span>
        </div>
        <div>
            <button type="button" class="btn-close-notify">Đóng</button>
        </div>
    </div>
</div>
<div class="modal_bg_fff"></div>


<div class="popup_tra_hang">
    <div class="trahang container_group">
        <div class="header position_r">
            <Span> Chọn hoá đơn thanh toán để tiến hành trả hàng</Span>
            <button type="button" class="btn-close-trahang btn-close"><img src="../images/close.png"></button>
        </div>

        <div class="body">
            <div class="d_flex d_sm_block space_b align_c mb_20">
                <div class="form_search_popup">
                    <input type="text" class="" name="" placeholder="Tìm kiếm">
                    <button type="button" class="btn-close-popup"><img src="../images/btn_search.png"></button>
                </div>
                <div class="form_date">
                    <input type="date" class="" name="">
                </div>
            </div>

            <div>
            <div class="list-trahang overflow_sm">
                <table class="table_popup_trahang">
                    <thead>
                        <tr>
                            <td>
                                Mã hóa đơn
                                <span class="span_thead"></span>
                            </td>
                            <td>
                                Mã khách hàng
                                <span class="span_thead"></span>
                            </td>
                            <td>
                                Tên khách hàng
                                <span class="span_thead"></span>
                            </td>
                            <td>
                                Điện thoại
                                <span class="span_thead"></span>
                            </td>
                            <td>
                                Ngày thực hiện
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cursor_p" onclick="location.href='tao-phieu-tra-hang.html'">
                            <td>
                                <a href="chi-tiet-hoa-don-ban-hang.html">HDBH0000078</a>
                            </td>
                            <td>
                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                            </td>
                            <td>
                                Nguyễn Quang Anh
                            </td>
                            <td>
                                0999.999.888
                            </td>
                            <td>
                                14:27 03/06/2021
                            </td>
                        </tr>
                        <tr class="cursor_p" onclick="location.href='tao-phieu-tra-hang.html'">
                            <td>
                                <a href="chi-tiet-hoa-don-ban-hang.html">HDBH0000078</a>
                            </td>
                            <td>
                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                            </td>
                            <td>
                                Nguyễn Quang Anh
                            </td>
                            <td>
                                0999.999.888
                            </td>
                            <td>
                                14:27 03/06/2021
                            </td>
                        </tr>
                        <tr class="cursor_p" onclick="location.href='tao-phieu-tra-hang.html'">
                            <td>
                                <a href="chi-tiet-hoa-don-ban-hang.html">HDBH0000078</a>
                            </td>
                            <td>
                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                            </td>
                            <td>
                                Nguyễn Quang Anh
                            </td>
                            <td>
                                0999.999.888
                            </td>
                            <td>
                                14:27 03/06/2021
                            </td>
                        </tr>
                        <tr class="cursor_p" onclick="location.href='tao-phieu-tra-hang.html'">
                            <td>
                                <a href="chi-tiet-hoa-don-ban-hang.html">HDBH0000078</a>
                            </td>
                            <td>
                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                            </td>
                            <td>
                                Nguyễn Quang Anh
                            </td>
                            <td>
                                0999.999.888
                            </td>
                            <td>
                                14:27 03/06/2021
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

        <div class="d_flex flex_center">
            <button type="button" class="btn-done mb_20">Đồng ý</button>
        </div>

    </div>
</div>
<div class="modal_bg_000"></div>

<div class="popup_hanghoa">
    <div class="hanghoa form-hanghoa container_group active-popup">
        <form action="" method="POST" id="form_all_hanghoa">
            <div class="header position_r">
                <Span> Thêm mới hàng hoá/dịch vụ</Span>
                <button type="button" class="btn-close-hanghoa btn-close"><img src="../images/close.png"></button>
            </div>

            <div class="body">
                <div class="d_flex space_b align_c mb_20">
                    <div class="mr_20 mr_sm_15">
                        <div class="lable"><label>Mã hàng hóa</label></div>
                        <div>
                            <input type="text"  class="bg_eee" disabled value="TGA123">
                        </div>
                    </div>
                    <div class="form-select">
                        <div class="lable"><label>Loại</label></div>
                        <div class="d_flex space_b select-option">
                            <div class="default-option">Hàng hóa</div>
                            <div><img src="../images/show_infor.png"></div>
                        </div>
                        <div>
                            <ul class="list-option">
                                <li class="select_hanghoa">Hàng hóa</li>
                                <li class="select_dichvu">Dịch vụ</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mb_20">
                    <div class="lable"><label>Tên hàng hóa</label><span class="color_red">*</span></div>
                    <div class="box_input_infor">
                        <input type="text" class="w-100" name="name_hanghoa" placeholder="Tên hàng hóa">
                    </div>
                </div>
                <div class="mb_20">
                    <div class="lable"><label>Nhà cung cấp</label><span class="color_red">*</span></div>
                    <div class="position_r box_input_infor">
                        <input type="text" class="w-100" name="name_ncc" placeholder="Tên nhà cung cấp">
                        <a href="them-moi-doi-tac-nha-cung-cap.html" class="href"><img src="../images/add_infor.png"></a>
                    </div>
                </div>
                <div class="d_flex space_b align_c mb_20">
                    <div class="mr_20 mr_sm_15">
                        <div class="lable"><label>Đơn vị tính</label></div>
                        <div>
                            <input type="text"  placeholder="Đơn vị tính">
                        </div>
                    </div>
                    <div>
                        <div class="label"><label>Số lượng</label></div>
                        <div>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="d_flex space_b align_c mb_20">
                    <div class="mr_20 mr_sm_15">
                        <div class="lable"><label>Giảm giá</label></div>
                        <div>
                            <input type="text" placeholder="VNĐ">
                        </div>
                    </div>
                    <div>
                        <div class="lable"><label>Giá vốn</label></div>
                        <div>
                            <input type="text" placeholder="VNĐ">
                        </div>
                    </div>
                </div>
                <div class="d_flex space_b align_c mb_20">
                    <div class="mr_20 mr_sm_15">
                        <div class="lable"><label>Bảo hành theo thời gian</label></div>
                        <div class="position_r">
                            <input type="text">
                            <div class="select-time">
                                <div class="d_flex space_b">
                                    <div class="defaul-time">Ngày</div>
                                    <div><img src="../images/show_infor.png"></div>
                                </div>
                                <div>
                                    <ul class="options">
                                        <li>Ngày</li>
                                        <li>Tháng</li>
                                        <li>Năm</li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="lable"><label>Bảo hành (Theo km)</label></div>
                        <div>
                            <input type="text" placeholder="km">
                        </div>
                    </div>
                </div>
                <div class="mb_20">
                    <label for="check" class="checkbox">
                        <input type="checkbox" id="check" class="ver_mid checkbox_edit_hsd" name="">
                        <span class="ml_10">Quản lý hàng theo lô</span>
                    </label>
                </div>
                <div class="edit_hsd">
                    <div class="mb_20">
                        <div class="lable"><label>Số lô</label><span class="color_red">*</span></div>
                        <div class="box_input_infor">
                            <input type="text" name="solo" class="w-100 bg_eee" disabled placeholder="Số lô">
                        </div>
                    </div>
                    <div class="d_flex space_b align_c div_time">
                        <div class="mr_20 mr_sm_15">
                            <div class="lable"><label>Ngày sản xuất</label></div>
                            <div>
                                <input type="date" disabled class="bg_eee"> 
                            </div>
                        </div>
                        <div>
                            <div class="lable"><label>Hạn sử dụng</label></div>
                            <div>
                                <input type="date" disabled class="bg_eee">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d_flex flex_center mb_20">
                <button type="button" class="btn-unset mr_68 mr_sm_20">Hủy</button>
                <button type="submit" class="btn-create-hh update-hang-hoa">Cập nhật</button>
                <button type="submit" class="btn-create-hh them-hang-hoa">Thêm mới</button>
            </div>
        </form>

    </div>
    <div class="dichvu form-hanghoa container_group">
        <form action="" method="POST" id="form_all_dv">
            <div class="header position_r">
                <Span> Thêm mới hàng hoá/dịch vụ</Span>
                <button type="button" class="btn-close-hanghoa btn-close"><img src="../images/close.png"></button>
            </div>

            <div class="body">
                <div class="d_flex space_b align_c mb_20">
                    <div class="mr_20 mr_sm_15">
                        <div class="lable"><label>Mã dịch vụ</label></div>
                        <div>
                            <input type="text"  class="bg_eee" disabled value="TGA123">
                        </div>
                    </div>
                    <div class="form-select">
                        <div class="lable"><label>Loại</label></div>
                        <div class="d_flex space_b select-option">
                            <div class="default-option">Dịch vụ</div>
                            <div><img src="../images/show_infor.png"></div>
                        </div>
                        <div>
                            <ul class="list-option">
                                <li class="select_hanghoa">Hàng hóa</li>
                                <li class="select_dichvu" >Dịch vụ</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mb_20">
                    <div class="lable"><label>Tên dịch vụ</label><span class="color_red">*</span></div>
                    <div class="box_input_infor">
                        <input type="text" class="w-100" name="name_dv" placeholder="Tên dịch vụ">
                    </div>
                </div>
                <div class="d_flex space_b align_c mb_20">
                    <div class="mr_20 mr_sm_15">
                        <div class="lable"><label>Giá dịch vụ</label></div>
                        <div>
                            <input type="text" placeholder="VNĐ">
                        </div>
                    </div>
                    <div>
                        <div class="lable"><label>Phí dịch vụ</label></div>
                        <div>
                            <input type="text" placeholder="VNĐ">
                        </div>
                    </div>
                </div>
                <div class="d_flex space_b align_c">
                    <div class="mr_20 mr_sm_15">
                        <div class="lable"><label>Bảo hành theo thời gian</label></div>
                        <div class="position_r">
                            <input type="text">
                            <div class="select-time">
                                <div class="d_flex space_b">
                                    <div class="defaul-time">Ngày</div>
                                    <div><img src="../images/show_infor.png"></div>
                                </div>
                                <div>
                                    <ul class="options">
                                        <li>Ngày</li>
                                        <li>Tháng</li>
                                        <li>Năm</li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="lable"><label>Bảo hành (Theo km)</label></div>
                        <div>
                            <input type="text" placeholder="km">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d_flex flex_center mb_20">
                <button type="button" class="btn-unset mr_68 mr_sm_20">Hủy</button>
                <button type="submit" class="btn-create-hh update-dich-vu">Cập nhật</button>
                <button type="submit" class="btn-create-hh them-dich-vu">Thêm mới</button>
            </div>
        </form>

    </div>
</div>


<div class="popup_create_phieu_thu">
    <div class="main_phieuthu container_group pb_20">
        <div class="header position_r">
            <Span> Tạo phiếu thu</Span>
            <button type="button" class="btn-close-phieuthu btn-close"><img src="../images/close.png"></button>
        </div>

        <div class="body">
            <div class="d_flex div_1 align_c mb_20">
                <div class="mr_20">
                    <div class="lable"><label>Mã phiếu thu</label></div>
                    <div>
                        <input type="text"  class="bg_eee" disabled value="TGA123">
                    </div>
                </div>
                <div class="form-select">
                    <div class="lable"><label>Nguồn thu</label></div>
                    <select class="select3 js-states form-control">
                        <option>Nhà cung cấp 1</option>
                        <option>Nhà cung cấp 2</option>
                        <option>Nhà cung cấp 3</option>
                    </select>
                </div>
            </div>
            <div class="d_flex div_2 align_c mb_20">
                <div class="mr_20">
                    <div class="lable"><label>Mã hóa đơn</label></div>
                    <div>
                        <input type="text"  placeholder="Mã hóa đơn">
                    </div>
                </div>
                <div>
                    <div class="lable"><label>Nhân viên lập phiếu</label></div>
                    <div>
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="d_flex div_3 align_c mb_20 ">
                <div class="mr_20 w_sm_100">
                    <div class="lable"><label>Thời gian</label></div>
                    <div class="d_flex div_time w-100">
                        <div class="mr_20">
                            <input disabled class="bg_eee" type="date">
                        </div>
                        <div>
                            <input disabled class="bg_eee" type="time">
                        </div>
                    </div>
                </div>
                <div class="w_sm_100 mt_sm_20">
                    <div class="lable"><label>Khoản mục thu</label></div>
                    <div>
                        <input type="text" placeholder="Sửa xe">
                    </div>
                </div>
            </div>
            <div class="d_flex div_4 align_c mb_20">
                <div class="mr_20">
                    <div class="lable"><label>Số tiền thu</label></div>
                    <div>
                        <input type="text" placeholder="Nhập số tiền">
                    </div>
                </div>
                <div>
                    <div class="lable"><label>Nguồi nộp</label></div>
                    <div>
                        <input type="text" placeholder="Tên người nộp">
                    </div>
                </div>
            </div>
            
            <div class="total_haokhau mb_10">
                <div class="footer d_flex space_b align_c">
                    <div class="title">
                        Tổng thanh toán
                    </div>
                    <div>
                        0 VNĐ
                    </div>
                </div>
            </div>

            <div class="total-phieuthu ml_10 overflow_sm">
                <Div class="total-375">
                <div class="d_flex space_b align_c mb_10">
                    <div class="title">
                        Tiền mặt
                    </div>
                    <div>
                        <input type="text" class="text_a_r number" placeholder=" 0 VNĐ">
                    </div>
                </div>
                <div class="d_flex space_b align_c mb_10">
                    <div class="title">
                        Tiền quẹt POS
                    </div>
                    <div>
                    <select class="select2 js-states form-control">
                        <option>Tài khoản 1</option>
                        <option>Tài khoản 2</option>
                        <option>Tài khoản 3</option>
                    </select>
                    </div>
                    <div>
                        <input type="text" class="text_a_r number" placeholder=" 0 VNĐ">
                    </div>
                </div>
                <div class="d_flex space_b align_c mb_10">
                    <div class="title">
                        Chuyển khoản ngân hàng
                    </div>
                    <div>
                    <select class="select3 js-states form-control">
                        <option>Ngân hàng 1</option>
                        <option>Ngân hàng 2</option>
                        <option>Ngân hàng 3</option>
                    </select>
                    </div>
                    <div>
                        <input type="text" class="text_a_r number" placeholder=" 0 VNĐ">
                    </div>
                </div>
                <div class="d_flex space_b h-36 align_c mb_10 mr_10">
                    <div class="title">
                        Đã thanh toán
                    </div>
                    <div class="value">
                        0 VNĐ
                    </div>
                </div>
                <div class="d_flex space_b h-36 align_c mb_10 mr_10">
                    <div class="title">
                        Tiền thừa
                    </div>
                    <div class="value">
                        0 VNĐ
                    </div>
                </div>
                <div class="d_flex space_b h-36 align_c mb_10 mr_10">
                    <div class="title">
                        Còn thiếu (Ghi vào công nợ)
                    </div>
                    <div class="value">
                        0 VNĐ
                    </div>
                </div>
                </Div>
            </div>

        </div>

        <div class="d_flex flex_center">
            <button type="button"  onclick="location.href='quan-ly-phieu-thu.html'" class="btn2 mr_20 mt_sm_20 box_btn">Hủy</button>
            <button type="button" onclick="location.href='quan-ly-phieu-thu.html'" class="btn1 btn-ok d-none box_btn1">Đồng ý</button>
            <button type="button" onclick="location.href='quan-ly-phieu-thu.html'" class="btn1 box_btn">Thanh toán</button>
        </div>
    </div>
</div>

<div class="popup_create_phieu_chi">
    <div class="main_phieuchi container_group">
        <div class="header position_r">
            <Span> Tạo phiếu chi</Span>
            <button type="button" class="btn-close-phieuchi btn-close"><img src="../images/close.png"></button>
        </div>

        <div class="body">
            <div class="d_flex div_1 align_c mb_20">
                <div class="mr_20 mr_sm_15">
                    <div class="lable"><label>Mã phiếu chi</label></div>
                    <div>
                        <input type="text"  class="bg_eee" disabled value="TGA123">
                    </div>
                </div>
                <div class="form-select">
                    <div class="lable"><label>Chi trả cho</label></div>
                    <select class="select3 js-states form-control">
                        <option selected disabled>Khách hàng</option>
                        <option>Nhà cung cấp 1</option>
                        <option>Nhà cung cấp 2</option>
                        <option>Nhà cung cấp 3</option>
                    </select>
                </div>
            </div>
            <div class="d_flex div_2 w-100 align_c mb_20">
                <div class="mr_20 mr_sm_15">
                    <div class="lable"><label>Mã phiếu trả hàng</label></div>
                    <div>
                        <input type="text"  placeholder="Mã phiếu trả hàng">
                    </div>
                </div>
                <div  class="w-100">
                    <div class="lable"><label>Thời gian</label></div>
                    <div>
                        <input type="date" class="w-100">
                    </div>
                </div>
            </div>
            <div class="d_flex div_3 align_c mb_20">
               
                <div class="mr_20 mr_sm_15">
                    <div class="lable"><label>Số tiền chi</label></div>
                    <div>
                        <input type="text" placeholder="Nhập số tiền">
                    </div>
                </div>
                <div >
                    <div class="lable"><label>Nhân viên lập phiếu</label></div>
                    <div>
                        <input type="text">
                    </div>
                </div>
                
            </div>
            <div class="d_flex div_4 align_c mb_20">
                <div class="mr_20 mr_sm_15">
                    <div class="lable"><label>Người chi</label></div>
                    <div>
                        <input type="text" placeholder="Tên người chi">
                    </div>
                </div>
                <div>
                    <div class="lable"><label>Khoản mục chi</label></div>
                    <div>
                        <input type="text" placeholder="Hoàn trả khách">
                    </div>
                </div>
            </div>
            
            <div class="total_haokhau mb_10">
                <div class="footer d_flex space_b align_c">
                    <div class="title">
                        Tổng thanh toán
                    </div>
                    <div>
                        0 VNĐ
                    </div>
                </div>
            </div>

            <div class="total-phieuthu ml_10 overflow_sm">
                <Div class="total-375">
                <div class="d_flex space_b align_c mb_10">
                    <div class="title">
                        Tiền mặt
                    </div>
                    <div>
                        <input type="text" class="text_a_r number" placeholder=" 0 VNĐ">
                    </div>
                </div>
                <div class="d_flex space_b align_c mb_10">
                    <div class="title">
                        Chuyển khoản từ
                    </div>
                    <div>
                    <select class="select3 js-states form-control">
                        <option disabled selected>Chọn ngân hàng</option>
                        <option>Ngân hàng 1</option>
                        <option>Ngân hàng 2</option>
                        <option>Ngân hàng 3</option>
                    </select>
                    </div>
                    <div>
                        <input type="text" class="text_a_r number" placeholder=" 0 VNĐ">
                    </div>
                </div>
                <div class="d_flex space_b h-36 align_c mb_10 mr_10">
                    <div class="title">
                        Đã thanh toán
                    </div>
                    <div class="value">
                        0 VNĐ
                    </div>
                </div>
                <div class="d_flex space_b h-36 align_c mb_10 mr_10">
                    <div class="title">
                        Tiền thừa
                    </div>
                    <div class="value">
                        0 VNĐ
                    </div>
                </div>
                <div class="d_flex space_b h-36 align_c mr_10">
                    <div class="title">
                        Còn thiếu (Ghi vào công nợ)
                    </div>
                    <div class="value">
                        0 VNĐ
                    </div>
                </div>
                </Div>
            </div>

        </div>

        <div class="d_flex flex_center">
            <button type="button" class="btn-unset mr_20 box_btn">Hủy</button>
            <button type="button" class="btn1 btn-ok d-none box_btn1">Đồng ý</button>
            <button type="button" class="btn-create-hh box_btn">Thanh toán</button>
        </div>
    </div>
</div>

<!--Thêm thông tin thanh toán-->
<div class="detail-pay">
    <div class="popup-detail-pay container_group">
            <div class="header position_r">
                <Span> Thêm thông tin thanh toán</Span>
                <button type="button" class="btn-close-trahang btn-close"><img src="../images/close.png"></button>
            </div>

            <div class="main">
                <div class="mb_20">
                    <div class="lable">
                        <label>Tên ngân hàng</label>
                    </div>
                    <div class="position_r">
                        <select class="select-name-bank js-states form-control">
                            <option></option>
                        </select>
                        <div class="icon-select2">
                            <img src="../images/btn_show_list.png">
                        </div>
                    </div>
                    
                </div>
                <div class="d_flex mb_20 acount-bank">
                    <div>
                        <div class="lable">
                            <label>Số tài khoản</label>
                        </div>
                        <div>
                            <input type="text" name="" class="" placeholder="Nhập số tài khoản">
                        </div>
                    </div>
                    <div>
                        <div class="lable">
                            <label>Chủ tài khoản</label>
                        </div>
                        <div>
                            <input type="text" name="" class="" placeholder="Nhập tên chủ tài khoản">
                        </div>
                    </div>
                </div>

                <div class="mb_20">
                    <div class="lable">
                        <label>Chi nhánh</label>
                    </div>
                    <div class="position_r">
                        <select class="select-brand-bank js-states form-control">
                            <option></option>
                        </select>
                        <div class="icon-select2">
                            <img src="../images/btn_show_list.png">
                        </div>
                    </div>
                </div>

            <div class="d_flex space_a">
                <button type="button" class="btn2">Hủy</button>
                <button type="button" class="btn-ok">Đồng ý</button>
            </div>

        </div>
    </div>
</div>
<!--Thêm thông tin thanh toán-->

