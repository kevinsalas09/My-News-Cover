<?php

$url = 'https://rss.nytimes.com/services/xml/rss/nyt/World.xml';
$rss = simplexml_load_file($url, null, LIBXML_NOCDATA);

$namespaces = $rss->getNamespaces(true);


foreach ($rss->channel->item as $item) {

    $media_content = $item->children($namespaces['media']);

    foreach($media_content->content as $i){
        $imageAlt = (string)$i->attributes()->url;
    }
    echo "" . $item->pubDate ."<br>";
    echo '<img src="'.$imageAlt.'"><br>';
    echo "" . $item->title ."<br>";
    echo "" . $item->description ."<br>";
    echo "" . $item->link ."<br>";
    echo "<br><br>";
} 

/*$feed = array();
foreach ($rss->getElementsByTagName('item') as $node) {
$item = array ( 
 'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
 'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
 'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
 'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
 'image' => $node->getElementsByTagName('media:content')->item(0)->getAttribute('url')
 );
array_push($feed, $item);
} 

$limit = 5;
for($x=0;$x<$limit;$x++) {
$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
$link = $feed[$x]['link'];
$description = $feed[$x]['desc'];
$image = $feed[$x]['image'];
$date = date('l F d, Y', strtotime($feed[$x]['date']));
echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
echo '<small><em>Posted on '.$date.'</em></small></p>';
echo '<p>'.$description.'</p>';
echo '<img src="'.$image.'">';
}  */

