var popup_xoa_phieu = $('.popup_xoa_phieu');
var popup_sua_trang_thai = $('.popup_sua_trang_thai');
var popup_add_success = $('.popup_add_success');
var popup_add_vehicle = $('.popup_add_vehicle');
var popup_add_type_vehicle = $('.popup_add_type_vehicle');
var in_chiet_khau = $('.in_chiet_khau');
var chiet_khau = $('#chiet_khau');
var tinh_chiet_khau = $('.tinh_chiet_khau');
var in_tax = $('.in_tax');
var in_taxx = $('#in_tax');
var tinh_thue = $('.tinh_thue');
var popup_add_baogia_success = $('.popup_add_baogia_success');
var popup_edit_baogia_success = $('.popup_edit_baogia_success');
var popup_repair_history = $('.popup_repair_history');
var box_repair = $('.box_repair');
var box_sell = $('.box_sell');
var popup_bill_tt = $('.popup_bill_tt');
var popup_add_gr_ncc = $('.popup_add_gr_ncc');
var popup_add_error = $('.popup_add_error');
var choose_func_480 = $('.choose_func_480');
var list_popup_func_480 = $('.list_popup_func_480');

// ----------------------------------------------------------
var currentLocation = window.location.pathname;
var li_sidebar = $('.li_sidebar');
var li_sidebar_con = $('.li_sidebar_con');
var ul_sidebar_con = $('.ul_sidebar_con');
li_sidebar.each(function () {
    var href = $(this).attr('href');
    if (href == currentLocation) {
        $(this).addClass('active');
    }
})

li_sidebar_con.each(function () {
    var href = $(this).attr('href');
    if (href == currentLocation) {
        $(this).addClass('active');
        $(this).parent().addClass('show');
    }
    if ($(this).hasClass('active')) {
        $(this).parent().addClass('show');
    }
})

var item_sidebar_cha = $('.item_sidebar_cha');
item_sidebar_cha.click(function () {
    $('.ul_sidebar_con').each(function () {
        if ($(this).hasClass('da_show')) {
            $(this).hide();
            $(this).removeClass("da_show");
        }
        if ($(this).hasClass('show')) {
            $(this).hide();
            $(this).removeClass("show");
        }
    })
    $(this).parents('.li_sidebar').find('.ul_sidebar_con').show();
    $(this).parents('.li_sidebar').find('.ul_sidebar_con').addClass("da_show");
})


$('.li_sidebar').click(function(){
    $('.active_all').removeClass('active_all');
    $(this).addClass('active_all');

})
// $('.item_sidebar').click(function(){
//     $('.active_all').removeClass('active_all');
//     // $(this).addClass('active_all');
//     $(this).parents('.li_sidebar').addClass("active_all");
// })

// -------------------------------
// --- Click Function -----
$('.btn_close').click(function () {
    popup_xoa_phieu.hide();
    popup_sua_trang_thai.hide();
    popup_add_vehicle.hide();
    popup_add_type_vehicle.hide();
    popup_repair_history.hide();
    popup_bill_tt.hide();
    popup_add_gr_ncc.hide();
})
$('.btn_huy').click(function () {
    popup_xoa_phieu.hide();
    popup_sua_trang_thai.hide();
    popup_add_vehicle.hide();
    popup_add_type_vehicle.hide();
    popup_repair_history.hide();
    popup_bill_tt.hide();
    popup_add_gr_ncc.hide();

})

$('.btn_dong_y').click(function () {
    popup_xoa_phieu.hide();
    popup_sua_trang_thai.hide();
    popup_add_vehicle.hide();
    popup_add_type_vehicle.hide();
    popup_add_baogia_success.fadeIn(200);
    popup_bill_tt.fadeOut(300);
})

$('.btn_dong').click(function () {
    popup_add_success.hide();
    popup_add_baogia_success.hide();
    popup_edit_baogia_success.hide();
    popup_add_error.hide();
})
$('.btn_update').click(function () {
    popup_edit_baogia_success.fadeIn(200);

});

// ----- Window click function ---------
$(window).click(function (e) {
    if (!choose_status_traf.is(e.target) && choose_status_traf.has(e.target).length == 0 && !list_popup_stt.is(e.target) && list_popup_stt.has(e.target).length == 0) {
        list_popup_stt.hide();
    }
    if ($(e.target).is('.popup_join_conf')) {
        popup_join_conf.hide();
    }
    if ($(e.target).is('.popup_xoa_phieu')) {
        popup_xoa_phieu.hide();
    }
    if ($(e.target).is('.popup_sua_trang_thai')) {
        popup_sua_trang_thai.hide();
    }
    if ($(e.target).is('.popup_add_success')) {
        popup_add_success.hide();
    }
    if ($(e.target).is('.popup_add_vehicle')) {
        popup_add_vehicle.hide();
    }
    if ($(e.target).is('.popup_add_type_vehicle')) {
        popup_add_type_vehicle.hide();
    }
    if (!tinh_chiet_khau.is(e.target) && tinh_chiet_khau.has(e.target).length == 0 && !in_chiet_khau.is(e.target) && in_chiet_khau.has(e.target).length == 0) {
        in_chiet_khau.hide();
    }
    if (!tinh_thue.is(e.target) && tinh_thue.has(e.target).length == 0 && !in_tax.is(e.target) && in_tax.has(e.target).length == 0) {
        in_tax.hide();
    }
    if ($(e.target).is('.popup_add_baogia_success')) {
        popup_add_baogia_success.hide();
        popup_bill_tt.hide();
    }
    if ($(e.target).is('.popup_edit_baogia_success')) {
        popup_edit_baogia_success.hide();
    }
    if ($(e.target).is('.popup_repair_history')) {
        popup_repair_history.hide();
    }
    if ($(e.target).is('.popup_bill_tt')) {
        popup_bill_tt.hide();
    }
    if ($(e.target).is('.popup_add_gr_ncc')) {
        popup_add_gr_ncc.hide();
    }
    if ($(e.target).is('.popup_add_error')) {
        popup_add_error.hide();
    }
    if (!header_icon_menu.is(e.target) && header_icon_menu.has(e.target).length == 0 && !list_menu_profile.is(e.target) && list_menu_profile.has(e.target).length == 0) {
        list_menu_profile.hide();
    }
    if (!choose_gara_branch.is(e.target) && choose_gara_branch.has(e.target).length == 0 && !list_popup_branch.is(e.target) && list_popup_branch.has(e.target).length == 0) {
        list_popup_branch.hide();
    }
    if (!choose_func_480.is(e.target) && choose_func_480.has(e.target).length == 0 && !list_popup_func_480.is(e.target) && list_popup_func_480.has(e.target).length == 0) {
        list_popup_func_480.hide();
    }
});

// ------------------------------------ Click function ---------------
$('.add_infor_ncc').click(function(){
    popup_add_gr_ncc.show();
})

$('.btn_luu_tt').click(function(){
    popup_bill_tt.show();
})
$('.option_repair').click(function(){
    box_repair.show();
    box_sell.hide();
})
$('.option_sell').click(function(){
    box_repair.hide();
    box_sell.show();
})

var show_type_service = $('.show_type_service');
$('.select_type_service').click(function(){
    show_type_service.slideToggle(200);
})
function repairHistory(){
    popup_repair_history.show();
}
$('.tinh_thue').click(function(){
    in_tax.show();
    in_taxx.focus();
})

$('.tinh_chiet_khau').click(function(){
    in_chiet_khau.show();
    chiet_khau.focus();
})

$('.add_type_vehicle').click(function () {
    popup_add_type_vehicle.fadeIn(200);
})

$('.add_infor_vehicle').click(function () {
    popup_add_vehicle.fadeIn(200);
})

var list_popup_stt = $('.list_popup_stt');
var choose_status_traf = $('.choose_status_traf');
$('.choose_status_traf').click(function () {
    $('.list_popup_stt').slideToggle(200);
});

$('.choose_func_480').click(function(){
    $('.list_popup_func_480').slideToggle(200);
});

function li_option(input, output) {
    var text = $(input).text();
    $(output).text(text);
}
$('.list_popup_stt .option_tt, .show_type_service .option_tt').click(function () {
    li_option(this, '.p_output_tt');
    show_type_service.hide();
})
$('.list_popup_branch .option_tt').click(function () {
    li_option(this, '.p_output_tt_branch');
})
$('.choose_func_480 .option_tt').click(function () {
    li_option(this, '.p_output_tt_func_480');
})

var popup_show_scx = $('.popup_show_scx');
var popup_show_scx = $('.popup_show_scx');
var box_model_count = $('.box_model_count');
$('.box_model_count').click(function () {
    $(this).parents('.box_model_count_parents').css("z-index", "4");
    $('.popup_show_scx').css("z-index", "2");
    $('.popup_show_scx').show();
})

$('.popup_show_scx').click(function () {
    $(this).hide();
    $('.box_model_count_parents').css("z-index", "1");
})

$('.del_phieu').click(function () {
    popup_xoa_phieu.fadeIn(200);
    list_popup_menu_infor_car.hide();
})

$('.trang_thai_sua').click(function () {
    popup_sua_trang_thai.fadeIn(200);
    list_popup_menu_infor_car.hide();
})

$('.btn_them_moi').click(function () {
    popup_add_success.show();
    popup_add_gr_ncc.fadeOut(300);
})

var choose_gara_branch = $('.choose_gara_branch');
var list_popup_branch = $('.list_popup_branch');
$('.choose_gara_branch').click(function(){
    list_popup_branch.slideToggle(200);
})
// -------------------------------------------

var sidebar = $('.sidebar');
$('.box_header_tab_menu').click(function(){
    sidebar.slideToggle(200);
})

var list_menu_profile = $('.list_menu_profile');
var header_icon_menu = $('.header_icon_menu');
$('.header_icon_menu').click(function(){
    list_menu_profile.slideToggle(200);
})

var menu_header_tab = $('.menu_header_tab');
if (window.screen.width <= 1024) {
    $(window).click(function (e) {
        if (!menu_header_tab.is(e.target) && menu_header_tab.has(e.target).length == 0 && !sidebar.is(e.target) && sidebar.has(e.target).length == 0) {
            sidebar.fadeOut(200);
        }

    });

};
// -----------------------------------------
$('.box_input_infor input, .box_input_infor select').keyup(function(e) {
        if( $(this).parents('.body_main_cre').find('.box_input_infor').hasClass('validate_input')){
            if ($(this).parents('.box_input_infor').find('input, select').val().length == ""){
                $(this).parents('.box_input_infor').addClass("validate_input");
            }
        }
        if ($(this).parents('.box_input_infor').find('input, select').val().length != ""){
            $(this).parents('.box_input_infor').removeClass("validate_input");
        }
})
// -------------------- keycode 13 Enter
$('#chiet_khau').keydown(function(e) {
    if (e.which == 13 || event.keyCode == 13) {
        var value = $('#chiet_khau').val();
        $(this).parents('.list_pay').find('.count_money input').attr("value", value);
        $('.in_chiet_khau').hide();
    }
})
// ---------------------------------------------------------
var op_js_tr_box = $('.op_js_tr_box');
var pri_func = $('.pri_func');
var op_js_tr_hide = $('.op_js_tr_hide');
$("input[type=checkbox]").click(function() {
    // if (!$(this).prop("checked")) {
    //     $(".checked_all").prop("checked", false);
    // }
    var inputElems = document.getElementsByTagName("input"),
    count = 0;
    
    for (var i=0; i<inputElems.length; i++) {       
        if (inputElems[i].type == "checkbox" && inputElems[i].checked == true){
            count++;
        }
    }
    if (count >= 2) {
        // alert(count);
        $('.pri_func').css('display', 'none');
        $('.op_js_tr_hide').hide();
        $('.op_js_tr_hide').last().show();
    }
    if (count == 1) {
        
        // op_js_tr_hide.show();
        $('.pri_func').css('display', 'block');
    }
    if (count == 0) {
        $('.pri_func').css('display', 'none');
        op_js_tr_hide.hide();
    }
    var lastItem = inputElems.length - 2;
    // alert(count);
    // if (count == lastItem) {
    //     $('.op_js_tr_hide').hide();
    //     $('.op_js_tr_hide').last().show();
    // }
    if (count === 1){
        if ($('input[type=checkbox]:checked')){
            $(this).parents().find('tr:eq()').show();
            // $("#mytable tr:eq(1) td").css("color", "blue");
            // $(this).
            // op_js_tr_hide.show();
        }
    }
   
});

var check_box_one = $('.check_box_one');
$('.check_box_one').each(function() {
    if ($(this).is(":checked")) {
        $(this).parents().find('.op_js_tr_hide').addClass('active_tr');
    }
});

$('.checked_all').click(function(){
    if($('.checked_all').is(":checked")){
      $('.check_box_one').each(function(){
        if($('.check_box_one').each(function(){ $('.check_box_one').checked = false; })){
          $(".check_box_one").prop('checked', true); 
        }
      })
      $('.pri_func').css('display', 'none');
      $('.op_js_tr_hide').hide();
    $('.op_js_tr_hide').last().show();
    }
    
   else{
      $('input:checked').each(function(){
        if($('.check_box_one').each(function(){ $('.check_box_one').checked = true; })){
          $(".check_box_one").prop('checked', false); 
        }
      })
      $('.op_js_tr_hide').hide();
    }
  });


// $('.box_main_table_list input[type=checkbox]').change(function(){
//     // $('.box_main_table_list input[type=checkbox]').each(function(){
//         var rows = $('.box_main_table_list').find('tr')
//         for (var x=0; x<rows.length; x++){
//             if($('.box_main_table_list').find('input[type=checkbox]:checked')){
//                 var y = x+1
//                 console.log('davaoday', y)
//                 $(this).parents().find('tr:eq(`y`)').show();
//                 return
//             }              
//         }
        
//     // })
// })


// -------------------------
function click_mouseRight(popupID, event) {
    var heightWin = $(window).height();
    var widthWin = $(window).width();
    var heightY = document.getElementById(popupID).style.top = mouseY(event);
    var widthtY = document.getElementById(popupID).style.left = mouseX(event);
    var heightPopup = $('#' + popupID).height();
    var widthPopup = $('#' + popupID).width();
    event.preventDefault();
    $('#' + popupID).show();

    if (heightWin - heightY < heightPopup && widthWin - widthtY < widthPopup) {
        document.getElementById(popupID).style.left = mouseX(event) - widthPopup + 'px';
        document.getElementById(popupID).style.top = mouseY(event) - heightPopup + 'px';
    } else {
        if (heightWin - heightY > heightPopup && widthWin - widthtY < widthPopup) {
            document.getElementById(popupID).style.top = mouseY(event) + 'px';
            document.getElementById(popupID).style.left = mouseX(event) - widthPopup + 'px';
        } else {
            if (heightWin - heightY < heightPopup && widthWin - widthtY > widthPopup) {
                document.getElementById(popupID).style.top = mouseY(event) - heightPopup + 'px';
                document.getElementById(popupID).style.left = mouseX(event) + 'px';
            } else {
                document.getElementById(popupID).style.top = mouseY(event) + 'px';
                document.getElementById(popupID).style.left = mouseX(event) + 'px';
            }
        }
    }
}

// tọa độ X
function mouseX(evt) {
    if (evt.pageX) {
        return evt.pageX;
    } else if (evt.clientX) {
        return evt.clientX + (document.documentElement.scrollLeft ?
            document.documentElement.scrollLeft :
            document.body.scrollLeft);
    } else {
        return null;
    }
}
// tọa độ Y
function mouseY(evt) {
    if (evt.pageY) {
        return evt.pageY;
    } else if (evt.clientY) {
        return evt.clientY + (document.documentElement.scrollTop ?
            document.documentElement.scrollTop :
            document.body.scrollTop);
    } else {
        return null;
    }
}

var list_popup_menu_infor_car = $('.list_popup_menu_infor_car');
$(window).mouseup(function (e) {
    var container1 = list_popup_menu_infor_car;
    if (!container1.is(e.target) && container1.has(e.target).length === 0) {
        container1.hide();
    }
});
// ---
// scroll -> hide popup
//    $('.list_mess_ct')[0].addEventListener("scroll", function () {
//     popup_show_tiny_chat.hide();
//   });
// window scroll -> hide popup
//   window.addEventListener("scroll", function () {
//     popup_show_tiny_chat.hide();
//   });
// ----
var list_popup_menu_infor_car = $('#list_popup_menu_infor_car');
var box_model_count_parents = $('.box_model_count_parents');
$('.box_model_count').on('click', function (event) {
    click_mouseRight('list_popup_menu_infor_car', event);
});
// --------------------------------------------------

//   -------Get current date
// $(document).ready(function() {
//     var today = new Date();
//     var date = today.getDate() + '/' + (today.getMonth() + 1) + '/' + today.getFullYear();
//     var dateTime = date;
//     document.getElementById("get_current_date").innerHTML = dateTime;
// });

// upload file logo
var forward_style_img = $('.forward_style_img');
var upload_logo_vehicle = $('.upload_logo_vehicle');
var upload_logo_vehicle_done = $('.upload_logo_vehicle_done');

window.addEventListener('load', function () {
    document.querySelector('input[type="file"]').addEventListener('change', function () {
        if (this.files && this.files[0]) {
            var img = document.querySelector('img.ready_upload_logo');
            img.onload = () => {
                URL.revokeObjectURL(img.src);  // no longer needed, free memory
            }

            img.src = URL.createObjectURL(this.files[0]); // set src to blob url
        }
        $('.upload_logo_vehicle').hide();
        $('.upload_logo_vehicle_done').show();
        // reloadImg();
    });
});

$('.del_logo').click(function () {
    $('.ready_upload_logo').attr('src', '');
    $('.upload_logo_vehicle_done').hide();
    $('.upload_logo_vehicle').show();
    // reloadImg();
})




// --------------------------- Date picker --------------------
$('input[name="dates"]').daterangepicker({
    "locale": {
        "format": "DD/MM/YYYY"
    }
});

$('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
});
//---------------js header-----
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
// var select_option = $(".select-option");
var list_option = $(".list-option");
$(window).click(function(e){
  if (!header_icon_remind.is(e.target) && header_icon_remind.has(e.target).length == 0 && !popup_remind_acount.is(e.target) && popup_remind_acount.has(e.target).length == 0) {
    popup_remind_acount.hide();
  }
  if (!header_icon_noti.is(e.target) && header_icon_noti.has(e.target).length == 0 && !popup_notify_acount.is(e.target) && popup_notify_acount.has(e.target).length == 0) {
    popup_notify_acount.hide();
  }
})
