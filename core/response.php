	<?php 
if($_GET){
	// including functionality
	include('parse_xml.php');
	$get_feed = new rss('https://api.duckduckgo.com/?q='.$_GET["q"].'&format=xml');
	echo $get_feed->get_display(10); // feed count  
}

 ?>