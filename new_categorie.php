<?php
session_start();

$user = $_SESSION['user'];
if (!$user) {
    echo '<script>location.href = "index.php"</script>';
}
if ($user['role_id'] != 1) {
    echo '<script>location.href = "menu.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<?php
include 'functions.php';
$categories = getCatgories();
?>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0 6%">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My News Cover</a>
        <div class="d-flex" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    echo $user['first_name']
                    ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    <?php
                    if ($user['role_id'] == 1) {
                        echo "<li><a class='dropdown-item' href='show_categories.php'>Categories</a></li>";
                    } else {
                        echo "<li><a class='dropdown-item' href='show_sources.php'>News Sources</a></li>";
                    }
                    ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="margin-top:3%;">
    <div class="row align-items-center">
        <form method="post" action="categorie.php" class="row g-3">
            <legend>News Categorie</legend>
            <div class="col-md-6">
                <input id="name" class="form-control" type="text" name="name" placeholder="Name">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>