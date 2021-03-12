<?php
require 'functions.php';
if ($_POST) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $user = authenticate($email, $password);

    if ($user) {
        session_start();
        $_SESSION['user'] = $user;
        echo '<script>location.href = "menu.php"</script>';
    } else {
        echo '<script>location.href = "index.php?status=login"</script>';
    }
}
