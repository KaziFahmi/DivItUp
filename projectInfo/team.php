<html>

    <body >
    <?php
        
    ?>
      

        <div class="tab">
            <button class="tablinks2" onclick="openSubTab(event, 'Team Overview')" id="defaultOpen2">Team Overview</button>
            <button class="tablinks2" onclick="openSubTab(event, 'Shifts')">Shifts</button>
            <button class="tablinks2" onclick="openSubTab(event, 'Active Status')">Active Status</button>
           
        </div> 
        <form action="projectInfo\addMember.php" id="addMemberForm" method="post">
            <label for="email" style = "color:red;font-size:12px" id = "emailErrorMessage"></label>
            <input type="email" id="memberEmail" class="memberEmail" placeholder="Enter Email" name="memberEmail"/>
            <input type="hidden" value = "<?php echo $eventId; ?>"id="eventId" name="eventId"/>
            <label for="signUpButton" style = "color:red;font-size:12px" id = "emptyFieldsMessage" style="text-align: center"></label>
            <button type="submit" class="btn btn-primary" id = "addMemberButton">
              Add 
             </button>
          </form>
                

        <div id="Team Overview" class="tabcontent2" >
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Team Member</th>
                    <th scope="col">Department</th>
                    <th scope="col">Attendance</th>
                    <th scope="col">Total Tasks Assigned</th>
                  </tr>
                </thead>
                <tbody>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Shahil Yasar Haque</td>
                    <td>Dev</td>
                    <td>10/12</td>
                    <td>3</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Kazi Mohammad Fahmi</td>
                    <td>HR</td>
                    <td>12/12</td>
                    <td>2</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Eashrat Jahan Anne</td>
                    <td>PR</td>
                    <td>11/12</td>
                    <td>3</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>

        <div id="Shifts" class="tabcontent2">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Team Member</th>
                    <th scope="col">Start Shift</th>
                    <th scope="col">End Shift</th>
                  </tr>
                </thead>
                <tbody>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Shahil Yasar Haque</td>
                    <td>00:00</td>
                    <td>00:00</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Kazi Mohammad Fahmi</td>
                    <td>00:00</td>
                    <td>00:00</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Eashrat Jahan Anne</td>
                    <td>00:00</td>
                    <td>00:00</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>

        <div id="Active Status" class="tabcontent2">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Team Member</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Shahil Yasar Haque</td>
                    <td>Active</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Kazi Mohammad Fahmi</td>
                    <td>On Leave</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Eashrat Jahan Anne</td>
                    <td>Inactive</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
      
    </body>
</html>
