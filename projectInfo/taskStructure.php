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
      
        
        

    <body >

    <?php
        include 'C:\xampp\htdocs\DivItUp\classes\eventClass.php';
        include 'C:\xampp\htdocs\DivItUp\classes\taskClass.php';
        include 'dbconnect.php';
        $tasks = Event:: getTasks($eventId, $connect);
        // $query="SELECT task_id FROM task where event_id = ".$eventID;
        // $result = mysql_query($query);

        echo '<table class="table table-hover">
               <thead>
                  <tr>
                    <th  scope="col">Summary</th>
                    <th  scope="col">Deadline</th>
                    <th  scope="col">Assignee</th>
                  </tr>
               </thead>';

        echo'<tbody>';

        foreach($tasks as $task){ 
          $result= Task::readTask($task,$connect);

            echo ' <button id="taskIdBut"><tr data-toggle="modal" data-target="#readTask">';
            echo '<td id="tid"  hidden>' . $result->getId(). '</td>';
            echo "<td >" . $result->getSummary(). "</td>";
            echo "<td>" . $result->getDeadline() . "</td>";
            // echo "<td>" . $result->getAssigneeEmail(). "</td>";
            $assignee= User::readUser($result->getAssigneeEmail(),$connect);
            echo "<td>" .'<img src="data:image/jpeg;base64,'.$assignee->getProfilePicture().'" class="imagesmol"/>'."</td>";
            echo "</tr></button>";
          
        }

                 
        echo'</tbody>';

              
        echo'<table>';  

      ?>

   

        <table class="table table-hover"> </table>
          <hr>
          <button type="button" class="add" data-toggle="modal" data-target="#exampleModal" onclick="document.getElementById('defaultOpen2').click()">
            Add Task +
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <?php include "projectInfo/createTask.php" ?></div>
          
         <div class="modal fade" id="readTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <?php include "projectInfo/task.php" ?></div>
         <script>
            function formInput(){
              alert("Is it working?");
              const taskForm=document.getElementByID("formId");
              var taskId=document.getElementByID("taskId").innerHTML=document.getElementByID("tid").value();
              taskForm.submit();
              // const subBut=document.getElementByID("subBut");
            }
            document.getElementById("taskIdBut").addEventListener("click", formInput);
          </script>
      
      
    </body>
</html>
