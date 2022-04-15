$(document).ready(function() {

    $('#form-login').submit(e => {

        let user = $('#user').val();
        let pass = $('#pass').val();
        $.post('../controllers/usersControllers.php');

        e.preventDefault();
    })
})