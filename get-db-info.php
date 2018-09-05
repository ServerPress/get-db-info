<?php
/*
* Quickly get database information from a remote site
*
*/

$doc_root = getenv( 'DOCUMENT_ROOT' ) ; 
$db_name = 'DB_NAME';
$db_user = 'DB_USER';
$db_pass = 'DB_PASSWORD';
$db_host = 'DB_HOST';

$lines = file( 'wp-config.php' );

echo '<div style="padding:20px 50px;"><h2>Database Info</h2>';

echo '<p>' . $doc_root . '</p>';

foreach( $lines as $line ) {

	// DB NAME
  if( strpos( $line, $db_name ) ) : 
    echo '<p>' . substr( $line, 19, -4 ) . '</p>';
  endif;

	// DB USERNAME
  if( strpos( $line, $db_user ) ) : 
    echo '<p>' . substr( $line, 19, -4 ) . '</p>';
  endif;

  	// DB NAME
  if( strpos( $line, $db_pass ) ) : 
    echo '<p>' .  substr( $line, 23, -4 ) . '</p>';
  endif;
  
  	// DB HOST
  if( strpos( $line, $db_host ) ) : 
    echo '<p>' .  substr( $line, 19, -4 ) . '</p></div>';
  endif;

}