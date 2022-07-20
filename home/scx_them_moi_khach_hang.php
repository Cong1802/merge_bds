<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Thêm mới khách hàng</title>
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
                        <a href="tao-phieu-tiep-nhan.html"><img src="../images/back_btn.png" alt="">&nbsp;&nbsp;</a>
                        <p>Sửa chữa xe<span>&nbsp;/&nbsp;</span><a href="tao-phieu-tiep-nhan.html">Tạo phiếu tiếp nhận</a><span>&nbsp;/&nbsp;</span><a href="them-moi-khach-hang.html">Thêm mới khách hàng</a></p>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">
                    <div class="them_moi_khach_hang">
                        <form action="" method="POST" id="add_kh">
                            <div class="main_create_all">
                                <div class="head_title_main_cre">Thêm mới khách hàng</div>
                                <div class="body_main_cre d_flex space_b">
                                    <div class="box_create_model_l1 d_flex space_b flex_w">
                                        <div class="box_input_infor box_input_infor_l1">
                                            <p>Mã khách hàng</p>
                                            <input type="text" class="input_infor_tag readonly" name="" disabled>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l1">
                                            <p>Tên khách hàng<span class="color_red">*</span></p>
                                            <input type="text" class="input_infor_tag" name="user_name" placeholder="Nhập tên khách hàng">
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Ngày sinh</p>
                                            <input type="date" class="input_infor_tag" name="" placeholder="dd/mm/yyyy">
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2 position_r">
                                            <p>Giới tính</p>
                                            <select name="" id="" class="input_infor_tag select2_one1">
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Số điện thoại<span class="color_red">*</span></p>
                                            <input type="number" class="input_infor_tag" name="phone_number" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Email</p>
                                            <input type="text" class="input_infor_tag" name="" placeholder="Nhập Email">
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Tỉnh thành</p>
                                            <select name="calc_shipping_provinces" class="input_infor_tag">
                                                <option value="">Tỉnh / Thành phố</option>
                                            </select>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Quận huyện</p>
                                            <select name="calc_shipping_district" class="input_infor_tag">
                                                <option value="">Quận / Huyện</option>
                                            </select>
                                        </div>
                                        <input class="billing_address_1" name="" type="hidden" value="">
                                        <input class="billing_address_2" name="" type="hidden" value="">
                                        <div class="box_input_infor box_input_infor_l1">
                                            <p>Địa chỉ</p>
                                            <input type="text" class="input_infor_tag" name="" placeholder="Địa chỉ cụ thể">
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Khách hàng</p>
                                            <select class="input_infor_tag select2_one2" name="" id="">
                                                <option value="1">Cá nhân</option>
                                                <option value="2">Doanh nghiệp</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                        <div class="box_input_infor box_input_infor_l2">
                                            <p>Mã số thuế</p>
                                            <input type="text" class="input_infor_tag" name="" placeholder="Nhập mã số thuế">
                                        </div>
                                    </div>
                                </div>
                                <div class="box_button_function d_flex flex_end">
                                    <button type="button" class="btn_huy btn_red_w" onclick="location.href='tao-phieu-tiep-nhan.html'">Hủy</button>
                                    <button type="submit" class="btn_them_moi btn_blue">Thêm mới</button>
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
<script type="text/javascript" src="../js/districts.min.js"></script>
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
        placeholder: 'Chọn giới tính',
    })
    $('.select2_one2').select2({
        width: '100%',
        placeholder: 'Doanh nghiệp',
    })
    $(".select2_one1, .select2_one2").select2({
        minimumResultsForSearch: Infinity
    });
    //<![CDATA[
    if (address_2 = localStorage.getItem('address_2_saved')) {
        $('select[name="calc_shipping_district"] option').each(function() {
            if ($(this).text() == address_2) {
                $(this).attr('selected', '')
            }
        })
        $('input.billing_address_2').attr('value', address_2)
    }
    if (district = localStorage.getItem('district')) {
        $('select[name="calc_shipping_district"]').html(district)
        $('select[name="calc_shipping_district"]').on('change', function() {
            var target = $(this).children('option:selected')
            target.attr('selected', '')
            $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
            address_2 = target.text()
            $('input.billing_address_2').attr('value', address_2)
            district = $('select[name="calc_shipping_district"]').html()
            localStorage.setItem('district', district)
            localStorage.setItem('address_2_saved', address_2)
        })
    }
    $('select[name="calc_shipping_provinces"]').each(function() {
        var $this = $(this),
            stc = ''
        c.forEach(function(i, e) {
            e += +1
            stc += '<option value=' + e + '>' + i + '</option>'
            $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
            if (address_1 = localStorage.getItem('address_1_saved')) {
                $('select[name="calc_shipping_provinces"] option').each(function() {
                    if ($(this).text() == address_1) {
                        $(this).attr('selected', '')
                    }
                })
                $('input.billing_address_1').attr('value', address_1)
            }
            $this.on('change', function(i) {
                i = $this.children('option:selected').index() - 1
                var str = '',
                    r = $this.val()
                if (r != '') {
                    arr[i].forEach(function(el) {
                        str += '<option value="' + el + '">' + el + '</option>'
                        $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
                    })
                    var address_1 = $this.children('option:selected').text()
                    var district = $('select[name="calc_shipping_district"]').html()
                    localStorage.setItem('address_1_saved', address_1)
                    localStorage.setItem('district', district)
                    $('select[name="calc_shipping_district"]').on('change', function() {
                        var target = $(this).children('option:selected')
                        target.attr('selected', '')
                        $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                        var address_2 = target.text()
                        $('input.billing_address_2').attr('value', address_2)
                        district = $('select[name="calc_shipping_district"]').html()
                        localStorage.setItem('district', district)
                        localStorage.setItem('address_2_saved', address_2)
                    })
                } else {
                    $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
                    district = $('select[name="calc_shipping_district"]').html()
                    localStorage.setItem('district', district)
                    localStorage.removeItem('address_1_saved', address_1)
                }
            })
        })
    })
    //]]>
</script>

</html>