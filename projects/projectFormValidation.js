const projectName = $('#projectName').val();
const summary = $('#summary').val();
const coverPhoto = $('#coverPhoto').val();
const deadline = $('#deadline').val();

$('#projectSubmit').click(function(e) {
    e.preventDefault();
});


// $('#loginButton').click(function(e) {
//     e.preventDefault();

//     if($('#email').val() === '' || $('#pswd').val() === '' || $('#email').val() == null || $('#pswd').val() == null){
//       $('#emptyFieldsMessage').html('*You must fill up all the fields');
//     }
//     else{
//       if(!$('#email').val().includes("@")){
//         $('#emailErrorMessage').html('*not a valid email');
//       }
//       else{
//         $.ajax({
//           type: "POST",
//           url: "loginVerification.php",
//           data: {email: $('#email').val(),
//                   password: $('#pswd').val()},
//           success: function(result){
//             if(result.localeCompare("nonExistent") == 0){
//               $('#emailErrorMessage').html('*account with this email does not exist');
//             }
//             else if(result.localeCompare("verified") == 0){
//               form.submit();
//             }
//             else{
//               $('#passwordErrorMessage').html('*wrong password');
//             }
//           }
//         });
//       }
//     }
// });