<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Chi tiết phiếu kiểm kê</title>
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
                        <a href=""<img src="../images/back.png"> Kho hàng</a> /
                        <a href="kiem-ke-hang-hoa.html">Kiểm kê hàng hóa</a> /
                        <a href="">Chi tiết phiếu kiểm kê</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body position_r">

                    <div>
                        <div class="create-bill">
                            <div class="header-create-bill d_flex space_b">
                                <div>
                                    Chi tiết phiếu kiểm kê
                                </div>
                            </div>
                            <div class="form_create_bill">
                                <form method="" action="">
                                    <div class="d_flex form_lohang flex_md_wrap align_c">
                                        <div>
                                            <div class="lable"><lable>Mã phiếu trả hàng</lable></div>
                                            <input type="text" class="bg_eee w-100" disabled name="" placeholder="Hệ thống tạo tự động">
                                        </div>
                                        <div class="mr_md_0">
                                            <div class="lable"><lable>Ngày tạo phiếu</lable></div>
                                            <input type="date" class="bg_eee w-100" disabled name="">
                                        </div>
                                        <div class="mb_md_0">
                                            <div class="lable"><lable>Người tạo</lable></div>
                                            <input type="text" class="bg_eee w-100" disabled name="" placeholder="Nguyễn Trần Trung Quân">
                                        </div>
                                    </div>

                                    <div class="detail_hd align_c d_flex space_b mt_20 mb_20">
                                        <h4>
                                            Hàng hóa
                                        </h4>

                                    </div>

                                    <div class="select_bill_back mb_20">
                                        <Div class="overflow-768">
                                            <table class="table_768">
                                                <thead>
                                                    <tr>
                                                        <td class="p-5">
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
                                                            Giá nhập
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Đơn vị
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Tồn kho
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Thực tế
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Chênh lệch
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
                                                    <tr >
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td>
                                                            HH0000078
                                                        </td>
                                                        <td>
                                                            Lốp Bridgestone
                                                        </td>
                                                        <td class="text_a_r">
                                                            2.500.000 VNĐ
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td>
                                                            12
                                                        </td>
                                                        <td class="d_flex flex_center align_c">
                                                            <input type="number" disabled class="input_sl bg_eee" name="" value="2">
                                                        </td>
                                                        <td>
                                                            12
                                                        </td>
                                                        <td class="text_a_r">
                                                            -4.800.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c">
                                                            <a class="delete_tr">
                                                                <img src="../images/icon-delete.png">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr >
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td>
                                                            HH0000078
                                                        </td>
                                                        <td>
                                                            Lốp Bridgestone
                                                        </td>
                                                        <td class="text_a_r">
                                                            2.500.000 VNĐ
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td>
                                                            12
                                                        </td>
                                                        <td class="d_flex flex_center align_c">
                                                            <input type="number" disabled class="input_sl bg_eee" name="" value="2">
                                                        </td>
                                                        <td>
                                                            12
                                                        </td>
                                                        <td class="text_a_r">
                                                            -4.800.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c">
                                                            <a class="delete_tr">
                                                                <img src="../images/icon-delete.png">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr >
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td>
                                                            HH0000078
                                                        </td>
                                                        <td>
                                                            Lốp Bridgestone
                                                        </td>
                                                        <td class="text_a_r">
                                                            2.500.000 VNĐ
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td>
                                                            12
                                                        </td>
                                                        <td class="d_flex flex_center align_c">
                                                            <input type="number" disabled class="input_sl bg_eee" name="" value="2">
                                                        </td>
                                                        <td>
                                                            12
                                                        </td>
                                                        <td class="text_a_r">
                                                            -4.800.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c">
                                                            <a class="delete_tr">
                                                                <img src="../images/icon-delete.png">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr >
                                                        <td class="text_a_c">
                                                            1
                                                        </td>
                                                        <td>
                                                            HH0000078
                                                        </td>
                                                        <td>
                                                            Lốp Bridgestone
                                                        </td>
                                                        <td class="text_a_r">
                                                            2.500.000 VNĐ
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td>
                                                            12
                                                        </td>
                                                        <td class="d_flex flex_center align_c">
                                                            <input type="number" disabled class="input_sl bg_eee" name="" value="2">
                                                        </td>
                                                        <td>
                                                            12
                                                        </td>
                                                        <td class="text_a_r">
                                                            -4.800.000 VNĐ
                                                        </td>
                                                        <td class="text_a_c">
                                                            <a class="delete_tr">
                                                                <img src="../images/icon-delete.png">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="total-xuatkho mt_20 d_flex space_b align_c">
                                            <div>
                                                Chênh lệch cuối
                                            </div>
                                            <div>
                                                0 VNĐ
                                            </div>
                                    </div>

                                    <div class="note-description mt_20">
                                        <div class="lable">
                                            <lable>Mô tả</lable>
                                        </div>
                                        <textarea placeholder="Mô tả" disabled class="bg_eee"></textarea>
                                    </div>
                                    
                                    <div class="d_flex flex_end submit_form mt_20">
                                        <button type="button" onclick="location.href='kiem-ke-hang-hoa.html'" class="btn1">Đồng ý</button>
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
<script type="text/javascript" src="../js/js_c.js"></script>
<script>
    $('.active13').addClass('active');
    $('.active13').each(function() {
        if ($(this).hasClass('active13')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
</script>
</html>