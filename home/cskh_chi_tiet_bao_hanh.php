<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Chi tiết bảo hành</title>
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
                        <a href=""><img src="../images/back.png"> Chăm sóc khách hàng</a> /
                        <a href="bao-hanh.html">Bảo hành</a> /
                        <a href="">Chi tiết bảo hành</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body position_r">

                    <div>
                        <div class="create-bill">
                            <div class="header-create-bill d_flex        ">
                                <div>
                                    Chi tiết bảo hành
                                </div>
                            </div>
                            <div class="form_create_bill">
                                <form method="" action="">
                                    <div class="d_flex input_form_trahang align_c">
                                        <div>
                                            <div class="lable"><lable>Mã phiếu tiếp nhận</lable></div>
                                            <input type="text" disabled class="bg_eee  mah" name="" value="PTN0000078">
                                        </div>
                                        <div>
                                            <div class="lable"><lable>Mã hóa đơn</lable></div>
                                            <input type="text" class="bg_eee mah" disabled  name="" value="HDBH0000078">
                                        </div>
                                        <div>
                                            <div class="lable"><lable>Mã khách hàng</lable></div>
                                            <input type="text" class="bg_eee mah" value="KH0000078" disabled name="">
                                        </div>
                                    </div>

                                    <div class="detail_customer align_c flex_md_wrap d_flex mt_20 mb_20">
                                        <div>
                                            <div class="lable"><lable>Tên khách hàng</lable></div>
                                            <div>
                                                <input type="text" class="bg_eee" disabled value="Nguyễn Trần Trung Quân">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="lable"><lable>Số điện thoại</lable></div>
                                            <div>
                                                <input type="text" class="bg_eee" disabled value="01357924680">
                                            </div>
                                        </div>
                                        <div class="mr_md_0">
                                            <div class="lable"><lable>Ngày xuất gara</lable></div>
                                            <div>
                                                <input type="text" class="bg_eee" disabled value="14:27 03/06/2021">
                                            </div>
                                        </div>
                                        <div class="mt_md_20">
                                            <div class="lable"><lable>Số km tiếp nhận bảo hành</lable></div>
                                            <div>
                                                <input type="text"  placeholder="Số km tiếp nhận bảo hành">
                                            </div>
                                        </div>

                                        
                                    </div>

                                    <div class="title-bh-cskh">
                                        Thông tin bảo hành phụ tùng
                                    </div>

                                    <div class="select_bill_back mb_20">
                                        <Div class="overflow-768">
                                        <table class="table_baohanh table_768">
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
                                                    <td class="w_25">
                                                        Tên hàng hóa
                                                        <span class="span_thead"></span>
                                                    </td>
                                                    <td>
                                                        Đơn vị
                                                        <span class="span_thead"></span>
                                                    </td>
                                                    <td>
                                                        Số lượng
                                                        <span class="span_thead"></span>
                                                    </td>
                                                    <td>
                                                        Bảo hành
                                                        <span class="span_thead"></span>
                                                    </td>
                                                    <td>
                                                        Bảo hành theo km
                                                        <span class="span_thead"></span>
                                                    </td>
                                                    <td>
                                                        Còn lại
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="tr">
                                                    
                                                    <td class="text_a_c">
                                                        1
                                                    </td>
                                                    <td>
                                                        HH0000078
                                                    </td>
                                                    <td>
                                                        Lốp Bridgestone
                                                    </td>
                                                    <td>
                                                        Chiếc
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        14:27 03/06/2022
                                                    </td>
                                                    <td class="d_flex space_b align_c ">
                                                        10000 km
                                                    </td>
                                                    <td>
                                                        365 ngày / 333km
                                                    </td>
                                                </tr>
                                                <tr class="tr">
                                                    
                                                    <td class="text_a_c">
                                                        1
                                                    </td>
                                                    <td>
                                                        HH0000078
                                                    </td>
                                                    <td>
                                                        Lốp Bridgestone
                                                    </td>
                                                    <td>
                                                        Chiếc
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        14:27 03/06/2022
                                                    </td>
                                                    <td class="d_flex space_b align_c ">
                                                        10000 km
                                                    </td>
                                                    <td>
                                                        365 ngày / 333km
                                                    </td>
                                                </tr>
                                                <tr class="tr">
                                                    
                                                    <td class="text_a_c">
                                                        1
                                                    </td>
                                                    <td>
                                                        HH0000078
                                                    </td>
                                                    <td>
                                                        Lốp Bridgestone
                                                    </td>
                                                    <td>
                                                        Chiếc
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        14:27 03/06/2022
                                                    </td>
                                                    <td class="d_flex space_b align_c ">
                                                        10000 km
                                                    </td>
                                                    <td>
                                                        365 ngày / 333km
                                                    </td>
                                                </tr>

                                                <tr class="tr">
                                                    
                                                    <td class="text_a_c">
                                                        1
                                                    </td>
                                                    <td>
                                                        HH0000078
                                                    </td>
                                                    <td>
                                                        Lốp Bridgestone
                                                    </td>
                                                    <td>
                                                        Chiếc
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        14:27 03/06/2022
                                                    </td>
                                                    <td class="d_flex space_b align_c ">
                                                        10000 km
                                                    </td>
                                                    <td>
                                                        365 ngày / 333km
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        </Div>
                                    </div>
                                    <div class="d_flex flex_end submit_form mt_20">
                                        <button type="button" onclick="location.href='bao-hanh.html'" class="btn-done">Đồng ý</button>
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
    $('.active20').addClass('active');
    $('.active20').each(function() {
        if ($(this).hasClass('active20')) {
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