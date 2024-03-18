jQuery(function() {
    $("#loginForm").validate({
        rules: {
            user: "required", 
            pass: {
                password: true,
                required: true
            }
        },
        messages: {
            user:"Please enter Username or email",
            pass: " Please enter password"
        }
    });
})