
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
  <script defer src="validation.js"></script>


  <link rel="stylesheet" href="../style.css">
</head>
<body style="background-color:#E9E9E9; ">
<label class="LogInLogo">DivItUp</label><label class="topSignup logoset">Don’t Have an account? <button class="botol" onclick="window.location.href ='../signup/index.php'">Sign Up</button> </label>
<div class="container ">
  
  <form action="loginSession.php" class="logInForm" method="POST" id = "loginForm">
      <h2 style="color: #076A96; text-align: center; font-weight: bold;margin-bottom: 35px;">Welcome Back!!!</h2>
      <label style = "color:red;font-size:12px" id = "emptyFields"></label>
    <div class="form-group formSetup">
      <label for="email">Email:</label>
      <label for="email" style = "color:red;font-size:12px" id = "emailErrorMessage"></label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group formSetup">
      <label for="pswd">Password:</label>
      <label for="pswd" style = "color:red;font-size:12px" id = "passwordErrorMessage"></label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="form-group formSetup">
        <a href="" style="color: #076A96;">Forgot Password?</a>
    </div>
    <button type="submit" class="btn logButton" style="background-color: #076A96; color: white;margin-bottom: 5px;" id="loginButton">Log In</button>
    <button type="submit" class="btn formSetup" style="background-color: #b9b9b9; color: black;margin-bottom: 25px;" id = "">Log In With Google</button><br>
  </form>
</div>

</body>
</html>
