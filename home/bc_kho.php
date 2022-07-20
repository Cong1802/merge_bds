<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Báo cáo kho</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/apexcharts.css?v=<?= $ver ?>">
    <link rel="stylesheet" type="text/css" href="../css/daterangepicker.css?v=<?= $ver ?>">
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
                        <p>Báo cáo <span>/</span> Kho</p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="bc_kho">
                        <div class="head_main_body d_flex space_b">
                            <div id="toolbar_01" class="toolbar form_search position_r">
                                <input type="text" class="input_search" value="" placeholder="Tìm kiếm">
                                <span class="btn_search"></span>
                            </div>
                            <div id="toolbar_02" class="toolbar form_date position_r cursor_p">
                                <input type="text" name="dates" id="" class="p_output_date" value="">
                                <img class="" src="../images/choose_date.png" alt="">
                            </div>
                            <div id="toolbar_06" class="toolbar box_instructs d_flex align_c white_s_nw">
                                <img src="../images/instructs.png" alt="">
                                <p class="color_blue font_w500 ml_10 font_s15 white_s_nw">Hướng dẫn</p>
                            </div>
                        </div>
                        <div class="choose_branch d_flex space_b align_c mt_20">
                            <p class="font_s24 color_grey font_wB white_s_nw">Báo cáo kho</p>
                            <?php include('../includes/chi_nhanh.php'); ?>
                        </div>
                        <div class="box_main_body">
                            <div class="box_overview color_grey d_flex space_a">
                                <div class="box_model_count tong_hang_ton_kho">
                                    <p class="font_s16 font_w500 text_a_c">Tổng hàng tồn kho</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">10.000<span class="font_s14 mt_15">sản phẩm</span> </p>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500 text_a_c">Hàng hóa đã nhập</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">500<span class="font_s14 mt_15">sản phẩm</span> </p>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500 text_a_c">Hàng hóa đã xuất</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">500<span class="font_s14 mt_15">sản phẩm</span> </p>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500 text_a_c">Giá trị hàng đã nhập</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">999.000.000<span class="font_s14 mt_15">VNĐ</span> </p>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500 text_a_c">Giá trị hàng tồn kho</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">999.000.000<span class="font_s14 mt_15">VNĐ</span> </p>
                                </div>
                            </div>
                            <div class="box_chart_overview d_flex space_b mt_20">
                                <div id="data_chart"></div>
                                <div class="new_activities color_grey">
                                    <p class="head_tt font_s18 font_w500">Hoạt động gần đây</p>
                                    <div class="notify_activities  font_s14">
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti ">
                                                    <p>Đã nhập hàng hóa</p>
                                                </div>
                                                <div class="time_acti ">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti ">
                                                    <p>Đã xuất hàng hóa</p>
                                                </div>
                                                <div class="time_acti ">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti ">
                                                    <p>Đã nhập hàng hóa</p>
                                                </div>
                                                <div class="time_acti ">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti ">
                                                    <p>Đã nhập hàng hóa</p>
                                                </div>
                                                <div class="time_acti ">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti ">
                                                    <p>Đã xuất hàng hóa</p>
                                                </div>
                                                <div class="time_acti ">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti ">
                                                    <p>Đã nhập hàng hóa</p>
                                                </div>
                                                <div class="time_acti ">12/11/2021 14:57</div>
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
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/apexcharts.min.js"></script>
<script type="text/javascript" src="../js/moment.min.js"></script>
<script type="text/javascript" src="../js/daterangepicker.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script>
    $('.active26').addClass('active');
    $('.active26').each(function() {
        if ($(this).hasClass('active26')) {
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });


    var options = {
        series: [{
            name: 'Giá trị hàng đã nhập',
            data: [44, 55, 41, 64, 22, 43, 21]
        }, {
            name: 'Giá trị hàng tồn kho',
            data: [53, 32, 33, 52, 13, 44, 32]
        }],
        chart: {
            type: 'bar',
            height: 430
        },
        plotOptions: {
            bar: {
                horizontal: false,
                dataLabels: {
                    position: 'top',
                },
            }
        },
        colors: ['#2D99FF', '#83CFFF'],
        dataLabels: {
            enabled: false,
            offsetX: -6,
            style: {
                fontSize: '12px',
                colors: ['#fff']
            }
        },
        stroke: {
            show: true,
            width: 1,
            colors: ['#fff']
        },
        tooltip: {
            shared: true,
            intersect: false
        },
        xaxis: {
            categories: ['01/12', '02/12', '03/12', '04/12', '05/12', '06/12', '07/12'],
        },
    };

    var chart = new ApexCharts(document.querySelector("#data_chart"), options);
    chart.render();
</script>

</html>