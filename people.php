<html>
 <head>
  <title>DivItup</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="myFunction.js"></script>
    <script src="http://www.w3schools.com/lib/w3data.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
 </head>

 <body onload="document.getElementById('defaultOpen').click();">
 <?php 
    include 'navbar.php';
    include 'dbconnect.php';
    include 'classes/eventClass.php';

    $events=User::getEvents($user->getEmail(),$connect);
 ?>
 
  <!--Main Body-->
  <div id="main">
   <h1>People</h1>

    <div >
   <form action="" method="post" class="mb-3">
     <div class="select-block">
       <select name="Choose">
        <?php
          foreach($events as $val){
            $event=Event::readEvent($val,$connect);
            echo $event->getName();
            echo '<option><a>'.$event->getName().'</a><option>';
          }
              

         ?>
         <input type="submit" name="submit" value="Choose options">
     
      </form> 
        <?php
          if(isset($_POST['submit'])){
           
              $selected = $_POST['Choose'];
              //echo $selected;
            }
              ?>

          </div>

         </div>
          
          <?php

            $employees=Event::getEmployees($selected,$connect);
            print_r($employees);

          ?>
    <table class="table table-hover">
     <tbody>
      
      <tr onclick="window.location='person.php'"> 
       <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage"> Eashrat Jahan Anne</td>
          
       </tr>
       <tr onclick="window.location='person.php'"> 
       <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage"> S.M Jishanul Islam</td>
          
       </tr>
          
     </tbody>
     </table>










   <!-- <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Contacts')" id="defaultOpen">
     Contacts
    </button>
    <button class="tablinks" onclick="openTab(event, 'TM')">
     Team Members
    </button>
    
   </div>

   <div id="Contacts" class="tabcontent">
    <div w3-include-html="people/contacts.php"></div> 
  
  </div>
  
   <div id="TM" class="tabcontent">
    
    <div w3-include-html="people/teamMem.php"></div> -->

  </div> 





 </body>
</html>
