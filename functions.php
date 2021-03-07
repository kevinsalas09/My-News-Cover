<?php

function getConnection() {
    $connection = new mysqli('localhost:3306', 'root', '', 'mynewscover');
    if ($connection->connect_errno) {
        printf("Connect failed: %s\n", $connection->connect_error);
        die;
    }
    return $connection;
}

function authenticate($username, $password){
    $conn = getConnection();
    $sql = "SELECT * FROM user WHERE `usuario` = '$username' AND `contraseña` = '$password'";
    $result = $conn->query($sql);
  
    if ($conn->connect_errno) {
        $conn->close();
        return false;
    }
    $conn->close();
    return $result->fetch_array();
}

?>