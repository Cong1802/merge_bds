<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Chi tiết phiếu tiếp nhận</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?= $ver ?>">
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
                        <a href="tiep-nhan-xe.html"><img src="../images/back_btn.png" alt="">&nbsp;&nbsp;</a>
                        <p>Sửa chữa xe<span>&nbsp;/&nbsp;</span><a href="/tiep-nhan-xe.html">Tiếp nhận xe</a><span>&nbsp;/&nbsp;</span><a href="chi-tiet-phieu-tiep-nhan.html">Chi tiết phiếu tiếp nhận</a> </p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="main_tao_phieu_nhan_xe">
                        <div class="main_create_all">
                            <div class="head_title_main_cre">Chi tiết phiếu tiếp nhận</div>
                            <div class="body_main_cre details_main_body">
                                <div class="box_create_model_l1 d_flex space_b">
                                    <div class="box_input_infor box_input_infor_l3">
                                        <p>Mã phiếu tiếp nhận</p>
                                        <input type="text" class="input_infor_tag readonly" name="" disabled>
                                    </div>
                                    <div class="box_input_infor box_input_infor_l3">
                                        <p>Ngày tiếp nhận</p>
                                        <input type="text" class="input_infor_tag readonly" name="" value="dd/mm/yyyy" disabled>
                                    </div>
                                    <div class="box_input_infor box_input_infor_l3">
                                        <p>Người tạo</p>
                                        <input type="text" class="input_infor_tag readonly" name="" value=" Gara Vip Hà Thành" disabled>
                                    </div>
                                </div>

                                <div class="box_create_model_l2">
                                    <p class="title_box_create_model">Thông tin khách hàng</p>
                                    <div class="d_flex space_b flex_w">
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Khách hàng</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Địa chỉ</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Số điện thoại</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Email</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="box_create_model_l2">
                                    <p class="title_box_create_model">Thông tin xe</p>
                                    <div class="d_flex space_b flex_w">
                                        <div class="box_input_infor box_input_infor_l3">
                                            <p>Biển số</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l3">
                                            <p>Hãng xe</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l3">
                                            <p>Mẫu xe</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l3">
                                            <p>Màu sơn</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l3">
                                            <p>Số khung</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l3">
                                            <p>Số máy</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="box_create_model_l2">
                                    <p class="title_box_create_model">Thông tin bảo hiểm</p>
                                    <div class="d_flex space_b flex_w">
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Bảo hiểm</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Địa chỉ</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Số điện thoại</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Email</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="box_create_model_l2">
                                    <p class="title_box_create_model">Thông tin tiếp nhận</p>
                                    <div class="d_flex space_b">
                                        <div class="box_input_infor mt_20 input_infor_km">
                                            <p>Số km vào</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor mt_20 input_infor_note">
                                            <p>Ghi chú</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                    </div>
                                    <p class="font_s16 font_w500 mt_20">Đánh giá tình trạng</p>
                                    <div class="d_flex space_b">
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Hạng mục</p>
                                            <input type="text" class="input_infor_tag" name="" placeholder="Thêm mới hạng mục">
                                        </div>
                                        <div class="box_input_infor box_input_infor_status">
                                            <p>Tình trạng</p>
                                            <input type="text" class="input_infor_tag" name="" placeholder="Nhập tình trạng">
                                        </div>
                                        <div class="box_input_infor box_input_infor_solution">
                                            <p>Đề xuất phương án</p>
                                            <input type="text" class="input_infor_tag" name="" value="Sửa chữa/Bảo dưỡng" placeholder="Sửa chữa/Bảo dưỡng">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="box_button_function d_flex flex_end">
                                <div class="btn_dong_y btn_blue">Đồng ý</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
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
        placeholder: 'Tên khách hàng',
    })

    $('.select2_one2').select2({
        width: '100%',
        placeholder: 'Biển số xe',
    })
</script>

</html>