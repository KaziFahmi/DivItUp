const form = document.getElementById('loginForm');
const button = document.getElementById('loginButton');

$('#loginButton').click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "loginVerification.php",
        data: {email: $('#email').val(),
                password: $('#pswd').val()},
        success: function(result){
          if(result.localeCompare("nonExistent") == 0){
            $('#emailErrorMessage').html('*account with this email does not exist');
          }
          if(result.localeCompare("verified") == 0){
            form.submit();
          }
          else{
            $('#passwordErrorMessage').html('*wrong password');
          }
        }
    });

    // var y = $('#cpswd').val();
    // if(x == y){
    //   $.ajax({
    //     type: "POST",
    //     url: "checkEmail.php",
    //     data: {email: $('#email').val()},
    //     success: function(result){
    //       if(result.localeCompare("unique") != 0){
           
    //         $('#emailErrorMessage').html('*account already exists with this email');
    //       }
    //       else{
    //         form.submit();
    //       }
    //     }
    //   });
    // }
});