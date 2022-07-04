<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Tin đăng phòng đẹp</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<? echo base_url()?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url()?>assets/css/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_tan.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style.css">
</head>

<body>
    <? require_once APPPATH.'views/site/includes/da_header.php' ?>
    <div class="backgroung_chinh">
        <div class="link_trang">
            <form action="" method="" onsubmit="return false" id="postnews_room">
                <div class="bot-24">
                    <div class="body_moigioi_padding_header_tex flex mr_b24px">
                        <div class="body_moigioi_padding_header_tex_tt font_size_14">Trang chủ</div>
                        <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_right.png" class="checked" alt="">
                        <div class="body_moigioi_padding_header_tex_moigioi font_size_14">Loại đăng tin</div>
                        <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_right.png" class="checked" alt="">
                        <div class="chuxanh">Soạn tin đăng
                        </div>
                    </div>
                </div>

                <!-- khoi noi dung -->
                <h1 class="chuden">Soạn tin đăng</h1>

                <!-- tutorial -->
                <div class="tutorial top-24">
                    <div class="khoitren flex space center-height">
                        <div class="tutorial_trai flex">
                            <img src="<? echo base_url(); ?>assets/images/tutorial_icon.png" alt="" class="wh-40 right-16">
                            <div class="tutorial_tieude">
                                <div class="tieude_tren textdo font-medium">Hướng dẫn tạo bài viết Phòng đẹp</div>
                                <div class="tieude_duoi size-12">Hãy đọc kỹ trước khi đăng bài nhé!</div>
                            </div>
                        </div>
                        <div class="tutorial_phai arrow_rotate_reset wh-24 c-pointer">
                            <img src="<? echo base_url(); ?>assets/images/arrow_updown.png" alt="">
                        </div>
                    </div>
                    <div style="display: none;" class="khoiduoi khoiduoi_tutorial top-24">
                        <p class="tieude textdo"><span class="font-medium">"Nhà đẹp"</span> là nơi bạn kể câu chuyện và quá
                            trình lên ý tưởng thiết kế, thi công hoàn thiện nội thất và trang trí căn nhà của mình.</p>
                        <ul>
                            <li class="top-16">Sau đôi lời tự giới thiệu ngắn gọn, bạn hãy kể câu chuyện về bôi nhà của bạn
                                nhé!</li>
                            <li class="top-16">Để dễ dàng lan tỏa hơn, hãy thêm ít nhất 5 ảnh</li>
                            <li class="top-16">Thật tuyệt nếu bạn ghi đầy đủ thông tin các sản phẩm ở phần mô tả bên dưới
                            </li>
                            <li class="top-16">Bạn càng cập nhật nhiều tông tin, bài viết càng được hiện thị nhiều hơn trong
                                kết quả tìm kiếm và số lượt xem sẽ dễ dàng tăng lên</li>
                        </ul>
                    </div>
                </div>
                <!-- end tutorial -->

                <!-- thong tin bai dang -->
                <div class="thongtinbaidang top-24">
                    <p class="tieude chuxanh font-medium">Thông tin bài đăng</p>
                    <div class="ttbd_noidung flex space wrap top-8 center-height">
                        <div class="khoicon top-21 box_input_infor">
                            <p class="chuden font-medium height-20 size-14">Loại công trình <span class="chudo">*</span></p>
                            <div class="top-8">
                                <select name="ctrinh_type" id="" class="select_option ctrinh_type js-states form-control">
                                    <option selected disabled>Chọn loại công trình</option>
                                    <option value="1">Biệt thự</option>
                                    <option value="2">Chung cư</option>
                                </select>
                            </div>
                        </div>
                        <div class="khoicon top-21 box_input_infor">
                            <div class="flex space">
                            <div class="khoibe relative">
                                <p class="chuden font-medium height-20 size-14">Ngân sách (VNĐ) <span class="chudo">*</span></p>
                                <div class="khunginput khoi_gia_min top-8 input_infor_tag">
                                    <input type="number" name="price_min" id="pcompra" class="giamin" placeholder="Nhập giá cố định">
                                </div>
                                <p class="ngansach_gia absolute size-12">
                                    <span class="ngansach_tien">0</span> <span class="ngansach_donvi">triệu VNĐ</span>
                                    <span class="den hidden">-</span>
                                    <span class="ngansach_max hidden">0</span> <span class="dv_max hidden">triệu VNĐ</span>
                                </p>
                            </div>
                            <div class="khoibe">
                                <p class="chutrang height-20 size-14 dontlook">Don't Look</p>
                                <button type="button" class="khoanggia font-medium size-16 c-pointer top-8">Khoảng giá</button>
                                <div class="khunginput khoi_giamax top-8 input_infor_tag relative hidden">
                                    <input type="number" name="" id="pventa" class="giamax " placeholder="Giá max">
                                    <img src="<? echo base_url(); ?>assets/images/delete.png" alt="" class="del_icon absolute wh-18">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="khoicon top-21 box_input_infor">
                            <p class="chuden font-medium height-20 size-14">Phong cách <span class="chudo">*</span></p>
                            <div class="top-8">
                                <select name="styles" id="" class="select_option js-states form-control">
                                    <option selected disabled>Chọn phong cách</option>
                                    <option value="1">Đương đại</option>
                                    <option value="2">Hiện đại</option>
                                    <option value="3">Tối giản</option>
                                    <option value="4">Truyền thống</option>
                                    <option value="5">Cổ điển</option>
                                    <option value="6">Tân cổ điển</option>
                                    <option value="7">Scanvindinavian</option>
                                    <option value="8">Vintage</option>
                                    <option value="9">Retro</option>
                                    <option value="10">Bohemia</option>
                                    <option value="11">Indochine</option>
                                    <option value="12">Khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="khoicon top-21 box_input_infor">
                            <p class="chuden font-medium height-20 size-14">Diện tích <span class="chudo">*</span></p>
                            <div class="top-8">
                                <select name="area" id="" class="select_option area js-states form-control">
                                    <option disabled selected >Chọn khoảng diện tích</option>
                                    <option value="1">Dưới 50 m2</option>
                                    <option value="2">50 m2 - 100 m2</option>
                                    <option value="3">100 m2 - 150 m2</option>
                                    <option value="4">150 m2 - 300 m2</option>
                                    <option value="2">300 m2 trở lên</option>
                                </select>
                            </div>
                        </div>
                        <div class="box_input_infor khoicon">
                            <div class=" top-21  flex center-height">
                                <p class="chuden font-medium height-20 right-16 size-14">Thực hiện bởi <span class="chudo">*</span></p>
                                <div class="flex center-center th2">
                                    <input type="radio" name="Perform" class="right-8">
                                    <p class="chuden font-medium height-20 size-14">Tự làm</p>
                                </div>
                                <div class="flex center-center">
                                    <input type="radio" name="Perform" class="right-8">
                                    <p class="chuden font-medium height-20 size-14">Chuyên gia</p>
                                </div>
                            </div>
                        </div>

                        <div class="khoicon mausac top-21 box_input_infor relative">
                            <p class="chuden font-medium height-20 size-14">Màu sắc <span class="chudo">*</span></p>
                            <div class="chonmau flex space top-8">
                                <label for="den" class="cursor_p position_r btn_color">
                                    <div class="den"></div>
                                    <input type="checkbox" name="color[]" class="den" id="den">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>

                                <label for="trang" class="cursor_p position_r btn_color">
                                    <div class="trang"></div>
                                    <input type="checkbox" name="color[]" class="trang" id="trang">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>

                                <label for="do" class="cursor_p position_r btn_color ">
                                    <div class="do"></div>
                                    <input type="checkbox" name="color[]" class="do" id="do">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>

                                <label for="cam" class="cursor_p position_r btn_color">
                                    <div class="cam"></div>
                                    <input type="checkbox" name="color[]" class="cam" id="cam">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>

                                <label for="vang" class="cursor_p position_r btn_color">
                                    <div class="vang"></div>
                                    <input type="checkbox" name="color[]" class="vang" id="vang">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>

                                <label for="hong" class="cursor_p position_r btn_color">
                                    <div class="hong"></div>
                                    <input type="checkbox" name="color[]" class="hong" id="hong">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>
                                
                                <label for="xanhluc" class="cursor_p position_r btn_color">
                                    <div class="xanhluc"></div>
                                    <input type="checkbox" name="color[]" class="xanhluc" id="xanhluc">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>
                                
                                <label for="xamxanh" class="cursor_p position_r btn_color">
                                    <div class="xamxanh"></div>
                                    <input type="checkbox" name="color[]" value="xamxanh" class="xamxanh" id="xamxanh">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>

                                <label for="xanhmint" class="cursor_p position_r btn_color">
                                    <div class="xanhmint"></div> 
                                    <input type="checkbox" name="color[]" value="xanhmint" class="xanhmint" id="xanhmint">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>
                                
                                <label for="xanhduong" class="cursor_p position_r btn_color">
                                    <div class="xanhduong"></div>
                                    <input type="checkbox" name="color[]" value="xanhduong" class="xanhduong" id="xanhduong">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>
                                
                                <label for="tim" class="cursor_p position_r btn_color">
                                    <div class="tim"></div>
                                    <input type="checkbox" name="color[]" value="tim" class="tim" id="tim">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>
                                
                                <label for="xanhden" class="cursor_p position_r btn_color">
                                    <div class="xanhden"></div>
                                    <input type="checkbox" name="color[]" value="xanhden" class="xanhden" id="xanhden">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>
                                
                                <label for="xam" class="cursor_p position_r btn_color">
                                    <div class="xam"></div>
                                    <input type="checkbox" name="color[]" value="xam" class="xam" id="xam">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>
                                
                                <label for="be" class="cursor_p position_r btn_color">
                                    <div class="be"></div>
                                    <input type="checkbox" name="color[]" value="be" class="be" id="be">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>
                            
                                <label for="nau" class="cursor_p position_r btn_color">
                                    <div class="nau"></div>
                                    <input type="checkbox" name="color[]" value="nau" class="nau" id="nau">
                                    <img src="<? echo base_url(); ?>assets/images/check_sussess.png" class="img_success">
                                </label>
                                
                                <img src="<? echo base_url(); ?>assets/images/no-color.png" alt="" class="wh-20 c-pointer">
                            </div>
                            <i class="luu_y absolute">Chọn tối đa 3 màu</i>
                        </div>
                    </div>

                    <div class="ttpd_tieude  box_input_infor">
                        <div class="khunginput input_infor_tag">
                            <input type="text" name="title_news" class="" placeholder="Nhập tiêu đề bài viết *">
                        </div>
                    </div>
                </div>
                <!-- end thong tin bai dang -->

                <!-- add anh -->
                <div class="tdpd_addanh top-24">
                    <div class="tdpd_khoi_to_anh">
                        
                    </div>
                    <div class="khoi_butt_addanh relative">
                        
                        <button type="button" class="absolute butt_addanh flex center-center c-pointer">
                            <input type="file" onchange="tdpd_img(this)" id="img_upload" class=" tdqp_click_addanh">
                            <img src="<? echo base_url(); ?>assets/images/tan_camera.png" alt="" class="right-8 wh-24">
                            <p><span class="chuxanh">Thêm ảnh</span> (tối đa 10 ảnh)</p>
                        </button>
                    </div>
                </div>
                <!-- end add anh -->

                <!-- chon tac -->
                <div class="tdpd_chontag top-24">
                    <select name="" id="" class="select_option js-states form-control">
                        <option value="0">Chọn tag</option>
                    </select>
                </div>
                <!-- end chon tag -->

                <!-- butt dang tin -->
                <div class="tdnd_khoibutt">
                    <button class="tdnd_butt_dangtin size-16 font-medium">Đăng tin</button>
                </div>
                <!-- end butt dang tin -->

                <!-- doan text duoi -->
                <div class="doantext_duoi top-32">
                    <p class="size-14">Bạn đang truy cập trang đăng tin BĐS miễn phí <a href="#"
                            class="ko-gachchan chuxanh">Batdongsan3S</a>. Cùng khám phá những thông tin hữu ích dành cho môi
                        giới, hoặc người đang có nhu cầu đăng tin bán nhà đất.</p>
                    <p class="top-16 size-18 chuden font-medium">Các Loại hình bất động sản được đăng tin nhiều nhất hiện
                        nay</p>
                    <p class="top-16 size-14">Dạo quanh một vòng các web đăng tin BĐS miễn phí, có thể thấy rất nhiều mẫu
                        tin đăng thuộc các loại hình bất động sản khác nhau. Tuy nhiên, theo thống kê của Homedy, hiện nay
                        có 3 loại hình nhà đất đang được đăng tin rao nhiều nhất, bao gồm: bán nhà đất, bán căn hộ chung cư
                        và <a href="#" class="ko-gachchan chuxanh">cho thuê nhà</a>. Điều này cho thấy nguồn cung cũng như
                        nhu cầu của thị trường cho những sản phẩm bất động sản này là rất lớn.</p>
                    <p class="top-16 size-18 chuden font-medium">Đăng tin mua bán nhà đất</p>
                    <p class="top-16 size-14">Nếu bạn là một môi giới bất động sản, hãy tập trung vào loại hình tin đăng
                        này. Đây là mảng vốn dĩ luôn được quan tâm nhiều và còn nhiều tiềm năng khai thác. Sở dĩ là do nhu
                        cầu mua nhà đất tại Việt Nam luôn hiện hữu. Tâm lý chung của người Việt Nam từ xưa tới nay là luôn
                        muốn sở hữu nhà đất có giấy tờ đất đai rõ ràng.</p>
                    <div class="top-8 size-14">Đặc biệt là những khách hàng lớn tuổi hoặc những người có khả năng tài chính
                        cao, nhà đất luôn là một trong những sự chọn lựa ưu tiên nhất blah blah blah.</div>
                </div>
                <!-- end doan text duoi -->
            </form>
        </div>
    </div>

    <? require_once APPPATH.'views/site/includes/da_footer.php'?>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_tan.js"></script>
<script>
$(".select_option").select2({
    width: "100%",
});

var html_  = '<div class="khoi_add_anh flex space bot-24">'

    html_ += '<div class="tdpd_anh">'
    html_ +=    '<img  src="" alt=""  class="anh_add tdpd_img">'
    html_ += '</div>'
    html_ += '<div class="tdpd_thongtin">'
    html_ +=    '<select name="room_design" id="" class="select_option room_design">'
    html_ +=        '<option value="1">Không gian</option>'
    html_ +=        '<option value="2">Phòng khách</option>'
    html_ +=        '<option value="3">Phòng bếp</option>'
    html_ +=        '<option value="4">Phòng ăn</option>'
    html_ +=        '<option value="5">Phòng ngủ</option>'
    html_ +=        '<option value="6">Phòng tắm</option>'
    html_ +=        '<option value="7">Phòng làm việc</option>'
    html_ +=        '<option value="8">Phòng trẻ em</option>'
    html_ +=        '<option value="9">Ban công</option>'
    html_ +=        '<option value="10">Sân vườn</option>'
    html_ +=        '<option value="11">Khác</option>'
    html_ +=    '</select>'
    html_ +=    '<div class="khoi_text top-16">'
    html_ +=        '<textarea name="desc_room" id="" cols="30" rows="10" placeholder="Nhập mô tả ảnh"></textarea>'
    html_ +=    '</div>'
    html_ +='</div>'
    html_ +='</div>'
    html_ += '<div class="khoi_butt_addanh relative">'
    html_ +=     '<button type="button" class="absolute butt_addanh flex center-center c-pointer">'
    html_ +=        '<input type="file" onchange="tdpd_img(this)" id="" class=" tdqp_click_addanh">'
    html_ +=         '<img src="<? echo base_url(); ?>assets/images/tan_camera.png" alt="" class="right-8 wh-24">'
    html_ +=         '<p><span class="chuxanh">Thêm ảnh</span> (tối đa 10 ảnh)</p>'
    html_ +=     '</button>'
    html_ += '</div>'

    function tdpd_img(tdpd_img) {
        
        var img = $(tdpd_img).val();
        console.log(img);
        if (img != '') {    
            $('.tdpd_khoi_to_anh').append(html_);
            $(".select_option").select2({
                width: "100%",
            });
            var i = 1;
            $(".tdpd_img").each(function(){
                $(this).addClass("preview_img"+i);
                i++;
            })
            var numItems = $('.tdpd_img').length;

            if (tdpd_img.files && tdpd_img.files[0]) {
                var img = document.querySelector('.preview_img'+numItems);       
                console.log(img);         
                // return;
                img.onload = function (e) {
                    URL.revokeObjectURL(img.src);  // no longer needed, free memory
                }
                img.src = URL.createObjectURL(tdpd_img.files[0]); // set src to blob url
            }
            $(tdpd_img).parents('.khoi_butt_addanh').hide();
        }
        i++;
    }
    jQuery.validator.addMethod("comparison", function (value, element) {
        var pcompra = $("#pcompra").val();
        return this.optional(element) || value > pcompra;
    });
    $("#postnews_room").validate({
        errorPlacement: function (error, element) {
        error.appendTo(element.parents(".box_input_infor"));
        error.wrap("<span class='errors'>");
        element.parents('.box_input_infor').addClass('validate_input');
        },
        rules: {
            ctrinh_type:    "required",
            styles:          "required",
            area:           "required",
            Perform:        "required",
            'color[]':      {
                            required: true,
                            minlength: 1
                            },
            price_min:      "required",
            title_news:     "required",
            price_max:      {
                                required: true,
                                number: true,
                                comparison: true
                            },
        },
        messages: {
            ctrinh_type:    "Vui lòng chọn loại công trình",
            styles:          "Vui lòng chọn phong cách",
            area:           "Vui lòng chọn khoảng diện tích",
            Perform:        "Vui lòng chọn phương thức thực hiện",
            'color[]':      "Vui lòng chọn màu sắc",
            price_min:      "Vui lòng nhập giá min",
            title_news:     "Vui lòng nhập tiêu đề bài viết",
            price_max:      {
                                required: '"Vui lòng nhập giá max"',
                                comparison: 'Giá trị max phải lớn hơn giá trị min'
                            }

        },
        submitHandler: function() {
			var ctrinh_type = $(".ctrinh_type").val();
            var styles      = $(".styles").val();
            var area        = $(".area").val();
            var Perform     = $(".Perform").val();
            var list_color  = [];
            $("input[name='color[]']:checked").each(function(){
                list_color.push($(this).val());
            })
            console.log(list_color)
            var color       = $(".color").val();
            var price_min   = $(".price_min").val();
            var title_news  = $(".title_news").val();
            var price_max   = $(".price_max").val();
		}
    });

</script>

</html>