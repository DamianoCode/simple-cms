<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Warsaw" );

define( "DB_SERVER", "https://serwer1936460.home.pl/sql" );
define( "DB_NAME", "31300146_ulas" );
define( "DB_USERNAME", "31300146_ulas" );
define( "DB_PASSWORD", "83ARdH4w" );

$link = mysqli_connect('localhost', DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("Wystąpił błąd " . mysqli_connect_error());
}

function handleException( $exception ) {
  echo "Wystąpił błąd, spróbuj później";
  error_log( $exception->getMessage() );
}
set_exception_handler( 'handleException' );
?>