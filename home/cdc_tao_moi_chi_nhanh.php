<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Tạo mới chi nhánh</title>
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
                        <a href="cai-dat-chung.html"> Cài đặt</a> /
                        <a href="cai-dat-chung.html"> Chi nhánh</a> /
                        <a href=""> Tạo mới chi nhánh</a>
                    </div>
                    <?php include('../includes/menu_header.php');  ?>
                </div>
                <div class="main_body">

                    <div class="thead">Tạo mới chi nhánh</div>
                    <div class="main_create_brand ">
                        <div class="d_flex align_c box_upload_img">
                        <label for="upload_branch" class="upload_branch">
                            <div class="upload_branch_img position_r">
                                <img class="" src="../images/Ellipse.png" alt="">
                                <input type="file" id="upload_branch" class=" display_none" accept=".png, .jpg, .jpeg">
                            </div>
                        </label>
                        <div class="upload_branch_img_done position_r display_none">
                            <img class="ready_upload_branch" src="../images/Ellipse.png" alt="">
                        </div>
                        <div class="form-detail">
                            <form method="" action="" class="w_100">
                                <div class="d_flex mb_20">
                                    <div class="mr_20">
                                        <div class="lable">
                                            <label>Tên chi nhánh</label>
                                        </div>
                                        <input type="text" class="" name="" placeholder="Tên chi nhánh">
                                    </div>
                                    <div>
                                        <div class="lable">
                                            <label>Email gara</label>
                                        </div>
                                        <input type="text" class="" name="" placeholder="Nhập email gara">
                                    </div>
                                </div>
                                <div class="d_flex">
                                    <div class="mr_20">
                                        <div class="lable"><label>Số điện thoại</label></div>
                                        <input type="text" class="" name="" placeholder="Nhập số điện thoại">
                                    </div>
                                    <div>
                                        <div class="lable">
                                            <label>Địa chỉ</label>
                                        </div>
                                        <input type="text" class="" name="" placeholder="Địa chỉ cụ thể">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                        <div class="d_flex flex_end buttom-form-brand">
                            <button type="button" onclick="location.href='cai-dat-chung.html'" class="btn-huy">Hủy</button>
                            <button type="submit" class="btn-create-brand">Tạo chi nhánh</button>
                        </div>
                    </div>


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
    $('.active28').addClass('active');
    $('.active28').each(function() {
        if ($(this).hasClass('active28')) {
            $(this).parent().addClass('da_show');
        }
    });
    $(".option_nv").select2({
        placeholder: "Chọn nhân viên",
        allowClear: true
    });


var upload_branch_img = $('.upload_branch_img');
var upload_branch_img_done = $('.upload_branch_img_done');
var upload_branch = $('.upload_branch');

window.addEventListener('load', function () {
    document.querySelector('input[type="file"]').addEventListener('change', function () {
        if (this.files && this.files[0]) {
            var img = document.querySelector('img.ready_upload_branch');
            img.onload = () => {
                URL.revokeObjectURL(img.src);  // no longer needed, free memory
            }

            img.src = URL.createObjectURL(this.files[0]); // set src to blob url
        }
        $('.upload_branch_img').hide();
        $('.upload_branch_img_done').css('display', 'flex');
        $('.upload_branch').hide();
        // reloadImg();
    });
});
</script>

</html>