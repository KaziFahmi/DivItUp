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
  </head>


  <body onload="document.getElementById('defaultOpen').click();">
  <?php
    include 'navbar.php';
    include 'dbconnect.php';
    include 'classes/eventClass.php';
    $events = User:: getEvents($user->getEmail(), $connect);
  ?>
  


    <!--Main Body-->
    <div id="main">
      <h1>People</h1>

        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="border: 1px solid gray ; margin-bottom: 4px;">Events
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
          <li><a href="#"></a></li>
            <?php foreach($events as $event){ 
                $eventInfo = Event::readEvent($event, $connect);
            ?>
            <li><a href="#"><?php echo $eventInfo->getName(); ?></a></li>
            <?php } ?>
          </ul>
        </div>

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
