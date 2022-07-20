<?php include("config.php");

$select_sanpham = new db_query("SELECT pr_id, pr_name, pr_ncc_id, pr_unit, pr_price_sell, pr_price_org, pr_quantily, pr_insur_time, pr_insur_km, pr_batch_num, pr_mfg_date, pr_exp_date, pr_time_create, pr_time_update,
k.ncc_name
FROM sanpham 
JOIN nhacungcap AS k ON k.ncc_id = sanpham.pr_ncc_id
WHERE true
ORDER BY pr_id DESC");



if (isset($_POST['add_sanpham'])) {
    $user_name = getValue('user_name', 'str', 'POST', '');
    $user_name = replaceMQ($user_name);

    $mean_w = getValue('mean_w', 'str', 'POST', '');
    $mean_w = replaceMQ($mean_w);

    if (empty($abb_w) || empty($mean_w)) {
        header("Location:/tu-dien.html");
    } else {
        $db_qr = new db_execute("INSERT INTO `dictionnary`(`id_user`, `abb_word`, `mean_word`, `create_time`, name_user, type_user) VALUES ( '" . $id_tts . "','" . $abb_w . "','" . $mean_w . "','" . time() . "','" . $name_tts . "','" . $type_user . "')");
        header("Location:/tu-dien.html");
    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Tất cả hàng hóa</title>
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
                        <a href="">Kho hàng</a> /
                        <a href="tat-ca-hang-hoa.html">Tất cả hàng hóa</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">

                    <div class="option option-all-hanghoa d_flex space_b">

                        <div class="d_flex option_left d_sm_block">
                            <div class="form_search_kh">
                                <input type="text" name="" placeholder="Tìm kiếm">
                                <button type="submit" class="btn-search">
                                    <img src="../images/Search.png">
                                </button>
                            </div>

                            <div class="choose_status_traf sort-hh cursor_p position_r mr_20 mr_xl_0">
                                <div class="d_flex box_select select_tt space_b align_c">
                                    <div class="d_flex flex_center">
                                        <img src="../images/icon_sort.png">
                                        <p class="p_box_option1 p_output_tt ml_10" data-id="0">Sắp xếp theo</p>
                                    </div>
                                    <img src="../images/show_infor.png" alt="">
                                </div>
                                <div class="show_list_popup show item_sort list_popup_stt position_a" style="display: none">
                                    <div class="box_list_popup_stt text_a_l">
                                        <p class="option_tt d_flex align_c">Mới nhập kho</p>
                                        <p class="option_tt d_flex align_c">Giá nhập: Thấp đến Cao</p>
                                        <p class="option_tt d_flex align_c">Giá nhập: Cao xuống Thấp</p>
                                        <p class="option_tt d_flex align_c">Giá bán: Thấp đến Cao</p>
                                        <p class="option_tt d_flex align_c">Giá bán: Cao xuống Thấp</p>
                                        <p class="option_tt d_flex align_c">Tồn kho: Ít tới Nhiều</p>
                                        <p class="option_tt d_flex align_c">Tồn kho: Nhiều tới Ít</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d_flex option_right">
                            <div class="choose_option cursor_p position_r">
                                <div class="d_flex   space_b align_c">
                                    <div class="d_flex flex_center">
                                        <p class="p_box_option1 p_output_tacvu ml_10" data-id="0">Tác vụ</p>
                                    </div>
                                    <img src="../images/show_infor.png" alt="">
                                </div>
                                <div class="list_tacvu item_sort position_a">
                                    <div class="box_list_popup_branch text_a_l">
                                        <p class="option_tacvu btn_create_hanghoa d_flex align_c">Thêm hàng hóa</p>
                                        <p class="option_tacvu d_flex align_c">Nhập file</p>
                                        <p class="option_tacvu d_flex align_c">Xuất file</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_create_hanghoa btn-create d-sm-none">
                                <span>+</span> Thêm hàng hóa
                            </div>
                            <Div class="d_flex">
                                <div class="export_file d-sm-none">
                                    <a href="">Xuất file</a>
                                </div>
                                <div class="export_file d-sm-none">
                                    <a href="">Nhập file</a>
                                </div>
                                <div class="intructs">
                                    <a href="">
                                        <img src="../images/instructs.png">
                                        Hướng dẫn</a>
                                </div>
                            </Div>
                        </div>
                    </div>

                    <Div class="d_flex space_b align_c mt_20 div_select_brand">
                        <Div>
                            <h4>Tất cả hàng hóa</h4>
                        </Div>
                        <div class="choose_gara sort-hh cursor_p position_r">
                            <div class="d_flex   space_b align_c">
                                <div class="d_flex flex_center">
                                    <p class="p_box_option1 p_output_brand ml_10" data-id="0">Toàn bộ chi nhánh</p>
                                </div>
                                <img src="../images/show_infor.png" alt="">
                            </div>
                            <div class="list_branch item_sort position_a">
                                <div class="box_list_popup_branch text_a_l">
                                    <p class="option_brand d_flex align_c">Toàn bộ chi nhánh</p>
                                    <p class="option_brand d_flex align_c">Chi nhánh 1</p>
                                    <p class="option_brand d_flex align_c">Chi nhánh 2</p>
                                    <p class="option_brand d_flex align_c">Chi nhánh 3</p>
                                </div>
                            </div>
                        </div>
                    </Div>

                    <div>
                        <div class="list_customer">
                            <table class="table_all_hh">
                                <thead>
                                            <td class="checkbox">
                                                <input type="checkbox" class="checked_all">
                                                <span class="span_thead"></span>
                                            </td>
                                            <td class="stt">
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
                                                Nhà cung cấp
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                Đơn vị
                                                <span class="span_thead"></span>
                                            </td>
                                            <td class="w-170">
                                                Giá bán
                                                <span class="span_thead"></span>
                                            </td>
                                            <td class="w-170">
                                                Giá nhập
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                Tồn kho

                                            </td>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($select_sp = mysql_fetch_assoc($select_sanpham->result)) : ?>
                                        <tr>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            <?= $i; ?>
                                        </td>
                                        <td class="mah">
                                            <a href="">HH<?= $select_sp['pr_id'] ?></a>
                                        </td>
                                        <td>
                                        <?= $select_sp['pr_name'] ?>
                                        </td>
                                        <td>
                                        <?= $select_sp['ncc_name'] ?>
                                        </td>
                                        <td>
                                        <?= $select_sp['pr_unit'] ?>
                                        </td>
                                        <td class="text_a_r">
                                            <span class="dv"><?= $select_sp['pr_price_sell'] ?>&nbsp;VNĐ</span>
                                        </td>
                                        <td class="text_a_r">
                                            <span class="dv"><?= $select_sp['pr_price_org'] ?>&nbsp;VNĐ</span>
                                        </td>
                                        <td>
                                        <?= $select_sp['pr_quantily'] ?>
                                        </td>
                                    <tr class="option_bill">
                                        <td colspan="9">
                                            <a class="edit_hh">Chi tiết/Chỉnh sửa</a>
                                            <a class="delete_hh" href="">Xoá hàng hoá</a>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr></tr>
                                    <?php $i++;
                                    endwhile; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="paginate d_flex space_b">
                            <div class="total_record">
                                Hiển thị:
                                <select>
                                    <option>20</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                            </div>
                            <div class="pagination d_flex flex_center">
                                <Div class="mb_sm_10">
                                    <a href="">
                                        << /a>
                                            <a href="" class="active">1</a>
                                            <a href="">2</a>
                                            <a href="">3</a>
                                            <a href="">4</a>
                                            <a href="">5</a>
                                            <a href="">></a>
                                </Div>
                                <span>Hiển thị 1-20 trên tổng số 50</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include("../includes/inc_popup_c.php") ?>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script type="text/javascript" src="../js/js_c.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script>
    $('.active8').addClass('active');
    $('.active8').each(function() {
        if ($(this).hasClass('active8')) {
            $(this).parent().addClass('da_show');
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });

    $("#form_all_hanghoa").validate({
        errorPlacement: function(error, element) {
            error.appendTo(element.parents(".box_input_infor"));
            error.wrap("<span class='error'>");
        },
        rules: {
            name_hanghoa: "required",
            name_ncc: "required",
            solo: "required",
            name_dv: "required",
        },
        messages: {
            name_hanghoa: "Vui lòng nhập tên hàng hóa",
            name_ncc: "Vui lòng nhập tên nhà cung cấp",
            solo: "Vui lòng nhập số lô",
            name_dv: "Vui lòng nhập tên dịch vụ",
        },
    });
    $("#form_all_dv").validate({
        errorPlacement: function(error, element) {
            error.appendTo(element.parents(".box_input_infor"));
            error.wrap("<span class='error'>");
        },
        rules: {
            name_dv: "required",
        },
        messages: {
            name_dv: "Vui lòng nhập tên dịch vụ",
        },
    });
</script>

</html>