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
      
        
    </head>
    <body onload="document.getElementById('defaultOpen').click();" >
        <div w3-include-html="navbar.php"></div> 

        <script>
          w3IncludeHTML();
        </script>

<div id="main">
    <h1>Wedding Ceremony</h1>

    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Task_Structure')" id="defaultOpen">Task Structure</button>
        <button class="tablinks" onclick="openTab(event, 'Board')">Board</button>
        <button class="tablinks" onclick="openTab(event, 'Team'); document.getElementById('defaultOpen2').click();" >Team</button>
        <button class="tablinks" onclick="openTab(event, 'Expense');document.getElementById('defaultOpen3').click();">Expense</button>
        <button class="tablinks" onclick="openTab(event, 'Documents')">Documents</button>
        <button class="tablinks" onclick="openTab(event, 'Leaves')">Leave Management</button>

        <button type="button" class="leaveReq" data-toggle="modal" data-target="#leaveRequest" onclick="document.getElementById('defaultOpen2').click()">
          Leave Request
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="leaveRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div w3-include-html="../leaveRequest.php"></div> </div> 
       
      </div>
      <div id="Task_Structure" class="tabcontent">
        <div w3-include-html="projectInfo/taskStructure.php"></div> 

        <script>
          w3IncludeHTML();
        </script>

      </div>


      <div id="Board" class="tabcontent"> <script>// korinai</script>

        <div w3-include-html="projectInfo/board.php"></div> 

        <script>
          w3IncludeHTML();
        </script>

      </div>


      <div id="Team" class="tabcontent" >
        
        <div w3-include-html="projectInfo/team.php"></div> 

        <script>
          w3IncludeHTML();
        </script>
           
      </div>


      <div id="Expense" class="tabcontent">

        <div w3-include-html="projectInfo/expense.php"></div> 

        <script>
          w3IncludeHTML();
        </script>
           
       
      </div>


      <div id="Documents" class="tabcontent">
        <div w3-include-html="projectInfo/document.php"></div> 
      </div>

      <div id="Leaves" class="tabcontent">
        <div w3-include-html="projectInfo/leaves.php"></div> 
      </div>



  </div>
      
    </body>
</html>