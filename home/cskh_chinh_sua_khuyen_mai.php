<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Chỉnh sửa chương trình khuyến mại</title>
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
                        <a href="bao-hanh.html">Chương trình khuyến mại </a> /
                        <a href="">Chỉnh Sửa CTKM</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body position_r">

                    <div>
                        <div class="create-bill">
                            <div class="header-create-bill d_flex        ">
                                <div>
                                    Chỉnh sửa chương trình khuyễn mại
                                </div>
                            </div>
                            <div class="form_create_bill">
                                <form method="" action="">
                                    <Div class="d_flex create_ctkm d_sm_block create_km space_b">
                                            <div class=" input_form_trahang align_c">
                                                <div class="w-100 mb_20">
                                                    <div class="lable"><lable>Mã chương trình khuyễn mại</lable></div>
                                                    <input type="text" disabled class="bg_eee" value="Hệ thống tự tạo" name="">
                                                </div>
                                                <div class="w-100 mb_20">
                                                    <div class="lable"><lable>Bắt đầu</lable></div>
                                                    <input type="date" name="">
                                                </div>
                                                <div class="w-100">
                                                    <div class="lable"><lable>Giảm giá hóa đơn</lable></div>
                                                    <div class="position_r">
                                                        <input type="text" class="w-100" placeholder="Số km tiếp nhận bảo hành">
                                                        <div class="discount">
                                                            %
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <Div>
                                                <div class="w-100 mb_20">
                                                    <div class="lable"><lable>Tên chương trình khuyến mại</lable></div>
                                                    <div>
                                                        <input type="text" class="w-100" disabled value="Giảm giá chúc mừng năm mới">
                                                    </div>
                                                </div>
                                                <div class="w-100 mb_20">
                                                    <div class="lable"><lable>Ngày kết thúc</lable></div>
                                                    <div>
                                                        <input type="date" class="w-100">
                                                    </div>
                                                </div>
                                                <div class="w-100 mb_10">
                                                    <div class="lable"><lable>Chi nhánh áp dụng</lable></div>
                                                    <div>
                                                        <select class="select_branch js-states form-control">
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="w-100 d_flex">
                                                    <input type="text" class="w-100" placeholder="Nhập chi nhánh và nhấn + để thêm">
                                                    <button type="button" class="btn_add_branch"><img src="../images/plus2.png"></button>
                                                </div>
                                            </Div>
                                        <div class="note_ctkm mt_sm_20">
                                            <div class="lable"><lable>Ghi chú</lable></div>
                                            <Div>
                                                <textarea name="" class="w-100">
                                                    
                                                </textarea>
                                            </Div>
                                        </div>
                                    </Div>

                                    <div class="d_flex flex_end submit_form mt_20">
                                        <button type="button" onclick="location.href='bao-hanh.html'" class="btn2 mr_20">Hủy</button>
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
    $(".select_branch").select2({
    placeholder: "Toàn bộ chi nhánh",
    allowClear: true
});
    
</script>
</html>