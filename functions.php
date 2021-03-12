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

function getCatgories()
{
    $conn = getConnection();
    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);

    $conn->close();

    return $result->fetch_all();
}
