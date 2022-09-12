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
    <script src="http://www.w3schools.com/lib/w3data.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body onload="onclick= openTab(event, 'Notice Board')">

    <?php include 'navbar.php'; ?>

    <script>
      w3IncludeHTML();
    </script>



    <!--Main Body-->


    <div id="main">     
      <h1 >Dashboard</h1>

      <?php // echo $_SESSION['id']; ?>
      <div class="row justify-content-between" style="padding-left: 50px;">
        <div class="col-5 " >
          <h2>Notice Board</h2>
          <div class="notBoard">
            <div class="notice">Increased budget - Wedding Ceremony <label class="notice-date">00/00/00</label><br>
              <label class="notice-content">Increase in Budget of Wedding</label>
            </div>
          </div>
        </div>
        <div class="col-5" >
          <h2>Attendance Status</h2>
          <div class="attendance">
            
          </div>
        </div>
      </div>
    
      <br>
    
      <div class="row justify-content-between" style="padding-left: 50px;">
        <div class="col-5" >
          <h2>Team chat</h2>
          <div class="chatOpts">
            <select name="projects" id="Projects">
              <option value="opts">Wedding Ceremony</option>
              <option value="opts">Ai Contest</option>
            </select>
          </div>
          <div class="chat">
            <label style="border:1px solid #676767;border-radius: 15px;height:30px;background-color:#676767;color:white;"> Hello </label><br>
            <label style="border:1px solid #0b7dda;border-radius: 15px;height:30px;background-color:#0b7dda;color:white;float:right">Hello</label>
          </div>
          <div class="chatBox">
          <form action="" style="float:right; width:100%;text-align:right;">
              <input type="text"style="width:60%">
              <button type="submit"class="btn btn-primary" >Send</button>
            </form></div>
        </div>
        <div class="col-5" >
          <h2>Activity log</h2>
          <div class="activity">

          </div>
        </div>
      </div>
  </div>
  </body>
</html> 


