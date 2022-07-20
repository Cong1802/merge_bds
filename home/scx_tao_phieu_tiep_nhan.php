<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Tạo mới phiếu tiếp nhận</title>
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
                        <p>Sửa chữa xe<span>&nbsp;/&nbsp;</span><a href="tao-phieu-tiep-nhan.html">Tạo phiếu tiếp nhận</a> </p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="main_tao_phieu_nhan_xe">
                        <form action="" method="POST" id="tao_moi_ptn">
                            <div class="main_create_all">
                                <div class="head_title_main_cre">Tạo mới phiếu tiếp nhận</div>
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
                                            <div class="box_input_infor box_input_infor_l2 position_r">
                                                <p>Khách hàng<span class="color_red">*</span></p>
                                                <select name="sl_name_kh" id="" class="input_infor_tag select2_one1">
                                                    <option value="" disabled selected>Tên khách hàng</option>
                                                    <option value="1">Đinh Oai</option>
                                                    <option value="2">Đinh Văn Oai</option>
                                                    <option value="2">Đinh Văn Oai</option>
                                                </select>
                                                <a href="/them-moi-doi-tac-khach-hang.html"><img class="add_infor_user" src="../images/add_infor.png" alt=""></a>
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
                                            <div class="box_input_infor box_input_infor_l3 position_r">
                                                <p>Biển số<span class="color_red">*</span></p>
                                                <select name="bien_so_kh" id="" class="input_infor_tag select2_one2">
                                                    <option value="" disabled selected>Biển số xe</option>
                                                    <option value="1">26D1 - 8689</option>
                                                </select>
                                                <a href="/them-moi-xe.html"><img class="add_infor_user" src="../images/add_infor.png" alt=""></a>
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
                                                <input type="text" class="input_infor_tag" name="">
                                            </div>
                                            <div class="box_input_infor box_input_infor_l2">
                                                <p>Địa chỉ</p>
                                                <input type="text" class="input_infor_tag" name="">
                                            </div>
                                            <div class="box_input_infor box_input_infor_l2">
                                                <p>Số điện thoại</p>
                                                <input type="text" class="input_infor_tag" name="">
                                            </div>
                                            <div class="box_input_infor box_input_infor_l2">
                                                <p>Email</p>
                                                <input type="text" class="input_infor_tag" name="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_create_model_l2">
                                        <p class="title_box_create_model">Thông tin tiếp nhận</p>
                                        <div class="d_flex space_b">
                                            <div class="box_input_infor mt_20 input_infor_km">
                                                <p>Số km vào<span class="color_red">*</span></p>
                                                <input type="text" class="input_infor_tag" name="so_km">
                                            </div>
                                            <div class="box_input_infor mt_20 input_infor_note">
                                                <p>Ghi chú</p>
                                                <input type="text" class="input_infor_tag" name="" placeholder="Ghi chú">
                                            </div>
                                        </div>
                                        <p class="font_s16 font_w500 mt_20">Đánh giá tình trạng</p>
                                        <div class="check_stt_vehicle">
                                            <div class="head_tt_check_stt d_flex space_b color_grey font_w500 align_c">
                                                <p class="stt text_a_l">STT</p>
                                                <p class="hang_muc_sua_chua">Hạng mục</p>
                                                <p class="tinh_trang_xe">Tình trạng</p>
                                                <p class="de_xuat_phuong_an white_s_nw">Đề xuất phương án</p>
                                            </div>
                                            <div class="details_stt d_flex space_b align_c">
                                                <p class="stt text_a_c"></p>
                                                <input type="text" class="input_infor_tag hang_muc_sua_chua" name="" placeholder="Thêm mới hạng mục">
                                                <input type="text" class="input_infor_tag tinh_trang_xe" name="" placeholder="Nhập tình trạng">
                                                <input type="text" class="input_infor_tag de_xuat_phuong_an" name="" placeholder="Sửa chữa/Bảo dưỡng">
                                            </div>
                                            <div class="af_check_stt d_flex space_b align_c">
                                                <img class="del_row_stt" src="../images/icon-delete.png" alt="">
                                                <p class="stt text_a_l">1</p>
                                                <p class="hang_muc_sua_chua">Bugi</p>
                                                <p class="tinh_trang_xe">Hỏng</p>
                                                <p class="de_xuat_phuong_an white_s_nw">Thay mới</p>
                                            </div>
                                            <div class="af_check_stt d_flex space_b align_c">
                                                <img class="del_row_stt" src="../images/icon-delete.png" alt="">
                                                <p class="stt text_a_l">1</p>
                                                <p class="hang_muc_sua_chua">Bugi</p>
                                                <p class="tinh_trang_xe">Hỏng</p>
                                                <p class="de_xuat_phuong_an white_s_nw">Thay mới</p>
                                            </div>
                                        </div>
                                        <!-- <div class="d_flex space_b">
                                        <div class="box_input_infor box_input_infor_stt">
                                            <p>STT</p>
                                            <p>1</p>
                                        </div>
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
                                    </div> -->
                                    </div>

                                </div>
                                <div class="box_button_function d_flex flex_end">
                                    <button type="button" class="btn_huy btn_red_w" onclick="location.href='tiep-nhan-xe.html'">Hủy</button>
                                    <button type="submit" class="btn_dong_y btn_blue">Đồng ý</button>
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
        placeholder: 'Tên khách hàng',
    })

    $('.select2_one2').select2({
        width: '100%',
        placeholder: 'Biển số xe',
    })

</script>

</html>