<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Thêm mới xe</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_o.css?v=<?= $ver ?>">
</head>

<body>
    <div class="main_wrapper_all">
        <div class="wapper_all">
            <?php include('../includes/menu_sidebar.php'); ?>
        </div>
        <div class="box_main_all">
            <?php include('../includes/menu_header_tab.php');  ?>
            <div class="main">
                <div class="header_all d_flex space_b align_c position_r">
                    <div class="head_title d_flex align_c">
                        <a href="tao-phieu-tiep-nhan.html"><img src="../images/back_btn.png" alt="">&nbsp;&nbsp;</a>
                        <p>Sửa chữa xe<span>&nbsp;/&nbsp;</span><a href="tao-phieu-tiep-nhan.html">Tạo phiếu tiếp nhận</a><span>&nbsp;/&nbsp;</span><a href="them-moi-xe.html">Thêm mới xe</a></p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="them_moi_xe">
                        <form action="" method="POST" id="add_vehicle">
                        <div class="main_create_all">
                            <div class="head_title_main_cre">Thêm mới xe</div>
                            <div class="body_main_cre d_flex space_b">
                                <div class="box_create_model_l1 d_flex space_b flex_w">
                                    <div class="box_input_infor box_input_infor_l1">
                                        <p>Biển số <span class="color_red">*</span></p>
                                        <input type="text" class="input_infor_tag font_wB" name="bien_so" placeholder="Nhập biển số xe">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2 position_r">
                                        <p>Hãng xe<span class="color_red">*</span></p>
                                        <select name="hang_xe" id="" class="input_infor_tag select2_one1">
                                            <option value="" disabled selected>Hãng xe</option>
                                            <option value="1">Vinfast</option>
                                            <option value="2">Mercedes</option>
                                        </select>
                                        <a><img class="add_infor_user add_infor_vehicle" src="../images/add_infor.png" alt=""></a>
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2">
                                        <p>Mẫu xe<span class="color_red">*</span></p>
                                        <input type="text" class="input_infor_tag" name="mau_xe" placeholder="Mẫu xe">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2 position_r">
                                        <p>Loại xe</p>
                                        <select name="" id="" class="input_infor_tag select2_one2">
                                            <option value="" disabled selected>Loại xe</option>
                                            <option value="1">Mui trần</option>
                                        </select>
                                        <img class="add_infor_user add_type_vehicle" src="../images/add_infor.png" alt="">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2">
                                        <p>Năm sản xuất</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Năm sản xuất">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2">
                                        <p>Số khung</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Số khung">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2">
                                        <p>Số máy</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Số máy">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2">
                                        <p>Màu sơn</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Màu sơn">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2">
                                        <p>Hộp số</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Hộp số">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2">
                                        <p>Loại động cơ</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Loại động cơ">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2">
                                        <p>Dung tích xy lanh</p>
                                        <input type="text" class="input_infor_tag" name="" placeholder="Dung tích xy lanh">
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2 position_r">
                                        <p>Chủ xe<span class="color_red">*</span></p>
                                        <select name="name_user" id="" class="input_infor_tag select2_one3">
                                            <option value="" disabled selected>Chủ xe</option>
                                            <option value="1">Oai</option>
                                        </select>
                                        <a href="/them-moi-khach-hang.html"><img class="add_infor_user" src="../images/add_infor.png" alt=""></a>
                                    </div>
                                    <div class="box_input_infor box_input_infor_l2">
                                        <p>Số điện thoại</p>
                                        <input type="text" class="input_infor_tag readonly" name="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="box_button_function d_flex flex_end">
                                <button type="button" class="btn_huy btn_red_w" onclick="location.href='tao-phieu-tiep-nhan.html'">Hủy</button>
                                <button type="submit" class="btn_them_moi btn_blue">Thêm mới</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../includes/inc_popup_o.php');  ?>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/validate.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script>
    $('.active2').addClass('active');
    $('.active2').each(function() {
        if ($(this).hasClass('active2')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });

    $('.select2_one1').select2({
        width: '100%',
        placeholder: 'Hãng xe',
    })

    $('.select2_one2').select2({
        width: '100%',
        placeholder: 'Loại xe',
    })
    $('.select2_one3').select2({
        width: '100%',
        placeholder: 'Khách hàng',
    })
</script>

</html>