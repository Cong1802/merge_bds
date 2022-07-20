<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Trang tổng quan </title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/style_o.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/apexcharts.css?v=<?= $ver ?>">
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
                    <div class="head_title">Tổng quan</div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="dashboard">
                        <div class="box_header_body d_flex space_b align_c">
                            <p class="font_s20 color_grey white_s_nw">Xin chào, <span class="name_user_login font_wB">Hưng Hà Company</span></p>
                            <div class="d_flex w_100 flex_end">
                                <div id="toolbar_03" class="toolbar choose_gara_branch cursor_p position_r white_s_nw">
                                    <div class="d_flex box_select select_tt space_b align_c">
                                        <p class="p_box_option1 p_output_tt_branch color_grey" data-id="0">Toàn bộ chi nhánh</p>
                                        <img src="../images/show_infor.png" alt="">
                                    </div>
                                    <div class="show_list_popup list_popup_branch position_a" style="display: none;">
                                        <div class="box_list_popup_branch text_a_l color_grey">
                                            <p class="option_tt d_flex align_c">Toàn bộ chi nhánh</p>
                                            <p class="option_tt d_flex align_c">Chi nhánh Định Công</p>
                                            <p class="option_tt d_flex align_c">Chi nhánh Ngọc Hồi</p>
                                            <p class="option_tt d_flex align_c">Chi nhánh Phạm Ngọc Thạch</p>
                                            <p class="option_tt d_flex align_c">Chi nhánh Phạm Hùng</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box_instructs d_flex align_c">
                                    <img src="../images/instructs.png" alt="">
                                    <p class="color_blue font_w500 ml_10 font_s15 white_s_nw">Hướng dẫn</p>
                                </div>
                            </div>
                        </div>
                        <div class="box_main_body">
                            <div class="box_overview color_grey d_flex space_b">
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500">Xe trong xưởng</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">8<span class="font_s14 mt_15">xe</span> </p>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Đang sửa chữa</p>
                                        <p class="font_w500">6</p>
                                    </div>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Chờ xuất xưởng</p>
                                        <p class="font_w500">2</p>
                                    </div>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500">Bán hàng</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">15<span class="font_s14 mt_15">sản phẩm</span> </p>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Đã bán</p>
                                        <p class="font_w500">999</p>
                                    </div>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Trả hàng</p>
                                        <p class="font_w500">0</p>
                                    </div>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500">Doanh thu ngày</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">10.000.000<span class="font_s14 mt_15">VNĐ</span> </p>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Từ dịch vụ</p>
                                        <p class="font_w500">2.000.000<span>VNĐ</span></p>
                                    </div>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Từ bán hàng</p>
                                        <p class="font_w500">8.000.000<span>VNĐ</span></p>
                                    </div>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500">Doanh thu tháng</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">99.000.000<span class="font_s14 mt_15">VNĐ</span> </p>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Từ dịch vụ</p>
                                        <p class="font_w500">9.000.000<span>VNĐ</span></p>
                                    </div>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Từ bán hàng</p>
                                        <p class="font_w500">90.000.000<span>VNĐ</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="box_chart_overview d_flex space_b mt_20">
                                <div id="data_chart"></div>
                                <div class="new_activities color_grey">
                                    <p class="head_tt font_s18 font_w500">Hoạt động gần đây</p>
                                    <div class="notify_activities">
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti">
                                                    <p class="color_red font_w500">- 2.000.000<span>VNĐ</span></p>
                                                    <p class="tittle_acti font_s14">Nhập hàng từ nhà cung cấp</p>
                                                </div>
                                                <div class="time_acti font_s14">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti">
                                                    <p class="color_green font_w500">2.000.000<span>VNĐ</span></p>
                                                    <p class="tittle_acti font_s14">Bán hàng HDBL00003423</p>
                                                </div>
                                                <div class="time_acti font_s14">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti">
                                                    <p class="color_red font_w500">- 2.000.000<span>VNĐ</span></p>
                                                    <p class="tittle_acti font_s14">Nhập hàng từ nhà cung cấp</p>
                                                </div>
                                                <div class="time_acti font_s14">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti">
                                                    <p class="color_green font_w500">2.000.000<span>VNĐ</span></p>
                                                    <p class="tittle_acti font_s14">Bán hàng HDBL00003423</p>
                                                </div>
                                                <div class="time_acti font_s14">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti">
                                                    <p class="color_green font_w500">2.000.000<span>VNĐ</span></p>
                                                    <p class="tittle_acti font_s14">Bán hàng HDBL00003423</p>
                                                </div>
                                                <div class="time_acti font_s14">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti">
                                                    <p class="color_green font_w500">2.000.000<span>VNĐ</span></p>
                                                    <p class="tittle_acti font_s14">Bán hàng HDBL00003423</p>
                                                </div>
                                                <div class="time_acti font_s14">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti">
                                                    <p class="color_green font_w500">2.000.000<span>VNĐ</span></p>
                                                    <p class="tittle_acti font_s14">Bán hàng HDBL00003423</p>
                                                </div>
                                                <div class="time_acti font_s14">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/apexcharts.min.js"></script>
<script src="../js/js_o.js"></script>
<script>
    var options = {
        series: [{
            name: 'Doanh thu',
            type: 'column',
            data: [200, 505, 414, 971, 227, 413, 201]
        }, {
            name: 'Lợi nhuận',
            type: 'line',
            data: [140, 405, 314, 571, 127, 313, 101]
        }],
        colors: ['#2D99FF', '#FFE700'],
        chart: {
            height: 400,
            type: 'line',
        },
        stroke: {
            width: [0, 4],
            colors: ["#FFE700"],
            curve: 'straight',
            dashArray: [0, 12]
        },
        title: {
            text: ''
        },
        dataLabels: {
            enabled: true,
            enabledOnSeries: [1]
        },
        labels: ['01/12', '02/12', '03/12', '04/12', '05/12', '06/12', '07/12'],
        xaxis: {
            categories: ['01/12', '02/12', '03/12', '04/12', '05/12', '06/12', '07/12']
        },
        yaxis: {

        }
    };

    var chart = new ApexCharts(document.querySelector("#data_chart"), options);
    chart.render();
</script>

</html>