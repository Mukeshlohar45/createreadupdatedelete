jQuery(function() {
    $("#insertForm").validate({
        rules: {
            user: "required",
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                password: true,
                required: true
            },
            cpassword: "required",
            phone: "required",
            gender: "required",
            hobby: "required",
            message: "required",
            file: "required",
            grade: "required"
        },
        messages: {
            user:"Please enter Username",
            firstname: " Please enter your name",
            lastname: " Please enter your lastname",
            email: " Please enter your email",
            password: " Please enter password",
            cpassword: " Please enter confirm password",
            phone: "enter phone",
            gender: "enter gender",
            hobby: "enter Hobby",
            message: " Please enter your message",
            file: "Please select file",
            grade: "Please select grade"
        }
    }).css("color", "red")
})