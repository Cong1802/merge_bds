<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Chỉnh sửa phiếu báo giá</title>
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
                        <a href="bao-gia.html"><img src="../images/back_btn.png" alt="">&nbsp;&nbsp;</a>
                        <p>Sửa chữa xe<span>&nbsp;/&nbsp;</span><a href="/bao-gia.html">Báo giá</a><span>&nbsp;/&nbsp;</span><a href="chinh-sua-phieu-bao-gia.html">Chỉnh sửa báo giá</a> </p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="main_tao_phieu_bao_gia">
                        <div class="main_create_all">
                            <div class="head_title_main_cre">Chỉnh sửa phiếu báo giá</div>
                            <div class="body_main_cre">
                                <div class="box_create_model_l1 d_flex space_b">
                                    <div class="box_input_infor box_input_infor_l4">
                                        <p>Mã phiếu tiếp nhận</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Nhập mã phiếu tiếp nhận">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l4">
                                        <p>Mã phiếu báo giá</p>
                                        <input type="text" class="input_infor_tag readonly" name="" disabled>
                                    </div>
                                    <div class="box_input_infor box_input_infor_l4">
                                        <p>Tên khách hàng</p>
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
                                <div class="box_create_model_l2">
                                    <p class="title_box_create_model">Đánh giá tình trạng</p>
                                    <div class="d_flex space_b flex_w font_s14">
                                        <div class="tt_table_list color_grey font_w500 d_flex w_100 mt_15">
                                            <p class="text_a_c">STT</p>
                                            <p>Hạng mục</p>
                                            <p>Tình trạng</p>
                                            <p>Đề xuất phương án</p>
                                        </div>
                                        <div class="tt_table_list color_grey font_wN d_flex w_100 mt_10">
                                            <p class="text_a_c">1</p>
                                            <p>Bugi</p>
                                            <p>Hỏng</p>
                                            <p>Thay mới</p>
                                        </div>
                                        <div class="tt_table_list color_grey font_wN d_flex w_100 mt_10">
                                            <p class="text_a_c">2</p>
                                            <p>Lốp </p>
                                            <p>Hỏng</p>
                                            <p>Thay mới</p>
                                        </div>
                                        <div class="tt_table_list color_grey font_wN d_flex w_100 mt_10">
                                            <p class="text_a_c">3</p>
                                            <p>Động cơ</p>
                                            <p>Có tiếng kêu lạ</p>
                                            <p>Sửa chữa/Bảo dưỡng</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box_create_model_l1 d_flex space_b align_c">
                                    <p class="font_w500 font_s15">Bảng báo giá chi tiết</p>
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
                                    <div class="footer_total_pay d_flex space_b align_c color_white font_w500">
                                        <p>Tổng thanh toán</p>
                                        <p>6.500.000 đ</p>
                                    </div>
                                </div>
                            </div>

                            <div class="box_button_function d_flex flex_end">
                                <button type="button" class="btn_huy btn_red_w" onclick="location.href='bao-gia.html'">Hủy</button>
                                <button type="button" class=" btn_update btn_blue">Cập nhật báo giá</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../includes/inc_popup_o.php');  ?>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script>
    $('.active3').addClass('active');
    $('.active3').each(function() {
        if ($(this).hasClass('active3')) {
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
    // $(".select2_one2").select2({
    //     minimumResultsForSearch: Infinity
    // });
</script>

</html>