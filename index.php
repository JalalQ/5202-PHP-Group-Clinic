
<?php
$dirPages='pages/';//pages directory
$pageExtension='.php';
$pages_array= array('home','about_us','contact','admin_dashboard');

// if no page is requested display the home page
if(!isset($_GET['page'])){
	include_once $dirPages.'home'.$pageExtension;
}
else{
	//if a page is requested check if that page is a valid page
	$page = $_GET['page'];	
	
	if (preg_match('/^[a-z0-9_\-]+$/i', $page)){
				
		if (in_array($page, $pages_array)) {

			include_once $dirPages.$page.$pageExtension;
		}
		else{
			echo "Page not found";
		}

	}

	else{
			echo "Page not found";
		}
}

?>
			

