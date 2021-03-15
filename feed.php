<?php
require 'functions.php';

session_start();
$user = $_SESSION['user'];

if ($_POST) {
    $name = $_REQUEST['name'];
    $url = $_REQUEST['url'];
    $category = $_REQUEST['category'];
    $user_id = $user['id'];

    $array = array(
        "name" => $name,
        "url" => $url,
        "category" => $category,
        "user_id" => $user_id
    );
    $nuevo = newFeed($array);
    if ($nuevo) {
        echo '<script>location.href = "menu.php"</script>';
    }
}