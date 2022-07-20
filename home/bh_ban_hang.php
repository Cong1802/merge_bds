<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Bán hàng</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/daterangepicker.css?v=<?= $ver ?>">
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
                        <a href="ban-hang.html">Bán hàng</a> /
                        <a href="">Bán hàng</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">

                    <div class="option flex-md-column d-xl-column d_flex">

                            <Div class="d_flex mt_md_20 mt_sm_10 div_search">
                                <div class="form_search form_search_hh_768">
                                    <input type="text" class="w-100" name="" placeholder="Tìm kiếm">
                                    <button type="submit" class="btn-search">
                                        <img src="../images/Search.png">
                                    </button>
                                </div>
                                <div class="form_date margin_r_20 mr_md_0 mr_xl_0 position_r">
                                    <input type="text" name="dates">
                                    <img src="../images/choose_date.png">
                                </div>
                            </Div>

                            <Div class="d_flex space_md_b space-xl-b space_sm_end">
                                <div class="choose_option cursor_p position_r">
                                    <div class="d_flex   space_b align_c">
                                        <div class="d_flex flex_center">
                                            <p class="p_box_option1 p_output_tacvu ml_10" data-id="0">Tác vụ</p>
                                        </div>
                                        <img src="../images/show_infor.png" alt="">
                                    </div>
                                    <div class="list_tacvu item_sort position_a">
                                        <div class="box_list_popup_branch text_a_l">
                                            <p onclick="location.href='tao-hoa-don-ban-hang.html'" class="option_tacvu d_flex align_c">Tạo hóa đơn</p>
                                            <p class="option_tacvu d_flex align_c">Xuất file</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_create_bill">
                                    <a href="tao-hoa-don-ban-hang.html"><span>+</span> Tạo hóa đơn</a>
                                </div>
                                <Div class="d_flex">
                                    <div class="export_file d-sm-none">
                                        <a href="">Xuất file</a>
                                    </div>
                                    <div class="intructs">
                                        <a href="">
                                            <img src="../images/instructs.png">
                                            Hướng dẫn</a>
                                    </div>
                                </Div>
                            </Div>
                    </div>

                    <Div class="d_flex space_b align_c mt_20 div_select_brand">
                        <Div>
                            <h4>Bán hàng</h4>
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
                            <table>
                                <thead>
                                    <tr>
                                        <td class="checkbox">
                                            <input type="checkbox" class="checked_all checked_all_banhang">
                                            <span class="span_thead"></span>
                                        </td>
                                        <td class="stt">
                                            STT
                                            <span class="span_thead"></span>
                                        </td>
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
                                            Tổng tiền
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Khách đã trả
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Cần thanh toán
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Ngày lập phiếu
                                            
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
                                            <a href="chi-tiet-hoa-don-ban-hang.html">HDBH0000078</a>
                                        </td>
                                        <td class="mah">
                                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                    </tr>
                                    
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            2
                                        </td>
                                        <td class="mah">
                                            <a href="chi-tiet-hoa-don-ban-hang.html">HDBH0000078</a>
                                        </td>
                                        <td class="mah">
                                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            3
                                        </td>
                                        <td class="mah">
                                            <a href="chi-tiet-hoa-don-ban-hang.html">HDBH0000078</a>
                                        </td>
                                        <td class="mah">
                                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            4
                                        </td>
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td class="mah">
                                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="chi-tiet-khach-hang.html">KH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                                        <td class="mah">
                                            <a href="">HDBH0000078</a>
                                        </td>
                                        <td>
                                            Nguyễn Quang Anh
                                        </td>
                                        <td class="text_a_r">
                                            15.000.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            150.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            14.850.000 VNĐ
                                        </td>
                                        <td>
                                            14:27 03/06/2021
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
                
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script type="text/javascript" src="../js/moment.min.js"></script>
<script type="text/javascript" src="../js/daterangepicker.min.js"></script>
<script type="text/javascript" src="../js/js_c.js"></script>
<script>
    $('.active6').addClass('active');
    $('.active6').each(function() {
        if ($(this).hasClass('active6')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
</script>
</html>