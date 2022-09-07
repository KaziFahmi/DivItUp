
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


  <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#E9E9E9; ">
<label class="LogInLogo">DivItUp</label><label class="topSignup logoset">Already Have an account? <button class="botol" onclick="window.location.href ='index.php'">Log In </button> </label>
<div class="container ">
  
  <form action="/action_page.php" class="logInForm">
      <h2 style="color: #076A96; text-align: center; font-weight: bold;margin-bottom: 35px;">Let's Go!</h2>
      <div class="form-group formSetup">
        <label for="email">Full Name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name">
      </div>
    <div class="form-group formSetup">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group formSetup">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    <div class="form-group formSetup">
        <label for="pwd">Confirm Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Re-enter password" name="pswd">
      </div>
    <div class="form-group formSetup">
        <a href="" style="color: #076A96;">Forgot Password?</a>
    </div>
    <button type="submit" class="btn formSetup" style="background-color: #076A96; color: white;margin-bottom: 5px;">Sign Up</button>
    <button type="submit" class="btn formSetup" style="background-color: #b9b9b9; color: black;margin-bottom: 25px;">Sign Up With Google</button><br>
  </form>
</div>

</body>
</html>
