$(document).ready(function() {
    $.validator.addMethod("PHONE", function (value, element) {
        return this.optional(element) || /^0[0-9]{8,9}$/i.test(value);
    },);

    $.validator.addMethod("USERNAME", function (value, element) {
        return this.optional(element) || /^KH[a-zA-Z]{7}[0-9]{5}$/i.test(value);
    },);

    $.validator.addMethod("FULLNAME", function (value, element) {
        return this.optional(element) || /^[a-zA-Z]$/i.test(value);
    },);
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#formDangKy").validate({
        rules: {
            fullname: {
                required: true,
                minlength:2
            },
            username: "required USERNAME",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 15
            },
            phoneNumber: "required PHONE"
        },
        messages: {
            fullname: "Vui lòng nhập tên!",
            email: {
                required: "Vui lòng nhập vào email",
                email: "Nhập đúng định dạng email"
            },
            password: {
                required: "Vui lòng nhập mật khẩu!",
                minlength: "Độ dài tối thiểu 6 kí tự",
                maxlength: "Độ tài tối đa 15 kí tự"
            },
            username: "Bắt đầu 2 ký tự 'KH', tiếp theo 7 kí tự chữ, cuối cùng 5 kí tự số",
            phoneNumber: "Vui lòng nhập đúng số điện thoại!",
        }
    });
});