

<?php

 define('DB_LOCALHOST','localhost');
 define('DB_USER','syunm_sayunm');
 define('DB_PASSWORD','Cu6l]BS-M3Nf');
 define('DB_NAME','syunm_sayun');
 define('DB_CHARSET','utf8');
 
 $con=mysqli_connect(DB_LOCALHOST,DB_USER,DB_PASSWORD,DB_NAME);
 if(mysqli_connect_error())
 {
	 echo "Error in connection";
	 echo "Debuging error number".mysqli_connect_errno();
	 echo "Debuging error".mysqli_connect_errno();
	 exit();
 }
 
 /* else echo "connect is done sucessfully"; */
 mysqli_set_charset($con,DB_CHARSET);
 
 error_reporting(E_ALL ^ E_NOTICE);


?>