function passResetForm() {
    $(".username, .email, #change").remove();
    $(".password").load('assets/php/passwdChange-form.php');
}

function usrnameChangeForm() {
    $(".password, .email, #change").remove();
    $(".username").load('assets/php/usrnameChange-form.php');
}

function emailChangeForm() {
    $(".username, .password, #change").remove();
    $(".email").load('assets/php/emailChange-form.php');
}