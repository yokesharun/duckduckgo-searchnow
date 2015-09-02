	<?php 

include('feed-reader.php');

$get_feed = new rss('https://api.duckduckgo.com/?q=google&format=xml');
echo $get_feed->get_display(10,"The Hindu Feed Collector"); // feed count , heading  
 ?>