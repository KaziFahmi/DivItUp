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
    <body onload="document.getElementById('defaultOpen').click();">
      <div w3-include-html="navbar.php"></div> 

      <script>
        w3IncludeHTML();
      </script>
     

              
             <!--Main Body-->
          <div id="main">
            <h1>My Works</h1>

            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'To Do')" id="defaultOpen">To Do</button>
                <button class="tablinks" onclick="openTab(event, 'Ongoing')">Ongoing</button>
                <button class="tablinks" onclick="openTab(event, 'Completed')">Completed</button>
                <button class="tablinks" onclick="openTab(event, 'Overdue')">Overdue</button>
              </div>
              
              <div id="To Do" class="tabcontent">
                <div w3-include-html="myWorks/todo.php"></div> 

              </div>
              
              <div id="Ongoing" class="tabcontent">
                
                <div w3-include-html="myWorks/ongoing.php"></div> 
               
              </div>
              
              <div id="Completed" class="tabcontent">
                <div w3-include-html="myWorks/completed.php"></div> 
              </div>

              <div id="Overdue" class="tabcontent">
                <div w3-include-html="myWorks/overdue.php"></div> 
              </div>


          </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div w3-include-html="myWorksTaskData.php"></div> </div> 

    </body>
</html>