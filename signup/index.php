<!DOCTYPE html>
<html lang="en">
<head>
  <title>DivItUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script defer src="formValidation.js"></script>

  <link rel="stylesheet" href="../style.css">
</head>
<body style="background-color:#E9E9E9; ">
<label class="LogInLogo">DivItUp</label><label class="topSignup logoset">Already Have an account? <button class="botol" onclick="window.location.href ='../login/index.php'">Log In </button> </label>
<div class="container ">
  <?php // errors
  $unmatchedPassword = "";
  if(isset($_GET['unmatchedPassword'])){
    $unmatchedPassword = "*passwords do not match";
  }
  $usedEmail = "";
  if(isset($_GET['usedEmail'])){
    $usedEmail = "Email already in use";
  }
  
  ?>
  <form action="createUser.php" class="logInForm" method="post" id = "signUpForm">
      <h2 style="color: #076A96; text-align: center; font-weight: bold;margin-bottom: 35px;">Let's Go!</h2>
      <div class="form-group formSetup">
        <label for="name">Full Name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter Full Name" name="name" required>
      </div>
    <div class="form-group formSetup">
      <label for="email">Email:</label>
      <label for="email" style = "color:red;font-size:12px" id = "emailErrorMessage"></label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group formSetup">
      <label for="pswd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
    </div>

    <div class="form-group formSetup">
        <label for="cpswd">Confirm Password:</label>
        <label for="cpswd" style = "color:red;font-size:12px" id = "passwordErrorMessage"></label>
        <input type="password" class="form-control" id="cpswd" placeholder="Re-enter password" name='cpswd' oninput = "matchPassword()" required>
      </div>
    <div class="form-group formSetup">
        <a href="" style="color: #076A96;">Forgot Password?</a>
    </div>
    <label for="signUpButton" style = "color:red;font-size:12px" id = "emptyFieldsMessage" style="text-align: center"></label>
    <button type = "submit" class="btn formSetup" style="background-color: #076A96; color: white;margin-bottom: 5px;" id = "signUpButton">Sign Up</button>
    <button class="btn formSetup" style="background-color: #b9b9b9; color: black;margin-bottom: 25px;">Sign Up With Google</button><br>
  </form>
</div>



<script>
function matchPassword(){
  var pswd = $('#pswd').val();
  var cpswd = $('#cpswd').val();
  var result = pswd.localeCompare(cpswd);
  if(result == 0){
    $('#passwordErrorMessage').html('');
  }
  else{
    $('#passwordErrorMessage').html('*passwords do not match');
  }
}
</script>
</body>
</html>
