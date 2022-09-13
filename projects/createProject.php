<html>
    <head>
        <title>
            DivItup
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="myFunction.js"></script>
        <script src="http://www.w3schools.com/lib/w3data.js"></script>
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script defer src="projectFormValidation.js"></script>
    </head>
    <body >
      
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #076A96;">Create Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="form-group">
          </div enctype="multipart/form-data" id = "projectForm">
              <form action="projects/projectCreate.php" method="POST" enctype="multipart/form-data">
                <!-- <figure>
                  <img id="logo" src="#" alt="User placeholder" height="100">
                  <input type='file' />
                <figcaption>Event Cover</figcaption>
              </figure> -->
                <label for="projectName">Event Name</label><label style="color: red;">*</label><br>
                <input type="text" id="projectName" name="projectName" size="48"><br>
                <label for="">Summary</label><label style="color: red;">*</label><br>
                <textarea id="summary" name="summary" rows="2" cols="50" placeholder="Enter summary"></textarea>
                    
                <button class="tablinks2" onclick="openSubTab(event, 'Team');" id="defaultOpen2">Team Members</button>
                <button class="tablinks2" onclick="openSubTab(event, 'Department')">Departments</button>

                <div id="Team" class="tabcontent2">
                  <div class="input-group" style="padding-top: 5px;">
                    <div id="search-autocomplete" class="form-outline">
                      <input type="search" id="form1" class="form-control" placeholder="Add Members" />
                    </div>
                    <button type="button" class="btn btn-primary">
                     Add 
                    </button>
                  </div>
                </div>

                <div id="Department" class="tabcontent2" >
                    <div class="input-group" style="padding-top: 5px;">
                        <div id="search-autocomplete" class="form-outline">
                          <input type="search" id="form1" class="form-control" placeholder="Add Deapartments" />
                        </div>
                        <button type="button" class="btn btn-primary">
                         Add 
                        </button>
                      </div>
                </div>

                <div>
                    <table class="table table-hover">
                        <tr>
                            <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Shahil Yasar Haque</td>
                            <td>Invited</td>
                        </tr>
                        <tr>
                            <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Eashrat Jahan</td>
                            <td>Member</td>
                        </tr>
                    </table>
                </div>

                <div>
                    <label for="">Deadline</label><br>
                    <input type="datetime-local" id="deadline" name="deadline">
                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" id="projectSubmit" onclick="changeImage()">Save changes</button>
                </div>
              </form>



              </div>
              
            </div>
          </div>
      
    </body>
</html>
