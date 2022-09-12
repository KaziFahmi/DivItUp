<html>
  <head>
    <title>DivItup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="myFunction.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  </head>
  <body>
  <?php
    include 'classes/userClass.php';
    session_start();
    if(!isset($_SESSION['user']) || empty($_SESSION['user'])) {
      header("location:index.php");
    }
    $user = $_SESSION['user'];
  ?>

    <div class="topnav" id="myTopnav">
      <a href="#home" class="openbtn" onclick="sideAccess()"><img src="images/Group 5.png" alt="" /></a><!--Show sidebar menu button-->
      <label class="logo">DivItUp</label><!--Logo-->
      <!--Navbar element on left-->
      <li class="options">
        <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo '<img src="data:image/jpeg;base64,'.$user->getProfilePicture().'" class="imagesmol"/>'; ?></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="profilePage.php"><img src="images/Ellipse 1.png" alt="" /> <?php echo $user->getName(); ?> </a>
          <a class="dropdown-item" href="settings.php">Settings</a>
          <a class="dropdown-item" href="signout.php">Log Out</a>
        </div>
      </li>
      <li class="options">
        <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#home"><img src="images/Notifications.png" alt="" /></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="profilePage.php"><img src="images/Ellipse 1.png" alt="" /></a>
        </div>
      </li>
      <li class="options">
        <a href="settings.php"><img src="images/Settings.png" alt="" /></a>
      </li>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()"
        ><!--hover function-->
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <!--Side bar-->
    <div id="mySidebar" class="sidebar">
      <form class="example" action="/action_page.php">
        <input type="text" placeholder="Search.." name="search" />
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
      <a class="siOp" href="dashboard.php">Dashboard</a>
      <a class="siOp" href="myWorks.php">My Works</a>
      <a class="siOp" href="project.php">Events</a>
      <a class="siOp" href="people.php">People</a>
    </div>
  </body>
</html>
