const form = document.getElementById('signUpForm');
const button = document.getElementById('signUpButton');

$('#signUpButton').click(function(e) {
    e.preventDefault();
    if($('#name').val() === '' || $('#name').val() == null || $('#email').val() === '' || $('#email').val() == null || $('#pswd').val() === '' || $('#pswd').val() == null || $('#cpswd').val() === '' || $('#cpswd').val() == null){
      $('#emptyFieldsMessage').html('*You must fill up all the fields');
    }
    else{
      if(!$('#email').val().includes("@")){
        $('#emailErrorMessage').html('*not a valid email');
      }
      else{
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
      }
      
    }
    
});