<?php
session_start();

$user = $_SESSION['user'];

include 'functions.php';
//Feed URLs


$info = getUserFeed($user['id']);
$aux = array();
foreach ($info as $links) {
    $link = $links[1];
    $xml = simplexml_load_file($link, null, LIBXML_NOCDATA);
    $entries = array_merge($aux, $xml->xpath("//item"));
    $namespaces = $xml->getNamespaces(true);

    foreach ($entries as $item) {
        $imageAlt = "";
        if($item->children(($namespaces['media']))){
            $media_content = $item->children($namespaces['media']);
        
            foreach ($media_content->content as $i) {
                $imageAlt = (string)$i->attributes()->url;
        }
        }
        else{
            $imageAlt = "https://kknd26.ru/images/no_photo.png";
        }
        $date = "". $item->pubDate;
        $array = array(
            "title" => $item->title,
            "short_description" => $item->description,
            "perman_link" => $item->link,
            "date" => $date,
            "image_link" => $imageAlt,
            "news_source_id" => $links[0],
            "user_id" => $user['id'],
            "category_id" => $links[3]
        );
        addNew($array);
    }
    echo '<script>location.href = "menu.php"</script>';

}
