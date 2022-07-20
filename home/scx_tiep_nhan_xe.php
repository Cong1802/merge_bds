<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Tiếp nhận xe</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/style_o.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/daterangepicker.css?v=<?= $ver ?>">
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
                    <div class="head_title">
                        <p>Sửa chữa xe <span>/</span> Tiếp nhận xe</p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="scx_tiep_nhan_xe">
                        <div class="head_main_body d_flex space_b">
                            <div id="flex_p_1" class="d_flex w_100 space_b">
                                <div id="toolbar_01" class="toolbar form_search position_r">
                                    <input type="text" class="input_search" value="" placeholder="Tìm kiếm">
                                    <span class="btn_search"></span>
                                </div>
                                <div id="toolbar_02" class="toolbar form_date position_r cursor_p">
                                    <input type="text" name="dates" id="" class="p_output_date" value="">
                                    <img class="" src="../images/choose_date.png" alt="">
                                </div>
                                <div id="toolbar_03" class="toolbar choose_status_traf cursor_p position_r white_s_nw">
                                    <div class="d_flex box_select select_tt space_b align_c">
                                        <p class="p_box_option1 p_output_tt" data-id="0">Tất cả</p>
                                        <img src="../images/show_infor.png" alt="">
                                    </div>
                                    <div class="show_list_popup list_popup_stt position_a" style="display: none">
                                        <div class="box_list_popup_stt text_a_l">
                                            <p class="option_tt d_flex align_c">Tất cả</p>
                                            <p class="option_tt d_flex align_c">Đã sửa</p>
                                            <p class="option_tt d_flex align_c">Đang sửa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="tao-phieu-tiep-nhan.html">
                                <div id="toolbar_04" class="toolbar btn_blue btn_tao_phieu_nhan d_flex align_c">
                                    <img class="position_a" src="../images/img_add.png" alt="">
                                    <p>Tạo phiếu tiếp nhận</p>
                                </div>
                            </a>
                            <div id="flex_p_3" class="d_flex flex_end ml_10">
                                <div id="toolbar_05" class="toolbar btn_blue_w export_file font_w500 white_s_nw">
                                    Xuất file
                                </div>
                                <div id="" class="toolbar choose_func_480 cursor_p position_r white_s_nw">
                                    <div class="d_flex box_select select_tt space_b align_c">
                                        <p class="p_box_option1 p_output_tt_func_480" data-id="0">Tạo phiếu tiếp nhận</p>
                                        <img src="../images/show_infor.png" alt="">
                                    </div>
                                    <div class="show_list_popup list_popup_func_480 position_a" style="display: none">
                                        <div class="box_list_popup_stt text_a_l">
                                           <a href="tao-phieu-tiep-nhan.html"><p class="option_tt d_flex align_c color_grey">Tạo phiếu tiếp nhận</p></a> 
                                            <p class="option_tt d_flex align_c">Xuất file</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="toolbar_06" class="toolbar box_instructs d_flex align_c white_s_nw">
                                    <img src="../images/instructs.png" alt="">
                                    <p class="color_blue font_w500 ml_10 font_s15 white_s_nw">Hướng dẫn</p>
                                </div>
                            </div>
                        </div>
                        <div class="choose_branch d_flex space_b align_c mt_20">
                            <p class="font_s24 color_grey font_wB white_s_nw">Tiếp nhận xe</p>
                            <?php include('../includes/chi_nhanh.php'); ?>
                        </div>
                        <div class="details_main_body mt_20 d_flex flex_w space_b">
                            <div class="box_model_count_parents">
                                <div class="box_model_count color_grey font_s14">
                                    <div class="header_box d_flex align_c flex_start">
                                        <img class="logo_car" src="../images/logoMec.png" alt="">
                                        <div class="infor_car">
                                            <p class="font_s16 font_w500">Mercedes S650 Maybach</p>
                                            <p class="color_blue">30H - 999.88</p>
                                            <div class="d_flex space_b">
                                                <p>Trắng</p>
                                                <p class="color_grey2">14:38 12/11/2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body_box position_r">
                                        <div class="infor_service">
                                            <p class="color_grey2">Dịch vụ: <span class="color_grey">Bảo dưỡng định kỳ</span></p>
                                            <p class="color_grey2">Khách hàng: <span class="color_grey">Lương Hùng Lâm</span></p>
                                            <p class="color_grey2">Số điện thoại: <span class="color_grey">0988 988 889</span></p>
                                            <p class="color_grey2">Mã phiếu tiếp nhận: <span class="color_grey">PTN00000923</span></p>
                                        </div>
                                    </div>
                                    <div class="footer_box back_org">
                                        <p class="text_a_c font_s16 color_white font_w500">Đang sửa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box_model_count_parents">
                                <div class="box_model_count color_grey font_s14">
                                    <div class="header_box d_flex align_c flex_start">
                                        <img class="logo_car" src="../images/logoVinfast.png" alt="">
                                        <div class="infor_car">
                                            <p class="font_s16 font_w500">Mercedes S650 Maybach</p>
                                            <p class="color_blue">30H - 999.88</p>
                                            <div class="d_flex space_b">
                                                <p>Trắng</p>
                                                <p class="color_grey2">14:38 12/11/2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body_box position_r">
                                        <div class="infor_service">
                                            <p class="color_grey2">Dịch vụ: <span class="color_grey">Bảo dưỡng định kỳ</span></p>
                                            <p class="color_grey2">Khách hàng: <span class="color_grey">Lương Hùng Lâm</span></p>
                                            <p class="color_grey2">Số điện thoại: <span class="color_grey">0988 988 889</span></p>
                                            <p class="color_grey2">Mã phiếu tiếp nhận: <span class="color_grey">PTN00000923</span></p>
                                        </div>
                                    </div>
                                    <div class="footer_box back_green">
                                        <p class="text_a_c font_s16 color_white font_w500">Đã sửa xong</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box_model_count_parents">
                                <div class="box_model_count color_grey font_s14">
                                    <div class="header_box d_flex align_c flex_start">
                                        <img class="logo_car" src="../images/logoBMW.png" alt="">
                                        <div class="infor_car">
                                            <p class="font_s16 font_w500">Mercedes S650 Maybach</p>
                                            <p class="color_blue">30H - 999.88</p>
                                            <div class="d_flex space_b">
                                                <p>Trắng</p>
                                                <p class="color_grey2">14:38 12/11/2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body_box position_r">
                                        <div class="infor_service">
                                            <p class="color_grey2">Dịch vụ: <span class="color_grey">Bảo dưỡng định kỳ</span></p>
                                            <p class="color_grey2">Khách hàng: <span class="color_grey">Lương Hùng Lâm</span></p>
                                            <p class="color_grey2">Số điện thoại: <span class="color_grey">0988 988 889</span></p>
                                            <p class="color_grey2">Mã phiếu tiếp nhận: <span class="color_grey">PTN00000923</span></p>
                                        </div>
                                    </div>
                                    <div class="footer_box back_org">
                                        <p class="text_a_c font_s16 color_white font_w500">Đang sửa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box_model_count_parents">
                                <div class="box_model_count color_grey font_s14">
                                    <div class="header_box d_flex align_c flex_start">
                                        <img class="logo_car" src="../images/logoBMW.png" alt="">
                                        <div class="infor_car">
                                            <p class="font_s16 font_w500">Mercedes S650 Maybach</p>
                                            <p class="color_blue">30H - 999.88</p>
                                            <div class="d_flex space_b">
                                                <p>Trắng</p>
                                                <p class="color_grey2">14:38 12/11/2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body_box position_r">
                                        <div class="infor_service">
                                            <p class="color_grey2">Dịch vụ: <span class="color_grey">Bảo dưỡng định kỳ</span></p>
                                            <p class="color_grey2">Khách hàng: <span class="color_grey">Lương Hùng Lâm</span></p>
                                            <p class="color_grey2">Số điện thoại: <span class="color_grey">0988 988 889</span></p>
                                            <p class="color_grey2">Mã phiếu tiếp nhận: <span class="color_grey">PTN00000923</span></p>
                                        </div>
                                    </div>
                                    <div class="footer_box back_org">
                                        <p class="text_a_c font_s16 color_white font_w500">Đang sửa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box_model_count_parents">
                                <div class="box_model_count color_grey font_s14">
                                    <div class="header_box d_flex align_c flex_start">
                                        <img class="logo_car" src="../images/logoBMW.png" alt="">
                                        <div class="infor_car">
                                            <p class="font_s16 font_w500">Mercedes S650 Maybach</p>
                                            <p class="color_blue">30H - 999.88</p>
                                            <div class="d_flex space_b">
                                                <p>Trắng</p>
                                                <p class="color_grey2">14:38 12/11/2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body_box position_r">
                                        <div class="infor_service">
                                            <p class="color_grey2">Dịch vụ: <span class="color_grey">Bảo dưỡng định kỳ</span></p>
                                            <p class="color_grey2">Khách hàng: <span class="color_grey">Lương Hùng Lâm</span></p>
                                            <p class="color_grey2">Số điện thoại: <span class="color_grey">0988 988 889</span></p>
                                            <p class="color_grey2">Mã phiếu tiếp nhận: <span class="color_grey">PTN00000923</span></p>
                                        </div>
                                    </div>
                                    <div class="footer_box back_org">
                                        <p class="text_a_c font_s16 color_white font_w500">Đang sửa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box_model_count_parents">
                                <div class="box_model_count color_grey font_s14">
                                    <div class="header_box d_flex align_c flex_start">
                                        <img class="logo_car" src="../images/logoBMW.png" alt="">
                                        <div class="infor_car">
                                            <p class="font_s16 font_w500">Mercedes S650 Maybach</p>
                                            <p class="color_blue">30H - 999.88</p>
                                            <div class="d_flex space_b">
                                                <p>Trắng</p>
                                                <p class="color_grey2">14:38 12/11/2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body_box position_r">
                                        <div class="infor_service">
                                            <p class="color_grey2">Dịch vụ: <span class="color_grey">Bảo dưỡng định kỳ</span></p>
                                            <p class="color_grey2">Khách hàng: <span class="color_grey">Lương Hùng Lâm</span></p>
                                            <p class="color_grey2">Số điện thoại: <span class="color_grey">0988 988 889</span></p>
                                            <p class="color_grey2">Mã phiếu tiếp nhận: <span class="color_grey">PTN00000923</span></p>
                                        </div>
                                    </div>
                                    <div class="footer_box back_org">
                                        <p class="text_a_c font_s16 color_white font_w500">Đang sửa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box_model_count_parents">
                                <div class="box_model_count color_grey font_s14">
                                    <div class="header_box d_flex align_c flex_start">
                                        <img class="logo_car" src="../images/logoBMW.png" alt="">
                                        <div class="infor_car">
                                            <p class="font_s16 font_w500">Mercedes S650 Maybach</p>
                                            <p class="color_blue">30H - 999.88</p>
                                            <div class="d_flex space_b">
                                                <p>Trắng</p>
                                                <p class="color_grey2">14:38 12/11/2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body_box position_r">
                                        <div class="infor_service">
                                            <p class="color_grey2">Dịch vụ: <span class="color_grey">Bảo dưỡng định kỳ</span></p>
                                            <p class="color_grey2">Khách hàng: <span class="color_grey">Lương Hùng Lâm</span></p>
                                            <p class="color_grey2">Số điện thoại: <span class="color_grey">0988 988 889</span></p>
                                            <p class="color_grey2">Mã phiếu tiếp nhận: <span class="color_grey">PTN00000923</span></p>
                                        </div>
                                    </div>
                                    <div class="footer_box back_org">
                                        <p class="text_a_c font_s16 color_white font_w500">Đang sửa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination_l d_flex space_b align_c">
                            <div class="total_record color_grey">
                                Hiển thị:
                                <select>
                                    <option value="1">10</option>
                                    <option value="2">20</option>
                                    <option value="3">50</option>
                                </select>
                            </div>
                            <div class="pagi_right d_flex flex_end align_c">
                                <li><a rel="nofollow" href="" class="preview" title="Prev page">&lt;</a></li>
                                <li class="active"><a rel="nofollow">1</a></li>
                                <li><a rel="nofollow" href="" class="">2</a></li>
                                <li><a rel="nofollow" href="" class="">3</a></li>
                                <li><a rel="nofollow" href="" class="">4</a></li>
                                <li><a rel="nofollow" href="" class=" next" title="Next page">&gt;</a></li>
                                <li><a rel="nofollow" href="" class=" notUndeline">...</a></li>
                                <li><a rel="nofollow" href="" class=" " title="Last page"></a></li>
                                <p class="font_s14 color_grey">Hiển thị 1-20 trên tổng số <span>50</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup_show_scx"></div>
            <div class="show_list_popup list_popup_menu_infor_car position_a" id="list_popup_menu_infor_car" style="display: none">
                <div class="box_list_popup_stt text_a_l">
                    <a href="/chi-tiet-phieu-tiep-nhan.html" class="color_grey">
                        <p class="option_tt d_flex align_c font_w500">Chi tiết</p>
                    </a>
                    <a href="/tao-phieu-bao-gia.html" class="color_grey">
                        <p class="option_tt d_flex align_c font_w500">Tạo báo giá</p>
                    </a>
                    <a href="/tao-hoa-don.html" class="color_grey">
                        <p class="option_tt d_flex align_c font_w500">Tạo hoá đơn</p>
                    </a>
                    <p class="option_tt d_flex align_c font_w500 color_grey">In phiếu</p>
                    <a href="/chinh-sua-phieu-tiep-nhan.html" class="color_grey">
                        <p class="option_tt d_flex align_c font_w500">Chỉnh sửa</p>
                    </a>
                    <p class="option_tt d_flex align_c font_w500 color_grey">Xuất file</p>
                    <p class="option_tt d_flex align_c color_green trang_thai_sua font_w500">Đã sửa xong</p>
                    <p class="option_tt d_flex align_c color_red del_phieu font_w500">Xoá phiếu </p>
                </div>
            </div>
        </div>
        <?php include('../includes/inc_popup_o.php');  ?>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/moment.min.js"></script>
<script type="text/javascript" src="../js/daterangepicker.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script>
    $('.active2').each(function() {
        if ($(this).hasClass('active2')) {
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
</script>

</html>