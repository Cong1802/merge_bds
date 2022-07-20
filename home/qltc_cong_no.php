<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Quản lý công nợ</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/daterangepicker.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/style_c.css?v=<?= $ver ?>">
</head>

<body>
    <div class="main_wrapper_all">
        <div class="wapper_all">
            <?php include('../includes/menu_sidebar.php'); ?>
        </div>
        <div class="box_main_all">
            <?php include('../includes/menu_header_tab.php');  ?>
            <div class="main">
                <div class="header_all d_flex space_b align_c">
                    <div class="head_title">
                        <a href="">Quản lý tài chính</a> /
                        <a href="">Công nợ</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">

                    <div class="option d_flex d-xl-column option_congno">
                            <div class="d_flex d_sm_block space_b option_left">
                                <div class="form_search form_seach_congno">
                                    <input type="text" name="" placeholder="Tìm kiếm">
                                    <button type="submit" class="btn-search">
                                        <img src="../images/Search.png">
                                    </button>
                                </div>
                                <Div class="d_flex">
                                    <div class="form_date mr_xl_20 position_r">
                                        <input type="text" name="dates">
                                        <img src="../images/choose_date.png">
                                    </div>
                                    <div class="choose_status_traf cursor_p select_yc position_r mr_20 mr_xl_0 mr_md_0">
                                        <div class="d_flex box_select select_tt space_b align_c">
                                            <p class="p_box_option1 p_output_tt ml_10" data-id="0">Tất cả</p>
                                            <img src="../images/show_infor.png" alt="">
                                        </div>
                                        <div class="show_list_popup show option_yc list_popup_stt position_a mr_20 " style="display: none">
                                            <div class="box_list_popup_stt text_a_l">
                                                <p class="option_tt d_flex align_c">Tất cả</p>
                                                <p class="option_tt d_flex align_c">Chuyển khoản</p>
                                                <p class="option_tt d_flex align_c">Tiền mặt</p>
                                                <p class="option_tt d_flex align_c">Quẹt POS</p>
                                            </div>
                                        </div>
                                    </Div>
                                </div>
                            </div>
                            <div class="d_flex option_right mt_lg_20 mb_lg_0 mt_md_0 flex_xl_end">
                                <div class="export_file">
                                    <a href="">Xuất file</a>
                                </div>
                                <div class="intructs">
                                    <a href="">
                                        <img src="../images/instructs.png">
                                        Hướng dẫn</a>
                                </div>
                            </div>

                    </div>

                    <Div class="d_flex space_b align_c mt_20 div_select_brand">
                        <Div>
                            <h4>Công nợ</h4>
                        </Div>
                        <div class="choose_gara sort-hh cursor_p position_r">
                            <div class="d_flex   space_b align_c">
                                <div class="d_flex flex_center">
                                    <p class="p_box_option1 p_output_brand ml_10" data-id="0">Toàn bộ chi nhánh</p>
                                </div>
                                <img src="../images/show_infor.png" alt="">
                            </div>
                            <div class="list_branch item_sort position_a">
                                <div class="box_list_popup_branch text_a_l">
                                    <p class="option_brand d_flex align_c">Toàn bộ chi nhánh</p>
                                    <p class="option_brand d_flex align_c">Chi nhánh 1</p>
                                    <p class="option_brand d_flex align_c">Chi nhánh 2</p>
                                    <p class="option_brand d_flex align_c">Chi nhánh 3</p>
                                </div>
                            </div>
                        </div>
                    </Div>

                    <div>
                        <div class="tabs-cong_no d_flex mt_20">
                            <div class="tabs_1 tabs  active"><a href="#table_1">Công nợ phải trả</a></div>
                            <div class="tabs_2 tabs"><a href="#table_2">Công nợ phải thu</a></div>
                        </div>

                       
                        <div class="list_customer mt_0">

                             <!-- công nợ phải thu -->
                             <table id="table_1" class="table_cong_no active">
                                <thead>
                                    <tr>
                                        <td class="stt">
                                            STT
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Loại công nợ
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Mã đối tác
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Tên đối tác
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Giao dịch phát sinh
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Tổng thanh toán
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Đã thanh toán
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Số tiền nợ
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Thời gian
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Trạng thái
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Chi nhánh
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan2">
                                            <span>Chưa thanh toán</span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan3">
                                            <span>Thanh toán thiếu</span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ 
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">NCC0000078</a>
                                        </td>
                                        <td>
                                            Vinfast
                                        </td>
                                        <td class="mah">
                                            <a href="">PC0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- công nợ phải thu -->

                            <!-- công nợ phải trả -->
                            <table id="table_2" class="table_cong_no">
                                <thead>
                                    <tr>
                                        <td class="stt">
                                            STT
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Loại công nợ
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Mã đối tác
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Tên đối tác
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Giao dịch phát sinh
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Tổng thanh toán
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Đã thanh toán
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Số tiền nợ
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Thời gian
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Trạng thái
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Chi nhánh
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan2">
                                            <Span>Chưa thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan3">
                                            <Span>Thanh toán thiếu</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000đ VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td>
                                            Mua hàng
                                        </td>
                                        <td class="mah">
                                            <a href="">KH0000078</a>
                                        </td>
                                        <td>
                                            Phan Anh
                                        </td>
                                        <td class="mah">
                                            <a href="">PT0000078</a>
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            0 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td class="status_thanhtoan1">
                                            <Span>Đã thanh toán</Span>
                                        </td>
                                        </td>
                                        <td>
                                            Gara auto Định Công
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- công nợ phải trả -->

                        </div>
                        

                        

                        <div class="paginate d_flex space_b">
                            <div class="total_record">
                                Hiển thị:
                                <select>
                                    <option>20</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                            </div>
                            <div class="pagination d_flex flex_center">
                                <Div class="mb_sm_10">
                                    <a href=""><</a>
                                    <a href="" class="active">1</a>
                                    <a href="">2</a>
                                    <a href="">3</a>
                                    <a href="">4</a>
                                    <a href="">5</a>
                                    <a href="">></a>
                                </Div>
                                <span>Hiển thị 1-20 trên tổng số 50</span>
                            </div>
                        </div>

                    </div>
                
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script type="text/javascript" src="../js/moment.min.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/daterangepicker.min.js"></script>
<script type="text/javascript" src="../js/js_c.js"></script>
<script>
    $('.active19').addClass('active');
    $('.active19').each(function() {
        if ($(this).hasClass('active19')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
    $(".select_brand").select2({
        
    });
</script>
</html>