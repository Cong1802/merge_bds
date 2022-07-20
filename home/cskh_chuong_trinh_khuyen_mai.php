<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Chương trình khuyến mại</title>
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
                        <a href="">Chăm sóc khách hàng</a> /
                        <a href="">Chương trình khuyến mại</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">

                    <div class="option option-ctkm d_flex align_c space_b">

                            <div class="form_search_ctkm m-sm-0 ">
                                <input type="text" name="" placeholder="Tìm kiếm">
                                <button type="submit" class="btn-search">
                                    <img src="../images/Search.png">
                                </button>
                            </div>
                           <Div class="d_flex mb_sm_10 space_sm_b">
                                <div class="btn-create">
                                    <a href="tao-chuong-trinh-khuyen-mai.html"><span>+</span> Tạo khuyến mại</a>
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
                            <h4>Chương trình khuyến mại</h4>
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
                            <table class="table_ctkm table_1024">
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
                                            Mã chương trình
                                            <span class="span_thead"></span>
                                        </td>
                                        <td class="w_25">
                                            Tên chương trình
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Bắt đầu
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Kết thúc
                                            <span class="span_thead"></span>
                                        </td>
                                        <td class="w_25">
                                            Ghi chú
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Trạng thái
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
                                            <a href="chinh-sua-chuong-trinh-khuyen-mai.html">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
                                            <a href="chinh-sua-chuong-trinh-khuyen-mai.html">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_2">
                                            <Span>
                                                Chưa áp dụng
                                            </Span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_3">
                                            <Span>Hết hạn</span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
                                            <a href="">KM0000078</a>
                                        </td>
                                        <td>
                                            Giảm giá chúc mừng năm mới
                                        </td>
                                        <td>
                                            03/06/2021
                                        </td>
                                        <td>
                                            03/07/2021
                                        </td>
                                        <td>
                                            Không áp dụng sau 8h tối
                                        </td>
                                        <td class="status_km_1">
                                            <Span>Kích hoạt</span>
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
<script type="text/javascript" src="../js/js_c.js"></script>
<script>
    $('.active22').addClass('active');
    $('.active22').each(function() {
        if ($(this).hasClass('active22')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
</script>
</html>