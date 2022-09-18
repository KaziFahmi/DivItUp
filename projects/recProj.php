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
        
<!--         
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
      
        
        
    </head>
    <body >
      

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Project</th>
                <th  scope="col">Lead</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($events as $event){
                if($event->getStatus() == 'not complete'){
                  $eventName = $event->getName();
                  $eventId = $event->getId();
                  $leadPic = User::readUser($event->getCreatorEmail(), $connect)->getProfilePicture();
              ?>
                <tr onclick="window.location='projectInfoPage.php?eventId='.concat(<?php echo $eventId?>)">
                  <td><?php echo $eventName; ?></td>
                  <td><?php echo '<img src="data:image/jpeg;base64,'.$leadPic.'" class="imagesmol"/>'; ?></td>
                </tr>
              <?php
              }
             } ?>
              
            </tbody>
          </table>
          <!-- <script>
            function openEvent(){
              window.location
            }
          </script> -->
      
    </body>
</html>
