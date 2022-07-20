$('.checked_all').click(function(){
  if($('.checked_all').is(":checked")){
    $('.input_checkbox').each(function(){
      if($('.input_checkbox').each(function(){ $('.input_checkbox').checked = false; })){
        $('.input_checkbox').prop('checked', true); 
      }
    })
    $(".option_bill").each(function(){
      $(".option_bill").remove();
    });
    $("table tbody tr:last-child").after('<tr class="option_bill "><td colspan="9" class="option_bill_td position_r"><div class="op_object"><a href="chi-tiet-hoa-don-ban-hang.html">Chi tiết</a><a href="">In</a><a href="">Xuất file</a></div></td></tr>');
    
  }
  
 else{
    $('input:checked').each(function(){
      if($('.input_checkbox').each(function(){ $('.input_checkbox').checked = true; })){
        $('.input_checkbox').prop('checked', false); 
      }
    })
    $(".option_bill").each(function(){
      $(".option_bill").remove();
    });
  }
});

$(".input_checkbox").click(function(){
  var a = $(".input_checkbox").is(":checked");
  if(a == true)
      {
        {
          $(".option_bill").each(function(){
            $(".option_bill").remove();
          })
          // $(".input_checkbox").is(":checked").each(function(){
          //   var parents = $(".input_checkbox").i.last().parents();
          //   console.log(parents);
          //   $("input_checkbox:checked").last().parents("tr").after('<tr class="option_bill "><td colspan="9" class="option_bill_td position_r"><div class="op_object"><a href="chi-tiet-hoa-don-ban-hang.html">Chi tiết</a><a href="">In</a><a href="">Xuất file</a></div></td></tr>');
          // })
          $(this).parents("tr").after('<tr class="option_bill "><td colspan="9" class="option_bill_td position_r"><div class="op_object"><a href="chi-tiet-hoa-don-ban-hang.html">Chi tiết</a><a href="">In</a><a href="">Xuất file</a></div></td></tr>');
        }
      }
  else
  {
    console.log(a);
    $(".option_bill").each(function(){
      $(".option_bill").remove();
    })
  }
 
})


function popup_block(obj1,obj2,obj3,obj4,obj5)
{
  $(obj1).addClass("block_modal");
  $(obj2).addClass("block_modal");
  $(obj3).addClass("block_modal");
  $(obj4).addClass("block_modal");
  $(obj5).addClass("block_modal");
}
function popup_none(obj1,obj2,obj3,obj4,obj5)
{
  $(obj1).removeClass("block_modal");
  $(obj2).removeClass("block_modal");
  $(obj3).removeClass("block_modal");
  $(obj4).removeClass("block_modal");
  $(obj5).removeClass("block_modal");
}




//bán hàng - tạo hóa đơn
$(".btn-create-bill").click(function(){
  popup_block(".notify",".modal_bg_fff");
  $(".content_notify").text("Tạo hóa đơn thành công")
})
$(".btn-close-notify").click(function(){
  popup_none(".notify",".modal_bg_fff");
})
$(".modal_bg_fff").click(function(){
  popup_none(".notify",".modal_bg_fff");
})
//bán hàng - tạo hóa đơn




//Trả hàng
$(".btn_create_back_hang").click(function(){
  popup_block(".trahang",".popup_tra_hang",".modal_bg_000");
})
$(".btn-close-trahang").click(function(){
  popup_none(".trahang",".popup_tra_hang",".modal_bg_000");
})
$(".btn-done").click(function(){
  popup_none(".trahang",".popup_tra_hang",".modal_bg_000");
})
$(".modal_bg_000").click(function(){
  popup_none(".trahang",".popup_tra_hang",".modal_bg_000");
})
$(".btn-save-bill").click(function(){
  popup_block(".notify",".modal_bg_fff");
  $(".content_notify").text("Lưu phiếu trả hàng thành công")
})
$(".btn-close-notify").click(function(){
  popup_none(".notify",".modal_bg_fff");
})
$(".modal_bg_fff").click(function(){
  popup_none(".notify",".modal_bg_fff");
})
//Trả hàng

function notify_popup(obj1,obj2)
{
  $(obj1).click(function(){
    $(".content_notify").text(obj2);
  })
}
//----------------notify-----------

notify_popup(".tao-phieu-xuat","Tạo phiếu xuất thành công");
notify_popup(".tao-hoa-hon-ban-hang","Tạo hóa đơn bán hàng thành công");
notify_popup(".them-hang-hoa","Thêm hàng hóa thành công");
notify_popup(".them-dich-vu","Thêm dịch vụ thành công");
notify_popup(".update-hang-hoa","Cập nhật hàng hóa thành công");
notify_popup(".update-dich-vu","Cập nhật dịch vụ thành công");
notify_popup(".update-phieu-xuat","Cập nhật phiếu xuất kho thành công");
notify_popup(".luu-phieu-tra-hang","Lưu phiếu trả hàng thành công");
notify_popup(".update-phieu-tra-hang","Cập nhật phiếu trả hàng thành công");
notify_popup(".tao-phieu-kiem-ke","Tạo phiếu kiểm kê thành công");
notify_popup(".update-phieu-kiem-ke","Cập nhật phiếu kiểm kê thành công");
notify_popup(".tao-phieu-yeu-cau","Lưu phiếu yêu cầu thành công");
notify_popup(".update-yeu-cau","Cập nhật phiếu yêu cầu thành công");
$(".them-hang-hoa").click(function(){
  $(".hanghoa ,.popup_hanghoa").removeClass("block_modal");
})
$(".them-dich-vu").click(function(){
  $(".dichvu ,.popup_hanghoa").removeClass("block_modal");
})
$(".update-hang-hoa").click(function(){
  $(".hanghoa ,.popup_hanghoa").removeClass("block_modal");
})
$(".update-dich-vu").click(function(){
  $(".dichvu ,.popup_hanghoa").removeClass("block_modal");
})




//----------------notify-----------
//Tất cả hàng hóa
$(".btn_create_hanghoa").click(function(){
  popup_block(".hanghoa",".popup_hanghoa",".modal_bg_000");
  $(".hanghoa .header span").text("Thêm mới hàng hoá/dịch vụ");
  $(".update-hang-hoa ,.update-dich-vu").hide();
  $(".them-hang-hoa,.them-dich-vu").show();
  $(".content_notify").text("Thêm hàng hóa thành công");
})
$(".btn-close-hanghoa").click(function(){
  popup_none(".hanghoa",".popup_hanghoa",".modal_bg_000",".notify",".modal_notify");
})
$(".btn-close-notify").click(function(){
  popup_none(".hanghoa",".popup_hanghoa",".modal_bg_000",".notify",".modal_notify");
})
$(".btn-unset").click(function(){
  popup_none(".hanghoa",".popup_hanghoa",".modal_bg_000",".notify",".modal_notify");
})
$(".modal_bg_000").click(function(){
  popup_none(".hanghoa",".popup_hanghoa",".modal_bg_000",".notify",".modal_notify");
})
$(".btn-create-hh").click(function(){
  popup_block(".notify",".modal_notify");
  
})

$(".edit_hh").click(function(){
  popup_block(".hanghoa",".popup_hanghoa",".modal_bg_000");
  $(".hanghoa .header span").text("Chỉnh sửa hàng hoá/dịch vụ");
  $(".them-hang-hoa ,.them-dich-vu").hide();
  $(".update-hang-hoa ,.update-dich-vu").show();
  $(".content_notify").text("Cập nhật hàng hóa thành công");
})

$(".checkbox_edit_hsd").change(function(){
  var checkbox = $(".checkbox_edit_hsd").is(":checked");
  if(checkbox == true)
  {
    console.log('davaoday')
    $(".edit_hsd input").prop("disabled",false)
    $(".edit_hsd input").removeClass("bg_eee");
  }
  else
  {
    console.log('davaoday1')
    $(".edit_hsd input").prop("disabled",true)
    $(".edit_hsd input").addClass("bg_eee");
  }
})

//Tất cả hàng hóa
$(".tinh_triet_khau").click(function(){
  $(".nhap_triet_khau").show();
})
$(".tinh_thue").click(function(){
  $(".nhap_thue").show();
})
$(".nhap_triet_khau input[type='number']").change(function(){
    var val = $(this).val();
    $(".tinh_triet_khau input[type='number']").val(val);
    $(".nhap_triet_khau").hide();
})
function select_option(input, output){
  var text  = $(input).text();
  $(output).text(text);
}
$(".select-option").click(function(){
  $(".list-option").toggle(200);
})
$(".option_tacvu").click(function(){
  select_option(this ,".p_output_tacvu")
})
$(".tabars").click(function(){
  select_option(this ,".menu-mobile-setting span")
})
$(".list-option li").click(function(){
  $(this).parent().slideToggle();
  select_option(this ,".default-option")
})
$(".select-time").click(function(){
  $(".options").slideToggle(200);
})
$(".options li").click(function(){
  select_option(this,".defaul-time");
})
$(".img_icon_noti").click(function(){
    $(".popup-notify-acount").slideToggle(10);
})
$(".btn-closes").click(function(){
  $(".popup-notify-acount").hide();
  $(".popup-remind-acount").hide();
})
$(".img-icon-remind").click(function(){
  $(".popup-remind-acount").slideToggle(10);
})

var popup_notify_acount = $(".popup-notify-acount");
var header_icon_noti = $(".img_icon_noti");
var popup_remind_acount = $(".popup-remind-acount");
var header_icon_remind = $(".img-icon-remind");
var tinh_triet_khau = $(".tinh_triet_khau");
var nhap_triet_khau = $(".nhap_triet_khau");
var tinh_thue = $(".tinh_thue");
var nhap_thue = $(".nhap_thue");
var choose_gara = $(".choose_gara");
var list_branch = $(".list_branch");
var choose_option = $(".choose_option");
var list_tacvu = $(".list_tacvu");
var menu_mobile_setting = $(".menu-mobile-setting");
var menu_mobile_setting_ul= $(".menu-setting ul");
// var select_option = $(".select-option");
var list_option = $(".list-option");
if (window.screen.width <= 500) 
{
  $(window).click(function(e){
    if (!menu_mobile_setting.is(e.target) && menu_mobile_setting.has(e.target).length == 0 && !menu_mobile_setting_ul.is(e.target) && menu_mobile_setting_ul.has(e.target).length == 0) 
    {
      menu_mobile_setting_ul.hide();
    }
  })
};
$(window).click(function(e){
  if (!header_icon_remind.is(e.target) && header_icon_remind.has(e.target).length == 0 && !popup_remind_acount.is(e.target) && popup_remind_acount.has(e.target).length == 0) {
    popup_remind_acount.hide();
  }
  if (!header_icon_noti.is(e.target) && header_icon_noti.has(e.target).length == 0 && !popup_notify_acount.is(e.target) && popup_notify_acount.has(e.target).length == 0) {
    popup_notify_acount.hide();
  }
  if (!choose_gara.is(e.target) && choose_gara.has(e.target).length == 0 && !list_branch.is(e.target) && list_branch.has(e.target).length == 0) {
    list_branch.hide();
  }

  
  if (!choose_option.is(e.target) && choose_option.has(e.target).length == 0 && !list_tacvu.is(e.target) && list_tacvu.has(e.target).length == 0) {
    list_tacvu.hide();
  }
  if (!tinh_triet_khau.is(e.target) && tinh_triet_khau.has(e.target).length == 0 && !nhap_triet_khau.is(e.target) && nhap_triet_khau.has(e.target).length == 0) {
    nhap_triet_khau.hide();
  }
  if (!tinh_thue.is(e.target) && tinh_thue.has(e.target).length == 0 && !nhap_thue.is(e.target) && nhap_thue.has(e.target).length == 0) {
    nhap_thue.hide();
  }
})
if (window.screen.width <= 500) {
  $(".tabars").click(function(e){
    $('.menu-setting ul').slideToggle(200);
  })
};
$(".select_hanghoa").click(function(){
    $(".form-hanghoa").removeClass("active-popup");
    $(".hanghoa").addClass("active-popup");
    $(".list-option").hide();
})
$(".select_dichvu").click(function(){
  $(".form-hanghoa").removeClass("active-popup");
  $(".dichvu").addClass("active-popup");
  $(".list-option").hide();
})
$('.menu-mobile-setting').click(function(){
  $('.menu-setting ul').slideToggle(200);
})
$('.choose_gara').click(function(){
  $('.list_branch').slideToggle(200);
})
$(".choose_option").click(function(){
  $(".list_tacvu").slideToggle(200);
})
$(".option_brand").click(function(){
  select_option(this,".p_output_brand");
})

//phieu thu
$(".btn_phieuthu").click(function(){
  popup_block(".popup_create_phieu_thu",".main_phieuthu",".modal_bg_000");
  $(".box_btn").removeClass("d-none");
  $(".box_btn1").addClass("d-none");
  $(".popup_create_phieu_thu .header span").text("Tạo phiếu thu");
  $(".popup_create_phieu_thu input[type='text']").removeClass("bg_eee");
  $(".popup_create_phieu_thu select").removeClass("bg_eee");
  $(".popup_create_phieu_thu input[type='text']").prop("disabled", false);
  $(".popup_create_phieu_thu select").prop("disabled", false);
})
$(".btn-close-phieuthu").click(function(){
  popup_none(".popup_create_phieu_thu",".main_phieuthu",".modal_bg_000");
})
$(".modal_bg_000").click(function(){
  popup_none(".popup_create_phieu_thu",".main_phieuthu",".modal_bg_000");
})
/////////
$(".btn-detail-phieu").click(function(){
  popup_block(".popup_create_phieu_thu",".main_phieuthu",".modal_bg_000");
  $(".box_btn").addClass("d-none");
  $(".box_btn1").removeClass("d-none");
  $(".popup_create_phieu_thu .header span").text("Chi tiết phiếu thu");
  $(".popup_create_phieu_thu input").addClass("bg_eee");
  $(".popup_create_phieu_thu select").addClass("bg_eee");
  $(".popup_create_phieu_thu input").prop("disabled", true);
  $(".popup_create_phieu_thu select").prop("disabled", true);
})
$(".btn-close-phieuthu").click(function(){
  popup_none(".popup_create_phieu_thu",".main_phieuthu",".modal_bg_000");
})
$(".modal_bg_000").click(function(){
  popup_none(".popup_create_phieu_thu",".main_phieuthu",".modal_bg_000");
})
//phiếu thu


//phieu chi
$(".btn_phieuchi").click(function(){
  popup_block(".popup_create_phieu_chi",".main_phieuchi",".modal_bg_000");
  $(".box_btn").removeClass("d-none");
  $(".box_btn1").addClass("d-none");
  $(".popup_create_phieu_chi .header span").text("Tạo phiếu chi");
  $(".popup_create_phieu_chi input[type='text']").removeClass("bg_eee");
  $(".popup_create_phieu_chi select").removeClass("bg_eee");
  $(".popup_create_phieu_chi input[type='text']").prop("disabled", false);
  $(".popup_create_phieu_chi select").prop("disabled", false);
})
$(".btn-close-phieuchi").click(function(){
  popup_none(".popup_create_phieu_chi",".main_phieuchi",".modal_bg_000");
})
$(".modal_bg_000").click(function(){
  popup_none(".popup_create_phieu_chi",".main_phieuchi",".modal_bg_000");
})
/////////
$(".btn-detail-phieu-chi").click(function(){
  popup_block(".popup_create_phieu_chi",".main_phieuchi",".modal_bg_000");
  $(".box_btn").addClass("d-none");
  $(".box_btn1").removeClass("d-none");
  $(".popup_create_phieu_chi .header span").text("Chi tiết phiếu chi");
  $(".popup_create_phieu_chi input").addClass("bg_eee");
  $(".popup_create_phieu_chi select").addClass("bg_eee");
  $(".popup_create_phieu_chi input").prop("disabled", true);
  $(".popup_create_phieu_chi select").prop("disabled", true);
})
$(".btn-close-phieuchi").click(function(){
  popup_none(".popup_create_phieu_chi",".main_phieuchi",".modal_bg_000");
})
$(".modal_bg_000").click(function(){
  popup_none(".popup_create_phieu_chi",".main_phieuchi",".modal_bg_000");
})
//phiếu chi



//thông tin thanh toán
$(".create_detail_pay").click(function(){
  popup_block(".detail-pay",".popup-detail-pay",".modal_bg_000");
})
$(".btn-close").click(function(){
  popup_none(".detail-pay",".popup-detail-pay",".modal_bg_000");
})
$(".btn-huy").click(function(){
  popup_none(".detail-pay",".popup-detail-pay",".modal_bg_000");
})
$(".modal_bg_000").click(function(){
  popup_none(".detail-pay",".popup-detail-pay",".modal_bg_000");
})
//thông tin thanh toán

$(".btn_remove").click(function(){
  $(this).parent(".nv_select").hide();
})



$(".delete_tr").click(function(){
  $(this).parents("tr").css("display","none");
})
function activeTab(obj)
{
    $('.tabs').removeClass('active');
    $(obj).addClass('active');
    var id = $(obj).find('a').attr('href');
    $('.table_cong_no').hide();
    $(id) .show();
}
$('.tabs').click(function(){
  activeTab(this);
  return false;
});

function tabs(obj)
{
  $(".tabars").removeClass("active");
  $(obj).addClass("active");
  var id = $(obj).children("a").attr('href');
  $(".tabs-setting").hide();
  $(id).show();
}
$('.tabars').click(function(){
  tabs(this);
  return false;
});
tabs($('.menu-setting ul li:first-child'));

//date

$('input[name="dates"]').daterangepicker({
    "locale": {
        "format": "DD/MM/YYYY"
    }
});




