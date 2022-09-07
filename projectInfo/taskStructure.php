<html>
    <head>
        <title>
            DivItup
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../myFunction.js"></script>
        <script src="http://www.w3schools.com/lib/w3data.js"></script>
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      
        
        
    </head>
    <body >
      

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Tasks</th>
                <th  scope="col">Subtasks</th>
                <th  scope="col">Deadline</th>
                <th  scope="col">Assignee</th>
              </tr>
            </thead>
            <tbody>
              <tr onclick="window.location='index.php'">
                <tr><td>Setup</td>
                    <td>Caterer Contact</td><td>10/09/2022</td>
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage"></td>
                </tr>
                <tr><td></td>
                    <td>Venue Contact</td>
                    <td>08/09/2022</td><td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage"></td></tr>
              </tr>
              <tr onclick="window.location='index.php'">
                <tr><td>Decoration</td>
                    <td>Design</td><td>10/09/2022</td>
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage"></td>
                </tr>
                <tr><td></td>
                    <td>Lights</td>
                    <td>08/09/2022</td><td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage"></td></tr>
              </tr>
            </tbody>
          </table>
          <hr>
          <button type="button" class="add" data-toggle="modal" data-target="#exampleModal" onclick="document.getElementById('defaultOpen2').click()">
            Add Task +
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <?php include "projectInfo/createTask.php" ?></div>
      
    </body>
</html>
