<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Báo cáo tài chính</title>
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
                        <p>Báo cáo <span>/</span> Tài chính</p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="bc_tai_chinh">
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
                            <p class="font_s24 color_grey font_wB white_s_nw">Báo cáo tài chính</p>
                            <?php include('../includes/chi_nhanh.php'); ?>
                        </div>
                        <div class="box_main_body">
                            <div class="box_overview color_grey d_flex space_b">
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500 text_a_c">Tổng thu</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">99.000.000<span class="font_s14 mt_15">VNĐ</span> </p>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Từ sửa xe</p>
                                        <p class="font_w500">90.000.000VND</p>
                                    </div>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Từ bán hàng</p>
                                        <p class="font_w500">9.000.000VND</p>
                                    </div>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500 text_a_c">Tổng chi</p>
                                    <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">40.000.000<span class="font_s14 mt_15">VNĐ</span> </p>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Từ nhập hàng</p>
                                        <p class="font_w500">30.000.000VND</p>
                                    </div>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Từ khách trả hàng</p>
                                        <p class="font_w500">6.000.000VND</p>
                                    </div>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500 text_a_c">Công nợ </p>
                                    <!-- <p class="font_s30 color_blue mt_10 mb_10 d_flex just_c_c">26.000.000<span class="font_s14 mt_15">VNĐ</span> </p> -->
                                    <p class="font_s30 color_red mt_10 mb_10 d_flex just_c_c">-26.000.000<span class="font_s14 mt_15">VNĐ</span> </p>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Phải thu</p>
                                        <p class="font_w500">20.000.000<span>VNĐ</span></p>
                                    </div>
                                    <div class="status d_flex space_b font_s14">
                                        <p>Phải trả</p>
                                        <p class="font_w500">8.000.000<span>VNĐ</span></p>
                                    </div>
                                </div>
                                <div class="box_model_count">
                                    <p class="font_s16 font_w500 text_a_c">Lợi nhuận</p>
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
                                                    <p>Phiếu thu sửa xe</p>
                                                </div>
                                                <div class="time_acti ">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti ">
                                                    <p>Phiếu thu bán hàng</p>
                                                </div>
                                                <div class="time_acti ">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti ">
                                                    <p>Phiếu chi nhập hàng</p>
                                                </div>
                                                <div class="time_acti ">12/11/2021 14:57</div>
                                            </div>
                                        </div>
                                        <div class="noti_actis">
                                            <div class="activity d_flex space_b">
                                                <div class="infor_acti ">
                                                    <p>Phiếu chi khách trả hàng</p>
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
    $('.active27').addClass('active');
    $('.active27').each(function() {
        if ($(this).hasClass('active27')) {
            $(this).parents('.menu_sidebar_all').find('.li_sidebar').addClass("active_all");
        }
    });

    var options = {
        series: [{
                name: 'Tổng thu',
                type: 'column',
                data: [600, 1205, 514, 771, 827, 1413, 401]
            },
            {
                name: 'Tổng chi',
                type: 'column',
                data: [200, 505, 414, 971, 227, 413, 201]
            }, {
                name: 'Lợi nhuận',
                type: 'line',
                data: [140, 405, 314, 571, 127, 313, -100]
            }
        ],
        colors: ['#2D99FF', '#83CFFF', '#FFE700'],
        chart: {
            height: 400,
            type: 'line',
        },
        stroke: {
            width: [0, 0, 4],
            colors: ["#FFE700"],
            curve: 'straight',
            dashArray: [0, 0, 12]
        },
        title: {
            text: ''
        },
        dataLabels: {
            enabled: true,
            enabledOnSeries: [2]
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