<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<title>Database Information | Get DB Info</title>
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>
		
		<style type="text/css">
			body {
				width: calc(100% - 24px);
				max-width: 960px;
				margin: 0 auto;
				padding-top: 2rem;
				font-family: Verdana, Geneva, sans-serif;
				background-color: #F7F7F7;
			}
			.btn {
				background-color: DodgerBlue;
				border: none;
				color: white;
				padding: 10px 16px;
				text-align: center;
				font-size: 17px;
				cursor: pointer;
				box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
			}
			.btn:hover {
				background-color: #fff;
				color: DodgerBlue;
				border: lightgray solid 1px;
			}
			.ds-content {
				padding: 1rem 1rem 1rem;
			}
			input {
				color: #5f5f5f;
				box-sizing: border-box;
				width: 240px;
				box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
				padding: 12px;
				border: 1px solid #dbdbdb;
				margin-right: 10px;
			}
			label span {
				display: inline-block;
				box-sizing: border-box;
				color: #5F5F5F;
				width: 200px;
				text-align: right;
				vertical-align: top;
				padding: 12px 25px;
			}
		</style>
	</head>
	
	<body>

<?php
/*
* Quickly get database information from a remote site
*
*/

include('wp-config.php');

//Variables
$doc_root = getenv( 'DOCUMENT_ROOT' ) ; 
$db_name = DB_NAME;
$db_user = DB_USER;
$db_pass = DB_PASSWORD;
$db_host = DB_HOST;

echo '<h1 class="Header">Database Information</h1>';

echo '<p>Copy and paste these values into DesktopServer when creating an archive to deploy with the Quick Deploy method.</p>';

	// DOCUMENT_ROOT
	if( $doc_root ) : 
		echo '<div class="ds-content">';
		echo '<label><span>DOCUMENT_ROOT: </span></label><input type="text" id="doc_root" value="' . $doc_root . '" readonly="readonly" class="display_gf_key">';
		echo '<button class="btn" data-clipboard-target="#doc_root">Copy</button>';
		echo '</div>';
	endif;

		// DB_NAME
			echo '<div class="ds-content">';
			echo '<label><span>DB_NAME: </span></label><input type="text" id="db_name" onclick="jQuery(this).select();" value="' . $db_name  . '" readonly="readonly" class="display_gf_key">';
			echo '<button class="btn" data-clipboard-target="#db_name">Copy</button>';
			echo '</div>';

		// DB_USER
			echo '<div class="ds-content">';
			echo '<label><span>DB_USER: </span></label><input type="text" id="db_user" onclick="jQuery(this).select();" value="' . $db_user . '" readonly="readonly" class="display_gf_key">';
			echo '<button class="btn" data-clipboard-target="#db_user">Copy</button>';
			echo '</div>';	

		// DB_NAME
			echo '<div class="ds-content">';
			echo '<label><span>DB_PASS: </span></label><input type="text" id="db_pass" onclick="jQuery(this).select();" value="' .  $db_pass . '" readonly="readonly" class="display_gf_key">';
			echo '<button class="btn" data-clipboard-target="#db_pass">Copy</button>';
			echo '</div>';	
  
		// DB_HOST 
			echo '<div class="ds-content">';
			echo '<label><span>DB_HOST: </span></label><input type="text" id="db_host" onclick="jQuery(this).select();" value="' .  $db_host . '" readonly="readonly" class="display_gf_key">';
			echo '<button class="btn" data-clipboard-target="#db_host">Copy</button>';
			echo '</div>';

?>
	<p>*Don't forget to delete this script from the host</p>

		<script>
			(function(){
				new Clipboard('.btn');
			})();
		</script>

	</body>
</html>