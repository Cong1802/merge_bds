<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Quản lý lô hàng</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <a href="ban-hang.html">Kho hàng</a> /
                        <a href="">Quản lý lô hàng</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">

                    <div class="option flex-sm-wrap-reverse d_flex">
                            <div class="form_search_lohang mt_sm_20 mr_sm_0">
                                <input type="text" name="" placeholder="Tìm kiếm">
                                <button type="submit" class="btn-search">
                                    <img src="../images/Search.png">
                                </button>
                            </div>
                            
                            <div class="btn_create_hanghoa btn-create d-sm-none">
                                <span>+</span> Thêm lô hàng
                            </div>
                            <div class="export_file d-sm-none">
                                <a href="">Xuất file</a>
                            </div>
                            <Div class="d_flex w_sm_100">
                                <div class="choose_option cursor_p position_r">
                                        <div class="d_flex   space_b align_c">
                                            <div class="d_flex flex_center">
                                                <p class="p_box_option1 p_output_tacvu ml_10" data-id="0">Tác vụ</p>
                                            </div>
                                            <img src="../images/show_infor.png" alt="">
                                        </div>
                                        <div class="list_tacvu item_sort position_a">
                                            <div class="box_list_popup_branch text_a_l">
                                                <p class="option_tacvu btn_create_hanghoa d_flex align_c">Tạo hóa đơn</p>
                                                <p class="option_tacvu d_flex align_c">Nhập file</p>
                                                <p class="option_tacvu d_flex align_c">Xuất file</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="intructs">
                                    <a href="">
                                        <img src="../images/instructs.png">
                                        Hướng dẫn</a>
                                </div>
                            </Div>
                    </div>

                    <Div class="d_flex space_b align_c mt_20 div_select_brand">
                        <Div>
                            <h4>Quản lý lô hàng</h4>
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
                        <div class="list_customer">
                            <table class="table-lohang">
                                <thead>
                                    <tr>
                                        <td class="checkbox">
                                            <input type="checkbox" class="checked_all">
                                            <span class="span_thead"></span>
                                        </td>
                                        <td class="stt">
                                            STT
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Mã hàng hóa
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Tên hàng hóa
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Số lô
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Ngày sản xuất
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Hạn sử dụng
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Còn lại (ngày)
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Đơn vị tính
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Giá bán
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Giá nhập
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Tồn kho
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Ốp đèn trước vinfast
                                        </td>
                                        <td>
                                            89727895
                                        </td>
                                        <td>
                                            04/04/2021
                                        </td>
                                        <td>
                                            04/04/2022
                                        </td>
                                        <td>
                                            232
                                        </td>
                                        <td>
                                            Cái
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <tr class="option_bill">
                                           <td colspan="12">
                                                <a class="edit_hh">Chi tiết/Chỉnh sửa</a>
                                                <a class="delete_hh" href="">Xoá hàng hoá</a>
                                           </td>
                                        </tr>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Ốp đèn trước vinfast
                                        </td>
                                        <td>
                                            89727895
                                        </td>
                                        <td>
                                            04/04/2021
                                        </td>
                                        <td>
                                            04/04/2022
                                        </td>
                                        <td>
                                            232
                                        </td>
                                        <td>
                                            Cái
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Ốp đèn trước vinfast
                                        </td>
                                        <td>
                                            89727895
                                        </td>
                                        <td>
                                            04/04/2021
                                        </td>
                                        <td>
                                            04/04/2022
                                        </td>
                                        <td>
                                            232
                                        </td>
                                        <td>
                                            Cái
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Ốp đèn trước vinfast
                                        </td>
                                        <td>
                                            89727895
                                        </td>
                                        <td>
                                            04/04/2021
                                        </td>
                                        <td>
                                            04/04/2022
                                        </td>
                                        <td>
                                            232
                                        </td>
                                        <td>
                                            Cái
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Ốp đèn trước vinfast
                                        </td>
                                        <td>
                                            89727895
                                        </td>
                                        <td>
                                            04/04/2021
                                        </td>
                                        <td>
                                            04/04/2022
                                        </td>
                                        <td>
                                            232
                                        </td>
                                        <td>
                                            Cái
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Ốp đèn trước vinfast
                                        </td>
                                        <td>
                                            89727895
                                        </td>
                                        <td>
                                            04/04/2021
                                        </td>
                                        <td>
                                            04/04/2022
                                        </td>
                                        <td>
                                            232
                                        </td>
                                        <td>
                                            Cái
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Ốp đèn trước vinfast
                                        </td>
                                        <td>
                                            89727895
                                        </td>
                                        <td>
                                            04/04/2021
                                        </td>
                                        <td>
                                            04/04/2022
                                        </td>
                                        <td>
                                            232
                                        </td>
                                        <td>
                                            Cái
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Ốp đèn trước vinfast
                                        </td>
                                        <td>
                                            89727895
                                        </td>
                                        <td>
                                            04/04/2021
                                        </td>
                                        <td>
                                            04/04/2022
                                        </td>
                                        <td>
                                            232
                                        </td>
                                        <td>
                                            Cái
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            1
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Ốp đèn trước vinfast
                                        </td>
                                        <td>
                                            89727895
                                        </td>
                                        <td>
                                            04/04/2021
                                        </td>
                                        <td>
                                            04/04/2022
                                        </td>
                                        <td>
                                            232
                                        </td>
                                        <td>
                                            Cái
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                    <?php include('../includes/inc_popup_c.php') ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script type="text/javascript" src="../js/js_c.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script>
    $('.active12').addClass('active');
    $('.active12').each(function() {
        if ($(this).hasClass('active12')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
    $("#form_all_hanghoa").validate({
    errorPlacement: function (error, element) {
        error.appendTo(element.parents(".box_input_infor"));
        error.wrap("<span class='error'>");
    },
    rules: {
        name_hanghoa: "required",
        name_ncc: "required",
        solo: "required",
    },
    messages: {
        name_hanghoa: "Vui lòng nhập tên hàng hóa",
        name_ncc: "Vui lòng nhập tên nhà cung cấp",
        solo: "Vui lòng nhập số lô",
    },
})
</script>
</html>