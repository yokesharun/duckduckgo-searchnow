<?php
 class rss {
     var $feed;

  function rss($feed) 
    {   $this->feed = $feed;  }
 
  function parse() 
    {
    $rss = simplexml_load_file($this->feed);
    $rss_split = array();
    foreach ($rss->RelatedTopics->RelatedTopic as $item) {
    $title = (string) $item->Text; // Title
    $link   = (string)$item; // Url Link
    $first_url = (string) $item->FirstURL;
    $img = (string) $item->Icon; // Image
    $rss_split[] = '<li class="collection-item avatar z-dept-4"> <img src="'.$img.'" alt="" class="circle">'.$link.' <p><a href="'.$first_url.'">'.$first_url.'</a></p></li>';    
    
    return $rss_split;
  }

  function get_display($numrows) 
  {
    $rss_split = $this->parse();
    $i = 0;
    $rss_data = '';
    while ( $i < $numrows ) 
   {
      $rss_data .= $rss_split[$i];
      $i++;
    }
    $trim = str_replace('', '',$this->feed);
    $user = str_replace('&lang=en-us&format=rss_200','',$trim);
   
    if(trim($rss_data) == "")
    {
       return false;
    }else{
       return $rss_data;
    }
    // returning the whole data
  }
}
?>