<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Cài đặt chung</title>
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
                        <a href=""> Cài đặt</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">

                    <div class="menu-setting ">
                        <div class="menu-mobile-setting d-none">
                            <Span>Cài đặt chung</Span>
                            <Div>
                                <img src="../images/show_white.png">
                            </Div>
                        </div>
                        <ul>
                            <li class="tabars"><a href="#tabs1">Cài đặt chung</a></li>
                            <li class="tabars"><a href="#tabs2">Phân quyền</a></li>
                            <li class="tabars"><a href="#tabs3">Chi nhánh</a></li>
                            <li class="tabars"><a href="#tabs4">Thông tin thanh toán</a></li>
                        </ul>
                    </div>

                    <!--setting-all-->
                    <div class="tabs-setting" id="tabs1">
                        <div class="option-setting d_flex flex_md_wrap">
                            <div class="language">
                                <ul>
                                    <li class="title">Ngôn ngữ</li>
                                    <li>
                                        <input id="nn1" type="radio" name="lenguage">
                                        <label for="nn1" class="d_flex space_b cursor_p align_c">
                                            <img src="../images/flag_vn.png">
                                            <span>Tiếng Việt</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="nn2" type="radio" name="lenguage">
                                        <label for="nn2" class="d_flex space_b cursor_p align_c">
                                            <img src="../images/flag_usa.png">
                                            <span>English</span>
                                        </label>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="theme">
                                <ul>
                                    <li class="title">Chủ đề</li>
                                    <li>
                                        
                                        <input id="theme1" type="radio" name="theme">
                                        <label for="theme1" class="d_flex space_b cursor_p align_c">
                                            <img src="../images/Ellipse 107.png">
                                            <span>Xanh</span>
                                        </label>
                                    </li>
                                    <li>
                                        
                                        <input id="theme2" type="radio" name="theme"    >
                                        <label for="theme2" class="d_flex space_b cursor_p align_c">
                                            <img src="../images/Ellipse 108.png">
                                            <span>Trắng</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="checkbox-setting d_flex flex_lg_wrap">
                            <div class="remind">
                                <ul>
                                    <li class="title">Nhắc nhở</li>
                                    <li> 
                                        <label for="checkbox1" class="d_flex align_t">
                                            <Div><input id="checkbox1" type="checkbox"></Div>
                                            <span>Nhắc nhở tôi khi có lịch gọi chăm sóc khách hàng</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="checkbox2" class="d_flex align_t">
                                            <Div><input id="checkbox2" type="checkbox"></Div>
                                            <span>Nhắc nhở tôi khi hàng hoá sắp hết</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="checkbox3" class="d_flex align_t">
                                            <Div><input id="checkbox3" type="checkbox"></Div>
                                            <span>Nhắc nhở kiểm kê định kì</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="checkbox4" class="d_flex align_t">
                                            <Div><input id="checkbox4" type="checkbox"></Div>
                                            <span>Nhắc nhở tôi khi có lô hàng sắp hết hạn</span>
                                        </label>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="setting-notify">
                                <ul>
                                    <li class="title">Thông báo</li>
                                    <li> 
                                        <label for="notify1" class="d_flex align_t">
                                            <Div><input id="notify1" type="checkbox"></Div>
                                            <span>Nhận thông báo khi có xe vào, xuất gara</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="notify2" class="d_flex align_t">
                                            <Div><input id="notify2" type="checkbox"></Div>
                                            <span>Nhận thông báo khi có tạo mới, sửa đổi phiếu</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="notify3" class="d_flex align_t">
                                            <Div><input id="notify3" type="checkbox"></Div>
                                            <span>Nhận thông báo khi yêu cầu điều chuyển được duyệtduyệt</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="history-login display_none">
                            <div class="d_flex align_c space_b header w-100 mb_10">
                                <span class="title">Lịch sử đăng nhập</span>
                                <button type="button" class="logout-all">Đăng xuất tất cả <img src="../images/logout.png"></button>
                            </div>
                            <ul>
                                <li>
                                    <div class="d_flex align_c">
                                        <span class="img">
                                            <img src="../images/pc.png">
                                        </span>
                                        <span>Máy tính Windows</span>
                                    </div>
                                    <div>
                                        <button type="button" class="btn-logout-equipment">Đăng xuất <img src="../images/logout2.png"></button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--setting-all-->

                    <!--phân quyền-->
                    <div class="tabs-setting" id="tabs2">
                        <div class="decentralization">
                            <div class="title mb_30">
                                Phân quyền nhân viên
                            </div>
                            <div class="main-decentralization d_flex d_sm_block">
                                <div class="decentralization-left">
                                    <div class="header">Quản lý kho</div>
                                    <div class="mt_10 d_flex nv_select align_c">
                                        <div  class="w_100">
                                            <input type="text" class="" name="" value="Bùi Quốc Tuấn">
                                        </div>
                                        <button type="button" class="btn_remove">
                                            <img src="../images/icon-delete.png">
                                        </button>
                                    </div>
                                    <div class="mt_10 d_flex nv_select align_c">
                                        <div class="w_100">
                                            <input type="text" class="" name="" value="Phùng Quang Anh">
                                        </div>
                                        <button type="button" class="btn_remove">
                                            <img src="../images/icon-delete.png">
                                        </button>
                                    </div>
                                    <div class="mt_10">
                                        <select class="option_nv js-states form-control">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="decentralization-right">
                                    <div class="header">Quản lý tài chính</div>
                                    <div class="mt_10 d_flex nv_select align_c">
                                        <div class="w_100">
                                            <input type="text" class="" name="" value="Phùng Quang Anh">
                                        </div>
                                        <button type="button" class="btn_remove">
                                            <img src="../images/icon-delete.png">
                                        </button>
                                    </div>
                                    <div class="mt_10 d_flex nv_select align_c">
                                        <div class="w_100">
                                            <input type="text" class="" name="" value="Bùi Quốc Tuấn">
                                        </div>
                                        <button type="button" class="btn_remove">
                                            <img src="../images/icon-delete.png">
                                        </button>
                                    </div>
                                    <div class="mt_10">
                                        <select class="option_nv js-states form-control">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--phân quyền-->

                    <!--chi nhánh-->
                    <div class="tabs-setting" id="tabs3">
                        <div class="brand">
                            <div class="header d_flex d_sm_block space_b align_c">
                                <div class="title">
                                    Chi nhánh
                                </div>
                                <div class="btn-create m-0 w_sm_100 mt_sm_10">
                                    <a href="tao-moi-chi-nhanh.html"><span>+</span> Tạo chi nhánh</a>
                                </div>
                            </div>
                            <div class="table p-0 overflow-768">
                                <table class="table_brand">
                                    <thead>
                                        <tr>
                                            <td>
                                                ID
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                Logo
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                Tên gara
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                Số điện thoại
                                                <span class="span_thead"></span>
                                            </td>
                                            <td class="w_25">
                                                Địa chỉ
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td>
                                                123456
                                            </td>
                                            <td>
                                                <img src="../images/logo_brand.png">
                                            </td>
                                            <td>
                                                Gara timviec365 Định Công
                                            </td>
                                            <td>
                                                0123456789
                                            </td>
                                            <td>
                                                Số 1 Trần Nguyên Đán, Hoàng Mai, Hà Nội
                                            </td>
                                            <td class="mah">
                                                <a href="chinh-sua-chi-nhanh.html">Sửa</a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>
                                                123456
                                            </td>
                                            <td>
                                                <img src="../images/logo_brand.png">
                                            </td>
                                            <td>
                                                Gara timviec365 Định Công
                                            </td>
                                            <td>
                                                0123456789
                                            </td>
                                            <td>
                                                Số 1 Trần Nguyên Đán, Hoàng Mai, Hà Nội
                                            </td>
                                            <td class="mah">
                                                <a href="chinh-sua-chi-nhanh.html">Sửa</a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>
                                                123456
                                            </td>
                                            <td>
                                                <img src="../images/logo_brand.png">
                                            </td>
                                            <td>
                                                Gara timviec365 Định Công
                                            </td>
                                            <td>
                                                0123456789
                                            </td>
                                            <td>
                                                Số 1 Trần Nguyên Đán, Hoàng Mai, Hà Nội
                                            </td>
                                            <td class="mah">
                                                <a href="chinh-sua-chi-nhanh.html">Sửa</a>
                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--chi nhánh-->

                    <!--chi nhánh-->
                    <div class="tabs-setting" id="tabs4">
                        <div class="pay ">
                            <div class="d_flex space_b  d_sm_block align_c">
                                <div class="title">
                                    Thông tin thanh toán
                                </div>
                                <div class="btn-create mt_sm_10 create_detail_pay w_sm_100 m-0">
                                    <span>+</span> Thêm thông tin thanh toán
                                </div>
                            </div>

                            <div class="table p-0 mt_sm_10 overflow-768">
                                <table class="table_brand">
                                    <thead>
                                        <tr>
                                            <td class="stt_brand">
                                                STT
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                Số tài khoản
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                Chủ tài khoản
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                Tên ngân hàng
                                                <span class="span_thead"></span>
                                            </td>
                                            <td>
                                                Chi nhánh
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text_a_c">
                                                1
                                            </td>
                                            <td>
                                                524445725344
                                            </td>
                                            <td>
                                                Nguyễn Khắc Trung
                                            </td>
                                            <td>
                                                Ngân hàng thương mại cổ phần Ngoại thương Việt Nam (Vietcombank)
                                            </td>
                                            <td>
                                                Hoàn Kiếm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_a_c">
                                                1
                                            </td>
                                            <td>
                                                524445725344
                                            </td>
                                            <td>
                                                Nguyễn Khắc Trung
                                            </td>
                                            <td>
                                                Ngân hàng thương mại cổ phần Ngoại thương Việt Nam (Vietcombank)
                                            </td>
                                            <td>
                                                Hoàn Kiếm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_a_c">
                                                1
                                            </td>
                                            <td>
                                                524445725344
                                            </td>
                                            <td>
                                                Nguyễn Khắc Trung
                                            </td>
                                            <td>
                                                Ngân hàng thương mại cổ phần Ngoại thương Việt Nam (Vietcombank)
                                            </td>
                                            <td>
                                                Hoàn Kiếm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_a_c">
                                                1
                                            </td>
                                            <td>
                                                524445725344
                                            </td>
                                            <td>
                                                Nguyễn Khắc Trung
                                            </td>
                                            <td>
                                                Ngân hàng thương mại cổ phần Ngoại thương Việt Nam (Vietcombank)
                                            </td>
                                            <td>
                                                Hoàn Kiếm
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--chi nhánh-->
                    <?php include("../includes/inc_popup_c.php") ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script type="text/javascript" src="../js/js_c.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script>
    $('.active').addClass('active');
    $('.active').each(function() {
        if ($(this).hasClass('active')) {
            $(this).parent().addClass('da_show');
        }
    });
    $(".option_nv").select2({
    placeholder: "Chọn nhân viên",
    allowClear: true
});
$(".select-brand-bank").select2({
    placeholder: "Chọn chi nhánh ngân hàng",
    allowClear: true
});
$(".select-name-bank").select2({
    placeholder: "Chọn tên ngân hàng",
    allowClear: true
});

</script>
</html>