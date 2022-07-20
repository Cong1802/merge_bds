<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Tạo hóa đơn</title>
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
                        <a href="ban-hang.html">Bán hàng</a> /
                        <a href="">Chi tiết hóa đơn</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body position_r">

                    <div>
                        <div class="create-bill">
                            <div class="header-create-bill d_flex space_b">
                                <div>
                                    Chi tiết hóa đơn
                                </div>
                                <div class="cursor_p" onclick="location.href='ban-hang.html'">
                                    Bán hàng <img src="../images/icon_down.png">
                                </div>
                            </div>
                            <div class="form_create_bill">
                                <form method="" action="">
                                    <div class="d_flex space_b flex_md_wrap main_create_hd1 align_c">
                                        <div class="div_1">
                                            <div class="lable"><lable>Mã khách hàng</lable></div>
                                            <select class="select-makh js-states form-control">
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="div_2 mr_md_0">
                                            <div class="lable"><lable>Mã phiếu báo giá</lable></div>
                                            <input type="text" class="bg_eee" disabled name="" placeholder="Chỉ có trong sửa chữa">
                                        </div>
                                        <div class="div_3">
                                            <div class="lable"><lable>Mã hóa đơn</lable></div>
                                            <input type="text" class="bg_eee" disabled name="" placeholder="Hệ thống tạo tự động">
                                        </div>
                                        <div class="div_4">
                                            <div class="lable"><lable>Thời gian</lable></div>
                                            <div class="d_flex">
                                                <input type="date"  class="mr_20 bg_eee mr_sm_0" disabled name="">
                                                <input type="time" class="bg_eee d-sm-none "  disabled name="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d_flex w-100 flex_md_wrap align_c mt_md_0 mt_20">
                                        <div class="div_name">
                                            <div class="lable"><lable>Tên khách hàng</lable></div>
                                            <select placeholder="Chọn khách hàng" disabled class="select2 js-states form-control">
                                                <option value="" disabled selected>Chọn khách hàng</option>
                                                <option value="1">Nguyễn Văn A</option>
                                                <option value="2">Nguyễn Văn B</option>
                                            </select>
                                        </div>
                                        <div class="div_number">
                                            <div class="lable"><lable>Số điện thoại</lable></div>
                                            <input type="text" name="" class="bg_eee" disabled placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="div_mail">
                                            <div class="lable"><lable>Email</lable></div>
                                            <input type="text" name="" class="bg_eee" disabled placeholder="Nhập địa chỉ Email">
                                        </div>
                                    </div>

                                    <div class="detail_hd align_c d_flex d_sm_block space_b mt_20 mt_sm_0">
                                        <h4>
                                            Hóa đơn chi tiết
                                        </h4>

                                    </div>

                                    <div class="table pb-0 pr-0">
                                        <Div class="overflow-768">
                                            <table class="table_768">
                                                <thead>
                                                    <tr>
                                                        <td class="stt">
                                                            STT
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Mã hàng hóa
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td class="name_hh">
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
                                                        <td class="option_delete">
                                                            <img src="../images/close.png">
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="tr">
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td class="mah">
                                                            <a href="">HDBH0000078</a>
                                                        </td>
                                                        <td >
                                                            Hàng hóa 1
                                                        </td>
                                                        <td class="text_a_r">
                                                            150.000 VNĐ
                                                        </td>
                                                        <td>
                                                            15
                                                        </td>
                                                        <td class="text_a_r">
                                                            150.000 VNĐ
                                                        </td>
                                                        <td class="text_a_r">
                                                            150.000 VNĐ
                                                        </td>
                                                        <td class="text_a_r">
                                                            150.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c">
                                                            <a class="delete_tr">
                                                                <img src="../images/icon-delete.png">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="tr">
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td class="mah">
                                                            <a href="">HDBH0000078</a>
                                                        </td>
                                                        <td >
                                                            Hàng hóa 1
                                                        </td>
                                                        <td class="text_a_r">
                                                            150.000 VNĐ
                                                        </td>
                                                        <td>
                                                            15
                                                        </td>
                                                        <td class="text_a_r">
                                                            150.000 VNĐ
                                                        </td>
                                                        <td class="text_a_r">
                                                            150.000 VNĐ
                                                        </td>
                                                        <td class="text_a_r">
                                                            150.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c">
                                                            <a class="delete_tr">
                                                                <img src="../images/icon-delete.png">
                                                            </a>
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
                                            <div class="total-375">
                                                <div class="d_flex space_b align_c">
                                                    <div class="title">Chiết khấu</div>
                                                    <div class="note_hd">
                                                        <input type="text" class="input_text w-100 bg_eee" disabled placeholder="Ghi chú">
                                                    </div>
                                                    <div>
                                                        <input type="number" class="input_number bg_eee" disabled placeholder="0 VNĐ">
                                                    </div>
                                                </div>
                                                <div class="d_flex align_c">
                                                    <div class="title">Thuế</div>
                                                    <div class="note_hd">
                                                        <input type="text" class="input_text w-100 bg_eee" disabled placeholder="Ghi chú">
                                                    </div>
                                                    <div>
                                                        <input type="number" class="input_number bg_eee" disabled placeholder="0 VNĐ">
                                                    </div>
                                                </div>
                                                <div class="d_flex space_b align_c">
                                                    <div class="title">Khoản trừ khác</div>
                                                    <div class="note_hd">
                                                        <input type="text" class="input_text w-100 bg_eee" disabled placeholder="Ghi chú">
                                                    </div>
                                                    <div>
                                                        <input type="number" class="input_number bg_eee" disabled placeholder="0 VNĐ">
                                                    </div>
                                                </div>
                                                <div class="d_flex space_b align_c">
                                                    <div class="title">Khuyến mại</div>
                                                    <div class="note_hd">
                                                    <select class="select_km js-states form-control" disabled>
                                                        <option></option>
                                                    </select>
                                                    </div>
                                                    <div>
                                                        <input type="number" class="input_number bg_eee" disabled placeholder="0 VNĐ">
                                                    </div>
                                                </div>
                                            </div>
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
                                    
                                    <div class="d_flex flex_end submit_form mt_20 mt_sm_0">
                                        <button type="submit" class="btn1">Đồng ý</button>
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
    $('.active6').addClass('active');
    $('.active6').each(function() {
        if ($(this).hasClass('active6')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
    $('.select-makh').select2({
        width: '100%',
        placeholder: 'Chọn mã khách hàng',
    })
    $('.select2').select2({
        width: '100%',
        placeholder: 'Khách hàng',
    })
    $(".select_km").select2({
    placeholder: "Chọn chương trình khuyến mại",
    allowClear: true
});
</script>
</html>