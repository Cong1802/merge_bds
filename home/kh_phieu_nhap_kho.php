<?php include("config.php"); 

$select_phieunhapkho = new db_query("SELECT nxk_id, nxk_type, nxk_create_time, nxk_nguoitao, nxk_ncc_id, nxk_soluongnhap, nxk_soluongxuat, nxk_chietkhau, nxk_phuphi, nxk_thue, nxk_trukhac, nxk_khuyenmai, nxk_tongcong,
k.ncc_name
FROM khohang 
JOIN nhacungcap AS k ON k.ncc_id = khohang.nxk_ncc_id
WHERE nxk_type = 1
ORDER BY nxk_id DESC");

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Phiếu nhập kho</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/daterangepicker.css?v=<?= $ver ?>">
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
                        <a href="phieu-nhap-kho.html">Phiếu nhập kho</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">

                    <div class="option option-all-hanghoa d_flex ">

                      
                            <Div class="option_left d_flex space-xl-b d_sm_block">
                                <div class="form_search_kh">
                                    <input type="text" name="" placeholder="Tìm kiếm">
                                    <button type="submit" class="btn-search">
                                        <img src="../images/Search.png">
                                    </button>
                                </div>
                                <div class="form_date position_r mr_lg_0">
                                    <input type="text" name="dates">
                                    <img src="../images/choose_date.png">
                                </div>
                            </Div>

                            <Div class="option_right d_flex">
                                <div class="choose_option cursor_p position_r">
                                    <div class="d_flex   space_b align_c">
                                        <div class="d_flex flex_center">
                                            <p class="p_box_option1 p_output_tacvu ml_10" data-id="0">Tác vụ</p>
                                        </div>
                                        <img src="../images/show_infor.png" alt="">
                                    </div>
                                    <div class="list_tacvu item_sort position_a">
                                        <div class="box_list_popup_branch text_a_l">
                                            <p onclick="location.href='tao-phieu-nhap-kho.html'" class="option_tacvu d_flex align_c">Tạo phiếu nhập</p>
                                            <p class="option_tacvu d_flex align_c">Nhập file</p>
                                            <p class="option_tacvu d_flex align_c">Xuất file</p>
                                        </div>
                                    </div>
                                </div>
                                <Div>
                                    <div class="btn_create_bill btn-create">
                                        <a href="tao-phieu-nhap-kho.html"><span>+</span> Tạo phiếu nhập</a>
                                    </div>
                                </Div>
                                <Div class="d_flex ">
                                    <div class="export_file d-sm-none">
                                        <a href="">Nhập file</a>
                                    </div>
                                    <div class="export_file d-sm-none">
                                        <a href="">Xuất file</a>
                                    </div>
                                    <div class="intructs">
                                        <a href="">
                                            <img src="../images/instructs.png">
                                            Hướng dẫn</a>
                                    </div>
                                </Div>
                            </Div>

                    </div>

                    <Div class="d_flex space_b align_c mt_20 div_select_brand">
                        <Div>
                            <h4>Phiếu nhập kho</h4>
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
                        <div class="list_customer overflowx-1250">
                            <table class="w-100 table_1250">
                                <thead>
                                    <tr>
                                        <td class="checkbox">
                                            <input type="checkbox" class="checked_all">
                                            <span class="span_thead"></span>
                                        </td>
                                        <td class="stt">
                                            STT
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Mã phiếu nhập
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Ngày lập phiếu
                                            <span class="span_thead"></span>
                                        </td>
                                        <td class="w_25">
                                            Tên nhà cung cấp
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Tổng tiền hàng
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Cần trả nhà CC
                                            <span class="span_thead"></span>
                                        </td>
                                        <td>
                                            Đã trả nhà CC
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 1;
                                    while ($select_sp = mysql_fetch_assoc($select_sanpham->result)) : ?>
                                    <tr class="tr">
                                        <td class="text_a_c checkbox">
                                            <input class='input_checkbox' type="checkbox">
                                        </td>
                                        <td class="text_a_c">
                                            <?= $i;?>
                                        </td>
                                        <td class="mah">
                                            <a href="chi-tiet-phieu-nhap-kho.html">PNK0000078</a>
                                        </td>
                                        <td>
                                            14:27 03/06/2021
                                        </td>
                                        <td>
                                            Michelin Việt Nam
                                        </td>
                                        <td class="text_a_r">
                                            750.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <td class="text_a_r">
                                            500.000 VNĐ
                                        </td>
                                        <tr class="option_bill">
                                           <td colspan="9">
                                                <a href="chinh-sua-phieu-nhap-kho.html" class="edit_phieunhap edit">Chi tiết/Chỉnh sửa</a>
                                                <a  href="">In phiếu nhập</a>
                                                <a  href="">Xuất file</a>
                                           </td>
                                        </tr>
                                    </tr>
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
                                    <a href=""><</a>
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
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script type="text/javascript" src="../js/moment.min.js"></script>
<script type="text/javascript" src="../js/daterangepicker.min.js"></script>
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