<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Cài đặt chung</title>
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
            <div class="main">
                <div class="header_all d_flex space_b align_c position_r">
                    <div class="head_title">
                        <a href=""> Cài đặt</a> /
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">

                    <div class="menu-setting">
                        <ul>
                            <li class="tabars"><a href="#tabs1">Cài đặt chung</a></li>
                            <li class="tabars"><a href="#tabs2">Phân quyền</a></li>
                            <li class="tabars"><a href="#tabs3">Chi nhánh</a></li>
                            <li class="tabars"><a href="#tabs4">Thông tin thanh toán</a></li>
                        </ul>
                    </div>

                    <!--setting-all-->
                    <div class="tabs-setting" id="tabs1">
                        <div class="option-setting d_flex">
                            <div class="language">
                                <ul>
                                    <li class="title">Ngôn ngữ</li>
                                    <li>
                                        <input id="nn1" type="radio">
                                        <label for="nn1" class="d_flex space_b cursor_p align_c">
                                            <img src="../images/flag_vn.png">
                                            <span>Tiếng Việt</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="nn2" type="radio">
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
                                        
                                        <input id="theme1" type="radio">
                                        <label for="theme1" class="d_flex space_b cursor_p align_c">
                                            <img src="../images/Ellipse 107.png">
                                            <span>Xanh</span>
                                        </label>
                                    </li>
                                    <li>
                                        
                                        <input id="theme2" type="radio">
                                        <label for="theme2" class="d_flex space_b cursor_p align_c">
                                            <img src="../images/Ellipse 108.png">
                                            <span>Trắng</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="checkbox-setting d_flex">
                            <div class="remind">
                                <ul>
                                    <li class="title">Nhắc nhở</li>
                                    <li> 
                                        <label for="checkbox1">
                                            <input id="checkbox1" type="checkbox">
                                            <span>Nhắc nhở tôi khi có lịch gọi chăm sóc khách hàng</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="checkbox2">
                                            <input id="checkbox2" type="checkbox">
                                            <span>Nhắc nhở tôi khi hàng hoá sắp hết</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="checkbox3">
                                            <input id="checkbox3" type="checkbox">
                                            <span>Nhắc nhở kiểm kê định kì</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="checkbox4">
                                            <input id="checkbox4" type="checkbox">
                                            <span>Nhắc nhở tôi khi có lô hàng sắp hết hạn</span>
                                        </label>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="setting-notify">
                                <ul>
                                    <li class="title">Thông báo</li>
                                    <li> 
                                        <label for="notify1">
                                            <input id="notify1" type="checkbox">
                                            <span>Nhận thông báo khi có xe vào, xuất gara</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="notify2">
                                            <input id="notify2" type="checkbox">
                                            <span>Nhận thông báo khi có tạo mới, sửa đổi phiếu</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="notify3">
                                            <input id="notify3" type="checkbox">
                                            <span>Nhận thông báo khi yêu cầu điều chuyển được duyệtduyệt</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="history-login">
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
                                <li>
                                    <div class="d_flex align_c">
                                    <span class="img">
                                        <img src="../images/smartphone.png">
                                    </span>
                                        <span>Máy tính Windows</span>
                                    </div>
                                    <div>
                                        <button type="button" class="btn-logout-equipment">Đăng xuất <img src="../images/logout2.png"></button>
                                    </div>
                                </li>
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
                                <li>
                                    <div class="d_flex align_c">
                                        <Span class="img">
                                            <img src="../images/pc.png">    
                                        </Span>
                                        <span>Máy tính Windows</span>
                                    </div>
                                    <div>
                                        <button type="button" class="btn-logout-equipment">Đăng xuất <img src="../images/logout2.png"></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="d_flex align_c">
                                        <span class="img">
                                        <img src="../images/smartphone.png">
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
                            <div class="main-decentralization d_flex align_c">
                                <div class="decentralization-left">
                                    <div class="header">Quản lý kho</div>
                                </div>
                                <div class="decentralization-right">
                                    <div class="header">Quản lý tài chính</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--phân quyền-->

                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/js_o.js"></script>
<script type="text/javascript" src="../js/js_c.js"></script>
</html>