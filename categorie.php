<?php
require 'functions.php';

if ($_POST) {
    $name = $_REQUEST['name'];

    $nuevo = newCategorie($name);
    if ($nuevo) {
        echo '<script>location.href = "show_categories.php?status=saved"</script>';
    }
}