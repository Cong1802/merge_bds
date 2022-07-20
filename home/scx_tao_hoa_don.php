<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Tạo hoá đơn</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/style_o.css?v=<?= $ver ?>">
</head>

<body>
    <div class="main_wrapper_all">
        <div class="wapper_all">
            <?php include('../includes/menu_sidebar.php'); ?>
        </div>
        <div class="box_main_all">
            <?php include('../includes/menu_header_tab.php');  ?>
            <div class="main">
                <div class="header_all d_flex space_b align_c position_r">
                    <div class="head_title d_flex">
                        <a href="hoa-don.html"><img src="../images/back_btn.png" alt="">&nbsp;&nbsp;</a>
                        <p>Sửa chữa xe<span>&nbsp;/&nbsp;</span><a href="tao-hoa-don.html">Tạo hoá đơn</a> </p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="main_tao_phieu_bao_gia">
                        <form action="" method="POST" id="add_new_bill">
                        <div class="main_create_all">
                            <div class="head_title_main_cre d_flex space_b position_r">
                                <p>Tạo hoá đơn</p>
                                <div class="d_flex box_select select_tt space_b align_c cursor_p select_type_service">
                                    <p class="p_output_tt">Bán hàng</p>&nbsp;
                                    <img src="../images/show_white.png" alt="">
                                </div>
                                <div class="show_list_popup show_type_service position_a" style="display: none;">
                                    <div class="box_list_popup_stt text_a_l">
                                        <p class="option_tt option_sell d_flex align_c">Bán hàng</p>
                                        <p class="option_tt option_repair d_flex align_c">Sửa chữa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body_main_cre details_main_body">
                                <div class="box_create_model_l1 d_flex space_b flex_w box_sell">
                                    <div class="box_input_infor box_input_infor_l3">
                                        <p>Mã khách hàng</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Nhập mã khách hàng">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l3">
                                        <p>Mã hoá đơn</p>
                                        <input type="text" class="input_infor_tag readonly" name="" disabled>
                                    </div>
                                    <div class="box_input_infor box_input_infor_l3 chz_datetime">
                                        <p>Thời gian</p>
                                        <div class="d_flex space_b">
                                            <div class="p_output p_output_date color_x position_r w_100 mr_20">
                                                <input type="text" class="input_infor_tag readonly" name="" disabled>
                                                <img class="position_a img_calendar" src="../images/choose_date.png" alt="">
                                            </div>
                                            <div class="p_output p_output_date color_x">
                                                <input type="text" class="input_infor_tag readonly input_auto_time" name="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box_create_model_l1 d_flex space_b flex_w box_repair" style="display: none;">
                                    <div class="box_input_infor box_input_infor_l4">
                                        <p>Mã phiếu tiếp nhận</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Chọn phiếu tiếp nhận">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l4">
                                        <p>Mã phiếu báo giá</p>
                                        <input type="text" class="input_infor_tag readonly" name="" disabled>
                                    </div>
                                    <div class="box_input_infor box_input_infor_l4">
                                        <p>Mã hoá đơn</p>
                                        <input type="text" class="input_infor_tag readonly" name="" disabled>
                                    </div>
                                    <div class="box_input_infor box_input_infor_l4">
                                        <p>Thời gian</p>
                                        <div class="d_flex space_b">
                                            <div class="p_output p_output_date color_x position_r w_100 mr_20">
                                                <input type="text" class="input_infor_tag readonly" name="" disabled>
                                                <img class="position_a img_calendar" src="../images/choose_date.png" alt="">
                                            </div>
                                            <div class="p_output p_output_date color_x">
                                                <input type="text" class="input_infor_tag readonly input_auto_time" name="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box_create_model_l1 d_flex space_b flex_w">

                                    <div class="box_input_infor box_input_infor_l3 position_r">
                                        <p>Khách hàng<span class="color_red">*</span></p>
                                        <select name="name_user" id="" class="input_infor_tag select2_one1">
                                            <option value="" disabled selected>Tên khách hàng</option>
                                            <option value="1">Đinh Oai</option>
                                            <option value="2">Đinh Văn Oai</option>
                                            <option value="2">Đinh Văn Oai</option>
                                        </select>
                                        <a href="/them-moi-khach-hang.html"><img class="add_infor_user" src="../images/add_infor.png" alt=""></a>
                                    </div>
                                    <div class="box_input_infor box_input_infor_l3">
                                        <p>Số điện thoại</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Nhập số điện thoại">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l3">
                                        <p>Email</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Nhập địa chỉ Email">
                                    </div>
                                </div>
                                <div class="box_create_model_l1 d_flex space_b align_c">
                                    <p class="font_w500 font_s15 mt_20">Bảng báo giá chi tiết</p>
                                    <div class="box_input_infor box_input_infor_l2 box_search_products position_r">
                                        <select name="sl_name_kh" id="" class="input_infor_tag select2_one1">
                                            <option value="" disabled selected>Tên khách hàng</option>
                                            <option value="1">Đinh Oai</option>
                                            <option value="2">Đinh Văn Oai</option>
                                            <option value="2">Đinh Văn Oai</option>
                                        </select>
                                        <a href=""><img class="add_infor_user" src="../images/add_infor.png" alt=""></a>
                                        <span class="btn_search"></span>
                                    </div>
                                </div>
                                <div class="main_table_list mt_20">
                                    <div class="main_table_list_all">
                                        <div class="box_main_table_list">
                                            <table class="table table_ds_bao_gia_chi_tiet">
                                                <thead>
                                                    <tr>
                                                        <th>STT<span class="span_thead"></span></th>
                                                        <th>Mã hàng hoá<span class="span_thead"></span></th>
                                                        <th>Tên hàng hoá<span class="span_thead"></span></th>
                                                        <th>Đơn giá<span class="span_thead"></span></th>
                                                        <th>Số lượng<span class="span_thead"></span></th>
                                                        <th>Đơn vị<span class="span_thead"></span></th>
                                                        <th>Chiết khấu<span class="span_thead"></span></th>
                                                        <th>Thành tiền<span class="span_thead"></span></th>
                                                        <th><img src="../images/dell_logo.svg" alt=""></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>HH0000078</td>
                                                        <td>Lốp Bridgestone</td>
                                                        <td>2.500.000<span> đ</span></td>
                                                        <td><input type="number" value=""></td>
                                                        <td>Chiếc</td>
                                                        <td>
                                                            <input type="number" value="">
                                                            <select name="" id="">
                                                                <option value="1">VNĐ</option>
                                                                <option value="2">%</option>
                                                            </select>
                                                        </td>
                                                        <td>2.500.000<span> đ</span></td>
                                                        <td><img src="../images/dell_logo_red.svg" alt=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>HH0000078</td>
                                                        <td>Lốp Bridgestone</td>
                                                        <td>2.500.000<span> đ</span></td>
                                                        <td><input type="number" value=""></td>
                                                        <td>Chiếc</td>
                                                        <td>
                                                            <input type="number" value="">
                                                            <select name="" id="">
                                                                <option value="1">VNĐ</option>
                                                                <option value="2">%</option>
                                                            </select>
                                                        </td>
                                                        <td>2.500.000<span> đ</span></td>
                                                        <td><img src="../images/dell_logo_red.svg" alt=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>HH0000078</td>
                                                        <td>Lốp Bridgestone</td>
                                                        <td>2.500.000<span> đ</span></td>
                                                        <td><input type="number" value=""></td>
                                                        <td>Chiếc</td>
                                                        <td>
                                                            <input type="number" value="">
                                                            <select name="" id="">
                                                                <option value="1">VNĐ</option>
                                                                <option value="2">%</option>
                                                            </select>
                                                        </td>
                                                        <td>2.500.000<span> đ</span></td>
                                                        <td><img src="../images/dell_logo_red.svg" alt=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="total_count_tt d_flex space_b color_blue font_w500 mt_15">
                                        <p>Tổng cộng</p>
                                        <p>6.300.000 đ</p>
                                    </div>
                                </div>
                                <div class="total_pay mt_15">
                                    <div class="head_total_pay">
                                        <div class="box_list_pay">
                                        <div class="list_pay d_flex space_b align_c mt_15 position_r">
                                            <div class="list_pay_tt font_w500">
                                                Chiết khấu
                                            </div>
                                            <input type="text" class="input_infor_tag" placeholder="Ghi chú">
                                            <div class="count_money tinh_chiet_khau">
                                                <input type="number" value="" disabled placeholder="VNĐ">
                                            </div>
                                            <div class="in_chiet_khau position_a d_flex" style="display: none;">
                                                <input type="number" id="chiet_khau" value="">
                                                <select name="">
                                                    <option value="1">VNĐ</option>
                                                    <option value="2">%</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="list_pay d_flex space_b align_c mt_15 position_r">
                                            <div class="list_pay_tt font_w500">
                                                Thuế
                                            </div>
                                            <input type="text" class="input_infor_tag" placeholder="Ghi chú">
                                            <div class="count_money tinh_thue">
                                                <input type="number" disabled placeholder="VNĐ">
                                            </div>
                                            <div class="in_tax position_a font_s15" style="display: none;">
                                                <div class="input_tax d_flex flex_end align_c position_r">
                                                    <p class="font_w500">Thuế:</p>
                                                    <input type="number" id="in_tax" value="">
                                                    <select name="">
                                                        <option value="2">%</option>
                                                        <option value="1">VNĐ</option>
                                                    </select>
                                                </div>
                                                <div class="total_tax d_flex flex_end align_c font_w500">
                                                    <p>Tổng tiền thuế:</p>
                                                    <input type="number" name="" id="" disabled class="readonly">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="list_pay d_flex space_b align_c mt_15">
                                            <div class="list_pay_tt font_w500">
                                                Bảo hiểm
                                            </div>
                                            <input type="text" class="input_infor_tag" placeholder="Ghi chú">
                                            <div class="count_money">
                                                <input type="number" disabled placeholder="VNĐ">
                                            </div>
                                        </div>
                                        <div class="list_pay d_flex space_b align_c mt_15">
                                            <div class="list_pay_tt font_w500">
                                                Khoản trừ khác
                                            </div>
                                            <input type="text" class="input_infor_tag" placeholder="Ghi chú">
                                            <div class="count_money">
                                                <input type="number" disabled placeholder="VNĐ">
                                            </div>
                                        </div>
                                        <div class="list_pay d_flex space_b align_c mt_15">
                                            <div class="list_pay_tt font_w500">
                                                Khuyến mại
                                            </div>
                                            <select name="" id="" class="input_infor_tag select2_one2">
                                                <option value="0">Chương trình khuyến mại</option>
                                                <option value="1">CTKM 1</option>
                                                <option value="2">CTKM 2</option>
                                                <option value="3">CTKM 3</option>
                                            </select>
                                            </select>
                                            <div class="count_money">
                                                <input type="number" disabled placeholder="VNĐ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="footer_total_pay d_flex space_b align_c color_white font_w500">
                                        <p>Tổng thanh toán</p>
                                        <p>6.500.000 đ</p>
                                    </div>
                                </div>
                            </div>

                            <div class="box_button_function d_flex flex_end">
                                <button type="button" class="btn_huy btn_red_w" onclick="location.href='hoa-don.html'">Hủy</button>
                                <button type="submit" class="btn_dong_y btn_blue">Lưu hoá đơn</button>
                                <button type="submit" class="btn_luu_tt btn_blue">Lưu và thanh toán</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../includes/inc_popup_o.php');  ?>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/validate.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script>
    $('.active4').addClass('active');
    $('.active4').each(function() {
        if ($(this).hasClass('active4')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });

    $('.select2_one1').select2({
        width: '100%',
        placeholder: 'Tìm mã hàng hoá, tên hàng hoá,...',
    })
    $('.select2_one2').select2({
        width: '100%',
        placeholder: 'Chọn chương trình khuyến mại',
    })
    $('.select2_one3').select2({
        width: '100%',
        placeholder: 'Chọn khách hàng',
    })
    $('.select2_one_POS').select2({
        width: '100%',
        placeholder: 'Chọn tài khoản',
    })
    $('.select2_one_Banking').select2({
        width: '100%',
        placeholder: 'Chọn tài khoản',
    })
    // $(".select2_one2").select2({
    //     minimumResultsForSearch: Infinity
    // });
</script>

</html>