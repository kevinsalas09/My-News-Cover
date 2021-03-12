<?php
require 'functions.php';

if ($_POST) {
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $array = array(
        "name" => $name,
        "lastname" => $lastname,
        "email" => $email,
        "password" => $password,
    );

    $nuevo = newUser($array);
    if ($nuevo) {
        echo '<script>location.href = "index.php?status=saved"</script>';
    }
}
