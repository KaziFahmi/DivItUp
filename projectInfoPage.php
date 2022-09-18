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
      
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="myFunction.js"></script>
        <script defer src="projectInfo/addMemberValidation.js"></script>
        <script src="http://www.w3schools.com/lib/w3data.js"></script>
  
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
      
        
    </head>
    <body onload="document.getElementById('defaultOpen').click();" >
    <?php
      include "navbar.php";
      $eventId = $_GET['eventId'];
      $taskStructureId = 'defaultOpen';
      $teamId = 'teamId';
      if(isset($_GET['memberAdded']) && $_GET['memberAdded'] == 1){
        $teamId = 'defaultOpen';
        $taskStructureId = 'taskStructureId';
      }
      else{
        $teamId = 'teamId';
        $taskStructureId = 'defaultOpen';
      }
    ?>

<script>
  w3IncludeHTML();
</script>
<div id="main">
    <h1>Wedding Ceremony</h1>

    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Task_Structure')" id="<?php echo $taskStructureId ?>">Task Structure</button>
        <button class="tablinks" onclick="openTab(event, 'Board')">Board</button>
        <button class="tablinks" id='<?php echo $teamId ?>' onclick="openTab(event, 'Team'); document.getElementById('defaultOpen2').click();">Team</button>
        <button class="tablinks" onclick="openTab(event, 'Expense');document.getElementById('defaultOpen3').click();">Expense</button>
        <button class="tablinks" onclick="openTab(event, 'Documents')">Documents</button>
        <button class="tablinks" onclick="openTab(event, 'Leaves')">Leave Management</button>

        <button type="button" class="leaveReq" data-toggle="modal" data-target="#leaveRequest" >
          Leave Request
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="leaveRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
         <?php include "projectInfo/leaveRequest.php"?> </div> 
       
      </div>
      <div id="Task_Structure" class="tabcontent">
          <?php include "projectInfo/taskStructure.php" ?>
      </div>


      <div id="Board" class="tabcontent"> <script>// korinai</script>

        <?php include "projectInfo/board.php" ?>

      </div>


      <div id="Team" class="tabcontent" >
        
      <?php include "projectInfo/team.php" ?>
           
      </div>


      <div id="Expense" class="tabcontent">

      <?php include "projectInfo/expense.php" ?>
           
       
      </div>


      <div id="Documents" class="tabcontent">
        <?php include "projectInfo/document.php" ?>
      </div>

      <div id="Leaves" class="tabcontent">
       <?php include "projectInfo/leaves.php" ?>
      </div>



  </div>
      
    </body>
</html>
