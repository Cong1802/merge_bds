<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Tạo phiếu trả hàng</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
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
                        <a href="ban-hang.html"><img src="../images/back.png"> Bán hàng</a> /
                        <a href="tra-hang.html">Trả hàng</a> /
                        <a href="">Chi tiết phiếu trả hàng</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body position_r">

                    <div>
                        <div class="create-bill">
                            <div class="header-create-bill d_flex space_b">
                                <div>
                                    Chi tiết phiếu trả hàng
                                </div>
                            </div>
                            <div class="form_create_bill">
                                <form method="" action="">
                                    <div class="d_flex input_form_trahang flex_md_wrap align_c">
                                        <div>
                                            <div class="lable"><lable>Mã phiếu trả hàng</lable></div>
                                            <input type="text" disabled class="bg_eee maphieu" name="" placeholder="Hệ thống tạo tự động">
                                        </div>
                                        <div class="mr_md_0">
                                            <div class="lable"><lable>Ngày tạo phiếu</lable></div>
                                            <input type="date" disabled class="time_create bg_eee" name="">
                                        </div>
                                        <div class="mb_md_0">
                                            <div class="lable"><lable>Người tạo</lable></div>
                                            <input type="text" class="bg_eee customer_create" disabled name="" placeholder="Nguyễn Trần Trung Quân">
                                        </div>
                                    </div>

                                    <div class="detail_hd align_c d_flex space_b mt_20 mb_20">
                                        <h4>
                                            Chọn hàng hóa cần trả
                                        </h4>

                                        <div class="checkbox">
                                            Trả lại toàn bộ
                                            <input type="checkbox" disabled class="checked_all bg_eee ver_mid">
                                        </div>
                                    </div>

                                    <div class="select_bill_back">
                                        <Div class="overflow-768">
                                            <table class="table_768">
                                                <thead>
                                                    <tr>
                                                        
                                                        <td class="p-5">
                                                            STT
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Mã hóa đơn
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Tên hàng hóa
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Đơn giá
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Số lượng
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Đơn vị
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Chiết khấu
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Thành tiền
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Trả lại
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="tr">
                                                        
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td>
                                                            HDBH0000078
                                                        </td>
                                                        <td>
                                                            Lốp Bridgestone
                                                        </td>
                                                        <td class="text_a_r">
                                                            2.500.000 VNĐ
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td class="d_flex space_b align_c ">
                                                            100.000 
                                                            <span class="dv bg_eee">VNĐ</span>
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c checkbox ">
                                                            <input class='input_checkbox ver_mid bg_eee' disabled type="checkbox"> / 2
                                                        </td>
                                                    </tr>
                                                    <tr class="tr">
                                                        
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td>
                                                            HDBH0000078
                                                        </td>
                                                        <td>
                                                            Lốp Bridgestone
                                                        </td>
                                                        <td class="text_a_r">
                                                            2.500.000 VNĐ
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td class="d_flex space_b align_c ">
                                                            100.000 
                                                            <span class="dv bg_eee">VNĐ</span>
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c checkbox ">
                                                            <input class='input_checkbox ver_mid bg_eee' disabled type="checkbox"> / 2
                                                        </td>
                                                    </tr>
                                                    <tr class="tr">
                                                        
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td>
                                                            HDBH0000078
                                                        </td>
                                                        <td>
                                                            Lốp Bridgestone
                                                        </td>
                                                        <td class="text_a_r">
                                                            2.500.000 VNĐ
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td class="d_flex space_b align_c ">
                                                            100.000 
                                                            <span class="dv bg_eee">VNĐ</span>
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c checkbox ">
                                                            <input class='input_checkbox ver_mid bg_eee' disabled type="checkbox"> / 2
                                                        </td>
                                                    </tr>
                                                    <tr class="tr">
                                                        
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td>
                                                            HDBH0000078
                                                        </td>
                                                        <td>
                                                            Lốp Bridgestone
                                                        </td>
                                                        <td class="text_a_r">
                                                            2.500.000 VNĐ
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td class="d_flex space_b align_c ">
                                                            100.000 
                                                            <span class="dv bg_eee">VNĐ</span>
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c checkbox ">
                                                            <input class='input_checkbox ver_mid bg_eee' disabled type="checkbox"> / 2
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </Div>
                                        <div class="total_money d_flex space_b align_c">
                                            <div>
                                                Tổng tiền
                                            </div>
                                            <div>
                                                0 VNĐ
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total_hd">
                                        
                                        <div class="body_hd overflow_sm">
                                            <Div class="total-375">
                                            <div class="d_flex  align_c">
                                                <div class="title">Chiết khấu</div>
                                                <div class="note_hd">
                                                    <input type="text" class="input_text w-100 bg_eee" disabled placeholder="Ghi chú">
                                                </div>
                                                <div>
                                                    <input type="text" class="input_number bg_eee" disabled value="0 VNĐ">
                                                </div>
                                            </div>
                                            <div class="d_flex  align_c">
                                                <div class="title">Thuế</div>
                                                <div class="note_hd">
                                                    <input type="text" class="input_text w-100 bg_eee" disabled placeholder="Ghi chú">
                                                </div>
                                                <div>
                                                    <input type="text" class="input_number bg_eee" disabled value="0 VNĐ">
                                                </div>
                                            </div>
                                            <div class="d_flex  align_c">
                                                <div class="title">Khoản trừ khác</div>
                                                <div class="note_hd">
                                                    <input type="text" class="input_text w-100 bg_eee" disabled placeholder="Ghi chú">
                                                </div>
                                                <div>
                                                    <input type="text" class="input_number bg_eee" disabled value="0 VNĐ">
                                                </div>
                                            </div>
                                            <div class="d_flex  align_c">
                                                <div class="title">Khuyến mại</div>
                                                <div class="note_hd">
                                                <select disabled class="select_km js-states form-control">
                                                    <option></option>
                                                </select>
                                                </div>
                                                <div>
                                                    <input type="text" class="input_number bg_eee" disabled value="0 VNĐ">
                                                </div>
                                            </div>
                                            </Div>
                                        </div>
                                        <div class="footer d_flex space_b align_c">
                                            <div>
                                                Tổng thanh toán
                                            </div>
                                            <div>
                                                0 VNĐ
                                            </div>
                                        </div>
                                    </div>

                                    <div class="total_haokhau">
                                        <div class="body_hd overflow_sm">
                                            <div class="total-375">
                                                <div class="d_flex space_b align_c">
                                                    <div class="title">Phí khấu hao</div>
                                                    <div class="note_hd">
                                                        <input type="text" class="input_text w-100 bg_eee" disabled placeholder="Ghi chú">
                                                    </div>
                                                    <div>
                                                        <input type="text" class="input_number bg_eee" disabled value="0 VNĐ">
                                                    </div>
                                                </div>
                                                <div class="d_flex space_b align_c">
                                                    <div class="title">Phí trả hàng</div>
                                                    <div  class="note_hd">
                                                        <input type="text" class="input_text w-100 bg_eee" disabled placeholder="Chọn chương trình khuyến mại">
                                                    </div>
                                                    <div>
                                                        <input type="text" class="input_number bg_eee" disabled value="0 VNĐ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        
                                        <div class="footer d_flex space_b align_c">
                                            <div>
                                                Cần trả khách
                                            </div>
                                            <div>
                                                0 VNĐ
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d_flex flex_end submit_form mt_20 mt_sm_0">
                                        <button type="button" onclick="location.href='tra-hang.html'" class="btn1">Đồng ý</button>
                                    </div>

                                </form>
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
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/js_c.js"></script>
<script>
    $('.active7').addClass('active');
    $('.active7').each(function() {
        if ($(this).hasClass('active7')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
    $(".select_km").select2({
    placeholder: "Chọn chương trình khuyến mại",
    allowClear: true
    });
    
</script>
</html>