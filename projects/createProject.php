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
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
                <input type="text" id="projectName" name="projectName" size="48" placeholder="Enter Event Name"><br>
                <label for="">Description</label><label style="color: red;">*</label><br>
                <textarea id="description" name="summary" rows="2" cols="50" placeholder="Enter summary"></textarea>

                <div class="well clearfix">
                    <div id="search-autocomplete" class="form-outline">
                        <input type="text" id="department" class="form-control" placeholder="Add Deapartments" />
                    </div>
                    <a class="btn btn-primary pull-right add-record" data-added="0">Add</a>
                </div>

                <table class="table table-hover" id="tbl_posts">
                  <thead>
                    <tr>
                    </tr>
                  </thead>
                  <tbody id="tbl_posts_body">
                    
                  </tbody>
                </table>
                
                <div style="display:none;">
                    <table id="sample_table">
                      <tr id="">
                      <td><span class="sn"></span>.</td>
                      <td id = "row_value"></td>
                      <td style="float: right; padding-right: 5%"><a class="fa-solid fa-trash cngbtn delete-record" data-id="0"></a></td>
                    </tr>
                  </table>
                </div>

                <div>
                    <label for="">Deadline</label><br>
                    <input type="datetime-local" id="deadline" name="deadline">
                </div>

                <div class="modal-footer">
                <label for="projectSubmit" style = "color:red;font-size:12px" id = "emptyFieldsMessage" style="text-align: center"></label>
                  <button type="submit" class="btn btn-primary" id="projectSubmit" data-toggle="modal" data-target="#exampleModal">Save changes</button>
                </div>
              </form>


              </div>
              
            </div>
          </div>
      
          <script src="projects\projectFormValidation.js"></script>
    </body>
</html>
