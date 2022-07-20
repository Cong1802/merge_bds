<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Chi tiết phiếu nhập kho</title>
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
                        <a href=""><img src="../images/back.png"> Kho hàng</a> /
                        <a href="phieu-nhap-kho.html">Phiếu nhập kho</a> /
                        <a href="">Chi tiết phiếu nhập kho</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body position_r">

                    <div>
                        <div class="create-bill">
                            <div class="header-create-bill d_flex space_b">
                                <div>
                                    Chi tiết phiếu nhập kho
                                </div>
                            </div>
                            <div class="form_create_bill">
                                <form method="" action="">
                                    <div class="d_flex align_c flex_md_wrap customer_create">
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

                                    <div class="detail_hd align_c d_flex d_sm_block space_b mt_20 mb_20">
                                        <h4>
                                            Chọn hàng hóa nhập kho
                                        </h4>
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
                                                            Thuế
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
                                                            <input type="number" disabled class="input_sl bg_eee" name="" value="2">
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td class="d_flex align_c ">
                                                            <Div class="position_r input_gia">
                                                                <input type="number" disabled class="gia bg_eee" > 
                                                                <span class="dvx position_a bg_eee">VNĐ</span>
                                                            </Div>
                                                        </td>
                                                        <td>
                                                            <Div class="position_r input_gia">
                                                                <input type="number" disabled class="gia bg_eee" > 
                                                                <span class="dvx position_a bg_eee">VNĐ</span>
                                                            </Div>
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
                                                        </td>
                                                        <td  class="text_a_c">
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
                                                            <input type="number" disabled class="input_sl bg_eee" name="" value="2">
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td class="d_flex align_c ">
                                                            <Div class="position_r input_gia">
                                                                <input type="number" disabled class="gia bg_eee" > 
                                                                <span class="dvx position_a bg_eee">VNĐ</span>
                                                            </Div>
                                                        </td>
                                                        <td>
                                                            <Div class="position_r input_gia">
                                                                <input type="number" disabled class="gia bg_eee" > 
                                                                <span class="dvx position_a bg_eee">VNĐ</span>
                                                            </Div>
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
                                                        </td>
                                                        <td  class="text_a_c">
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
                                                            <input type="number" disabled class="input_sl bg_eee" name="" value="2">
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td class="d_flex align_c ">
                                                            <Div class="position_r input_gia">
                                                                <input type="number" disabled class="gia bg_eee" > 
                                                                <span class="dvx position_a bg_eee">VNĐ</span>
                                                            </Div>
                                                        </td>
                                                        <td>
                                                            <Div class="position_r input_gia">
                                                                <input type="number" disabled class="gia bg_eee" > 
                                                                <span class="dvx position_a bg_eee">VNĐ</span>
                                                            </Div>
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
                                                        </td>
                                                        <td  class="text_a_c">
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
                                                            <input type="number" disabled class="input_sl bg_eee" name="" value="2">
                                                        </td>
                                                        <td>
                                                            Chiếc
                                                        </td>
                                                        <td class="d_flex align_c ">
                                                            <Div class="position_r input_gia">
                                                                <input type="number" disabled class="gia bg_eee" > 
                                                                <span class="dvx position_a bg_eee">VNĐ</span>
                                                            </Div>
                                                        </td>
                                                        <td>
                                                            <Div class="position_r input_gia">
                                                                <input type="number" disabled class="gia bg_eee" > 
                                                                <span class="dvx position_a bg_eee">VNĐ</span>
                                                            </Div>
                                                        </td>
                                                        <td class="text_a_r">
                                                            4.800.000 VNĐ
                                                        </td>
                                                        <td  class="text_a_c">
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
                                            <Div class="total-375">
                                            <div class="d_flex space_b align_c">
                                                <div class="title">Chiết khấu</div>
                                                <div class="note_hd">
                                                    <input type="text" class="input_text w-100" placeholder="Ghi chú">
                                                </div>
                                                <div>
                                                    <input type="text" class="input_number " value="0 VNĐ">
                                                </div>
                                            </div>
                                            <div class="d_flex space_b align_c">
                                                <div class="title">Thuế</div>
                                                <div class="note_hd">
                                                    <input type="text" class="input_text w-100" placeholder="Ghi chú">
                                                </div>
                                                <div>
                                                    <input type="text" class="input_number" value="0 VNĐ">
                                                </div>
                                            </div>
                                            <div class="d_flex space_b align_c">
                                                <div class="title">Khoản trừ khác</div>
                                                <div class="note_hd">
                                                    <input type="text" class="input_text w-100" placeholder="Ghi chú">
                                                </div>
                                                <div>
                                                    <input type="text" class="input_number" value="0 VNĐ">
                                                </div>
                                            </div>
                                            <div class="d_flex space_b align_c">
                                                <div class="title">Khuyến mại</div>
                                                <div class="note_hd">
                                                    <input type="text" class="input_text w-100" placeholder="Chọn chương trình khuyến mại">
                                                </div>
                                                <div>
                                                    <input type="text" class="input_number " value="0 VNĐ">
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
                                    
                                    <div class="d_flex flex_end submit_form d_sm_block mt_20">
                                        <button type="button" onclick="location.href='phieu-nhap-kho.html'" class="btn-huy">Hủy</button>
                                        <button type="button" class="btn-save-bill">Lưu phiếu</button>
                                        <button type="submit" class="btn-create-pay btn1">Lưu và thanh toán</button>
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
    $('.active9').addClass('active');
    $('.active9').each(function() {
        if ($(this).hasClass('active9')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
</script>
</html>