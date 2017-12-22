<?php

DEFINE ('DB_HOST','localhost')
DEFINE ('DB_NAME','')
DEFINE ('DB_USER', '' );
DEFINE ('DB_PSWD','');

$dbcon = mysqli_connect (DB_HOST, DB_USER, DB_PSWD, DB_NAME)

if (!$dbcon) {

  die ('error connecting to database');
}

echo 'you have logged in successfully' ;

?>
