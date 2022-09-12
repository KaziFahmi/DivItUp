<?php
       /** upload.php file **/
     
       require 'sdk/lib/FroalaEditor.php';
       // Store the image.
          try {      
                    $response = FroalaEditor_Image::upload('/fro-demos/img/storage/user1/images/');
                    $response = json_encode($response);
                     //store image link in a file
                    file_put_contents( $_SERVER['DOCUMENT_ROOT'] . '/fro-demos/img/storage/user1/images/image_name.txt', $response);
                    //return the response
                    echo stripslashes($response);
                    }
                    catch ( Exception $e) {
                    http_response_code( 404);
                 }
	?>