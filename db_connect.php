<?php


define ('DB_HOST', 'gatesofedenorg.fatcowmysql.com');
define ('DB_USER', 'goe');
define ('DB_PASS', 'jamez94??');
define ('DB_NAME', 'goe');

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME) or die ('Oops, you failed... err, we did: ' . mysqli_connect_error() );
?>