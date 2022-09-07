<?php

	define( 'HOST', 'localhost' );
	define( 'DB', 'divitup_database' );
	define( 'USER', 'root' );
	define( 'PASS', '' );
    $connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");
?>