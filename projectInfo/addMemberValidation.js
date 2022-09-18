const memberForm = document.getElementById('addMemberForm');
const button = document.getElementById('addMemberButton');

$('#addMemberButton').click(function(e) {
    e.preventDefault();
    if($('#memberEmail').val() === '' || $('#memberEmail').val() == null){
      $('#emptyFieldsMessage').html('*You must fill up all the fields');
    }
    else{
      if(!$('#memberEmail').val().includes("@")){
        $('#emailErrorMessage').html('*not a valid email');
      }
      else{
        $.ajax({
            type: "POST",
            url: "signup/checkEmail.php",
            data: {email: $('#memberEmail').val()},
            success: function(result){
              if(result.localeCompare("unique") == 0){
              
                $('#emailErrorMessage').html('*account does not exist');
              }
              else{
                memberForm.submit();
              }
            }
          });
      }
      
    }
});