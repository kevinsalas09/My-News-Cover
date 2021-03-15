<?php

function getConnection()
{
    $connection = new mysqli('localhost:3306', 'root', '', 'mynewscover');
    if ($connection->connect_errno) {
        printf("Connect failed: %s\n", $connection->connect_error);
        die;
    }
    return $connection;
}

function authenticate($email, $password)
{
    $conn = getConnection();
    $sql = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'";
    $result = $conn->query($sql);

    if ($conn->connect_errno) {
        $conn->close();
        return false;
    }
    $conn->close();
    return $result->fetch_array();
}

function newUser($user)
{
    $conn = getConnection();
    $sql = "INSERT INTO users(`email`, `first_name`, `last_name`, `role_id`, `password`)
            VALUES ('{$user['email']}', '{$user['name']}', '{$user['lastname']}', '1', '{$user['password']}')";
    $conn->query($sql);

    if ($conn->connect_errno) {
        $conn->close();
        return false;
    }

    $conn->close();
    return true;
}

function newCategorie($user)
{
    $conn = getConnection();
    $sql = "INSERT INTO categories(`name`) VALUES ('$user')";
    $conn->query($sql);

    if ($conn->connect_errno) {
        $conn->close();
        return false;
    }

    $conn->close();
    return true;
}

function newFeed($user)
{
    $conn = getConnection();
    $sql = "INSERT INTO news_sources(`url`, `name`, `category_id`, `user_id`) 
            VALUES ('{$user['url']}', '{$user['name']}', '{$user['category']}', '{$user['user_id']}')";
    $conn->query($sql);

    if ($conn->connect_errno) {
        $conn->close();
        return false;
    }

    $conn->close();
    return true;
}

function getCatgories()
{
    $conn = getConnection();
    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);

    $conn->close();

    return $result->fetch_all();
}

function getSources($id)
{
    $conn = getConnection();
    $sql = "SELECT news_sources.id, news_sources.name, categories.name 
            FROM news_sources 
            INNER JOIN categories 
            ON news_sources.category_id = categories.id 
            WHERE news_sources.user_id = $id 
            ORDER BY news_sources.name";
    $result = $conn->query($sql);
    $conn->close();
    return $result->fetch_all();
}

function getUserFeed($id)
{
    $conn = getConnection();
    $sql = "SELECT * FROM news_sources
            WHERE user_id = $id";
    $result = $conn->query($sql);
    $conn->close();
    return $result->fetch_all();
}

function addNew($new)
{
    $conn = getConnection();
    $sql = "INSERT INTO `news`(`title`, `short_description`, `perman_link`, `date`, `image_link`, `news_source_id`, `user_id`, `category_id`) 
            VALUES ('{$new['title']}', '{$new['short_description']}', '{$new['perman_link']}', '{$new['date']}', '{$new['image_link']}',
            '{$new['news_source_id']}', '{$new['user_id']}', '{$new['category_id']}')";
    $conn->query($sql);

    if ($conn->connect_errno) {
        $conn->close();
        return false;
    }

    $conn->close();
    return true;
}

function getNews($id)
{
    $conn = getConnection();
    $sql = "SELECT * FROM news
            WHERE user_id = $id";
    $result = $conn->query($sql);
    $conn->close();
    return $result->fetch_all();
}