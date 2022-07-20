$("#tao_moi_ptn").validate({
    errorPlacement: function (error, element) {
        error.appendTo(element.parents(".box_input_infor"));
        error.wrap("<span class='error'>");
        element.parents('.box_input_infor').addClass('validate_input');
    },
    rules: {
        sl_name_kh: "required",
        bien_so_kh: "required",
        so_km: "required",
    },
    messages: {
        sl_name_kh: "Vui lòng chọn khách hàng",
        bien_so_kh: "Vui lòng nhập biển số xe",
        so_km: "Nhập vào số km",
    },
});

$("#add_kh").validate({
    errorPlacement: function (error, element) {
        error.appendTo(element.parents(".box_input_infor"));
        error.wrap("<span class='error'>");
        element.parents('.box_input_infor').addClass('validate_input');
    },
    rules: {
        user_name: "required",
        phone_number: {
            required: true,
            minlength: 10,
            number: true
        },
    },
    messages: {
        user_name: "Vui lòng nhập tên khách hàng",
        phone_number: {
            required: "Vui lòng nhập số điện thoại",
            minlength: "Số điện thoại không đúng",
            number: "Vui lòng chỉ nhập số"
        },
    },
});

$("#add_vehicle").validate({
    errorPlacement: function (error, element) {
        error.appendTo(element.parents(".box_input_infor"));
        error.wrap("<span class='error'>");
        element.parents('.box_input_infor').addClass('validate_input');
    },
    rules: {
        bien_so: "required",
        hang_xe: "required",
        mau_xe: "required",
        name_user: "required",
    },
    messages: {
        bien_so: "Vui lòng biển số xe",
        hang_xe: "Vui lòng chọn hãng xe",
        mau_xe: "Vui lòng nhập mẫu xe",
        name_user: "Vui lòng chọn tên chủ xe / khách hàng",
    },
});

$("#add_new_bill").validate({
    errorPlacement: function (error, element) {
        error.appendTo(element.parents(".box_input_infor"));
        error.wrap("<span class='error'>");
        element.parents('.box_input_infor').addClass('validate_input');
    },
    rules: {
        name_user: "required",
    },
    messages: {
        name_user: "Vui lòng chọn khách hàng",
    },
});

$("#add_ncc").validate({
    errorPlacement: function (error, element) {
        error.appendTo(element.parents(".box_input_infor"));
        error.wrap("<span class='error'>");
        element.parents('.box_input_infor').addClass('validate_input');
    },
    rules: {
        ncc_name: "required",
        phone_number: {
            required: true,
            minlength: 10,
            digits: true
        },
    },
    messages: {
        ncc_name: "Vui lòng nhập tên nhà cung cấp",
        phone_number: {
            required: "Vui lòng nhập số điện thoại",
            minlength: "Số điện thoại không đúng",
            digits: "Vui lòng chỉ nhập số"
        },
    },
});