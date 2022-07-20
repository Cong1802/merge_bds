<?php
include("config.php");

$select_khachhang = new db_query("SELECT * FROM khachhang WHERE true ORDER BY kh_id DESC");
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Khách hàng</title>
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
                    <div class="head_title">
                        <p>Đối tác <span>/</span> Khách hàng</p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="scx_danh_muc_xe">
                        <div class="head_main_body d_flex space_b">
                            <div id="toolbar_01" class="toolbar form_search position_r">
                                <input type="text" class="input_search" value="" placeholder="Tìm kiếm">
                                <span class="btn_search"></span>
                            </div>
                            <a href="them-moi-doi-tac-khach-hang.html">
                                <div id="toolbar_04" class="toolbar btn_blue btn_tao_phieu_bao_gia d_flex align_c">
                                    <img class="position_a" src="../images/img_add.png" alt="">
                                    <p>Thêm khách hàng</p>
                                </div>
                            </a>
                            <div id="flex_p_3" class="d_flex flex_end ml_10">
                                <div id="toolbar_05" class="toolbar btn_blue_w export_file font_w500 white_s_nw">
                                    Xuất file
                                </div>
                                <div id="" class="toolbar choose_func_480 cursor_p position_r white_s_nw">
                                    <div class="d_flex box_select select_tt space_b align_c">
                                        <p class="p_box_option1 p_output_tt_func_480" data-id="0">Thêm khách hàng</p>
                                        <img src="../images/show_infor.png" alt="">
                                    </div>
                                    <div class="show_list_popup list_popup_func_480 position_a" style="display: none">
                                        <div class="box_list_popup_stt text_a_l">
                                            <a href="them-moi-doi-tac-khach-hang.html">
                                                <p class="option_tt d_flex align_c color_grey">Thêm khách hàng</p>
                                            </a>
                                            <p class="option_tt d_flex align_c">Xuất file</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="toolbar_06" class="toolbar box_instructs d_flex align_c white_s_nw">
                                    <img src="../images/instructs.png" alt="">
                                    <p class="color_blue font_w500 ml_10 font_s15 white_s_nw">Hướng dẫn</p>
                                </div>
                            </div>
                        </div>
                        <div class="choose_branch d_flex space_b align_c mt_20">
                            <p class="font_s24 color_grey font_wB white_s_nw">Khách hàng</p>
                            <!-- <?php include('../includes/chi_nhanh.php'); ?> -->
                        </div>
                        <div class="details_main_body mt_20">
                            <div class="main_table_list">
                                <div class="main_table_list_all">
                                    <div class="box_main_table_list">
                                        <table class="table table_doi_tac_khach_hang">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" class="checked_all"><span class="span_thead"></span></th>
                                                    <th>STT<span class="span_thead"></span></th>
                                                    <th>Mã khách hàng<span class="span_thead"></span></th>
                                                    <th>Tên khách hàng<span class="span_thead"></span></th>
                                                    <th>Ngày sinh<span class="span_thead"></span></th>
                                                    <th>Giới tính<span class="span_thead"></span></th>
                                                    <th>Số điện thoại<span class="span_thead"></span></th>
                                                    <th>Email<span class="span_thead"></span></th>
                                                    <th>Địa chỉ<span class="span_thead"></span></th>
                                                    <th>Nhóm khách hàng<span class="span_thead"></span></th>
                                                    <th>Mã số thuế</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                while ($select_kh = mysql_fetch_assoc($select_khachhang->result)) : ?>
                                                    <tr class="prev_tr_hide">
                                                        <td class="checkbox_check">
                                                            <input type="checkbox" class="check_box_one">
                                                        </td>
                                                        <td><?= $i; ?></td>
                                                        <td class="color_blue cursor_p font_w500">KH<?= $select_kh['kh_id'] ?></td>
                                                        <td><?= $select_kh['kh_name'] ?></td>
                                                        <td><?= date('d/m/Y', $select_kh['kh_birthday']) ?></td>
                                                        <td>
                                                            <? if ($select_kh['kh_gender'] == 1) {
                                                                echo "Nam";
                                                            } 
                                                            if ($select_kh['kh_gender'] == 2) {
                                                                echo "Nữ";
                                                            }
                                                            if ($select_kh['kh_gender'] == 3) {
                                                                echo "Khác";
                                                            } ?>
                                                        </td>
                                                        <td><?= $select_kh['kh_phone'] ?></td>
                                                        <td><?= $select_kh['kh_email'] ?></td>
                                                        <td><?= $select_kh['kh_adr_details'] ?></td>
                                                        <td>
                                                            <? if ($select_kh['kh_type'] == 1) {
                                                                echo "Cá nhân";
                                                            } else echo "Doanh nghiệp"
                                                            ?>
                                                        </td>
                                                        <td><?= $select_kh['kh_taxcode'] ?></td>
                                                    </tr>
                                                <?php $i++;
                                                endwhile; ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination_l d_flex space_b align_c">
                            <div class="total_record color_grey">
                                Hiển thị:
                                <select>
                                    <option value="1">10</option>
                                    <option value="2">20</option>
                                    <option value="3">50</option>
                                </select>
                            </div>
                            <div class="pagi_right d_flex flex_end align_c">
                                <li><a rel="nofollow" href="" class="preview" title="Prev page">&lt;</a></li>
                                <li class="active"><a rel="nofollow">1</a></li>
                                <li><a rel="nofollow" href="" class="">2</a></li>
                                <li><a rel="nofollow" href="" class="">3</a></li>
                                <li><a rel="nofollow" href="" class="">4</a></li>
                                <li><a rel="nofollow" href="" class=" next" title="Next page">&gt;</a></li>
                                <li><a rel="nofollow" href="" class=" notUndeline">...</a></li>
                                <li><a rel="nofollow" href="" class=" " title="Last page"></a></li>
                                <p class="font_s14 color_grey">Hiển thị 1-20 trên tổng số <span>50</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../includes/inc_popup_o.php');  ?>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script>
    $('.active15').each(function() {
        if ($(this).hasClass('active15')) {
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });
</script>

</html>