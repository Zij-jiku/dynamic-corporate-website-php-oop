$(document).ready(function () {

    const site_url = "http://127.0.0.1/dcw_php/";


    $('#showSignUpForm').click(function () {
        $('#login-form-box').hide();
        $('#register-form-box').show();
    });

    $('#showSignInForm').click(function () {
        $('#register-form-box').hide();
        $('#login-form-box').show();
    });

    $('#showForgetForm').click(function () {
        $('#login-form-box').hide();
        $('#forgotten-form-box').show();
    });

    $('#showSignIn').click(function () {
        $('#forgotten-form-box').hide();
        $('#login-form-box').show();
    });

    $('#registerUser').click(function (e) {
        if($('#register-form')[0].checkValidity()) {
            e.preventDefault();
            $('#registerUser').val('Loading...').attr('disabled' , true);

            if($("#name").val() === ''){
                $('#name').addClass('is-invalid');
            }else {
                $('#name').removeClass('is-invalid');
            }

            if($("#userEmail").val() === ''){
                $('#userEmail').addClass('is-invalid');
            }else {
                $('#userEmail').removeClass('is-invalid');
            }

            if($("#r_password").val() === ''){
                $('#r_password').addClass('is-invalid');
            }else {
                $('#r_password').removeClass('is-invalid');
            }

            if($("#c_password").val() === ''){
                $('#c_password').addClass('is-invalid');
            }else {
                $('#c_password').removeClass('is-invalid');
            }

            if($("#r_password").val() === $("#c_password").val()){

                if($("#name").val() !== '' && $("#userEmail").val() !== '') {
                    $.ajax({
                        url: site_url+'admin/action.php',
                        method: 'post',
                        data: $('#register-form').serialize()+ '&action=register',
                        success: function(response){
                            console.log(response);
                        }
                    });
                }
            }else {
                $('#r_password').addClass('is-invalid');
            }
            $('#registerUser').val('Register').attr('disabled' , false);

        }
    });


});