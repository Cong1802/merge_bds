<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Chi tiết phiếu trả hàng</title>
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
                        <a href="tat-ca-hang-hoa.html"><img src="../images/back.png"> Kho hàng</a> /
                        <a href="tra-hang-nha-cung-cap.html">Trả hàng nhà cũng cấp</a> /
                        <a href="">Chi tiết phiếu trả hàng</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body position_r">

                    <div>
                        <div class="create-bill">
                            <div class="header-create-bill d_flex space_b">
                                <div >
                                    Chi tiết phiếu trả hàng
                                </div>
                            </div>
                            <div class="form_create_bill">
                                <form method="" action="">
                                    <div class="d_flex ncc flex_md_wrap align_c">
                                        <div>
                                            <div class="lable"><lable>Mã phiếu trả hàng</lable></div>
                                            <input type="text" disabled class="bg_eee w-100" name="" placeholder="Hệ thống tạo tự động">
                                        </div>
                                        <div class="mr_md_0 mt_sm_20">
                                            <div class="lable"><lable>Ngày tạo phiếu</lable></div>
                                            <input type="date" disabled class="bg_eee w-100 " name="">
                                        </div>
                                        <div class="mt_md_20">
                                            <div class="lable"><lable>Người tạo</lable></div>
                                            <input type="text" disabled class="bg_eee w-100" name="" placeholder="Nguyễn Trần Trung Quân">
                                        </div>
                                        <div class="select-option-ncc mt_md_20 mr_md_0">
                                            <div class="lable"><lable>Chọn nhà cung cấp</lable></div>
                                            <select class="select_ncc w-100 js-states form-control" disabled>
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="detail_hd align_c d_flex space_b d_sm_block mt_20 mb_20">
                                        <h4>
                                            Chọn hàng hóa cần trả
                                        </h4>
                                    </div>

                                    <div class="select_bill_back mb_20 mb_sm_0">
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
                                                            Số lượng tồn
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        <td>
                                                            Số lượng trả
                                                            <span class="span_thead"></span>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            Thành tiền
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
                                                            <input type="number" class="input_sl bg_eee" disabled name="" value="2">
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
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
                                                            <input type="number" class="input_sl bg_eee" disabled name="" value="2">
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
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
                                                            <input type="number" class="input_sl bg_eee" disabled name="" value="2">
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
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
                                                            <input type="number" class="input_sl bg_eee" disabled name="" value="2">
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </Div>
                                        

                                        <Div class="overflow_sm">
                                            <div class="d_flex space_b align_c body_hd mt_20 total-375">
                                                <div class="title">Phụ phí</div>
                                                <div class="note_hd">
                                                    <input type="text" disabled class="input_text w-100 bg_eee" placeholder="Ghi chú">
                                                </div>
                                                <div>
                                                    <input type="text" disabled class="input_number bg_eee" placeholder="0 VNĐ">
                                                </div>
                                            </div>
                                        </Div>

                                        <div class="total-xuatkho mt_20 d_flex space_b align_c">
                                            <div>
                                                NCC cần trả
                                            </div>
                                            <div>
                                                0 VNĐ
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d_flex flex_end submit_form mt_20 mt_sm_0">
                                        <button type="button" class="btn-save-bill-ncc btn-save-bill btn1">Đồng ý</button>
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
<script type="text/javascript" src="../js/select2.min.js"></script>
<script>
    $('.active11').addClass('active');
    $('.active11').each(function() {
        if ($(this).hasClass('active11')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
    $(".select_ncc").select2({
    placeholder: "Nhà cung cấp",
    allowClear: true
    })
</script>
</html>