<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Tạo phiếu xuất kho</title>
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
                        <a href="ban-hang.html"><img src="../images/back.png"> Kho hàng</a> /
                        <a href="phieu-xuat-kho.html">Phiếu xuất kho</a> /
                        <a href="">Tạo phiếu xuất kho</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body position_r">

                    <div>
                        <div class="create-bill">
                            <div class="header-create-bill d_flex space_b">
                                <div>
                                    Tạo phiếu mới xuất kho
                                </div>
                            </div>
                            <div class="form_create_bill">
                                <form method="" action="">
                                    <div class="d_flex align_c flex_md_wrap customer_create">
                                        <div>
                                            <div class="lable"><lable>Mã phiếu xuất kho</lable></div>
                                            <input type="text" class="bg_eee w-100" disabled name="" placeholder="Hệ thống tạo tự động">
                                        </div>
                                        <div class="mr_md_0">
                                            <div class="lable"><lable>Ngày tạo phiếu</lable></div>
                                            <input type="date" class="bg_eee w-100" disabled name="">
                                        </div>
                                        <div class="mb_md_0 mr-0">
                                            <div class="lable"><lable>Người tạo</lable></div>
                                            <input type="text" class="bg_eee w-100" disabled name="" placeholder="Nguyễn Trần Trung Quân">
                                        </div>
                                        <div class="maphieu mb_md_0 ml_20 ml_sm_0 mt_sm_20 d-none d-md-block">
                                            <div class="lable"><lable>Mã hóa đơn</lable></div>
                                            <input type="text" name="" class="w-100" placeholder="Chọn mã hóa đơn">
                                        </div>
                                    </div>
                                    <div class="d_flex align_c  mt_20">
                                        <div class="maphieu d-md-none">
                                            <div class="lable"><lable>Mã hóa đơn</lable></div>
                                            <input type="text" name="" class="w-100" placeholder="Chọn mã hóa đơn">
                                        </div>
                                        <div class="note-xk">
                                            <div class="lable"><lable>Ghi chú</lable></div>
                                            <input type="text" class="w-100"  name="" placeholder="Ghi chú">
                                        </div>
                                    </div>

                                    <div class="detail_hd align_c d_flex d_sm_block space_b mt_20 mb_20">
                                        <h4>
                                            Chọn hàng hóa xuất kho
                                        </h4>

                                        <div class="form_search_hd position_r">
                                            <input type="text" placeholder="Tìm mã hàng hóa, tên hàng hóa ...">
                                            <button type="button" class="btn_search_hd"><img src="../images/btn_search.png"></button>
                                            <a class="href btn_create_hanghoa"><img src="../images/add_infor.png"></a>
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
                                                            Mã hàng hóa
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
                                                            Đơn vị
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Số lượng cần
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Số lượng xuất
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Tồn kho
                                                            <span class="span_thead"></span>
                                                        </td>
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
                                                            HDBH0000078
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
                                                        2
                                                        </td>
                                                        <td class="d_flex flex_center align_c">
                                                            <input type="number" class="input_sl" name="" value="2">
                                                        </td>
                                                        <td>
                                                        21
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
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
                                                            HDBH0000078
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
                                                            
                                                            2
                                                        </td>
                                                        <td class="d_flex flex_center align_c">
                                                            <input type="number" class="input_sl" name="" value="2">
                                                        </td>
                                                        <td>
                                                            21
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
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
                                                            HDBH0000078
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
                                                        2
                                                        </td>
                                                        <td class="d_flex flex_center align_c">
                                                            <input type="number" class="input_sl" name="" value="2">
                                                        </td>
                                                        <td>
                                                            21
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
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
                                                            HDBH0000078
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
                                                            2
                                                        </td>
                                                        <td class="d_flex flex_center align_c">
                                                            <input type="number" class="input_sl" name="" value="2">
                                                        </td>
                                                        <td>
                                                            21
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
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
                                        <div class="total-xuatkho mt_20 d_flex space_b align_c">
                                            <div>
                                                Tổng thanh toán
                                            </div>
                                            <div>
                                                0 VNĐ
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d_flex flex_end submit_form mt_20">
                                        <button type="button" onclick="location.href='phieu-xuat-kho.html'" class="btn-huy">Hủy</button>
                                        <button type="button" class="btn-save-bill-xk btn-save-bill tao-phieu-xuat">Lưu phiếu</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                
                    

                </div>
            </div>
        </div>
    </div>
    <?php include('../includes/inc_popup_c.php') ?>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script type="text/javascript" src="../js/js_c.js"></script>
<script>
    $('.active10').addClass('active');
    $('.active10').each(function() {
        if ($(this).hasClass('active10')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
</script>
</html>