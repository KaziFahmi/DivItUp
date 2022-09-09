const form = document.getElementById('signUpForm');
const button = document.getElementById('signUpButton');

$('#signUpButton').click(function(e) {
    e.preventDefault();
    var x = $('#pswd').val();
    var y = $('#cpswd').val();
    if(x == y){
      $.ajax({
        type: "POST",
        url: "checkEmail.php",
        data: {email: $('#email').val()},
        success: function(result){
          if(result.localeCompare("unique") != 0){
           
            $('#emailErrorMessage').html('*account already exists with this email');
          }
          else{
            form.submit();
          }
        }
      });
    }
});